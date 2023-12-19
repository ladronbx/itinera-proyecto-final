<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Group_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{
    public function addMemberToTrip(Request $request, $tripId)
    {
        try {
            $user = auth()->user();
            $group = Group::query()->where('trip_id', $tripId)->where('user_id', $user->id)->first();
            $email = $request->input('email');
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
            ]);

            if ($validator->fails()) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "The email field must be a valid email address",
                        "error" => $validator->errors()
                    ],
                    Response::HTTP_BAD_REQUEST
                );
            }

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
                        "message" => "You are not authorized to add members to this trip. Only the creator of the trip can add members."
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

    public function deleteMemberFromTrip($tripId, $userId)
    {
        try {
            $user = auth()->user();
            $group = Group::query()->where('trip_id', $tripId)->where('user_id', $user->id)->first();

            if ($group === null) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "You are not authorized to delete members from this trip. Only the creator of the trip can delete members.",
                    ],
                    Response::HTTP_UNAUTHORIZED
                );
            }
            if ($group->user_id != $user->id) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "You are not authorized to add members to this trip. Only the creator of the trip can add members.2222",
                        "data" => $group
                    ],
                    Response::HTTP_UNAUTHORIZED
                );
            }

            $groupToDelete = Group::query()->where('user_id', $userId)->where('trip_id', $tripId)->first();
            if ($groupToDelete === null) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Member does not exist",
                        "data" => $groupToDelete
                    ],
                    Response::HTTP_BAD_REQUEST
                );
            }
            
            $groupToDelete->users()->detach($userId);
            $groupToDelete->delete();

            return response()->json(
                [
                    "success" => true,
                    "message" => "Member successfully deleted from the trip",
                    "data" => $groupToDelete
                ],
                Response::HTTP_OK
            );

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json(
                [
                    "success" => false,
                    "message" => "Error deleting member from the trip",
                    "data" => $groupToDelete,
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
