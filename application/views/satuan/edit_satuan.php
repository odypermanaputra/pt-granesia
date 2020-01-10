  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Satuan</h1>



          	<!-- Form edit Data barang -->
          	<form action="" method="POST">
			  <div class="form-group">
			  	<input type="hidden" name="id" value="<?= $satuan['id']; ?>">
			    <label for="satuan">Satuan</label>
			    <input type="text" class="form-control" id="satuan" name="satuan" value="<?= $satuan['satuan']; ?>">
			  </div>
			  
			  <div class="modal-footer">
		        <a class="btn btn-secondary" href="<?= base_url('admin/satuan') ;?>">Batal</a>
		        <button type="submit" class="btn btn-primary">Ubah</button>
		      </div>
			</form>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->