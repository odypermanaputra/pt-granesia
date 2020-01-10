<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">

	</div>
	<div class="card">
		<div class="card-body">
			<nav class="navbar justify-content-between">
				<div>
					<button type="button" class="btn btn-success btn-sm Formmodalviews" data-toggle="modal" data-target="#Formmodal"><i class="fas fa-fw fa-plus"></i> Tambah</button>
				</div>
			</nav>

			<table class="table table-hover table-bordered table-responsive-sm table-striped table-sm">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Bagian</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					foreach ($departemen as $dep) :
						?>
						<tr>
							<th scope="row"><?= $no; ?></th>
							<td><?= $dep['nama_departemen'] ?></td>
							<td>
								<a href="<?= base_url('departemen/edit_departemen'); ?>/<?= $dep['id']; ?>"><span class="badge badge-primary"><i class="fas fa-fw fa-pen"></i>Edit</span> </a>
								<a href="<?= base_url('departemen/delete_departemen'); ?>/<?= $dep['id']; ?>" class="tomboldelete"><span class="badge badge-danger"><i class="fas fa-fw fa-trash-alt"></i> Delete</span> </a>
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
<div class="modal fade" id="Formmodal" tabindex="-1" role="dialog" aria-labelledby="Tambahdata" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="depttitle">Tambah Departemen</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('departemen/tambahdepartemen') ?>" method="POST">
					<div class="form-group">
						<label for="departemen">Departemen</label>
						<input type="text" class="form-control" id="departemen" aria-describedby="departemen" placeholder="Departemen" name="departemen">
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