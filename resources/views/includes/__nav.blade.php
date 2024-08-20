<div class="container navbar-container">
    <div class="navbar">
        <div class="navbar-container">
            <ul class="nav">
                <li class="nav-link">
                    <a href="{{ route('homepage') }}" class="name-logo uppercase">Event.io</a>
                    <div class="logo">
                        <a href="#">
                            <img src="/assets/icons/event_io.png" alt="Logo">
                        </a>
                        <span class="logo-slogan uppercase">- We frame it for you -</span>
                    </div>
                </li>
                <li class="nav-link">
                    <a href="{{ route('browse_events') }}" class="browse-events">
                        <div class="full-link">
                            <span class="uppercase">Browse Events</span>
                        </div>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('create_an_event') }}" class="create-an-event">
                        <div class="full-link">
                            <span class="uppercase">Create an Events</span>
                        </div>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('login') }}" class="not-yet-login uppercase">Log in</a>
                    <div class="not-yet-login-icon">
                        <img src="/assets/icons/not_yet_login.png" alt="not yet login icon">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>