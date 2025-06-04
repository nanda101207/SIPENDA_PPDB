<?php
include 'db.php';
$no = $_GET['no'];

$sql = "DELETE FROM pendaftar WHERE no_daftar='$no'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='detail.php';</script>";
} else {
    echo "Gagal hapus: " . $koneksi->error;
}
?>
