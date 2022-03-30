<?php
require "function.php";

if( isset($_POST["tambahKategori"]) ) {
	if( tambahKategori($_POST) > 0 ) {
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
        <h2>Add Data Kategori</h2>
        <form action="" method="post">
            <label for="Idkategori  ">ID Kategori</label><br>
            <input type="text" id="Idkategori"><br>

            <label for="kategori">Kategori</label><br>
            <input type="text" id="kategori"><br>

            <input type="submit" name="tambahKategori" value="Submit">
            
        </form>
    </section>
</body>
</html>