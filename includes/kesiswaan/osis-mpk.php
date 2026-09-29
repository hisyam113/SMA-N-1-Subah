<?php
// Data Pengurus Inti OSIS (Tanpa Gambar)
$pengurus_inti = [
    [
        "jabatan" => "Ketua OSIS",
        "nama"    => "Galang Ciko Gifari",
        "kelas"   => "XI MIPA 1",
        "motto"   => "Memimpin dengan aksi, menginspirasi dengan prestasi."
    ],
    [
        "jabatan" => "Wakil Ketua OSIS",
        "nama"    => "Laila Anastasya",
        "kelas"   => "XI IPS 2",
        "motto"   => "Kolaborasi aktif demi terciptanya OSIS yang inklusif."
    ],
    [
        "jabatan" => "Sekretaris I",
        "nama"    => "Anggun Sekar Pratiwi",
        "kelas"   => "XI MIPA 3",
        "motto"   => "Tertib administrasi untuk efisiensi organisasi."
    ],
    [
        "jabatan" => "Bendahara I",
        "nama"    => "Nadin Sylla Janeeta",
        "kelas"   => "XI MIPA 2",
        "motto"   => "Transparan, akuntabel, dan bertanggung jawab."
    ]
];

// Data Seksi Bidang (Sekbid)
$sekbid_list = [
    ["nomor" => "01", "nama" => "Keimanan & Ketakwaan kepada Tuhan YME", "icon" => "fa-mosque"],
    ["nomor" => "02", "nama" => "Budi Pekerti Luhur & Akhlak Mulia", "icon" => "fa-hands-holding-child"],
    ["nomor" => "03", "nama" => "Kepribadian Unggul, Wawasan Kebangsaan, & Bela Negara", "icon" => "fa-flag"],
    ["nomor" => "04", "nama" => "Prestasi Akademik, Seni, & Olahraga ", "icon" => "fa-trophy"],
    ["nomor" => "05", "nama" => "Demokrasi, Hak Asasi Manusia, Pendidikan Politik, Lingkungan Hidup, Kepekaan & Toleransi Sosial", "icon" => "fa-check-to-slot"],
    ["nomor" => "06", "nama" => "Kreativitas, Keterampilan, & Kewirausahaan", "icon" => "fa-lightbulb"],
    ["nomor" => "07", "nama" => "Kualitas Jasmani, Kesehatan, & Gizi", "icon" => "fa-heart-pulse"],
    ["nomor" => "08", "nama" => "Sastra & Budaya", "icon" => "fa-masks-theater"],
    ["nomor" => "09", "nama" => "Teknologi Informasi & Komunikasi (TIK)", "icon" => "fa-laptop-code"],
    ["nomor" => "10", "nama" => "Komunikasi dalam Bahasa Inggris", "icon" => "fa-language"]
];

// Program Kerja Unggulan
$proker_list = [
    ["judul" => "MPLS (Masa Pengenalan Lingkungan Sekolah)", "deskripsi" => "Kegiatan menyambut siswa baru dengan edukasi budaya sekolah dan pengembangan karakter."],
    ["judul" => "Classmeeting & Turnamen Olahraga", "deskripsi" => "Kompetisi antar-kelas pasca evaluasi semester untuk mempererat persaudaraan antar-siswa."],
    ["judul" => "Pentas Seni & Bulan Bahasa", "deskripsi" => "Ajang apresiasi kreativitas siswa dalam bidang seni pertunjukan, sastra, dan kebudayaan."],
    ["judul" => "Bakti Sosial & Kepedulian Lingkungan", "deskripsi" => "Aksi nyata penggalangan bantuan dan gerakan kebersihan lingkungan hidup di sekitar sekolah."]
];
?>

<div class="osis-container">

    <!-- HERO SECTION -->
    <div class="osis-hero">
        <div class="osis-hero-content">
            <span class="osis-badge"><i class="fa-solid fa-users"></i> KESISWAAN</span>
            <h2>OSIS SMAN 1 Subah</h2>
            <p>Organisasi Siswa Intra Sekolah sebagai wadah aspirasi, kepemimpinan, dan pengembangan potensi siswa yang berkarakter, kreatif, serta berprestasi.</p>
        </div>
    </div>

    <!-- VISI & MISI -->
    <div class="osis-vision-mission">
        <div class="vm-card vision-card">
            <div class="vm-header">
                <i class="fa-solid fa-eye"></i>
                <h3>Visi OSIS</h3>
            </div>
            <p>Mewujudkan OSIS SMA Negeri 1 Subah sebagai wadah pembentukan generasi muda yang bertaqwa, berintegritas, kreatif, berprestasi, dan berwawasan lingkungan.</p>
        </div>

        <div class="vm-card mission-card">
            <div class="vm-header">
                <i class="fa-solid fa-bullseye"></i>
                <h3>Misi OSIS</h3>
            </div>
            <ul>
                <li><i class="fa-solid fa-check"></i> Meningkatkan ketaqwaan kepada Tuhan YME melalui kegiatan keagamaan rutin.</li>
                <li><i class="fa-solid fa-check"></i> Menumbuhkan rasa kekeluargaan dan kedisiplinan antar seluruh warga sekolah.</li>
                <li><i class="fa-solid fa-check"></i> Memfasilitasi bakat siswa di bidang akademik maupun non-akademik.</li>
                <li><i class="fa-solid fa-check"></i> Mengembangkan inovasi program berbasis teknologi dan wawasan lingkungan.</li>
            </ul>
        </div>
    </div>

    <!-- PENGURUS INTI -->
    <div class="osis-section">
        <div class="osis-section-header">
            <i class="fa-solid fa-user-tie"></i>
            <div>
                <h3>Pengurus Inti OSIS</h3>
                <p>Jajaran pimpinan OSIS SMA Negeri 1 Subah Periode 2025/2026</p>
            </div>
        </div>

        <div class="inti-grid">
            <?php foreach ($pengurus_inti as $inti) : ?>
                <div class="inti-card">
                    <div class="inti-info">
                        <span class="jabatan-badge-static"><?= $inti['jabatan']; ?></span>
                        <h4><?= $inti['nama']; ?></h4>
                        <p class="motto-text">"<?= $inti['motto']; ?>"</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<!-- SEKSI BIDANG (SEKBID) - Tanpa Icon -->
    <div class="osis-section">
        <div class="osis-section-header">
            <i class="fa-solid fa-layer-group"></i>
            <div>
                <h3>Seksi Bidang (Sekbid)</h3>
                <p>Divisi kerja operasional dalam menjalankan berbagai program kepemudaan</p>
            </div>
        </div>

        <div class="sekbid-grid">
            <?php foreach ($sekbid_list as $sekbid) : ?>
                <div class="sekbid-card">
                    <div class="sekbid-top">
                        <span class="sekbid-num">SEKBID <?= $sekbid['nomor']; ?></span>
                    </div>
                    <h4><?= $sekbid['nama']; ?></h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- PROGRAM KERJA UNGGULAN -->
    <div class="osis-section">
        <div class="osis-section-header">
            <i class="fa-solid fa-calendar-check"></i>
            <div>
                <h3>Program Kerja Unggulan</h3>
                <p>Agenda tahunan utama yang diselenggarakan oleh OSIS SMAN 1 Subah</p>
            </div>
        </div>

        <div class="proker-grid">
            <?php foreach ($proker_list as $proker) : ?>
                <div class="proker-card">
                    <div class="proker-icon-box">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="proker-text">
                        <h4><?= $proker['judul']; ?></h4>
                        <p><?= $proker['deskripsi']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<div class="mpk-container">

    <!-- HERO SECTION -->
    <div class="mpk-hero">
        <div class="mpk-hero-content">
            <span class="mpk-badge"><i class="fa-solid fa-scale-balanced"></i> LEGISLATIF SISWA</span>
            <h2>MPK SMAN 1 Subah</h2>
            <p>Majelis Perwakilan Kelas sebagai badan legislatif yang bertugas mengawasi kinerja OSIS dan menampung aspirasi siswa.</p>
        </div>
    </div>

    <!-- TUGAS UTAMA -->
    <div class="mpk-section">
        <div class="mpk-section-header">
            <i class="fa-solid fa-gavel"></i>
            <div>
                <h3>Tugas & Wewenang MPK</h3>
                <p>Fungsi pengawasan dan legislasi di lingkungan sekolah</p>
            </div>
        </div>

        <div class="mpk-card-simple">
            <ul>
                <li><i class="fa-solid fa-check"></i> Mengawasi pelaksanaan program kerja OSIS agar sesuai dengan ketentuan yang berlaku.</li>
                <li><i class="fa-solid fa-check"></i> Menampung dan menyalurkan aspirasi dari perwakilan kelas kepada pihak sekolah.</li>
                <li><i class="fa-solid fa-check"></i> Mengevaluasi laporan pertanggungjawaban (LPJ) pengurus OSIS di akhir masa jabatan.</li>
                <li><i class="fa-solid fa-check"></i> Berperan aktif dalam mengawal jalannya pemilihan pengurus OSIS yang transparan.</li>
            </ul>
        </div>
    </div>

</div>