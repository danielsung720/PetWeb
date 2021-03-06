<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\WebService;
use App\Service\UserService;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    private $webService;
    private $userService;
    private $navField;
    private $userMenu;
    private $identity;
    private $email;
    public function __construct(
        WebService $webService,
        UserService $userService
    ) {
        $this->webService = $webService;
        $this->userService = $userService;
        $this->identity = Session::get('identity');
        $this->email = Session::get('email');
        $this->navField = $this->webService->getNavMenu();
        $this->userMenu = $this->webService->getUserMenu($this->identity);
    }

    public function index()
    {
        return view('frontend.index',['navField' => $this->navField, 'userMenu' => $this->userMenu]);
    }

    public function getRegister()
    {
        return view('frontend.register',['navField' => $this->navField, 'userMenu' => $this->userMenu]);
    }

    public function getLogin()
    {
        return view('frontend.login',['navField' => $this->navField, 'userMenu' => $this->userMenu]);
    }

    public function getUser()
    {
        $userData = $this->userService->getUserData($this->email);

        return view('frontend.update_user',[
            'navField' => $this->navField,
            'userMenu' => $this->userMenu,
            'userData' => $userData
        ]);
    }

    public function adminGetUser(Request $request)
    {
        $email = $request->email;
        $userData = $this->userService->getUserData($email);

        return view('frontend.admin_user',[
            'navField' => $this->navField,
            'userMenu' => $this->userMenu,
            'userData' => $userData
        ]);
    }

    public function adminSlectUser($email)
    {
        $userData = $this->userService->getUserData($email);

        return view('frontend.admin_update_user',[
            'navField' => $this->navField,
            'userMenu' => $this->userMenu,
            'userData' => $userData
        ]);
    }

    public function adminGetUserMenu()
    {
        $menuType = 'all';
        $allUserMenu = $this->webService->getUserMenu($menuType);

        return view('frontend.admin_user_menu',[
            'navField' => $this->navField,
            'userMenu' => $this->userMenu,
            'allUserMenu' => $allUserMenu
        ]);
    }
}
