<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TripController;
use App\Http\Controllers\DashboardController;

Route::resource('trips', TripController::class);
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
