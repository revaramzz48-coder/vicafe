<?= view('layout/header'); ?>

<style>
    .contact-section {
        background-color: var(--cream, #F5F0E8);
        padding: 60px 0 80px;
        min-height: 70vh;
        margin-top: 50px;
        animation: fadeInUp 1s ease;
    }

    .section-heading h2 {
        font-size: 2.2rem;
        font-weight: 600;
    }

    .section-heading h2 span {
        color: var(--accent-gold);
        font-style: italic;
    }

    .divider {
        width: 44px;
        height: 3px;
        background: var(--accent-gold);
        border-radius: 2px;
        margin: 12px auto 36px;
        box-shadow: 0 0 10px var(--accent-glow);
    }

    .contact-card {
        background: var(--bg-card);
        border: 1px solid var(--glass-border);
        border-radius: 16px;
        padding: 1.5 rem;
        height: 100%;
    }

    .card-label {
        font-size: 07rem;
        font-weight: 600;
        color: var(--accent-gold);
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 1rem;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 1rem;
    }

    .info-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: var(--accent-glow);
        border: 1px solid var(--accent-gold);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        color: var(--accent-gold);
        font-size: 0,9rem;
    }

    .info-text .title {
        font-size: 0.875rem;
        font-weight: 600;
        margin: 0;
    }

    .info-text .subtitle {
        font-size: 0.8rem;
        color: var(--text-muted, #7a6855);
        margin: 0;
    }

    .wa-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        background: #25D366;
        border: none;
        color: white;
        font-size: 0.875rem;
        font-weight: 600;
        margin-top: 1rem;
        text-decoration: none;
        transition: opacity 0.2s;
    }

    .wa-btn:hover {
        opacity: 0,88;
        color: white;
    }

    .social-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 14px;
        border-radius: 20px;
        border: 1px solid var(--glass-border);
        background: var(--accent-glow);
        font-size: 0.8rem;
        font-weight: 500;
        text-decoration: none;
        color: var(--accent-gold);
        transition: background 0.2s;
    }

    .social-btn:hover {
        background: var(--glass-border);
    }

    .map-card {
        background: var(--class-bg);
        border: 1px solid var(--glass-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
    }

    .map-card iframe {
        width: 100%;
        height: 200px;
        border: none;
        display: block;
        border-radius: 0;
    }

    .map-footer {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 16px;
    }

    .map-footer i {
        color: var(--accent-gold);
        font-size: 1.2rem;
    }

    .map-footer .title {
        font-size: 0.875rem;
        font-weight: 600;
        margin: 0;
    }

    .map-footer .subtitle {
        font-size: 0.78rem;
        color: var(--text-muted, #7a6855);
        margin: 0;
    }

    .form-card {
        background: var(--bg-card);
        border: 1px solid var(--glass-border);
        border-radius: 16px;
        padding: 1.5rem;
    }

    .form-card .form-control {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: 8px;
        font-size: 0.875rem;
        padding: 9px 12px;
        color: inherit;
    }

    .form-card .form-control:focus {
        border-color: var(--accent-gold);
        box-shadow: 0 0 0 3px var(--accent-glow);
        background: var(--glass-bg);
    }

    .form-card textarea .form-control {
        height: 100px;
        resize: none;
    }

    .send-btn {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        background: var(--accent-gold);
        border: none;
        color: white;
        font-size: 0.875rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        transition: opacity 0.2s;
    }

    .send-btn:hover {
        opacity: 0.88;
        color: white;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<section class="contact-section">
    <div class="container">

    <div class="text-center section-heading">
        <h2>Our <span>Location</span></h2>
        <p class="text-muted">Please come and contact us if needed.</p>
        <div class="divider"></div>
    </div>

    <div class="row g-4">

    <div class="col-lg-6 d-flex flex-column gap-4">
        <div class="contact-card">
            <p class="card-label">Kontak & Map</p>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="info-text">
                    <p class="title">Jl. Jl</p>
                    <p class="subtitle">Jawa Timur, Indonesia</p>
                </div>
            </div>

            <div class="info-text">
                <p class="title">Jl Jl</p>
                <p class="subtitle">Jawa Timur, Indonesia</p>
            </div>
        </div>

        <div class="info-item">
            <div class="info-icon">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div class="info-text">
                <P class="title">Open Daily</P>
                <p class="subtitle">07.00 - 21.00</p>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fa-sloid fa-envelope"></i>
                </div>
                <div class="info-text">
                    <p class="title">vicafe@gmail.com</p>
                    <p class="subtitle">Balas dalam 24 Jam</p>
                </div>
            </div>

            <a href="https://wa.me/+6281337967025" target="_blank" class="wa-btn">
                <i class="fa-brans fa-whatsapp"></i> Chat Via Whatsapp
            </a>
        </div>

        <div class="contact-card">
            <p class="card-label">Ikuti Kami</p>
            <div class="d-flex flex-warp gap-2">
                <a href="https://www.instagram.com/vrexta__?igsh=eXQ3cGh6cnZ1YnIx" target="_blank" class="social-btn">
                    <i class="fa-brands fa-instagram">Instagram</i>
                </a>
                <a href="https://vm.tiktok.com/ZS9Ngv3MJedUR-dynwn/" target="_blank" class="social-btn">
                    <i class="fa-brands fa-tiktok">Tiktok</i>
                </a>
                <a href="https://www.facebook.com/share/1JQ3CxsoR6/" target="_blank" class="social-btn">
                    <i class="fa-brands fa-facebook">Facebook</i>
                </a>
            </div>
        </div>

    </div>

    <div class="col-lg-6 d-flex flex-column gap-4">
        
    <div class="map-card">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.8580491379107!2d113.2737643!3d-8.1159325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd65d9125e9f78f%3A0x70382d66e2a44967!2sGadis%20Pantura%20Team!5e0!3m2!1sid!2sid!4v1775887977516!5m2!1sid!2sid"></iframe>
            <div class="map-footer">
                <i class="fa-solid da-location"></i>
                <div>
                    <p class="title">Lumajang, Jawa Timur</p>
                    <p class="subtitle">Klik Peta untuk lihat rute lengkap</p>
                </div>
            </div>

            <div class="form-card">
                <p class="card-label">Kirim Pesan</p>

                <?php if (session()->getFlashdata('success')):?>
                <p class="alert alert-success py-2 px-3 mb-3" style="font-size: 0.85rem; border-radius: 8px;">
                    <?= session()->getFlashdata('success') ?>
                </p>
            </div>
        </div>
    </div>
    </div>

    </div>

</section>

<?= view('layout/footer'); ?>