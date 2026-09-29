<?php
// Data Pengumuman Sekolah
$daftar_pengumuman = [
    [
        "judul"     => "Pemilihan Ketua dan Wakil Ketua OSIS SMA Negeri 1 Subah Tahun 2026/2027",
        "kategori"  => "Pengumuman",
        "tanggal"   => "31 Aug 2026",
        "ringkasan" => "SMA Negeri 1 Subah akan melaksanakan Pemilihan Ketua dan Wakil Ketua OSIS Tahun Pelajaran 2026/2027 sebagai bagian dari pembelajaran demokrasi dan pengembangan kepemimpinan siswa."
    ],
    [
        "judul"     => "Informasi Awal Tahun Ajaran 2026/2027",
        "kategori"  => "Pengumuman",
        "tanggal"   => "02 Jun 2026",
        "ringkasan" => "Informasi persiapan kegiatan sekolah menjelang dimulainya tahun ajaran baru."
    ],
    [
        "judul"     => "Jadwal Daftar Ulang Peserta Didik",
        "kategori"  => "Pengumuman",
        "tanggal"   => "01 Jun 2026",
        "ringkasan" => "Peserta didik dimohon memperhatikan jadwal dan kelengkapan administrasi daftar ulang."
    ],
    [
        "judul"     => "Persiapan MPLS Peserta Didik Baru",
        "kategori"  => "Pengumuman",
        "tanggal"   => "31 May 2026",
        "ringkasan" => "Rangkaian pengenalan lingkungan sekolah disiapkan untuk membantu peserta didik baru beradaptasi."
    ],
    [
        "judul"     => "Pendataan Ekstrakurikuler Semester Ganjil",
        "kategori"  => "Pengumuman",
        "tanggal"   => "30 May 2026",
        "ringkasan" => "Peserta didik dapat memilih kegiatan ekstrakurikuler sesuai minat dan bakat."
    ],
    [
        "judul"     => "Pembaruan Data Kontak Orang Tua atau Wali",
        "kategori"  => "Pengumuman",
        "tanggal"   => "29 May 2026",
        "ringkasan" => "Pastikan nomor telepon dan alamat orang tua atau wali tercatat dengan benar."
    ]
];
?>

<div class="pengumuman-container">

    <!-- HERO HEADER -->
    <div class="pengumuman-hero">
        <span class="hero-badge"><i class="fa-solid fa-bullhorn"></i> INFORMASI RESMI</span>
        <h2>Pengumuman Sekolah</h2>
        <p>Pemberitahuan resmi, edaran kepala sekolah, dan dokumen penting terkait kegiatan akademik serta kesiswaan SMAN 1 Subah.</p>
    </div>

    <!-- LIST PENGUMUMAN -->
    <section class="pengumuman-list">
        <?php foreach ($daftar_pengumuman as $item) : ?>
            <article class="pengumuman-card">
                
                <!-- Content Card -->
                <div class="card-content">
                    <div class="card-header-info">
                        <span class="badge-priority badge-<?= strtolower($item['kategori']); ?>">
                            <?= $item['kategori']; ?>
                        </span>
                    </div>

                    <h3 class="pengumuman-title"><?= $item['judul']; ?></h3>
                    
                    <!-- Tanggal di Bawah Judul -->
                    <div class="pengumuman-date">
                        <i class="fa-regular fa-calendar-days"></i> <?= $item['tanggal']; ?>
                    </div>

                    <p class="pengumuman-desc"><?= $item['ringkasan']; ?></p>
                </div>

            </article>
        <?php endforeach; ?>
    </section>

</div>