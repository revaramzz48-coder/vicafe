<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kasir - ViCafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Manajemen Menu ViCafe</h2>

    <a href="<?= base_url('menu') ?>" class="btn btn-secondary btn-sm mb-3">Lihat Katalog Menu</a>

    <form action="<?= base_url('simpan_menu') ?>" method="post" enctype="multipart/form-data" class="row g-2 mb-4">
        <div class="col-md-3">
            <input type="text" name="nama" class="form-control" placeholder="Nama Menu" required>
        </div>
        <div class="col-md-3">
            <input type="file" name="gambar" class="form-control" required>
        </div>
        <div class="col-md-3">
            <input type="number" name="harga" class="form-control" placeholder="Harga" required>
        </div>
        <div class="col-md-3">
            <select name="kategori" class="form-select">
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Camilan">Camilan</option>
            </select>
        </div>
        <div class="col-md-3">
            <button class="btn btn-success w-100">Tambah</button>
        </div>
    </form>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($menu as $m): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $m['nama_menu'] ?></td>
                <td><?= $m['kategori'] ?></td>
                <td>Rp <?= number_format($m['harga'], 0, ',', '.') ?></td>
                <td>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $m['id'] ?>">Hapus</button>
                    <div class="modal fade" id="hapusModal<?= $m['id'] ?>" tableindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi</h5>
                                
                                <div class="modal-body">Yakin Ingin Menghapusnya?<strong><?= $m['nama_menu'] ?></strong></div>

                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <a href="<?= base_url('hapus_menu/'.$m['id']) ?>" class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>