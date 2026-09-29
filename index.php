<?php 
$pageTitle = "Beranda - SMA Negeri 1 Subah";
$activePage = 'home';
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<!-- 1. Banner / Slider Kegiatan Terbaru -->
<section class="hero-section">
    <div class="hero-slider">
        <!-- Slide 1 -->
        <div class="slide active" style="background-image: url('assets/images/hero1.jpg'); background-size: cover; background-position: center;">
            <div class="hero-overlay"></div>
            <div class="container hero-container">
                <div class="slide-content">
                    <h2>PTA 2026 SMAN 1 Subah</h2>
                    <p>Pengukuhan 270 Penegak Baru Ambalan SMAN 1 Subah dengan Tema "ELORIA - Every Light Opens Remarkable Inspiring Adventures".</p>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('assets/images/berita/basket.jpg'); background-size: cover; background-position: center;">
            <div class="hero-overlay"></div>
            <div class="container hero-container">
                <div class="slide-content">
                    <h2>Tim Basket SMAN 1 Subah Raih Juara 3</h2>
                    <p>SMA Negeri 1 Subah kembali menunjukkan semangat dan potensi siswa dalam bidang olahraga.</p>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('assets/images/berita/taekwondo.jpg'); background-size: cover; background-position: center;">
            <div class="hero-overlay"></div>
            <div class="container hero-container">
                <div class="slide-content">
                    <h2>ATLET TAEKWONDO SMA NEGERI 1 SUBAH RAIH JUARA 2 POPDA JATENG 2026</h2>
                    <p>Prestasi tersebut semakin menegaskan konsistensi Javier dalam mengembangkan bakat dan prestasinya di bidang Taekwondo.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Navigasi Slider -->
    <button class="slider-btn prev"><i class="fa-solid fa-chevron-left"></i></button>
    <button class="slider-btn next"><i class="fa-solid fa-chevron-right"></i></button>
</section>

<!-- 2. Sambutan Kepala Sekolah -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Sambutan Kepala Sekolah</h2>
        <div class="kepsek-container">
            <img src="assets/images/kepsek.jpg" alt="Foto Kepala Sekolah" class="kepsek-img">
            <div class="kepsek-text">
                <h3>Wisnu Ardlian Sugiyarto, S.Pd., M.Pd.</h3>
                <p class="role" style="color: var(--accent-color); font-weight: 600; margin-bottom: 1rem;">Kepala Sekolah SMA Negeri 1 Subah</p>
                <p>"Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di website resmi SMA Negeri 1 Subah. Di era digital ini, kami berkomitmen memanfaatkan teknologi untuk mendukung proses belajar yang inovatif, aman, dan berkarakter demi mencetak generasi berprestasi. Mari bersama-sama mengukir prestasi demi masa depan bangsa yang gemilang."</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. Informasi Statistik (Jumlah Guru & Siswa SMAN 1 Subah) -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <i class="fa-solid fa-user-graduate"></i>
                <div class="stat-number">842+</div>
                <div class="stat-label">Peserta Didik</div>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-chalkboard-user"></i>
                <div class="stat-number">58</div>
                <div class="stat-label">Guru Profesional</div>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-layer-group"></i>
                <div class="stat-number">24</div>
                <div class="stat-label">Rombongan Belajar</div>
            </div>
            <div class="stat-item">
                <i class="fa-solid fa-trophy"></i>
                <div class="stat-number">A</div>
                <div class="stat-label">Akreditasi Sekolah</div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Keunggulan / Profil Singkat Sekolah -->
<section class="section" style="background-color: var(--white);">
    <div class="container">
        <h2 class="section-title">Keunggulan Sekolah</h2>
        <div class="grid-3">
            <div class="card">
                <i class="fa-solid fa-laptop-code fa-2x" style="color: var(--primary-color); margin-bottom: 1rem;"></i>
                <h3 class="card-title">Literasi Digital & STEM</h3>
                <p>Penguatan kemampuan teknologi digital produktif dan pendampingan klub sains modern bagi seluruh peserta didik.</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-award fa-2x" style="color: var(--primary-color); margin-bottom: 1rem;"></i>
                <h3 class="card-title">Prestasi Unggulan</h3>
                <p>Capaian prestasi regional hingga tingkat provinsi dalam bidang olahraga, seni, dan karya ilmiah.</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-hands-holding-child fa-2x" style="color: var(--primary-color); margin-bottom: 1rem;"></i>
                <h3 class="card-title">Pendidikan Karakter</h3>
                <p>Penerapan pembiasaan positif, pembinaan kepemimpinan OSIS/MPK, serta penguatan profil pelajar Pancasila.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. Pengumuman dan Berita Terkini -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Pengumuman & Berita Terkini</h2>
        <div class="grid-3">
            <!-- Berita 1 -->
            <div class="card news-card">
                <div class="news-img-wrapper">
                    <img src="assets/images/berita/pta.png" alt="PTA 2026 SMAN 1 Subah" loading="lazy">
                    <span class="badge">Berita</span>
                </div>
                <div class="news-content">
                    <h4 class="card-title">PTA 2026 Resmikan 270 Penegak Baru</h4>
                    <p>Kegiatan perkemahan penerimaan tamu ambalan berjalan dengan lancar dan penuh semangat kemandirian.</p>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="card news-card">
                <div class="news-img-wrapper">
                    <img src="assets/images/berita/pilketos.jpg" alt="Pemilihan OSIS" loading="lazy">
                    <span class="badge">Kesiswaan</span>
                </div>
                <div class="news-content">
                    <h4 class="card-title">Terpilihnya Ketua & Wakil Ketua OSIS</h4>
                    <p>Pasangan Nomor 1 berhasil mengantongi suara terbanyak pada pesta demokrasi pemilihan OSIS tahun ini.</p>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="card news-card">
                <div class="news-img-wrapper">
                    <img src="assets/images/berita/dana.jpg" alt="Dana BOSP" loading="lazy">
                    <span class="badge">Berita</span>
                </div>
                <div class="news-content">
                    <h4 class="card-title">Realisasi Rekapitulasi Dana BOSP</h4>
                    <p>Laporan transparan rekapitulasi penggunaan dana BOSP Tahap 1 Tahun 2026 telah dipublikasikan.</p>
                </div>
            </div>

            <!-- Berita 4 -->
            <div class="card news-card">
                <div class="news-img-wrapper">
                    <img src="assets/images/berita/taekwondo.jpg" alt="Atlet Taekwondo" loading="lazy">
                    <span class="badge">Kesiswaan</span>
                </div>
                <div class="news-content">
                    <h4 class="card-title">ATLET TAEKWONDO SMA NEGERI 1 SUBAH RAIH JUARA 2 POPDA JATENG 2026</h4>
                    <p>Prestasi tersebut semakin menegaskan konsistensi Javier dalam mengembangkan bakat dan prestasinya di bidang Taekwondo.</p>
                </div>
            </div>

            <!-- Berita 5 -->
            <div class="card news-card">
                <div class="news-img-wrapper">
                    <img src="assets/images/berita/basket.jpg" alt="Tim Basket" loading="lazy">
                    <span class="badge">Kesiswaan</span>
                </div>
                <div class="news-content">
                    <h4 class="card-title">Tim Basket SMAN 1 Subah Raih Juara 3</h4>
                    <p>SMA Negeri 1 Subah kembali menunjukkan semangat dan potensi siswa dalam bidang olahraga.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Galeri Kegiatan Sekolah -->
<section class="section" style="background-color: var(--white);">
    <div class="container">
        <h2 class="section-title">Galeri Kegiatan SMAN 1 Subah</h2>
        <div class="gallery-grid">
            <div class="gallery-card">
                <img src="assets/images/galeri/classmeet.jpeg" alt="Kegiatan PTA SMAN 1 Subah" loading="lazy">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h5>Classmeeting</h5>
                    </div>
                </div>
            </div>
            <div class="gallery-card">
                <img src="assets/images/galeri/pesantren.jpeg" alt="Pembelajaran Sekolah" loading="lazy">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h5>Pesantren Ramadhan</h5>
                    </div>
                </div>
            </div>
            <div class="gallery-card">
                <img src="assets/images/galeri/hut.jpeg" alt="Ekstrakurikuler" loading="lazy">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h5>HUT SMABAH ke 40</h5>
                    </div>
                </div>
            </div>
            <div class="gallery-card">
                <img src="assets/images/galeri/mpls.jpeg" alt="Ekstrakurikuler" loading="lazy">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h5>MPLS 2025</h5>
                    </div>
                </div>
            </div>
            <div class="gallery-card">
                <img src="assets/images/galeri/jurassic.jpeg" alt="Ekstrakurikuler" loading="lazy">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h5>JURASSIC (Jumput Semangat, Raih Asa, Siap Satukan Ide dan Cita)</h5>
                    </div>
                </div>
            </div>
            <div class="gallery-card">
                <img src="assets/images/galeri/maulid-nabi.jpeg" alt="Ekstrakurikuler" loading="lazy">
                <div class="gallery-overlay">
                    <div class="gallery-info">
                        <h5>Maulid Nabi</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'includes/footer.php'; ?>