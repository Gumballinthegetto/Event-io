@extends('layouts.main')
@section('content')
<div class="event-subpage-container">
    <!-- EVENT SUBPAGE THUMBAIL SECTION -->
    <div class="thumbnail-container">
        <div class="thumbnail-image-container">
            <img class="thumbnail" src="{{ asset('assets/images/event_subpage_thumbnail.jpg') }}" alt="thumbnail">
        </div>
        <div class="thumbnail-status-container">
            <h4 class="thumbnail-status-text">Just Added!</h4>
        </div>
        <div class="thumbnail-detail-container">
            <div class=thumbnail-detail-left-container>
                <h3 class="thumbnail-detail-title">Remembrance Photo Event</h3>
                <p class="thumbnail-detail-description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="thumbnail-detail-user-container">
                    <span class="thumbnail-detail-user">By <span class="bold">Gumball</span></span>
                    <hr class="honey-comb-divider">
                </div>
            </div>
            <div class="thumbnail-detail-right-container">
                <div class="thumbnail-detail-date-container">
                    <span class="thumbnail-detail-date">May 28</span>
                    <hr class="pitch-black-divider">
                </div>
                <button class="thumbnail-detail-share-button">
                    <img src="{{ asset('assets/icons/upload.png') }}" alt="share icon">
                </button>
                <button class="thumbnail-detail-interested-button">
                    <span class="thumbnail-detail-interested-button-text">Interested?</span>
                </button>
            </div>
        </div>
    </div>
    <!-- LOCATION AND DATE SECTION -->
    <div class="location-and-date-container">
        <div class="location-container">
            <div class="location-title-container">
                <h3 class="location-title">1159 NR2, Phnom Penh - Factory Phnom Penh</h3>
                <hr class="pitch-black-divider">
            </div>
            <button class="location-hide-unhide-map-button border-none">
                <img src="{{ asset('assets/icons/indication.png') }}" alt="indicator icon">
                <span class="location-hide-unhide-map-text">Hide Map</span>
            </button>
            <iframe class="location-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38616.563786664374!2d104.88104832837959!3d11.538893098031382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950c970930e99%3A0x1a993a98716ff349!2sFACTORY%20Phnom%20Penh!5e0!3m2!1sen!2skh!4v1685442162084!5m2!1sen!2skh" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
        </div>
        <div class="date-container">
            <div class="date-title-container">
                <h3 class="date-title">Sunday 28th May 2023</h3>
                <hr class="pitch-black-divider">
            </div>
            <h5 class="date-about-this-event">About this event</h5>
            <span class="date-about-this-event-description">description</span>
            <hr class="honey-comb-divider">
            <div class="date-ticket-and-duration-container">
                <div class="date-ticket-container">
                    <div class="date-ticker-left">
                        <img src="{{ asset('assets/icons/tickets.png') }}" alt="ticket icon">
                    </div>
                    <div class="date-ticket-right">
                        <h5>Ticket</h5>
                        <span>Mobile E-Ticket</span>
                    </div>
                </div>
                <div class="date-duration-container">
                    <div class="date-duration-left">
                        <img src="{{ asset('assets/icons/time.png') }}" alt="time icon">
                    </div>
                    <div class="date-duration-right">
                        <h5>Duration</h5>
                        <span>3 - 6 hours</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DESCRIPTION AND IMAGE SLIDER SECTION -->
    <div class="description-and-image-slider-container">
        <div class="description-container">
            <p class="description-text">
                <span class="indent">Lorem</span> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Lacus sed turpis tincidunt id aliquet. Consequat interdum varius sit amet mattis. Faucibus nisl tincidunt eget nullam non nisi est. Proin libero nunc consequat interdum varius sit. Aliquam purus sit amet luctus venenatis lectus. Eget est lorem ipsum dolor. In hac habitasse platea dictumst quisque sagittis purus. Quisque id diam vel quam elementum pulvinar etiam. Odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam.
            </p>
            <ul class="description-text-list">
                <li class="description-text-item">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Lacus sed turpis tincidunt id aliquet. Consequat interdum varius sit amet mattis. Faucibus nisl tincidunt eget nullam non nisi est. Proin libero nunc consequat interdum varius sit. Aliquam purus sit amet luctus venenatis lectus. Eget est lorem ipsum dolor. In hac habitasse platea dictumst quisque sagittis purus. Quisque id diam vel quam elementum pulvinar etiam. Odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam.
                </li>
                <li class="description-text-item">
                    Aenean euismod elementum nisi quis eleifend quam adipiscing. Ut placerat orci nulla pellentesque dignissim enim sit amet. Dignissim enim sit amet venenatis urna. Sed faucibus turpis in eu mi. Cursus sit amet dictum sit amet justo donec. Nunc mattis enim ut tellus elementum sagittis vitae et. Nibh nisl condimentum id venenatis a condimentum. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Dictum at tempor commodo ullamcorper a. Sem viverra aliquet eget sit amet. Faucibus in ornare quam viverra orci. Neque aliquam vestibulum morbi blandit cursus.
                </li>
            </ul>
        </div>
        <div class="image-slider-container">
            <div class="image-slider-top-container">
                <img class="image-slider-top-container-image" src="{{ asset('assets/images/textured-background.jpg') }}" alt="image slider">
                <div class="image-slider-top-container-icon-container">
                    <a href="#">
                        <img class="left-icon icon-40" src="{{ asset('assets/icons/indication.png') }}" alt="left indicator icon">
                    </a>
                    <a href="#">
                        <img class="right-icon icon-40" src="{{ asset('assets/icons/indication.png') }}" alt="right indicator icon">
                    </a>
                </div>
            </div>
            <div class="image-slider-bottom-container">
                <div class="share-with-friends-container">
                    <h5>Share with friends</h5>
                    <ul class="share-with-friends-list">
                        <li class="share-with-friends-item">
                            <a href="#">
                                <img class="icon-30" src="{{ asset('assets/icons/instagram.png') }}" alt="Instagram icon">
                            </a>
                        </li>
                        <li class="share-with-friends-item">
                            <a href="#">
                                <img class="icon-30" src="{{ asset("assets/icons/chat.png") }}" alt="Messenger icon">
                            </a>    
                        </li>
                        <li class="share-with-friends-item">
                            <a href="#">
                                <img class="icon-30" src="{{ asset('assets/icons/twitter.png') }}" alt="Twitter icon">
                            </a>
                        </li>
                        <li class="share-with-friends-item">
                            <a href="#">
                                <img class="icon-30" src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook icon">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection