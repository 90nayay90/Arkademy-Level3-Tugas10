<?php
// koneksi
include_once("config.php");
 
// id primary key utk di delete
$id = $_GET['id'];
 
// fungsi DELETE
$result = mysqli_query($db, "DELETE FROM produk WHERE id=$id");
 
// agar tetap di index
header("Location:view.php");
?>
