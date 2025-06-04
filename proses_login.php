<?php
session_start();
include 'db.php';

$role = $_POST['role'];
$id   = $_POST['id_login'];
$pass = $_POST['password'];

if ($role == 'pendaftar') {
$cek = $koneksi->query("SELECT * FROM pendaftar WHERE no_daftar='$id' AND password='$pass'");

    if ($cek->num_rows > 0) {
        $_SESSION['role'] = 'pendaftar';
        $_SESSION['no_daftar'] = $id;
        header("Location: dashboard_pendaftar.php");
    } else {
        echo "<script>alert('Login gagal. No Daftar atau Password salah.'); window.location='login.php';</script>";
    }
} elseif ($role == 'petugas') {
    $cek = $koneksi->query("SELECT * FROM petugas WHERE kode_petugas='$id' AND password='$pass'");
    if ($cek->num_rows > 0) {
        $_SESSION['role'] = 'petugas';
        $_SESSION['kode_petugas'] = $id;
        header("Location: dashboard_petugas.php");
    } else {
        echo "<script>alert('Login gagal. Kode Petugas atau Password salah.'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Role tidak dikenali'); window.location='login.php';</script>";
}
?>
