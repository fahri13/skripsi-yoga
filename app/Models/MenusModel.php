<?php

namespace App\Models;

use CodeIgniter\Model;

class MenusModel extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'price', 'contentDetail', 'imageUrl', 'rating', 'category', 'stock'];
    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';

    protected $validationRules    = [
        'name_product' => 'required|min_length[3]|max_length[255]',
        'detail_product'  => 'required',
        'price' => 'required'
    ];

    protected $validationMessages = [
        'name_product'        => [
            'required' => 'Nama Product Harus diisi',
            'min_length' => 'Minimal 3 Karakter'
        ],
        'price'        => [
            'required' => 'Bagian Price Harus diisi'
        ],
        'detail_product'        => [
            'required' => 'Bagian detail Harus diisi'
        ]
    ];

}