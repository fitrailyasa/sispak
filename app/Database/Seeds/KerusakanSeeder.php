<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\KerusakanModel;

class KerusakanSeeder extends Seeder
{
    public function run()
    {
        $kerusakanData = [
            ['kode_kerusakan' => 'K1', 'nama_kerusakan' => 'LCD', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K2', 'nama_kerusakan' => 'RAM (Random Access Memory)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K3', 'nama_kerusakan' => 'HDD (Hard Disk Drive)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K4', 'nama_kerusakan' => 'VGA (Video Graphic Accelerator)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K5', 'nama_kerusakan' => 'Sound Card', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K6', 'nama_kerusakan' => 'OS Bermasalah', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K7', 'nama_kerusakan' => 'Aplikasi Rusak', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K8', 'nama_kerusakan' => 'Power Supply', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K9', 'nama_kerusakan' => 'Processor', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K10', 'nama_kerusakan' => 'Kekurangan Memori', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K11', 'nama_kerusakan' => 'Kekurangan Memori VGA', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K12', 'nama_kerusakan' => 'Clock Processor Kurang Tinggi', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K13', 'nama_kerusakan' => 'Front Panel Error', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K14', 'nama_kerusakan' => 'Kekurangan Daya pada Power Supply', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K15', 'nama_kerusakan' => 'Perangkat USB Rusak', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K16', 'nama_kerusakan' => 'Keyboard Rusak', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K17', 'nama_kerusakan' => 'Mouse Rusak', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K18', 'nama_kerusakan' => 'Motherboard Rusak', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K19', 'nama_kerusakan' => 'Kabel Power', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K20', 'nama_kerusakan' => 'Kabel Sata/Ide', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K21', 'nama_kerusakan' => 'CD/DVD/ROM/RW', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'K22', 'nama_kerusakan' => 'Bios Error', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
        ];
        $this->db->table('kerusakan')->insertBatch($kerusakanData);
    }
}
