<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MenusModel;

class Api extends ResourceController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->menusModel = model('MenusModel');
    }

    public function getMenus()
    {
        $menus = $this->menusModel->findAll();
        $data = [
            'menu' => $menus
        ];

        return $this->respond($data, 200);
    }

    public function sortPrice(){
        $menus = $this->menusModel->where('stock', 'tersedia')->orderBy('price', 'ASC')->findAll();
        $data = [
            'menu' => $menus
        ];

        return $this->respond($data, 200);
    }
}
