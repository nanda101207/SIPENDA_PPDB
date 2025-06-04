<!DOCTYPE html>
<html>
<head>
    <title>Tambah Biaya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Tambah Biaya Tahun Ajaran</h1>
    <form action="simpan_biaya.php" method="post">
        <label>Tahun Ajaran</label>
        <input type="text" name="tahun" required>

        <label>Biaya Pendaftaran</label>
        <input type="number" name="pendaftaran" required>

        <label>Biaya Awal Tahun</label>
        <input type="number" name="awaltahun" required>

        <label>Biaya Seragam</label>
        <input type="number" name="seragam" required>

        <label>Biaya SPP</label>
        <input type="number" name="spp" required>

        <button type="submit">Simpan</button>
    </form>
</div>
</body>
</html>
