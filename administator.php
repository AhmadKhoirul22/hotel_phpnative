<?php
session_start();
if ($_SESSION['user_type'] != 'administator'){
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
    <h2>selamat datang di akun administator</h2>
    <hr>
    <a href="kamar.php" class="btn btn-success">kamar</a>
    <a href="fasilitas_kamar.php" class="btn btn-primary">fasilitas</a>
    <a href="type_kamar.php" class="btn btn-danger">tipe kamar</a>
</table>    






</div>
</body>
</html>