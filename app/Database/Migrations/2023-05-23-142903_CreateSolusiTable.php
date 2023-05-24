<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSolusiTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'auto_increment' => true
                ],
                'kerusakan_id' => [
                    'type' => 'INT',
                    'constraint' => 11
                ],
                'nama_solusi' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ],
                'created_at' => [
                    'type' => 'DATETIME'
                ],
                'updated_at' => [
                    'type' => 'DATETIME'
                ]
            ]
        );

        $this->forge->addKey('id', true);
        $this->forge->createTable('solusi');
    }

    public function down()
    {
        $this->forge->dropTable('solusi');
    }
}
