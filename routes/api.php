<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/points', [APIController::class, 'points'])->name('api.points');
Route::get('/point/{id}', [APIController::class, 'point'])->name('api.point');

Route::get('/polylines', [APIController::class, 'polylines'])->name('api.polylines');
Route::get('/polyline/{id}', [APIController::class, 'polyline'])->name('api.polyline');

Route::get('/polygons', [APIController::class, 'polygons'])->name('api.polygons');
Route::get('/polygon/{id}', [APIController::class, 'polygon'])->name('api.polygon');
