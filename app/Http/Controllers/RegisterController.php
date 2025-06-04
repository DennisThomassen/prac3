<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
    ]);

    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
        'role' => 'gambler', // standaardrol
        'balance' => 50.00   // startsaldo
    ]);

    $token = $user->createToken('api_token')->plainTextToken;

    return response()->json(['token' => $token, 'user' => $user]);
}

}
