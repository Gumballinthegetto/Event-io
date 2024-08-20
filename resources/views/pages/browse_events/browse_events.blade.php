@extends('layouts.no_banner')
@section('content')
<!-- SEARCH BAR -->
<div class="search-bar">
    <img class="search-bar-icon" src="/assets/icons/search.png" alt="Search bar icon">
    <input class="search-bar-input" type="text" placeholder="Search Events">
</div>
<!-- HAPPENING NOW SECTION -->
<div class="flow-banner happening-now-banner">
    <div class="marquee">
        <div class="marquee-item">
            <img class="happening-now-banner-icon" src="/assets/icons/happening_now.png" alt="happening now icon">
            <span class="happening-now-banner-text uppercase">Happening now</span>
        </div>
        <div class="marquee-item">
            <img class="happening-now-banner-icon" src="/assets/icons/happening_now.png" alt="happening now icon">
            <span class="happening-now-banner-text uppercase">Happening now</span>
        </div>
        <div class="marquee-item">
            <img class="happening-now-banner-icon" src="/assets/icons/happening_now.png" alt="happening now icon">
            <span class="happening-now-banner-text uppercase">Happening now</span>
        </div>
        <div class="marquee-item">
            <img class="happening-now-banner-icon" src="/assets/icons/happening_now.png" alt="happening now icon">
            <span class="happening-now-banner-text uppercase">Happening now</span>
        </div>
        <div class="marquee-item">
            <img class="happening-now-banner-icon" src="/assets/icons/happening_now.png" alt="happening now icon">
            <span class="happening-now-banner-text uppercase">Happening now</span>
        </div>
        <div class="marquee-item">
            <img class="happening-now-banner-icon" src="/assets/icons/happening_now.png" alt="happening now icon">
            <span class="happening-now-banner-text uppercase">Happening now</span>
        </div>
    </div>
</div>
<div class="happening-now">
    <h1 class="happening-now-text uppercase">Happening now</h1>
    <a href="#happening-now-slider">
        <button class="point-to-happening-now-slider arrow-round-button">
            <img class="arrow-icon-90-deg" src="/assets/icons/arrow.png" alt="arrow icon">
        </button>
    </a>
    <hr class="honey-comb-divider large-160">
</div>
<div class="happening-now-slider">
    <div class="happening-now-slider-container">
        <hr class="pitch-black-divider happening-now-slider-left">
        <div class="happening-now-slider-title-container" id="happening-now-slider">
            <h3 class="happening-now-slider-title uppercase align-right">DMC photo festival & project 4</h3>
            <hr class="honey-comb-divider large-100">
        </div>
        <span class="happening-now-slider-index happening-now-slider-left">01</span>
        <div class="happening-now-slider-thumbnail">
            <img src="/assets/images/DMC_Screenplay.jpeg" alt="thumbnail">
        </div>
        <div class="happening-now-slider-detail-container">
            <p class="align-right">
                Four short documentary projects
                produced by the DMC
                students from batch 19 will be
                screened tomorrow!
                -- Join us on 31st March from 1 PM to 8 PM
                at the Department of Media and Communication.
            </p>
            <p class="more-detail align-right bold">
                Please check and view more
                descriptions in events
                subpage.
            </p>
        </div>
        <button class="happening-now-slider-button arrow-rectangle-button">
            <a href="{{ route('browse_events_subpage') }}">
                <span class="happening-now-slider-button-enter uppercase">Enter</span>
                <img src="/assets/icons/arrow.png" alt="arrow icon">
            </a>
        </button>
    </div>
    <button class="happening-now-slider-back-button">
        <img src="/assets/icons/indication.png" alt="back icon">
        <span class="happening-now-slider-back-button-text uppercase mild-bold">Prev</span>
    </button>
    <button class="happening-now-slider-next-button">
        <span class="happening-now-slider-next-button-text uppercase mild-bold">Next</span>
        <img src="/assets/icons/indication.png" alt="next icon">
    </button>
</div>
<!-- BROWSE EVENTS SECTION -->
<div class="browse-events-title-container">
    <h3 class="browse-events-title-text">Popular in</h3>
    <img class="browse-events-title-location-icon" src="/assets/icons/location.png" alt="location icon">
    <div class="browse-events-title-location-position">
        <span class="browse-events-title-location-text bold">Phnom Penh</span>
        <hr class="honey-comb-divider medium">
    </div>
</div>
<div class="browse-events-date-selector">
    <select class="drop-down-date" name="date" id="drop-down-date">
        <option value="">Date</option>
        <option value="1">Calendar</option>
        <option value="2">Today</option>
        <option value="3">Tomorrow</option>
        <option value="4">This Weekend</option>
    </select>
</div>
<div class="browse-events-container">
    <div class="grid">
        <div class="box">
            <a href="{{ route('browse_events_subpage') }}" class="browse-events-box-link">
                <figure class="box-thumbnail">
                    <img src="/assets/images/Photo Contest.png" alt="Photo Contest">
                </figure>
                <div class="box-description">
                    <h4 class="box-description-title">Photo Contest - WASTE FOR LIFE</h4>
                    <span class="box-description-date">Sat - 15th April, 2023</span>
                    <p class="box-description-detail">
                        Waste summit 2023 is organizing KASPOP x DMC Photo Festival Photo Contest 2023 under the theme...
                    </p>
                </div>
                <span class="box-description-user">By (REDACTED) User</span>
                <div class="box-description-user-underline">
                    <hr class="honey-comb-divider">
                </div>
            </a>
            <button class="box-description-heart-button">
                <img src="/assets/icons/heart.png" alt="heart-icon">
            </button>
        </div>
        <div class="box">
            <a href="{{ route('browse_events_subpage') }}" class="browse-events-box-link">
                <figure class="box-thumbnail">
                    <img src="/assets/images/DMC_Khmer_New_Year.jpeg" alt="DMC Khmer New Year">
                </figure>
                <div class="box-description">
                    <h4 class="box-description-title">Happy Khmer New Year! - Come join us at DMC</h4>
                    <span class="box-description-date">Sat - 8th April, 2023</span>
                    <p class="box-description-detail">
                        To celebrate the upcoming New Year, the Department of Communication will hold the Khmer New Year, which...
                    </p>
                </div>
                <span class="box-description-user">By (REDACTED) User</span>
                <div class="box-description-user-underline">
                    <hr class="honey-comb-divider">
                </div>
            </a>
            <button class="box-description-heart-button">
                <img src="/assets/icons/heart.png" alt="heart-icon">
            </button>
        </div>
        <div class="box">
            <a href="{{ route('browse_events_subpage') }}" class="browse-events-box-link">
                <figure class="box-thumbnail">
                    <img src="/assets/images/Scholorship_and_Study_Fair.jpg" alt="Photo Contest">
                </figure>
                <div class="box-description">
                    <h4 class="box-description-title">Scholarship and Education Fair</h4>
                    <span class="box-description-date">Sun - 23rd April, 2023</span>
                    <p class="box-description-detail">
                        Today with Cambodian Institute for Cooperation and Peace, we are hosting a public lecture on “Indonesia’s 2023 ASEAN...
                    </p>
                </div>
                <span class="box-description-user">By (REDACTED) User</span>
                <div class="box-description-user-underline">
                    <hr class="honey-comb-divider">
                </div>
            </a>
            <button class="box-description-heart-button">
                <img src="/assets/icons/heart.png" alt="heart-icon">
            </button>
        </div>
        <div class="box">
            <a href="{{ route('browse_events_subpage') }}" class="browse-events-box-link">
                <figure class="box-thumbnail">
                    <img src="/assets/images/IFL_Khmer_New_Year.jpg" alt="DMC Khmer New Year">
                </figure>
                <div class="box-description">
                    <h4 class="box-description-title">Happy Khmer New Year - From IFL Department</h4>
                    <span class="box-description-date">Sat - 8th April, 2023</span>
                    <p class="box-description-detail">
                        Today with Cambodian Institute for Cooperation and Peace, we are hosting a public lecture on “Indonesia’s 2023 ASEAN...
                    </p>
                </div>
                <span class="box-description-user">By (REDACTED) User</span>
                <div class="box-description-user-underline">
                    <hr class="honey-comb-divider">
                </div>
                <button class="box-description-heart-button">
                    <img src="/assets/icons/heart.png" alt="heart-icon">
                </button>
            </a>
        </div>
        <div class="box">
            <a href="{{ route('browse_events_subpage') }}" class="browse-events-box-link">
                <figure class="box-thumbnail">
                    <img src="/assets/images/Behind_the_scene.jpg" alt="Photo Contest">
                </figure>
                <div class="box-description">
                    <h4 class="box-description-title">Behind the Scene</h4>
                    <span class="box-description-date">Thu - 6th April, 2023</span>
                    <p class="box-description-detail">
                        Today with Cambodian Institute for Cooperation and Peace, we are hosting a public lecture on “Indonesia’s 2023 ASEAN...
                    </p>
                </div>
                <span class="box-description-user">By (REDACTED) User</span>
                <div class="box-description-user-underline">
                    <hr class="honey-comb-divider">
                </div>
            </a>
            <button class="box-description-heart-button">
                <img src="/assets/icons/heart.png" alt="heart-icon">
            </button>
        </div>
        <div class="box">
            <a href="{{ route('browse_events_subpage') }}" class="browse-events-box-link">
                <figure class="box-thumbnail">
                    <img src="/assets/images/DMC_Gala.jpeg" alt="DMC Khmer New Year">
                </figure>
                <div class="box-description">
                    <h4 class="box-description-title">DMC - Gala Night</h4>
                    <span class="box-description-date">Sat - 8th April, 2023</span>
                    <p class="box-description-detail">
                        After the Khmer New Year event in the morning, “DMC Gala Night 2023” is scheduled on 08th April 2023 from 4:30...
                    </p>
                </div>
                <span class="box-description-user">By (REDACTED) User</span>
                <div class="box-description-user-underline">
                    <hr class="honey-comb-divider">
                </div>
            </a>
            <button class="box-description-heart-button">
                <img src="/assets/icons/heart.png" alt="heart-icon">
            </button>
        </div>
        <div class="box">
            <a href="{{ route('browse_events_subpage') }}" class="browse-events-box-link">
                <figure class="box-thumbnail">
                    <img src="/assets/images/Media_Education.jpg" alt="DMC Khmer New Year">
                </figure>
                <div class="box-description">
                    <h4 class="box-description-title">Media Education and Opportunities in Cambodia</h4>
                    <span class="box-description-date">Thu - 6th April, 2023</span>
                    <p class="box-description-detail">
                        We are excited to bring back the journalism Talk Series. In this series, we will explore the topic of “Media Education...
                    </p>
                </div>
                <span class="box-description-user">By (REDACTED) User</span>
                <div class="box-description-user-underline">
                    <hr class="honey-comb-divider">
                </div>
            </a>
            <button class="box-description-heart-button">
                <img src="/assets/icons/heart.png" alt="heart-icon">
            </button>
        </div>
        <div class="box">
            <a href="{{ route('browse_events_subpage') }}" class="browse-events-box-link">
                <figure class="box-thumbnail">
                    <img src="/assets/images/KAS_CICP.jpg" alt="DMC Khmer New Year">
                </figure>
                <div class="box-description">
                    <h4 class="box-description-title">KAS-CICP Public Lecture</h4>
                    <span class="box-description-date">Thu - 6th April, 2023</span>
                    <p class="box-description-detail">
                        Today with Cambodian Institute for Cooperation and Peace, we are hosting a public lecture on “Indonesia’s 2023 ASEAN...
                    </p>
                </div>
                <span class="box-description-user">By (REDACTED) User</span>
                <div class="box-description-user-underline">
                    <hr class="honey-comb-divider">
                </div>
            </a>
            <button class="box-description-heart-button">
                <img src="/assets/icons/heart.png" alt="heart-icon">
            </button>
        </div>
    </div>
    <div class="browse-events-load-more">
        <button class="browse-events-load-more-button">
            <span class="browse-events-load-more-text uppercase">Load more</span>
            <img class="browse-events-load-more-icon" src="/assets/icons/more.png" alt="load more icon">
        </button>
    </div>
</div>
@endsection