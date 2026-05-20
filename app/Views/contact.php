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
        
    }
</style>

<?= view('layout/footer'); ?>