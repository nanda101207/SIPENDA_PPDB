<?php
include 'db.php';

$tahun = $_POST['tahun'];
$daftar = $_POST['pendaftaran'];
$awal = $_POST['awaltahun'];
$seragam = $_POST['seragam'];
$spp = $_POST['spp'];

$sql = "INSERT INTO biaya VALUES ('$tahun', $daftar, $awal, $seragam, $spp)";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data biaya berhasil ditambahkan'); window.location='biaya.php';</script>";
} else {
    echo "Gagal: " . $koneksi->error;
}
?>
