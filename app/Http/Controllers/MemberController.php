<?php

namespace App\Http\Controllers;

use App\Model\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function postLogin(Request $request)
    {
        if($request->email !== null && $request->password !== null) {
            $userData = UserData::where('email', $request->email)->first();
            
            if($request->email == $userData['email'] && $request->password == $userData['password']) {
                // 登入成功
                $isAdmin = $userData['isAdmin'];
                $name = $userData['name'];
                Session::put([
                    'isAdmin' => $isAdmin,
                    'name' => $name
                    ]);
                return redirect('/');
            } else {
                // 登入失敗
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }
    }

    public function postRegister(Request $request)
    {
        $request->validate([ 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user_data'],
            'password' => ['required', 'string', 'min:6', 'max:12'],
            'name' => ['required', 'string', 'max:255']
        ]);

        $create = UserData::create([
            'email' => $request['email'],
            'password' => $request['password'],
            'name' => $request['name'],
        ]);

        if ($create)
            return redirect('/');
    }
}
