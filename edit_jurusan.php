<?php
include 'db.php';
$kode = $_GET['kode'];
$result = $koneksi->query("SELECT * FROM jurusan WHERE kode_jurusan='$kode'");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Jurusan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Edit Jurusan</h1>
    <form action="update_jurusan.php" method="post">
        <input type="hidden" name="kode_lama" value="<?= $data['kode_jurusan'] ?>">

        <label>Kode Jurusan</label>
        <input type="text" name="kode" value="<?= $data['kode_jurusan'] ?>" required>

        <label>Nama Jurusan</label>
        <input type="text" name="nama" value="<?= $data['nama_jurusan'] ?>" required>

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
