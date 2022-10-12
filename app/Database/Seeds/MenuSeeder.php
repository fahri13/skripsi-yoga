<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data_menus = 
        [
            [
                'name' => 'Nasi Padang',
                'price' => 12000,
                'contentDetail' => '',
                'imageUrl' => '',
                'rating' => 0,
                'category' => 'Makanan',
                'stock' => 'tersedia',
            ], 
            [
                'name' => 'Nasi Uduk',
                'price' => 8000,
                'contentDetail' => '',
                'imageUrl' => '',
                'rating' => 0,
                'category' => 'Makanan',
                'stock' => 'tersedia',
            ], 
            [
                'name' => 'Nasi Rames',
                'price' => 10000,
                'contentDetail' => '',
                'imageUrl' => '',
                'rating' => 0,
                'category' => 'Makanan',
                'stock' => 'tersedia',
            ], 
            [
                'name' => 'Jus Jeruk',
                'price' => 7000,
                'contentDetail' => '',
                'imageUrl' => '',
                'rating' => 0,
                'category' => 'Minuman',
                'stock' => 'tersedia',
            ], 
            [
                'name' => 'Es Teh',
                'price' => 5000,
                'contentDetail' => '',
                'imageUrl' => '',
                'rating' => 0,
                'category' => 'Minuman',
                'stock' => 'tersedia',
            ], 
        ];
        $this->db->table('menus')->insertBatch($data_menus);
    }
}
