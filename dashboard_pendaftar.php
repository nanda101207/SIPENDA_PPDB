<?php
session_start();
include 'db.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'pendaftar') {
    header("Location: login.php");
    exit;
}

$no = $_SESSION['no_daftar'];

$stmt = $koneksi->prepare("SELECT * FROM pendaftar WHERE no_daftar = ?");
$stmt->bind_param("s", $no);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
$stmt->close();

if (!$data) {
    echo "Data pendaftar tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pendaftar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Halo, <?= ($data['nama']) ?>!</h1>

    <table>
        <tr><td><strong>No Daftar</strong></td><td><?= ($data['no_daftar']) ?></td></tr>
        <tr><td><strong>Alamat</strong></td><td><?= ($data['alamat']) ?></td></tr>
        <tr><td><strong>Jenis Kelamin</strong></td><td><?= $data['jk'] ?></td></tr>
        <tr><td><strong>Jurusan</strong></td><td><?= ($data['kode_jurusan']) ?></td></tr>
        <tr><td><strong>Tahun Ajaran</strong></td><td><?= ($data['tahun_ajaran']) ?></td></tr>
    </table>

    <br>
    <a href="biaya_pendaftar.php"><button>Biaya Tahunan</button></a>
    <a href="jurusan_pendaftar.php"><button>Jurusan</button></a>
    <a href="logout.php"><button>Logout</button></a>
</div>
</body>
</html>
