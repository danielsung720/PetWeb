<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\PetService;

class PetController extends Controller
{
    private $petService;
    private $navField;
    private $userMenu;
    public function __construct(PetService $petService)
    {
        $this->petService = $petService;
        $this->navField = $this->petService->getNavMenu();
        $this->userMenu = $this->petService->getUserMenu();
    }

    public function index()
    {
        return view('frontend.index',['navField'=>$this->navField, 'userMenu'=>$this->userMenu]);
    }

    public function register()
    {
        return view('frontend.register',['navField'=>$this->navField, 'userMenu'=>$this->userMenu]);
    }
}
