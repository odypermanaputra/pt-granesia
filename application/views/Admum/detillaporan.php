<!-- Begin Page Content -->
<div class="container-fluid">



    <?= $this->session->flashdata('flash');  ?>

    <!-- <?php var_dump($showOrderbyID) ?> -->

    <div class="card m-0">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-sm-2">
                    <label for="no_order" class="col-form-label">No Order</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-info text-white text-uppercase" id="no_order"
                        value="<?= $showOrderbyID['no_order'] ?>">
                </div>
                <div class="form-group col-sm-3">
                    <label for="jenis_pekerjaan" class="col-form-label">Jenis Pekerjaan</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-info text-white text-capitalize"
                        id="jenis_pekerjaan" value="<?= $showOrderbyID['jenis_pekerjaan'] ?>">
                </div>
                <div class="form-group col-sm-1">
                    <label for="oplah" class="col-form-label">Oplah</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-danger text-white text-capitalize" id="oplah"
                        value="<?= $showOrderbyID['oplah'] ?>">
                </div>
                <div class="form-group col-sm-2">
                    <label for="jenis_kertas" class="col-form-label">Mesin</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-success text-white text-uppercase" id="mesin"
                        value="<?= $showOrderbyID['mesin'] ?>">
                    <input type="hidden" value="<?= $showOrderbyID['cutoff'] ?>" name="cutoff" id="cutoff">
                    <input type="hidden" value="<?= $showOrderbyID['weight_as_selongsong'] ?>"
                        name="weight_as_selongsong" id="weight_as_selongsong">
                </div>
                <div class="form-group col-sm-2">
                    <label for="jenis_kertas" class="col-form-label">Bahan Kertas Roll</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-info text-white text-uppercase"
                        id="jenis_kertas" value="<?= $showOrderbyID['jenis_kertas'] ?>">
                </div>
                <div class="form-group col-sm-1">
                    <label for="gramatur" class="col-form-label">Gramatur</label>
                    <div class="input-group input-group-sm">
                        <input type="text" readonly class="form-control bg-gradient-danger text-white text-uppercase"
                            id="gramatur" value="<?= $showOrderbyID['gramatur'] ?>">
                        <div class="input-group-append">
                            <span class="input-group-text bg-gradient-info text-white"
                                id="inputGroup-sizing-sm">gr</span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-1">
                    <label for="lebar" class="col-form-label">Lebar</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" readonly class="form-control bg-gradient-danger text-white text-uppercase"
                            id="lebar" value="<?= $showOrderbyID['lebar'] ?>">
                        <div class="input-group-append">
                            <span class="input-group-text bg-gradient-info text-white"
                                id="inputGroup-sizing-sm">cm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="card bg-light mt-2">
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="velt" class="col-sm-5 col-form-label">Velt</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control form-control-sm" id="velt" name="velt">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_cetak_web" class="col-sm-5 col-form-label">Tanggal Cetak</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control form-control-sm datepicker" id="tgl_cetak_web"
                                    name="tgl_cetak_web">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jml_plate" class="col-sm-5 col-form-label">Jumlah Plate</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control form-control-sm" id="jml_plate"
                                    name="jml_plate">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pasang_plate_web" class="col-sm-5 col-form-label">Pasang Plate</label>
                            <div id="datetimepicker" class="input-append date">
                                <input type="text">
                                <span class="add-on">
                                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                </span>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control form-control-sm jam" id="pasang_plate_web"
                                    name="pasang_plate_web">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mulai_cetak_web" class="col-sm-5 col-form-label">Mulai Cetak</label>
                            <div class="col-sm-5">
                                <input type="time" class="form-control form-control-sm" id="mulai_cetak_web"
                                    name="mulai_cetak_web">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selesai_cetak_web" class="col-sm-5 col-form-label">Selesai Cetak</label>
                            <div class="col-sm-5">
                                <input type="time" class="form-control form-control-sm" id="selesai_cetak_web"
                                    name="selesai_cetak_web">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="insit" class="col-sm-5 col-form-label">Insit</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control form-control-sm" id="insit" name="insit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="speed" class="col-sm-5 col-form-label">Speed</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control form-control-sm" id="speed" name="speed">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nomorator_web" class="col-sm-5 col-form-label">Nomorator</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control form-control-sm" id="nomorator_web"
                                    name="nomorator_web">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <label for="avel" class="col-sm-4 col-form-label">Avel</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="decimal" class="form-control form-control-sm" id="avel" name="avel">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="waste" class="col-sm-4 col-form-label">Waste</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="decimal" class="form-control form-control-sm" id="waste" name="waste">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_roll" class="col-sm-4 col-form-label">Kode Roll</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control form-control-sm" id="kode_roll" name="kode_roll">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berat_roll" class="col-sm-4 col-form-label">Berat</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="decimal" class="form-control text-uppercase" id="berat_roll"
                                    name="berat_roll">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="as_selongsong" class="col-sm-4 col-form-label">As</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="text" class="form-control form-control-sm" id="as_selongsong"
                                    name="as_selongsong">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pemakaian_roll" class="col-sm-4 col-form-label">Pemakaian</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="decimal" class="form-control form-control-sm" id="pemakaian_roll"
                                    name="pemakaian_roll">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berat_sisa_roll" class="col-sm-4 col-form-label">Sisa</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="decimal" class="form-control text-uppercase" id="berat_sisa_roll"
                                    name="berat_sisa_roll">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h4>Pemakaian Tinta</h4>
                        <div class="form-group row">
                            <label for="cyan" class="col-sm-4 col-form-label">Cyan</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="decimal" class="form-control text-uppercase" id="cyan" name="cyan">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="magenta" class="col-sm-4 col-form-label">Magenta</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="decimal" class="form-control text-uppercase" id="magenta" name="magenta">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="yellow" class="col-sm-4 col-form-label">Yellow</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="decimal" class="form-control text-uppercase" id="yellow" name="yellow">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="black" class="col-sm-4 col-form-label">Black</label>
                            <div class="input-group input-group-sm mb-3 col-sm-4">
                                <input type="decimal" class="form-control text-uppercase" id="black" name="black">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-gradient-info text-white">Kg</span>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mx-auto">
                                            <a href="<?= base_url('Admum') ?>" type="button"
                                                class="btn btn-md btn-info">Cancel</a>
                                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>


            </form>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->