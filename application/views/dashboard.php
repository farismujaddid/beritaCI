<!DOCTYPE html>
<html>
<head>
	<title> Form dalam PHP </title>
</head>
<body>
 	<form method="post" action="<?php echo base_url().'index.php/welcome/inputdata'?>">
 	Judul: 
 	<input type="text" name="judul"><br>
 	Isi Berita: 
 	<input type="number" name="isi"><br>
 	Gambar: 
 	<input type="file" name="gambar"><br>
 	Tanggal: 
 	<input type="date" name="tgl"><br>
 	Kategori: 
 	<input type="number" name="kategori"><br>
 	<button type="submit">Simpan</button>
 </form>
</body>
</html>