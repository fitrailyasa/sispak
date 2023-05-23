<?php

namespace App\Controllers;

use App\Models\GejalaModel;

class DiagnosisController extends BaseController
{
    public function index()
    {
        $gejalaModel = new GejalaModel();
        $gejalas = $gejalaModel->findAll();
        return view('diagnosis', ['gejalas' => $gejalas]);
    }

    public function hasil()
    {
        return view('hasil');
    }
}
