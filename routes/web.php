<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;

Route::resource('trips', TripController::class);

