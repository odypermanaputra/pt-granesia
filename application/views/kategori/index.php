<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-4 text-gray-800">Master Data Kategori</h1> -->
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
	</div>


	<div class="card">
		<div class="card-body">
			<nav class="navbar justify-content-between">
				<div>
					<button type="button" class="btn btn-success btn-sm tambahdatakat" data-toggle="modal" data-target="#Formmodal"><i class="fas fa-fw fa-plus"></i> Tambah</button>
				</div>
			</nav>

			<table class="table table-hover table-bordered table-striped table-sm table-responsive-sm">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Kategori</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					foreach ($kategori as $kat) :
						?>
						<tr>
							<th scope="row"><?= $no; ?></th>
							<td><?= $kat['kategori']; ?></td>
							<td>
								<a href="<?= base_url('kategori/edit_kategori'); ?>/<?= $kat['id']; ?>"><span class="badge badge-primary"><i class="fas fa-fw fa-pen"></i>Edit</span> </a>
								<a href="<?= base_url('kategori/delete_kategori'); ?>/<?= $kat['id']; ?>" class="tomboldelete"><span class="badge badge-danger"><i class="fas fa-fw fa-trash-alt"></i> Delete</span> </a>
							</td>
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

<!-- modal tambah data -->
<!-- Modal -->
<div class="modal fade" id="Formmodal" tabindex="-1" role="dialog" aria-labelledby="Formmodal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="Formmodaltitle">Tambah Kategori</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('kategori/tambahkategori'); ?>" method="POST">
					<div class="form-group">
						<label for="kategori">Kategori</label>
						<input type="text" class="form-control" id="kategori" aria-describedby="kategori" placeholder="Kategori" name="kategori">
						<?php echo form_error('kategori', '<small id="kategori" class="form-text text-danger ml-2">', '</small>'); ?>
					</div>
					<div class="modal-footer">
						<a href="<?= base_url('Admin/kategori'); ?>" class="btn btn-secondary">Batal</a>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>













</div>
<!-- End of Main Content -->