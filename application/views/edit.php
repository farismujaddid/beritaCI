<!DOCTYPE html>
<html>
<head>
	<title> Form dalam PHP </title>
</head>
<body>
	<?php foreach ($user as $u){?>

 	<form method="post" action="<?php echo base_url().'index.php/welcome/edit_data'?>">
 	ID Berita:
 	<input type="text" name="id" value="<?php echo $u->id_berita?>" readonly=""><br>
 	Judul: 
 	<input type="text" name="judul" value="<?php echo $u->judul_berita ?>"><br>
 	Isi Berita: 
 	<input type="number" name="isi" value="<?php echo $u->isi_berita ?>"><br>
 	Gambar: 
 	<input type="file" name="gambar" value="<?php echo $u->gambar ?>"><br>
 	Tanggal: 
 	<input type="date" name="tgl" value="<?php echo $u->tgl_berita ?>"><br>
 	Kategori: 
 	<input type="number" name="kategori" value="<?php echo $u->id_kategori ?>"><br>
 	<button type="submit">Simpan</button>
 </form>
<?php } ?>
</body>
</html>