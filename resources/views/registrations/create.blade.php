@extends('layouts.app')

@section('title', 'Register · Taylor Swift Concert Ticket Registration')

@section('content')
    <main class="registration-page">
        <div class="registration-intro">
            <a class="back-link" href="{{ route('home') }}">← Back to the night</a>
            <p class="eyebrow">Your little piece of the daydream</p>
            <h1>Let’s make this <em>imaginary.</em></h1>
            <p>Fill in the details below to try the demo registration flow. Your submission is stored only in this demo database.</p>
            <div class="mini-event-card">
                <span class="mini-event-icon">✧</span>
                <div><strong>18 July 2027</strong><span>Luminous Garden, Jakarta</span></div>
                <span class="demo-chip">DEMO</span>
            </div>
            <p class="privacy-note">This is a portfolio/demo project. Completing the form does not reserve, purchase, or issue a ticket.</p>
        </div>

        <section class="form-card" aria-labelledby="registration-heading">
            <div class="form-heading">
                <p class="eyebrow">A few things about you</p>
                <h2 id="registration-heading">Registration details</h2>
                <p>Fields marked with <span class="required-mark">*</span> are required.</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger form-alert" role="alert">
                    <strong>Almost there!</strong> Please check the highlighted fields and try again.
                </div>
            @endif

            <form method="POST" action="{{ route('registrations.store') }}" novalidate>
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="full_name">Full name <span class="required-mark">*</span></label>
                    <input class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name"
                           type="text" value="{{ old('full_name') }}" autocomplete="name" maxlength="120" required
                           aria-describedby="full_name_error">
                    @error('full_name')
                        <div class="invalid-feedback" id="full_name_error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email">Email address <span class="required-mark">*</span></label>
                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                           type="email" value="{{ old('email') }}" autocomplete="email" maxlength="255" required
                           aria-describedby="email_error">
                    @error('email')
                        <div class="invalid-feedback" id="email_error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phone">Phone number <span class="required-mark">*</span></label>
                    <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                           type="tel" value="{{ old('phone') }}" autocomplete="tel" maxlength="25"
                           placeholder="+62 812 3456 7890" required aria-describedby="phone_help phone_error">
                    <div class="form-text" id="phone_help">Include your country code if you like.</div>
                    @error('phone')
                        <div class="invalid-feedback" id="phone_error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row g-3">
                    <div class="col-sm-7 mb-3">
                        <label class="form-label" for="ticket_category">Ticket category <span class="required-mark">*</span></label>
                        <select class="form-select @error('ticket_category') is-invalid @enderror" id="ticket_category"
                                name="ticket_category" required aria-describedby="ticket_category_error">
                            @foreach ($ticketCategories as $key => $category)
                                <option value="{{ $key }}" data-price="{{ $category['price'] }}"
                                    @selected(old('ticket_category', 'lavender-haze') === $key)>
                                    {{ $category['label'] }} — Rp {{ number_format($category['price'], 0, ',', '.') }}
                                </option>
                            @endforeach
                        </select>
                        @error('ticket_category')
                            <div class="invalid-feedback" id="ticket_category_error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-5 mb-3">
                        <label class="form-label" for="ticket_quantity">Tickets <span class="required-mark">*</span></label>
                        <input class="form-control @error('ticket_quantity') is-invalid @enderror" id="ticket_quantity"
                               name="ticket_quantity" type="number" min="1" max="4"
                               value="{{ old('ticket_quantity', 1) }}" required aria-describedby="quantity_help ticket_quantity_error">
                        <div class="form-text" id="quantity_help">Up to 4 per registration.</div>
                        @error('ticket_quantity')
                            <div class="invalid-feedback" id="ticket_quantity_error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="price-preview" aria-live="polite">
                    <span>Illustrative total</span>
                    <strong id="price_total">Rp 2.750.000</strong>
                </div>
                <p class="form-disclaimer">Demo pricing only. No payment will be collected and no real ticket will be issued.</p>
                <button class="btn btn-rose submit-button" type="submit">Complete demo registration <span aria-hidden="true">↗</span></button>
            </form>
        </section>
    </main>
@endsection
