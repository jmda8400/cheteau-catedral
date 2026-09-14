<?php
namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_is_available(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Las cabañas')
            ->assertSee('Tu próxima escapada')
            ->assertSee('El departamento')
            ->assertSee('La reserva no tiene devolución')
            ->assertSee('fotos departamento/20200730_181247.jpg')
            ->assertSee('WhatsApp Video 2026-09-09 at 16.34.09.mp4')
            ->assertSee('ee7d3680-b6a2-4cad-b2a2-88f6d3e60f4f.png')
            ->assertSee('whatsapp-icon')
            ->assertSee('Martín Jereb 9857')
            ->assertSee('output=embed', false)
            ->assertDontSee('Recorré cada alojamiento por separado')
            ->assertDontSee('Elegí tu alojamiento para ver el mapa')
            ->assertSee('linkedin.com/in/juanmanueldiazarbues', false);
    }

    public function test_each_supported_language_can_be_selected(): void
    {
        $this->get('/?lang=en')
            ->assertOk()
            ->assertSee('The cabins')
            ->assertSee('Your next getaway');

        $this->get('/?lang=pt')
            ->assertOk()
            ->assertSee('As cabanas')
            ->assertSee('Sua próxima viagem');
    }

    public function test_booking_links_open_whatsapp_and_gallery_has_no_captions(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee(config('chateau.whatsapp'), false)
            ->assertSee('class="nav-book"', false)
            ->assertSee('data-language-link', false)
            ->assertDontSee('data-lightbox-caption', false);
    }

    public function test_sections_follow_the_requested_order_and_show_both_locations(): void
    {
        $response = $this->get('/')->assertOk();
        $content = $response->getContent();

        $this->assertLessThan(strpos($content, 'id="departamento"'), strpos($content, 'id="cabanas"'));
        $this->assertLessThan(strpos($content, 'id="comodidades"'), strpos($content, 'id="departamento"'));

        $response
            ->assertSee('Las Cabañas')
            ->assertSee('El Departamento')
            ->assertSee('Ubicaciones')
            ->assertSee('Latitud Catedral')
            ->assertSee('google.com/maps/dir/', false)
            ->assertSee('Mapa interactivo de las cabañas Chateau Catedral')
            ->assertSee('Mapa interactivo del departamento Latitud Catedral');
    }
}
