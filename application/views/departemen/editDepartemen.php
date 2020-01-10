  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Departemen</h1>



          	<!-- Form edit Data barang -->
          	<form action="" method="POST">
			  <div class="form-group">
			  	<input type="hidden" name="id" value="<?= $departemen['id']; ?>">
			    <label for="departemen">Departemen</label>
			    <input type="text" class="form-control" id="departemen" name="departemen" value="<?= $departemen['nama_departemen']; ?>">
			  </div>
			  
			  <div class="modal-footer">
		        <a class="btn btn-secondary" href="<?= base_url('admin/departemen') ;?>">Batal</a>
		        <button type="submit" class="btn btn-primary">Ubah</button>
		      </div>
			</form>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->