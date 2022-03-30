<?php
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");


function tambahBuku($data)
{
    global $conn;

    $Idkategori = htmlspecialchars($data["Idkategori"]);
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $sql = "INSERT INTO buku (Idkategori, judul, pengarang, penerbit, deskripsi) VALUES ('$Idkategori', '$judul', '$pengarang', '$penerbit', '$deskripsi')";


    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}


function tambahKategori($data)
{
    global $conn;

    $kategori = htmlspecialchars($data["kategori"]);

    $sql = "INSERT INTO kategori VALUES ('', '$kategori')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus($Idbuku)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE Idbuku = $Idbuku");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);

    $sql = "UPDATE mahasiswa SET
				nrp = '$nrp',
				nama = '$nama',
				email = '$email',
			WHERE
				id = $id
			";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
