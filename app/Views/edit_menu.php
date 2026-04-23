<?= view('layout/header')?>
<div class="container mt-5">
    <h3>Edit Menu</h3>

    <form action="<?= base_url('update_menu/'.$menu['id']) ?>" method="post" enctype="multipart/form-data">

    <input type="text" name="nama" class="form-control" placeholder="Nama Menu" value="<?= $menu['nama_menu'] ?>">
    <input type="number" name="harga" class="form-control" placeholder="Harga" value="<?= $menu['harga'] ?>"> 
    <select name="kategori" class="form-control">
        <option <?= ($menu['kategori']=='Makanan')?'selected':''?>>Makanan</option>
        <option <?= ($menu['kategori']=='Minuman')?'selected':''?>>Minuman</option>
        <option <?= ($menu['kategori']=='Camilan')?'selected':''?>>Camilan</option>
    </select>
    <img src="<?= base_url('uploads/'.$menu['gambar']) ?>" width="150" class="mb-2">
    <input type="file" name="gambar" class="form-control mb-3">
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
<?= view('layout/footer')?>