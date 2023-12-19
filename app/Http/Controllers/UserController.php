<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function updateProfile(Request $request)
{
    try {
        $token = auth()->user();
        $user = User::query()->find($token->id);

        $validator = Validator::make($request->all(), [
            'name' => 'nullable|min:3|max:100|regex:/^[a-zA-Z\s]*$/',
            'email' => 'nullable|unique:users|email',
            'password' => 'nullable|min:6|max:12|regex:/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[-+_!@#$%^&*.,?]).+$/',
            'image' => 'nullable|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Validation failed",
                    "error" => $validator->errors()
                ],
                Response::HTTP_BAD_REQUEST
            );
        }

        if ($request->has('name')) {
            $user->name = $request->input('name');
        }

        if ($request->has('email')) {
            $user->email = $request->input('email');
        }

        if ($request->has('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        if ($request->has('image')) {
            $user->image = $request->input('image');
        }

        $user->save();

        return response()->json(
            [
                "success" => true,
                "message" => "User updated",
                "data" => $user
            ],
            Response::HTTP_CREATED
        );

    } catch (\Throwable $th) {
        Log::error($th->getMessage());

        return response()->json(
            [
                "success" => false,
                "message" => "Error updating profile user"
            ],
            Response::HTTP_INTERNAL_SERVER_ERROR
        );
    }
}
    
    public function deleteUser()
    {
        try {
            $token = auth()->user();
            User::destroy($token->id);

            return response()->json(
                [
                    "success" => true,
                    "message" => "User deleted",
                ],
                Response::HTTP_OK
            );

        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error deleting user"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}