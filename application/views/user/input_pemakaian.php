<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<?php $tgl_input = date('Y-m-d'); ?>

	<!-- Form edit Data barang -->
	<form action="" method="POST" autocomplete="off">
		<div class="row mt-1 mx-auto">
			<div class="card col-md-3">
				<h6 class="card-header">
					<?= $judul ?>
				</h6>
				<div class="card-body">
					<div class="form-group col">
						<input type="hidden" id="pakai_tgl_input" name="tgl_input" value="<?= $tgl_input; ?>">

						<label for="no_dok">Tanggal :</label>
						<input type="text" class="form-control form-control-sm datepicker" id="pakai_tgl_dok" name="tgl_dok">
						<?= form_error('tgl_dok', '<small id="pakai_tgl_dok" class="form-text text-danger ml-2">', '</small>'); ?>

						<label for="no_dok">NO Dokumen :</label>
						<input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control form-control-sm" id="pakai_no_dok" name="no_dok">
						<?= form_error('no_dok', '<small id="pakai_no_dok" class="form-text text-danger ml-2">', '</small>'); ?>


						<input type="hidden" class="form-control form-control-sm" id="pakai_username" name="pakai_username" value="<?= $user['name'] ?>">
					</div>
				</div>
			</div>
			<div class="card ml-1 col">
				<div class="card-body pb-0">
					<div class="row">
						<div class="form-group col-md-3">
							<label for="kode_barang">Kode Barang :</label>
							<input list="data-barang" type="text" class="form-control form-control-sm" id="kode_barang" name="kode_barang" onchange="return autofill()">
							<?= form_error('kode_barang', '<small id="kode_barang" class="form-text text-danger ml-2">', '</small>'); ?>
						</div>
						<div class="form-group col-md-6">
							<label for="nama_barang">Nama Barang :</label>
							<input type="text" class="form-control form-control-sm bg-gradient-info text-white" id="pakai_nama_barang" name="nama_barang" readonly>
							<?= form_error('nama_barang', '<small id="nama_barang" class="form-text text-danger ml-2">', '</small>'); ?>
						</div>
						<div class="form-group col">
							<label for="stok">Tersedia :</label>
							<div class="input-group input-group-sm">
								<input type="text" class="form-control form-control-sm bg-gradient-danger text-white col-sm-5" id="pakai_stok" name="stok" readonly>
								<input type="text" class="form-control form-control-sm bg-gradient-danger text-white col-sm-7" id="pakai_satuan_stok" readonly>
							</div>

							<?= form_error('stok', '<small id="stok" class="form-text text-danger ml-2">', '</small>'); ?>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="ket_barang">Keterangan : <small>(optional *Lain-lain)</small></label>
							<input type="text" class="form-control form-control-sm" id="pakai_ket_barang" name="ket_barang">
						</div>
						<div class="form-group col-md-2">
							<label for="departemen">Bagian :</label>
							<select class="form-control form-control-sm bagian_select2" id="pakai_departemen" name="departemen">
								<?php foreach ($departemen as $dept) : ?>
									<option value="<?= $dept['nama_departemen']; ?>"><?= $dept['nama_departemen']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="qty">Quatity :</label>
							<input type="text" class="form-control form-control-sm" id="pakai_qty" name="qty" onkeypress="return event.charCode >= 48 && event.charCode <=57">
							<?= form_error('qty', '<small id="qty" class="form-text text-danger ml-2">', '</small>'); ?>
						</div>
						<div class="form-group col-md-2">
							<label for="satuan">Satuan :</label>
							<select class="form-control form-control-sm" id="pakai_satuan" name="satuan">
								<?php foreach ($satuan as $sat) : ?>
									<option value="<?= $sat['satuan']; ?>"><?= $sat['satuan']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="card-footer text-muted mt-0">
					<a href="<?= base_url('user/pemakaian')  ?>" class="btn btn-secondary btn-sm">Batal</a>
					<button type="button" class="btn btn-primary btn-sm" name="Tambahitempemakaian" id="addItemPakai">Add</button>
				</div>
			</div>
		</div>
	</form>
	<datalist id="data-barang">
		<?php foreach ($dtbrg as $key) : ?>
			<option value="<?= $key['kode_barang']; ?>"><?= $key['nama_barang']; ?></option>
		<?php endforeach; ?>
	</datalist>

	<table class="table table-bordered table-hover table-responsive-sm table-striped table-sm mt-4" id="tableItemPakai">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Kode Barang</th>
				<th scope="col">Nama Barang</th>
				<th scope="col">Qty</th>
				<th scope="col">Satuan</th>
				<th scope="col">Bagian</th>
				<th scope="col">Keterangan</th>
				<!-- <th scope="col">Operator</th> -->
			</tr>
		</thead>
		<tbody>

		</tbody>
	</table>
	<div class="text-center" id="itemkosong"> -- item barang masih kosong -- </div>
	<hr>
	<div class="form-group row justify-content-center mt-4">
		<button type="button" class="btn btn-sm btn-outline-success" id="saveAllpemakaianDatatoDatabase"><i class="fas fa-fw fa-save"></i>Save All</button>
	</div>

	<script type="text/javascript">
		function autofill() {
			var kode_barang = document.getElementById('kode_barang').value;
			$.ajax({
				url: "<?= base_url() ?>autocomplete/cari",
				data: '&kode_barang=' + kode_barang,
				success: function(data) {
					var hasil = JSON.parse(data);
					$.each(hasil, function(key, val) {
						document.getElementById('kode_barang').value = val.kode_barang;
						document.getElementById('pakai_nama_barang').value = val.nama_barang;
						document.getElementById('pakai_stok').value = val.stok;
						document.getElementById('pakai_satuan_stok').value = val.satuan;
					});
				}
			});
		}
	</script>











</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->