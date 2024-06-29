<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Auth;

// Routes for appointments
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Authentication routes
Auth::routes();


