<?php 
$pageTitle = "Kontak Kami - SMA Negeri 1 Subah";
$activePage = 'kontak';
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<section class="section">
    <div class="container">
        <h2 class="section-title">Hubungi Kami</h2>

        <div class="grid-3">
            <!-- Information -->
            <div class="card">
                <h3 class="card-title">Informasi Sekolah</h3>
                <p><i class="fa-solid fa-location-dot"></i> Jl. Raya Jatisari Subah, Subah, Kab. Batang, Jawa Tengah 51262</p>
                <p><i class="fa-solid fa-phone"></i> (0285) 666240</p>
                <p><i class="fa-solid fa-envelope"></i> info@sman1subah.sch.id</p>
                <p><i class="fa-brands fa-whatsapp"></i> +62 856-6624-0</p>
            </div>

            <!-- Form -->
            <div class="card" style="grid-column: span 2;">
                <h3 class="card-title">Kirim Pesan</h3>
                <form action="#" method="POST" onsubmit="alert('Pesan berhasil terkirim!'); return false;">
                    <div style="margin-bottom: 1rem;">
                        <input type="text" placeholder="Nama Lengkap" required style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-color); border-radius: 4px;">
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <input type="email" placeholder="Email Anda" required style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-color); border-radius: 4px;">
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <textarea rows="4" placeholder="Isi Pesan" required style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-color); border-radius: 4px;"></textarea>
                    </div>
                    <button type="submit" class="btn-contact" style="border: none; color: white; cursor: pointer;">Kirim Pesan</button>
                </form>
            </div>
        </div>

        <!-- Embed Google Map -->
        <div class="card" style="margin-top: 2rem;">
            <h3 class="card-title">Peta Lokasi</h3>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2799297798742!2d109.88639717399815!3d-6.976262093024482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e703e47c85db8eb%3A0x2a9df94b9eed8372!2sSMA%20Negeri%201%20Subah!5e0!3m2!1sid!2sid!4v1790061041903!5m2!1sid!2sid"
                width="100%" 
                height="350" 
                style="border:0; border-radius: 8px;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<?php include_once 'includes/footer.php'; ?>