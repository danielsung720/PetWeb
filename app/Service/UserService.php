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
        $password = hash("sha256", $input['password'] . 'petweb520');
        if($input['email'] == $userData['email'] && $password == $userData['password']) {
            $identity = $userData['identity'];
            $name = $userData['name'];
            Session::put([
                'email' => $userData['email'],
                'identity' => $identity,
                'name' => $name ]);
            
                return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function register(array $input)
    {
        $this->userRepository->create($input);
    }

    public function getUserData($email)
    {
        $data = $this->userRepository->getUserData($email);

        return $data;
    }

    public function update(array $input)
    {
        if($input['password'] == null) {
            $userData = $this->userRepository->getUserData($input['email']);
            $input['password'] = $userData['password'];
        } else {
            $input['password'] = hash("sha256", $input['password'] . 'petweb520');
        }

        $this->userRepository->updateDate($input);
    }

    public function getAllUserData()
    {
        $data = $this->userRepository->getAllUserData();

        return $data;
    }
}