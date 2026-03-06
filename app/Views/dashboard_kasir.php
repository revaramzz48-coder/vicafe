<h2>Manajemen Menu ViCafe</h2>

<a href="<?= base_url('/') ?>" class="btn btn-secondary btn-sm">Lihat Katalog Menu</a>
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