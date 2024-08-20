@extends('layouts.login_signup')
@section('content')
<div class="login-container">
    <div class="login-left-container">
        <figure class="login-figure">
            <img src="{{ asset('assets/images/low-angle-shot-round-ceiling-with-window-museum-vatican-during-daytime.jpg') }}" alt="Login figure">
        </figure>
        <div class="bottom-match-color-container"></div>
    </div>
    <div class="login-right-container">
        <div class="login-center">
            <div class="top-login">
                <div class="login-logo">
                    <a href="{{ route('homepage') }}">
                        <img src="/assets/icons/event_io.png" alt="Logo">
                    </a>
                    <span class="login-logo-slogan uppercase">Event.io</span>
                </div>
            </div>
            <h3 class="login-title">Login</h3>
            <hr class="honey-comb-divider">
            <form class="login-form" action="">
                <label for="email-input">Email</label>
                <input 
                    type="email" 
                    name="email-input" 
                    id="email-input" 
                    placeholder="Enter your email">
                <label for="password-input">Password</label>
                <input 
                    type="password" 
                    name="password-input" 
                    id="password-input" 
                    placeholder="Enter your password">
                <div class="login-flex-box">    
                    <div class="login-flex-item">
                        <label for="remember-me" class="checkbox-container">
                            <input type="checkbox" name="remember-me" id="remember-me" checked>
                            <div class="checkmark"></div>
                            <span class="remember-me-text">Remember me</span>
                        </label>
                    </div>
                    <div class="login-flex-item">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="login-flex-box">
                    <div class="log-in">
                        <button type="submit">
                            <span class="top-key"></span>
                            <span class="text">Log in</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </button>
                    </div>
                    <hr class="pitch-black-divider">
                </div>
            </form>
            <div class="login-bottom-container">
                <span>Don't have an account yet?</span>
                <div class="signup-button-container uppercase">
                    <a href="{{ route('signup-detail') }}" class="mild-bold">Sign up</a>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection