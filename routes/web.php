<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Route untuk halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk halaman daftar event
Route::get('/events', [EventController::class, 'index'])->name('events.index');

// Route untuk halaman detail event
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');

// Route untuk halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk halaman register
Route::get('/register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'register']);

// Route untuk halaman reset password
Route::get('/password/reset', [PasswordResetLinkController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [PasswordResetLinkController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [PasswordResetLinkController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [PasswordResetLinkController::class, 'reset'])->name('password.update');

