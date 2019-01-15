<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($con, "DELETE FROM barang WHERE id='$id'");
header("location:barang.php");

?>