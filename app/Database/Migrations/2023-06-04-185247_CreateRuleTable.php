<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRuleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'gejala_id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true
            ],
            'kerusakan_id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('rule');
    }
}
