<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<center>
		<h1>Edit Data Anggota Perpustakaan</h1>
	</center>
	<?php foreach($data_buku as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>id</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama-buku?>">
				</td>
			</tr>
			<tr>
				<td>Penulis</td>
					<td><input type="text" name="alamat" value="<?php echo $u->penulis ?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
					<td><input type="text" name="email" value="<?php echo $u->penerbit ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
					<td><input type="text" name="no_hp" value="<?php echo $u->no_hp ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>