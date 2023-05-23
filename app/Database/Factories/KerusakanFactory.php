<?php

namespace App\Database\Factories;

use App\Models\KerusakanModel;
use Faker\Factory;

class KerusakanFactory
{
    protected $model = KerusakanModel::class;

    public function definition(): array
    {
        $faker = Factory::create('id');
        return [
            'kode_kerusakan' => $faker->unique()->randomNumber(5),
            'nama_kerusakan' => $faker->unique()->word(),
            'solusi' => $faker->unique()->sentence(),
            'created_at' => $faker->dateTimeThisYear(),
            'updated_at' => $faker->dateTimeThisYear(),
        ];
    }
}
