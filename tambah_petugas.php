<!DOCTYPE html>
<html>
<head>
    <title>Tambah Petugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Tambah Petugas</h1>
    <form action="simpan_petugas.php" method="post">
        <label>Kode Petugas</label>
        <input type="text" name="kode" required>

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Role</label>
        <input type="text" name="role" required>

        <button type="submit">Simpan</button>
    </form>
</div>
</body>
</html>
