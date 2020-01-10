<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">

    </div>

    <div class="card">
        <div class="card-body">
            <nav class="navbar justify-content-between">
                <div>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#formsupplier"><i class="fas fa-fw fa-plus"></i> Tambah</button>
                </div>
            </nav>

            <table class="table table-hover table-bordered table-striped table-sm table-responsive-sm">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col">Alamat</th>
                        <!-- <th scope="col">Kota</th> -->
                        <th scope="col">Telepon</th>
                        <th scope="col">Fax</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($supplier as $spl) :
                        ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $spl['supplier']; ?></td>
                            <td><?= $spl['alamat']; ?></td>
                            <!-- <td><?= $spl['kota']; ?></td> -->
                            <td><?= $spl['telp']; ?></td>
                            <td><?= $spl['fax']; ?></td>
                            <!-- <td><?= $spl['email']; ?></td> -->
                            <td>
                                <a href="<?= base_url('supplier/edit_supplier'); ?>/<?= $spl['Id']; ?>"><span class="badge badge-primary badge-sm"><i class="fas fa-fw fa-pen"></i>Edit</span></a>
                                <a href="<?= base_url('supplier/delete_supplier'); ?>/<?= $spl['Id'] ?>" id="tomboldeletesupplier" class="tomboldelete"><span class="badge badge-danger badge-sm"><i class="fas fa-fw fa-trash-alt"></i> Delete</span></a>
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
<div class="modal fade bd-example-modal-lg" id="formsupplier" tabindex="-1" role="dialog" aria-labelledby="formsupplier" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="Formmodaltitle">Tambah Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('supplier/tambahsupplier'); ?>" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="supplier">Nama Supplier</label>
                                <input type="text" class="form-control" id="supplier" aria-describedby="supplier" placeholder="supplier" name="supplier">
                                <?php echo form_error('supplier', '<small id="supplier" class="form-text text-danger ml-2">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="20" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="kodepos">Kode Pos</label>
                                <input type="text" class="form-control" id="kodepos" aria-describedby="kodepos" placeholder="kodepos" name="kodepos">
                                <?php echo form_error('kodepos', '<small id="kodepos" class="form-text text-danger ml-2">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" aria-describedby="kota" placeholder="kota" name="kota">
                                <?php echo form_error('kota', '<small id="kota" class="form-text text-danger ml-2">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="telp">Telepon</label>
                                <input type="text" class="form-control" id="telp" aria-describedby="telp" placeholder="telp" name="telp">
                                <?php echo form_error('telp', '<small id="telp" class="form-text text-danger ml-2">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="fax">Fax</label>
                                <input type="text" class="form-control" id="fax" aria-describedby="fax" placeholder="fax" name="fax">
                                <?php echo form_error('fax', '<small id="fax" class="form-text text-danger ml-2">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" id="email" aria-describedby="email" placeholder="email" name="email">
                                <?php echo form_error('email', '<small id="email" class="form-text text-danger ml-2">', '</small>'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <a href="<?= base_url('Admin/supplier'); ?>" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>













</div>
<!-- End of Main Content -->