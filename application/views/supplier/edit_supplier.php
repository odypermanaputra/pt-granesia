<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Supplier</h1>

	<!-- Form edit Data barang -->
	<form action="" method="POST">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<input type="hidden" name="id" value="<?= $supplier['Id']; ?>">
				<label for="supplier">Supplier</label>
				<input type="text" class="form-control form-control-sm" id="supplier" name="supplier" value="<?= $supplier['supplier']; ?>">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="<?= $supplier['alamat']; ?>">
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group ">
						<label for="kota">Kota</label>
						<input type="text" class="form-control form-control-sm " id="kota" name="kota" value="<?= $supplier['kota']; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group ">
						<label for="kodepos">Kode Pos</label>
						<input type="text" class="form-control form-control-sm " id="kodepos" name="kodepos" value="<?= $supplier['kodepos']; ?>">
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="telp">Telepon</label>
				<input type="text" class="form-control form-control-sm" id="telp" name="telp" value="<?= $supplier['telp']; ?>">
			</div>
			<div class="form-group">
				<label for="fax">Fax</label>
				<input type="text" class="form-control form-control-sm" id="fax" name="fax" value="<?= $supplier['fax']; ?>">
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= $supplier['email']; ?>">
			</div>
		</div>
	</div>
		
		

		<div class="modal-footer">
			<a class="btn btn-secondary" href="<?= base_url('admin/supplier') ;?>">Batal</a>
			<button type="submit" class="btn btn-primary">Ubah</button>
		</div>
	</form>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->