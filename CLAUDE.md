# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

LaravelHelp is the landing page for LaravelHelp.com — a marketing site with a contact/question submission form, built with Laravel 12 and Livewire 3. Served locally by Herd at `https://laravelhelp.test`.

## Common Commands

```bash
# Development (runs server, queue, logs, and vite concurrently)
composer dev

# Tests (PHPUnit, not Pest)
php artisan test
php artisan test tests/Feature/ExampleTest.php    # Run specific file
php artisan test --filter=test_name               # Filter by name

# Code formatting
./vendor/bin/pint         # Format all PHP files
./vendor/bin/pint --dirty # Format only changed files
composer format           # Alias for pint

# Frontend assets
npm run dev    # Vite dev server with hot reload
npm run build  # Production build
```

## Architecture

There is a single route (`/` → `resources/views/welcome.blade.php`). The one interactive feature is the contact form.

### Contact Form Flow

1. `SendQuestionModalComponent` (`app/Livewire/`) renders the question modal and validates input.
2. Spam protection is two-layered: Spatie Honeypot (`UsesSpamProtection` trait + `HoneypotData`) and Google reCAPTCHA via the `captcha` validation rule (anhskohbo/no-captcha).
3. Validated data is wrapped in the `ContactRequestData` DTO (`app/Data/`) and passed to `SendContactRequestAction` (`app/Actions/`), which stores a `ContactRequest` row and emails `QuestionReceivedNotification`.
4. Recipient addresses come from `config('config.support_email')` — a custom `config/config.php` file (note the doubled `config.` key prefix).

### Modal / Event Bridge

Modals are opened and closed through events, not direct method calls:
- JS → Livewire: `openSendQuestionModal`, `closeSendQuestionModalEvent` (handled with `#[On(...)]` attributes).
- Livewire → JS: `questionSentSuccessfully`, `questionSendFailed`, `modalOpened` browser events, handled by scripts in the Blade views. The modal intentionally stays open after successful submit so JS can show the success message.

The reCAPTCHA widget is not rendered by a package: inline JS at the bottom of `welcome.blade.php` listens for `modalOpened`, calls `grecaptcha.render()`/`reset()` manually, and syncs the token into the component's `recaptcha` property. All landing page markup and this modal/captcha JS live in that single ~2,000-line Blade file.

Other modals (`modal-schedule-free-consultation`, `modal-help-me-now` in `resources/views/components/`) are plain Blade components; the consultation modal embeds a Calendly widget.

### Frontend: Two Asset Systems

The landing page's actual styling is a static Bootstrap 5 template in `public/assets/` (`style.css`, `responsive.css`, Swiper, GSAP, jQuery Waypoints) plus CDN assets (Remix Icons, Odometer, Calendly). Tailwind CSS 4 via Vite exists (`resources/css/app.css`) but the landing page does not use it — when changing page styling, edit `public/assets/css/`, not the Tailwind entry point.

### Gotchas

- `src/Domain/` is **not autoloaded** (no PSR-4 mapping in composer.json) and contains only an empty placeholder class. Put all code in `app/`.
- Database is SQLite; mail defaults to the `log` driver locally.
- Two installed packages are unused: spatie/laravel-data (DTOs are plain PHP classes with a `fromArray()` factory) and dutchcodingcompany/livewire-recaptcha (the `captcha` rule comes from anhskohbo/no-captcha).
- `resources/views/privacy-policy.blade.php` exists but no route or link references it.

## Code Language Policy

ALL code must be written in English (variable names, function names, class names, comments, documentation, commit messages) regardless of request language.
