<?php

namespace App\Models;

use CodeIgniter\Model;

class SolusiModel extends Model
{
    protected $table = 'solusi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kerusakan_id', 'nama_solusi', 'created_at', 'updated_at'];

    public function kerusakan()
    {
        return $this->belongsTo('App\Models\KerusakanModel', 'kerusakan_id', 'id');
    }
}
