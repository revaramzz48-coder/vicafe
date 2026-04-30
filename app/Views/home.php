<?= view('layout/header'); ?>

<div class="hero-section d-flex align-items-center justify-content-center text-center position-relative">
    <div class="hero-overlay"></div>
    
    <div class="hero-content position-relative z-1" style="animation: fadeInUp 1s ease-out;">
        <h1 class="display-2 fw-bolder mb-3 hero-title" style="color: var(--text-main);">
            Awaken Your <br> <span class="text-gradient">Senses</span>
        </h1>
        
        <p class="lead mb-5 text-light-50 fw-light mx-auto" style="max-width: 600px;">
            Step into a world where every cup tells a story. Experience the perfect blend of aesthetic vibes, cozy ambiance, and masterfully crafted coffee.
        </p>
        
        <div class="d-flex justify-content-center gap-3">
            <a href="<?= base_url('menu') ?>" class="btn btn-gold btn-lg px-5 py-3 rounded-pill fw-bold shadow-glow text-white">
                Explore Menu
            </a>
            <a href="<?= base_url('about') ?>" class="btn btn-lg px-5 py-3 rounded-pill fw-bold glass-btn">
                Our Story
            </a>
        </div>
    </div>
</div>

<style>
    .hero-section {
        height: 100vh;
        width: 100%;
        margin-top: -80px; /* offset the header padding to make it full screen */
        background: url('<?= base_url('assets/image/back.jpg') ?>') no-repeat center center;
        background-size: cover;
        position: relative;
    }

    .hero-overlay {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(135deg, rgba(249, 246, 240, 0.85) 0%, rgba(255, 255, 255, 0.6) 100%);
    }

    .bg-glass {
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.8);
        color: var(--text-main);
    }

    .tracking-wider {
        letter-spacing: 2px;
    }

    .hero-title {
        text-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .text-gradient {
        background: linear-gradient(45deg, var(--accent-gold), #BC6C25);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: none;
    }

    .text-light-50 {
        color: rgba(74, 68, 60, 0.8) !important;
    }

    .btn-gold {
        background: var(--accent-gold);
        color: #fff;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-gold:hover {
        background: #BC6C25;
        color: #fff;
        transform: translateY(-5px);
        box-shadow: 0 15px 25px var(--accent-glow);
    }

    .shadow-glow {
        box-shadow: 0 10px 20px rgba(221, 161, 94, 0.3);
    }

    .glass-btn {
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.8);
        color: var(--text-main);
        transition: all 0.3s ease;
    }

    .glass-btn:hover {
        background: rgba(255, 255, 255, 0.8);
        color: var(--text-main);
        transform: translateY(-5px);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<?= view('layout/footer') ?>