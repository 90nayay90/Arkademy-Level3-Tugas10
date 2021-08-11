<?php
	include ('config.php');
?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2>Daftar Siswa</h2>
		<a href="formtambah.php"> [+] New </a>
		<br><br>
		<table width="80%" border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Keterangan</th>
					<th>Harga</th>
					<th>Jumlah</th>
				</tr>
				
			</thead>
			<tbody>
				<?php
				
					$sql = "SELECT * FROM produk";
					$query = mysqli_query($db, $sql);
					$no = 0;
					while($produk = mysqli_fetch_array($query)){
						$no++ ;
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$produk['nama_produk']."</td>";
						echo "<td>".$produk['keterangan']."</td>";
						echo "<td>".$produk['harga']."</td>";
						echo "<td>".$produk['jumlah']."</td>";

						echo "<td>";
						echo "<a href='formupdate.php?id=".$produk['id']."'> Edit </a>";
						echo "<a href='delete.php?id=".$produk['id']."'> Hapus </a>";
						echo "</td>";

						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>