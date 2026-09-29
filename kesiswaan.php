<?php 
$pageTitle = "Kesiswaan - SMA Negeri 1 Subah";
$activePage = 'kesiswaan';

include_once 'includes/header.php';
include_once 'includes/navbar.php';

// Ambil parameter ?page= dari URL
$page = $_GET['page'] ?? 'semua';
?>

<!-- Load CSS Khusus kesiswaan -->
<link rel="stylesheet" href="assets/css/kesiswaan.css?v=<?= filemtime('assets/css/kesiswaan.css'); ?>">

<main class="section">
    <div class="container">
        <?php 
        // Logika Pemanggilan Komponen Dinamis
        switch ($page) {
            case 'osis-mpk':
                include_once 'includes/kesiswaan/osis-mpk.php';
                break;
            case 'galeri':
                include_once 'includes/kesiswaan/galeri.php';
                break;
            case 'karya-prestasi':
                include_once 'includes/kesiswaan/karya-prestasi.php';
                break;
            default:
                // Tampilkan semua komponen jika halaman utama kesiswaan dibuka
                include_once 'includes/kesiswaan/osis-mpk.php';
                include_once 'includes/kesiswaan/galeri.php';
                include_once 'includes/kesiswaan/karya-prestasi.php';
                break;
        }
        ?>
    </div>
</main>

<?php include_once 'includes/footer.php'; ?>