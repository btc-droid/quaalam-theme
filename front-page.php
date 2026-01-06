<?php
/**
 * The template for displaying the front page
 *
 * @package QuaalamTheme
 */

get_header();
?>

<!-- HERO SECTION -->
<section class="hero-section">
    <div class="container hero-container">
        <div class="hero-content">
            <h1 class="hero-title">Kesegaran Alam untuk <br>Kesehatan Keluarga</h1>
            <p class="hero-subtitle">Air minum dalam kemasan yang diproses higienis untuk kualitas terbaik.</p>
            <div class="hero-buttons">
                <a href="<?php echo site_url('/produk'); ?>" class="btn btn-primary">Lihat Produk</a>
                <a href="<?php echo site_url('/kontak'); ?>" class="btn btn-outline">Hubungi Kami</a>
            </div>
        </div>
        <div class="hero-image">
            <!-- Fallback image logic if logo is used as decoration, or use standard hero image -->
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Quaalam Water" class="hero-img-asset">
        </div>
    </div>
</section>

<!-- BRAND INTRO -->
<section class="section intro-section">
    <div class="container text-center">
        <h2 class="section-title">KENAPA PILIH QUAALAM?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon">💧</div>
                <h3>Murni & Segar</h3>
                <p>Diambil dari sumber mata air pegunungan terpilih.</p>
            </div>
            <div class="feature-card">
                <div class="icon">🛡️</div>
                <h3>Higienis</h3>
                <p>Diproses dengan teknologi filtrasi modern.</p>
            </div>
            <div class="feature-card">
                <div class="icon">✅</div>
                <h3>Bersertifikat</h3>
                <p>Terdaftar BPOM dan bersertifikat Halal.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="section cta-section">
    <div class="container text-center">
        <h2>Siap Penuhi Kebutuhan Air Minum Anda?</h2>
        <p>Hubungi kami untuk pemesanan partai besar maupun eceran.</p>
        <a href="https://wa.me/6282344136130" class="btn btn-white">Pesan Sekarang</a>
    </div>
</section>

<?php
get_footer();
