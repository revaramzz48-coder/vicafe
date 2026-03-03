<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kasir - ViCafe</title>
    <style>
        :root {
            --dark-coffee: #3E2723;
            --wood-brown: #795548;
            --cream: #D7CCC8;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-image: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-attachment: fixed;
            color: var(--dark-coffee);
        }

        .overlay {
            background: rgba(0, 0, 0, 0.4);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        h2 { text-align: center; color: var(--dark-coffee); margin-bottom: 30px; }
        .form-group {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr auto;
            gap: 10px;
            margin-bottom: 30px;
            background: var(--cream);
            padding: 15px;
            border-radius: 12px;
        }

        input, select, button {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
        }

        button {
            background: var(--wood-brown);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover { background: var(--dark-coffee); }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background: var(--wood-brown);
            color: white;
            padding: 15px;
            text-align: left;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover { background: rgba(121, 85, 72, 0.1); }

        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8em;
            color: white;
        }
        .bg-makanan { background: #8D6E63; }
        .bg-minuman { background: #5D4037; }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="container">
            <h2>☕ Management Menu ViCafe</h2>

            <form action="<?= base_url('simpan_menu') ?>" method="post" class="form-group">
                <input type="text" name="nama" placeholder="Nama Menu (Contoh: Caramel Latte)" required>
                <input type="number" name="harga" placeholder="Harga" required>
                <select name="kategori">
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>
                <button type="submit">Tambah</button>
            </form>

            <table>
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
                        <td><strong><?= $m['nama_menu'] ?></strong></td>
                        <td>
                            <span class="badge <?= ($m['kategori'] == 'Makanan') ? 'bg-makanan' : 'bg-minuman' ?>">
                                <?= $m['kategori'] ?>
                            </span>
                        </td>
                        <td>Rp <?= number_format($m['harga'], 0, ',', '.') ?></td>
                        <td>
                            <a href="<?= base_url('hapus_menu/'.$m['id']) ?>" onclick="return confirm(''Yakin Ingin Menghapusnya?)">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <div style="margin-top: 20px; text-align: right;">
                <a href="<?= base_url('/') ?>" style="color: var(--wood-brown); text-decoration: none; font-weight: bold;">← Keluar Ke Halaman Depan</a>
            </div>
        </div>
    </div>
</body>
</html>