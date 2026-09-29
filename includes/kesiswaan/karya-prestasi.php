<?php
// Data Prestasi SMAN 1 Subah (Simple Version)
$karya_prestasi = [
    [
        "judul"   => "Juara 3 Bank Jateng Liga Basket Bahurekso Region Batang",
        "kategori"=> "Prestasi Siswa",
        "peraih"  => "Tim Basket SMA Negeri 1 Subah",
        "ajang"   => "Bank Jateng Liga Basket Bahurekso Region Batang",
        "gambar"  => "assets/images/prestasi/basket.png"
    ],
    [
        "judul"   => "Juara 2 POPDA Taekwondo Tingkat Provinsi Jawa Tengah",
        "kategori"=> "Prestasi Siswa",
        "peraih"  => "Javier Risqika H (XII IPA 2)",
        "ajang"   => "POPDA Taekwondo Tingkat Provinsi Jawa Tengah",
        "gambar"  => "assets/images/prestasi/taekwondo.jpg"
    ]
];
?>

<div class="prestasi-container">

    <!-- HERO HEADER -->
    <div class="prestasi-hero" style="background: linear-gradient(rgba(10, 37, 64, 0.85), rgba(10, 37, 64, 0.92)), url('https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?w=1200&auto=format&fit=crop&q=80') center/cover no-repeat;">
        <div class="prestasi-hero-content">
            <span class="hero-badge"><i class="fa-solid fa-award"></i> KEBANGGAAN SMAN 1 SUBAH</span>
            <h2>Karya & Prestasi Siswa</h2>
            <p>Ruang apresiasi atas torehan juara, inovasi teknologi, karya seni, dan dedikasi luar biasa siswa-siswi SMA Negeri 1 Subah.</p>
        </div>
    </div>

    <!-- GRID 2 CARD PRESTASI -->
    <div class="prestasi-grid">
        <?php foreach ($karya_prestasi as $item) : ?>
            <article class="prestasi-card">
                <div class="card-image-box">
                    <img src="<?= $item['gambar']; ?>" alt="<?= $item['judul']; ?>" loading="lazy">
                </div>

                <div class="card-body">
                    <div class="badge-pill">
                        <i class="fa-solid fa-trophy"></i> <?= $item['kategori']; ?>
                    </div>

                    <h3 class="card-title"><?= $item['judul']; ?></h3>
                    
                    <div class="card-info">
                        <p><strong>Peraih:</strong> <?= $item['peraih']; ?></p>
                        <p><strong>Ajang:</strong> <?= $item['ajang']; ?></p>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

</div>