<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function cafe()
    {
        $menuModel = new \App\Models\MenuModel();
        $data['semua_menu'] = $menuModel->final();

        return view('tampilan_cafe', $data);
    }

    public function login()
    {
        return view('halaman_login');
    }

    public function auth ()
    {
        $password = $this->request->getPost('pass');

        if ($password == 'adminenak') {
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'password salah!');
        }
    }

    public function dashboard()
    {
        $model = new \App\Models\MenuModel();
        $data['semua_menu'] = $model->findAll();

        return view('dashboard_kasir', $data);
    }

    public function simpan_menu()
    {
        $model = new \App\Models\MenuModel();
        $model->save([
            'nama_menu' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'kategori' => $this->request->getPost('kategori'),
        ]);

        return redirect()->to('/dashboard');
    }
}
