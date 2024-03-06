<?php
session_start();
if(isset($_POST['pesan'])){
var_dump($_SESSION['id_user']);
var_dump($_GET['no_kamar']);
  include 'koneksi.php';
  $no_kamar = $_GET['no_kamar'];
  $id_user = $_SESSION['id_user'];
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];
  // dapatkan dulu data harga permalam berdasarkan no kamar
  $harga = "select harga from tipe_kamar
                              join kamar
                              on
                              kamar.type_kamar_id = tipe_kamar.type_kamar_id
                              where
                              kamar.no_kamar = '$no_kamar' ";
  $esekusi_harga = mysqli_query($koneksi, $harga);
  $data_harga = mysqli_fetch_assoc($esekusi_harga);
  $harga_permalam  = $data_harga['harga'];

  $tgl_checkin = date_create($checkin);
  $tgl_checkout = date_create($checkout);
  $durasi = date_diff($tgl_checkin, $tgl_checkout) ->d;
  $harga = $harga_permalam * $durasi;
  var_dump($harga);

  $insert = "insert into pemesanan
              (no_kamar, id_user, checkin, checkout, harga)
              values
              ('$no_kamar','$id_user','$checkin','$checkout','$harga')";
  $esek_insert = mysqli_query($koneksi, $insert);
    if($esek_insert){
      echo "<h1>berhasil</h1>";
      die();
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <h1>silahkan pesan</h1>
    <form action="" method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">tanggal checkin</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" name="checkin">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">tanggal checkout</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" name="checkout">
</div>
<button class="btn btn-success" type="submit" style="float: right;" name="pesan">pesan</button>
</form>
    </div>
    
</body>
</html>
