<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    public function test_hero_shows_the_ai_powered_badge(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('AI-Powered Laravel Development');
        $response->assertSee('AI-accelerated development');
    }

    public function test_tech_stack_section_uses_first_person_and_mentions_mcp(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Tools I Master');
        $response->assertDontSee('Tools We Master');
        $response->assertSee('MCP Servers');
    }

    public function test_tech_stack_includes_cv_technologies(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Payments & Fintech', false);
        $response->assertSee('Stripe');
        $response->assertSee('PayPal');
        $response->assertSee('Plaid');
        $response->assertSee('Synctera');
        $response->assertSee('Node.js');
        $response->assertSee('Python');
        $response->assertSee('MongoDB');
        $response->assertSee('MeiliSearch');
        $response->assertSee('Algolia');
    }

    public function test_hero_shows_open_to_work_message_with_cv_link(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Looking for a lead for your team');
        $response->assertSee('Open to full-time roles');
        $response->assertSee('Download my CV');
        $response->assertSee('cv.pdf" target="_blank"', false);
    }

    public function test_booking_uses_google_calendar_instead_of_calendly(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('calendar.app.google/dkJ2j79RxDEi92uc6');
        $response->assertDontSee('calendly.com');
        $response->assertDontSee('Calendly');
    }

    public function test_question_modal_and_its_wiring_are_removed(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertDontSee('openSendQuestionModal', false);
        $response->assertDontSee('Ask Your Question');
        $response->assertDontSee('recaptcha-container', false);
        $response->assertDontSee('questionSentSuccessfully', false);
        // Typed.js shares the same script block and must survive
        $response->assertSee('common-problems', false);
    }

    public function test_page_is_static_with_no_livewire_or_recaptcha_runtime(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertDontSee('livewire/livewire.js', false);
        $response->assertDontSee('recaptcha/api.js', false);
        // Typed.js must run without Livewire on a static host
        $response->assertSee("addEventListener('DOMContentLoaded'", false);
        $response->assertDontSee("addEventListener('livewire:init'", false);
    }

    public function test_favicon_links_resolve_against_current_host(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('assets/img/favicon.ico', false);
        $response->assertDontSee('laravelhelp.com/assets/img/favicon.ico', false);
        $response->assertDontSee('rel="apple-touch-icon" href="https://laravelhelp.com', false);
    }

    public function test_contact_email_is_personal_gmail(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('afpinedac@gmail.com');
        $response->assertDontSee('contact@laravelhelp.com');
    }

    public function test_hero_shows_copyable_email_instead_of_question_button(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('or send me an email to');
        $response->assertSee('user-select-all', false);
        $response->assertDontSee('copyContactEmail', false);
        $response->assertDontSee('mailto:afpinedac@gmail.com', false);
    }

    public function test_site_copy_uses_first_person_singular(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Why Choose Me?');
        $response->assertDontSee('Why Choose Us?');
        $response->assertSee('What I Offer');
        $response->assertDontSee('What We Offer');
        $response->assertSee('My Achievements');
        $response->assertDontSee('Our Achievements');
        $response->assertSee('About Me');
        $response->assertDontSee('Send us a question');
    }
}
