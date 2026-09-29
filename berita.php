<?php 
$pageTitle = "Informasi & Berita - SMA Negeri 1 Subah";
$activePage = 'informasi';

include_once 'includes/header.php';
include_once 'includes/navbar.php';

// Ambil parameter ?page= dari URL
$page = $_GET['page'] ?? $_GET['cat'] ?? 'informasi';
?>

<!-- Load CSS Khusus Profil -->
<link rel="stylesheet" href="assets/css/informasi.css?v=<?= filemtime('assets/css/informasi.css'); ?>">

<main class="section">
    <div class="container">
        <?php 
        // Logika Pemanggilan Komponen Dinamis
        switch ($page) {
            case 'pengumuman':
                include_once 'includes/berita/pengumuman.php';
                break;
            case 'informasi':
                include_once 'includes/berita/informasi.php';
                break;
            case 'agenda':
                include_once 'includes/berita/agenda.php';
                break;
            default:
                // Tampilkan semua komponen jika halaman utama profil dibuka
                include_once 'includes/berita/pengumuman.php';
                include_once 'includes/berita/informasi.php';
                include_once 'includes/berita/agenda.php';
                break;
        }
        ?>
    </div>
</main>

<?php include_once 'includes/footer.php'; ?>