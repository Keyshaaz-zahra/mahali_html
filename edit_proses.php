<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $harga * $jumlah;

mysqli_query($conn, "UPDATE transaksi SET nama_barang='$nama', harga='$harga', jumlah='$jumlah', total='$total' WHERE id=$id");
header("Location: dashboard.php");
?>