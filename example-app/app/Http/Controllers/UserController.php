<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3' ,'max:10'],
            'email' => ['required', 'email'],
            'password' =>['required', 'min:8', 'max:200']
        ]);
        return 'Hello form our controller';
    }
}
