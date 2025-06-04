<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran - PPDB SMK IGASAR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Formulir Pendaftaran</h1>
    <form action="simpan.php" method="post">
        <label>No Daftar</label>
        <input type="text" name="no_daftar" required>

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Alamat</label>
        <textarea name="alamat" required></textarea>

        <label>Jenis Kelamin</label>
        <select name="jk" required>
            <option value=""></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>

        <label>Jurusan</label>
        <select name="kode_jurusan" required>
            <option value=""></option>
            <option value="IGAPIN_1">Teknik Komputer Jaringan</option>
            <option value="IGAPIN_2">Rekayasa Perangkat Lunak</option>
            <option value="IGAPIN_3">Teknik Pemesinan</option>
            <option value="IGAPIN_4">Teknik Kendaraan Ringan</option>
            <option value="IGAPIN_5">Teknik Bisnis Sepeda Motor</option>
        </select>
        <label>Password</label>
<input type="password" name="password" required>
</select?


        <label>Role Petugas</label>
        <select name="kode_petugas" required>
            <option value=""></option>
            <option value="P001">Asep Sunandar (Petugas)</option>
            <option value="P002">Susanti (Petugas)</option>
            <option value="P003">Ali Syaki (Admin)</option>
            <option value="P004">Sania Marwah (TU)</option>
            <option value="P005">Aria Kamandanu (Kepala Sekolah)</option>
           
        </select>

        <label>Tahun Ajaran</label>
        <input type="text" name="tahun_ajaran" value="2024/2025" required>

        <button type="submit">Simpan Pendaftaran</button>
    </form>
    <a href="index.php"><button>Kembali ke Beranda</button></a>
</div>
</body>
</html>
