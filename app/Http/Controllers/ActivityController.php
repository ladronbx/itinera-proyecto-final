<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
                    "name" => $activity->name,
                    "location" => $location ? $location->name : null,
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
                "name" => $activity->name,
                "location" => $location ? $location->name : null,
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

    public function getActivityByLocationId($id){
        try {
            $activities = Activity::query()->where('location_id', $id)->get();

            $data = $activities->map(function ($activity) {
                $location = Location::find($activity->location_id);

                return [
                    "name" => $activity->name,
                    "location" => $location ? $location->name : null,
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
}