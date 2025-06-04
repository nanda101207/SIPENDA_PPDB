<?php
include 'db.php';
$tahun = $_GET['tahun'];
$result = $koneksi->query("SELECT * FROM biaya WHERE tahun_ajaran='$tahun'");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Biaya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Edit Biaya Tahun <?= $data['tahun_ajaran'] ?></h1>
    <form action="update_biaya.php" method="post">
        <input type="hidden" name="tahun_lama" value="<?= $data['tahun_ajaran'] ?>">

        <label>Tahun Ajaran</label>
        <input type="text" name="tahun" value="<?= $data['tahun_ajaran'] ?>" required>

        <label>Biaya Pendaftaran</label>
        <input type="number" name="pendaftaran" value="<?= $data['b_pendaftaran'] ?>" required>

        <label>Biaya Awal Tahun</label>
        <input type="number" name="awaltahun" value="<?= $data['b_awaltahun'] ?>" required>

        <label>Biaya Seragam</label>
        <input type="number" name="seragam" value="<?= $data['b_seragam'] ?>" required>

        <label>Biaya SPP</label>
        <input type="number" name="spp" value="<?= $data['b_spp'] ?>" required>

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
