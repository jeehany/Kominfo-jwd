<?php
    include "koneksi.php";
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];

mysqli_query($db, "INSERT INTO tabel_produk VALUES ('".$id_produk."', '".$nama_produk."', ".$harga.", ".$stok.")");

header("location: produk.php");

?>