<?php
include 'db.php';
$kode = $_GET['kode'];

$sql = "DELETE FROM jurusan WHERE kode_jurusan='$kode'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Jurusan berhasil dihapus'); window.location='jurusan.php';</script>";
} else {
    echo "Gagal hapus: " . $koneksi->error;
}
?>
