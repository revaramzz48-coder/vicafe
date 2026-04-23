<?php namespace App\Controllers;
use App\Models\MenuModel;

class Home extends BaseController {
    public function index()
    { 
        return view('home'); 
    }

    public function cafe()
{
    $menuModel = new MenuModel();
    $data['semua_menu'] = $menuModel->findAll();
    return view('tampilan_menu', $data);
}
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
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
        $model = new \App\Models\MenuModel();
        $data['menu'] = $model->findAll();
        return view('dashboard_kasir', $data);
    }

   public function simpan_menu()
{
    $model = new \App\Models\MenuModel();
    $file = $this->request->getFile('gambar');

    if ($file->isValid() && !$file->hasMoved()) {
        $namaFile = $file->getRandomName();
        $file->move(ROOTPATH . 'public/uploads/', $namaFile);

        $model->save([
            'nama_menu' => $this->request->getPost('nama'),
            'harga'     => $this->request->getPost('harga'),
            'kategori'  => $this->request->getPost('kategori'),
            'gambar'    => $namaFile
        ]);
    }

    return redirect()->to('/dashboard');
}

    public function hapus_menu($id)
    {
            $model = new \App\Models\MenuModel();
            $menu = $model->find($id);
            if ($menu && !empty($menu['gambar'])) {
                $path = ROOTPATH . 'public/uploads/' . $menu['gambar'];
                if (file_exists($path)) {
                    unlink($path);
                    }
                    }
                    $model->delete($id);
                    return redirect()->to('/dashboard');
                    }

     public function edit_menu($id)
    {
        $model = new \App\Models\MenuModel();
        $data['menu'] = $model->find($id);
        return view('edit_menu', $data);
    }

    public function update_menu($id)
    {
        $model = new \App\Models\MenuModel();
        $file = $this->request->getFile('gambar');

        if ($file->isValid() && !$file->hasMoved()) {
            $namaFile = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/', $namaFile);

            $model->update($id, [
                'nama_menu' => $this->request->getPost('nama'),
                'harga'     => $this->request->getPost('harga'),
                'kategori'  => $this->request->getPost('kategori'),
                'gambar'    => $namaFile
            ]);
        } else {
            $model->update($id, [
                'nama_menu' => $this->request->getPost('nama'),
                'harga'     => $this->request->getPost('harga'),
                'kategori'  => $this->request->getPost('kategori')
            ]);
        }

        return redirect()->to('/dashboard');
    }
    }