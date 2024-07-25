<?php
    include "koneksi.php";
    $id_klien=$_GET['id_klien'];

// perintah untuk mengubah data ke dalam database
mysqli_query($db, "DELETE FROM tabel_klien where id_klien='".$id_klien."'");

// perintah untuk berpindah halaman menuju halaman index
header("location: klien.php");

?>