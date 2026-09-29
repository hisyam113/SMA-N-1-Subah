<nav class="navbar">
    <div class="container nav-container">
        <!-- Logo & Nama Sekolah -->
        <a href="index.php" class="brand">
            <img src="assets/images/logo.png" alt="Logo SMAN 1 Subah" class="brand-logo">
            <div class="brand-text">
                <span class="brand-title">SMA NEGERI 1 SUBAH</span>
                <span class="brand-sub">Kabupaten Batang</span>
            </div>
        </a>

        <!-- Button Toggle untuk Mobile -->
        <button class="nav-toggle" id="navToggle" aria-label="Toggle Navigation">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Menu Navigasi -->
        <ul class="nav-menu" id="navMenu">
            <li><a href="index.php" class="<?= ($activePage ?? '') == 'home' ? 'active' : '' ?>">Beranda</a></li>

            <!-- 1. Profil Sekolah -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle <?= ($activePage ?? '') == 'profil' ? 'active' : '' ?>">
                    Profil Sekolah <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="profil.php?page=sejarah">Sejarah</a></li>
                    <li><a href="profil.php?page=visi-misi">Visi & Misi</a></li>
                    <li><a href="profil.php?page=struktur">Struktur Organisasi</a></li>
                    <li><a href="profil.php?page=guru">Guru & Tenaga Kependidikan</a></li>
                    <li><a href="profil.php?page=fasilitas">Fasilitas</a></li>
                    <li><a href="profil.php?page=akreditasi-prestasi">Akreditasi dan Prestasi</a></li>
                </ul>
            </li>

            <!-- 2. Akademik -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle <?= ($activePage ?? '') == 'akademik' ? 'active' : '' ?>">
                    Akademik <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="akademik.php?page=kurikulum">Kurikulum</a></li>
                    <li><a href="akademik.php?page=kalender">Kalender Akademik</a></li>
                    <li><a href="akademik.php?page=ekstrakurikuler">Ekstrakurikuler</a></li>
                    <li><a href="akademik.php?page=jadwal">Jadwal Pelajaran</a></li>
                </ul>
            </li>

            <!-- 3. Kesiswaan -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle <?= ($activePage ?? '') == 'kesiswaan' ? 'active' : '' ?>">
                    Kesiswaan <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="kesiswaan.php?page=osis-mpk">OSIS & MPK</a></li>
                    <li><a href="kesiswaan.php?page=galeri">Galeri Kegiatan</a></li>
                    <li><a href="kesiswaan.php?page=karya-prestasi">Karya & Prestasi Siswa</a></li>
                </ul>
            </li>

            <!-- 4. Informasi & Berita -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle <?= ($activePage ?? '') == 'informasi' ? 'active' : '' ?>">
                    Informasi & Berita <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="berita.php?cat=pengumuman">Pengumuman</a></li>
                    <li><a href="berita.php?cat=informasi">Berita</a></li>
                    <li><a href="berita.php?cat=agenda">Agenda</a></li>
                </ul>
            </li>

            <li><a href="kontak.php" class="btn-contact <?= ($activePage ?? '') == 'kontak' ? 'active' : '' ?>">Kontak</a></li>
        </ul>
    </div>
</nav>