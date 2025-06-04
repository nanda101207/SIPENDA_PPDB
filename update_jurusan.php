<?php
include 'db.php';

$kode_lama = $_POST['kode_lama'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];

$sql = "UPDATE jurusan SET kode_jurusan='$kode', nama_jurusan='$nama' WHERE kode_jurusan='$kode_lama'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Jurusan berhasil diupdate'); window.location='jurusan.php';</script>";
} else {
    echo "Gagal update: " . $koneksi->error;
}
?>
