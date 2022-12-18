<?php
//koneksi ke database
include('koneksi.php');

// ketika button tambah ke keranjang di tekan masukan data yang diimput ke tabel transaksi
if(isset($_POST['tambah'])){
  $kode=$_POST['kode'];
  $jumlah=$_POST['jumlah'];
  $sql="INSERT INTO transaksi (kode_barang,jumlah) VALUES ('$kode','$jumlah')";
  if(mysqli_query($conn,$sql)){
   //alert javascript
    echo "<script>alert('Barang telah ditambahkan ke keranjang')</script>";
  }else{
    //alert javascript
    echo "<script>alert('Error: ".$sql."<br>".mysqli_error($conn)."')</script>";
  }
}
?>
<!-- jika tombol hapus keranjang ditekan maka akan menghapus isi tabel transaksi-->
<?php
if(isset($_POST['hapus'])){
  $sql="DELETE FROM transaksi";
  if(mysqli_query($conn,$sql)){
    //alert javascript
    echo "<script>alert('Keranjang telah dikosongkan')</script>";
  }else{
    //alert javascript
    echo "<script>alert('Error: ".$sql."<br>".mysqli_error($conn)."')</script>";
  }
}