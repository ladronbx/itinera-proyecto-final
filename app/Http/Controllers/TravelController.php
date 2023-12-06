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

    public function createTravel(Request $request)
    {
        try {

            $user = auth()->user();

            if ($user->role === ("super_admin")) {
                $request->validate([
                    'start_date' => 'required|date|after:today',
                    'end_date' => 'required|date|after:start_date',
                ]);

                $travel = Travel::query()->create([
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                ]);

                return response()->json(
                    [
                        "success" => true,
                        "message" => "Travels created succesfully",
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
                    "message" => "Error creating the travel"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function updateTravel(Request $request, $id)
    {
        try {

            $user = auth()->user();

            if ($user->role === ("super_admin")) {
                $request->validate([
                    'start_date' => 'required|date|after:today',
                    'end_date' => 'required|date|after:start_date',
                ]);

                $travel = Travel::query()->find($id);

                if ($travel) {
                    $travel->start_date = $request->start_date;
                    $travel->end_date = $request->end_date;
                    $travel->save();

                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Travel updated succesfully",
                            "data" => $travel
                        ],
                        Response::HTTP_OK
                    );
                } else {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "Travel not found"
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
                    "message" => "Error updating the travel"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function deleteTravel(Request $request, $id)
    {
        try {

            $user = auth()->user();

            if ($user->role === ("super_admin")) {
                $travel = Travel::query()->find($id);

                if ($travel) {
                    $travel->delete();

                    return response()->json(
                        [
                            "success" => true,
                            "message" => "Travel deleted succesfully",
                        ],
                        Response::HTTP_OK
                    );
                } else {
                    return response()->json(
                        [
                            "success" => false,
                            "message" => "Travel not found"
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
                    "message" => "Error deleting the travel"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }


    public function getMyTravels(Request $request)
    {
        try {

            $user = auth()->user();
            $travel = $user->travels;

            if($travel->isEmpty() || !$travel){
                return response()->json(
                    [
                        "success" => true,
                        "message" => "Travel obtained succesfully",
                        "data" => $travel
                    ],
                    Response::HTTP_OK
                );
            } else {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Travel not found"
                    ],
                    Response::HTTP_NOT_FOUND
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
