<?php

namespace App\Controllers;

use App\Models\GejalaModel;

class AdminGejalaController extends BaseController
{
    public function index()
    {
        $gejalas = GejalaModel::findAll();
        return view('admin/gejala/index', compact('gejalas'));
    }

    public function create()
    {
        return view('admin/gejala/create');
    }

    public function store()
    {
        $validation = [
            'kode_gejala' => [
                'rules' => 'required|is_unique[gejala.kode_gejala]',
                'errors' => [
                    'required' => 'Kode gejala harus diisi.',
                    'is_unique' => 'Kode gejala sudah terdaftar.'
                ]
            ],
            'nama_gejala' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama gejala harus diisi.'
                ]
            ],
            'pertanyaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pertanyaan harus diisi.'
                ]
            ],
            'bobot' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bobot harus diisi.'
                ]
            ]

        ];

        $data = [
            'kode_gejala' => $this->request->getPost('kode_gejala'),
            'nama_gejala' => $this->request->getPost('nama_gejala'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'bobot' => $this->request->getPost('bobot'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        GejalaModel::insert($data, false, $validation);

        return redirect()->to('/admin/gejala');
    }

    public function show($id)
    {
        $gejala = GejalaModel::find($id);
        return view('admin/gejala/show', compact('gejala'));
    }

    public function edit($id)
    {
        $gejala = GejalaModel::find($id);
        return view('admin/gejala/edit', compact('gejala'));
    }

    public function update($id)
    {
        $validation = [
            'kode_gejala' => [
                'rules' => 'required|is_unique[gejala.kode_gejala,id_gejala,{id}]',
                'errors' => [
                    'required' => 'Kode gejala harus diisi.',
                    'is_unique' => 'Kode gejala sudah terdaftar.'
                ]
            ],
            'nama_gejala' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama gejala harus diisi.'
                ]
            ],
            'pertanyaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pertanyaan harus diisi.'
                ]
            ],
            'bobot' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bobot harus diisi.'
                ]
            ]
        ];

        $data = [
            'kode_gejala' => $this->request->getPost('kode_gejala'),
            'nama_gejala' => $this->request->getPost('nama_gejala'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'bobot' => $this->request->getPost('bobot'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        GejalaModel::update($id, $data, false, $validation);

        return redirect()->to('/admin/gejala');
    }

    public function destroy($id)
    {
        GejalaModel::delete($id);

        return redirect()->to('/admin/gejala');
    }
}
