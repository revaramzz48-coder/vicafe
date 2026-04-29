<?= view('layout/header'); ?>

<div class="container py-5" style="margin-top: 50px; min-height: 70vh;">
    <div class="row justify-content-center">
        <div class="col-lg-8" style="animation: fadeInUp 1s ease;">
            
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">The <span style="color: var(--accent-gold);">ViCafe</span> Story</h2>
                <div class="divider mx-auto mt-4"></div>
            </div>

            <div class="glass-container p-5 text-center">
                <i class="fa-solid fa-quote-left fs-1 mb-4 opacity-50" style="color: var(--accent-gold);"></i>
                <p class="fs-5 lh-lg text-light-50 fw-light">
                    ViCafe is your ultimate sanctuary—a space crafted for comfort, creativity, and connection. 
                    Whether you're seeking a cozy spot to work, a photogenic backdrop for your feed, or simply the perfect cup of coffee, we've got you covered. 
                    Embrace the Gen-Z aesthetic, savor our curated selection of coffee and non-coffee beverages, and indulge in our delightful bites.
                </p>
                <div class="mt-4 pt-4 border-top border-secondary opacity-75">
                    <span class="badge px-3 py-2 rounded-pill mx-1 custom-badge">Aesthetic</span>
                    <span class="badge px-3 py-2 rounded-pill mx-1 custom-badge">Cozy</span>
                    <span class="badge px-3 py-2 rounded-pill mx-1 custom-badge">Premium Coffee</span>
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

.glass-container {
    background: var(--glass-bg);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.05);
    position: relative;
    overflow: hidden;
}

.glass-container::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; height: 5px;
    background: linear-gradient(90deg, transparent, var(--accent-gold), transparent);
}

.text-light-50 {
    color: var(--text-muted) !important;
}

.custom-badge {
    background-color: rgba(221, 161, 94, 0.1);
    border: 1px solid var(--accent-gold);
    color: var(--accent-gold);
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

<?= view('layout/footer'); ?>