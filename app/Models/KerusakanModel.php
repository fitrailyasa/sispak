<?php

namespace App\Models;

use CodeIgniter\Model;

class KerusakanModel extends Model
{
    protected $table = 'kerusakan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_kerusakan', 'nama_kerusakan', 'solusi', 'created_at', 'updated_at'];
}
