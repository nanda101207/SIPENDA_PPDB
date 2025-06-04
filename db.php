<?php
$koneksi = new mysqli("localhost", "root", "", "ppdb");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
