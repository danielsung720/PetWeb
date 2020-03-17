<?php

namespace App\Repositories;

use App\Model\Nav;
use App\Model\UserMenu;
use Illuminate\Database\Eloquent\Model;

class WebRepository extends Model
{
    private $nav;
    private $userMenu;
    public function __construct(Nav $nav, UserMenu $userMenu)
    {
        $this->nav = $nav;
        $this->userMenu = $userMenu;
    }

    public function getUserMenuData()
    {
        $data = $this->userMenu->get();
        return $data;
    }

    public function getNavData()
    {
        $data = $this->nav->get();
        return $data;
    }
}