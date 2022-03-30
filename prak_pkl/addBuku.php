<?php
require "function.php";

if( isset($_POST["tambahBuku"]) ) {
	if( tambahBuku($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'buku.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'buku.php';
			  </script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data</title>
</head>
<body>

    <section id="form">
        <h2>Add Data Buku</h2>
        <form action="" method="post">
            <label for="Idbuku">ID Buku</label> <br>
            <input type="text" name="Idbuku" id="Idbuku"> <br>

            <label for="IdKategori">Kategori</label><br>
            <input type="text" name="Idkategori" id="Idkategori"><br>

            <label for="judul">Judul</label><br>
            <input type="text" name="judul" id="judul"><br>

            <label for="pengarang">Pengarang</label><br>
            <input type="text" name="pengarang" id="pengarang"><br>

            <label for="penerbit">Penerbit</label><br>
            <input type="text" name="penerbit" id="penerbit"><br>

            <label for="deskripsi">Deskripsi</label><br>
            <input type="text" name="deskripsi" id="deskripsi"><br>
            
            <input type="submit" name="tambahBuku" value="Submit">
        </form>
    </section>
</body>
</html>