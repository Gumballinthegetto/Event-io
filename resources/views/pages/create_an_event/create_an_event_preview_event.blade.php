@extends('layouts.create_an_event')
@section('second_content')
<!-- PREVIEW EVENT INFO -->
<div class="create-an-event-preview-event-container">
    <div class="preview-event-left-container">
        <img src="{{ asset('assets/images/event_subpage_thumbnail.jpg') }}" alt="">
    </div>
    <div class="preview-event-right-container">
        <div class="preview-event-inner-right-container">
            <h4 class="preview-event-title">Remembrance Photo Event</h4>
            <p class="preview-event-date">Sunday, May 28, 2023 at 7:00 PM +07</p>
            <p class="preview-event-location">1159 National Road 2, Phnom Penh, Phnom Penh</p>
            <div class="preview-event-ticket-and-quantity-container">
                <div class="preview-event-ticket-container">
                    <img class="icon-30" src="{{ asset('assets/icons/tickets.png') }}" alt="">
                    <span>Free</span>
                </div>
                <div class="preview-event-quantity-container">
                    <img class="icon-30" src="{{ asset('assets/icons/user.png') }}" alt="">
                    <span>10</span>
                </div>
            </div>
            <p class="preview-event-summary">
                Waste summit 2023 is organizing KASPOP x DMC Photo Festival Photo Contest 2023 under the theme
                “Waste for Life”. The competition requires participants to be: ...
            </p>
        </div>
        <a href="{{ route('create_an_event_preview_event_subpage') }}">
            <div class="preview-now-container">
                <span class="uppercase">Preview now</span>
            </div>
        </a>
    </div>
</div>
@endsection