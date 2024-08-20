@extends('layouts.create_an_event')
@section('second_content')
<!-- EVENT MEDIA INFO -->
<div class="create-an-event-form-event-media-info-container">
    <div class="event-media-info-left-container">
        <img class="icon-30" src="{{ asset('assets/icons/event-media.png') }}" alt="">
        <h4 class="form-event-media-info-title capitalize">Event media</h4>
        <hr class="honey-comb-divider">
    </div>
    <div class="event-media-info-right-container">
        <p class="form-event-media-info-title-description">
            Add photos to show what your event will be about. You can upload to 10 images.
        </p>
        <hr class="pitch-black-divider">
    </div>
</div>
<div class="cornered-border-form-container">
    <div class="event-media-images-container">
        <div class="event-media-thumbnail-image-container">
            <h4 class="event-media-thumbnail-image-title">Thumbnail Image</h4>
            <div class="event-media-thumbnail-image-box">
                <img src="{{ asset('assets/icons/picture.png') }}" alt="">
                <label for="thumbnail-image" class="event-media-thumbnail-image-upload-btn custom-file-input-box">Upload Image</label>
                <input type="file" accept="image/png, image/jpeg" id="thumbnail-image" name="thumbnail-image" class="file-input-box">
            </div>
            <ul class="event-media-image-list">
                <li class="event-media-image-item">
                    <span>Thumbnail image</span>
                </li>
                <li class="event-media-image-item">
                    <span>Recommend image size: 300 x 300 px</span>
                </li>
                <li class="event-media-image-item">
                    <span>Supported image: JEPG or PNG</span>
                </li>
            </ul>
        </div>
        <div class="event-media-plus-icon-container">
            <img src="{{ asset('assets/icons/plus.png') }}" alt="">
        </div>
        <div class="event-media-cover-image-container">
            <div class="event-media-cover-image-container">
                <h4 class="event-media-cover-image-title">Cover Image</h4>
                <div class="event-media-cover-image-box">
                    <img src="{{ asset('assets/icons/picture.png') }}" alt="">
                    <label for="thumbnail-image" class="event-media-cover-image-upload-btn custom-file-input-box">Upload Image</label>
                    <input type="file" accept="image/png, image/jpeg" id="cover-image" name="cover-image" multiple class="file-input-box">
                </div>
            </div>
            <ul class="event-media-image-list">
                <li class="event-media-image-item">
                    <span>Cover image</span>
                </li>
                <li class="event-media-image-item">
                    <span>Recommend image size: 1200 x 300 px</span>
                </li>
                <li class="event-media-image-item">
                    <span>Supported image: JEPG or PNG</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- SUMMARY INFO -->
<div class="create-an-event-form-summary-info-container">
    <div class="summary-info-left-container">
        <img class="icon-30" src="{{ asset('assets/icons/summary.png') }}" alt="">
        <h4 class="form-summary-info-title capitalize">Summary</h4>
        <hr class="honey-comb-divider">
    </div>
    <div class="summary-info-right-container">
        <p class="form-summary-info-title-description">
            Grab people’s attention with a short description about your event. Attendees will see this at the top of the event page.
            (140 characters max)
        </p>
        <hr class="pitch-black-divider">
    </div>
</div>
<div class="cornered-border-form-container summary-container">
    <label for="summary">Summary <span class="danger">*</span></label>
    <textarea name="summary" 
              id="summary"
              class="input-box summary-box" 
              cols="30" 
              rows="10" 
              placeholder="Write a short summary to get attendees exicited.">
    </textarea>
    <div class="summary-text-count-container">
        <span class="summary-text-count">0/140</span>
    </div>
</div>
<!-- DESCRIPTION INFO -->
<div class="create-event-form-description-info-container">
    <div class="description-info-left-container">
        <img class="icon-30" src="{{ asset('assets/icons/description.png') }}" alt="">
        <h4 class="form-description-info-title capitalize">Description</h4>
        <hr class="honey-comb-divider">
    </div>
    <div class="description-info-right-container">
        <p class="form-description-info-title-description">
            Add more details to your event like your schedule, sponsors, or featured guests.
        </p>
        <hr class="pitch-black-divider">
    </div>
</div>
<div class="cornered-border-form-container">
    <label for="summary">Description</label>
    <textarea name="description" 
              id="description"
              class="input-box summary-box" 
              cols="30" 
              rows="10">
    </textarea>
</div>
@endsection