<?php
include 'db.php';
$tahun = $_GET['tahun'];

$sql = "DELETE FROM biaya WHERE tahun_ajaran='$tahun'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data biaya berhasil dihapus'); window.location='biaya.php';</script>";
} else {
    echo "Gagal hapus: " . $koneksi->error;
}
?>
