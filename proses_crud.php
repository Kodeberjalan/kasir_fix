<?php
include('koneksi.php');
?>
<!--tambah data-->
<?php
if(isset($_POST['tambah'])){
  $kode=$_POST['kode'];
  $nama=$_POST['nama'];
  $harga=$_POST['harga'];
  $sql="INSERT INTO barang (kode_barang,nama_barang,harga) VALUES ('$kode','$nama','$harga')";
  if(mysqli_query($conn,$sql)){
    echo "Data berhasil ditambahkan";
  }else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
  }
}
?>

<!-- edit data -->
<?php
if(isset($_POST['edit'])){
  $kode=$_POST['kode'];
  $nama=$_POST['nama'];
  $harga=$_POST['harga'];
  $sql="UPDATE barang SET nama_barang='$nama',harga='$harga' WHERE kode_barang='$kode'";
  if(mysqli_query($conn,$sql)){
    echo "Data berhasil diubah";
  }else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
  }
}
?>
<!-- hapus data -->
<?php
if(isset($_GET['hapus'])){
  $kode=$_GET['hapus'];
  $sql="DELETE FROM barang WHERE kode_barang='$kode'";
  if(mysqli_query($conn,$sql)){
    echo "Data berhasil dihapus";
  }else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
  }
}