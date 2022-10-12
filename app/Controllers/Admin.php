<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\OrdersModel;
use App\Models\MenusModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $session = session();
        if ($session->get("logged_in")) {
            $menusModel = new MenusModel();
            $menus = $menusModel->findAll();
            $data = 
            [
                'session' => $session,
                'menus' => $menus
            ]; 
            // return view('menu', $data);
            return view('menu/index', $data);
            // return redirect()->to('order/index');
        }
    }

    public function login()
    {
        $session = session();
        $data = 
        [
            'session' => $session,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/login', $data);
    }

    public function auth()
    {
        $session = session();
        $adminModel = new AdminModel();
        $ordersModel = new OrdersModel();

        $rules = $adminModel->login;
        if($this->validate($rules))
        {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $admin = $adminModel->where('username', $username)->first();
            if($admin)
            {
                $password = $this->request->getVar('password');
                $verify = password_verify($password, $admin['password']);
                if($verify)
                {
                    $totalOrders = $ordersModel->countAllResults();
                    $data_ses = 
                    [
                        'username' => $admin['username'],
                        'totalOrders' => $totalOrders,
                        'logged_in' => true
                    ];
                    $session->set($data_ses);
                    return redirect()->to('menu/index');
                }
                else
                {
                    $session->setFlashdata('errors', 'password yang anda masukan salah.');
                    return redirect()->to('admin/login');
                }
            }
            else
            {
                $session->setFlashdata('errors', 'username yang anda masukan salah.');
                return redirect()->to('admin/login');
            }
        }
        else
        {
            $data = 
            [
                'session' => $session,
                'validation' => $this->validation
            ];
            return view('admin/login',$data);
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('admin/login');
    }
}