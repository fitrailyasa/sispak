<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCertaintyFactorTable extends Migration
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
            'certainty_term' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'bobot_pakar' => [
                'type'              => 'FLOAT'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('certainty_factor');
    }
}
