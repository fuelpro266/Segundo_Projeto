<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])-> name('user.index');
Route::get('/users-show/{user}', [UserController::class, 'show'])-> name('user.show');
Route::get('/create', [UserController::class, 'create'])-> name('user.create');
Route::post('/cadastrar', [UserController::class, 'store'])-> name('user.store');
Route::put('/update-user/{user}', [UserController::class, 'update'])-> name('user.update');   
Route::get('/edit-user/{user}', [UserController::class, 'edit'])-> name('user.edit');   
Route::delete('/delete-user/{user}', [UserController::class, 'destroy'])-> name('user.destroy'); 