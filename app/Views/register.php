<?= view('layout/header'); ?>

<div class="container py-5" style="margin-top: 50px; min-height: 70vh;">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5" style="animation: fadeInUp 0.8s ease;">
            
            <div class="glass-container p-5">
                <div class="text-center mb-4">
                    <i class="fa-solid fa-user-plus fs-1 mb-3" style="color: var(--accent-gold);"></i>
                    <h3 class="fw-bold">Daftar Akun Baru</h3>
                    <p class="text-muted">Daftar sekarang untuk mulai memesan.</p>
                </div>

                <form action="<?= base_url('simpan_register') ?>" method="post">
                    
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-user" style="color: var(--accent-gold);"></i></span>
                            <input type="text" name="nama" class="form-control border-start-0 bg-white" placeholder="Nama Anda" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold">Nomor HP</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-phone" style="color: var(--accent-gold);"></i></span>
                            <input type="text" name="no_hp" class="form-control border-start-0 bg-white" placeholder="08xxxxxxxxxx" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold">Alamat Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-map-location-dot" style="color: var(--accent-gold);"></i></span>
                            <textarea name="alamat" class="form-control border-start-0 bg-white" placeholder="Alamat pengiriman..." required></textarea>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-muted small fw-bold">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-lock" style="color: var(--accent-gold);"></i></span>
                            <input type="password" name="password" class="form-control border-start-0 bg-white" placeholder="Buat password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gold w-100 py-2 fw-bold mb-3 shadow-glow">
                        Daftar
                    </button>

                    <div class="text-center">
                        <p class="text-muted small mb-0">Sudah punya akun? <a href="<?= base_url('login_pelanggan') ?>" class="text-decoration-none fw-bold" style="color: var(--accent-gold);">Login di sini</a></p>
                    </div>

                </form>
            </div>
            
        </div>
    </div>
</div>

<style>
.glass-container {
    background: var(--glass-bg);
    backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.05);
}

.input-group-text, .form-control {
    border-color: rgba(0,0,0,0.1);
}

.form-control:focus {
    box-shadow: none;
    border-color: var(--accent-gold);
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
    transform: translateY(-3px);
    box-shadow: 0 10px 20px var(--accent-glow);
}

.shadow-glow {
    box-shadow: 0 8px 15px rgba(221, 161, 94, 0.3);
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

<?= view('layout/footer'); ?>