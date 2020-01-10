<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><? $judul; ?> </h1>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
</div>
	<div class="card">
		<div class="card-body">
			<nav class="navbar justify-content-between">
				<div>
					<a href="<?= base_url('user/input_pembelian'); ?>" class="btn btn-success btn-sm"><i class="fas fa-fw fa-plus"></i> Tambah Pembelian</a>
				</div>
			</nav>
			<table class="table table-hover table-bordered table-striped table-sm table-responsive" id="dataTable">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Tanggal</th>
						<th scope="col">No Dokumen</th>
						<th scope="col">Kode Barang</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Qty</th>
						<th scope="col">Keterangan</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah</th>
						<th scope="col" class="text-center">Aksi</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($pag as $pembelian) :
						$harga = number_format($pembelian['hrg_satuan'], 0, ",", ".");
						$jumlah = number_format($pembelian['jumlah'], 0, ",", ".");
						?>
						<tr>
							<th scope="row"><?= $no++; ?></th>
							<td><?= date("Y/m/d", strtotime($pembelian['tanggal'])); ?></td>
							<td><?= $pembelian['no_dok'] ?></td>
							<td><?= $pembelian['kode_barang'] ?></td>
							<td><?= $pembelian['nama_barang'] ?></td>
							<!-- <td><?= $pembelian['kategori'] ?></td> -->
							<td><?= $pembelian['qty'] ?></td>
							<td><?= $pembelian['keterangan'] ?></td>
							<td><?= $pembelian['hrg_satuan']; ?></td>
							<td><?= $pembelian['jumlah']; ?></td>
							<td>
								<a href="<?= base_url('akuntansi/editPembelian'); ?>/<?= $pembelian['id']; ?>" class="badge badge-info"><i class="fas fa-fw fa-pen"></i>edit</a>
								<a href="<?= base_url('akuntansi/deletePembelian'); ?>/<?= $pembelian['id']; ?>" class="badge badge-danger" onclick="return confirm('Data akan dihapus ??');"><i class="fas fa-fw fa-trash"></i>delete</a>

							</td>
							<td>
								<?php if ($pembelian['verifikasi'] == 0) : ?>
									<a href="<?= base_url('Akuntansi/setverifikasi') ?>/<?= $pembelian['id']?>" class="klikverifikasi badge badge-sm badge-warning" data-toggle="tooltip" title="Klik untuk di verifikasi" data-idver="<?= $pembelian['id']?>" data-verifikasi="<?= $pembelian['verifikasi']?>" ><i class="fas fa-fw fa-minus-circle"></i> not verified</a>
								<?php else : ?>
									<a href="#" class="badge badge-sm badge-success" data-toggle="tooltip" title="Sudah Di Verifikasi"><i class="fas fa-fw fa-user-check"></i> verified</a>
								<?php endif; ?>
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
<!-- End of Main Content -->