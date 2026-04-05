<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get(uri:'get-all-users',[UserController:Class,'get-all-users']);
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
