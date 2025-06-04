<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Petugas PPDB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Data Petugas PPDB</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Kode Petugas</th>
            <th>Nama Petugas</th>
            <th>Role</th>
             <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = $koneksi->query("SELECT * FROM petugas ORDER BY kode_petugas ASC");
        while ($data = $query->fetch_assoc()) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$data['kode_petugas']}</td>
                    <td>{$data['nama']}</td>
                    <td>{$data['role']}</td>
                    <td>
                        <a href='edit_petugas.php?kode={$data['kode_petugas']}'><button>Edit</button></a>
                        <a href='hapus_petugas.php?kode={$data['kode_petugas']}' onclick=\"return confirm('Yakin ingin menghapus petugas ini?')\"><button>Hapus</button></a>
                  </tr>";
                  
            $no++;
        }
        ?>
                
    </table>
    <a href="index.php"><button>Kembali ke Beranda</button></a>
</div>
</body>
</html>
