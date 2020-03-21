<?php

namespace App\Repositories;

use App\Model\UserData;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends Model
{
    private $userData;
    public function __construct(UserData $userData)
    {
        $this->userData = $userData;
    }

    public function getUserData($email)
    {
        $data = $this->userData->where('email', $email)->first();

        return $data;
    }

    public function create(array $input)
    {
        $this->userData->create([
            'email' => $input['email'],
            'password' => $input['password'],
            'name' => $input['name'],
        ]);
    }
}