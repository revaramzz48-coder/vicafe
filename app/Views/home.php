<?= view('layout/header'); ?>

<div class="text-center text-white d-flex align-items-center justify-content-center"
    style="height:95vh; 
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
    url('<?= base_url('assets/image/back.jpg') ?>'); 
    background-size: cover; 
    background-position: center;">

    <div>
        <h1 class="display-3 fw-bold" style="animation: fadeIn 1s;">☕ ViCafe</h1>
        <p class="lead mb-4">Tempat terbaik untuk nongkrong & menikmati kopi</p>
        <a href="<?= base_url('menu') ?>" class="btn btn-warning btn-lg px-4">Menu</a>
    </div>

</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px);}
    to { opacity: 1; transform: translateY(0);}
}

.btn-warning:hover {
    background-color: #FFAE00BB;
    color: white;
    transform: scale(1.05);
    border: #FFAE008E;
}
</style>
<?= view('layout/footer') ?>