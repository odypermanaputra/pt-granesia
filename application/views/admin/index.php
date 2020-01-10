<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<!-- <h5 class="h5 mb-4 text-gray-800">Master Data Barang</h5> -->

	<?= $this->session->flashdata('flash');  ?>



	<div class="card">
		<div class="card-body">
			<nav class="navbar">
				<div>
					<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Tambahdata"><i class="fas fa-fw fa-plus"></i> Tambah</button>
				</div>
			</nav>
			<table class="table table-hover table-bordered  table-responsive-sm table-striped display table-sm" id="dataTable">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Kode Barang</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($pag as $dm) :
						?>
						<tr>
							<th scope="row"><?= $no++; ?></th>
							<td><?= $dm['kode_barang'] ?></td>
							<td><?= $dm['nama_barang'] ?></td>
							<td>
								<a href="<?= base_url('Admin/edit_dataMasterBarang'); ?>/<?= $dm['id'] ?>"><span class="badge badge-primary"><i class="fas fa-fw fa-pen"></i>Edit</span> </a>
								<a href="<?= base_url('Admin/delete_dataMasterBarang'); ?>/<?= $dm['id'] ?>" class="tomboldelete"><span class="badge badge-danger"><i class="fas fa-fw fa-trash-alt"></i> Delete</span> </a>
							</td>
						</tr>

					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

<!-- modal tambah data -->
<!-- Modal -->
<div class="modal fade" id="Tambahdata" tabindex="-1" role="dialog" aria-labelledby="Tambahdata" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="Tambahdata">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="POST">
					<div class="form-group">
						<label for="kode_barang">Kode Barang</label>
						<input type="text" class="form-control" id="kode_barang" aria-describedby="kode_barang" placeholder="Kode barang" name="kode_barang" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="nama_barang">Nama Barang</label>
						<input type="text" class="form-control" id="nama_barang" placeholder="Nama barang" name="nama_barang" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="nama_barang">Kategori</label>
						<select class="form-control" id="kategori" name="kategori" autocomplete="off">
						<?php foreach($kategori as $kat) : ?>
							<option value="<?= $kat['id'] ?>"><?= $kat['kategori'] ?></option>
						<?php endforeach; ?>
						</select>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" name="Tambahdatamaster">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<!-- End of Main Content -->