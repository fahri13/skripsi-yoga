<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MenusModel; 

class OrderSeeder extends Seeder
{
    public function run()
    {
        $menusModel = new MenusModel();
      
        $padang =  $menusModel->where('id', 1)->first();
        $teh =  $menusModel->where('id', 5)->first();
        $uduk =  $menusModel->where('id', 2)->first();
        $jeruk =  $menusModel->where('id', 4)->first();
        
        $data_orders = 
        [
            [
                'table' => '1',
                'menu' => $padang['name'],
                'totalItem' => 2,
                'totalPrice' => 24000,
                'status' => 'proses',
            ],
            [
                'table' => '1',
                'menu' => $teh['name'],
                'totalItem' => 3,
                'totalPrice' => 15000,
                'status' => 'proses',
            ],
            [
                'table' => '2',
                'menu' => $uduk['name'],
                'totalItem' => 4,
                'totalPrice' => 32000,
                'status' => 'proses',
            ],
            [
                'table' => '2',
                'menu' => $jeruk['name'],
                'totalItem' => 3,
                'totalPrice' => 21000,
                'status' => 'proses',
            ],
        ];
        $this->db->table('orders')->insertBatch($data_orders);

        $data_admin = 
        [
            'username' => 'admin',
            'password' => password_hash('11111111', PASSWORD_DEFAULT)
        ];
        $this->db->table('admin')->insert($data_admin);
    }
}
