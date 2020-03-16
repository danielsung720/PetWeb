<?php

namespace App\Service;

use App\Repositories\PetRepository;
use Illuminate\Database\Eloquent\Collection;

class PetService
{
    private $petRepository;
    public function __construct(PetRepository $petRepository)
    {
        $this->petRepository = $petRepository;
    }

    public function getUserMenu()
    {
        $data = $this->petRepository->getUserMenuData();
        $menu = $this->getMenu($data);

        return $menu;
    }

    public function getNavMenu()
    {
        $data = $this->petRepository->getNavData();
        $menu = $this->getMenu($data);

        return $menu;
    }

    public function getMenu($data)
    {
        if(!$data instanceof Collection) { $data->collect($data); }
        $data = $data->toArray();

        // get title
        $title = [];
        foreach($data as $item) {
            if($item['parent'] == '') {
                $title[] = array_shift($data);
            }
        }

        // get sub
        foreach($title as $key => $item) {
            foreach($data as $sub) {
                if($item['field'] == $sub['parent']) {
                    $title[$key]['sub'][] = array_shift($data);
                }
            }
            if(!isset($title[$key]['sub'])) {
                $title[$key]['sub'][0]['id'] = '';
                $title[$key]['sub'][0]['field'] = '';
                $title[$key]['sub'][0]['icon_path'] = '';
                $title[$key]['sub'][0]['route_name'] = '';
                $title[$key]['sub'][0]['parent'] = '';
            }
        }

        return $title;
    }
}