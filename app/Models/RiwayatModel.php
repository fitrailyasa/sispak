<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table = 'riwayat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['token', 'kerusakan_id', 'merk_laptop', 'tipe_laptop', 'created_at', 'updated_at'];

    public function kerusakan()
    {
        return $this->belongsTo('App\Models\KerusakanModel', 'kerusakan_id', 'id');
    }
}
