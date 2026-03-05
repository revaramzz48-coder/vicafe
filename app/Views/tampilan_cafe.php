<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vicafe - Katalog Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .hero { background: linear-gradient(rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?ixlib=rb-4.0.3');
                background-size: cover; color: white; padding: 100px 0; text-align: center; }
        .card-menu { border: none; border-radius: 15px; transition: 0.03s; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .card-menu:hover { transform: translateY(-5px); }
        .badge-kategori { position: absolute; top: 10px; right: 10px; }
    </style>
</head>
<body>

    <div class="hero">
        <h1>Selamat Datang di ViCafe</h1>
        <p>Nikmati pilihan kopi dan camilan terbaik kami</p>
        <a href="<?= base_url('login') ?>" class="btn btn-outline-light btn-sm">Admin Login</a>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4">Daftar Menu</h2>
        <div class="row">
            <?php foreach ($semua_menu as $m )?>
        </div>
    </div>
</body>
</html>