<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD DATA BARANG</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<body>

	<div class="container">
		<div class="mt-3 mb-3">
			<h3>Daftar Stok Barang</h3>
		</div>
		<div class="col-xs-4 col-xs-offset-4">
			<form action="<?php echo base_url('barang/index')?>" action="GET">
				<div class="form-group">
					<label for="cari">data yang dicari</label>
					<input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
				</div>
				<input class="btn btn-primary" type="submit" value="Cari">
			</form>
        </div>

		<a class="btn btn-primary btn-a mt-3 mb-3" href="<?php echo base_url().'barang/tambah' ?>">Tambah Data</a>

			<table class="table table-bordered">
				<tr>
					<td>No.</td>
					<td>Kode Barang</td>
					<td>Nama Barang</td>
					<td>Jumlah</td>
					<td>Tanggal</td>
					<td>Aksi</td>
				</tr>
				<?php $no=1; foreach ($record->result() as $r) { ?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $r->kode_barang ?></td>
					<td><?php echo $r->nama_barang ?></td>
					<td><?php echo $r->jumlah ?></td>
					<td><?php echo date('d M Y', strtotime($r->tanggal) ); ?></td>
					<td>
						<a class="btn btn-info btn-sm" href="<?php echo base_url().'barang/update/'.$r->kode_barang ?>">Ubah</a>
						<a class="btn btn-danger btn-sm" href="<?php echo base_url().'barang/hapus/'.$r->kode_barang ?>">Hapus</a>
					</td>
				</tr>
				<?php $no++; } ?>
			</table>
		
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>