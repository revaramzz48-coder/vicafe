<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Kasir - ViCafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { margin: 0; padding: 0; height: 100%; font-family: 'Segoe UI', sans-serif; }
        .bg-wrapper {
            /* Perbaikan: linear-gradient pakai strip, bukan garis bawah */
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1509042239860-f550ce710b93');
            background-size: cover;
            background-position: center;
            height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 40px; 
            border-radius: 20px; 
            text-align: center;
            color: white; 
            width: 380px; 
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }
        .btn-warning {
            background-color: #ffc107;
            font-weight: bold;
            border: none;
        }
    </style>
</head>
<body>
    <div class="bg-wrapper">
        <div class="glass-card">
            <h3>Login Kasir</h3>
            <p class="mb-4">Masukkan Password Admin</p>

            <form action="<?= base_url('auth') ?>" method="post">
                <input type="password" name="pass" class="form-control mb-3 text-center" placeholder="Password..." required>
                <button type="submit" class="btn btn-warning w-100 py-2">Masuk ke Dashboard</button>
            </form>

            <?php if(session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger mt-3 py-2" style="font-size: 0.9em;">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>