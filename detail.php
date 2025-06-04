<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar - PPDB SMK IGASAR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Data Pendaftar</h1>
    <table>
        <tr>
            <th>No Daftar</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>JK</th>
            <th>Jurusan</th>
            <th>Petugas</th>
            <th>Tahun Ajaran</th>
             <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM pendaftar";
        $result = $koneksi->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['no_daftar']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['jk']}</td>
                <td>{$row['kode_jurusan']}</td>
                <td>{$row['kode_petugas']}</td>
                <td>{$row['tahun_ajaran']}</td>
                 <td>
            <a href='edit.php?no={$row['no_daftar']}'><button>Edit</button></a>
            <a href='hapus.php?no={$row['no_daftar']}' onclick=\"return confirm('Yakin ingin hapus?')\"><button>Hapus</button></a>
    </tr>";
}

        
        ?>
    </table>
    <br>
    <a href="index.php"><button>Kembali ke Beranda</button></a>
</div>
</body>
</html>
