<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public static function register(RegisterUserRequest $request){

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return response()->json(["status" => true])->setStatusCode(201);
        
    }

    public static function login(LoginUserRequest $request){

        $user = User::where("email", $request->email)->first();

        $user->api_token = $user->createToken("API TOKEN")->plainTextToken;
        $user->save();


        if(Hash::check($request->password,$user->password)){
            return response()->json([
                "status" => true,
                "user" => $user
            ],200);
        }

        return response()->json(["status" => false], 401);
    }
}
