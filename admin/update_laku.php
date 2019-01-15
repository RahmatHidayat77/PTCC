<?php 
include 'config.php';
$id=$_POST['id'];
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

mysqli_query($con, "update barang_laku set tanggal='$tanggal', nama='$nama', jumlah='$jumlah' where id='$id'");
header("location:barang_laku.php");

?>