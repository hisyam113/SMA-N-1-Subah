<?php 
$pageTitle = "Profil Sekolah - SMA Negeri 1 Subah";
$activePage = 'profil';

include_once 'includes/header.php';
include_once 'includes/navbar.php';

// Ambil parameter ?page= dari URL
$page = $_GET['page'] ?? 'semua';
?>

<!-- Load CSS Khusus Profil -->
<link rel="stylesheet" href="assets/css/profil.css?v=<?= filemtime('assets/css/profil.css'); ?>">

<main class="section">
    <div class="container">
        <?php 
        // Logika Pemanggilan Komponen Dinamis
        switch ($page) {
            case 'sejarah':
                include_once 'includes/profil/sejarah.php';
                break;
            case 'visi-misi':
                include_once 'includes/profil/visi-misi.php';
                break;
            case 'fasilitas':
                include_once 'includes/profil/fasilitas.php';
                break;
            case 'akreditasi-prestasi':
                include_once 'includes/profil/akreditasi.php';
                break;
            case 'guru':
                include_once 'includes/profil/guru.php';
                break;
            case 'struktur':
                include_once 'includes/profil/struktur.php';
                break;
            default:
                // Tampilkan semua komponen jika halaman utama profil dibuka
                include_once 'includes/profil/sejarah.php';
                include_once 'includes/profil/visi-misi.php';
                include_once 'includes/profil/struktur.php';
                include_once 'includes/profil/guru.php';
                include_once 'includes/profil/fasilitas.php';
                include_once 'includes/profil/akreditasi.php';
                break;
        }
        ?>
    </div>
</main>

<?php include_once 'includes/footer.php'; ?>