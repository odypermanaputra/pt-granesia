<!--Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Pemakaian (Akuntan)</h1>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	   <!-- <?php 
    	if ($this->session->flashdata('flash')) : ?>
    		<div class="alert alert-success" role="alert">
  				Data Berhasil <strong><?= $this->session->flashdata('flash') ?></strong>
			</div>
    	<?php endif; ?> -->

      	<div class="card">
		  	<div class="card-body">
				<nav class="navbar ml-0">
					<div>
					  <a href="<?= base_url('user/input_pemakaian'); ?>" class="btn btn-success btn-sm"><i class="fas fa-fw fa-plus"></i> Tambah Pemakaian</a>
					 
					  <a href="<?= base_url('user/stb'); ?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-plus"></i> Form STB</a>
					  <!-- <a href="<?= base_url('user/addpemakaian'); ?>" class="btn btn-success btn-sm"><i class="fas fa-fw fa-plus"></i> test multiple</a> -->
					</div>
					
				</nav>

				<table class="table table-hover table-bordered table-striped table-sm table-responsive" id="dataTable" class="display">
				  <thead class="thead-dark">
				    <tr>
						<th scope="col">No</th>
						<th scope="col">No Dokumen</th>
						<th scope="col">Tanggal Dokumen</th>
						<th scope="col">Departemen</th>
						<th scope="col">Kode Barang</th>
						<th scope="col">Nama Barang</th>	
						<th scope="col">Keterangan</th>
						<th scope="col">Qty</th>
						<th scope="col">Satuan</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah</th>
						<th scope="col">Aksi</th>
						
				    </tr>
				  </thead>
				  <tbody>
					<?php						
				  		$no = 1;
				  		foreach ($pag as $pemakaian) : 				  		
				  	?>
				  	<tr>
				      <th scope="row"><?= $no++ ?></th>				      
				      <td><?= $pemakaian['no_dok'] ?></td>
				      <!-- <td><?= $pemakaian['tgl_dok'] ?></td> -->
				      <td><?= date("Y/m/d" ,strtotime($pemakaian['tgl_dok'])); ?></td>
				      <td><?= $pemakaian['departemen'] ?></td>
				      <td><?= $pemakaian['kode_barang'] ?></td>
				      <td><?= $pemakaian['nama_barang'] ?></td>	
				      <td><?= $pemakaian['ket_barang'] ?></td>			      
				      <td><?= $pemakaian['qty'] ?></td>
				      <td><?= $pemakaian['satuan'] ?></td>
				      <td><?= $pemakaian['hrg_satuan'] ?></td>
				      <td><?= $pemakaian['jumlah'] ?></td>
				      <td>
				      	<a href="<?= base_url('Akuntansi/editPemakaian'); ?>/<?= $pemakaian['id'];?>" class="badge badge-info"><i class="fas fa-fw fa-pen"></i>edit</a>
				      	<!-- <a href="<?= base_url('Akuntansi/deletePemakaian'); ?>/<?= $pemakaian['id'];?>" class="badge badge-danger" onclick="return confirm('Data akan dihapus ??');"><i class="fas fa-fw fa-trash"></i>delete</a> -->
								<a href="<?= base_url('Akuntansi/deletePemakaian'); ?>/<?= $pemakaian['id'];?>" class="badge badge-danger tomboldelete"><i class="fas fa-fw fa-trash"></i>delete</a>
				      	</td>
				    </tr>
					<?php endforeach; ?>				  				    
				  </tbody>
				</table>
				
			</div>		
		</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content