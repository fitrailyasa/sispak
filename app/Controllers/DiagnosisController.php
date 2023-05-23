<?php

namespace App\Controllers;

class DiagnosisController extends BaseController
{
    public function index()
    {
        return view('diagnosis');
    }

    public function hasil()
    {
        $data = [
            'kerusakan' => $this->request->getPost('kerusakan'),
            'gejala' => $this->request->getPost('gejala')
        ];

        return view('diagnosis/hasil', $data);
    }
}
