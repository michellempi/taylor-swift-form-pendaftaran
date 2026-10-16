@extends('layouts.app')

@section('title', 'Taylor Swift Concert Ticket Registration')

@section('content')
    <main>
        <section class="hero-section">
            <div class="hero-copy">
                <p class="eyebrow"><span class="eyebrow-star">✳</span> A night written in starlight</p>
                <h1>Taylor Swift<br><span>Concert Ticket</span><br>Registration</h1>
                <p class="hero-description">
                    One imaginary night. All your favorite eras. Make a little room in your calendar for the
                    daydream.
                </p>
                <a class="btn btn-rose btn-lg" href="{{ route('registrations.create') }}">
                    Register Now <span aria-hidden="true">↗</span>
                </a>
                <p class="hero-note">A fan-made registration demo · No real tickets are issued</p>
            </div>

            <div class="hero-art" aria-label="Abstract pastel illustration inspired by a concert night" role="img">
                <div class="art-glow"></div>
                <div class="art-orbit orbit-one"></div>
                <div class="art-orbit orbit-two"></div>
                <span class="art-star star-one">✳</span>
                <span class="art-star star-two">✦</span>
                <span class="art-star star-three">✧</span>
                <div class="art-ticket">
                    <span class="ticket-kicker">ONE NIGHT · ALL ERAS</span>
                    <span class="ticket-name">Meet me<br>under the<br><em>daylight.</em></span>
                    <span class="ticket-rule"></span>
                    <span class="ticket-detail">JAKARTA · 18 JULY 2027</span>
                    <span class="ticket-stamp">DEMO<br>ONLY</span>
                </div>
                <p class="art-caption">a little love letter to live music <span>♡</span></p>
            </div>
        </section>

        <section class="event-strip" id="the-night" aria-label="Concert demo details">
            <div class="event-detail">
                <span class="detail-icon">⌖</span>
                <div>
                    <span class="detail-label">THE CITY</span>
                    <strong>Luminous Garden, Jakarta</strong>
                </div>
            </div>
            <div class="event-detail">
                <span class="detail-icon">◷</span>
                <div>
                    <span class="detail-label">THE DATE</span>
                    <strong>18 July 2027 · 6:00 PM</strong>
                </div>
            </div>
            <div class="event-detail">
                <span class="detail-icon">✧</span>
                <div>
                    <span class="detail-label">THE FEELING</span>
                    <strong>One night, every era</strong>
                </div>
            </div>
        </section>

        <section class="eras-section" id="tickets">
            <div class="section-heading">
                <p class="eyebrow">Pick your night</p>
                <h2>A little something for <em>every era.</em></h2>
                <p>Choose the view you would love most in this fictional concert experience.</p>
            </div>
            <div class="ticket-grid">
                <article class="ticket-card card-gold">
                    <span class="card-number">01 / CLOSE TO THE MAGIC</span>
                    <h3>Golden Hour</h3>
                    <p>Front-of-stage access for your main-character moment.</p>
                    <strong class="ticket-price">Rp 4.250.000 <small>/ ticket</small></strong>
                </article>
                <article class="ticket-card card-lilac">
                    <span class="card-number">02 / IN A LAVENDER HAZE</span>
                    <h3>Lavender Haze</h3>
                    <p>An elevated view with room to dance all night long.</p>
                    <strong class="ticket-price">Rp 2.750.000 <small>/ ticket</small></strong>
                </article>
                <article class="ticket-card card-peach">
                    <span class="card-number">03 / RIGHT WHERE YOU ARE</span>
                    <h3>Daylight</h3>
                    <p>A lovely seat for singing every word with your friends.</p>
                    <strong class="ticket-price">Rp 1.650.000 <small>/ ticket</small></strong>
                </article>
            </div>
            <p class="pricing-note">Illustrative demo prices only. This website is not affiliated with the artist or her team.</p>
        </section>

        <section class="closing-cta">
            <span class="cta-sparkle" aria-hidden="true">✦</span>
            <div>
                <p class="eyebrow">Your next favorite memory (in theory)</p>
                <h2>Ready to make a little <em>magic?</em></h2>
            </div>
            <a class="btn btn-rose" href="{{ route('registrations.create') }}">Start your registration <span aria-hidden="true">↗</span></a>
        </section>
    </main>
@endsection
