<?php

namespace App\Database\Factories;

use App\Models\GejalaModel;
use Faker\Factory;

class GejalaFactory
{
    protected $model = GejalaModel::class;

    public function definition(): array
    {
        $faker = Factory::create('id');
        return [
            'kode_gejala' => $faker->unique()->randomNumber(5),
            'nama_gejala' => $faker->unique()->word(),
            'pertanyaan' => $faker->unique()->sentence(),
            'bobot' => $faker->unique()->randomNumber(1),
            'created_at' => $faker->dateTimeThisYear(),
            'updated_at' => $faker->dateTimeThisYear(),
        ];
    }
}
