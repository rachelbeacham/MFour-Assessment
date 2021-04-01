<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ApiController extends Controller
{
    public function getAllUsers() {

    }

     public function createUser(Request $request) {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();

        return response()->json([
            "message" => "user record created"
        ], 201);
    }

    public function updateUser(Request $request, $id) {

    }
}
