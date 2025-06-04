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
    <table>
        <tr>
            <th>Kode Jurusan</th>
            <th>Nama Jurusan</th>
        </tr>
        <?php
        $result = $koneksi->query("SELECT * FROM jurusan");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['kode_jurusan']}</td>
                <td>{$row['nama_jurusan']}</td>
                
            </tr>";
        }
        ?>
    </table>
     <a href="dashboard_pendaftar.php"><button>Kembali ke Beranda</button></a>
</div>
</body>
</html>
