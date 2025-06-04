<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login PPDB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Login Sistem PPDB</h1>
    <form action="proses_login.php" method="post">
        <label>Login Sebagai:</label>
        <select name="role" required>
            <option value=""></option>
            <option value="pendaftar">Pendaftar</option>
            <option value="petugas">Petugas</option>
        </select>

        <label>ID Login (No Daftar / Kode Petugas)</label>
        <input type="text" name="id_login" autocomplete="off">

        <label>Password</label>
        <input type="password" name="password" autocomplete="off">

        <button type="submit">Masuk</button>
    </form>
</div>
</body>
</html>
