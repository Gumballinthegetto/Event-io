@extends('layouts.create_an_event')
@section('second_content')
<!-- BASIC INFO -->
<div class="create-an-event-form-basic-info-container">
    <div class="basic-info-left-container">
        <img class="icon-30" src="{{ asset('assets/icons/info.png') }}" alt="">
        <h4 class="form-basic-info-title capitalize">Basic info</h4>
        <hr class="honey-comb-divider">
    </div>
    <div class="basic-info-right-container">
        <p class="form-basic-info-title-description">
            Name your event and event-goers why they should come. Add details that highlight what makes it unique.
        </p>
        <hr class="pitch-black-divider">
    </div>
</div>
<div class="cornered-border-form-container">
    <label for="event-title" class="capitalize">Event title <span class="danger">*</span></label>
    <input type="text" 
           id="event-title" 
           name="event-title" 
           class="basic-info-event-title input-box"
           placeholder="e.g. Photo Exibition">
    <div class="type-and-category-container">
        <div class="type-container">
            <label for="type">Type</label>
            <select name="type" class="basic-info-type input-box" id="type">
                <option value="">Select a type</option>
            </select>
        </div>
        <div class="category-container">
            <label for="category">Category</label>
            <select name="category" class="basic-info-category input-box" id="category">
                <option value="">Select a category</option>
            </select>
        </div>
    </div>
</div>
<!-- LOCATION INFO -->
<div class="create-an-event-form-location-info-container">
    <div class="location-info-left-container">
        <img class="icon-30" src="{{ asset('assets/icons/location.png') }}" alt="">
        <h4 class="form-location-info-title capitalize">Location</h4>
        <hr class="honey-comb-divider">
    </div>
    <div class="location-info-right-container">
        <p class="form-location-info-title-description">
            Help people in the area discover your event and let attendees know where to show up.
        </p>
        <hr class="pitch-black-divider">
    </div>
</div>
<div class="cornered-border-form-container">
    <label for="venue-location" class="capitalize">Venue location</label>
    <input type="text" id="venue-location" class="location-info-venue-location-name input-box" placeholder="e.g. Factory Phnom Penh">
</div>
<!-- DATE AND TIME INFO -->
<div class="create-an-event-form-date-and-time-info-container">
    <div class="date-and-time-info-left-container">
        <img class="icon-30" src="{{ asset('assets/icons/date_time.png') }}" alt="">
        <h4 class="form-date-and-time-info-title capitalize">Date and time</h4>
        <hr class="honey-comb-divider">
    </div>
    <div class="date-and-time-info-right-container">
        <p class="form-date-and-time-info-title-description">
            Tell event-goers when your event starts and ends so they can plans to attend.
        </p>
        <hr class="pitch-black-divider">
    </div>
</div>
<div class="cornered-border-form-container">
    <div class="event-start-and-start-time-container">
        <div class="event-start-container">
            <label for="event-start" class="capitalize">Event start <span class="danger">*</span></label>
            <input type="date" class="event-start input-box">
        </div>
        <div class="start-time-container">
            <label for="start-time" class="capitalize">Start time <span class="danger">*</span></label>
            <input type="time" class="start-time input-box">
        </div>
    </div>
    <div class="event-end-and-end-time-container">
        <div class="event-end-container">
            <label for="event-start" class="capitalize">Event end <span class="danger">*</span></label>
            <input type="date" class="event-end input-box">
        </div>
        <div class="end-time-container">
            <label for="start-time" class="capitalize">End time <span class="danger">*</span></label>
            <input type="time" class="end-time input-box">
        </div>
    </div>
</div>
@endsection