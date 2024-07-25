<?php
    include "koneksi.php";
    $id_klien=$_POST['id_klien'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];

mysqli_query($db, "INSERT INTO tabel_klien VALUES ('".$id_klien."', '".$nama."', '".$alamat."', '".$telepon."')");

header("location: klien.php");

?>