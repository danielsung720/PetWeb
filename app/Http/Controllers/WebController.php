<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\WebService;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    private $webService;
    private $navField;
    private $userMenu;
    private $menuType;
    public function __construct(WebService $webService)
    {
        $this->webService = $webService;
        $this->menuType = Session::get('isAdmin');
        $this->navField = $this->webService->getNavMenu();
        $this->userMenu = $this->webService->getUserMenu($this->menuType);
    }

    public function index()
    {
        return view('frontend.index',['navField'=>$this->navField, 'userMenu'=>$this->userMenu]);
    }

    public function getRegister()
    {
        return view('frontend.register',['navField'=>$this->navField, 'userMenu'=>$this->userMenu]);
    }

    public function getLogin()
    {
        return view('frontend.login',['navField'=>$this->navField, 'userMenu'=>$this->userMenu]);
    }
}
