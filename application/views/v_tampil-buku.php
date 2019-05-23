<!DOCTYPE html>
<html>
<head>
	<title>Form Input Tambah Buku Perpustakaan</title>
</head>
<body>
	<center><h1>Data Buku Perpustakaan mahasiswa</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr> 
			<th width="70">id</th>
			<th width="170">nama_buku</th>
			<th width="200">penulis</th>
			<th width="150">penerbit</th>
			<th width="130">kategori</th>
			<th width="140" colspan="2">Aksi</Th>	
		</tr>
		<?php $no = 1;
		foreach($data_anggota as $u){
			?>
			<tr>
				<td><center><?php echo $no++ ?></center></td>
				<td><center><?php echo $u->nama_buku?></center></td>
				<td><center><?php echo $u->penulis ?></center></td>
				<td><center><?php echo $u->penerbit ?></center></td>
				<td><center><?php echo $u->kategori ?></center></td>
				<td><center>
					<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>	
				</center></td>
				<td><center>
					<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
				</center></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>