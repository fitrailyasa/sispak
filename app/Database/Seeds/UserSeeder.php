<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'Admin',
            'email' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s')
        ];

        $this->db->table('user')->insert($data);
    }
}
