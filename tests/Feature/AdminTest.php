<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class AdminTest extends TestCase
{
    protected function tearDown(): void
    {
        Cache::forget('front_page_enabled');
        parent::tearDown();
    }

    public function test_admin_requires_valid_credentials(): void
    {
        $this->get('/admin')->assertOk()->assertSee('Ingresar');

        $this->post('/admin/login', ['username' => 'felipe', 'password' => 'incorrecta'])
            ->assertSessionHasErrors('username');

        $this->post('/admin/login', ['username' => 'felipe', 'password' => 'scarinci'])
            ->assertRedirect('/admin')
            ->assertSessionHas('admin_authenticated', true);
    }

    public function test_authenticated_admin_can_disable_and_enable_home_page(): void
    {
        $this->withSession(['admin_authenticated' => true])
            ->post('/admin/site-status', ['enabled' => '0'])
            ->assertRedirect('/admin');

        $this->get('/')->assertStatus(503)->assertSee('Volvemos pronto');

        $this->withSession(['admin_authenticated' => true])
            ->post('/admin/site-status', ['enabled' => '1'])
            ->assertRedirect('/admin');

        $this->get('/')->assertOk()->assertSee('La cabaña');
    }

    public function test_guests_cannot_change_site_status(): void
    {
        $this->post('/admin/site-status', ['enabled' => '0'])->assertForbidden();
        $this->get('/')->assertOk();
    }
}
