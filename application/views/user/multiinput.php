<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah pemakaian barang</h1>

		<?php $tgl_input = date('Y-m-d'); ?>

      	<!-- Form edit Data barang -->
      	<form action="" method="POST" autocomplete="off">
      		<div class="input-group input-group-md">
				<input type="hidden" class="form-control datepicker" id="tgl_input" name="tgl_input" value="<?= $tgl_input ;?>" >
				<input type="text" class="form-control datepicker" id="tgl_dok" name="tgl_dok" aria-label="tanggal" aria-decribedby="sizing-addons2">
				<input type="text" class="form-control" id="no_dok" name="no_dok">
				<?= form_error('no_dok', '<small id="no_dok" class="form-text text-danger ml-2">', '</small>'); ?>
				<select class="form-control" id="departemen" name="departemen">
					<?php foreach ($bagian as $dept) : ?>
						<option value="<?= $dept['id'];?>"><?= $dept['nama_departemen'];?></option>
					<?php endforeach; ?>
			    </select>	
			    <button type="button" class="btn btn-sm btn-info">Set </button>
			</div>
				
			
			<div class="form-row">		
				<div class="form-group col-md-3">
					<label for="kode_barang">Kode Barang :</label>
					<input list="data-barang" type="text" class="form-control" id="kode_barang" name="kode_barang" onchange="return autofill()">
					<?= form_error('kode_barang', '<small id="kode_barang" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-3">
					<label for="nama_barang">Nama Barang :</label>
					<input type="text" class="form-control" id="nama_barang" name="nama_barang[]" readonly>
					<?= form_error('nama_barang', '<small id="nama_barang" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md">
					<label for="stok">Tersedia :</label>
					<input type="text" class="form-control" id="stok" name="stok[]" readonly>
					<?= form_error('stok', '<small id="stok" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md">
					<label for="qty">Quatity :</label>
					<input type="text" class="form-control" id="qty" name="qty[]">
					<?= form_error('qty', '<small id="qty" class="form-text text-danger ml-2">', '</small>'); ?>
				</div>
				<div class="form-group col-md-2">
					<label for="satuan">Satuan :</label>
					<select class="form-control" id="satuan" name="satuan[]">
						<?php foreach ($satuan as $sat) : ?>
							<option value="<?= $sat['satuan'];?>"><?= $sat['satuan'];?></option>
						<?php endforeach; ?>
				    </select>
				</div>
				<div class="form-group col-md">
					<label for="">&nbsp;</label>
					<button type="button" id="btn-tambah-form" class="form-control btn btn-sm btn-success"><i class="fas fa-fw fa-plus"></i> Data</button> 
				</div>
				
      		</div>


      		<div class="form-row" id="insert-multi">
      			
      		</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary" name="Tambahdatamaster">Simpan</button>
			</div>
		</form>
		
		<datalist id="data-barang">
			<?php foreach ($dtbrg as $key ) : ?>					
					<option value="<?= $key['kode_barang']; ?>"><?= $key['nama_barang']; ?></option>
			<?php endforeach ; ?>
		</datalist>
		<input type="hidden" id="jumlah-form" value="1">
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
			});

			$('#btn-tambah-form').click(function(){
				var jumlah = parseInt($("#jumlah-form").val());
				var nextform = jumlah + 1;

				$("#insert-multi").append("<div class='form-group col-md-3'><label for='kode_barang'>Kode Barang :</label><input list='data-barang' type='text' class='form-control' id='kode_barang' name='kode_barang' onchange='return autofill()'></div>" + 
				"<div class='form-group col-md-3'><label for='nama_barang'>Nama Barang :</label><input type='text' class='form-control' id='nama_barang' name='nama_barang[]' readonly></div>" 
				// <div class="form-group col-md">
				// 	<label for="stok">Tersedia :</label>
				// 	<input type="text" class="form-control" id="stok" name="stok" readonly>
				// 	<?= form_error('stok', '<small id="stok" class="form-text text-danger ml-2">', '</small>'); ?>
				// </div>
				// <div class="form-group col-md">
				// 	<label for="qty">Quatity :</label>
				// 	<input type="text" class="form-control" id="qty" name="qty">
				// 	<?= form_error('qty', '<small id="qty" class="form-text text-danger ml-2">', '</small>'); ?>
				// </div>
				// <div class="form-group col-md-2">
				// 	<label for="satuan">Satuan :</label>
				// 	<select class="form-control" id="satuan" name="satuan">
				// 		<?php foreach ($satuan as $sat) : ?>
				// 			<option value="<?= $sat['satuan'];?>"><?= $sat['satuan'];?></option>
				// 		<?php endforeach; ?>
				//     </select>
				// </div>"
				)
			});
		</script>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->