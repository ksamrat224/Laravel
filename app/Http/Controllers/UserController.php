<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register (Request $request){
        $incomingFields = $request->validate([
            'name'=>'required|min:3|max:32',
            'email'=>'required|email',
            'password'=>'required|min:8|max:32',
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
      $user=  User::create($incomingFields);
      auth()->login($user);
      return redirect('/');
    }
}
