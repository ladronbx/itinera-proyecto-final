<?php

namespace App\Http\Controllers;


use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LocationController extends Controller
{
    public function getAllLocations(Request $request)
    {
        try {
            $locations = Location::get();

            if (!$locations) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Location not found"
                    ],
                    Response::HTTP_NOT_FOUND
                );
            }

            return response()->json(
                [
                    "success" => true,
                    "message" => "Locations obtained successfully",
                    "data" => $locations
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

    public function getLocationById(Request $request, $id)
    {
        try {
            $location = Location::find($id);

            if (!$location) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Location not found"
                    ],
                    Response::HTTP_NOT_FOUND
                );
            }

            return response()->json(
                [
                    "success" => true,
                    "message" => "Location obtained successfully",
                    "data" => $location
                ],
                Response::HTTP_CREATED
            );
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining a location"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}