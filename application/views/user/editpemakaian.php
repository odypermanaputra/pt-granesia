<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit pemakaian barang</h1>

		

      	<!-- Form edit Data barang -->
      	<form action="" method="POST" autocomplete="off">
      		<div class="form-row">
				
				<input type="hidden" name="id" id="id" value="<?= $datapemakaian['id']; ?>">
      			<div class="form-group col-md-2">
      				
      				<label for="no_dok">Tanggal :</label>
					<input type="text" class="form-control datepicker" id="tgl_dok" name="tgl_dok" value="<?= $datapemakaian['tgl_dok']; ?>">
					<?= form_error('tgl_dok', '<small id="tgl_dok" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				
				<div class="form-group col-md-3">
					<label for="no_dok">NO Dokumen :</label>
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" id="no_dok" name="no_dok" value="<?= $datapemakaian['no_dok']; ?>">
					<?= form_error('no_dok', '<small id="no_dok" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
			</div>
			<div class="form-row">		
				<div class="form-group col-md-2">
					<label for="kode_barang">Kode Barang :</label>
					<input list="data-barang" type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?= $datapemakaian['kode_barang'] ?>" readonly >
					<?= form_error('kode_barang', '<small id="kode_barang" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-4">
					<label for="nama_barang">Nama Barang :</label>
					<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $datapemakaian['nama_barang'] ?>"readonly>
					<?= form_error('nama_barang', '<small id="nama_barang" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-2">
					<label for="qty">Quatity :</label>
					<input type="text" class="form-control" id="qty" name="qty" value="<?= $datapemakaian['qty'] ?>" readonly>
					<?= form_error('qty', '<small id="qty" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				
				
      		</div>


      		<div class="form-row">
      			
				<div class="form-group col-md-3">
					<label for="departemen">Bagian :</label>
					<select class="form-control" id="departemen" name="departemen">
						<?php foreach ($bagian as $dept) : ?>
							<?php if($dept['nama_departemen'] == $datapemakaian['departemen']) : ?>
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
							<?php if($sat['satuan'] == $datapemakaian['satuan']) : ?>
							<option value="<?= $sat['satuan'];?>" selected><?= $sat['satuan'];?></option>
							<?php else : ?>
								<option value="<?= $sat['satuan'];?>" ><?= $sat['satuan'];?></option>
							<?php endif; ?>
						<?php endforeach; ?>
				    </select>
				</div>
				
      			
      		</div>
			<div class="modal-footer">
				
				<button type="submit" class="btn btn-primary" name="Tambahdatamaster">Simpan</button>
			</div>
		</form>
		<datalist id="data-barang">
			<?php foreach ($dtbrg as $key ) : ?>					
					<option value="<?= $key['kode_barang']; ?>"><?= $key['nama_barang']; ?></option>
			<?php endforeach ; ?>
		</datalist>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			function autofill()
			{
				var kode_barang = document.getElementById('kode_barang').value;
				$.ajax({
					url: "<?= base_url()?>autocomplete/cari",
					data: '&kode_barang=' +kode_barang,
					success: function(data){
						var hasil = JSON.parse(data);
						$.each(hasil, function(key,val){
							document.getElementById('kode_barang').value=val.kode_barang;
							document.getElementById('nama_barang').value=val.nama_barang;
							document.getElementById('stok').value=val.stok;
						});
					}
				});
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