<?php

namespace App\Http\Controllers;
use App\Models\Group;
use App\Models\Location;
use App\Models\Location_trip;
use App\Models\Trip;
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
}
