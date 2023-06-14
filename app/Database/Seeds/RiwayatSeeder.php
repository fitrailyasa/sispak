<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\RiwayatModel;

class RiwayatSeeder extends Seeder
{
    public function run()
    {
        $riwayatModel = new RiwayatModel();

        $data = [
            [
                'token' => 'ABC123',
                'kode_kerusakan' => 'K01',
                'merk_laptop' => 'Acer',
                'tipe_laptop' => 'Aspire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'token' => 'DEF456',
                'kode_kerusakan' => 'K02',
                'merk_laptop' => 'Lenovo',
                'tipe_laptop' => 'ThinkPad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'token' => 'GHI789',
                'kode_kerusakan' => 'K03',
                'merk_laptop' => 'Dell',
                'tipe_laptop' => 'Latitude',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'token' => 'JKL012',
                'kode_kerusakan' => 'K04',
                'merk_laptop' => 'HP',
                'tipe_laptop' => 'Pavilion',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'token' => 'MNO345',
                'kode_kerusakan' => 'K05',
                'merk_laptop' => 'Asus',
                'tipe_laptop' => 'ZenBook',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'token' => 'PQR678',
                'kode_kerusakan' => 'K01',
                'merk_laptop' => 'Acer',
                'tipe_laptop' => 'Predator',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'token' => 'STU901',
                'kode_kerusakan' => 'K02',
                'merk_laptop' => 'Lenovo',
                'tipe_laptop' => 'IdeaPad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'token' => 'VWX234',
                'kode_kerusakan' => 'K03',
                'merk_laptop' => 'Dell',
                'tipe_laptop' => 'XPS',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'token' => 'YZA567',
                'kode_kerusakan' => 'K04',
                'merk_laptop' => 'HP',
                'tipe_laptop' => 'EliteBook',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $riwayatModel->insertBatch($data);
    }
}
