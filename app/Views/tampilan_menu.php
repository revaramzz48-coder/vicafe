<?= view('layout/header'); ?>

<div class="container py-5">

    <div class="text-center mb-5" style="animation: fadeInDown 0.8s ease;">
        <h2 class="display-5 fw-bold mb-3">Our <span style="color: var(--accent-gold);">Signature</span> Menu</h2>
        <p class="text-muted mx-auto" style="max-width: 500px;">Carefully crafted beverages and mouth-watering bites to elevate your experience.</p>
        <div class="divider mx-auto mt-4"></div>
    </div>

    <div class="row g-4">

        <?php foreach ($semua_menu as $m) : ?>
        <div class="col-md-6 col-lg-4" style="animation: fadeInUp 0.8s ease backwards; animation-delay: calc(0.1s * <?= mt_rand(1,5) ?>);">

            <div class="card menu-card h-100">
                <div class="img-wrapper">
                    <img src="<?= base_url('uploads/'.$m['gambar']) ?>" class="card-img-top" alt="<?= $m['nama_menu'] ?>" onerror="this.src='https://via.placeholder.com/400x300/161a1d/ffb703?text=ViCafe'">
                    
                    <div class="category-badge 
                        <?= ($m['kategori'] == 'Makanan' || $m['kategori'] == 'Camilan') ? 'badge-food' : 'badge-drink' ?>">
                        <i class="fa-solid <?= ($m['kategori'] == 'Makanan' || $m['kategori'] == 'Camilan') ? 'fa-burger' : 'fa-mug-saucer' ?> me-1"></i>
                        <?= $m['kategori'] ?>
                    </div>
                </div>  

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold fs-4 mb-2"><?= $m['nama_menu'] ?></h5>
                    <div class="d-flex justify-content-between align-items-center mt-auto pt-3">
                        <span class="price-tag">
                            Rp <?= number_format($m['harga'], 0, ',', '.') ?>
                        </span>
                        <a href="<?= base_url('tambah_keranjang/'. $m['id']) ?>" class="btn btn-order rounded-circle">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <?php endforeach; ?>

    </div>

</div>

<style>
.divider {
    height: 3px;
    width: 60px;
    background: var(--accent-gold);
    border-radius: 3px;
    box-shadow: 0 0 10px var(--accent-glow);
}

.menu-card {
    background: var(--bg-card);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.menu-card:hover {
    transform: translateY(-15px);
    border-color: rgba(255, 183, 3, 0.3);
    box-shadow: 0 20px 40px rgba(255, 183, 3, 0.15);
}

.img-wrapper {
    position: relative;
    overflow: hidden;
    height: 240px;
}

.card-img-top {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.menu-card:hover .card-img-top {
    transform: scale(1.15);
}

/* Overlay gradient on image */
.img-wrapper::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 50%;
    background: linear-gradient(to top, var(--bg-card), transparent);
    pointer-events: none;
}

.category-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    padding: 6px 12px;
    border-radius: 30px;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    backdrop-filter: blur(5px);
    z-index: 2;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

.badge-food {
    background: rgba(230, 57, 70, 0.8);
    color: white;
    border: 1px solid rgba(230, 57, 70, 0.5);
}

.badge-drink {
    background: rgba(255, 183, 3, 0.8);
    color: #000;
    border: 1px solid rgba(255, 183, 3, 0.5);
}

.card-body {
    padding: 1.5rem;
    color: var(--text-main);
}

.price-tag {
    color: var(--accent-gold);
    font-size: 1.3rem;
    font-weight: 800;
    font-family: 'Outfit', sans-serif;
}

.btn-order {
    background: rgba(255, 255, 255, 0.05);
    color: var(--text-main);
    border: 1px solid var(--glass-border);
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.menu-card:hover .btn-order {
    background: var(--accent-gold);
    color: #000;
    border-color: var(--accent-gold);
    transform: rotate(90deg);
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

<?= view('layout/footer'); ?>