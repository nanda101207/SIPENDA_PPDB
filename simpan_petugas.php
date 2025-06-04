<?php
include 'db.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$role = $_POST['role'];

$sql = "INSERT INTO petugas VALUES ('$kode', '$nama', '$role')";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data petugas berhasil ditambahkan'); window.location='petugas.php';</script>";
} else {
    echo "Gagal: " . $koneksi->error;
}
?>
