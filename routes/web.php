<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// routes/web.php
use App\Http\Controllers\AppointmentController;

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

