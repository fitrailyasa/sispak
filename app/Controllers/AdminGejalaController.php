<?php

namespace App\Controllers;

use App\Models\GejalaModel;

class AdminGejalaController extends BaseController
{
    public function index()
    {
        $gejalaModel = new GejalaModel();
        $gejalas = $gejalaModel->findAll();
        return view('admin/gejala/index', ['gejalas' => $gejalas]);
    }

    public function create()
    {
        return view('admin/gejala/create');
    }

    public function store()
    {
        $validationRules = [
            'kode_gejala' => 'required|is_unique[gejala.kode_gejala]',
            'nama_gejala' => 'required',
            'pertanyaan' => 'required',
            'bobot' => 'required|numeric'
        ];

        $validationMessages = [
            'kode_gejala' => [
                'required' => 'Kode gejala harus diisi.',
                'is_unique' => 'Kode gejala sudah terdaftar.'
            ],
            'nama_gejala' => [
                'required' => 'Nama gejala harus diisi.',
            ],
            'pertanyaan' => [
                'required' => 'Pertanyaan harus diisi.'
            ],
            'bobot' => [
                'required' => 'Bobot harus diisi.',
                'numeric' => 'Bobot harus berupa angka.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_gejala' => $this->request->getPost('kode_gejala'),
            'nama_gejala' => $this->request->getPost('nama_gejala'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'bobot' => $this->request->getPost('bobot'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $gejalaModel = new GejalaModel();
        $gejalaModel->insert($data);

        return redirect()->to('/gejala');
    }

    public function show($id)
    {
        $gejalaModel = new GejalaModel();
        $gejala = $gejalaModel->find($id);

        if (!$gejala) {
            return redirect()->back()->with('error', 'Gejala not found.');
        }

        return view('admin/gejala/show', compact('gejala'));
    }

    public function edit($id)
    {
        $gejalaModel = new GejalaModel();
        $gejala = $gejalaModel->find($id);

        if (!$gejala) {
            return redirect()->back()->with('error', 'Gejala not found.');
        }

        return view('admin/gejala/edit', compact('gejala'));
    }

    public function update($id)
    {
        $validationRules = [
            'kode_gejala' => "required|is_unique[gejala.kode_gejala,id_gejala,$id]",
            'nama_gejala' => 'required',
            'pertanyaan' => 'required',
            'bobot' => 'required|numeric'
        ];

        $validationMessages = [
            'kode_gejala' => [
                'required' => 'Kode gejala harus diisi.',
                'is_unique' => 'Kode gejala sudah terdaftar.'
            ],
            'nama_gejala' => [
                'required' => 'Nama gejala harus diisi.'
            ],
            'pertanyaan' => [
                'required' => 'Pertanyaan harus diisi.'
            ],
            'bobot' => [
                'required' => 'Bobot harus diisi.',
                'numeric' => 'Bobot harus berupa angka.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_gejala' => $this->request->getPost('kode_gejala'),
            'nama_gejala' => $this->request->getPost('nama_gejala'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'bobot' => $this->request->getPost('bobot'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $gejalaModel = new GejalaModel();
        $gejala = $gejalaModel->find($id);

        if (!$gejala) {
            return redirect()->back()->with('error', 'Gejala not found.');
        }

        $gejalaModel->update($id, $data);

        return redirect()->to('/gejala');
    }

    public function destroy($id)
    {
        $gejalaModel = new GejalaModel();
        $gejalaModel->delete($id);

        return redirect()->to('/gejala');
    }
}
