<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class TravelController extends Controller
{
    public function getAllTravels(Request $request)
    {
        try {
            $user = auth()->user();

            if ($user->role === "super_admin") {
                $travels = Travel::query()->get();
                if ($travels->isEmpty()) {
                    return response()->json(
                        [
                            "success" => true,
                            "message" => "There are not any travel",
                        ],
                        Response::HTTP_OK
                    );
                }

                return response()->json(
                    [
                        "success" => true,
                        "message" => "Travels obtained succesfully",
                        "data" => $travels
                    ],
                    Response::HTTP_OK
                );
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining the travels"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function getTravelById(Request $request, $id)
    {
        try {

            $user = auth()->user();

            if ($user->role === "super_admin") {
                $travel = Travel::query()->find($id);
                if (!$travel) {
                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Travel doesn't exist",
                        ],
                        Response::HTTP_OK
                    );
                }

                return response()->json(
                    [
                        "success" => true,
                        "message" => "Travel obtained succesfully",
                        "data" => $travel
                    ],
                    Response::HTTP_OK
                );
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error obtaining the travel"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}