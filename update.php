<?php
	include("config.php");
	if(isset($_POST['daftar'])){
		$id = $_GET['id'];
		$nama = $_POST['nama'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

	$sql = "UPDATE produk SET nama_produk = '$nama', keterangan = '$keterangan', harga = $harga, jumlah = $jumlah WHERE id = '$id'";
	$query = mysqli_query($db,$sql);

	if($query){
		header('location: view.php?status=sukses');
	}else{
		header('location : view.php?status=gagal');
	}
	}else{	
	die("Akses dilarang");
	
	}
?>