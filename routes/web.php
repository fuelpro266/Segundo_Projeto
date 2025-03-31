<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get("/user", [UserController::class, "index"])-> name("user.index");
Route::get("/users-show", [UserController::class, "show"])-> name("user.show");
Route::get("/create", [UserController::class, "create"])-> name("user.create");
Route::post("/cadastrar", [UserController::class, "store"])-> name("user.store");   