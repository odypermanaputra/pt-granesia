<!-- Begin Page Content -->
<div class="container-fluid">





    <?php $tgl_update = time(); ?>
    <div class="card">
        <div class="card-body">
            <form action="" method="POST" autocomplete="off">
                <input type="hidden" name="id" id="id" value="<?= $rollpaperbyId['id'] ?>">
                <input type="hidden" name="tgl_input" id="tgl_input" value="<?= $rollpaperbyId['tgl_input'] ?>">
                <!-- <input type="hidden" name="operator" id="tgl_input" value="<?= $rollpaperbyId['tgl_input'] ?>"> -->
                <input type="hidden" name="tgl_update" id="tgl_update" value="<?= $tgl_update ?>">
                <div class="form-group row">
                    <label for="tgl_masuk" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm datepicker" id="tgl_masuk"
                            name="tgl_masuk" value="<?= $rollpaperbyId['tgl_masuk'] ?>">
                        <?= form_error('tgl_masuk', '<small id="tgl_masuk" class="form-text text-danger ml-2">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_dokumen" class="col-sm-3 col-form-label">No Dokumen</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="no_dokumen" name="no_dokumen"
                            value="<?= $rollpaperbyId['no_dokumen'] ?>">
                        <?= form_error('no_dokumen', '<small id="no_dokumen" class="form-text text-danger ml-2">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_roll" class="col-sm-3 col-form-label">Kode Roll</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="kode_roll" name="kode_roll"
                            value="<?= $rollpaperbyId['kode_roll'] ?>">
                        <?= form_error('kode_roll', '<small id="kode_roll" class="form-text text-danger ml-2">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kertas_id" class="col-sm-3 col-form-label">Jenis Kertas</label>
                    <div class="col-sm-9">
                        <select name="jenis_kertas_id" id="jenis_kertas_id" class="form-control form-control-sm">
                            <?php foreach ($jeniskertas as $jk) : ?>
                            <?php if ($jk['id_jkertasroll'] == $rollpaperbyId['jenis_kertas_id']) : ?>
                            <option value="<?= $jk['id_jkertasroll'] ?>" selected><?= $jk['jenis_kertas'] ?></option>
                            <?php else : ?>
                            <option value="<?= $jk['id_jkertasroll'] ?>"><?= $jk['jenis_kertas'] ?></option>
                            <?php
                                endif;
                            endforeach;
                            ?>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="weight" class="col-sm-3 col-form-label">Quantity (Berat) ** (Kg)</label>
                    <div class="col-sm-9">
                        <input type="float" class="form-control form-control-sm bg-gradient-info text-white" id="weight"
                            name="weight" value="<?= $rollpaperbyId['weight'] ?>">
                        <?= form_error('weight', '<small id="weight" class="form-text text-danger ml-2">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="weight" class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="numeric " step="0.01" size="10" class="form-control form-control-sm"
                                name="harga" value="<?= $rollpaperbyId['harga'] ?>">
                        </div>
                        <?= form_error('harga', '<small id="harga" class="form-text text-danger ml-2">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary btn-sm" name="editKertasRoll">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->