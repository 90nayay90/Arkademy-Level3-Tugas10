<html>
	<head>
		<title>Insert Produk</title>
	</head>
	<body>
		<header>
			<h4>Form Tambah</h4>
		</header>
		<form action="insert.php" method="POST">
		<p>
			<label for="nama">Nama Produk : </label>
			<input type="text" placeholder="Nama Produk" name="nama" />
		</p>
		<p>
			<label for="kelas">Keterangan :</label>
			<input type="text" name="keterangan" placeholder="Keterangan"/>
		</p>
		<p>
			<label for="notelp">Harga :</label>
			<input type="text" name="harga" placeholder="Harga"/>
		</p>
		<p>
			<label for="jurusan">Jumlah :</label>
			<input type="text" name="jumlah" placeholder="Jumlah"/>
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		</form>
	</body>
</html>