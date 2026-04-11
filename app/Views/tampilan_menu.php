<?= view('layout/header'); ?>

<div class="container my-5">

    <h2 class="text-center mb-5 fw-bold">☕ Menu ViCafe</h2>

    <div class="row g-4">

        <?php foreach ($semua_menu as $m) : ?>
        <div class="col-md-4">

            <div class="card menu-card h-100">

                <!-- GAMBAR -->
                <img src="<?= base_url('assets/image/cafe.jpg') ?>" class="card-img-top">

                <div class="card-body">

                    <!-- KATEGORI -->
                    <span class="badge 
                        <?= ($m['kategori'] == 'Makanan') ? 'bg-warning text-dark' : 'bg-info text-dark' ?>">
                        <?= $m['kategori'] ?>
                    </span>

                    <!-- NAMA -->
                    <h5 class="card-title mt-2"><?= $m['nama_menu'] ?></h5>

                    <!-- HARGA -->
                    <p class="text-success fw-bold">
                        Rp <?= number_format($m['harga'], 0, ',', '.') ?>
                    </p>

                    <!-- BUTTON -->
                    <button class="btn btn-dark w-100">Pesan</button>

                </div>
            </div>

        </div>
        <?php endforeach; ?>

    </div>

</div>

<style>
.menu-card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    transition: 0.3s;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.menu-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}
</style>

<?= view('layout/footer'); ?>