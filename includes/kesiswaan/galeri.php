<?php
// Data Galeri Kegiatan Kesiswaan SMAN 1 Subah
$galeri_kegiatan = [
    [
        "judul"     => "Classmeeting",
        "kategori"  => "Kesiswaan",
        "tanggal"   => "9-13 Desember 2024",
        "lokasi"    => "Lapangan Utama",
        "deskripsi" => "Ajang kompetisi antar kelas yang memperlombakan berbagai cabang olahraga dan seni untuk mempererat kebersamaan siswa.",
        "gambar"    => "assets/images/galeri/classmeet.jpeg"
    ],
    [
        "judul"     => "Pesantren Ramadhan",
        "kategori"  => "Keagamaan",
        "tanggal"   => "15 Maret 2025",
        "lokasi"    => "Masjid & Kelas",
        "deskripsi" => "Kegiatan pembinaan keagamaan intensif untuk memperdalam ilmu Islam, meningkatkan ibadah, dan mempererat silaturahmi antar siswa di bulan suci.",
        "gambar"    => "assets/images/galeri/pesantren.jpeg"
    ],
    [
        "judul"     => "HUT SMABAH ke 40",
        "kategori"  => "Perayaan Sekolah",
        "tanggal"   => "28-29 April 2025",
        "lokasi"    => "SMAN 1 Subah",
        "deskripsi" => "Perayaan puncak milad sekolah ke-40 yang dimeriahkan dengan berbagai pentas seni, bazar, pameran karya siswa, serta tasyakuran untuk mempererat kekeluargaan warga sekolah.",
        "gambar"    => "assets/images/galeri/hut.jpeg"
    ],
    [
        "judul"     => "MPLS 2025",
        "kategori"  => "Kesiswaan",
        "tanggal"   => "21 Juli 2025",
        "lokasi"    => "Sekolah",
        "deskripsi" => "Kegiatan orientasi peserta didik baru untuk mengenali lingkungan sekolah, sistem pembelajaran, tata tertib, serta menumbuhkan karakter positif dan semangat adaptasi.",
        "gambar"    => "assets/images/galeri/mpls.jpeg"
    ],
    [
        "judul"     => "JURASSIC (Jumput Semangat, Raih Asa, Siap Satukan Ide dan Cita)",
        "kategori"  => "Kepramukaan",
        "tanggal"   => "31 Juli - 2 Agustus 2025",
        "lokasi"    => "SMA N 1 Subah",
        "deskripsi" => "Kegiatan perkemahan pramuka JURASSIC (Jumput Semangat, Raih Asa, Siap Satukan Ide dan Cita) yang dirancang untuk melatih kemandirian, memperkuat jiwa kepemimpinan, kerja sama tim, serta menumbuhkan kedisiplinan dan kecintaan pada alam.",
        "gambar"    => "assets/images/galeri/jurassic.jpeg"
    ],
    [
        "judul"     => "Maulid Nabi",
        "kategori"  => "Keagamaan",
        "tanggal"   => "10-11 September 2025",
        "lokasi"    => "SMA N 1 Subah",
        "deskripsi" => "Peringatan hari lahir Nabi Muhammad SAW yang diisi dengan ceramah keagamaan, lantunan shalawat, serta peneladanan akhlak mulia Rasulullah dalam kehidupan sehari-hari.",
        "gambar"    => "assets/images/galeri/maulid-nabi.jpeg"
    ]
];

$kategori_tabs = ["Semua", "Kesiswaan", "Kepramukaan", "Perayaan Sekolah", "Keagamaan"];
?>

<div class="galeri-kegiatan-wrapper">

    <!-- HERO HEADER -->
    <div class="galeri-hero-card" style="background: linear-gradient(rgba(10, 37, 64, 0.82), rgba(10, 37, 64, 0.92)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200&auto=format&fit=crop&q=80') center/cover no-repeat;">
        <div class="hero-text-content">
            <span class="hero-badge"><i class="fa-solid fa-camera-retro"></i> DOKUMENTASI KESISWAAN</span>
            <h2>Galeri Kegiatan Siswa</h2>
            <p>Rekam jejak dinamika, kreativitas, dan semangat kepemimpinan siswa-siswi SMA Negeri 1 Subah dalam berbagai agenda ekstrakurikuler dan organisasi.</p>
        </div>
    </div>

    <!-- FILTER KATEGORI -->
    <div class="filter-container">
        <div class="filter-scroll">
            <?php foreach ($kategori_tabs as $idx => $kat) : ?>
                <button class="filter-chip <?= $idx === 0 ? 'active' : ''; ?>" data-filter="<?= $kat; ?>">
                    <?= $kat; ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- CARD GRID -->
    <div class="galeri-card-grid">
        <?php foreach ($galeri_kegiatan as $item) : ?>
            <article class="activity-card" data-category="<?= $item['kategori']; ?>">
                <!-- Image Wrapper -->
                <div class="card-media">
                    <img src="<?= $item['gambar']; ?>" alt="<?= $item['judul']; ?>" loading="lazy">
                    <span class="tag-category"><?= $item['kategori']; ?></span>
                </div>

                <!-- Card Content -->
                <div class="card-content">
                    <div class="meta-info">
                        <span><i class="fa-regular fa-calendar"></i> <?= $item['tanggal']; ?></span>
                    </div>
                    <h3 class="activity-title"><?= $item['judul']; ?></h3>
                    <p class="activity-desc"><?= $item['deskripsi']; ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

</div>

<!-- SCRIPT UNTUK MENJALANKAN FILTER KATEGORI -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-chip");
    const activityCards = document.querySelectorAll(".activity-card");

    filterButtons.forEach(button => {
        button.addEventListener("click", function () {
            filterButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            const selectedCategory = this.getAttribute("data-filter");

            activityCards.forEach(card => {
                const cardCategory = card.getAttribute("data-category");

                if (selectedCategory === "Semua" || cardCategory === selectedCategory) {
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
});
</script>