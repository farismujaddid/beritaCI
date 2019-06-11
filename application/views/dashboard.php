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
	<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"><strong>Tambah </strong> Berita <span></span></h4>
                <div class="form">
                <form enctype="multipart/form-data" action="<?php echo base_url().'index.php/welcome/inputdata'?>" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Masukan judul Anda" name="judul" class="txt">
                    <textarea type="text" required="" placeholder="Masukan isi berita Anda" name="isi" class="txt"></textarea>
                    <label><input type="file" required="" placeholder="Masukkan gambar Anda" name="gambar" class="txt"></label>
                    <input type="datetime" readonly="" value="<?php echo date('Y-m-d H:i:s');?>" placeholder="Masukkan tanggal Anda" name="tgl" class="txt">
                     <input type="text" required="" placeholder="Masukkan kategori Anda" name="kategori" class="txt">
                     <input type="submit" value="submit" name="submit" class="txt2">
                </form>
            </div>
            </div>
            </div>
	</div>
</div>
 </form>
 	<!-- <form enctype="multipart/form-data" method="post" action="<?php echo base_url().'index.php/welcome/inputdata'?>">
 	Judul: 
 	<input type="text" name="judul"><br>
 	Isi Berita: 
 	<input type="text" name="isi"><br>
 	Gambar: 
 	<input type="file" name="gambar"><br>
 	Tanggal: 
 	<input type="date" name="tgl"><br>
 	Kategori: 
 	<input type="text" name="kategori"><br>
 	<button type="submit">Simpan</button> -->
 </form>
</body>
</html>