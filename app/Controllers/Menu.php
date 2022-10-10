<?php

namespace App\Controllers;

use CodeIgniter\Restful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

use App\Models\MenusModel;
use App\Models\OrdersModel;

class Menu extends BaseController
{
    public function __construct()
    {
        $this->menusModel = model('MenusModel');
        $this->validate = \Config\Services::validation();
    }

    public function index()
    {
        $session = session();
        $menus = $this->menusModel->findAll();
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
        if($name)
        {
            $menus = $this->menusModel->where('name', $name)->first();
            if($menus['stock'] == 'tersedia')
            {
                $data_menus = 
                [
                    'id' => $menus['id'],
                    'stock' => 'habis'
                ];    
                $this->menusModel->save($data_menus);
                $menus_update = $this->menusModel->orderBy('stock', 'ASC')->findAll();
            }
            else
            {
                $data_menus = 
                [
                    'id' => $menus['id'],
                    'stock' => 'tersedia'
                ];    
                $this->menusModel->save($data_menus);
                $menus_update = $this->menusModel->orderBy('stock', 'ASC')->findAll();
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
            $menus = $this->menusModel->orderBy('stock', 'ASC')->findAll();
            
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
        $ordersModel = new OrdersModel();
        $search = $this->request->getVar('search');
        $categories = $this->request->getVar('categories');
        // $table = new \CodeIgniter\Views\Table();
        if($search || $categories)
        {
            if($search && $categories)
            {
                $menus = $this->menusModel->where('category', $categories)->like('name', $search)->findAll();
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
                    $menus = $this->menusModel->like('name', $search)->findAll();
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
                    $menus = $this->menusModel->like('category', $categories)->findAll();
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
        $menus = $this->menusModel->findAll();

        return $this->respond($menus, 200);
    }

    public function store_product(){
        $dataProduct = $this->menusModel->where('name', $this->request->getPost('name_product'))->findAll();

        if (count($dataProduct) > 0){
            return redirect()->back();
        }

        if ($this->request->getMethod() === 'post' && $this->validate([
            'name_product' => 'required|min_length[3]|max_length[255]',
            'detail_product'  => 'required',
            'price' => 'required'
        ])) {
            $dataBerkas = $this->request->getFile('file_product');
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('uploads/berkas/', $fileName);
            $this->menusModel->insert([
                'name' => $this->request->getPost('name_product'),
                'contentDetail'  => $this->request->getPost('detail_product'),
                'imageUrl'  => $fileName,
                'price' => $this->request->getPost('price'),
                'rating' => '4.9',
                'stock' => 'tersedia',
                'category' => $this->request->getPost('category')
            ]);

            return redirect()->to('menu');
        }else{
            print_r($this->validate->getErrors());
        }
    }

}