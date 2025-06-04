<?php
include 'db.php';

$no       = $_POST['no_daftar'];
$nama     = $_POST['nama'];
$alamat   = $_POST['alamat'];
$jk       = $_POST['jk'];
$jurusan  = $_POST['kode_jurusan'];
$petugas  = $_POST['kode_petugas'];
$tahun    = $_POST['tahun_ajaran'];
$password = $no; 
$sql = "INSERT INTO pendaftar (no_daftar, nama, alamat, jk, kode_jurusan, kode_petugas, tahun_ajaran, password)
        VALUES ('$no', '$nama', '$alamat', '$jk', '$jurusan', '$petugas', '$tahun', '$password')";


if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil disimpan'); window.location='dashboard_petugas.php';</script>";
} else {
    echo "Gagal menyimpan: " . $koneksi->error;
}
?>
