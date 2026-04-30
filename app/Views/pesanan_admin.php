<?= view('layout/header') ?>

<div class="container mt-5">

<h2>Pesanan Masuk</h2>

<table class="table table-stripped table-hover">

<thead>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>No HP</th>
        <th>Total</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
</thead>

<tbody>

<?php foreach($pesanan as $p): ?>

    <tr>
        <td>#<?= $p['id'] ?></td>
        <td><?= $p['nama'] ?></td>
        <td><?= $p['no_hp'] ?></td>
        <td><?= number_format ($p['total']) ?></td>

        <td>
            <span class="badge bg-dark"><?= $p['status'] ?></span>
        </td>

        <td>
            <a href="<?= base_url('status/'.$p['id'].'/Diproses') ?>" class="btn btn-warning btn-sm">Proses</a>

        <a href="<?= base_url('status/'.$p['id'].'/Diantar') ?>"class="btn btn-primary btn-sm">Antar</a>

        <a href="<?= base_url('status/'.$p['id'].'/Selesai') ?>"class="btn btn-success btn-sm">Selesai</a>

        <a href="<?= base_url('hapus_pesanan/'.$p['id']) ?>"class="btn btn-danger btn-sm">Hapus</a>
        </td>
    </tr>

    <?php endforeach; ?>

</tbody>
</table>
</div>

<?= view('layout/footer'); ?>