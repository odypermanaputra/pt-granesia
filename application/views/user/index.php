<!--Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	<!-- <?php
			if ($this->session->flashdata('flash')) : ?>
    		<div class="alert alert-success" role="alert">
  				Data Berhasil <strong><?= $this->session->flashdata('flash') ?></strong>
			</div>
    	<?php endif; ?> -->

	<div class="card">
		<div class="card-body">
			<nav class="navbar">
				<div>
					<a href="<?= base_url('user/input_pembelian'); ?>" class="btn btn-success btn-sm"><i class="fas fa-fw fa-plus"></i> Tambah Pembelian</a>
				</div>
			</nav>

			<table class="table table-hover table-bordered table-striped table-sm" id="dataTable">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Tanggal</th>
						<th scope="col">No Dokumen</th>
						<th scope="col">Kode Barang</th>
						<th scope="col" width="150">Nama Barang</th>

						<!-- <th scope="col" width="100">Kategori</th> -->
						<th scope="col">Qty</th>
						<th scope="col" width="150">Keterangan</th>
						<!-- <th scope="col">Aksi</th> -->
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($pag as $pembelian) :
						?>
						<tr>
							<th scope="row"><?= $no; ?></th>
							<td><?= date("Y/m/d", strtotime($pembelian['tanggal'])); ?></td>
							<td><?= $pembelian['no_dok'] ?></td>
							<td><?= $pembelian['kode_barang'] ?></td>
							<td><?= $pembelian['nama_barang'] ?></td>

							<!-- <td><?= $pembelian['kategori'] ?></td> -->
							<td><?= $pembelian['qty'] ?></td>
							<td><?= $pembelian['keterangan'] ?></td>
							<!-- <td>
				      	<a href="<?= base_url('user/---'); ?>/<?= $pembelian['id']; ?>" class="badge badge-info"><i class="fas fa-fw fa-pen"></i>edit</a>
				      	<a href="<?= base_url('user/---'); ?>/<?= $pembelian['id']; ?>" class="badge badge-danger"><i class="fas fa-fw fa-trash"></i>delete</a>
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
<!-- End of Main Content