<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    protected $table = 'gejala';
    protected $primaryKey = 'id_gejala';
    protected $allowedFields = ['kode_gejala', 'nama_gejala', 'pertanyaan', 'bobot', 'created_at', 'updated_at'];
}
