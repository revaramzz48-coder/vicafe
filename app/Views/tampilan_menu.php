<?= view('layout/header'); ?>

<div class="container my-5">

    <h2 class="text-center mb-5 fw-bold">☕ Menu ViCafe</h2>

    <div class="row g-4">

        <?php foreach ($semua_menu as $m) : ?>
        <div class="col-md-4">

            <div class="card menu-card h-100">
                <div class="img-wrapper">
                    <img src="<?= base_url('public/uploads/'.$m['gambar']) ?>" class="card-img-top">
                </div>  

                <div class="card-body">
                    <span class="badge 
                        <?= ($m['kategori'] == 'Makanan') ? 'bg-warning text-dark' : 'bg-info text-dark' ?>">
                        <?= $m['kategori'] ?>
                    </span>

                    <h5 class="card-title mt-2"><?= $m['nama_menu'] ?></h5>

                    <p class="text-success fw-bold">
                        Rp <?= number_format($m['harga'], 0, ',', '.') ?>
                    </p>
                    <button class="btn btn-dark w-100 btn-pesan">Pesan</button>
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
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.menu-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.img-wrapper {
    overflow: hidden;
}

.card-img-top {
    height: 200px;
    object-fit: cover;
    transition: 0.4s;
}

.menu-card:hover .card-img-top {
    transform: scale(1.1);
}

.btn-pesan {
    position: relative;
    overflow: hidden;
    transition: 0.3s;
}

.btn-pesan:active {
    transform: scale(0.90);
}

.btn-pesan::after{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.3);
    top: 0;
    left: -100%;
    transition: 0.4s;
}

.btn-pesan:hover::after {
    left: 0;
}
</style>

<?= view('layout/footer'); ?>