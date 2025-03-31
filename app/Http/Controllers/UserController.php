<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::orderByDesc("id")->get();
        return view("users.show", ['users' => $users]);
    }

    public function create(){
        return view("users.create");
    }
    
    public function show(User $users){
        return view("users.show", ['users' => $users]);
    }


    public function store(UserRequest $user){
        $user->validated();
        

        User::create([
            "name" => $user->name,
            "email" => $user->email,
            "password" => Hash::make($user->password),
        ]);
    }
}
