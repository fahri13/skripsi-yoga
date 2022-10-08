<?php 

namespace App\Controllers;

use CodeIgniter\Restful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

use App\Models\MenusModel;
use App\Models\OrdersModel;

class Order extends BaseController
{
    public function index()
    {
        $session = session();
        $menusModel = new MenusModel();
        $ordersModel = new OrdersModel();
        $orders = $ordersModel->findAll();
        // $orders = $ordersModel->findAll();
        $ordersTable = $ordersModel->orderBy('table', 'ASC')->findColumn('table');
        // $totalOrders = $ordersModel->countAllResults();
        // $orders = $ordersModel->findColumn('table');
        // dd($orders);
        // for($i = 1; $i<5; $i++)
        // {
        //     if($orders[$i]['table'] == $orders[$i++]{'table'})
        //     {
        //         dd($orders[$i]['table']);

        //     }
        //     // dd($orders);
        // }
     

        // if($orders)
        // {
        //     dd('sssss');
        // }
        // else
        // {
        //     dd('asdasda');
        // }
        $data = 
        [
            'session' => session(),
            'orders' => $orders,
            'ordersTable' => $ordersTable,
            // 'totalOrders' => $totalOrders,
            // 'ordersModel' => $ordersModel

        ];
        return view('order/index', $data);
    }
    
    // public function deleteAll($id = false)
    public function delete($id = false)
    {
        $session = session();
        if($id)
        {
            $ordersModel = new OrdersModel();
            $menusModel = new MenusModel();
            $orders = $ordersModel->where('id', $id)->first();
            $menus = $menusModel->where('name', $orders['menu'])->first();
            // if($orders['totalItem'] == 0 || $orders['totalItem'] <= 1)
            // {
            //     $data_orders =
            //     [
            //         'id' => $orders['id'],
            //     ];
            //     $ordersModel->delete($data_orders);
            // }
            // else
            // {
            //     $data_orders = 
            //     [
            //         'id' => $orders['id'],
            //         'totalItem' => $orders['totalItem'] - 1,
            //         'totalPrice' => $orders['totalPrice'] - $menus['price']
            //     ];
            //     $ordersModel->save($data_orders);
            // }
            $data_orders =
            [
                'id' => $orders['id']
            ];
            $ordersModel->delete($data_orders);
        }
        $orders = $ordersModel->findAll();
        $ordersTable = $ordersModel->orderBy('table', 'ASC')->findColumn('table');
        $data =
        [
            'session' => $session,
            'orders' => $orders,
            'ordersTable' => $ordersTable
        ];
        
        return view('order/index', $data);
    }

    public function tambah($id = null)
    {
        $session = session();
        $ordersModel = new OrdersModel();
        $order = $ordersModel->where('id', $id)->first();
        if($order)
        {
            return $this->respond($order);
        }
        else
        {
            return $this->fallNotFound('maap '.$id.' ga ada');
        }
    }
}