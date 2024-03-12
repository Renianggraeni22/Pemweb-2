<?php
//tangkap input form
$custemer = $_POST["custemer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

// array harga produk
$harga = [
    'Tv' => 4200000,
    'Kulkas' => 3100000,
    'Mesin cucu' =>3800000,
];

//hitung total harga (jumlah * harga produk)
$total = $jumlah * $harga[$produk];


//format rupiah
$total = number_format($total);

echo "Nama Customer: $custemer";
echo "<br> produk: $produk";
echo "<br> jumlah beli: $jumlah";
echo "<br> Total belanja: Rp $total";