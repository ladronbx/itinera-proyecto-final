<?php

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsSuperAdmin;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// USER
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group([
    'middleware' => ['auth:sanctum']
], function () {
Route::get('/profile', [AuthController::class, 'profile']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::put('/user-update', [UserController::class, 'updateProfile']);
Route::delete('/user-delete', [UserController::class, 'deleteUser']);
});


// LOCATION
Route::get('/locations', [TravelController::class, 'getAllLocations']);
Route::get('/location/{id}', [TravelController::class, 'getLocationById']);
Route::get('/location-travel/{id}', [TravelController::class, 'getLocationByTravelId']);


// SUPERADMIN : TRAVELS
Route::group([
    'middleware' => ['auth:sanctum', 'is_super_admin']
], function () {
Route::get('/travels', [TravelController::class, 'getAllTravels']);
Route::get('/travel/{id}', [TravelController::class, 'getTravelById']);
Route::post('/travel-create', [TravelController::class, 'createTravel']);
Route::put('/travel-update/{id}', [TravelController::class, 'updateTravel']);
});