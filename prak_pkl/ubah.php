<?php
require 'functions.php';

$id = $_GET["id"];
$buku = ("SELECT * FROM mahasiswa WHERE id = $id")[0];


if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			  </script>";
    } else {
        echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
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
            <select name="Idkategori" value="<?php echo $buku["nrp"]; ?>">
                <?php
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($Idkategori = mysqli_fetch_array(
                    $all_categories,
                    MYSQLI_ASSOC
                )) :;
                ?>
                    <option value="<?php echo $Idkategori["Idkategori"];
                                    // The value we usually set is the primary key
                                    ?>">
                        <?php echo $Idkategori["kategori"];
                        // To show the category name to the user
                        ?>
                    </option>
                <?php
                endwhile;
                // While loop must be terminated
                ?>
            </select>

            <label for="judul">Judul</label><br>
            <input type="text" name="judul" id="judul" value="<?php echo $buku["judul"]; ?>"><br>

            <label for="pengarang">Pengarang</label><br>
            <input type="text" name="pengarang" id="pengarang" value="<?php echo $buku["pengarang"]; ?>"><br>

            <label for="penerbit">Penerbit</label><br>
            <input type="text" name="penerbit" id="penerbit" value="<?php echo $buku["penerbit"]; ?>"><br>

            <label for="deskripsi">Deskripsi</label><br>
            <input type="text" name="deskripsi" id="deskripsi" value="<?php echo $buku["deskripsi"]; ?>"><br>

            <input type="submit" name="tambahBuku" value="Submit">
            <button><a href="buku.php">BACK</a></button>
        </form>
    </section>
</body>

</html>