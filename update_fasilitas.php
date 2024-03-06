<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php
include 'koneksi.php';
$id = (int)$_GET['id'];
$query = "select * from fasilitas_hotel where fasilitas_hotel ='$id'";
$who = mysqli_query($koneksi, $query);
$kmr = mysqli_fetch_assoc($who);
 
 
  if(isset($_POST['update'])){}
    include 'koneksi.php';
    $fasilitas_hotel = $_POST['fasilitas_hotel'];
    $fasilitas_umum = $_POST['fasilitas_umum'];
    $fasilitas_terdekat = $_POST['fasilitas_terdekat'];

    $update = "update fasilitas_hotel set fasilitas_hotel = '$fasilitas_hotel',
                                           fasilitas_umum = '$fasilitas_umum', 
                                       fasilitas_terdekat = '$fasilitas_terdekat'
                                    where fasilitas_hotel = '$_GET[id]' ";
    $eksekusi = mysqli_query($koneksi, $update);
    if($eksekusi){
        header('location:fasilitas_kamar');
    }
    ?>
  
  <div class="container">
    <form action="" method="post">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">fasilitas hotel</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $kmr['fasilitas_hotel']; ?> " name="fasilitas_hotel" placeholder="ex 10">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">fasilitas umum</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"value="<?= $kmr['fasilitas_umum']; ?> " name="fasilitas_umum" placeholder="ex 1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">fasilitas terdekat</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $kmr['fasilitas_terdekat']; ?> " name="fasilitas_terdekat"
          placeholder="ex 1">
      </div>
      <button type="submit" name="update" class="btn btn-primary" style="float: right;">tambah</button>
    </form>
  </div>
</body>

</html>