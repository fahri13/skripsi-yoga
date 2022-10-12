<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MenusModel;

class Menu extends ResourceController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->menusModel = model('MenusModel');
    }
    public function index()
    {
        $menus = $this->menusModel->findAll();
        $data = [
            'menu' => $menus
        ];

        return $this->respond($data, 200);
    }
}
