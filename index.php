<?php
session_start();
    if (isset($_POST['login'])){
// untuk mengkoneksikan
include('koneksi.php');
// if (!$koneksi){
//     echo "gagal";
// }else{
//     echo"berhasil";
// }
$username = $_POST['username'];
$password = $_POST['password'];
$query_get_data = "select * from user where username = '$username' and password ='$password'";
$exec = mysqli_query($koneksi, $query_get_data);
$get_data = mysqli_fetch_array($exec);

$user_type = $get_data['user_type'];

// session adalah database lokal di browser, asalkan browser tidak diclose maka data masih tersimpan
// berbeda dengan session, get dan post hanya dapat menyimpan data selama 1 lamgkah sahaja .
$_SESSION['user_type'] = $user_type;
$_SESSION['id_user'] = $get_data['id_user'];

if ($user_type == "tamu"){
    header("location:tamu.php");
} else if($user_type == "resepsionis"){
    header("location:resepsionis.php");
} else if($user_type == "administator"){
    header("location:administator.php");
} else {
    header("location:index.php");
}
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHMADZ RC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="website icon" type="jpg" href=" OIP (3).jpg">
</head>

<body>
    <div class="container">
        <h2>silahkan login</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">username</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="username"
                    placeholder="ex javier21" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" name="password"
                    placeholder="ex javierganteng6545" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary" style="float: right;">login</button>
        </form>
    </div>
</body>

</html>