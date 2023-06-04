<?php

namespace App\Models;

use CodeIgniter\Model;

class NaiveBayesModel extends Model
{
    protected $table = 'training_data';
    protected $primaryKey = 'id';
    protected $allowedFields = ['token', 'kode_kerusakan', 'merk_laptop', 'tipe_laptop', 'created_at', 'updated_at'];

    public function getTrainingData()
    {
        return $this->findAll();
    }

    public function kerusakan()
    {
        return $this->belongsTo('App\Models\KerusakanModel', 'kode_kerusakan', 'kode_kerusakan');
    }
}
