<?php

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TripController;
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

// TRIP
Route::group([
    'middleware' => ['auth:sanctum']
], function () {
Route::post('/trip-create', [TripController::class, 'createPersonalTrip']);
// Route::get('/my-trips', [TripController::class, 'getMyTrips']);
});










// LOCATION
// Route::get('/locations', [TripController::class, 'getAllLocations']);
// Route::get('/location/{id}', [TripController::class, 'getLocationById']);
// Route::get('/location-trip/{id}', [TripController::class, 'getLocationByTripId']);









// SUPERADMIN : TRipS (por revisar después de modificar relaciones)
Route::group([
    'middleware' => ['auth:sanctum', 'is_super_admin']
], function () {
Route::get('/trips', [Super_adminController::class, 'getAllTrips']);
Route::get('/trip/{id}', [Super_adminController::class, 'getTripById']);
Route::put('/trip-update/{id}', [Super_adminController::class, 'updateTrip']);
Route::delete('/trip-delete/{id}', [Super_adminController::class, 'deleteTrip']);
});