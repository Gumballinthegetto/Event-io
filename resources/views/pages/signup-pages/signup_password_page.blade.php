@extends('layouts.signup')
@section('signup-content')
<div class="signup-right-info-container cornered-border-form-container">
    <div class="signup-right-info-icon-container">
        <img class="icon-40" src="{{ asset('assets/icons/padlock.png') }}" alt="">
    </div>
    <h4 class="signup-right-info-title password-info-title">Choose a password</h4>
    <p class="signup-right-info-description password-info-description">Must be at least 8 characters.</p>
    <div class="signup-right-info-bottom-container">
        <label for="signup-choose-password">Choose a password <span class="danger">*</span></label>
        <input class="input-box" name="signup-choose-password" id="signup-choose-password" type="password" required>
        <label for="signup-confirm-password">Confirm password <span class="danger">*</span></label>
        <input class="input-box" name="signup-confirm-password" id="signup-confirm-password" type="password" required>
    </div>
    <button class="signup-btn standard-btn bordered-outline-hover-effect uppercase" type="submit">Submit</button>
</div>
@endsection