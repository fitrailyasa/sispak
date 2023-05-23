<?php

namespace App\Controllers;

use App\Models\KerusakanModel;

class AdminKerusakanController extends BaseController
{
    public function index()
    {
        $kerusakans = KerusakanModel::findAll();
        return view('admin/kerusakan/index', compact('kerusakans'));
    }

    public function create()
    {
        return view('admin/kerusakan/create');
    }

    public function store()
    {
        $validation = [
            'kode_kerusakan' => [
                'rules' => 'required|is_unique[kerusakan.kode_kerusakan]',
                'errors' => [
                    'required' => 'Kode kerusakan harus diisi.',
                    'is_unique' => 'Kode kerusakan sudah terdaftar.'
                ]
            ],
            'nama_kerusakan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama kerusakan harus diisi.'
                ]
            ],
            'solusi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Solusi harus diisi.'
                ]
            ]
        ];

        $data = [
            'kode_kerusakan' => $this->request->getPost('kode_kerusakan'),
            'nama_kerusakan' => $this->request->getPost('nama_kerusakan'),
            'solusi' => $this->request->getPost('solusi'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        KerusakanModel::insert($data, false, $validation);

        return redirect()->to('/admin/kerusakan');
    }

    public function show($id)
    {
        $kerusakan = KerusakanModel::find($id);
        return view('admin/kerusakan/show', compact('kerusakan'));
    }

    public function edit($id)
    {
        $kerusakan = KerusakanModel::find($id);
        return view('admin/kerusakan/edit', compact('kerusakan'));
    }

    public function update($id)
    {
        $validation = [
            'kode_kerusakan' => [
                'rules' => 'required|is_unique[kerusakan.kode_kerusakan,id_kerusakan,{id}]',
                'errors' => [
                    'required' => 'Kode kerusakan harus diisi.',
                    'is_unique' => 'Kode kerusakan sudah terdaftar.'
                ]
            ],
            'nama_kerusakan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama kerusakan harus diisi.'
                ]
            ],
            'solusi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Solusi harus diisi.'
                ]
            ]
        ];

        $data = [
            'kode_kerusakan' => $this->request->getPost('kode_kerusakan'),
            'nama_kerusakan' => $this->request->getPost('nama_kerusakan'),
            'solusi' => $this->request->getPost('solusi'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        KerusakanModel::update($id, $data, false, $validation);

        return redirect()->to('/admin/kerusakan');
    }

    public function destroy($id)
    {
        KerusakanModel::delete($id);

        return redirect()->to('/admin/kerusakan');
    }
}
