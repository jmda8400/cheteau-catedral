<?php
namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_is_available(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('La cabaña')
            ->assertSee('Tu próxima escapada')
            ->assertSee('WhatsApp Video 2026-09-09 at 16.34.09.mp4')
            ->assertSee('ee7d3680-b6a2-4cad-b2a2-88f6d3e60f4f.png')
            ->assertSee('whatsapp-icon');
    }

    public function test_each_supported_language_can_be_selected(): void
    {
        $this->get('/?lang=en')
            ->assertOk()
            ->assertSee('The cabin')
            ->assertSee('Your next getaway');

        $this->get('/?lang=pt')
            ->assertOk()
            ->assertSee('A cabana')
            ->assertSee('Sua próxima viagem');
    }

    public function test_booking_links_open_whatsapp_and_gallery_has_no_captions(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee(config('chateau.whatsapp'), false)
            ->assertSee('class="nav-book"', false)
            ->assertDontSee('data-lightbox-caption', false);
    }
}
