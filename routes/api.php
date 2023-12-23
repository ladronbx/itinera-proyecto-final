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
use App\Http\Controllers\GroupController;

Route::get('/api', function (Request $request) {

    return response()->json(
        [
            "success" => true,
            "message" => "Healthcheck ok"
        ],
        Response::HTTP_OK
    );
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group([
    'middleware' => ['jwt.auth']
], function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::put('/update-profile', [UserController::class, 'updateProfile']);
    Route::put('/update-password', [UserController::class, 'updatePassword']);
    Route::delete('/count-delete', [UserController::class, 'countDelete']);
});

// LOCATION
Route::group([
    'middleware' => ['jwt.auth']
], function () {
});

Route::get('/locations', [LocationController::class, 'getAllLocations']);

// TRIP
Route::group([
    'middleware' => ['jwt.auth']
], function () {
    Route::post('/create-trip', [TripController::class, 'createTrip']);
    Route::get('/my-trips', [TripController::class, 'getAllMyTrips']);
    Route::get('/my-trip/{id}', [TripController::class, 'getMyTripById']);
    Route::delete('/my-trip/{id}', [TripController::class, 'deleteMyTripById']);
});

//GROUP
Route::group([
    'middleware' => ['jwt.auth']
], function () {
    Route::post('/my-trip/{id}/add-member', [GroupController::class, 'addMemberToTrip']);
    Route::delete('/my-trip/{tripId}/delete-member/{userId}', [GroupController::class, 'deleteMemberFromTrip']);
    Route::get('/my-trip/{tripId}/get-members', [GroupController::class, 'getMembersTrip']);
});

// ACTIVITY
Route::group([
    'middleware' => ['jwt.auth']
], function () {

    Route::get('/activities-location/{id}', [ActivityController::class, 'getActivityByLocationId']);
    Route::post('/activities-add-my-trip/{tripId}/{activityId}', [ActivityController::class, 'addActivityFromTrip']);
    Route::delete('/activities-my-trip/{tripId}/activity/{activityId}', [ActivityController::class, 'deleteActivityFromTrip']);
});

// SUPER_ADMIN
Route::group([
    'middleware' => ['jwt.auth', 'is_super_admin']
], function () {
    Route::get('/trips', [Super_adminController::class, 'getAllTrips']);
    Route::delete('/trip-delete/{id}', [Super_adminController::class, 'deleteTrip']);
    Route::get('/users', [Super_adminController::class, 'getAllUsers']);
    Route::post('/location-create', [Super_adminController::class, 'createLocation']);
    Route::post('/activity-create', [Super_adminController::class, 'createActivity']);
    Route::delete('/activity-remove/{id}', [Super_adminController::class, 'deleteActivitySuper']);
    Route::delete('/location-remove/{id}', [Super_adminController::class, 'deleteLocationSuper']);
    Route::get('/activities-super', [Super_adminController::class, 'getAllActivitiesSuper']);
    Route::get('/locations-super', [Super_adminController::class, 'getAllLocationsSuper']);
    //to do : Route::put('/changeRole', [SuperAdminController::class, 'changeRole']); 
});

// SUPERADMIN : LOCATIONS
// Route::group([
//     'middleware' => ['jwt.auth', 'is_super_admin']
// ], function () {

// Route::put('/location-update/{id}', [Super_adminController::class, 'updateLocation']);
// Route::delete('/location-delete/{id}', [Super_adminController::class, 'deleteLocation']);
// Route::get('/trip/{id}', [Super_adminController::class, 'getTripById']); X
// Route::put('/trip-update/{id}', [Super_adminController::class, 'updateTrip']);X
// Route::get('/activity/{id}', [ActivityController::class, 'getActivityById']); X
// Route::put('/my-trip/{id}', [TripController::class, 'updateMyTrip']); X
// Route::get('/location/{id}', [LocationController::class, 'getLocationById']); X

// });


// Route::get('/validateRole', [AuthController::class, 'validateRole']);