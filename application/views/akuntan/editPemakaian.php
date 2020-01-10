<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit pemakaian barang</h1>

		<?php $tgl = time(); ?>

      	<!-- Form edit Data barang -->
      	<form action="" method="POST" name="autoSumForm" autocomplete="off">
      		<div class="form-row">
				<input type="hidden" class="form-control datepicker" id="tgl_input" name="tgl_input" value="<?= $dataPemakaian['tgl_input'] ;?>" >
				<input type="hidden" class="form-control" id="tgl_update" name="tgl_update" value="<?= $tgl ;?>" >
				<input type="hidden" class="form-control" id="id" name="id" value="<?= $dataPemakaian['id'] ;?>" >
				<input type="hidden" class="form-control" id="id" name="keterangan" value="<?= $dataPemakaian['keterangan'] ;?>" >
      			<div class="form-group col-md-2">
      				
      				<label for="no_dok">Tanggal :</label>
					<input type="text" class="form-control datepicker" id="tgl_dok" name="tgl_dok" value="<?= $dataPemakaian['tgl_dok'] ;?>">
					<?= form_error('tgl_dok', '<small id="tgl_dok" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				
				<div class="form-group col-md-3">
					<label for="no_dok">NO Dokumen :</label>
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" id="no_dok" name="no_dok" value="<?= $dataPemakaian['no_dok'] ;?>">
					<?= form_error('no_dok', '<small id="no_dok" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
			</div>
			<div class="form-row">		
				<div class="form-group col-md-2">
					<label for="kode_barang">Kode Barang :</label>
					<input list="data-barang" type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?= $dataPemakaian['kode_barang'] ;?>" readonly>
					<?= form_error('kode_barang', '<small id="kode_barang" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-4">
					<label for="nama_barang">Nama Barang :</label>
					<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $dataPemakaian['nama_barang'] ;?>" readonly>
					<?= form_error('nama_barang', '<small id="nama_barang" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-2">
					<label for="qty">Quatity :</label>
					<input type="text" class="form-control" id="qty" name="qty" onfocus="startCalc();" onBlur="stopCalc();" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?= $dataPemakaian['qty'] ;?>" readonly>
					<?= form_error('qty', '<small id="qty" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
      		</div>

      		<div class="form-row">
      			<div class="form-group col-md-8">
      				<label for="ket_barang">Keterangan : <small>(optional *Lain-lain)</small></label>
      				<input type="text" class="form-control" id="ket_barang" name="ket_barang" value="<?= $dataPemakaian['ket_barang'] ;?>">
      			</div>
      		</div>


      		<div class="form-row">
      			
				<div class="form-group col-md-3">
					<label for="departemen">Bagian :</label>
					<select class="form-control" id="departemen" name="departemen">
						<?php foreach ($departemen as $dept) : ?>
							<?php if ($dept['nama_departemen'] == $dataPemakaian['departemen']) : ?>
							<option value="<?= $dept['nama_departemen'];?>" selected><?= $dept['nama_departemen'];?></option>
							<?php else : ?>
								<option value="<?= $dept['nama_departemen'];?>"><?= $dept['nama_departemen'];?></option>
							<?php endif; ?>
						<?php endforeach; ?>
				    </select>
				</div>
				
				<div class="form-group col-md-2">
					<label for="satuan">Satuan :</label>
					<select class="form-control" id="satuan" name="satuan">
						<?php foreach ($satuan as $sat) : ?>
							<?php if ($sat['satuan'] == $dataPemakaian['satuan']): ?>
								<option value="<?= $sat['satuan'];?>" selected><?= $sat['satuan'];?></option>
								<?php else : ?>
									<option value="<?= $sat['satuan'];?>"><?= $sat['satuan'];?></option>
							<?php endif ?>
						<?php endforeach; ?>
				    </select>
				</div>
				<div class="form-group col-md-3">
					<label for="hrg_satuan">Harga Satuan :</label>
					<input type="text" class="form-control" id="hrg_satuan" name="hrg_satuan" onfocus="startCalc();" onBlur="stopCalc();" value="<?= $dataPemakaian['hrg_satuan'] ?>">
					<?= form_error('hrg_satuan', '<small id="hrg_satuan" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-4">
					<label for="jumlah">Jumlah :</label>
					<input type="text" class="form-control" id="jumlah" name="jumlah" onfocus="startCalc();" onBlur="stopCalc();" value="<?= $dataPemakaian['jumlah'] ?>" readonly>
					<?= form_error('jumlah', '<small id="jumlah" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
      			
      		</div>
			<div class="modal-footer">
				<a href="<?= base_url('akuntansi/pemakaian');?>" class="btn btn-sm btn-secondary">Batal</a>
				<button type="submit" class="btn btn-primary btn-sm" name="SimpanUbahPemakaian">Simpan</button>
			</div>
		</form>
		<!-- <datalist id="data-barang">
			<?php foreach ($dtbrg as $key ) : ?>					
					<option value="<?= $key['kode_barang']; ?>"><?= $key['nama_barang']; ?></option>
			<?php endforeach ; ?>
		</datalist> -->
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			function startCalc(){
					interval = setInterval("calc()",1);
				}

				function calc(){
					one = document.autoSumForm.qty.value;
					sua = document.autoSumForm.hrg_satuan.value;
					document.autoSumForm.jumlah.value = (one*1)*(sua*1);
				}

				function stopCalc(){
					clearInterval(interval);
				}

			$(function(){
				$(".datepicker").datepicker({
			        format: 'yyyy-mm-dd',
					autoclose: true,
					todayHighlight: true,						
				});
			})
		</script>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->