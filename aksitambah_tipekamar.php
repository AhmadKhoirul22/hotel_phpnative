<?php
include 'koneksi.php';

$type_kamar_id = $_POST['type_kamar_id'];
$fasilitas     = $_POST['fasilitas'];
$harga         = $_POST['harga'];

$querytambah = "INSERT INTO tipe_kamar (type_kamar_id, fasilitas, harga) VALUES ('$type_kamar_id','$fasilitas','$harga')";
$exectambah = mysqli_query($koneksi, $querytambah);


if($exectambah){
    header('Location:type_kamar.php?');
}





?>