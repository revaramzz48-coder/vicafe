<?= view('layout/header'); ?>

<div class="text-center text-white d-flex align-items-center justify-content-center" 
    style="height:90vh; background:linear-gradient(rgba(0,0,0,0.5), rgba(0, 0, 0, 0,5)), url('<?= base_url('assets/image/back.jpg') ?>); background-size:cover;">

    <div>
        <h1 class="display-4 fw-bold">☕ViCafe☕</h1>
        <p class="lead">Tempat terbaik untuk nongkrong & menikmati kopi</p>
        <a href="<?= base_url('menu') ?>" class="btn btn-warning">Lihat Menu</a>
    </div>
</div>

<?= view('layout/footer') ?>