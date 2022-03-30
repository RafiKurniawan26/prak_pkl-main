<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Buku</title>
</head>
<body>
    <h1>Data Buku Perpustakaan</h1>
    <a href="addBuku.php">Tambah Buku</a>
    <a href="addKategori.php">Tambah Kategori</a>
    <table border="1px" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Buku</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <?php
            require 'function.php';
            $query = mysqli_query($conn, "SELECT  buku.Idbuku, kategori.kategori, buku.judul, buku.pengarang, buku.penerbit, buku.deskripsi FROM kategori,buku WHERE kategori.Idkategori = buku.Idkategori;
            ");
            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$data['Idbuku']."</td>";
                echo "<td>".$data['kategori']."</td>";
                echo "<td>".$data['judul']."</td>";
                echo "<td>".$data['pengarang']."</td>";
                echo "<td>".$data['penerbit']."</td>";
                echo "<td>".$data['deskripsi']."</td>";
                echo "<td><a href='edit.php?"."'>Ubah</a> <a href='hapus.php?"."'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>