<?php
include 'db.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];

$sql = "INSERT INTO jurusan VALUES('$kode', '$nama')";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Jurusan berhasil ditambahkan'); window.location='jurusan.php';</script>";
} else {
    echo "Gagal: " . $koneksi->error;
}
?>
