<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Group_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class GroupController extends Controller
{
    public function addMemberToTrip(Request $request, $tripId)
    {
        try {
            $user = auth()->user();
            $group = Group::query()->where('trip_id', $tripId)->where('user_id', $user->id)->first();
            $email = $request->input('email');
            Log::info('Request data: ', $request->all());

            if ($email === null || !is_string($email)) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Invalid email"
                    ],
                    Response::HTTP_BAD_REQUEST
                );
            }

            Log::info('Request data: ', $request->all());

            $newMember = User::where('email', $email)->first();

            if ($newMember === null) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Email does not exist"
                    ],
                    Response::HTTP_BAD_REQUEST
                );
            }

            if ($group->user_id != $user->id) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "You are not authorized to add members to this trip"
                    ],
                    Response::HTTP_UNAUTHORIZED
                );
            }

            Group::create([
                'user_id' => $newMember->id,
                'trip_id' => $tripId,
            ]);

            $group_user = Group::query()->where('user_id', $newMember->id)->where('trip_id', $tripId)->first();
            Group_user::create([
                'user_id' => $newMember->id,
                'group_id' => $group_user->id,
            ]);

            return response()->json(
                [
                    "success" => true,
                    "message" => "Member added successfully",
                ],
                Response::HTTP_OK
            );
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error adding member to the trip"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    // TO DO : deleteMembersFromTrip
}