<?php
// Data Berita (Diperbarui dengan ID dan Konten Lengkap)
$daftar_berita = [
    [
        "id"          => "pta-2026-sman-1-subah",
        "judul"       => "PTA 2026 SMAN 1 Subah Resmi Kukuhkan 270 Penegak Baru dengan Tema ELORIA",
        "kategori"    => "Berita",
        "tanggal"     => "11 September 2026",
        "ringkasan"   => "SUBAH – Dewan Ambalan SMA Negeri 1 Subah menyelenggarakan Perkemahan Penerimaan Tamu Ambalan (PTA) bagi 270 siswa kelas X pada 4–6 September 2026.",
        "isi_lengkap" => "<p>SUBAH – Dewan Ambalan SMA Negeri 1 Subah dengan bangga menyelenggarakan Perkemahan Penerimaan Tamu Ambalan (PTA) bagi 270 siswa kelas X pada tanggal 4–6 September 2026.</p><p>Kegiatan ini mengusung tema <strong>ELORIA</strong> yang bertujuan untuk membentuk karakter disiplin, mandiri, serta jiwa kepemimpinan di lingkungan Pramuka Penegak...</p>",
        "gambar"      => "assets/images/berita/pta.png"
    ],
    [
        "id"          => "realisasi-dana-bosp-2026",
        "judul"       => "REALISASI REKAPITULASI PENGGUNAAN DANA BOSP TAHUN 2026",
        "kategori"    => "Berita",
        "tanggal"     => "08 September 2026",
        "ringkasan"   => "Periode Tanggal 01 Januari s/d 30 Juni 2026. Tahap 1 Tahun 2026.",
        "isi_lengkap" => "<p>Berikut adalah transparansi realisasi rekapitulasi penggunaan Dana Bantuan Operasional Satuan Pendidikan (BOSP) SMAN 1 Subah untuk Periode Tanggal 01 Januari s/d 30 Juni 2026 (Tahap 1 Tahun 2026)...</p>",
        "gambar"      => "assets/images/berita/dana.jpg"
    ],
    [
        "id"          => "pasangan-1-terpilih-ketua-osis",
        "judul"       => "Pasangan Nomor 1 Terpilih sebagai Ketua dan Wakil Ketua OSIS SMA Negeri 1 Subah",
        "kategori"    => "Kesiswaan",
        "tanggal"     => "01 September 2026",
        "ringkasan"   => "Pemilihan Ketua dan Wakil Ketua OSIS SMA Negeri 1 Subah berlangsung dengan tertib dan demokratis. Sebanyak tiga pasangan calon mengikuti rangkaian pemilihan...",
        "isi_lengkap" => "<p>Pemilihan Ketua dan Wakil Ketua OSIS SMA Negeri 1 Subah periode ini berlangsung dengan sangat tertib, transparan, dan demokratis. Sebanyak tiga pasangan calon bersaing ketat...</p>",
        "gambar"      => "assets/images/berita/pilketos.jpg"
    ],
    [
        "id"          => "atlet-taekwondo",
        "judul"       => "LANGGANAN JUARA ! JAVIER RIZQIKA HIMAWANG, ATLET TAEKWONDO SMA NEGERI 1 SUBAH RAIH JUARA 2 POPDA JATENG 2026",
        "kategori"    => "Kesiswaan",
        "tanggal"     => "21 September 2026",
        "ringkasan"   => "SUBAH — Siswa SMA Negeri 1 Subah, Javier Rizqika Himawang (XII IPA 2), kembali menorehkan prestasi membanggakan dengan meraih Juara 2 Popda...",
        "isi_lengkap" => "<p>Pemilihan Ketua dan Wakil Ketua OSIS SMA Negeri 1 Subah periode ini berlangsung dengan sangat tertib, transparan, dan demokratis. Sebanyak tiga pasangan calon bersaing ketat...</p>",
        "gambar"      => "assets/images/berita/taekwondo.jpg"
    ],
    [
        "id"          => "tim-basket-sman-1-subah",
        "judul"       => "Junjung Sportivitas : Tim Basket SMAN 1 Subah Raih Juara 3 Dalam Liga Basket Bahurekso Bank Jateng Region Batang",
        "kategori"    => "Kesiswaan",
        "tanggal"     => "23 September 2026",
        "ringkasan"   => "Tim basket putra dan putri SMA Negeri 1 Subah berhasil meraih Juara 3 pada ajang Bank Jateng Liga Basket Bahurekso Region Batang yang berlangsung 3–6...",
        "isi_lengkap" => "<p>Pemilihan Ketua dan Wakil Ketua OSIS SMA Negeri 1 Subah periode ini berlangsung dengan sangat tertib, transparan, dan demokratis. Sebanyak tiga pasangan calon bersaing ketat...</p>",
        "gambar"      => "assets/images/berita/basket.jpg"
    ]
];
?>

<!-- Di dalam looping card berita -->
<section class="news-grid">
    <?php foreach ($daftar_berita as $berita) : ?>
        <article class="news-card">
            <div class="card-image">
                <img src="<?= $berita['gambar']; ?>" alt="<?= $berita['judul']; ?>" loading="lazy">
                <span class="badge-category"><?= $berita['kategori']; ?></span>
            </div>
            <div class="card-body">
                <span class="news-date"><i class="fa-regular fa-calendar"></i> <?= $berita['tanggal']; ?></span>
                <h4 class="card-title"><?= $berita['judul']; ?></h4>
                <p class="card-desc"><?= $berita['ringkasan']; ?></p>
                <!-- Ubah href ke halaman detail dengan membawa parameter id -->
                <a href="detail-berita.php?id=<?= $berita['id']; ?>" class="card-link">
                    Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </article>
    <?php endforeach; ?>
</section>
