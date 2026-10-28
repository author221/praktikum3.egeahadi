<?php
// =======
// DATA TOKO ELEKTRONIK (sementara disimpan di array)
// Pada Pertemuan 7, data ini akan dipindah ke database MySQL.
// =======
$namaToko = "Egitra Store";

// Array multidimensi: kode produk => data produk (array asosiatif)
$produk = [
    "P001" => [
        "nama"     => "Laptop ASUS Vivobook 14X",
        "kategori" => "Laptop",
        "harga"    => 8500000,
        "diskon"   => 5,
        "stok"     => 10,
        "ikon"     => "💻",
    ],
    "P002" => [
        "nama"     => "Processor AMD Ryzen 5 5600X",
        "kategori" => "Komponen Komputer",
        "harga"    => 2500000,
        "diskon"   => 0,
        "stok"     => 3,
        "ikon"     => "⚙️",
    ],
    "P003" => [
        "nama"     => "VGA RTX 3060 12GB",
        "kategori" => "Komponen Komputer",
        "harga"    => 5200000,
        "diskon"   => 10,
        "stok"     => 15,
        "ikon"     => "🕹️",
    ],
    "P004" => [
        "nama"     => "Mouse Gaming Logitech G102",
        "kategori" => "Periferal",
        "harga"    => 250000,
        "diskon"   => 15,
        "stok"     => 0,
        "ikon"     => "🖱️",
    ],
    "P005" => [
        "nama"     => "Keyboard Mekanikal Keychron K2",
        "kategori" => "Periferal",
        "harga"    => 1300000,
        "diskon"   => 0,
        "stok"     => 8,
        "ikon"     => "⌨️",
    ],
    "P006" => [
        "nama"     => "Kamera Mirrorless Sony A6400",
        "kategori" => "Kamera",
        "harga"    => 12500000,
        "diskon"   => 12,
        "stok"     => 4,
        "ikon"     => "📷",
    ],
    // --- Tambahan 6 Produk Baru di Bawah Ini ---
    "P007" => [
        "nama"     => "Monitor LG UltraGear 24 Inch",
        "kategori" => "Periferal",
        "harga"    => 2800000,
        "diskon"   => 5,
        "stok"     => 12,
        "ikon"     => "🖥️",
    ],
    "P008" => [
        "nama"     => "RAM Corsair Vengeance 16GB",
        "kategori" => "Komponen Komputer",
        "harga"    => 850000,
        "diskon"   => 0,
        "stok"     => 20,
        "ikon"     => "⚡",
    ],
    "P009" => [
        "nama"     => "SSD NVMe Samsung 1TB",
        "kategori" => "Komponen Komputer",
        "harga"    => 1500000,
        "diskon"   => 10,
        "stok"     => 8,
        "ikon"     => "💽",
    ],
    "P010" => [
        "nama"     => "Headset Gaming Razer Kraken",
        "kategori" => "Periferal",
        "harga"    => 950000,
        "diskon"   => 20,
        "stok"     => 0,
        "ikon"     => "🎧",
    ],
    "P011" => [
        "nama"     => "Lensa Sony E 50mm f/1.8",
        "kategori" => "Kamera",
        "harga"    => 3800000,
        "diskon"   => 0,
        "stok"     => 3,
        "ikon"     => "📸",
    ],
    "P012" => [
        "nama"     => "Laptop Lenovo Legion 5",
        "kategori" => "Laptop",
        "harga"    => 18500000,
        "diskon"   => 8,
        "stok"     => 5,
        "ikon"     => "💻",
    ],
];

// Contoh pesanan pelanggan: kode produk => jumlah yang dibeli
$pesanan = [
    "P001" => 1,
    "P004" => 2,
    "P006" => 1,
    "P009" => 1, // Memasukkan produk baru ke dalam contoh pesanan
];