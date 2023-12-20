<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        try {
            $userToken = auth()->user();
            Log::info('Authenticated user: ' . $userToken->id);


            if (!$userToken) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "No authenticated user"
                    ],
                    Response::HTTP_UNAUTHORIZED
                );
            };

            $user = User::find($userToken->id);

            $validator = Validator::make($request->all(), [
                'name' => 'nullable|min:3|max:100|regex:/^[a-zA-Z\s]*$/',
                'email' => 'nullable|unique:users|email',
                'image' => 'nullable|max:255',
            ]);

            if ($validator->fails()) {
                Log::info('Validation failed');
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
            Log::info('User updated successfully');

            return response()->json(
                [
                    "success" => true,
                    "message" => "User updated",
                    "data" => $user
                ],
                Response::HTTP_CREATED
            );
        } catch (\Throwable $th) {
            Log::error('Error in updateProfile: ' . $th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error updating profile user"
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }


    public function updatePassword(Request $request)
    {
        try {
            $userToken = auth()->user();
            Log::info('Authenticated user: ' . $userToken->id);


            if (!$userToken) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "No authenticated user"
                    ],
                    Response::HTTP_UNAUTHORIZED
                );
            };

            $user = User::find($userToken->id);

            $providedPassword = $request->input('currentPassword');
            $newPassword = $request->input('newPassword');

            $validator = Validator::make($request->all(), [
                'newPassword' => 'nullable|min:6|max:12|regex:/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[-+_!@#$%^&*.,?]).+$/',
            ]);

            if ($validator->fails()) {
                Log::info('Validation failed');
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Validation failed",
                        "error" => ["password" => $validator->errors()->first('newPassword')]
                    ],
                    Response::HTTP_BAD_REQUEST
                );
            }

            if (Hash::check($providedPassword, $user->password)) {
                $user->password = bcrypt($newPassword);
                $user->save();
                Log::info('Password updated successfully');

                return response()->json(
                    [
                        "success" => true,
                        "message" => "Password updated"
                    ],
                    Response::HTTP_OK
                );
            } else if (!Hash::check($providedPassword, $user->password)) {
                Log::info('Incorrect current password');
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Incorrect current password",
                        "error" => ["password" => "Incorrect current password"]
                    ],
                    Response::HTTP_UNAUTHORIZED
                );
            }
        } catch (\Throwable $th) {
            Log::error('Error in updatePassword: ' . $th->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => "Error updating password"
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
