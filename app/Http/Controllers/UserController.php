<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register (Request $request){
        $incomingFields = $request->validate([
            'name'=>'required|min:3|max:32',
            'email'=>'required|email',
            'password'=>'required|min:8|max:32',
        ]);
        return "thanks for registering";
    }
}
