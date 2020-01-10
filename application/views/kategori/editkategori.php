  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Kategori</h1>



          	<!-- Form edit Data barang -->
          	<form action="" method="POST">
			  <div class="form-group">
			  	<input type="hidden" name="id" value="<?= $kategori['id']; ?>">
			    <label for="kategori">Kategori</label>
			    <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $kategori['kategori']; ?>">
			  </div>
			  
			  <div class="modal-footer">
		        <a class="btn btn-secondary" href="<?= base_url('admin/kategori') ;?>">Batal</a>
		        <button type="submit" class="btn btn-primary">Ubah</button>
		      </div>
			</form>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->