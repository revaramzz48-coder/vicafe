<?php namespace App\Controllers;
use App\Models\MenuModel;
use App\Models\PelangganModel;
use App\Models\PesananModel;

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

    public function tambah_keranjang($id)
    {
        $model = new \App\Models\MenuModel();
        $menu = $model->find($id);

        $cart = session()->get('cart') ?? [];

        if (isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                'nama' => $menu['nama_menu'],
                'harga' => $menu['harga'],
                'gambar' => $menu['gambar'],
                'qty' => 1
            ];
        }
        session()->set('cart', $cart);

        return redirect()->to('/keranjang');
    }

    public function keranjang()
    {
        return view('keranjang');
    }

    public function hapus_keranjang($id)
    {
        $cart = session()->get('cart');

        unset($cart[$id]);

        session()->set('cart', $cart);

        return redirect()->to('/keranjang');
    }

    public function login_pelanggan()
    {
        return view('login_pelanggan');
    }

    public function cek_login_pelanggan()
    {
        $model = new PelangganModel();

        $user = $model->where('no_hp', $this->request->getPost('no_hp'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set('pelanggan', [
                'id' => $user['id'],
                'nama' => $user['nama'],
                'no_hp' => $user['no_hp'],
                'alamat' => $user['alamat']
            ]);

            return redirect()->to('/keranjang');
        }
        return redirect()->back()->with('error', 'Login gagal');
    }

    public function register()
    {
        return view('register');
    }

    public function simpan_register()
    {
        $model = new PelangganModel();

        $model->save([
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'password' => password_hash ($this->request->getPost('password'), PASSWORD_DEFAULT),
            'alamat' => $this->request->getPost('alamat'),
        ]);

        return redirect()->to('/login_pelanggan');
    }

    public function logout_pelanggan()
    {
        session()->remove('pelanggan');
        return redirect()->to('/');
    }

    public function checkout()
    {
        if (!session()->get('pelanggan')) {
            return redirect()->to('/login_pelanggan');
        }
        return view('checkout');
    }

    public function proses_checkout()
    {
        $user = session()->get('pelanggan');
        $cart = session()->get('cart');
        
        if (!$user || !$cart) {
            return redirect()->to('/');
            }
            $total = 0;
            foreach($cart as $item){
                $total += $item['harga'] * $item['qty'];
                }
                
                $model = new PesananModel();
                
                $model->save([
                    'pelanggan_id' => $user['id'],
                    'nama' => $user['nama'],
                    'no_hp' => $user['no_hp'],
                    'alamat' => $this->request->getPost('alamat'),
                    'total' => $total,
                    'status' => 'Menunggu'
                    ]);
                    
                    session()->remove('cart');
                    return redirect()->to('/order_sukses');
                    }

    public function order_sukses()
    {
        return view('order_sukses');
    }
}