<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('flash');  ?>

    <div class="card">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="no_order" class="col-sm-5 col-form-label">No Order</label>
                            <div class="col-sm-5">
                                <input type="text" readonly
                                    class="form-control form-control-sm bg-gradient-primary text-white" id="no_order"
                                    name="no_order" value="<?= $orderbyId['no_order'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_masuk_order" class="col-sm-5 col-form-label">Tanggal Masuk Order</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control form-control-sm datepicker" id="tgl_masuk_order"
                                    name="tgl_masuk_order"
                                    value="<?= date('d M Y', strtotime($orderbyId['no_order'])) ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_pelanggan" class="col-sm-5 col-form-label">Nama Pelanggan</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control form-control-sm" id="nama_pelanggan"
                                    name="nama_pelanggan" value="<?= $orderbyId['nama_pelanggan'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_pelanggan" class="col-sm-5 col-form-label">Alamat</label>
                            <div class="col-sm-5">
                                <textarea name="alamat_pelanggan" id="alamat_pelanggan" cols="30" rows="3"
                                    class="form-control form-control-sm"><?= $orderbyId['alamat_pelanggan']  ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_pekerjaan" class="col-sm-5 col-form-label">Jenis Pekerjaan</label>
                            <div class="col-sm-5">
                                <textarea name="jenis_pekerjaan" id="jenis_pekerjaan" cols="30" rows="3"
                                    class="form-control form-control-sm"><?= $orderbyId['jenis_pekerjaan']  ?></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group card bg-gradient-warning p-2 text-white">
                            <h5>Bahan Cover</h5>
                            <div class="form-group row">
                                <label for="kode_barang_kode_barang" class="col-sm-4 col-form-label">Kode Barang</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control form-control-sm" id="kode_barang_kode_barang"
                                        name="kode_barang_kode_barang" value="<?= $orderbyId['kode_barang'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bahan_cover_nama_barang" class="col-sm-4 col-form-label">Nama Barang</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control form-control-sm" id="bahan_cover_nama_barang"
                                        name="bahan_cover_nama_barang" value="<?= $orderbyId['nama_barang'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group card bg-gradient-info p-2 text-white">
                            <h5>Spek Isi</h5>
                            <div class="form-group row">
                                <label for="mesinweb" class="col-sm-5 col-form-label">Mesin Goss</label>
                                <div class="col-sm-4">
                                    <select id="mesinweb_id" class="form-control form-control-sm" name="mesinweb_id">
                                        <?php foreach ($mesinwebs as $web) : ?>
                                        <?php if($web['idmesinweb'] == $orderbyId['mesinweb_id']) : ?>
                                        <option value="<?= $web['idmesinweb'] ?>" selected><?= $web['mesin'] ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?= $web['idmesinweb'] ?>"><?= $web['mesin'] ?>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="katern_isi" class="col-sm-5 col-form-label">Jumlah Katern</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm" id="katern_isi"
                                        name="katern_isi" value="<?= $orderbyId['katern_isi'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">


                    </div>
                    <div class="col offset-3"></div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->