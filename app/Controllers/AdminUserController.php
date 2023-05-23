<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminUserController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();
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
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $userModel = new UserModel();
        $userModel->insert($data);

        return redirect()->to('/user');
    }

    public function show($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('admin/user/show', ['user' => $user]);
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

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
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $userModel = new UserModel();
        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->fill($data);
        $user->save();

        return redirect()->to('/user');
    }

    public function destroy($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);

        return redirect()->to('/user');
    }
}
