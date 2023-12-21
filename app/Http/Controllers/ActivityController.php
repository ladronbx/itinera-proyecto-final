<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Location;
use App\Models\Trip;
use App\Models\TripActivity;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActivityController extends Controller
{
    public function getAllActivities()
    {
        try {
            $activities = Activity::get();

            $data = $activities->map(function ($activity) {
                $location = Location::find($activity->location_id);

                return [
                    "id" => $activity->id,
                    "name" => $activity->name,
                    "location" => $location->name,
                    "description" => $activity->description,
                    "image_1" => $activity->image_1,
                    "image_2" => $activity->image_2

                ];
            });

            if (!$activities->isEmpty()) {
                return response()->json(
                    [
                        "success" => false,
                        "data" => $data
                    ],
                    Response::HTTP_OK
                );
            } else {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Activities not found"
                    ],
                    Response::HTTP_NOT_FOUND
                );
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining an activity"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function getActivityById($id)
    {
        try {
            $activity = Activity::find($id);

            if (!$activity) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Activity not found"
                    ],
                    Response::HTTP_NOT_FOUND
                );
            }

            $location = Location::find($activity->location_id);

            $data = [
                "id" => $activity->id,
                "name" => $activity->name,
                "location" => $location->name,
                "description" => $activity->description,
                "image_1" => $activity->image_1,
                "image_2" => $activity->image_2
            ];

            return response()->json(
                [
                    "success" => true,
                    "message" => "Activity obtained successfully",
                    "data" => $data
                ],
                Response::HTTP_OK
            );
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining an activity"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function getActivityByLocationId($id)
    {
        try {
            $activities = Activity::query()->where('location_id', $id)->get();

            $data = $activities->map(function ($activity) {
                $location = Location::find($activity->location_id);

                return [
                    "id" => $activity->id,
                    "name" => $activity->name,
                    "location" => $location->name,
                    "description" => $activity->description,
                    "image_1" => $activity->image_1,
                    "image_2" => $activity->image_2
                ];
            });

            if (!$activities->isEmpty()) {
                return response()->json(
                    [
                        "success" => false,
                        "data" => $data
                    ],
                    Response::HTTP_OK
                );
            } else {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Activities not found"
                    ],
                    Response::HTTP_NOT_FOUND
                );
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining an activity"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function addActivityToTrip($id, Request $request)
    {
        try {
            $user = auth()->user();
            if (!$user) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "You are not authorized to add an activity to this trip. Only the creator of the trip can add activities.",
                    ],
                    Response::HTTP_UNAUTHORIZED
                );
            }

            $trip = Trip::find($id)->first();

            if (!$trip) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Trip not found"
                    ],
                    Response::HTTP_NOT_FOUND
                );
            }

            $activities = $request->input('activities');
            $activitiesAdded = [];
            foreach ($activities as $activity) {
                $trip_activity = TripActivity::create([
                    'trip_id' => $trip->id,
                    'activity_id' => $activity['id'],
                ]);
                $activitiesAdded[] = $trip_activity->id;
            }
            
            return response()->json(
                [
                    "success" => true,
                    "message" => "Activities added successfully",
                    "activitiesAdded" => $activitiesAdded
                ],
                Response::HTTP_OK
            );

        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error adding $activitiesAdded"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
