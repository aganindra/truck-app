<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TripController;

Route::middleware('api')->group(function () {
    Route::get('/trip', [TripController::class, 'index']);
});

