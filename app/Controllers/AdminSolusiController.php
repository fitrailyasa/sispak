<?php

namespace App\Controllers;

use App\Models\SolusiModel;

class AdminSolusiController extends BaseController
{
    public function index()
    {
        $solusiModel = new SolusiModel();
        $solusis = $solusiModel->findAll();
        return view('admin/solusi/index', ['solusis' => $solusis]);
    }

    public function create()
    {
        return view('admin/solusi/create');
    }

    public function store()
    {
        $validationRules = [
            'kode_kerusakan' => 'required',
            'nama_solusi' => 'required'
        ];

        $validationMessages = [
            'kode_kerusakan' => [
                'required' => 'ID kerusakan harus diisi.',
            ],
            'nama_solusi' => [
                'required' => 'Nama solusi harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_kerusakan' => $this->request->getVar('kode_kerusakan'),
            'nama_solusi' => $this->request->getVar('nama_solusi'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $solusiModel = new SolusiModel();
        $solusiModel->insert($data);

        return redirect()->to('/solusi');
    }

    public function show($id)
    {
        $solusiModel = new SolusiModel();
        $solusi = $solusiModel->find($id);

        if (!$solusi) {
            return redirect()->back()->with('error', 'solusi not found.');
        }

        return view('admin/solusi/show', compact('solusi'));
    }

    public function edit($id)
    {
        $solusiModel = new SolusiModel();
        $solusi = $solusiModel->find($id);

        if (!$solusi) {
            return redirect()->back()->with('error', 'solusi not found.');
        }

        return view('admin/solusi/edit', compact('solusi'));
    }

    public function update($id)
    {
        $validationRules = [
            'kode_kerusakan' => "required",
            'nama_solusi' => 'required'
        ];

        $validationMessages = [
            'kode_kerusakan' => [
                'required' => 'ID kerusakan harus diisi.'
            ],
            'nama_solusi' => [
                'required' => 'Nama solusi harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_kerusakan' => $this->request->getVar('kode_kerusakan'),
            'nama_solusi' => $this->request->getVar('nama_solusi'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $solusiModel = new SolusiModel();
        $solusi = $solusiModel->find($id);

        if (!$solusi) {
            return redirect()->back()->with('error', 'solusi not found.');
        }

        $solusi->fill($data);
        $solusi->save();

        return redirect()->to('/solusi');
    }

    public function destroy($id)
    {
        $solusiModel = new SolusiModel();
        $solusiModel->delete($id);

        return redirect()->to('/solusi');
    }
}
