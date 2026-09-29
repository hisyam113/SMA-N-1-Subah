<?php
$kalender_data = [
    [
        "kategori"    => "Akademik",
        "judul"       => "Awal Semester Genap 2025/2026",
        "tanggal"     => "06 Jan 2026",
        "deskripsi"   => "Mulai kegiatan belajar mengajar semester genap untuk seluruh kelas.",
        "badge_class" => "badge-blue",
        "icon"        => "fa-graduation-cap"
    ],
    [
        "kategori"    => "Ujian",
        "judul"       => "Penilaian Tengah Semester (PTS)",
        "tanggal"     => "10 Feb 2026 - 15 Feb 2026",
        "deskripsi"   => "Pelaksanaan PTS berbasis jadwal mata pelajaran setiap jenjang.",
        "badge_class" => "badge-amber",
        "icon"        => "fa-file-signature"
    ],
    [
        "kategori"    => "Ujian",
        "judul"       => "Try Out Kelas XII",
        "tanggal"     => "25 Feb 2026",
        "deskripsi"   => "Simulasi ujian akhir untuk penguatan kesiapan siswa kelas akhir.",
        "badge_class" => "badge-amber",
        "icon"        => "fa-pen-ruler"
    ],
    [
        "kategori"    => "Ujian",
        "judul"       => "Ujian Praktik Kelas XII",
        "tanggal"     => "18 Mar 2026 - 24 Mar 2026",
        "deskripsi"   => "Penilaian praktik untuk mata pelajaran sesuai ketentuan kurikulum.",
        "badge_class" => "badge-amber",
        "icon"        => "fa-flask"
    ],
    [
        "kategori"    => "Ujian",
        "judul"       => "Penilaian Akhir Tahun (PAT)",
        "tanggal"     => "20 May 2026 - 27 May 2026",
        "deskripsi"   => "Pelaksanaan ujian akhir semester genap untuk semua jenjang.",
        "badge_class" => "badge-amber",
        "icon"        => "fa-file-invoice"
    ],
    [
        "kategori"    => "Rapor",
        "judul"       => "Pembagian Rapor Semester Genap",
        "tanggal"     => "12 Jun 2026",
        "deskripsi"   => "Distribusi hasil belajar dan konsultasi orang tua bersama wali kelas.",
        "badge_class" => "badge-emerald",
        "icon"        => "fa-book-bookmark"
    ],
    [
        "kategori"    => "Libur",
        "judul"       => "Masa Libur Akhir Tahun Ajaran",
        "tanggal"     => "13 Jun 2026 - 12 Jul 2026",
        "deskripsi"   => "Libur semester sekaligus persiapan awal tahun ajaran baru.",
        "badge_class" => "badge-rose",
        "icon"        => "fa-umbrella-beach"
    ]
];
?>

<div class="kalender-container">
    
    <!-- HEADER SECTION -->
    <div class="kalender-header-box">
        <div class="header-icon">
            <i class="fa-solid fa-calendar-check"></i>
        </div>
        <div>
            <h3>Agenda Kalender Akademik</h3>
            <p>Jadwal kegiatan akademik, evaluasi pembelajaran, dan agenda libur semester.</p>
        </div>
    </div>

    <!-- DAFTAR AGENDA -->
    <div class="kalender-grid">
        <?php foreach ($kalender_data as $item) : ?>
            <div class="kalender-card">
                <div class="card-top">
                    <span class="category-badge <?= $item['badge_class']; ?>">
                        <i class="fa-solid <?= $item['icon']; ?>"></i>
                        <?= $item['kategori']; ?>
                    </span>
                    <!-- Fitur pita/periode telah dihapus dari sini -->
                </div>

                <h4 class="event-title"><?= $item['judul']; ?></h4>

                <div class="event-date">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span><?= $item['tanggal']; ?></span>
                </div>

                <p class="event-desc"><?= $item['deskripsi']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</div>