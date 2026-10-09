@extends('layouts.app')

@section('title', 'Registration received · Concert Night demo')

@section('content')
    <main class="confirmation-page">
        <div class="confirmation-card">
            <div class="confirmation-icon" aria-hidden="true">✳</div>
            <p class="eyebrow">A little note from the daydream</p>
            <h1>You’re on the <em>demo list!</em></h1>
            <p class="confirmation-copy">
                Thanks, {{ $registration->full_name }}. Your sample registration has been saved to this demo project.
            </p>
            <div class="confirmation-details">
                <div><span>EVENT</span><strong>Taylor Swift Concert · Demo</strong></div>
                <div><span>DATE & PLACE</span><strong>18 July 2027 · Luminous Garden, Jakarta</strong></div>
                <div><span>TICKET TIER</span><strong>{{ $ticketCategory['label'] }} × {{ $registration->ticket_quantity }}</strong></div>
                <div><span>ILLUSTRATIVE TOTAL</span><strong>Rp {{ number_format($registration->unit_price * $registration->ticket_quantity, 0, ',', '.') }}</strong></div>
            </div>
            <div class="confirmation-notice">
                This confirmation is for demonstration only. It is not a booking, payment receipt, or real ticket, and it does not represent an official event.
            </div>
            <a class="btn btn-rose" href="{{ route('home') }}">Back to the home page <span aria-hidden="true">↗</span></a>
        </div>
    </main>
@endsection
