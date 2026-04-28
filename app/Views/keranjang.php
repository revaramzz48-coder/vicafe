<?= view('layout/header'); ?>

<div class="container mt-5">
    <h2>🛒 keranjang</h2>

    <?php $cart = session()->get('cart'); ?>

    <?php if ($cart): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; foreach($cart as $id => $item):
                    $subtotal = $item['harga'] * $item['qty'];
                    $total += $subtotal;
                ?>

                <tr>
                    <td><?= $item['nama'] ?></td>
                    <td>Rp <?= number_format($item['harga']) ?></td>
                    <td><?= $item['qty']?></td>
                    <td>Rp <?= number_format($subtotal) ?></td>
                    <td>
                        <a href="<?= base_url('hapus_keranjang/'.$id) ?>"
                        class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4>Total: Rp <?= number_format($total) ?></h4>

        <?php else: ?>
            <p>Keranjang masih kosong 😢</p>
        <?php endif; ?>
</div>
<?= view('layout/footer'); ?>