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
		<h1>CRUD Tambah Data barang</h1>
	</div>

	<div class="col-md-9 ml-5">
		<div class="container">
			<h3>Tambah Stok Barang</h3>

			<?php echo form_open('barang/tambah') ?>
			<div class="form-group">
				<label>Kode Barang</label>
				<input type="text" name="kode_barang" class="form-control" placeholder="masukan kode barang">
			</div>
			<div class="form-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_barang" class="form-control" placeholder="masukan nama barang">
			</div>
			<div class="form-group">
				<label>Jumlah</label>
				<input type="number" name="jumlah" class="form-control" placeholder="masukan jumlah barang">
			</div>
			<div class="form-group">
				<label>Tanggal</label>
				<input type="date" name="tanggal" class="form-control" placeholder="masukan no. telp">
			</div>
			<button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
			<a class="btn btn-success" href="<?php echo base_url().'barang' ?>">Kembali</a>
			</form>
		</div>
	</div>

</body>
</html>