<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Group;
use App\Models\Location;
use App\Models\Location_trip;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Super_adminController extends Controller
{
    public function getAllTrips(Request $request)
    {
        try {
            $user = auth()->user();
    
            if ($user->role === "is_super_admin") {
    
                $groups = Group::query()->get();
    
                $data = $groups->map(function ($group) {
                    $dates = Trip::query()->where('id', $group->trip_id)->get();
                    $location_trip = Location_trip::query()->where('trip_id', $group->trip_id)->first();
                    $locationName = Location::query()->where('id', $location_trip->location_id)->first();
    
                    $location = $location_trip->location->name;
    
                    $members = Group::query()->where('trip_id', $group->trip_id)->get();
    
                    return [
                        "id" => $group->trip_id,
                        "memberscount" => $members->count(),
                        "location" => $location,
                        "start_date" => $dates[0]->start_date,
                        "end_date" => $dates[0]->end_date,
                        "image_1" => $locationName->image_1,
    
                    ];
                });
    
                if (!$groups->isEmpty()) {
                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Trips obtained succesfully",
                            "data" => $data
                        ],
                        Response::HTTP_OK
                    );
                }
               
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining the trips"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
    public function getTripById(Request $request, $id)
    {
        try {

            $user = auth()->user();

            if ($user->role === "is_super_admin") {
                $trip = Trip::query()->find($id);
                if (!$trip) {
                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Trip doesn't exist",
                        ],
                        Response::HTTP_OK
                    );
                }

                return response()->json(
                    [
                        "success" => true,
                        "message" => "Trip obtained succesfully",
                        "data" => $trip
                    ],
                    Response::HTTP_OK
                );
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining the trip"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
    
    public function updateTrip(Request $request, $id)
    {
        try {

            $user = auth()->user();

            if ($user->role === ("is_super_admin")) {
                $request->validate([
                    'start_date' => 'required|date|after:today',
                    'end_date' => 'required|date|after:start_date',
                ]);

                $trip = Trip::query()->find($id);

                if ($trip) {
                    $trip->start_date = $request->start_date;
                    $trip->end_date = $request->end_date;
                    $trip->save();

                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Trip updated succesfully",
                            "data" => $trip
                        ],
                        Response::HTTP_OK
                    );
                } else {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "Trip not found"
                        ],
                        Response::HTTP_NOT_FOUND
                    );
                }
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error updating the trip"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function deleteTrip(Request $request, $id)
    {
        try {
            $user = auth()->user();

            if ($user->role === ("is_super_admin")) {
                $trip = Trip::query()->find($id);

                if ($trip) {
                    $trip->delete();

                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Trip deleted succesfully",
                        ],
                        Response::HTTP_OK
                    );
                } else {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "Trip not found"
                        ],
                        Response::HTTP_NOT_FOUND
                    );
                }
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error deleting the trip"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function getMyTrips(Request $request)
    {
        try {

            $user = auth()->user();
            $trip = $user->trips;

            if($trip->isEmpty() || !$trip){
                return response()->json(
                    [
                        "success" => true,
                        "message" => "Trip obtained succesfully",
                        "data" => $trip
                    ],
                    Response::HTTP_OK
                );
            } else {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Trip not found"
                    ],
                    Response::HTTP_NOT_FOUND
                );
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining the trip"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function getAllUsers(Request $request)
    {
        try {
            $user = auth()->user();
    
            if ($user->role === "is_super_admin") {
                
                $users = User::query()->paginate($request->input('per_page', 10));
    
                $data = collect($users->items())->map(function ($user) {
                    return [
                        "id" => $user->id,
                        "name" => $user->name,
                        "email" => $user->email,
                        "image" => $user->image,
                        "role" => $user->role,
                        "is_active" => $user->is_active,
                    ];
                });
    
                if (!$users->isEmpty()) {
                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Users obtained successfully",
                            "data" => $data,
                            "pagination" => [
                                "current_page" => $users->currentPage(),
                                "total_pages" => $users->lastPage(),
                                "per_page" => $users->perPage(),
                                "total" => $users->total(),
                            ],
                        ],
                        Response::HTTP_OK
                    );
                }
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining the users"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function createLocation(Request $request)
    {
        try {
            $user = auth()->user();

            if ($user->role === "is_super_admin") {

                $request->validate([
                    'name' => 'required|string',
                    'description' => 'required|string',
                    'image_1' => 'nullable|string',
                    'image_2' => 'nullable|string',
                    'image_3' => 'nullable|string',
                ]);

                $defaultImage = 'https://thenounproject.com/api/private/icons/2616533/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0';

                $location = Location::query()->create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'image_1' => $request->image_1 ?? $defaultImage,
                    'image_2' => $request->image_2 ?? $defaultImage,
                    'image_3' => $request->image_3 ?? $defaultImage,
                ]);

                if (!$location) {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "Error creating the location"
                        ],
                        Response::HTTP_INTERNAL_SERVER_ERROR
                    );
                }

                return response()->json(
                    [
                        "success" => true,
                        "message" => "Location created succesfully",
                        "data" => $location
                    ],
                    Response::HTTP_CREATED
                );
            }else{
                return response()->json(
                    [
                        "success" => false,
                        "message" => "You are not have permission to create a location"
                    ],
                    Response::HTTP_INTERNAL_SERVER_ERROR
                );
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error creating the location"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function createActivity(Request $request)
    {
        try {
            $user = auth()->user();

            if ($user->role === "is_super_admin") {

                $request->validate([
                    'name' => 'required|string',
                    'description' => 'required|string',
                    'image_1' => 'nullable|string',
                    'image_2' => 'nullable|string',
                    'duration' => 'required|integer',
                    'location_name' => 'required|string',
                ]);

                $defaultImage = 'https://thenounproject.com/api/private/icons/2616533/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0';

                $location = Location::query()->where('name', $request->location_name)->first();

                if (!$location) {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "Location not found"
                        ],
                        Response::HTTP_NOT_FOUND
                    );
                }

                $activity = Activity::query()->create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'image_1' => $request->image_1 ?? $defaultImage,
                    'image_2' => $request->image_2 ?? $defaultImage,
                    'duration' => $request->duration,
                    'location_id' => $location->id,
                ]);

                if (!$activity) {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "Error creating the activity"
                        ],
                        Response::HTTP_INTERNAL_SERVER_ERROR
                    );
                }

                return response()->json(
                    [
                        "success" => true,
                        "message" => "Activity created succesfully",
                        "data" => $activity
                    ],
                    Response::HTTP_CREATED
                );
            }else{
                return response()->json(
                    [
                        "success" => false,
                        "message" => "You are not have permission to create a activity"
                    ],
                    Response::HTTP_INTERNAL_SERVER_ERROR
                );
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error creating the activity",
                    "error" => $th->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function deleteActivitySuper(Request $request, $id)
    {
        try {

            $user = auth()->user();

            if ($user->role === ("is_super_admin")) {
                $activity = Activity::query()->find($id);

                if ($activity) {
                    $activity->delete();

                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Activity deleted succesfully",
                        ],
                        Response::HTTP_OK
                    );
                } else {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "Activity not found"
                        ],
                        Response::HTTP_NOT_FOUND
                    );
                }
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error deleting the activity"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }



    
    
    public function getAllActivitiesSuper(Request $request)
    {
        try {
            $user = auth()->user();
    
            if ($user->role === "is_super_admin") {
    
                // Cambia el método get() por paginate()
                $activities = Activity::query()->paginate($request->input('per_page', 10));
    
                // Convierte $activities a una colección antes de usar map
                $data = collect($activities->items())->map(function ($activity) {
                    return [
                        "id" => $activity->id,
                        "name" => $activity->name,
                        "description" => $activity->description,
                        "image_1" => $activity->image_1,
                        "image_2" => $activity->image_2,
                        "duration" => $activity->duration,
                        "location_id" => $activity->location_id,
                    ];
                });
    
                if (!$activities->isEmpty()) {
                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Activities obtained successfully",
                            "data" => $data,
                            // Agrega información adicional de paginación a la respuesta
                            "pagination" => [
                                "current_page" => $activities->currentPage(),
                                "total_pages" => $activities->lastPage(),
                                "per_page" => $activities->perPage(),
                                "total" => $activities->total(),
                            ],
                        ],
                        Response::HTTP_OK
                    );
                }
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining the activities"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    


    

    public function deleteLocationSuper(Request $request, $id)
    {
        try {

            $user = auth()->user();

            if ($user->role === ("is_super_admin")) {
                $location = Location::query()->find($id);
                $location_trip = Location_trip::query()->where('location_id', $id)->first();
                $trip = $location_trip ? Trip::query()->where('id', $location_trip->trip_id)->first() : null;

                if ($location) {
                    $location->delete();
                    if($location_trip){
                        $location_trip->delete();
                    }
                    if($trip){
                        $trip->delete();
                    }

                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Location deleted succesfully",
                        ],
                        Response::HTTP_OK
                    );
                } else {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "Location not found"
                        ],
                        Response::HTTP_NOT_FOUND
                    );
                }
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error deleting the location"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function getAllLocationsSuper(Request $request)
    {
        try {
            $user = auth()->user();
    
            if ($user->role === "is_super_admin") {
    
                $locations = Location::query()->get();
    
                $data = $locations->map(function ($location) {
                    return [
                        "id" => $location->id,
                        "name" => $location->name,
                        "description" => $location->description,
                        "image_1" => $location->image_1,
                        "image_2" => $location->image_2,
                        "image_3" => $location->image_3,
                    ];
                });
    
                if (!$locations->isEmpty()) {
                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Locations obtained succesfully",
                            "data" => $data
                        ],
                        Response::HTTP_OK
                    );
                }
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining the locations"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function deleteUser(Request $request, $id)
    {
        try {

            $user = auth()->user();

            if ($user->role === ("is_super_admin")) {
                $user = User::query()->find($id);

                if ($user) {
                    $user->delete();

                    return response()->json(
                        [
                            "success" => true,
                            "message" => "User deleted succesfully",
                        ],
                        Response::HTTP_OK
                    );
                } else {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "User not found"
                        ],
                        Response::HTTP_NOT_FOUND
                    );
                }
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error deleting the user"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}