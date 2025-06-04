<?php
include 'db.php';
$no = $_GET['no'];
$sql = "SELECT * FROM pendaftar WHERE no_daftar='$no'";
$result = $koneksi->query($sql);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pendaftar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Edit Data Pendaftar</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="no_daftar" value="<?= $data['no_daftar'] ?>">

        <label>Nama</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

        <label>Alamat</label>
        <textarea name="alamat" required><?= $data['alamat'] ?></textarea>

        <label>Jenis Kelamin</label>
        <select name="jk">
            <option value="L" <?= $data['jk']=='L'?'selected':'' ?>>Laki-laki</option>
            <option value="P" <?= $data['jk']=='P'?'selected':'' ?>>Perempuan</option>
        </select>

        <label>Jurusan</label>
        <select name="kode_jurusan">
            <option value="IGAPIN_1" <?= $data['kode_jurusan']=='IGAPIN_1'?'selected':'' ?>>TKJ</option>
            <option value="IGAPIN_2" <?= $data['kode_jurusan']=='IGAPIN_2'?'selected':'' ?>>RPL</option>
            <option value="IGAPIN_3" <?= $data['kode_jurusan']=='IGAPIN_3'?'selected':'' ?>>TPM</option>
            <option value="IGAPIN_4" <?= $data['kode_jurusan']=='IGAPIN_4'?'selected':'' ?>>TKR</option>
            <option value="IGAPIN_5" <?= $data['kode_jurusan']=='IGAPIN_5'?'selected':'' ?>>TBSM</option>
        </select>

        <label>Kode Petugas</label>
        <select name="kode_petugas">
            <option value="P001" <?= $data['kode_petugas']=='P001'?'selected':'' ?>>P001</option>
            <option value="P002" <?= $data['kode_petugas']=='P002'?'selected':'' ?>>P002</option>
        </select>

        <label>Tahun Ajaran</label>
        <input type="text" name="tahun_ajaran" value="<?= $data['tahun_ajaran'] ?>" required>

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
