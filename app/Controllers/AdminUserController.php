<?php

namespace App\Controllers;

use App\Models\AuthModel;

class AdminUserController extends BaseController
{
    public function index()
    {
        $authModel = new AuthModel();
        $users = $authModel->findAll();
        return view('admin/user/index', ['users' => $users]);
    }

    public function create()
    {
        return view('admin/user/create');
    }

    public function store()
    {
        $validationRules = [
            'nama' => 'required',
            'email' => 'required|is_unique[user.email]',
            'password' => 'required|min_length[8]',
        ];

        $validationMessages = [
            'nama' => [
                'required' => 'Nama harus diisi.'
            ],
            'email' => [
                'required' => 'Email harus diisi.',
                'is_unique' => 'Email sudah terdaftar.'
            ],
            'password' => [
                'required' => 'Password harus diisi.',
                'min_length' => 'Password minimal 8 karakter.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getvar('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $authModel = new AuthModel();
        $authModel->insert($data);

        return redirect()->to('/user');
    }

    public function show($id)
    {
        $authModel = new AuthModel();
        $user = $authModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('admin/user/show', ['user' => $user]);
    }

    public function edit($id)
    {
        $authModel = new AuthModel();
        $user = $authModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('admin/user/edit', ['user' => $user]);
    }

    public function update($id)
    {
        $validationRules = [
            'nama' => 'required',
            'email' => 'required|is_unique[user.email]',
            'password' => 'required|min_length[8]',
        ];

        $validationMessages = [
            'nama' => [
                'required' => 'Nama harus diisi.'
            ],
            'email' => [
                'required' => 'Email harus diisi.',
                'is_unique' => 'Email sudah terdaftar.'
            ],
            'password' => [
                'required' => 'Password harus diisi.',
                'min_length' => 'Password minimal 8 karakter.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $authModel = new AuthModel();
        $user = $authModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->fill($data);
        $user->save();

        return redirect()->to('/user');
    }

    public function destroy($id)
    {
        $authModel = new AuthModel();
        $authModel->delete($id);

        return redirect()->to('/user');
    }
}
