<?php
session_start();
if ($_SESSION['level'] == 'pendaftar') {
    echo "<script>alert('Akses ditolak!'); window.location='detail.php';</script>";
    exit;
}
include 'db.php';
$no     = $_POST['no_daftar'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk     = $_POST['jk'];
$jur    = $_POST['kode_jurusan'];
$petugas = $_POST['kode_petugas'];
$tahun  = $_POST['tahun_ajaran'];

$sql = "UPDATE pendaftar SET 
        nama='$nama', 
        alamat='$alamat', 
        jk='$jk', 
        kode_jurusan='$jur', 
        kode_petugas='$petugas', 
        tahun_ajaran='$tahun'
        WHERE no_daftar='$no'";

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil diupdate!'); window.location='detail.php';</script>";
} else {
    echo "Gagal update: " . $koneksi->error;
}
?>
