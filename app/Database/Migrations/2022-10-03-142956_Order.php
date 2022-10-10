<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
            'id' =>
            [
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ],
            'name' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'unique' => true
            ],
            'price' =>
            [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'contentDetail' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '200'
            ],
            'imageUrl' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '200'
            ],
            'rating' =>
            [
                'type' => 'INT',
                'constraint' => '1'
            ],
            'category' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'stock' => 
            [
                'type' => 'VARCHAR', 
                'constraint' => '100'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('menus');

        $this->forge->addField([
            'id' => 
            [
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ],
            'table' =>
            [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'menu' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '200'
            ],
            'totalItem' => 
            [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'totalPrice' =>
            [
                'type' => 'INT', 
                'constraint' => '11'
            ],
            'status' => 
            [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('menu', 'menus', 'name', 'CASCADE', 'NO ACTION');
        $this->forge->createTable('orders');

        $this->forge->addField([
            'id' => 
            [
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ],
            'username' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '200'
            ],
            'password' =>
            [
                'type' => 'VARCHAR',
                'constraint' => '200'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('menus');
        $this->forge->dropTable('orders');
        $this->forge->dropTable('admin');
    }
}
