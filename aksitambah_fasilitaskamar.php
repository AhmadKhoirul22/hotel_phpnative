<?php
include 'koneksi.php';

$fasilitas_hotel      = $_POST['fasilitas_hotel'];
$fasilitas_umum     = $_POST['fasilitas_umum'];
$fasilitas_terdekat  = $_POST['fasilitas_terdekat'];

$query = "INSERT INTO fasilitas_hotel (fasilitas_hotel, fasilitas_umum, fasilitas_terdekat) VALUES ('$fasilitas_hotel','$fasilitas_umum','$fasilitas_terdekat')";
$exectambah = mysqli_query($koneksi, $query);

 if($exectambah){
    header('Location:fasilitas_kamar.php?');
}



?>