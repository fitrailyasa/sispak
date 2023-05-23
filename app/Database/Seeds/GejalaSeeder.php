<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $data = [
                'kode_gejala' => 'G' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'nama_gejala' => 'Gejala ' . str_pad($i, STR_PAD_LEFT),
                'pertanyaan' => 'Bagaimana Kondisi Gejala ' . str_pad($i, STR_PAD_LEFT) . '?',
                'bobot' => $faker->numberBetween(1, 10),
                'created_at' => date('Y-m-d H:i:s')
            ];

            $this->db->table('gejala')->insert($data);
        }
    }
}
