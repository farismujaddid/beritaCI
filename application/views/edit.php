<!DOCTYPE html>
<html>
<!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form.css">
<head>
	<title> Form dalam PHP </title>
</head>
<body>
	<?php foreach ($user as $u){?>
	<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"><strong>Edit </strong> Berita <span></span></h4>
                <div class="form">
                <form action="<?php echo base_url().'index.php/welcome/edit_data'?>" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" readonly="" value="<?php echo $u->id_berita?>" name="id" class="txt">

                    <input type="text" required="" placeholder="Masukan judul Anda" value="<?php echo $u->judul_berita ?>" name="judul" class="txt">
                    <textarea type="text" required="" placeholder="Masukan isi berita Anda" value="<?php echo $u->isi_berita ?>" name="isi" class="txt"></textarea>
                    <label><input type="file" required="" placeholder="Masukkan gambar Anda" value="<?php echo $u->gambar ?>" name="gambar" class="txt"></label>
                    <input type="date" required="" placeholder="Masukkan tanggal Anda" value="<?php echo $u->tgl_berita ?>" name="tgl" class="txt">
                     <input type="text" required="" placeholder="Masukkan kategori Anda" value="<?php echo $u->id_kategori ?>" name="kategori" class="txt">
                     <input type="submit" value="submit" name="submit" class="txt2">
                </form>
            </div>
            </div>
            </div>
	</div>
</div>
 </form>
<?php } ?>
</body>
</html>