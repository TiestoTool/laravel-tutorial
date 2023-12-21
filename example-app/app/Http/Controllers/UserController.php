<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' =>'required'
        ]);
        return 'Hello form our controller';
    }
}
