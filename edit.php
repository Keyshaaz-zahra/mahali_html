<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM transaksi WHERE id=$id"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <form action="edit_proses.php" method="POST" class="card p-4 col-md-6 mx-auto">
        <h4 class="mb-3">Edit Barang</h4>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="mb-2">
            <label>Nama Barang</label>
            <input type="text" name="nama" value="<?= $data['nama_barang'] ?>" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Harga</label>
            <input type="number" name="harga" value="<?= $data['harga'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
