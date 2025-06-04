<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Biaya Tahunan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Biaya PPDB per Tahun Ajaran</h1>
    <table>
        <tr>
            <th>Tahun Ajaran</th>
            <th>Pendaftaran</th>
            <th>Awal Tahun</th>
            <th>Seragam</th>
            <th>SPP</th>
        </tr>
        <?php
        $result = $koneksi->query("SELECT * FROM biaya");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['tahun_ajaran']}</td>
                <td>Rp ".number_format($row['b_pendaftaran'])."</td>
                <td>Rp ".number_format($row['b_awaltahun'])."</td>
                <td>Rp ".number_format($row['b_seragam'])."</td>
                <td>Rp ".number_format($row['b_spp'])."</td>
                
            </tr>";
        }
        ?>
        
    </table>
     <a href="dashboard_pendaftar.php"><button>Kembali ke Beranda</button></a>
</div>
</body>
</html>