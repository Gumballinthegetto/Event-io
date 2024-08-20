@extends('layouts.login_signup')
@section('content')
<div class="signup-container">
    <div class="signup-left-container">
        <div class="signup-left-info-container">
            <div class="signup-title-container">
                <h4 class="signup-title">Sign up</h4>
                <hr class="honey-comb-divider">
            </div>
            <div class="top-login signup-logo">
                <div class="login-logo">
                    <a href="{{ route('homepage') }}">
                        <img src="/assets/icons/event_io.png" alt="Logo">
                    </a>
                    <span class="login-logo-slogan uppercase">Event.io</span>
                </div>
            </div>
            <a class="signup-left-link" href="{{ route('signup-detail') }}">
                <div class="signup-left-flex-container">
                    <div class="signup-left-detail-icon-container">
                        <img class="icon-30" src="{{ asset('assets/icons/resume.png') }}" alt="">
                    </div>
                    <div class="signup-left-detail-container">
                        <span class="signup-left-detail-title">Your details</span>
                        <p class="signup-left-detail-description">Please provide name, username, and email.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="signup-left-info-container">
            <a class="signup-left-link" href="{{ route('signup-password') }}">
                <div class="signup-left-flex-container">
                    <div class="signup-left-detail-icon-container">
                        <img class="icon-30" src="{{ asset('assets/icons/padlock.png') }}" alt="">
                    </div>
                    <div class="signup-left-detail-container">
                        <span class="signup-left-detail-title">Choose a password</span>
                        <p class="signup-left-detail-description">Must be at least 8 characters.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="signup-already-have-an-account-container">
            <hr class="pitch-black-divider">
            <div class="signup-left-bottom-container">
                <span>Already had an account?</span>
                <div class="signup-left-btn-container bordered-outline-hover-effect uppercase">
                    <a href="{{ route('login') }}" class="mild-bold">Log in</a>
                </div>
            </div>
        </div>
    </div>
    <div class="signup-right-container">
        <form action="" method="POST">
            @yield('signup-content')
        </form>
    </div>
</div>
@endsection