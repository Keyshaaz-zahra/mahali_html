<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
include 'config.php';

$barang = mysqli_query($conn, "SELECT * FROM transaksi");
$total_barang = 0;
$total_harga = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Kasir</h3>
    <form action="proses_tambah.php" method="post" class="row g-2 mb-4">
        <div class="col">
            <input type="text" name="nama" placeholder="Nama Barang" class="form-control" required>
        </div>
        <div class="col">
            <input type="number" name="harga" placeholder="Harga" class="form-control" required>
        </div>
        <div class="col">
            <input type="number" name="jumlah" placeholder="Jumlah" class="form-control" required>
        </div>
        <div class="col">
            <button class="btn btn-success">Tambah</button>
        </div>
    </form>

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($b = mysqli_fetch_array($barang)): ?>
        <tr>
            <td><?= $b['nama_barang'] ?></td>
            <td><?= $b['harga'] ?></td>
            <td><?= $b['jumlah'] ?></td>
            <td><?= $b['total'] ?></td>
            <td>
                <a href="edit.php?id=<?= $b['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="hapus.php?id=<?= $b['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php 
            $total_barang += $b['jumlah'];
            $total_harga += $b['total'];
        endwhile; ?>
    </tbody>
    <tfoot>
        <tr class="table-secondary">
            <th colspan="2">TOTAL</th>
            <th><?= $total_barang ?></th>
            <th><?= $total_harga ?></th>
            <th></th>
        </tr>
    </tfoot>
</table>

</div>
</body>
</html>