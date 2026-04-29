<?= view('layout/header') ?>

<div class="container mt-5">

<h2>Checkout</h2>

<?php
$user = session()->get('pelanggan');
$cart = session()->get('cart');
$total = 0 
?>

<form action="<?= base_url('proses_checkout') ?>" method="post">

<div class="mb-3">
<label>Nama</label>
<input type="text" class="form-control" value="<?= $user['nama'] ?>" readonly>
</div>

<div class="mb-3">
<label>No HP</label>
<input type="text" class="form-control" value="<?= $user['no_hp'] ?>" readonly>
</div>

<div class="mb-3">
<label>Alamat</label>
<textarea name="alamat" class="form-control" required><?= $user['alamat'] ?></textarea>
</div>

<h4>Pesanan:</h4>

<ul class="list-group mb-3">
    <?php foreach($cart as $item):
    $subtotal = $item['harga'] * $item['qty'];
    $total += $subtotal;
    ?>

    <li class="list-group-item d-flex justify-content-between">
        <span><?= $item['nama'] ?> x <?= $item['qty'] ?></span>
        <span>Rp <?= number_format($subtotal) ?></span>
    </li>

    <?php endforeach; ?>
</ul>

<h4>Total: Rp <?=  number_format($total) ?></h4>

<button class="btn btn-success w-100 mt-3">Pesan Sekarang</button>
</form>
</div>

<?= view('layout/footer'); ?>