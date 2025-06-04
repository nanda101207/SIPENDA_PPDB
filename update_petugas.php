<?php
include 'db.php';
$kode_lama = $_POST['kode_lama'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$role = $_POST['role'];

$sql = "UPDATE petugas SET kode_petugas='$kode', nama='$nama', role='$role' WHERE kode_petugas='$kode_lama'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data petugas berhasil diupdate'); window.location='petugas.php';</script>";
} else {
    echo "Gagal update: " . $koneksi->error;
}
?>
