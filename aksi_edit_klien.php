<?php
    include "koneksi.php";
    $id_klien=$_POST['id_klien'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];

// perintah untuk mengubah data ke dalam database
mysqli_query($db, "UPDATE tabel_klien SET nama='".$nama."', alamat='".$alamat."', telepon='".$telepon."' where id_klien='".$id_klien."'");

header("location: klien.php");

?>