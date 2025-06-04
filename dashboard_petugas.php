<?php
session_start();
include 'db.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'petugas') {
    header("Location: login.php");
    exit;
}

$kode = $_SESSION['kode_petugas'];
$petugas = $koneksi->query("SELECT nama FROM petugas WHERE kode_petugas='$kode'")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Petugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Selamat Datang, <?= $petugas['nama'] ?>!</h1>
    <h3>Data Pendaftar yang Anda Input:</h3>
    <table>
          <a href="daftar.php"><button>Daftar Sekarang</button></a>
    <a href="detail.php"><button>Lihat Data Pendaftar</button></a>
    <a href="biaya.php"><button>Data Biaya Tahunan</button></a>
    <a href="jurusan.php"><button>Data Jurusan</button></a>
    <a href="petugas.php"><button>Data Petugas</button></a>
    <a href="daftar.php"><button>Dashboard Petugas</button></a>
        <tr>
    </table>
    <br>
    <a href="logout.php"><button>Logout</button></a>
</div>
</body>
</html>
