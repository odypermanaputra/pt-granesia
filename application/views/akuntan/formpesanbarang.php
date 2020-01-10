<!-- Begin Page Content -->
<div class="container-fluid">


	<!-- Page Heading -->

	<div class="row">
		<div class="col-md-6">
			<h5 class="h5 mb-2 text-gray-800">Form Pemesanan Barang</h5>
			<form method="POST">
				<div class="form-group row">
					<label for="nomorpemesanan" class="col-sm-3 col-form-label">No P.O.</label>
					<div class="col-sm-8 col-md-6 col-lg-8">
						<input type="text" class="form-control form-control-sm" id="nomorpemesanan" style="text-transform: uppercase" value="<?= set_value('nomorpemesanan'); ?>" autofocus required autocomplete="off">
					</div>
				</div>
				<div class="form-group row">
					<input type="hidden" id="date_created" value="<?= time() ?>">
					<label for="kepada" class="col-sm-3 col-form-label">Kepada</label>
					<div class="col-sm-8 col-md-6 col-lg-8">
						<input list="data-supplier" type="text" name="kepada" class="form-control form-control-sm text-uppercase" id="kepada" onchange="return autofillsupplier()">
					</div>
				</div>
				<datalist id="data-supplier">
					<?php foreach ($supplier as $key) : ?>
						<option value="<?= $key['supplier']; ?>"><?= $key['supplier']; ?></option>
					<?php endforeach; ?>
				</datalist>
				<div class="form-group row">
					<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
					<div class="col-sm-8 col-md-6 col-lg-8">
						<textarea class="form-control form-control-sm" rows="4" id="alamat"></textarea>
					</div>
					<input type="hidden" name="kota" id="kota" value="">
				</div>
				<p>Keterangan tambahan :</p>


				<div class="card bg-info text-white mr-5 mb-3">
					<div class="card-body">

						<div class="form-group row">
							<label for="jangkawaktu" class="col-sm-6 col-form-label">Waktu</label>
							<div class="input-group col-sm-6">
								<input type="text" class="form-control form-control-sm " name="jangkawaktu" id="jangkawaktu">
								<div class="input-group-append">
									<select class="form-control form-control-sm" id="lama">
										<option value="hari">Hari</option>
										<option value="minggu">Minggu</option>
										<option value="bulan">Bulan</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="ppn" class="col-sm-6 col-form-label">Sudah Termasuk PPn ?</label>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ppn" id="ppn" value="y">
									<label class="form-check-label" for="ppn">
										Ya
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ppn" id="ppn" value="t">
									<label class="form-check-label" for="ppn">
										Tidak
									</label>
								</div>
							</div>
						</div>


					</div>
				</div>





				<div class="form-group row">
					<button type="button" class="btn btn-sm btn-warning" id="saveprimarypesanan"><i class="fas fa-fw fa-check"></i> Save</button>
				</div>
				<div id="erroraffected">
				</div>
			</form>

		</div>

		<div class="col-md-6 d-none" id="carditem">
			<div class="card">
				<div class="card-header ">
					Item Barang
				</div>
				<div class="card-body">
					<form method="post" id="formInputItemBarang">
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="kode_barang">Kode Barang :</label>
									<input list="data-barang" type="text" class="form-control form-control-sm" name="kode_barang" id="kode_barang" placeholder="Kode barang" required autocomplete="off" onchange="return autofillpesan()">
								</div>
							</div>
							<div class="col-sm-8">
								<div class="form-group">
									<label for="nama_barang">Nama Barang :</label>
									<input type="text" class="form-control form-control-sm" name="nama_barang" id="nama_barang" placeholder="Nama Barang" required autocomplete="off">
								</div>
							</div>
						</div>

						<!-- ISI -->
						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
									<label for="isi">Isi :</label>
									<input type="number" class="form-control form-control-sm" name="isi" id="isi" placeholder="Kuantitas" autocomplete="off" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="satuanisi">Satuan :</label>
									<select class="form-control form-control-sm" id="satuanisi" name="satuanisi">
										<?php foreach ($satuan as $sat) : ?>
											<option value="<?= $sat['satuan']; ?>"><?= $sat['satuan']; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
						<!-- Akir isi -->

						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
									<label for="kuantiti">Banyaknya :</label>
									<input type="number" class="form-control form-control-sm" name="kuantiti" id="kuantiti" placeholder="Kuantitas" autocomplete="off" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="satuan">Satuan :</label>
									<select class="form-control form-control-sm" id="satuan" name="satuan">
										<?php foreach ($satuan as $sat) : ?>
											<option value="<?= $sat['satuan']; ?>"><?= $sat['satuan']; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="estimasi_harga">Harga Satuan :</label>
							<input type="number" class="form-control form-control-sm" name="estimasi_harga" id="estimasi_harga" placeholder="Rp." required autocomplete="off">
						</div>
						<div class="form-group row ml-2">
							<button type="button" class="btn btn-sm btn-success" id="addItem" name="additem"><i class="fas fa-fw fa-plus"></i> Add item</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br>
	<datalist id="data-barang">
		<?php foreach ($dtbrg as $key) : ?>
			<option value="<?= $key['kode_barang']; ?>"><?= $key['nama_barang']; ?></option>
		<?php endforeach; ?>
	</datalist>



	<table class="table table-striped table-responsive-sm" id="formpesanitembarang">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Kode Barang</th>
				<th scope="col">Nama Barang</th>
				<th scope="col">Isi</th>
				<th scope="col">Satuan</th>
				<th scope="col">Kuantitas</th>
				<th scope="col">Satuan</th>
				<th scope="col">Estimasi Harga</th>
				<th scope="col">Jumlah</th>

				<!-- <th scope="col">Aksi</th> -->
			</tr>
		</thead>
		<tbody>



		</tbody>
	</table>
	<div class="text-center" id="itemkosong"> -- item barang masih kosong -- </div>
	<hr>
	<div class="form-group row justify-content-center mt-4">
		<button class="btn btn-sm btn-outline-primary" id="saveTabelDatatoDatabase"><i class="fas fa-fw fa-save"></i>Save All</button>
	</div>




</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->