<?php
    include 'koneksi.php';
    // ambil data dari form
        $no_kamar   = $_POST['no_kamar'];
        $type_kamar = $_POST['type_kamar'];
        // melakukan query untuk menambahkan data
        $querytambah  = "INSERT INTO kamar (no_kamar, type_kamar_id) VALUES ('$no_kamar','$type_kamar')";
        $exectambah   = mysqli_query($koneksi, $querytambah);
    //     var_dump($querytambah);
    //     var_dump($exectambah);
    // die();
        if($exectambah){
            header('Location:kamar.php?');
        }
       

?>