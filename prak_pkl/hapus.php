<?php
require 'function.php';
$Idbuku = $_GET["Idbuku"];

if (hapus($Idbuku) > 0) {
    echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = 'buku.php';
		</script>";
} else {
    echo "<script>
			alert('data gagal dihapus!');
			document.location.href = 'buku.php';
		</script>";
}
