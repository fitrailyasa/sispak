<?php

namespace App\Models;

use CodeIgniter\Model;

class CFPakarModel extends Model
{
    protected $table = 'cf_pakar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['certainty_term', 'bobot_pakar'];
}
