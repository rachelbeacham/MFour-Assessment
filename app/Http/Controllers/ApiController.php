<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ApiController extends Controller
{
 public function getAllUsers() {
        $users = User::get()->toJson();
        return response($users, 200);
    }

     public function store(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required',
        ]);
        $user = User::create($request->all());

        return response()->json([
            "message" => "user record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        if (User::where('id', $id)->exists()) {
            $user->update($request->all());
            return response()->json([
                "message" => 'user record updated'
            ], 200);
        } else {
            return response()->json([
                "message" => 'user not found'
            ],404);
        }
    }
}
