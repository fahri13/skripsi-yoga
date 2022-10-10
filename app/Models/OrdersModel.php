<?php 

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['table', 'menu', 'totalItem', 'totalPrice', 'status', 'created_at'];
}