<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\PetService;

class PetController extends Controller
{
    private $petService;
    public function __construct(PetService $petService)
    {
        $this->petService = $petService;
    }

    public function index()
    {
        $navField = $this->petService->getNavMenu();
        $userMenu = $this->petService->getUserMenu();

        return view('frontend.index', compact('navField', 'userMenu'));
    }
}
