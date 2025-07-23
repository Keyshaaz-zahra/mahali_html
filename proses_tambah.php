<?php
include 'config.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $harga * $jumlah;

mysqli_query($conn, "INSERT INTO transaksi (nama_barang, harga, jumlah, total) VALUES ('$nama', '$harga', '$jumlah', '$total')");
header("Location: dashboard.php");
?>
