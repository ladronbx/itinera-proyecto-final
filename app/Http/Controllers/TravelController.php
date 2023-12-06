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
            $travels = Travel::query()->get();

            if($travels->isEmpty()){
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
}