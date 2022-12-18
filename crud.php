<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    .container{
      margin-top: 20px;
    }
    .container table{
      margin-top: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
      border: 15px solid #ddd;
    }
    .btn{
      margin-top: 10px;
      left: 50%;
    }
    input,input[type="text"]{
      width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: white;
    box-shadow: 0 0 5px 0 rgba(0,0,0,0.2);
    }
    h1{
    text-align: center;
    font-size: 30px;
    font-weight: 600;
    margin-top: 25px;
    margin-bottom: 25px;
}
  </style>
</head>
<body>
<h1>Tambah data barang</h1>
<div class="container">
  <form action="crud.php" method="post">
    <div class="form-group">
      <label for="kode">Kode Barang</label>
      <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Barang">
      <label for="nama">Nama Barang</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
    </div>
    <div class="form-group">
      <label for="harga">Harga Barang</label>
      <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Barang">
    </div>
    <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
  </form>
</div>
<!--edit barang dengan modal -->
<div class="editbarang">
  <div class="modal fade" id="editbarang" tabindex="-1" role="dialog" aria-labelledby="editbarang" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editbarang">Edit Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="crud.php" method="post">
            <div class="form-group">
              <label for="kode">Kode Barang</label>
              <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Barang">
              <label for="nama">Nama Barang</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
              <label for="harga">Harga Barang</label>
              <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Barang">
              <button type="submit" class="btn btn-primary" name="edit">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
<!-- koneksi ke database -->
<?php
include('koneksi.php');
include('proses_crud.php');
?>
<!-- tabel barang -->
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql="SELECT * FROM barang";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row['kode_barang']; ?></td>
        <td><?php echo $row['nama_barang']; ?></td>
        <td><?php echo $row['harga']; ?></td>
        <td>
          <a href="crud.php?hapus=<?php echo $row['kode_barang']; ?>" class="btn btn-danger">Hapus</a>
          <a href="crud.php?edit=<?php echo $row['kode_barang']; ?>" class="btn btn-primary" data-toggle="modal" data-target="#editbarang">Edit</a>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</html>