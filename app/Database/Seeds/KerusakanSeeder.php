<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KerusakanSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $data = [
                'kode_kerusakan' => 'K' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'nama_kerusakan' => 'Kerusakan ' . str_pad($i, STR_PAD_LEFT),
                'solusi' => 'Solusi ' . str_pad($i, STR_PAD_LEFT),
                'created_at' => date('Y-m-d H:i:s')
            ];

            $this->db->table('kerusakan')->insert($data);
        }
    }
}
