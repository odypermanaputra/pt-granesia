<!-- Begin Page Content -->
<div class="container-fluid">

 <h5 class="h5 mb-4 text-gray-800"><?= $judul  ?></h5>


	<?php if (empty($pesanan)) : ?>
		
		<div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Pesanan Kosong</p>
            <p class="text-gray-500 mb-0">Tidak ada item pesanan yang di isi...</p>
            <a href="<?= base_url('akuntansi/pemesanan')  ?>">&larr; Back to Dashboard</a>
          </div>
	<?php 	else : ?>

<form>
    	<div class="row">
    		<div class="col-sm-6">
    			<div class="form-group row">
				    <label for="no_po" class="col-sm-3 col-form-label">Nomor PO</label>
				    <div class="col-sm-9">
				      <input type="text" readonly class="form-control-plaintext text-uppercase" id="no_po" value=": <?= $pesanan[0]["nopo"]; ?>">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="supplier" class="col-sm-3 col-form-label">Supplier</label>
				    <div class="col-sm-9">
				      <input  type="text" readonly class="form-control-plaintext text-uppercase" id="supplier" placeholder="Password" value=": <?= $pesanan[0]["kepada"]; ?>">
				    </div>
				  </div>
    		</div>
    		<div class="col-sm-6">
    			<div class="form-group row">
				    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
				    <div class="col-sm-9">
				      <input type="text" readonly class="form-control-plaintext text-uppercase" id="alamat" value=": <?= $pesanan[0]["alamat"]; ?>">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="tgl_po" class="col-sm-3 col-form-label">Tanggal PO</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control-plaintext" id="tgl_po" value=": <?= (date("d-m-Y",$pesanan[0]["date_created"])); ?>">
				    </div>
				  </div>
    		</div>
    	</div>
	  
	</form>
	
    
    <table class="table table-hover table-striped table-responsive-sm table-primary text-dark" id="tblpemesanan">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Kode Barang</th>
	      <th scope="col">Nama Barang</th>
	      <th scope="col" class="text-right">Qty</th>
	      <th scope="col">Satuan</th>
	      <th scope="col" class="text-right">(Rp)&nbsp;&nbsp;&nbsp;Harga</th>
	      <th scope="col" class="text-right">(Rp)&nbsp;&nbsp;&nbsp;Jumlah</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  	
	  		$no = 1;
	  		foreach ($pesanan as $psn) : 
	  			$hargaestimasi = number_format($psn['estimasiharga'],0,",",".");
	  			$hargajumlah = number_format($psn['jumlah'],0,",",".");
	  	?>
	    <tr>
	      <th scope="row"><?= $no++ ?></th>
	      <td><?= $psn['kode_barang'];?></td>
	      <td><?= $psn['nama_barang'];?></td>
	      <td class="text-right"><?= $psn['qty'];?></td>
	      <td><?= $psn['satuan'];?></td>
	      <td class="text-right"><?= $hargaestimasi;?></td>
	      <td class="text-right"><?= $hargajumlah;?></td>
		  <td>
		  	<a href="<?= base_url('akuntansi/detailpemesanan')?>/<?= $psn['Id'];?>"" class="badge badge-pill badge-sm badge-success"  id="modaledititem" data-toggle="modal" data-target="#exampleModal<?= $psn['Id'] ?>">edit</a> 
		  	<a href="<?= base_url('akuntansi/deleteitempo')?>/<?= $psn['Id'];?>" class="badge badge-pill badge-sm badge-danger">delete</a>
		  </td>
	    </tr>
		<?php endforeach; ?>
	  </tbody>
	</table>
	<div class="float-right">
		<a href="<?= base_url('akuntansi/cetakpo');?>/<?= $pesanan[0]["nopo"]; ?>" target="_blank" class="btn btn-sm btn-outline-info ">Print PO</a>
	</div>
				

    <!-- Page Heading -->
   

   
    

    

  	


<!-- modal tambah data -->
<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $psn['Id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Item Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group">
		    <label for="kode_barang">Kode Barang</label>
		    <input type="text" class="form-control" id="kode_barang" value="<?= $psn['kode_barang']  ?>">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="nama_barang">Nama Barang</label>
		    <input type="text" class="form-control" id="nama_barang" value="<?= $psn['nama_barang']  ?>">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="row">
		  	<div class="col-md-6">
		  		<div class="form-group">
				    <label for="qty">Quantity</label>
				    <input type="text" class="form-control" id="qty" value="<?= $psn['qty']  ?>">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				 </div>
		  	</div>
		  	<div class="col-md-6">
		  		<div class="form-group">
				    <label for="satuan">Satuan</label>
				    <select class="custom-select custom-select-sm" name="satuan">
				    	<?php foreach ($satuan as $sat) : ?>
					  		<option value="<?= $sat['satuan'] ?>"><?= $sat['satuan'] ?></option>
					  	<?php endforeach; ?>
					</select>
				 </div>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="col-md-6">
		  		<div class="form-group">
				    <label for="harga">Harga (Rp.)</label>
				    <input type="text" class="form-control" id="harga" value="<?= $psn['estimasiharga']  ?>">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				 </div>
		  	</div>
		  	<div class="col-md-6">
		  		<div class="form-group">
				    <label for="jumlah">jumlah</label>
				    <input type="text" class="form-control" id="jumlah" value="<?= $psn['jumlah']  ?>">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				 </div>
		  	</div>
		  </div>
		  
		  <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
		  
		</form>
      </div>
      
    </div>
  </div>
</div>
<!-- Modal -->
<?php 	endif; ?>


</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

      
