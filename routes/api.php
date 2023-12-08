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

// TRAVEL
Route::group([
    'middleware' => ['auth:sanctum']
], function () {
Route::post('/travel-create', [TravelController::class, 'createTravel']);
// Route::get('/my-travels', [TravelController::class, 'getMyTravels']);
});










// LOCATION
// Route::get('/locations', [TravelController::class, 'getAllLocations']);
// Route::get('/location/{id}', [TravelController::class, 'getLocationById']);
// Route::get('/location-travel/{id}', [TravelController::class, 'getLocationByTravelId']);









// SUPERADMIN : TRAVELS (por revisar después de modificar relaciones)
Route::group([
    'middleware' => ['auth:sanctum', 'is_super_admin']
], function () {
Route::get('/travels', [Super_adminController::class, 'getAllTravels']);
Route::get('/travel/{id}', [Super_adminController::class, 'getTravelById']);
Route::put('/travel-update/{id}', [Super_adminController::class, 'updateTravel']);
Route::delete('/travel-delete/{id}', [Super_adminController::class, 'deleteTravel']);
});