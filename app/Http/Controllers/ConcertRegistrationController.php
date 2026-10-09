<?php

namespace App\Http\Controllers;

use App\Models\ConcertRegistration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ConcertRegistrationController extends Controller
{
    public function home(): View
    {
        return view('welcome');
    }

    public function create(): View
    {
        return view('registrations.create', [
            'ticketCategories' => ConcertRegistration::TICKET_CATEGORIES,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:25', 'regex:/^\+?[0-9\s().-]{8,20}$/'],
            'ticket_category' => ['required', 'string', Rule::in(array_keys(ConcertRegistration::TICKET_CATEGORIES))],
            'ticket_quantity' => ['required', 'integer', 'min:1', 'max:4'],
        ]);

        $category = ConcertRegistration::TICKET_CATEGORIES[$validated['ticket_category']];

        $registration = ConcertRegistration::create([
            ...$validated,
            'unit_price' => $category['price'],
        ]);

        return redirect()
            ->route('registrations.confirmation')
            ->with('registration_confirmation_id', $registration->id);
    }

    public function confirmation(Request $request): View|RedirectResponse
    {
        $registrationId = $request->session()->pull('registration_confirmation_id');

        if (! $registrationId) {
            return redirect()->route('home');
        }

        $registration = ConcertRegistration::findOrFail($registrationId);

        return view('registrations.confirmation', [
            'registration' => $registration,
            'ticketCategory' => ConcertRegistration::TICKET_CATEGORIES[$registration->ticket_category],
        ]);
    }
}
