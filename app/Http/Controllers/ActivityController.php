<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class ActivityController extends Controller
{
    public function getAllActivities(Request $request)
    {
        try {
            $activities = Activity::get();

            if (!$activities) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Activity not found"
                    ],
                    Response::HTTP_NOT_FOUND
                );
            }

            return response()->json(
                [
                    "success" => true,
                    "message" => "Activities obtained successfully",
                    "data" => $activities
                ],
                Response::HTTP_CREATED
            );
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining a trip"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function getActivityById(Request $request, $id)
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

            return response()->json(
                [
                    "success" => true,
                    "message" => "Activity obtained successfully",
                    "data" => $activity
                ],
                Response::HTTP_CREATED
            );
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining a trip"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
