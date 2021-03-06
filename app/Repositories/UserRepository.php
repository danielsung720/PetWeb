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
        $data = $this->userData->where('email', $email)->get();

        return $data;
    }

    public function create(array $input)
    {
        $this->userData->create([
            'email' => $input['email'],
            'password' => hash("sha256", $input['password'] . 'petweb520'),
            'name' => $input['name'],
        ]);
    }

    public function fakeDelete($email)
    {
        $this->userData->where('email', $email)->update([
            'active' => '0',
        ]);
    }

    public function updateDate(array $input)
    {
        $this->userData->where('email', $input['email'])->update([
            'password' => $input['password'],
            'name' => $input['name'],
        ]);
    }

    public function getAllUserData()
    {
        $data = $this->userData->where('active', '1')->paginate(8);

        return $data;
    }
}