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
    private $identity;
    public function __construct(WebService $webService)
    {
        $this->webService = $webService;
        $this->identity = Session::get('identity');
        $this->navField = $this->webService->getNavMenu();
        $this->userMenu = $this->webService->getUserMenu($this->identity);
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

    public function getMember()
    {
        return view('frontend.member',['navField'=>$this->navField, 'userMenu'=>$this->userMenu]);
    }
}
