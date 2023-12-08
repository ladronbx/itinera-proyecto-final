<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class Super_adminController extends Controller
{
    public function getAllTrips(Request $request)
    {
        try {
            $user = auth()->user();

            if ($user->role === "super_admin") {
                $trips = Trip::query()->get();
                if ($trips->isEmpty()) {
                    return response()->json(
                        [
                            "success" => true,
                            "message" => "There are not any trip",
                        ],
                        Response::HTTP_OK
                    );
                }

                return response()->json(
                    [
                        "success" => true,
                        "message" => "Trips obtained succesfully",
                        "data" => $trips
                    ],
                    Response::HTTP_OK
                );
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

            if ($user->role === "super_admin") {
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

            if ($user->role === ("super_admin")) {
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

            if ($user->role === ("super_admin")) {
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
