<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Barang</h1>
<?php
	$tgl = date('d-m-Y');
?>


      	<!-- Form Input barang -->
      	<form action="" method="POST">
      		<div class="form-row">
      			<div class="form-group ">
					<input type="hidden" class="form-control" id="tanggal" name="tanggal" value="<?= $tgl; ?>">
					<?= form_error('tanggal', '<small id="tanggal" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-2">
					<label for="kode_barang">Kode Barang :</label>
					<input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?= set_value('kode_barang'); ?>" onkeypress="">
					<?= form_error('kode_barang', '<small id="kode_barang" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-4">
					<label for="nama_barang">Nama Barang :</label>
					<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= set_value('nama_barang'); ?>">
					<?= form_error('nama_barang', '<small id="nama_barang" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-1">
					<label for="qty">Quatity :</label>
					<input type="text" class="form-control" id="qty" name="qty" value="">
					<?= form_error('qty', '<small id="qty" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-1">
					<label for="satuan">Satuan :</label>
					<select id="inputState" class="form-control" id="satuan" name="satuan">
						<?php foreach ($satuan as $sat) : ?>
				        	<option value="<?= $sat['satuan']; ?>"><?= $sat['satuan']; ?></option>
				    	<?php endforeach ?>
				     </select>
					<?= form_error('satuan', '<small id="satuan" class="form-text text-danger ml-2">', '</small>'); ?>
				</div> 
				<div class="form-group col-md-3">
					<label for="kategori">Kategori :</label>
					<select id="inputState" class="form-control" id="kategori" name="kategori">
						<?php foreach ($kategori as $kat) : ?>
				        	<option value="<?= $kat['nama']; ?>"><?= $kat['nama']; ?></option>
				    	<?php endforeach ?>
				     </select>
					<?= form_error('kategori', '<small id="kategori" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
      		</div>
			<div class="modal-footer">
				<a href="<?= base_url('user/saldo_awal') ;?>" class="btn btn-secondary" data-dismiss="modal">Batal</a>
				<button type="submit" class="btn btn-primary" name="input_barang">Simpan</button>
			</div>
		</form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->