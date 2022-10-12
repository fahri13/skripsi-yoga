<?php

namespace App\Controllers;

use CodeIgniter\Restful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

use App\Models\MenusModel;
use App\Models\OrdersModel;

class Menu extends BaseController
{
    public function index()
    {
        $session = session();
        $menusModel = new MenusModel();
        $menus = $menusModel->findAll();
        $data = 
        [
            'session' => $session,
            'menus' => $menus
        ]; 
        return view('menu/index', $data);
    }

    public function stok($name = false)
    {
        $session = session();
        $menusModel = new MenusModel();
        if($name)
        {
            $menus = $menusModel->where('name', $name)->first();
            if($menus['stok'] == 'tersedia')
            {
                $data_menus = 
                [
                    'id' => $menus['id'],
                    'stok' => 'habis'
                ];    
                $menusModel->save($data_menus);
                $menus_update = $menusModel->orderBy('stok', 'ASC')->findAll();
            }
            elseif($menus['stok'] == 'habis')
            {
                $data_menus = 
                [
                    'id' => $menus['id'],
                    'stok' => 'tersedia'
                ];    
                $menusModel->save($data_menus);
                $menus_update = $menusModel->orderBy('stok', 'ASC')->findAll();
            }
            $data =
            [
                'session' => $session,
                'menus' => $menus_update
            ];
            return view('menu/stok', $data);
        }
        else
        {
            $menus = $menusModel->orderBy('stok', 'ASC')->findAll();
            
            $data =
            [
                'session' => $session,
                'menus' => $menus
            ];
            return view('menu/stok', $data);
        }
    }

    // public function add()
    // {
    //     $session = session();
    //     $data = 
    //     [
    //         'se`    '
    //     ];
    // }

    public function search()
    {
        $session = session();
        $menusModel = new MenusModel();
        $ordersModel = new OrdersModel();
        $search = $this->request->getVar('search');
        $categories = $this->request->getVar('categories');
        // $table = new \CodeIgniter\Views\Table();
        if($search || $categories)
        {
            if($search && $categories)
            {
                $menus = $menusModel->where('category', $categories)->like('name', $search)->findAll();
                if($menus)
                {
                    $data = 
                    [
                        'session' => $session,
                        'menus' => $menus
                    ];
                    return view('menu/stok', $data);

                    
                }
                else
                {
                    $orders = $ordersModel->join('menus', 'menus.name=orders.menu')->where('category', $categories)->like('table', $search)->findAll();
                    // return redirect()->to('/order/search/'.$search);
                    if($orders)
                    {
                        $table = $ordersModel->join('menus', 'menus.name=orders.menu')->where('category', $categories)->like('table', $search)->first();
                        $data =
                        [
                            'session' => $session,
                            'orders' => $orders,
                            'table' => $table
                        ];
                        return view('order/index-search', $data);
                    }
                    else
                    {
                        // kembali ke halaman dimana admin melakukan pencarian
                        return redirect()->to('/order/index');
                    }
                }
            }
            else
            {
                if($search)
                {
                    $menus = $menusModel->like('name', $search)->findAll();
                    if($menus)
                    {
                        $data = 
                        [
                            'session' => $session,
                            'menus' => $menus
                        ];
                        return view('menu/stok', $data);
                    }
                    else
                    {
                        $orders = $ordersModel->like('table',$search)->findAll();
                        if($orders)
                        {
                            $table = $ordersModel->like('table',$search)->first();
                            $data =
                            [
                                'session' => $session,
                                'orders' => $orders,
                                'table' => $table
                            ];
                            return view('order/index-search', $data);
                        }
                        else
                        {
                            // kembali ke halaman dimana admin melakukan pencarian
                            return redirect()->to('/order/index');
                        }
                    }
                }
                else
                {
                    $menus = $menusModel->like('category', $categories)->findAll();
                    if($menus)
                    {
                        $data = 
                        [
                            'session' => $session,
                            'menus' => $menus
                        ];
                        return view('menu/stok', $data);
                    }
                    else
                    {
                        return redirect()->to('/menu/index');
                        // aktifkan redirect kalau sudah pake ajax
                        // return redirect()->to('/order/search/'.$categories);
                    }
            }
            }
        }
    }

    public function show()
    {
        $session = session();
        $menusModel = new MenusModel();
        $menus = $menusModel->findAll();

        return $this->respond($data, 200);
    }

}