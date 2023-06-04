<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CFPenggunaSeeder extends Seeder
{
    public function run()
    {
        $cf_pengguna = [
            [
                'certainty_term' => 'Sangat Sering',
                'bobot_pengguna' => 1
            ],
            [
                'certainty_term' => 'Sering',
                'bobot_pengguna' => 0.75
            ],
            [
                'certainty_term' => 'Cukup Sering',
                'bobot_pengguna' => 0.5
            ],
            [
                'certainty_term' => 'Jarang',
                'bobot_pengguna' => 0.25
            ],
            [
                'certainty_term' => 'Tidak Ada',
                'bobot_pengguna' => 0
            ]
        ];
        $this->db->table('cf_pengguna')->insertBatch($cf_pengguna);
    }
}
