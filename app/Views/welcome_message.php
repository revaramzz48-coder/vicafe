<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>ViCafe</title>
    <style>
        body, html{ 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            padding: 0; 
            height: 100%;
            width: 100%;
            margin: 0;
    }
    </style>
</head>
<body>
    <div class="bg-wrapper">
        <div class="glass-card">
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
            background-image: url('<?= base_url("image/cafe.jpg") ?>') !important;
            background-size: cover; 
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            width: 100%;
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

        h1 { margin-top: 0; color:  rgba(0, 0, 0, 0.62);}
        p { color:  rgba(0, 0, 0, 0.62);}

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

        .btn {
            padding: 12px;
            text-decoration: none;
            color: white;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.5);
            background-color: rgba(121, 85, 72, 0.8);
        }

        .btn-pelanggan, .btn-kasir{ background-color: rgba(121, 85, 72, 0.8);}

        .btn:hover {
            transform: translateY(-3px);
            background-color: rgba(210, 105, 30, 0.8);
            color: #4e342e;
        }
    </style>






