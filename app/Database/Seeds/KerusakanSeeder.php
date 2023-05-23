<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\KerusakanModel;

class KerusakanSeeder extends Seeder
{
    public function run()
    {
        $kerusakanData = [
            ['kode_kerusakan' => 'K1', 'nama_kerusakan' => 'LCD'],
            ['kode_kerusakan' => 'K2', 'nama_kerusakan' => 'RAM (Random Access Memory)'],
            ['kode_kerusakan' => 'K3', 'nama_kerusakan' => 'HDD (Hard Disk Drive)'],
            ['kode_kerusakan' => 'K4', 'nama_kerusakan' => 'VGA (Video Graphic Accelerator)'],
            ['kode_kerusakan' => 'K5', 'nama_kerusakan' => 'Sound Card'],
            ['kode_kerusakan' => 'K6', 'nama_kerusakan' => 'OS Bermasalah'],
            ['kode_kerusakan' => 'K7', 'nama_kerusakan' => 'Aplikasi Rusak'],
            ['kode_kerusakan' => 'K8', 'nama_kerusakan' => 'Power Supply'],
            ['kode_kerusakan' => 'K9', 'nama_kerusakan' => 'Processor'],
            ['kode_kerusakan' => 'K10', 'nama_kerusakan' => 'Kekurangan Memori'],
            ['kode_kerusakan' => 'K11', 'nama_kerusakan' => 'Kekurangan Memori VGA'],
            ['kode_kerusakan' => 'K12', 'nama_kerusakan' => 'Clock Processor Kurang Tinggi'],
            ['kode_kerusakan' => 'K13', 'nama_kerusakan' => 'Front Panel Error'],
            ['kode_kerusakan' => 'K14', 'nama_kerusakan' => 'Kekurangan Daya pada Power Supply'],
            ['kode_kerusakan' => 'K15', 'nama_kerusakan' => 'Perangkat USB Rusak'],
            ['kode_kerusakan' => 'K16', 'nama_kerusakan' => 'Keyboard Rusak'],
            ['kode_kerusakan' => 'K17', 'nama_kerusakan' => 'Mouse Rusak'],
            ['kode_kerusakan' => 'K18', 'nama_kerusakan' => 'Motherboard Rusak'],
            ['kode_kerusakan' => 'K19', 'nama_kerusakan' => 'Kabel Power'],
            ['kode_kerusakan' => 'K20', 'nama_kerusakan' => 'Kabel Sata/Ide'],
            ['kode_kerusakan' => 'K21', 'nama_kerusakan' => 'CD/DVD/ROM/RW'],
            ['kode_kerusakan' => 'K22', 'nama_kerusakan' => 'Bios Error'],
        ];

        $model = new KerusakanModel();
        $model->insertBatch($kerusakanData);
    }
}
