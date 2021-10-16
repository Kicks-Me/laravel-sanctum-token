<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        //1. Validation field
        $pureField = $request -> validate([
            'fullname' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'tel' => 'required',
            'role' => 'required|integer'
        ]);

        //2. Create user
        $userData = User::create([
            'fullname' => $pureField['fullname'],
            'username' => $pureField['username'],
            'email' => $pureField['email'],
            'password' => $pureField['password'],
            'tel' => $pureField['tel'],
            'role' => $pureField['role']
        ]);

        //3. Create Token
        $token = $userData->createToken('Terminal')->plainTextToken;
        $response = [
                    'user' => $userData,
                    'token' => $token
                ];

        return response($response, 401); //Method not allow or unautherize
    }
}
