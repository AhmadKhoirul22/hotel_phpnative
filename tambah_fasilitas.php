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
    <form action="aksitambah_fasilitaskamar.php" method="post">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">fasilitas hotel</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="fasilitas_hotel" placeholder="ex 10">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">fasilitas umum</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="fasilitas_umum" placeholder="ex 1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">fasilitas terdekat</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="fasilitas_terdekat"
          placeholder="ex 1">
      </div>
      <button type="submit" name="tambahkamar" class="btn btn-primary" style="float: right;">tambah</button>
    </form>
  </div>
</body>

</html>