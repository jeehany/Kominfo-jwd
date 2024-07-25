<?php
    include "koneksi.php";
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];

// perintah untuk mengubah data ke dalam database
mysqli_query($db, "UPDATE tabel_produk SET nama_produk='".$nama_produk."', harga=".$harga.", stok=".$stok." where id_produk='".$id_produk."'");

header("location: produk.php");

?>