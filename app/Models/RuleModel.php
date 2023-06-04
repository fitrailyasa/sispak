<?php

namespace App\Models;

use CodeIgniter\Model;

class RuleModel extends Model
{
    protected $table = 'rule';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_rule', 'kode_gejala', 'kode_kerusakan'];
}
