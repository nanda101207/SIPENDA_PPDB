<?php
include 'db.php';
$kode = $_GET['kode'];

$sql = "DELETE FROM petugas WHERE kode_petugas='$kode'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data petugas berhasil dihapus'); window.location='petugas.php';</script>";
} else {
    echo "Gagal hapus: " . $koneksi->error;
}
?>
