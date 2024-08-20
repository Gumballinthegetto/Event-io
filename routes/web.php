<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/homepage' , function () {
    return view('pages.homepage');
})->name('homepage');

/** 
 * Browse events routes
 */
Route::get('/browse_events', function () {
    return view('pages.browse_events.browse_events');
})->name('browse_events');
Route::get('/browse_events/event_subpage', function () {
    return view('pages.browse_events.browse_events_subpage');
})->name('browse_events_subpage');

/** 
 * Create an event routes
 */
Route::get('/create_an_event', function () {
    return view('pages.create_an_event.create_an_event_basic_info');
})->name('create_an_event');
Route::get('/create_an_event/detail', function () {
    return view('pages.create_an_event.create_an_event_detail');
})->name('create_an_event_detail');
Route::get('/create_an_event/ticket', function () {
    return view('pages.create_an_event.create_an_event_ticket');
})->name('create_an_event_ticket');
Route::get('/create_an_event/preview_event', function () {
    return view('pages.create_an_event.create_an_event_preview_event');
})->name('create_an_event_preview_event');
Route::get('/create_an_event/preview_event/preview_event_subpage', function () {
    return view('pages.create_an_event.create_an_event_preview_event_subpage');
})->name('create_an_event_preview_event_subpage');

/** 
 * Login and Signup routes
 */
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
Route::get("/signup/detail", function () {
    return view('pages.signup-pages.signup_name_page');
})->name('signup-detail');
Route::get('/signup/password', function () {
    return view('pages.signup-pages.signup_password_page');
})->name('signup-password');