<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>ViCafe</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fdf5e6; color: #4e342e; text-align: center; padding: 50px; }
        .card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.1); display: inline-block; }
        h1 { color: #795548; }
        .btn { background-color: #795548; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="bg-wrapper">
        <div class="glass-card">
            <img src="<?= base_url('images/bg_cafe.jpg') ?>" alt="Background" class="bg">
            <h1>Selamat Datang di ViCafe</h1>
            <p>Silahkan Pilih Akses Anda</p>

        <div class="button-group">
            <a href="<?= base_url('cafe') ?>" class="btn btn-pelanggan">Pelanggan</a>
            <a href="<?= base_url('login') ?>" class="btn btn-kasir">Kasir</a>
        </div>
        </div>
    </div>

    <style>
        .bg-wrapper {
            background-image: url('<?= base_url("images/bg_cafe.jpg") ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            color: white;
            width: 300px;
        }

        .bg {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid white;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }
    </style>






