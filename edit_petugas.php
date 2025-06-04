<?php
include 'db.php';
$kode = $_GET['kode'];
$result = $koneksi->query("SELECT * FROM petugas WHERE kode_petugas='$kode'");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Petugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Edit Petugas</h1>
    <form action="update_petugas.php" method="post">
        <input type="hidden" name="kode_lama" value="<?= $data['kode_petugas'] ?>">

        <label>Kode Petugas</label>
        <input type="text" name="kode" value="<?= $data['kode_petugas'] ?>" required>

        <label>Nama</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

        <label>Role</label>
        <input type="text" name="role" value="<?= $data['role'] ?>" required>

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
