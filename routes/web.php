<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

// =============================================
// MAIN ROUTES
// =============================================
Route::view('/', 'index');

// =============================================
// LOGIN ROUTES
// =============================================
Route::view('/login', 'login');
Route::post('/login', [LoginController::class, 'store']);

// =============================================
// REGISTRATION ROUTES
// =============================================
Route::view('/register', 'register');
Route::post('/register', [RegistrationController::class, 'store']);

// =============================================
// DASHBOARD ROUTES
// =============================================
Route::view('/dashboard', 'dashboard');
Route::post('/logout', [LoginController::class, 'destroy']);
