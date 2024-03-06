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
$query = "select * from kamar where no_kamar ='$id'";
$eksekusi = mysqli_query($koneksi, $query);
while ($kmr = mysqli_fetch_assoc($eksekusi)) { 

?>
    <div class="container">
        <h2>selamat mengupdate data</h2>
        <form action="" method="post">
        <input type="hidden" name="no_kamar" value="<?= $kmr['no_kamar'];?>">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">no kamar </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="no_kamar"
                    value="<?= $kmr['no_kamar']; ?>" placeholder="no kamar yg ingin diganti">
                    


            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">type kamar</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="type_kamar"
                    value="<?= $kmr['type_kamar_id']; ?>" placeholder="type kamar yg ingin di ganti">
            </div>
            <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">update</button>
        </form>
    </div>
</body>
<?php } ?>
</html>
<?php
if(isset($_POST['ubah'])){
    include 'koneksi.php';

    $no_kamar    = $_POST['no_kamar'];
    $type_kamar  = $_POST['type_kamar'];
    // masukan data ke dalam query untuk update data
    $update = "update kamar set no_kamar = '$no_kamar', type_kamar_id = '$type_kamar' where no_kamar = '$_GET[id]' ";
    $eksekusi = mysqli_query($koneksi, $update);
    if ($eksekusi){
        header('location:kamar.php');
    }
}
?>