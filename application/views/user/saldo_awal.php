<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Stok Awal</h1>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	   <?php 
    	if ($this->session->flashdata('flash')) : ?>
    		<div class="alert alert-success" role="alert">
  				Data Berhasil <strong><?= $this->session->flashdata('flash') ?></strong>
			</div>
    	<?php endif; ?>

      	<div class="card">
		  	<div class="card-body">
				<nav class="navbar justify-content-between">
					<div>
					  <a href="<?= base_url('user/input_barang'); ?>" class="btn btn-success btn-sm"><i class="fas fa-fw fa-plus"></i> Tambah Barang</a>
					</div>
				</nav>

				<table class="table table-hover table-bordered">
				  <thead>
				    <tr>
					    <th scope="col">No</th>				  
					    <th scope="col">Kode Barang</th>
					    <th scope="col">Nama Barang</th>	
					    <th scope="col">Qty</th>
						<th scope="col">Satuan</th>
						<th scope="col">Kategori</th>

				      

				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  		$no = 1;
				  		foreach ($hasil as $saldoawal) : 
				  	?>
				  	<tr>
				      <th scope="row"><?= $no; ?></th>
				 
				      
				      <td><?= $saldoawal['kode_barang'] ?></td>
				      <td><?= $saldoawal['nama_barang'] ?></td>
				      <td><?= $saldoawal['qty'] ?></td>
				      <td><?= $saldoawal['satuan'] ?></td>
				      <td><?= $saldoawal['kategori'] ?></td>

				      <!-- <td>
				      	<a href="<?= base_url('Admin/edit_dataMasterBarang'); ?>/<?= $dm->id ?>"><span class="badge badge-primary"><i class="fas fa-fw fa-pen"></i>Edit</span> </a>
				      	<a href="<?= base_url('Admin/delete_dataMasterBarang'); ?>/<?= $dm->id ?>" onclick="return confirm('Data akan dihapus ??');"><span class="badge badge-danger"><i class="fas fa-fw fa-trash-alt"></i> Delete</span> </a>
				      </td> -->
				    </tr>


				  <?php 
				  	$no++;
					endforeach; ?>
				  				    
				  </tbody>
				</table>
				
			</div>		
		</div>




































</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

      
