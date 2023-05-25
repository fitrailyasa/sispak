<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    protected $table = 'gejala';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_gejala', 'nama_gejala', 'created_at', 'updated_at'];
}
