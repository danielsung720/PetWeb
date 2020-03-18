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

    public function getUserMenuData($menuType)
    {
        if($menuType === null) {
            $data = $this->userMenu->where('type', $menuType)->orWhere('type', 5)->get();
        } else {
            $data = $this->userMenu->where('type', $menuType)->orWhere('type', 4)->orWhere('type', 5)->get();
        }
        return $data;
    }

    public function getNavData()
    {
        $data = $this->nav->get();
        return $data;
    }
}