<!-- Begin Page Content -->
<div class="container-fluid">
	<nav class="navbar mt-0">
		<!-- Page Heading -->

		<div class="justify-content-end">
			<a href="<?= base_url('akuntansi/formpemesanan') ?>" class="btn btn-success btn-sm"><i class="fas fa-fw fa-plus"></i> Tambah</a>
		</div>
	</nav>
	<h5 class="h5 mb-2 mt-3 text-gray-800">Barang yang dipesan</h5>
	<table class="table table-bordered table-responsive-sm">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Nomor Pemesanan</th>
				<th scope="col">Pemesanan Kepada</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($pag as $pemesanan) : ?>
				<tr>
					<th scope="row"><?= $no++;  ?></th>
					<td class="text-uppercase"><?= date("d M Y", $pemesanan['date_created']) ?></td>
					<td class="text-uppercase"><?= $pemesanan['nopo']; ?></td>
					<td class="text-uppercase"><?= $pemesanan['kepada']; ?></td>
					<td>
						<a href="<?= base_url('akuntansi/detailpemesanan'); ?>/<?= $pemesanan['nopo']; ?>"><span class="badge badge-success badge-sm"><i class="fas fa-fw fa-search"></i> details</span></a>
						<a href="<?= base_url('akuntansi/cetakpo'); ?>/<?= $pemesanan['nopo']; ?>" target="blank"><span class="badge badge-info badge-sm"><i class="fas fa-fw fa-print"></i> Print PO</span></a>
						<a href="<?= base_url('akuntansi/deletepo'); ?>/<?= $pemesanan['nopo']; ?>"><span class="badge badge-danger badge-sm tomboldelete"><i class="fas fa-fw fa-trash"></i> Delete</span></a></td>
				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>


</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->