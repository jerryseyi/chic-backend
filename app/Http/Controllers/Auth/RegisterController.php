<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create($credentials);

        $token = $user->createToken('auth_token');

        return response()->json([
           'user' => $user,
           'token' => $token->plainTextToken
        ]);
    }
}
