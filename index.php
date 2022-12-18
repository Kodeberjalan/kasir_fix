<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lat 3</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<style>
/* responsive form*/
.container {
  padding: 16px;
  margin-top: 5px;
  box-shadow: ;
}
h1{
    text-align: center;
    font-size: 30px;
    font-weight: 600;
    margin-top: 25px;
    margin-bottom: 25px;
}
h2{font-size: 30px;
    margin-left: 2px;
    font-weight: 600;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
  box-shadow: 0 0 5px 0 rgba(0,0,0,0.2);
}
input[type=text]:focus, input[type=password]:focus {
  background-color: white;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* button responsive */
.btn-primary{
  background-color: #EA4C89;
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: color 100ms;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  position: absolute;
  right : 45%;
  transform: translate(-50%, -50%);
  margin-top: 15px;
}

.btn-primary:hover,
.btn-primary:focus {
  background-color: #F082AC;
}

/* CSS */
.btn-danger {
  background-color: #EA3E18;
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: color 100ms;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  position: absolute;
  left: 70%;
  transform: translate(-50%, -50%);
  margin-top: 15px;
}

.btn-danger:hover,
.btn-danger:active {
    background-color: #EA3E18;
}

.btn-danger:active {
  opacity: .5;
}
.btn-danger2{
  background-color: #EA3E18;
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: color 100ms;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  position: absolute;
  left: 30%;
  transform: translate(-50%, -50%);
  margin-top: 15px;
}
.table{
    margin-top: 40px;
    margin-left: 20%;
    margin-right: 20%;
    width: 60%;
    border: 1px solid black;
    border-collapse: collapse;
    box-shadow: 0 0 10px 0 rgba(0,0,0,0.2);
}
</style>
</head>
<body>

<h1>Program Kasir PHP</h1>
<form action="index.php" method="post">
<div class="container">
        <label for="kode"><b>Kode Barang</b></label> <br>
        <input type="text" placeholder="Masukkan Kode Barang" name="kode" > <br>
        <label for="jumlah"><b>Jumlah Barang</b></label> <br>
        <input type="text" placeholder="Masukkan Jumlah Barang" name="jumlah"> <br>
        <button type="button" class="btn btn-secondary" onclick="window.location.href='crud.php'">Master Data</button>
        <!-- button tambah ke keranjang -->
        <button type="submit" class="btn btn-info" name="tambah">Tambah ke Keranjang</button>
        <!-- button bayar -->
        <button type="button" class="btn btn-warning" onclick="window.location.href='nota.php'">Bayar</button>
        <!--button hapus keranjang -->
        <button type="submit" class="btn btn-danger" name="hapus">Hapus Keranjang</button>
        <script>
        function myFunction() {
          location.reload();
        }
        </script>
    </div>
</form>


<?php
include('koneksi.php');
include('proses_kasir.php');
error_reporting(0);
?>
<!-- tampilkan tabel telasi antara tabel transaksi dengan tabel barang -->
<h1>Keranjang</h1>
<table class="table">
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM transaksi INNER JOIN barang ON transaksi.kode_barang = barang.kode_barang");
    while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $data['kode_barang']; ?></td>
        <td><?php echo $data['nama_barang']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['jumlah']; ?></td
    </tr>
    <?php
    }
    ?>
</table>
  </div>
</body>
</html>