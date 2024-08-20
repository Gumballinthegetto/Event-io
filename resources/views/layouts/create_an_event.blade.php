@extends('layouts.main')
@section('content')
<!-- CREATE AN EVENT HERO SECTION -->
<div class="create-an-event-hero-container">
    <div class="create-an-event-hero-left-container">
        <div class="create-an-event-hero-title-container">
            <h1 class="create-an-event-hero-title uppercase">Create your own event</h1>
        </div>
        <hr class="honey-comb-divider large-100">
        <button class="point-to-create-an-event-form arrow-round-button">
            <a href="#create-an-event-form-container">
                <img class="arrow-icon-90-deg" src="/assets/icons/arrow.png" alt="arrow icon">
            </a>
        </button>
    </div>
    <div class="create-an-event-hero-right-container">
        <img class="create-an-event-hero-img" src="{{ asset('assets/images/4161140.jpg') }}" alt="Hero image">
    </div>
</div>
<!-- CREATE AN EVENT FORM SECTION -->
<div class="create-an-event-form-container" id="create-an-event-form-container" >
    <form class="create-an-event-form" action="" method="POST">
        <div class="create-an-event-form-top-nav-container">
            <div class="create-an-event-form-top-nav-container-left-container">
                <h3 class="create-an-event-form-title uppercase">Create an event</h3>
                <span class="create-an-event-form-title-description">Please fill out these information below</span>
                <hr class="pitch-black-divider">
            </div>
            <div class="create-an-event-form-top-nav-container-right-container">
                <ul class="form-top-nav-list">
                    <li class="form-top-nav-item">
                        <a href="{{ route('create_an_event') }}">
                            <img class="icon-40" src="{{ asset('assets/icons/circle-1.png') }}" alt="one">
                        </a>
                    </li>
                    <li class="form-top-nav-item">
                        <a href="{{ route('create_an_event_detail') }}">
                            <img class="icon-40" src="{{ asset('assets/icons/circle-2.png') }}" alt="two">
                        </a>
                    </li>
                    <li class="form-top-nav-item">
                        <a href="{{ route('create_an_event_ticket') }}">
                            <img class="icon-40" src="{{ asset('assets/icons/circle-3.png') }}" alt="three">
                        </a>
                    </li>
                    <li class="form-top-nav-item">
                        <a href="{{ route('create_an_event_preview_event') }}">
                            <img class="icon-40" src="{{ asset('assets/icons/circle-4.png') }}" alt="four">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @yield('second_content')
        <div class="save-and-next-btn-container button-container">
            <button type="submit" id="create-an-event-save-btn standard-btn" class="create-an-event-save-btn">Save</button>
            <a href="#" class="create-an-event-next-btn standard-btn">Next</a>
        </div>
    </form>
</div>
@endsection