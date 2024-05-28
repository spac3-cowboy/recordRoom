<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\CourtController;

// Non-authenticated routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes with registration and password reset disabled
Auth::routes(['register' => false, 'reset' => false]);

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Add more authenticated routes here
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/all-records', [RecordController::class, 'index'])->name('all-records');
    Route::get('/add-record', [RecordController::class, 'create'])->name('add-record');
    Route::get('/add-court', [CourtController::class, 'create'])->name('add-court');
});

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);