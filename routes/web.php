<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Models\Event;

Route::view('/', 'welcome')->name('welcome');
Route::get('/home', [EventController::class, 'index'])->name('home');

Route::resource('events', EventController::class);

// content pages
Route::view('/services', 'services')->name('services');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/contact', 'contact')->name('contact');

Route::get('/gallery', function () {
    $events = Event::latest()->paginate(4);
    return view('gallery', compact('events'));
})->name('gallery');

