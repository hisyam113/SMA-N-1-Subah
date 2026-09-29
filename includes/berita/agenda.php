<?php
// Data Agenda Sekolah
$daftar_agenda = [
    [
        "judul"      => "Awal Tahun Ajaran dan Masa Pengenalan Lingkungan Sekolah",
        "kategori"   => "Kegiatan Sekolah",
        "tanggal"    => "Juli 2026",
        "ringkasan"  => "Koordinasi program kerja sekolah tahun ajaran 2026/2027 serta pemaparan rencana kegiatan kurikulum merdeka."
    ],
    [
        "judul"      => "Asesmen Diagnostik dan Pemetaan Belajar",
        "kategori"   => "Akademik",
        "tanggal"    => "Juli-Agustus 2026",
        "ringkasan"  => "Pemetaan kemampuan awal peserta didik sebagai dasar penyusunan strategi pembelajaran pada semester ganjil."
    ],
    [
        "judul"      => "Penilaian Tengah Semester Ganjil",
        "kategori"   => "Assasmen",
        "tanggal"    => "September 2026",
        "ringkasan"  => "Pelaksanaan evaluasi capaian pembelajaran peserta didik pada pertengahan semester ganjil."
    ],
    [
        "judul"      => "Projek Penguatan Karakter dan Gelar Karya",
        "kategori"   => "Assasmen",
        "tanggal"    => "Oktober 2026",
        "ringkasan"  => "Peserta didik menampilkan karya dan pengalaman belajar berbasis projek yang dikembangkan selama semester berjalan."
    ],
    [
        "judul"      => "Penilaian Akhir Semester Ganjil",
        "kategori"   => "Assasmen",
        "tanggal"    => "November - Desember 2026",
        "ringkasan"  => "Evaluasi akhir semester untuk mengukur ketercapaian tujuan pembelajaran peserta didik."
    ],
    [
        "judul"      => "Pembagian Rapor Semester Ganjil",
        "kategori"   => "Assasmen",
        "tanggal"    => "Desember 2026",
        "ringkasan"  => "Penyampaian laporan hasil belajar peserta didik kepada orang tua atau wali pada akhir semester ganjil."
    ]
];
?>

<div class="agenda-container">

    <!-- HERO HEADER -->
    <div class="agenda-hero">
        <span class="hero-badge"><i class="fa-solid fa-calendar-days"></i> JADWAL KEGIATAN</span>
        <h2>Agenda Sekolah</h2>
        <p>Jadwal resmi berbagai kegiatan akademik, non-akademik, serta acara penting yang akan berlangsung di SMA Negeri 1 Subah.</p>
    </div>

    <!-- LIST AGENDA -->
    <section class="agenda-list">
        <?php foreach ($daftar_agenda as $item) : ?>
            <article class="agenda-card">
                <!-- Detail Content -->
                <div class="agenda-content">
                    <div class="agenda-header-info">
                        <span class="badge-status badge-<?= strtolower($item['kategori']); ?>">
                            <?= $item['kategori']; ?>
                        </span>
                    </div>

                    <h3 class="agenda-title"><?= $item['judul']; ?></h3>
                    
                    <!-- Meta Waktu/Lokasi Diganti Menjadi Tanggal -->
                    <div class="agenda-meta">
                        <span><i class="fa-regular fa-calendar-days"></i> <?= $item['tanggal']; ?></span>
                    </div>

                    <p class="agenda-desc"><?= $item['ringkasan']; ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </section>

</div>