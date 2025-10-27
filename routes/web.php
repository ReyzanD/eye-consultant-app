<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Requests\LoginRequest;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (LoginRequest $request) {
    // Handle login via Fortify
    return app(\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class)->store($request);
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session')
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('patients', App\Http\Controllers\PatientController::class);
    Route::resource('appointments', App\Http\Controllers\AppointmentController::class);
});

