<?php
session_start();
if ($_SESSION['user_type'] != 'resepsionis'){
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
    <h2>selmat datang di akun resepsionis</h2>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>no</th>
            <th>no kamar</th>
            <th>nama pemesan</th>
            <th>tanggal check in</th>
            <th>tanggal checkout</th>
            <th>harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $p = "select * from pemesanan
                        join user
                        on
                        pemesanan.id_user = user.id_user ";
        $eksek = mysqli_query($koneksi, $p);
        while ($pop = mysqli_fetch_assoc($eksek)) { ;
        $no = 1 ; ?>
        <tr>
            <td><?= $no++ ;?></td>
            <td><?= $pop ['type_kamar_id'];?></td>
            <td><?= $pop ['username'];?></td>
            <td><?= $pop ['checkin'];?></td>
            <td><?= $pop ['checkout'];?></td>
            <td><?= $pop ['harga'];?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    </div>
</body>
</html>