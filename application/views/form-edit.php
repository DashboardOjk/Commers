<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="body">
	<a href="<?php echo site_url('crud1/index')?>">Form Edit</a>
	<?php if($dataedit){
		$id = $dataedit->ID_content;
		$judul = $dataedit->Judul_content;
		$foto = $dataedit->foto_content;
		$isi = $dataedit->Isi_content;
		$tanggal = $dataedit->Tanggal_content;
	}else{
		$judul="";
		$foto ="";
		$isi ="";
		$tanggal ="";
	}

	 ?> 
	<form action="<?php echo site_url('crud1/update/'.$id)?>" method="POST">
		Judul<br>
		<input type="text" name="judul" value="<?php echo $judul?>" /><br>
		Foto<br>
		<input type="text" name="foto"value="<?php echo $foto?>"/><br>
		isi<br>
		<input type="text" name="isi"value="<?php echo $isi?>"/><br>
		tanggal<br>
		<input type="text" name="tanggal"value="<?php echo $tanggal?>"/><br>
		<input type="submit" name="simpan" value="simpan" />
		
		
		
	</form>
</div>	
</table>
</body>
</html>