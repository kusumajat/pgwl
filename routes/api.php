<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/points', [APIController::class, 'points'])->name('api.points');

Route::get('/polylines', [APIController::class, 'polylines'])->name('api.polylines');

Route::get('/polygons', [APIController::class, 'polygons'])->name('api.polygons');
