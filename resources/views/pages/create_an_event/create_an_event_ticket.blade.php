@extends('layouts.create_an_event')
@section('second_content')
<!-- TICKER INFO -->
<div class="create-event-form-ticket-info-container">
    <div class="ticket-info-left-container">
        <img class="icon-30" src="{{ asset('assets/icons/ticket.png') }}" alt="">
        <h4 class="form-ticket-info-title capitalize">Add tickets</h4>
        <hr class="honey-comb-divider">
    </div>
    <div class="ticket-info-right-container">
        <p class="form-ticket-info-title-description">
            Create a ticket that people have to pay or free.
        </p>
        <hr class="pitch-black-divider">
    </div>
</div>
<div class="ticket-info-bottom-large-container">
    <div class="cornered-border-form-container ticket-info-truncated-container">
        <div class="paid-or-free-container">
            <button type="button" class="bordered-outline-hover-effect standard-btn">Paid</button>
            <button type="button" class="bordered-outline-hover-effect standard-btn">Free</button>
        </div>
        <div class="ticket-info-bottom-container">
            <label for="ticket-name">Ticket Name <span class="danger">*</span></label>
            <input type="text"
                id="ticket-name"
                class="input-box"
                placeholder="e.g. General Admission">
            <div class="ticket-name-text-count-container">
                <span class="ticket-name-text-count">0/50</span>
            </div>
            <label for="available-quantity">Available quantity <span class="danger">*</span></label>
            <input type="number"
                id="available-quantity"
                class="input-box"
                placeholder="e.g. 10" >
            <label for="price">Price</label>
            <div class="price-input-container">
                <img src="{{ asset('assets/icons/dollar.png') }}" class="icon-30" alt="dollar currency">
                <input type="number"
                id="price"
                class="price-input input-box"
                placeholder="0.00">
            </div>
            <label for="ticket-sale-start" class="capitalize">Ticket sale start <span class="danger">*</span></label>
            <input type="date"
                   id="ticket-sale-start"
                   class="input-box">
            <label for="ticket-start-time" class="capitalize">Ticket start time</label>
            <input type="time"
                   id="ticket-start-time"
                   class="input-box">
            <label for="ticket-sale-end" class="capitalize">Ticket sale end <span class="danger">*</span></label>
            <input type="date"
                   id="ticket-sale-end"
                   class="input-box">
            <label for="ticket-end-time" class="capitalize">Ticket end time</label>
            <input type="time"
                   id="ticket-end-time"
                   class="input-box">
        </div>
    </div>
    <div class="ticket-info-truncated-container">
        <img class="ticket-info-image" src="{{ asset('assets/images/5090583.jpg') }}" alt="">
    </div>
</div>
@endsection