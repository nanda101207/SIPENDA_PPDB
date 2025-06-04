<?php
include 'db.php';

$tahun_lama = $_POST['tahun_lama'];
$tahun = $_POST['tahun'];
$daftar = $_POST['pendaftaran'];
$awal = $_POST['awaltahun'];
$seragam = $_POST['seragam'];
$spp = $_POST['spp'];

$sql = "UPDATE biaya SET 
        tahun_ajaran='$tahun', 
        b_pendaftaran=$daftar, 
        b_awaltahun=$awal, 
        b_seragam=$seragam, 
        b_spp=$spp 
        WHERE tahun_ajaran='$tahun_lama'";

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data biaya berhasil diupdate'); window.location='biaya.php';</script>";
} else {
    echo "Gagal update: " . $koneksi->error;
}
?>
