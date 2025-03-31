<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/user", [UserController::class, "index"])-> name("user.index");
Route::get("/create", [UserController::class, "create"])-> name("user.create");
