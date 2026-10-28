<?php
// =======
// HALAMAN TENTANG TOKO
// =======
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/fungsi.php';

// Menyiapkan variabel untuk ditangkap oleh header.php
$judulHalaman = "Tentang Kami";
$halamanAktif = "tentang.php"; // Ini membuat menu "Tentang Kami" berwarna biru saat aktif

// Array daftar layanan toko (sesuai tantangan)
$layanan = [
    "Konsultasi rakit PC gaming dan workstation gratis",
    "Servis dan maintenance laptop/PC (pembersihan, ganti thermal paste)",
    "Garansi resmi untuk semua pembelian unit baru",
    "Tukar tambah (Trade-in) perangkat elektronik lama",
    "Pengiriman instan area Denpasar dan sekitarnya"
];

// Memanggil header
require __DIR__ . '/includes/header.php';
?>

<h1 class="text-3xl font-bold mb-6">Tentang Kami</h1>

<div class="bg-white rounded-xl shadow p-6 max-w-2xl">
    <h2 class="text-2xl font-semibold mb-4 text-blue-700"><?= $namaToko ?></h2>
    <p class="text-slate-600 mb-6 leading-relaxed">
        <strong><?= $namaToko ?></strong> adalah pusat perbelanjaan elektronik terpercaya yang berfokus pada penyediaan perangkat IT dan teknologi modern. Kami menyediakan berbagai macam kebutuhan mulai dari laptop unggulan, komponen merakit PC tingkat tinggi, periferal gaming, hingga perlengkapan fotografi dari brand ternama. 
    </p>

    <!-- Informasi Toko -->
    <div class="mb-6">
        <h3 class="font-bold text-lg mb-3 border-b pb-2">Informasi Toko</h3>
        <ul class="text-slate-600 space-y-2">
            <li><strong>📍 Alamat:</strong> Jl. Teknologi No. 99, Denpasar, Bali</li>
            <li><strong>⏰ Jam Buka:</strong> Senin - Sabtu (09.00 - 21.00 WITA)</li>
            <li><strong>📞 Kontak:</strong> 0812-3456-7890</li>
        </ul>
    </div>

    <!-- Daftar Layanan dari Array -->
    <div>
        <h3 class="font-bold text-lg mb-3 border-b pb-2">Layanan Kami</h3>
        <ul class="list-disc list-inside text-slate-600 space-y-2">
            <?php foreach ($layanan as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php 
// Memanggil footer
require __DIR__ . '/includes/footer.php'; 
?>