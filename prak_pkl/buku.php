<?php
require 'function.php';
$query = mysqli_query($conn, "SELECT  buku.Idbuku, kategori.kategori, buku.judul, buku.pengarang, buku.penerbit, buku.deskripsi FROM kategori,buku WHERE kategori.Idkategori = buku.Idkategori;
    ");

?>

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



        <?php $i = 1; ?>
        <?php foreach ($query as $row) { ?>
            <tr>
                <td><?= $row["Idbuku"]; ?></td>
                <td><?= $row["kategori"]; ?></td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["pengarang"]; ?></td>
                <td><?= $row["penerbit"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>
                <td><a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> | <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a></td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>
</body>

</html>