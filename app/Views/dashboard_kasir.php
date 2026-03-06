<h2>Manajemen Menu ViCafe</h2>

<form action="<?= base_url('simpan_menu') ?>" method="post">
    <input type="text" name="nama" placeholder="Nama Menu" required>
    <input type="number" name="harga" placeholder="Harga" required>
    <select name="kategori">
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
    </select>
    <button type="submit">Tambah Menu</button>
</form>

<hr>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Kategori</th>
    </tr>
    <?php $no = 1; foreach($semua_menu as $m): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $m['nama_menu'] ?></td>
        <td>Rp <?= number_format($m['harga'], 0, ',', '.') ?></td>
        <td><?= $m['kategori'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>