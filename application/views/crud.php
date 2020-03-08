<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="body">
	<a href="<?php echo site_url('crud1/form_input')?>">Tambah</a>
	<table border="5">
		<tr>
			<td>No </td>
			<td>Judul </td>
			<td>foto </td> 
			<td>Isi </td>
			<td>tanggal</td>
			<td>Aksi</td>
		</tr>

		<?php $no=1; foreach ($hasil as $r){?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $r['Judul_content'];?></td>
			<td><?php echo $r['foto_content'];?></td>
			<td><?php echo $r['Isi_content'];?></td>
			<td><?php echo $r['Tanggal_content'];?></td>
			<td>
				<a href="<?php echo site_url('crud1/form_edit/'.$r['ID_content'])?>">Edit</a>||
				<a href="<?php echo site_url('crud1/delete/'.$r['ID_content'])?>" onclick= "return confirm('yakin mau dihapus?')">Hapus</a><br>
			</td>
		</tr>
	<?php }?>

</div>	
</table>
</body>
</html>