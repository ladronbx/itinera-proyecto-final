<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        try {
            $token = auth()->user();
            $user = User::query()->find($token->id);

            $name = $request->input('name');
            $email = $request->input('email');
            $password = $request->input('password');
            $image = $request->input('image');

            if ($request->has('name')) {
                $user->name = $name;
            }

            if ($request->has('email')) {
                $user->email = $email;
            }

            if ($request->has('password')) {
                $user->password = bcrypt($password);
            }

            if ($request->has('image')) {
                $user->image = $image;
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
}