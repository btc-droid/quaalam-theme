<?php
/**
 * Template Name: Halaman Produk
 * 
 * @package QuaalamTheme
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title">Produk Kami</h1>
        <p class="page-subtitle">Pilihan terbaik untuk berbagai kebutuhan.</p>
    </div>
</div>

<main class="site-main section">
    <div class="container">
        
        <!-- SINGLE PRODUCT LAYOUT -->
        <div class="product-highlight text-center" style="max-width: 600px; margin: 0 auto;">
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/produk-gelas.jpg" alt="Quaalam Gelas 220ml" class="product-img-detail">
                </div>
                <div class="product-info">
                    <h3>Quaalam Gelas 220ml</h3>
                    <p style="font-size: 1.1rem; margin-bottom: 0.5rem;">Praktis & Ekonomis</p>
                    <p style="color: #666; margin-bottom: 1.5rem;">
                        Pilihan tepat untuk acara keluarga, rapat kantor, atau konsumsi harian. 
                        Dikemas dalam ukuran gelas yang pas sekali minum.
                    </p>
                    <div style="display: flex; gap: 1rem; justify-content: center;">
                        <a href="https://wa.me/6282344136130?text=Halo%2C%20saya%20tertarik%20pesan%20Quaalam%20Gelas%20220ml" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php
get_footer();
