<?php
    include "koneksi.php";
    $id_produk=$_GET['id_produk'];

// perintah untuk mengubah data ke dalam database
mysqli_query($db, "DELETE FROM tabel_produk where id_produk='".$id_produk."'");

// perintah untuk berpindah halaman menuju halaman index
header("location: produk.php");

?>