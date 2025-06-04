<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Biaya Tahunan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Data Biaya PPDB per Tahun Ajaran</h1>
    <a href="tambah_biaya.php"><button>Tambah Biaya</button></a><br><br>
    <table>
        <tr>
            <th>Tahun Ajaran</th>
            <th>Pendaftaran</th>
            <th>Awal Tahun</th>
            <th>Seragam</th>
            <th>SPP</th>
            <th>Aksi</th>
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
                <td>
                    <a href='edit_biaya.php?tahun={$row['tahun_ajaran']}'><button>Edit</button></a>
                    <a href='hapus_biaya.php?tahun={$row['tahun_ajaran']}' onclick=\"return confirm('Yakin hapus?')\"><button>Hapus</button></a>
                </td>
            </tr>";
        }
        ?>
        
    </table>
     <a href="index.php"><button>Kembali ke Beranda</button></a>
</div>
</body>
</html>
