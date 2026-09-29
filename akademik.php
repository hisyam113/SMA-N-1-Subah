<?php 
$pageTitle = "Akademik - SMA Negeri 1 Subah";
$activePage = 'akademik';

include_once 'includes/header.php';
include_once 'includes/navbar.php';

// Ambil parameter ?page= dari URL
$page = $_GET['page'] ?? 'semua';
?>

<!-- Load CSS Khusus Akademik -->
<link rel="stylesheet" href="assets/css/akademik.css?v=<?= filemtime('assets/css/akademik.css'); ?>">

<main class="section">
    <div class="container">
        <?php 
        // Logika Pemanggilan Komponen Dinamis
        switch ($page) {
            case 'ekstrakurikuler':
                include_once 'includes/akademik/ekstra.php';
                break;
            case 'jadwal':
                include_once 'includes/akademik/jadwalpelajaran.php';
                break;
            case 'kalender':
                include_once 'includes/akademik/kalender.php';
                break;
            case 'kurikulum':
                include_once 'includes/akademik/kurikulum.php';
                break;
            default:
                // Tampilkan semua komponen jika halaman utama akademik dibuka
                include_once 'includes/akademik/kurikulum.php';
                include_once 'includes/akademik/kalender.php';
                include_once 'includes/akademik/ekstra.php';
                include_once 'includes/akademik/jadwalpelajaran.php';
                break;
        }
        ?>
    </div>
</main>

<?php include_once 'includes/footer.php'; ?>