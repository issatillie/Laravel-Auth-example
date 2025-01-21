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

// =============================================
// REGISTRATION ROUTES
// =============================================
Route::view('/register', 'register');
