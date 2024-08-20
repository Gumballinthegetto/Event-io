@extends('layouts.main')
@section('content')
<!-- HERO SECTION -->
<div class="hero-container">
    <div class="hero-inner-container">
        <div class="hero-left-side">
            <h1 class="hero-title uppercase">Event.io</h1>
            <hr class="honey-comb-divider large-160">
            <div class="hero-title-description-container">
                <h2 class="hero-title-description uppercase">
                    We create the next level creation.
                </h2>
            </div>
            <button class="point-to-our-mission-section arrow-round-button">
                <a href="#our-mission-section">
                    <img class="arrow-icon-90-deg" src="/assets/icons/arrow.png" alt="arrow icon">
                </a>
            </button>
        </div>
        <div class="hero-right-side">
            <hr class="pitch-black-divider large-100">
            <div class="logo-large">
                <a href="#">
                    <img src="/assets/icons/event_io.png" alt="Logo">
                </a>
                <span class="logo-slogan-large uppercase">- We frame it for you -</span>
            </div>
        </div>
    </div>
</div>
<!-- OUR MISSION SECTION -->
<div class="our-mission-container" id="our-mission-section">
    <div class="our-mission-left-side">
        <img class="our-mission-left-side-image" src="/assets/images/mission.jpeg" alt="mission image">
    </div>
    <div class="our-mission-right-side">
        <div class="our-mission-title-container">
            <h3 class="our-mission-title uppercase">Our mission</h3>
            <hr class="honey-comb-divider">
            <span class="our-mission-title-description">peak creativity</span>
        </div>
        <div class="our-mission-description-container">
            <div class="our-mission-description-top-container">
                <p>
                    Event.io is a modern event management website that allows anyone to share, create, find, and attend events that fuel their passions and enrich their lives.
                </p>
            </div>
            <hr class="pitch-black-divider">
            <div class="our-mission-description-bottom-container">
                <p>
                    Our main priority is to see your participation on creating as well as attending events by choosing our platform with our effective form of involving people in product promotion with modern website.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- INITIAL EVENT POP UP SECTION -->
<div class="initial-event-pop-up-container">
    <div class="initial-event-pop-up-left-container">
        <p class="initial-event-pop-up-description bold">
            “
            WE INVITE YOU
            TO THE OPEN
            DAYS OF THE 
            EVENT ABOUT
            ART AND
            DESIGN.
        </p>
        <span class="initial-event-pop-up-user">
            FROM (REDACTED) ORGANIZER -
        </span>
    </div>
    <div class="initial-event-pop-up-right-container">
        <img src="{{ asset('assets/images/modern_art.jpeg') }}" alt="modern art image">
    </div>
    <hr class="pitch-black-divider large-100">
    <button class="initial-event-pop-up-button arrow-rectangle-button">
        <a href="{{ route('browse_events_subpage') }}">
            <span class="initial-event-pop-up-enter uppercase">Enter</span>
            <img class="arrow-icon" src="/assets/icons/arrow.png" alt="arrow icon">
        </a>
    </button>
</div>
<!-- HOST OR DISCOVER SECTION -->
<div class="host-or-discover-container">
    <a href="{{ route('create_an_event') }}">
        <div class="host-container">
            <div class="host-text-container">
                <h2 class="host-text uppercase">Host</h2>
                <span class="host-text-description">Organize an event</span>
            </div>
        </div>
    </a>
    <a href="{{ route('browse_events') }}">
        <div class="discover-container">
            <div class="discover-text-container">
                <h2 class="discover-text uppercase">Discover</h2>
                <span class="discover-text-description">Find your next experience</span>
            </div>
        </div>
    </a>
</div>
@endsection