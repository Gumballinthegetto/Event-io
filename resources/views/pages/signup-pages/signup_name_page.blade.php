@extends('layouts.signup')
@section('signup-content')
<div class="signup-right-info-container cornered-border-form-container">
    <div class="signup-right-info-icon-container">
        <img class="signup-detail-icon icon-40" src="{{ asset('assets/icons/resume.png') }}" alt="">
    </div>
    <h4 class="signup-right-info-title detail-title">Your details</h4>
    <p class="signup-right-info-description detail-description">Please provide your name, username, and email.</p>
    <div class="signup-right-info-bottom-container">
        <label for="signup-first-name">First Name <span class="danger">*</span></label>
        <input class="input-box" name="signup-first-name" id="signup-first-name" placeholder="e.g. Kanchana" type="text" required>
        <label for="signup-last-name">Last Name <span class="danger">*</span></label>
        <input class="input-box" name="signup-last-name" id="signup-last-name" placeholder="e.g. Sek" type="text" required>
        <label for="signup-email">Email <span class="danger">*</span></label>
        <input class="input-box" type="email" placeholder="e.g. kanchanasek12@email.com" required>
    </div>
    <div class="signup-continue-btn-container">
        <a class="signup-btn standard-btn bordered-outline-hover-effect" href="{{ route('signup-password') }}">Continue</a>
    </div>
</div>
@endsection