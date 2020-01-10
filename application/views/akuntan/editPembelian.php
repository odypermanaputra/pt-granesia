<div class="container-fluid">

	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-4 text-gray-800">Edit Pembelian Barang</h1> -->
	<?php $tgl_update = time(); ?>
	<?php var_dump($dataPembelian['no_dok']) ?>
	<!-- Form edit Data barang -->
	<form action="" method="POST" name="autoSumForm" autocomplete="off">

		<div class="form-row">
			<div class="form-group col-md-3">
				<input type="hidden" name="id" id="id" value="<?= $dataPembelian['id']; ?>">
				<input type="hidden" name="tgl_input" id="tgl_input" value="<?= $dataPembelian['tgl_input']; ?>">
				<input type="hidden" name="tgl_update" id="tgl_update" value="<?= $tgl_update ?>">
				<label for="tgl_dok">Tanggal :</label>
				<div class="input-group date datepicker">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-th"></span>
					</div>
					<input type="text" class="form-control datepicker" id="tanggal" name="tanggal" value="<?= $dataPembelian['tanggal'];  ?>">
				</div>
			</div>

			<div class="form-group col-md-6">
				<label for="no_dok">NO Dokumen :</label>
				<input type="text" class="form-control" id="no_dok" name="no_dok" onkeyup="this.value = this.value.toUpperCase();" value="<?= $dataPembelian['no_dok']; ?>">
				<?= form_error('no_dok', '<small id="no_dok" class="form-text text-danger ml-2">', '</small>'); ?>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="kode_barang">Kode Barang :</label>
				<input list="data-barang" type="text" class="form-control" id="kode_barang" name="kode_barang" onchange="return autofill()" value="<?= $dataPembelian['kode_barang']; ?>" readonly>
				<?= form_error('kode_barang', '<small id="kode_barang" class="form-text text-danger ml-2">', '</small>'); ?>
			</div>
			<div class="form-group col-md-4">
				<label for="nama_barang">Nama Barang :</label>
				<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $dataPembelian['nama_barang']; ?>" readonly>
				<?= form_error('nama_barang', '<small id="nama_barang" class="form-text text-danger ml-2">', '</small>'); ?>
			</div>
			<div class="form-group col-md-2">
				<label for="qty">Quatity :</label>
				<input type="text" class="form-control" id="qty" name="qty" onfocus="startCalc();" onBlur="stopCalc();" value="<?= $dataPembelian['qty']; ?>" readonly>
				<?= form_error('qty', '<small id="qty" class="form-text text-danger ml-2">', '</small>'); ?>
			</div>
			<!-- <div class="form-group col-md-2">
					<label for="kategori">Kategori :</label>
					<select class="form-control" id="kategori" name="kategori">
						<?php foreach ($kategori as $kat) :	?>
							<option value="<?= $kat['kategori']; ?>" name="kategori"><?= $kat['kategori']; ?></option>
						<?php endforeach; ?>
					</select>					
					<?= form_error('kategori', '<small id="kategori" class="form-text text-danger ml-2">', '</small>'); ?>
				</div> -->
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="kategori">Keterangan : <small>(optional *lain-lain)</small></label>
				<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $dataPembelian['keterangan']; ?>">
				<?= form_error('keterangan', '<small id="keterangan" class="form-text text-danger ml-2">', '</small>'); ?>
			</div>
		</div>


		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="hrg_satuan">Harga Satuan :</label>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">Rp.</span>
					</div>
					<input type="text" class="form-control" id="hrg_satuan" name="hrg_satuan" onfocus="startCalc();" onBlur="stopCalc();" value="<?= $dataPembelian['hrg_satuan']; ?>">
					<?= form_error('hrg_satuan', '<small id="hrg_satuan" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group col-md-4">
				<label for="jumlah">Jumlah :</label>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">Rp.</span>
					</div>
					<input type="text" class="form-control" id="jumlah" name="jumlah" onfocus="startCalc();" onBlur="stopCalc();" readonly value="<?= $dataPembelian['jumlah']; ?>">
					<?= form_error('jumlah', '<small id="jumlah" class="form-text text-danger ml-2">', '</small>'); ?>

				</div>

			</div>

		</div>
		<div class="modal-footer">
			<a href="<?= base_url('Akuntansi'); ?>" class="btn btn-secondary" data-dismiss="modal">Batal</a>
			<button type="submit" class="btn btn-primary" name="editPembelian">Simpan</button>
		</div>
	</form>


	<datalist id="data-barang">
		<?php foreach ($dtbrg as $key) : ?>
			<option value="<?= $key['kode_barang']; ?>"><?= $key['nama_barang']; ?></option>
		<?php endforeach; ?>
	</datalist>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		function startCalc() {
			interval = setInterval("calc()", 1);
		}

		function calc() {
			one = document.autoSumForm.qty.value;
			sua = document.autoSumForm.hrg_satuan.value;
			document.autoSumForm.jumlah.value = (one * 1) * (sua * 1);
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
						document.getElementById('nama_barang').value = val.nama_barang;
						document.getElementById('stok').value = val.stok;
						document.getElementById('kategori').value = val.kategori;
					});
				}
			});
		}



		//   $(function(){
		//   	$(".datepicker").datepicker({
		//         format: 'yyyy-mm-dd',
		// 		autoclose: true,
		// 		todayHighlight: true,

		// 		});
		//   })
	</script>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content