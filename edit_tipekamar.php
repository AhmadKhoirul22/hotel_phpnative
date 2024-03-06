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
    $id =(int)$_GET['id'];
    $select = "select * from tipe_kamar where type_kamar_id = '$id' ";
    $esekusi = mysqli_query($koneksi, $select);
    $heh =mysqli_fetch_assoc($esekusi); 
    
    if(isset($_POST['update'])){
        $type_kamar_id = $_POST['type_kamar_id'];
        $fasilitas     = $_POST['fasilitas'];
        $harga         = $_POST['harga'];

        $update = "update tipe_kamar set type_kamar_id = '$type_kamar_id', 
                                             fasilitas = '$fasilitas', 
                                                 harga = '$harga'
                                   where type_kamar_id = '$_GET[id]' ";
        $eksekusi = mysqli_query($koneksi, $update);
        if($eksekusi){
            header('location:type_kamar.php');
        }
    }
    ?>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">type kamar id</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="type_kamar_id"
                    value="<?= $heh['type_kamar_id'] ; ?>" placeholder="ex 10">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">fasilitas </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="fasilitas"
                value="<?= $heh['fasilitas'] ; ?>" placeholder="ex 1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">harga </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="harga"  value="<?= $heh['harga'] ; ?>"placeholder="ex 1">
            </div>
            <button type="submit" name="update" class="btn btn-primary" style="float: right;">update</button>
        </form>
    </div>
</body>

</html>
<?php
    


?>