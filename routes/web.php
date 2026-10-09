<?php

use App\Http\Controllers\ConcertRegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ConcertRegistrationController::class, 'home'])->name('home');
Route::get('/register', [ConcertRegistrationController::class, 'create'])->name('registrations.create');
Route::post('/register', [ConcertRegistrationController::class, 'store'])->name('registrations.store');
Route::get('/registration/confirmation', [ConcertRegistrationController::class, 'confirmation'])
    ->name('registrations.confirmation');
