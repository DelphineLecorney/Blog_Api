<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if($validator->fails()) {
            $this->throwValidationException(
                $request,
                $validator
            );
        }

        $user = $this->create($request->all());

        $token = Auth::login($user);

        return response()->json(['status' => 201, 'message' => 'User registered successfully', 'data' => $user, 'token' => $token], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            $token = Auth::login($user);

            return response()->json(['status' => 200, 'message' => 'Login successful', 'data' => $user, 'token' => $token], 200);
        } else {
            return response()->json(['status' => 401, 'message' => 'Invalid credentials'], 401);
        }
    }

    public function logout(Request $request)
    {

    }
}
