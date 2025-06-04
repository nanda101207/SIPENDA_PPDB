<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jurusan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Tambah Jurusan</h1>
    <form action="simpan_jurusan.php" method="post">
        <label>Kode Jurusan</label>
        <input type="text" name="kode" required>

        <label>Nama Jurusan</label>
        <input type="text" name="nama" required>

        <button type="submit">Simpan</button>
    </form>
</div>
</body>
</html>
