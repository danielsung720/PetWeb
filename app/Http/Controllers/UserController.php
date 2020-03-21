<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function postLogin(Request $request)
    {
        $request->validate([ 
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'max:12'],
        ]);

        $input['email'] = $request->email;
        $input['password'] = $request->password;

        $result = $this->userService->login($input);
            
        return $result;
    }

    public function postLogout()
    {
        Session::flush();
        return redirect('/');
    }

    public function postRegister(Request $request)
    {
        $request->validate([ 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user_data'],
            'password' => ['required', 'string', 'min:6', 'max:12'],
            'name' => ['required', 'string', 'max:255']
        ]);

        $input['email'] = $request->email;
        $input['password'] = $request->password;
        $input['name'] = $request->name;
        
        $this->userService->register($input);

        return redirect('/');
    }
}
