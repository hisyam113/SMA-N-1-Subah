<?php
// Data Kategori Ekstrakurikuler untuk Filter
$kategori_list = [
    ["slug" => "semua", "nama" => "Semua"],
    ["slug" => "olahraga", "nama" => "Olahraga"],
    ["slug" => "kepemimpinan", "nama" => "Kepemimpinan"],
    ["slug" => "kemanusiaan", "nama" => "Kemanusiaan"],
    ["slug" => "karya", "nama" => "Karya"],
    ["slug" => "seni-budaya", "nama" => "Seni & Budaya"],
    ["slug" => "bahasa", "nama" => "Bahasa"]
];

// Data Ekstrakurikuler (Waktu/Jadwal ekstra sudah dihilangkan)
$ekskul_list = [
    [
        "nama"        => "Basket",
        "kategori"    => "Olahraga",
        "slug_kat"    => "olahraga",
        "pembina"     => "Teguh Kusumanto, S.Pd.",
        "deskripsi"   => "Pembentukan karakter kedisiplinan, kepemimpinan, kemandirian, dan kepedulian sosial.",
        "badge_class" => "badge-rose",
        "gambar"      => "assets/images/ekstra/basket.jpg"
    ],
    [
        "nama"        => "Bola Voli",
        "kategori"    => "Olahraga",
        "slug_kat"    => "olahraga",
        "pembina"     => "Nur Faisal Edy Nugroho, S.Pd.",
        "deskripsi"   => "Wadah menyalurkan hobi, melatih ketangkasan fisik, dan membangun sportivitas tim di lapangan voli.",
        "badge_class" => "badge-amber",
        "gambar"      => "assets/images/ekstra/voli.jpg"
    ],
    [
        "nama"        => "Paskira",
        "kategori"    => "Kepemimpinan",
        "slug_kat"    => "kepemimpinan",
        "pembina"     => "Dhiah Ayu Kusumaningtyas, S.Pd.",
        "deskripsi"   => "Pelatihan baris-berbaris, tata upacara bendera, serta penanaman kedisiplinan dan nasionalisme.",
        "badge_class" => "badge-blue",
        "gambar"      => "assets/images/ekstra/paskira.jpg"
    ],
    [
        "nama"        => "PMR (Palang Merah Remaja)",
        "kategori"    => "Kemanusiaan",
        "slug_kat"    => "kemanusiaan",
        "pembina"     => "TAUFIQ ARINOTO, S.Kep.",
        "deskripsi"   => "Pelatihan pertolongan pertama (P3K), kesiapsiagaan bencana, dan aksi kepedulian sosial.",
        "badge_class" => "badge-emerald",
        "gambar"      => "assets/images/ekstra/pmr.jpg"
    ],
    [
        "nama"        => "Karya Ilmiah Remaja",
        "kategori"    => "Karya",
        "slug_kat"    => "karya",
        "pembina"     => "Pudya Saras Ati, M.Si.",
        "deskripsi"   => "Wadah penelitian ilmiah remaja, eksperimen sains, dan persiapan Olimpiade Sains.",
        "badge_class" => "badge-amber",
        "gambar"      => "assets/images/ekstra/kir.jpg"
    ],
    [
        "nama"        => "PRAMUKA",
        "kategori"    => "Kepemimpinan",
        "slug_kat"    => "kepemimpinan",
        "pembina"     => "Pujo Suparno, S.Sn.",
        "deskripsi"   => "Kegiatan kepanduan untuk melatih kemandirian, kerja sama, kepemimpinan, dan kepedulian sosial siswa.",
        "badge_class" => "badge-blue",
        "gambar"      => "assets/images/ekstra/pramuka.jpg"
    ],
    [
        "nama"        => "Seni Musik & Tari",
        "kategori"    => "Seni & Budaya",
        "slug_kat"    => "seni-budaya",
        "pembina"     => "Rina Wijaya, S.Sn.",
        "deskripsi"   => "Eksplorasi olah vokal, instrumen musik, dan pelestarian seni tari daerah.",
        "badge_class" => "badge-purple",
        "gambar"      => "assets/images/ekstra/senmus.jpg"
    ],
    [
        "nama"        => "Futsal",
        "kategori"    => "Olahraga",
        "slug_kat"    => "olahraga",
        "pembina"     => "Hardoko, S.Pd.",
        "deskripsi"   => "Kegiatan olahraga tim untuk membangun kebugaran, strategi permainan, sportivitas, dan kerja sama.",
        "badge_class" => "badge-emerald",
        "gambar"      => "assets/images/ekstra/futsal.png"
    ],
    [
        "nama"        => "English Club",
        "kategori"    => "Bahasa",
        "slug_kat"    => "bahasa",
        "pembina"     => "Dewi Lestari, M.Pd.",
        "deskripsi"   => "Pengembangan public speaking, debat bahasa Inggris, storytelling, dan persiapan lomba.",
        "badge_class" => "badge-amber",
        "gambar"      => "assets/images/ekstra/eng-club.jpg"
    ]
];
?>

<div class="ekstra-container">

    <!-- HEADER SECTION -->
    <div class="ekstra-header-box">
        <div class="header-icon">
            <i class="fa-solid fa-trophy"></i>
        </div>
        <div>
            <h3>Ekstrakurikuler & Pengembangan Diri</h3>
            <p>Wadah penyaluran minat, bakat, kepemimpinan, serta prestasi non-akademik siswa SMAN 1 Subah.</p>
        </div>
    </div>

    <!-- TOMBOL FILTER KATEGORI -->
    <div class="filter-buttons-wrapper">
        <?php foreach ($kategori_list as $index => $kat) : ?>
            <button class="filter-btn <?= $index === 0 ? 'active' : ''; ?>" data-filter="<?= $kat['slug']; ?>">
                <?= $kat['nama']; ?>
            </button>
        <?php endforeach; ?>
    </div>

    <!-- GRID KARTU EKSTRAKURIKULER -->
    <div class="ekstra-grid" id="ekstraGrid">
        <?php foreach ($ekskul_list as $ekskul) : ?>
            <div class="ekstra-card" data-category="<?= $ekskul['slug_kat']; ?>">
                
                <!-- Gambar Thumbnail -->
                <div class="ekstra-card-img">
                    <img src="<?= $ekskul['gambar']; ?>" alt="<?= $ekskul['nama']; ?>" loading="lazy">
                    <span class="category-badge <?= $ekskul['badge_class']; ?>">
                        <?= $ekskul['kategori']; ?>
                    </span>
                </div>

                <!-- Konten Kartu (Logo ekstra di samping judul telah dihapus) -->
                <div class="ekstra-card-body">
                    <h4 class="ekstra-title"><?= $ekskul['nama']; ?></h4>

                    <p class="ekstra-desc"><?= $ekskul['deskripsi']; ?></p>

                    <div class="ekstra-details">
                        <div class="detail-item">
                            <i class="fa-regular fa-user"></i>
                            <span>Pembina: <?= $ekskul['pembina']; ?></span>
                        </div>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

</div>

<!-- SCRIPT FILTER -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const ekstraCards = document.querySelectorAll(".ekstra-card");

    filterButtons.forEach(button => {
        button.addEventListener("click", function () {
            // Mengatur kelas aktif tombol
            filterButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            const selectedFilter = this.getAttribute("data-filter");

            ekstraCards.forEach(card => {
                const cardCategory = card.getAttribute("data-category");

                if (selectedFilter === "semua" || cardCategory === selectedFilter) {
                    card.classList.remove("hide");
                } else {
                    card.classList.add("hide");
                }
            });
        });
    });
});
</script>