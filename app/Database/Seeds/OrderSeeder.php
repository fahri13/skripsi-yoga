<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MenusModel;
use App\Models\TablesModel;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $menusModel = new MenusModel();
        $tablesModel = new TablesModel();
        $data_tables =
        [
            ['number' => '1'],
            ['number' => '2'],
            ['number' => '3'],
            ['number' => '4'],
            ['number' => '5'],
        ];
        $this->db->table('tables')->insertBatch($data_tables);
        // $menus = $menusModel->findAll();
        $tables_satu = $tablesModel->where('number', '1')->first();
        $tables_dua = $tablesModel->where('number', '2')->first();
        $tables_tiga = $tablesModel->where('number', '3')->first();
        $tables_empat = $tablesModel->where('number', '4')->first();
        $tables_lima = $tablesModel->where('number', '5')->first();
        $padang =  $menusModel->where('id', 1)->first();
        $teh =  $menusModel->where('id', 5)->first();
        $uduk =  $menusModel->where('id', 2)->first();
        $jeruk =  $menusModel->where('id', 4)->first();
        
        $data_orders = 
        [
            [
                'table' => $tables_satu['number'],
                'menu' => $padang['name'],
                'totalItem' => 2,
                'totalPrice' => 24000,
                'status' => 'proses',
            ],
            [
                'table' => $tables_satu['number'],
                'menu' => $teh['name'],
                'totalItem' => 3,
                'totalPrice' => 15000,
                'status' => 'proses',
            ],
            [
                'table' => $tables_dua['number'],
                'menu' => $uduk['name'],
                'totalItem' => 4,
                'totalPrice' => 32000,
                'status' => 'proses',
            ],
            [
                'table' => $tables_dua['number'],
                'menu' => $jeruk['name'],
                'totalItem' => 3,
                'totalPrice' => 21000,
                'status' => 'proses',
            ],
        ];
        $this->db->table('orders')->insertBatch($data_orders);
    }
}
