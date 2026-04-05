<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return response()->json([
            'users' => [
                [
                    'id' => 1,
                    'name' => 'John',
                    'email' => 'john@gmail.com',
                    'role' => 'admin'
                ],
                [
                    'id' => 2,
                    'name' => 'Jane',
                    'email' => 'jane@gmail.com',
                    'role' => 'user'
                ],
                [
                    'id' => 3,
                    'name' => 'Bob',
                    'email' => 'bob@gmail.com',
                    'role' => 'editor'
                ],
            ]
        ]);
    }
}
