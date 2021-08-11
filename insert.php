<?php
	include("config.php");
	if(isset($_POST['daftar'])){
		$nama = $_POST['nama'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

	$sql = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUE ('$nama', '$keterangan', $harga, $jumlah)";
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