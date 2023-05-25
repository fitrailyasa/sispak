<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('IonAuthSeeder');
        $this->call('GejalaSeeder');
        $this->call('KerusakanSeeder');
        $this->call('SolusiSeeder');
        $this->call('RiwayatSeeder');
    }
}
