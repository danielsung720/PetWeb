<?php

namespace App\Http\Controllers;

use App\UserData;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([ 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user_data'],
            'password' => ['required', 'string', 'min:6', 'max:12'],
            'name' => ['required', 'string', 'max:255']
        ]);

        $apiToken = Str::random(10);
        $create = UserData::create([
            'email' => $request['email'],
            'password' => $request['password'],
            'name' => $request['name'],
            'api_token' => $apiToken,
        ]);

        if ($create)
            return redirect('/');
    }
}
