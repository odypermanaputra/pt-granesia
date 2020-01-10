<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">STOK BARANG GUDANG</h1>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	<div class="card">
		<div class="card-body">
			<table class="table table-hover table-bordered table-striped table-sm" id="dataTable">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Kode Barang</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Qty</th>
						<th scope="col">Satuan</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($pag as $stok) :	?>
						<tr>
							<th scope="row"><?= $no; ?></th>
							<td><?= $stok['kode_barang'] ?></td>
							<td><?= $stok['nama_barang'] ?></td>
							<!-- <td><?= $stok['kategori'] ?></td> -->
							<td><?= $stok['stok'] ?></td>
							<td><?= $stok['satuan'] ?></td>

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