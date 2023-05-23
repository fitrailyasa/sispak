<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminUserController extends BaseController
{
    public function index()
    {
        $users = UserModel::findAll();
        return view('admin/user/index');
    }

    public function create()
    {
        return view('admin/user/create');
    }

    public function store()
    {
        $validation = [
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => 'Email harus diisi.',
                    'valid_email' => 'Email harus valid.',
                    'is_unique' => 'Email sudah terdaftar.'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'Password minimal 8 karakter.'
                ]
            ]
        ];

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        UserModel::insert($data, false, $validation);

        return redirect()->to('/admin/user');
    }

    public function show($id)
    {
        $user = UserModel::find($id);
        return view('admin/user/show', compact('user'));
    }

    public function edit($id)
    {
        $user = UserModel::find($id);
        return view('admin/user/edit', compact('user'));
    }

    public function update($id)
    {
        $validation = [
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[user.email,id_user,{id}]',
                'errors' => [
                    'required' => 'Email harus diisi.',
                    'valid_email' => 'Email harus valid.',
                    'is_unique' => 'Email sudah terdaftar.'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'Password minimal 8 karakter.'
                ]
            ]
        ];

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        UserModel::update($id, $data, false, $validation);

        return redirect()->to('/admin/user');
    }

    public function destroy($id)
    {
        UserModel::delete($id);

        return redirect()->to('/admin/user');
    }
}
