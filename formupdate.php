<?php
	include("config.php");
	if(isset($_POST['id'])){
		
	}
	$id=$_GET['id'];

	$sql = "SELECT * FROM produk WHERE id = $id";
	$query = mysqli_query($db, $sql);

	if(mysqli_num_rows($query) < 1){
		die("data tidak ditemukan");
	}

	$produk = mysqli_fetch_array($query);
?>
<html>
	<head>
		<title>Edit</title>
	</head>
	<body>
		<header>
			<h4>Edit Siswa</h4>
		</header>
		<form action="update.php?id=<?php echo $id; ?>" method="POST">
		<p>
			<label for="nama">Nama Produk : </label>
			<input type="text" name="nama" placeholder="Nama Produk" value="<?php echo $produk['nama_produk']; ?>" />
		</p>
		<p>
			<label for="keterangan">Keterangan : </label>
			<input type="text" name="keterangan" placeholder="Keterangan" value="<?php echo $produk['keterangan']; ?>" />
		</p>
		<p>
			<label for="harga">Harga : </label>
			<input type="text" name="harga" placeholder="Harga" value="<?php echo $produk['harga']; ?>" />
		</p>
		<p>
			<label for="jumlah">Jumlah : </label>
			<input type="text" name="jumlah" placeholder="Jumlah"  value="<?php echo $produk['jumlah']; ?>"/>
		</p>
		<p>
			<input type="submit" value="Save" name="daftar" href="view.php" />
		</p>
		</form>
	</body>