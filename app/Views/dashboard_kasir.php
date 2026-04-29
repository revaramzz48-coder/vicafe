<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kasir - ViCafe</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Outfit:wght@400;700;800&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --bg-dark: #F9F6F0; /* Background Utama (Soft Cream) */
            --bg-card: #FFFFFF; /* Card Background */
            --text-main: #4A443C; /* Teks Utama (Soft Dark Brown) */
            --text-muted: #9A8C7F; /* Teks Muted */
            --accent-gold: #DDA15E; /* Aksen Caramel Lembut */
            --accent-glow: rgba(221, 161, 94, 0.4);
            --glass-bg: rgba(249, 246, 240, 0.85);
            --glass-border: rgba(74, 68, 60, 0.1);
            --danger-glow: rgba(220, 53, 69, 0.4);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-main);
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }

        .dashboard-header {
            background: var(--bg-card);
            border-bottom: 1px solid var(--glass-border);
            padding: 1.5rem 0;
            margin-bottom: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.5);
        }

        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }

        .form-control, .form-select {
            background-color: rgba(0, 0, 0, 0.03);
            border: 1px solid var(--glass-border);
            color: var(--text-main);
            border-radius: 8px;
        }

        .form-control:focus, .form-select:focus {
            background-color: rgba(0, 0, 0, 0.05);
            border-color: var(--accent-gold);
            color: var(--text-main);
            box-shadow: 0 0 10px var(--accent-glow);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        .btn-gold {
            background: var(--accent-gold);
            color: #fff;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-gold:hover {
            background: #BC6C25;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px var(--accent-glow);
        }

        .table {
            color: var(--text-main);
            vertical-align: middle;
        }

        .table>:not(caption)>*>* {
            background-color: transparent;
            color: var(--text-main);
            border-bottom-color: var(--glass-border);
            padding: 1rem;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.03);
            color: var(--text-main);
        }

        .badge-kategori {
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            text-shadow: none;
        }

        .btn-danger-custom {
            background: transparent;
            color: #dc3545;
            border: 1px solid #dc3545;
            transition: all 0.3s;
        }

        .btn-danger-custom:hover {
            background: #dc3545;
            color: white;
            box-shadow: 0 0 15px var(--danger-glow);
        }

        /* Modal styling */
        .modal-content {
            background-color: var(--bg-card);
            border: 1px solid var(--glass-border);
            color: var(--text-main);
        }
        
        .modal-header {
            border-bottom: 1px solid var(--glass-border);
        }
        
        .modal-footer {
            border-top: 1px solid var(--glass-border);
        }
        
        .btn-close {
            /* Black close button for light theme */
        }
    </style>
</head>
<body>

<div class="dashboard-header">
    <div class="container d-flex justify-content-between align-items-center">
        <h2 class="mb-0 fw-bold"><i class="fa-solid fa-mug-hot text-warning me-2"></i> Dashboard Kasir</h2>
        <a href="<?= base_url('menu') ?>" class="btn btn-outline-light btn-sm rounded-pill px-3">
            <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> Lihat Katalog
        </a>
    </div>
</div>

<div class="container">
    
    <!-- Form Tambah Menu -->
    <div class="glass-card mb-4" style="animation: fadeInUp 0.5s ease;">
        <h5 class="mb-3 fw-bold" style="color: var(--accent-gold);"><i class="fa-solid fa-circle-plus me-2"></i> Tambah Menu Baru</h5>
        <form action="<?= base_url('simpan_menu') ?>" method="post" enctype="multipart/form-data" class="row g-3">
            <div class="col-md-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama Menu" required>
            </div>
            <div class="col-md-3">
                <input type="file" name="gambar" class="form-control" required>
            </div>
            <div class="col-md-2">
                <input type="number" name="harga" class="form-control" placeholder="Harga (Rp)" required>
            </div>
            <div class="col-md-2">
                <select name="kategori" class="form-select">
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Camilan">Camilan</option>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-gold w-100"><i class="fa-solid fa-plus me-1"></i> Simpan</button>
            </div>
        </form>
    </div>

    <!-- Tabel Menu -->
    <div class="glass-card" style="animation: fadeInUp 0.7s ease;">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="35%">Nama Menu</th>
                        <th width="20%">Kategori</th>
                        <th width="25%">Harga</th>
                        <th width="15%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($menu as $m): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="fw-bold"><?= $m['nama_menu'] ?></td>
                        <td>
                            <?php 
                                $badgeStyle = '';
                                if ($m['kategori'] == 'Makanan') $badgeStyle = 'background-color: rgba(230, 57, 70, 0.8); color: white;';
                                else if ($m['kategori'] == 'Minuman') $badgeStyle = 'background-color: rgba(69, 123, 157, 0.9); color: white;';
                                else if ($m['kategori'] == 'Camilan') $badgeStyle = 'background-color: rgba(221, 161, 94, 0.9); color: white;';
                            ?>
                            <span class="badge-kategori" style="<?= $badgeStyle ?>"><?= $m['kategori'] ?></span>
                        </td>
                        <td style="color: var(--accent-gold);">Rp <?= number_format($m['harga'], 0, ',', '.') ?></td>
                        <td class="text-center">
                            <button class="btn btn-danger-custom btn-sm rounded-circle" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $m['id'] ?>" title="Hapus Menu">
                                <i class="fa-solid fa-trash"></i>
                            </button>


                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php foreach($menu as $m): ?>
<!-- Modal Hapus -->
<div class="modal fade text-start" id="hapusModal<?= $m['id'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger"><i class="fa-solid fa-triangle-exclamation me-2"></i> Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body py-4 text-center">
                <p class="mb-0 fs-5">Yakin ingin menghapus menu <br><strong style="color: var(--accent-gold);"><?= $m['nama_menu'] ?></strong>?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-light px-4" data-bs-dismiss="modal">Batal</button>
                <a href="<?= base_url('hapus_menu/'.$m['id']) ?>" class="btn btn-danger px-4 shadow-glow">Ya, Hapus!</a>
                <a href="<?= base_url('edit_menu/'.$m['id']) ?>" class="btn btn-danger px-4 shadow-glow">Edit</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
</body>
</html>