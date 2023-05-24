<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKerusakanTable extends Migration
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
                'kode_kerusakan' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ],
                'nama_kerusakan' => [
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
        $this->forge->createTable('kerusakan');
    }

    public function down()
    {
        $this->forge->dropTable('kerusakan');
    }
}
