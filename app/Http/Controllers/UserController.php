<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class UserController extends Controller
{
    public function index(){
        $users = User::orderByDesc("id")->get();
        return view('users.index', ['users' => $users]);
    }

 

    public function create(){
        return view('users.create');
    }
    
    public function show(User $user){
        return view('users.show', ['users' => $user]);
    }

    public function destroy(User $user){
        $user->delete();
        $users = User::orderByDesc("id")->get();
        return view('users.index', ['users' => $users]);
    }

    public function edit(User $user){
        return view('users.edit', ['user' => $user]);
    }
    
    public function update(UserRequest $request, User $user){
        
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        $users = User::orderByDesc("id")->get();
        return view('users.index', ['users' => $users]);
    }

    public function store(UserRequest $request){
        $users = User::orderByDesc("id")->get();
        
        $request->validated();
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return view('users.index', ['users' => $users]);

        
    }
}
