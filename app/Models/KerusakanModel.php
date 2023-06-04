<?php

namespace App\Models;

use CodeIgniter\Model;

class KerusakanModel extends Model
{
    protected $table = 'kerusakan';
    protected $primaryKey = 'kode_kerusakan';
    protected $allowedFields = ['nama_kerusakan', 'created_at', 'updated_at'];

    public function solusi()
    {
        return $this->hasMany('App\Models\SolusiModel', 'kode_kerusakan', 'kode_kerusakan');
    }

    public function riwayat()
    {
        return $this->hasMany('App\Models\RiwayatModel', 'kode_kerusakan', 'kode_kerusakan');
    }

    public function naiveBayes()
    {
        return $this->hasMany('App\Models\NaiveBayesModel', 'kode_kerusakan', 'kode_kerusakan');
    }

    public function rule()
    {
        return $this->hasMany('App\Models\RuleModel', 'kode_kerusakan', 'kode_kerusakan');
    }
    
}
