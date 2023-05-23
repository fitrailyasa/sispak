<?php

namespace App\Controllers;

use App\Models\KerusakanModel;

class AdminKerusakanController extends BaseController
{
    public function index()
    {
        $kerusakanModel = new KerusakanModel();
        $kerusakans = $kerusakanModel->findAll();
        return view('admin/kerusakan/index', ['kerusakans' => $kerusakans]);
    }

    public function create()
    {
        return view('admin/kerusakan/create');
    }

    public function store()
    {
        $validationRules = [
            'kode_kerusakan' => 'required|is_unique[kerusakan.kode_kerusakan]',
            'nama_kerusakan' => 'required',
            'solusi' => 'required'
        ];

        $validationMessages = [
            'kode_kerusakan' => [
                'required' => 'Kode kerusakan harus diisi.',
                'is_unique' => 'Kode kerusakan sudah terdaftar.'
            ],
            'nama_kerusakan' => [
                'required' => 'Nama kerusakan harus diisi.'
            ],
            'solusi' => [
                'required' => 'Solusi harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_kerusakan' => $this->request->getVar('kode_kerusakan'),
            'nama_kerusakan' => $this->request->getVar('nama_kerusakan'),
            'solusi' => $this->request->getVar('solusi'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $kerusakanModel = new KerusakanModel();
        $kerusakanModel->insert($data);

        return redirect()->to('/kerusakan');
    }

    public function show($id)
    {
        $kerusakanModel = new KerusakanModel();
        $kerusakan = $kerusakanModel->find($id);

        if (!$kerusakan) {
            return redirect()->back()->with('error', 'Kerusakan not found.');
        }

        return view('admin/kerusakan/show', compact('kerusakan'));
    }

    public function edit($id)
    {
        $kerusakanModel = new KerusakanModel();
        $kerusakan = $kerusakanModel->find($id);

        if (!$kerusakan) {
            return redirect()->back()->with('error', 'Kerusakan not found.');
        }

        return view('admin/kerusakan/edit', compact('kerusakan'));
    }

    public function update($id)
    {
        $validationRules = [
            'kode_kerusakan' => "required|is_unique[kerusakan.kode_kerusakan,id_kerusakan,$id]",
            'nama_kerusakan' => 'required',
            'solusi' => 'required'
        ];

        $validationMessages = [
            'kode_kerusakan' => [
                'required' => 'Kode kerusakan harus diisi.',
                'is_unique' => 'Kode kerusakan sudah terdaftar.'
            ],
            'nama_kerusakan' => [
                'required' => 'Nama kerusakan harus diisi.'
            ],
            'solusi' => [
                'required' => 'Solusi harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_kerusakan' => $this->request->getVar('kode_kerusakan'),
            'nama_kerusakan' => $this->request->getVar('nama_kerusakan'),
            'solusi' => $this->request->getVar('solusi'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $kerusakanModel = new KerusakanModel();
        $kerusakan = $kerusakanModel->find($id);

        if (!$kerusakan) {
            return redirect()->back()->with('error', 'Kerusakan not found.');
        }

        $kerusakan->fill($data);
        $kerusakan->save();

        return redirect()->to('/kerusakan');
    }

    public function destroy($id)
    {
        $kerusakanModel = new KerusakanModel();
        $kerusakanModel->delete($id);

        return redirect()->to('/kerusakan');
    }
}
