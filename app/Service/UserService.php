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
        if($input['email'] == $userData[0]['email'] && $password == $userData[0]['password']) {
            $identity = $userData[0]['identity'];
            $name = $userData[0]['name'];
            Session::put([
                'email' => $userData[0]['email'],
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

    public function update(array $input)
    {
        if($input['password'] == null) {
            $userData = $this->userRepository->getUserData($input['email']);
            $input['password'] = $userData[0]['password'];
        } else {
            $input['password'] = hash("sha256", $input['password'] . 'petweb520');
        }

        $this->userRepository->updateDate($input);
    }

    public function delete($email)
    {
        $this->userRepository->fakeDelete($email);
    }

    public function getUserData($email)
    {
        if($email == null) {
            $data = $this->userRepository->getAllUserData();
        } else {
            $data = $this->userRepository->getUserData($email);
            $data = collect($data)->toArray();
        }

        return $data;
    }
}