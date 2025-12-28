# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

LaravelHelp is the main landing page for LaravelHelp.com - a simple contact/question submission site built with Laravel 12 and Livewire 3.

## Common Commands

```bash
# Development server (runs server, queue, logs, and vite concurrently)
composer dev

# Run tests
php artisan test
php artisan test tests/Feature/ExampleTest.php    # Run specific file
php artisan test --filter=test_name               # Filter by name

# Code formatting
./vendor/bin/pint         # Format all PHP files
./vendor/bin/pint --dirty # Format only changed files
composer format           # Alias for pint

# Frontend assets
npm run dev    # Development with hot reload
npm run build  # Production build
```

## Architecture

This is a minimal Laravel 12 application with a single main feature: contact form submission.

### Key Patterns

- **Actions Pattern**: Business logic encapsulated in `app/Actions/` (e.g., `SendContactRequestAction`)
- **Data Transfer Objects**: `app/Data/` contains DTOs for structured data passing (e.g., `ContactRequestData`)
- **Livewire Components**: Interactive UI in `app/Livewire/` (e.g., `SendQuestionModalComponent`)
- **Domain Layer**: `src/Domain/` exists but is mostly empty (placeholder for DDD expansion)

### Core Flow

1. User submits question via `SendQuestionModalComponent` (Livewire)
2. Form uses Spatie Honeypot + reCAPTCHA for spam protection
3. `SendContactRequestAction` stores request in database and sends email notification

### Tech Stack

- Laravel 12, PHP 8.2+
- Livewire 3
- Tailwind CSS 4 (via Vite)
- PHPUnit for testing
- Spatie Honeypot + anhskohbo/no-captcha for spam protection
- spatie/laravel-data available (though custom DTOs currently used)

## Code Language Policy

ALL code must be written in English (variable names, function names, class names, comments, documentation, commit messages) regardless of request language.
