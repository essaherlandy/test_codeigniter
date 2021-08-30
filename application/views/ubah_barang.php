<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD DATA BARANG</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>dist/css/style.css">

<body>

	<div class="header">
		<h1>CRUD DATA BARANG</h1>
	</div>

	<div class="container">
		
		<h3>Ubah Data Barang</h3>

		<?php echo form_open('barang/update') ?>
		  <div class="form-group">
		    <label>Kode Barang</label>
		    <input type="text" name="kode_barang" class="form-control" value="<?php echo $record['kode_barang'] ?>" readonly="">
		  </div>
		  <div class="form-group">
		    <label>Nama Barang</label>
		    <input type="text" name="nama_barang" class="form-control" value="<?php echo $record['nama_barang'] ?>">
		  </div>
		  <div class="form-group">
		    <label>Jumlah</label>
		    <input type="number" name="jumlah" class="form-control" value="<?php echo $record['jumlah'] ?>">
		  </div>
		  <div class="form-group">
		    <label>Tanggal</label>
		    <input type="date" name="tanggal" class="form-control" value="<?php echo $record['tanggal'] ?>">
		  </div>
		  <button type="submit" name="update" class="btn btn-primary">Ubah Data</button>
		  <a class="btn btn-success" href="<?php echo base_url().'barang' ?>">Kembali</a>
		</form>
		
	</div>

</body>
</html>