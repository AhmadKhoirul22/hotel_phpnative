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
    <div class="container">
        <h2>selamat datang di akun administator</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>no</th>
                    <th>tipe kamar</th>
                    <th>fasilitas</th>
                    <th>harga</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $sql = "select * from tipe_kamar"; 
    
    include 'koneksi.php'; 
    $query = mysqli_query($koneksi, $sql);
    $kamars = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $no = 1; ?>
                <?php foreach ($kamars as $kamar)  { ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $kamar['type_kamar_id'] ; ?></td>
                    <td><?= $kamar['fasilitas'] ; ?></td>
                    <td><?= $kamar['harga'];  ?></td>
                    <td><a href="edit_tipekamar.php?id= <?=$kamar ['type_kamar_id'] ; ?>" class="btn btn-primary" width="15%">update</a>
                        </td>
                </tr>
                <?php }; ?>
                <a href="tambah_tipekamar.php" class="btn btn-success mb-3">tambah data</a>
            </tbody>
        </table>


                    



    </div>
</body>

</html>