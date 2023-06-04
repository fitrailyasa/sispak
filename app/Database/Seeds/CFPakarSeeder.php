<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CFPakarSeeder extends Seeder
{
    public function run()
    {
        $cf_pakar = [
            [
                'certainty_term' => 'Pasti',
                'bobot_pakar' => 1
            ],
            [
                'certainty_term' => 'Hampir Pasti',
                'bobot_pakar' => 0.8
            ],
            [
                'certainty_term' => 'Kemungkinan Besar',
                'bobot_pakar' => 0.6
            ],
            [
                'certainty_term' => 'Mungkin',
                'bobot_pakar' => 0.4
            ],
            [
                'certainty_term' => 'Tidak Tahu / Tidak ada',
                'bobot_pakar' => 0.2
            ]
        ];

        $this->db->table('certainty_factor')->insertBatch($certainty_factor);
    }
}
