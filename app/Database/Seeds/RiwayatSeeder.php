<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\RiwayatModel;
use Faker\Factory;

class RiwayatSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $riwayatModel = new RiwayatModel();

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'token' => $faker->word,
                'kerusakan_id' => $faker->numberBetween(1, 5),
                'merk_laptop' => $faker->word,
                'tipe_laptop' => $faker->word,
                'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            ];

            $riwayatModel->insert($data);
        }
    }
}
