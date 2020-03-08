<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="body">
	FORM TAMBAH<br>
	<a href="<?php echo site_url('crud1/index')?>">kembali</a>
	<form action="<?php echo site_url('crud1/insert')?>" method="POST">
		Judul<br>
		<input type="text" name="judul"/><br>
		Foto<br>
		<input type="text" name="foto"/><br>
		isi<br>
		<input type="text" name="isi"/><br>
		tanggal<br>
		<input type="text" name="tanggal"/><br>
		<input type="submit" name="simpan" value="simpan" />
	
		
	</form>
</div>	
</table>
</body>
</html>