<?php

use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post("/send", [ChatController::class, "sendMessage"]);
Route::post("/new", [ChatController::class, "newUserJoined"]);
