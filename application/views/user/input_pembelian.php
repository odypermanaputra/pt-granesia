<div class="container-fluid">

	<!-- Page Heading -->

	<?php $tgl_input = date('Y-m-d'); ?>
	<!-- Form edit Data barang -->
	<form action="" method="POST" name="autoSumForm" autocomplete="off">
		<div class="row mt-1 mx-auto">
			<div class="card col-md-3">
				<h6 class="card-header">
					<?= $judul ?>
				</h6>
				<div class="card-body">
					<div class="form-group col">
						<input type="hidden" name="tgl_input" id="beli_tgl_input" value="<?= $tgl_input; ?>">

						<label for="tgl_dok">Tanggal :</label>

						<input type="text" class="form-control form-control-sm datepicker" id="beli_tanggal" name="tanggal">

						<label for="no_dok">NO Dokumen :</label>
						<input type="text" class="form-control form-control-sm" id="beli_no_dok" name="no_dok" onkeyup="this.value = this.value.toUpperCase();">
						<?= form_error('no_dok', '<small id="no_dok" class="form-text text-danger ml-2">', '</small>'); ?>

						<input type="hidden" class="form-control form-control-sm" id="beli_username" name="beli_username" value="<?= $user['name'] ?>">



					</div>
				</div>
			</div>
			<div class="card ml-1 col">
				<div class="card-body pb-0 ">
					<div class="row">
						<div class="form-group col-md-3">
							<label for="kode_barang">Kode Barang :</label>
							<input list="data-barang" type="text" class="form-control form-control-sm" id="kode_barang" name="kode_barang" onchange="return autofill()">
							<?= form_error('kode_barang', '<small id="kode_barang" class="form-text text-danger ml-2">', '</small>'); ?>
						</div>
						<div class="form-group col-md-6">
							<label for="nama_barang">Nama Barang :</label>
							<input type="text" class="form-control form-control-sm bg-gradient-info text-white" id="beli_nama_barang" name="nama_barang" readonly>
							<?= form_error('nama_barang', '<small id="nama_barang" class="form-text text-danger ml-2">', '</small>'); ?>
						</div>
						<div class="form-group col">
							<label for="nama_barang">Tersedia :</label>
							<div class="input-group input-group-sm">
								<input type="text" class="form-control form-control-sm bg-gradient-danger text-white" id="beli_stok" name="stok" readonly>
								<input type="text" class="form-control form-control-sm bg-gradient-danger text-white col-sm-7" id="beli_satuan_stok" readonly>
</div>
	
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="kategori">Keterangan : <small>(optional *lain-lain)</small></label>
							<input type="text" class="form-control form-control-sm" id="beli_keterangan" name="keterangan">
							<?= form_error('kategori', '<small id="kategori" class="form-text text-danger ml-2">', '</small>'); ?>
						</div>
						<div class="form-group col-md-2">
							<label for="qty">Quatity :</label>
							<input type="text" class="form-control form-control-sm" id="beli_qty" name="qty" onfocus="startCalc();" onBlur="stopCalc();" onkeypress="return event.charCode >= 48 && event.charCode <=57">
							<?= form_error('qty', '<small id="qty" class="form-text text-danger ml-2">', '</small>'); ?>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-3">
							<label for="hrg_satuan">Harga Satuan :</label>
							<div class="input-group input-group-sm mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" >Rp.</span>
								</div>
								<input type="text" class="form-control" id="beli_hrg_satuan" name="hrg_satuan" onfocus="startCalc();" onBlur="stopCalc();" onkeypress="return event.charCode >= 48 && event.charCode <=57">
								<?= form_error('hrg_satuan', '<small id="hrg_satuan" class="form-text text-danger ml-2">', '</small>'); ?>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="jumlah">Jumlah :</label>
							<div class="input-group input-group-sm mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Rp.</span>
								</div>
								<input type="text" class="form-control bg-gradient-info text-white" id="beli_jumlah" name="jumlah" onfocus="startCalc();" onBlur="stopCalc();" readonly>
								<?= form_error('jumlah', '<small id="jumlah" class="form-text text-danger ml-2">', '</small>'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer text-muted mt-0">
					<a href="<?= base_url('user'); ?>" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</a>
					<button type="button" class="btn btn-primary btn-sm" name="Tambahdatamaster" id="saveItemPembelian">Add</button>
				</div>
			</div>
		</div>
	</form>
	<datalist id="data-barang">
		<?php foreach ($dtbrg as $key) : ?>
			<option value="<?= $key['kode_barang']; ?>"><?= $key['nama_barang']; ?></option>
		<?php endforeach; ?>
	</datalist>

	<!-- tabel tampung data -->
	<table class="table table-bordered table-hover table-responsive-sm table-striped table-sm mt-4" id="tableItemPembelian">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Kode Barang</th>
				<th scope="col">Nama Barang</th>
				<th scope="col">Qty</th>
				<th scope="col">Harga Satuan</th>
				<th scope="col">Jumlah</th>
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
		<button type="button" class="btn btn-sm btn-outline-success" id="saveAllpembelianDatatoDatabase"><i class="fas fa-fw fa-save"></i>Save All</button>
	</div>




	<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></!-->
	<script type="text/javascript">
		function startCalc() {
			interval = setInterval("calc()", 1);
		}

		function calc() {
			one = document.autoSumForm.beli_qty.value;
			sua = document.autoSumForm.beli_hrg_satuan.value;
			document.autoSumForm.beli_jumlah.value = (one * 1) * (sua * 1);
		}

		function stopCalc() {
			clearInterval(interval);
		}

		function autofill() {
			var kode_barang = document.getElementById('kode_barang').value;
			$.ajax({
				url: "<?= base_url() ?>autocomplete/cari",
				data: '&kode_barang=' + kode_barang,
				success: function(data) {
					var hasil = JSON.parse(data);
					$.each(hasil, function(key, val) {
						document.getElementById('kode_barang').value = val.kode_barang;
						document.getElementById('beli_nama_barang').value = val.nama_barang;
						document.getElementById('beli_stok').value = val.stok;
						document.getElementById('beli_satuan_stok').value = val.satuan;

					});
				}
			});
		}
	</script>

</div>

</div>
<!-- /.container-fluid -->

<!-- </div> -->
<!-- End of Main Content -->