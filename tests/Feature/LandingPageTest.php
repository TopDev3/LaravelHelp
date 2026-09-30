<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    public function test_hero_leads_with_the_headline_and_no_ai_claims(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        // The hero opens straight on the headline; the AI badge and bullet are gone.
        $response->assertSee('Is your Laravel app', false);
        $response->assertSee('Book a free Laravel code audit', false);
        $response->assertDontSee('AI-Powered Laravel Development');
        $response->assertDontSee('AI-accelerated development');
        $response->assertDontSee('hero__badge', false);
    }

    public function test_landing_page_has_no_payments_or_fintech_positioning(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        // The landing page targets general Laravel consulting, not a payments niche.
        foreach (['Fintech', 'fintech', 'Payments &', 'payout', 'KYC', 'KYB', 'Plaid', 'Synctera', 'Checkbook', 'ZumRails'] as $term) {
            $response->assertDontSee($term, false);
        }
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
        $response->assertSee('Node.js');
        $response->assertSee('Python');
        $response->assertSee('MongoDB');
        $response->assertSee('MeiliSearch');
        $response->assertSee('Algolia');
    }

    public function test_hero_has_no_open_to_work_message(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertDontSee('Open to full-time roles');
        $response->assertDontSee('Download my CV');
    }

    public function test_booking_uses_cal_com_popup(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('https://app.cal.com/embed/embed.js', false);
        $response->assertSee('calLink: "laravel-help/30min"', false);
        $response->assertDontSee('calendar.app.google');
        $response->assertDontSee('calendly.com');
    }

    public function test_ads_conversion_fires_on_confirmed_booking_not_on_click(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeInOrder([
            'action: "bookingSuccessfulV2"',
            "'send_to': 'AW-799679405/2NUBCMPYrdgbEK3HqP0C'",
            'function bookConsultation()',
        ], false);
        $this->assertSame(1, substr_count($response->getContent(), "gtag('event', 'conversion'"));
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
