<?php
session_start();
if ($_SESSION['user_type'] != 'tamu'){
    echo "<script>alert('bukan hak anda')</script>";
    echo "<script>location.href = 'index.php'</script>";
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
    <h2>selamat datang di akun tamu</h2>
    <div class="row">
    <?php
                include 'koneksi.php';
                $select = "select * from kamar
                                    join tipe_kamar
                                    join fasilitas_hotel
                                    on
                                    kamar.type_kamar_id = tipe_kamar.type_kamar_id";
                $query = mysqli_query($koneksi, $select);
                while ($BRO = mysqli_fetch_assoc($query)){
                ?>

                <div class="col-md-4">
    <div class="card">
  <img src="kamar.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">kamar</h5>
    <!-- <p class="card-text">
      </p> -->
      <table >
              
                <tr>
                    <td>
                    <h5>no kamar</h5>
                    <p><?=$BRO ['type_kamar_id']; ?></p>
                    <h5>fasilitas kamar</h5>
                    <p><?=$BRO  ['fasilitas']; ?></p>
                    <h5>fasilitas hotel</h5>
                    <p><?= $BRO ['fasilitas_hotel'] ; ?> </p>
                    <h5>fasilitas umum</h5>
                    <p> <?= $BRO ['fasilitas_umum'] ; ?> </p>
                    <h5>fasilitas terdekat</h5>
                    <p> <?=$BRO ['fasilitas_terdekat'] ; ?> </p>
                    <h5>harga</h5>
                    <p><?= $BRO ['harga']; ?> </p>
                    </td>
                  </tr>
                </table>
                
    <a href="pemesanan.php?no_kamar=<?= $BRO ['no_kamar'] ; ?>" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
                </div>
  <?php  } 
                ?>
</div>

<!-- div penutup -->
</div>  
                
    </div>
</body>
</html>