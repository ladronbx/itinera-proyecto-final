<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Location;
use App\Models\Location_trip;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class TripController extends Controller
{
    //to do: validar que no se pueda crear un viaje con fechas que ya existen en otro viaje
    public function createPersonalTrip(Request $request, $id)
    {
        try {
            $user = auth()->user();
            $location = Location::query()->find($id);

            if (!$location) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Location not found"
                    ],
                    Response::HTTP_NOT_FOUND
                );
            }

            $validator = Validator::make($request->all(), [
                'start_date' => 'required|date|before:end_date',
                'end_date' => 'required|date|after:start_date'
            ]);

            if ($validator->fails()) {
                return response()->json(
                    [
                        "success" => true,
                        "message" => "Error creating a trip",
                        "error" => $validator->errors()
                    ],
                    Response::HTTP_BAD_REQUEST
                );
            }

            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');

            //realizar una consulta en la tabla trips para ver si existe un viaje con las mismas fechas
            $trip = Trip::query()->where('start_date', $start_date)->where('end_date', $end_date)->first();

            if ($trip) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Trip already exists"
                    ],
                    Response::HTTP_CONFLICT
                );
            }

            $newTrip = Trip::create(
                [
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                ]
            );

            $newTrip->users()->attach($user->id);
            $newTrip->locations()->attach($location->id);
            $group = Group::find($newTrip->id);
            $group->users()->attach($user->id);


            return response()->json(
                [
                    "success" => true,
                    "message" => "Trip created successfully",
                    "data" => $newTrip
                ],
                Response::HTTP_CREATED
            );
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error creating a trip"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function getAllMyTrips(Request $request)
    {
        try {
            $user = auth()->user();
            $groups = Group::query()->where('user_id', $user->id)->get();

            $data = $groups->map(function ($group) {
                $dates = Trip::query()->where('id', $group->trip_id)->get();
                $location = Location_trip::query()->where('trip_id', $group->trip_id)->get();

                return [
                    "group" => $group,
                    "location" => $location,
                    "dates" => $dates,
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

    public function getMyTripById(Request $request, $id)
    {
        try {
            $user = auth()->user();
            $group = Group::query()->where('trip_id', $id)->where('user_id', $user->id)->first();

            if ($group->user_id != $user->id) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "You are not authorized to see this trip"
                    ],
                    Response::HTTP_UNAUTHORIZED
                );
            }

            $dates = Trip::query()->where('id', $group->trip_id)->first();
            $location = Location_trip::query()->where('trip_id', $group->trip_id)->first();

            return [
                "group" => $group,
                "location" => $location,
                "dates" => $dates,
            ];

            if (!$group->isEmpty()) {
                return response()->json(
                    [
                        "success" => true,
                        "message" => "Trip obtained succesfully",
                        "data" => [
                            "group" => $group,
                            "location" => $location,
                            "dates" => $dates,
                        ]
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
                    "message" => "Error obtaining the trips"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function updateMyTrip(Request $request, $id)
    {
        try {
            $user = auth()->user();
            $group = Group::query()->where('trip_id', $id)->where('user_id', $user->id)->first();
            $dates = Trip::query()->where('id', $group->trip_id)->first();
            $location = Location_trip::query()->where('trip_id', $group->trip_id)->first();

            if ($group->user_id != $user->id) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "You are not authorized to update this trip"
                    ],
                    Response::HTTP_UNAUTHORIZED
                );
            }

            $validator = Validator::make($request->all(), [
                'start_date' => 'required|date|before:end_date',
                'end_date' => 'required|date|after:start_date'
            ]);

            if ($validator->fails()) {
                return response()->json(
                    [
                        "success" => true,
                        "message" => "Error updating a trip",
                        "error" => $validator->errors()
                    ],
                    Response::HTTP_BAD_REQUEST
                );
            }

            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');

            $trip = Trip::query()->where('start_date', $start_date)->where('end_date', $end_date)->first();

            if ($trip) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Trip already exists"
                    ],
                    Response::HTTP_CONFLICT
                );
            }

            $dates->start_date = $start_date;
            $dates->end_date = $end_date;
            $dates->save();

            return response()->json(
                [
                    "success" => true,
                    "message" => "Trip updated successfully",
                    "data"  => [
                        "location" => $location,
                        "dates" => $dates,
                    ]
                ],
                Response::HTTP_OK
            );
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error updating a trip"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
