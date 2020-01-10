<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Data Barang</h1>

	<!-- Form edit Data barang -->
	<form action="" method="POST">
		<div class="form-group">
			<input type="hidden" name="id" value="<?= $databarang['id']; ?>">
			<label for="kode_barang">Kode Barang</label>
			<input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?= $databarang['kode_barang']; ?>">
		</div>
		<div class="form-group">
			<label for="nama_barang">Nama Barang</label>
			<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $databarang['nama_barang']; ?>">
		</div>
		<div class="modal-footer">
			<a class="btn btn-secondary" href="<?= base_url('admin/index'); ?>">Batal</a>
			<button type="submit" class="btn btn-primary" name="Tambahdatamaster">Ubah</button>
		</div>
	</form>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->