<?php 
    $conn = mysqli_connect("localhost", "root", "", "perpustakaan");


    function tambahBuku($data) {
        global $conn;
        
        $kategori = htmlspecialchars($data["kategori"]);
        $judul = htmlspecialchars($data["judul"]);
        $pengarang = htmlspecialchars($data["pengarang"]);
        $penerbit = htmlspecialchars($data["penerbit"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
    
        $sql = "INSERT INTO buku (Idkategori, judul, pengarang, penerbit, deskripsi) VALUES ('$kategori', '$judul', '$pengarang', '$penerbit', '$deskripsi')";
                // 	VALUES
                // ('', '', '$judul', '$pengarang', '$penerbit', '$deskripsi'))";
        
        mysqli_query($conn, $sql);
    
        return mysqli_affected_rows($conn);
    }

    function tambahKategori($data) {
        global $conn;
        
        $kategori = htmlspecialchars($data["kategori"]);
    
        $sql = "INSERT INTO kategori VALUES ('', '$kategori')";
        
        mysqli_query($conn, $sql);
    
        return mysqli_affected_rows($conn);
    }
?>


