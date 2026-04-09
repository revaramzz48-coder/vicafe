<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vicafe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
        }
        .navbar{
            background-color: #3e2723;
        }
        .navbar-brand, .nav-link{
            color: white !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">☕ViCafe☕</a>

        <div>
            <a class="nav-link d-inline" href="<?= base_url('/') ?>">Home</a>
            <a class="nav-link d-inline" href="<?= base_url('menu') ?>">Menu</a>
            <a class="nav-link d-inline" href="<?= base_url('about') ?>">About</a>
            <a class="nav-link d-inline" href="<?= base_url('contact') ?>">Contact</a>
        </div>
    </div>
</nav>
</body>
</head>
<body>
    
</body>
</html>