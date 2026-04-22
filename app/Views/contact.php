<?= view('layout/header'); ?>

<div class="container py-5" style="margin-top: 50px; min-height: 70vh;">
    <div class="row justify-content-center">
        <div class="col-lg-10" style="animation: fadeInUp 1s ease;">

            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our <span style="color: var(--accent-gold);">Location</span></h2>
                <p class="text-muted">Come visit us and experience the vibe in person.</p>
                <div class="divider mx-auto mt-4"></div>
            </div>

            <div class="map-container mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.8580491379107!2d113.2737643!3d-8.1159325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd65d9125e9f78f%3A0x70382d66e2a44967!2sGadis%20Pantura%20Team!5e0!3m2!1sid!2sid!4v1775887977516!5m2!1sid!2sid" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="location-card d-flex align-items-center justify-content-center gap-3 p-4 text-center">
                <div class="icon-box">
                    <i class="fa-solid fa-location-dot fs-3"></i>
                </div>
                <div class="text-start">
                    <h5 class="mb-1 fw-bold">Lumajang, Jawa Timur</h5>
                    <p class="mb-0 text-muted">Open Daily: 09:00 AM - 11:00 PM</p>
                </div>
            </div>

        </div>
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

.map-container {
    background: var(--glass-bg);
    padding: 10px;
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.5);
    position: relative;
    overflow: hidden;
}

.map-container iframe {
    border-radius: 12px;
    filter: invert(90%) hue-rotate(180deg) brightness(85%) contrast(85%);
    transition: filter 0.5s ease;
}

.map-container:hover iframe {
    filter: invert(0%) hue-rotate(0deg) brightness(100%) contrast(100%);
}

.location-card {
    background: var(--bg-card);
    border: 1px solid var(--glass-border);
    border-radius: 15px;
    max-width: 400px;
    margin: 0 auto;
}

.icon-box {
    width: 60px;
    height: 60px;
    background: rgba(255, 183, 3, 0.1);
    color: var(--accent-gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255, 183, 3, 0.3);
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

<?= view('layout/footer'); ?>