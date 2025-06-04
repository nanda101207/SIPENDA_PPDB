<?php
session_start();
if ($_SESSION['level'] == 'pendaftar') {
    echo "<script>alert('Akses ditolak!'); window.location='detail.php';</script>";
    exit;
}
include 'db.php';

