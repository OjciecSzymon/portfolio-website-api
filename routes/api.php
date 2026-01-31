<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store']);