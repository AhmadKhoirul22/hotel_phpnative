<?php
session_start();
if(isset($_POST['pesan'])){
  include 'koneksi.php';
  $no_kamar = $_GET['no_kamar'];
  $checkin = $_POST['tanggal_checkin'];
  $checkout = $_POST['tanggal_checkout'];
  // masukan data kedalam database
  $query = "select harga from kamar
                          join tipe_kamar on kamar.type_kamar_id = tipe_kamar.type_kamar_id
                          where kamar.no_kamar = $no_kamar";
  $eksekusi = mysqli_query($koneksi, $query);
  $data = mysqli_fetch_assoc($eksekusi);

  $insert = "insert into pemesanan
                    (no_kamar, user_id, tanggal_checkin, tanggal_checkout, harga, status_pemesanan)
                    values
                    ('$no_kamar','$_SESSION[id_user]','$checkin','$checkout',
                    datediff(date('$checkout'), date('$checkin')) *$data[harga], 'proses')";
  $exec = mysqli_query($koneksi, $insert);
    if($exec){
      echo "<script>alert('alhamduliah data berhasil disimpan di database')</script>";
    }
}
?>