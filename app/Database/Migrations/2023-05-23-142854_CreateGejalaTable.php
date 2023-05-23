<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGejalaTable extends Migration
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
                'kode_gejala' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ],
                'nama_gejala' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ],
                'pertanyaan' => [
                    'type' => 'TEXT'
                ],
                'bobot' => [
                    'type' => 'INT',
                    'constraint' => 11
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
        $this->forge->createTable('gejala');
    }

    public function down()
    {
        $this->forge->dropTable('gejala');
    }
}
