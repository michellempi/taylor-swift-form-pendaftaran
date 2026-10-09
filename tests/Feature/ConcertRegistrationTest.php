<?php

namespace Tests\Feature;

use App\Models\ConcertRegistration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConcertRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_and_registration_form_are_available(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Taylor Swift')
            ->assertSee('bukan situs resmi')
            ->assertSee(route('registrations.create'));

        $this->get(route('registrations.create'))
            ->assertOk()
            ->assertSee('name="_token"', false)
            ->assertSee('name="ticket_category"', false)
            ->assertSee('name="ticket_quantity"', false);
    }

    public function test_valid_registration_is_saved_and_confirmation_is_session_scoped(): void
    {
        $response = $this->post(route('registrations.store'), [
            'full_name' => 'Taylor Fan',
            'email' => 'fan@example.com',
            'phone' => '+62 812 3456 7890',
            'ticket_category' => 'lavender-haze',
            'ticket_quantity' => 2,
        ]);

        $response->assertRedirect(route('registrations.confirmation'));
        $response->assertSessionHas('registration_confirmation_id');
        $this->assertDatabaseHas('concert_registrations', [
            'full_name' => 'Taylor Fan',
            'email' => 'fan@example.com',
            'ticket_category' => 'lavender-haze',
            'ticket_quantity' => 2,
            'unit_price' => 2750000,
        ]);

        $this->get(route('registrations.confirmation'))
            ->assertOk()
            ->assertSee('You’re on the')
            ->assertSee('Rp 5.500.000')
            ->assertSee('not a booking');

        $this->get(route('registrations.confirmation'))
            ->assertRedirect(route('home'));
    }

    public function test_invalid_registration_is_rejected_without_saving(): void
    {
        $this->from(route('registrations.create'))
            ->post(route('registrations.store'), [
                'full_name' => '',
                'email' => 'not-an-email',
                'phone' => 'letters-only',
                'ticket_category' => 'backstage',
                'ticket_quantity' => 5,
            ])
            ->assertRedirect(route('registrations.create'))
            ->assertSessionHasErrors([
                'full_name',
                'email',
                'phone',
                'ticket_category',
                'ticket_quantity',
            ]);

        $this->assertDatabaseCount('concert_registrations', 0);
    }

    public function test_ticket_price_is_derived_from_the_selected_server_side_category(): void
    {
        $this->post(route('registrations.store'), [
            'full_name' => 'Demo Guest',
            'email' => 'guest@example.com',
            'phone' => '081234567890',
            'ticket_category' => 'golden-hour',
            'ticket_quantity' => 1,
            'unit_price' => 1,
        ])->assertRedirect(route('registrations.confirmation'));

        $this->assertDatabaseHas('concert_registrations', [
            'email' => 'guest@example.com',
            'unit_price' => ConcertRegistration::TICKET_CATEGORIES['golden-hour']['price'],
        ]);
    }
}
