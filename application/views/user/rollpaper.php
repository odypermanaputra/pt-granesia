<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahkertasroll">Tambah Kertas
        Roll</button>


    <table class="table table-bordered table-hover table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Kode Roll</th>
                <th scope="col">Jenis kertas</th>
                <th scope="col">Quantity (Berat) **(kg) </th>
                <th scope="col">Sisa <span>(kg)</span></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($rollpaper as $rp) :
                ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td scope="row"><?= date('d M Y', strtotime($rp['tgl_masuk'])) ?></td>
                <td class="text-uppercase "><?= $rp['kode_roll'] ?></td>
                <td class="text-capitalize"><?= $rp['jenis_kertas'] ?></td>
                <td><?= $rp['weight'] ?></td>
                <td><?= $rp['sisa'] ?></td>
            </tr>
            <?php
            endforeach;
            ?>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="tambahkertasroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Kertas Roll</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('user/rollpaper') ?>" method="POST">
                        <input type="text" value="<?= $user['name'] ?>" name="username" hidden>
                        <input type="text" value="<?= date('Y-m-d'); ?>" name="tgl_input" hidden>
                        <div class="form-group row">
                            <label for="tgl_masuk" class="col-sm-4 col-form-label">Tanggal Masuk</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm text-uppercase datepicker"
                                    id="tgl_masuk" name="tgl_masuk" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_dokumen" class="col-sm-4 col-form-label">No Dokumen</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm text-uppercase" id="no_dokumen"
                                    name="no_dokumen" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_roll" class="col-sm-4 col-form-label">Kode Roll</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm text-uppercase" id="kode_roll"
                                    name="kode_roll" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_kertas" class="col-sm-4 col-form-label">Jenis Kertas</label>
                            <div class="col-sm-8">
                                <select name="jenis_kertas" id="jenis_kertas" class="form-control form-control-sm">
                                    <?php
                                    foreach ($jeniskertas as $jk) : ?>
                                    <option value="<?= $jk['id_jkertasroll']; ?>">
                                        <?= $jk['jenis_kertas'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="weight" class="col-sm-4 col-form-label">Quantity (Berat)</label>
                            <div class="col-sm-8">
                                <input type="decimal" class="form-control form-control-sm" id="weight" name="weight"
                                    autocomplete="off" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->