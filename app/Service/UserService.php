<?php

namespace App\Service;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Session;

class UserService
{
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(array $input)
    {
        $userData = $this->userRepository->getUserData($input['email']);

        if($input['email'] == $userData['email'] && $input['password'] == $userData['password']) {
            $identity = $userData['identity'];
            $name = $userData['name'];
            Session::put([
                'identity' => $identity,
                'name' => $name ]);
            
                return redirect('/');
        } else {
            return redirect('/login');
        }
    }
}