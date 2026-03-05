<?php namespace App\Controllers;
use App\Models\MenuModel;

class Home extends BaseController {
    public function index(): string { return view('welcome_message'); }

    public function cafe()
    {
        $menuModel = new MenuModel();
        $data['semua_menu'] = $menuModel->findAll();

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
            return redirect()->to(base_url('/dashboard'));
        } else {
            return redirect()->back()->with('error', 'password salah!');
        }
    }

    public function dashboard()
    {
        $model = new MenuModel();
        $data['menu'] = $model->findAll();

        return view('dashboard_kasir', $data);
    }

    public function simpan_menu()
    {
        $model = new MenuModel();
        $model->save([
            'nama_menu' => $this->request->getPost('nama'),
            'harga'     => $this->request->getPost('harga'),
            'kategori'  => $this->request->getPost('kategori'),
        ]);

        return redirect()->to(base_url('/dashboard'));
    }

    public function hapus_menu($id)
    {
        $model = new MenuModel();
        $model->delete($id);
        return redirect()->to(base_url('/dashboard'));
    }
}
