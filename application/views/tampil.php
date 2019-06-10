<a href="tambah_berita">Tambah Berita</a>
<table>
	<tr>
		<th> ID</th>
		<th> Judul Berita</th>
		<th> Isi Berita</th>
		<th> Tanggal Berita</th>
		<th> Kategori</th>
		<th> Action</th>
	</tr>

<?php
$n = 1;
foreach ($user as $u) {
	?>
 	<tr>
 		<th><?php echo $u->id_berita ?></th>
 		<th><?php echo $u->judul_berita ?></th>
 		<th><?php echo $u->isi_berita ?></th>
 		<th><?php echo $u->tgl_berita ?></th>
 		<th><?php echo $u->id_kategori?></th>
 		<th><?php echo anchor('index.php/welcome/pindah_berita/'. $u->id_berita,'edit')?>
 			<?php echo anchor('index.php/welcome/hapus_berita/'. $u->id_berita,'hapus')?></th>
	</tr>
<?php } ?>
</table>