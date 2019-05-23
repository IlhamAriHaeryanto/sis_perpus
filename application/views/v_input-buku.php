<!DOCTYPE html>
<html>
<head>
	<title>Form Input Tambah Buku Perpustakaan</title>
</head>
<body>
	<center>
	<h1>Input Buku
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto:">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>nama_buku</td>
				<td><input type="text" name="nama_buku"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td><input type="text" name="penulis"></td>
			</tr>
			<tr>
				<td>penerbit</td>
				<td><input type="numeric" name="penerbit"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="numeric" name="kategori"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>