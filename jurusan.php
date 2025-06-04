<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Jurusan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Data Jurusan</h1>
    <a href="tambah_jurusan.php"><button>Tambah Jurusan</button></a><br><br>
    <table>
        <tr>
            <th>Kode Jurusan</th>
            <th>Nama Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = $koneksi->query("SELECT * FROM jurusan");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['kode_jurusan']}</td>
                <td>{$row['nama_jurusan']}</td>
                <td>
                    <a href='edit_jurusan.php?kode={$row['kode_jurusan']}'><button>Edit</button></a>
                    <a href='hapus_jurusan.php?kode={$row['kode_jurusan']}' onclick=\"return confirm('Yakin hapus?')\"><button>Hapus</button></a>
                </td>
            </tr>";
        }
        ?>
    </table>
     <a href="index.php"><button>Kembali ke Beranda</button></a>
</div>
</body>
</html>
