<?php 

namespace App\Controllers

class Halaman extends BaseController
{
    public function index()
    {
        $session = session();
        $data =
        [
            'session' => $session
        ];
        return view('halaman/index', $data);
    }
}