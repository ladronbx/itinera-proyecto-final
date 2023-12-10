<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\Super_adminController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsSuperAdmin;

Route::middleware('jwt.auth')->get('/user', function (Request $request) {
    return $request->user();
});

// USER
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group([
    'middleware' => ['jwt.auth']
], function () {
Route::get('/profile', [AuthController::class, 'profile']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::put('/profile-update', [UserController::class, 'updateProfile']);
Route::delete('/user-delete', [UserController::class, 'deleteUser']);
});


// LOCATION
Route::get('/locations', [LocationController::class, 'getAllLocations']);
Route::get('/location/{id}', [LocationController::class, 'getLocationById']);
Route::get('/activities', [ActivityController::class, 'getAllActivities']);

// SUPERADMIN : LOCATIONS
// Route::group([
//     'middleware' => ['jwt.auth', 'is_super_admin']
// ], function () {
// Route::post('/location-create', [Super_adminController::class, 'createLocation']);
// Route::put('/location-update/{id}', [Super_adminController::class, 'updateLocation']);
// Route::delete('/location-delete/{id}', [Super_adminController::class, 'deleteLocation']);
// });



// TRIP
Route::group([
    'middleware' => ['jwt.auth']
], function () {
//el usuario puede crear un viaje personal a partir de una localización marcando la casilla de viajo sólo
Route::post('/personal-trip-create/{id}', [TripController::class, 'createPersonalTrip']);
Route::get('/my-trips', [TripController::class, 'getAllMyTrips']);
Route::get('/my-trip/{id}', [TripController::class, 'getMyTripById']);
Route::put('/my-trip/{id}', [TripController::class, 'updateMyTrip']);
Route::delete('/my-trip/{id}', [TripController::class, 'deleteMyTripById']);
});


// ACTIVITY
Route::group([
    'middleware' => ['jwt.auth']
], function () {
Route::get('/activity/{id}', [ActivityController::class, 'getActivityById']);
Route::get('/activities-location/{id}', [ActivityController::class, 'getActivityByLocationId']);
});










// SUPERADMIN : TRIPS (por revisar después de modificar relaciones)
Route::group([
    'middleware' => ['jwt.auth', 'is_super_admin']
], function () {
Route::get('/trips', [Super_adminController::class, 'getAllTrips']);
Route::get('/trip/{id}', [Super_adminController::class, 'getTripById']);
Route::put('/trip-update/{id}', [Super_adminController::class, 'updateTrip']);
Route::delete('/trip-delete/{id}', [Super_adminController::class, 'deleteTrip']);
});