<?php

namespace App\Controllers;

use App\Models\KerusakanModel;
use App\Models\GejalaModel;
use App\Models\RuleModel;
use App\Models\CertaintyFactorModel;
use App\Models\DiagnosaModel;

class DiagnosisController extends BaseController
{
    public function index()
    {
        $kerusakanModel = new KerusakanModel();
        $data['kerusakan'] = $kerusakanModel->findAll();

        return view('diagnosis', $data);
    }

    public function diagnosa()
    {
        $gejalaModel = new GejalaModel();
        $ruleModel = new RuleModel();
        $certaintyFactorModel = new CertaintyFactorModel();

        $gejala = $gejalaModel->findAll();
        $rule = $ruleModel->findAll();
        $certaintyFactor = $certaintyFactorModel->findAll();

        // Proses diagnosa dan menampilkan hasilnya

        return view('diagnosa/hasil', $data);
    }
}
