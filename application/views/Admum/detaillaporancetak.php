<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('flash');  ?>
    <!-- <?php var_dump($laporan); ?> -->
    <div class="card m-0">
        <div class="card-body">
            <h5>Spek dan Detail Pekerjaan</h5>
            <div class="form-row">
                <div class="form-group col-sm-4 col-md-3">
                    <label for="no_order" class="col-form-label">No Order</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-info text-white text-uppercase" id="no_order"
                        value="<?= $laporan[0]['no_order'] ;?>">
                </div>
                <div class="form-group col-sm-8 col-md-6">
                    <label for="jenis_pekerjaan" class="col-form-label">Jenis Pekerjaan</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-info text-white text-capitalize"
                        id="jenis_pekerjaan" value="<?= htmlspecialchars($laporan[0]['jenis_pekerjaan']) ?>">
                </div>
                <div class="form-group col-sm-2 col-md-2">
                    <label for="oplah" class="col-form-label">Oplah</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-danger text-white text-capitalize" id="oplah"
                        value="<?= $laporan[0]['oplah'] ?>">
                </div>
                <div class="form-group col-sm-4 col-md-4">
                    <label for="jenis_kertas" class="col-form-label">Mesin</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-success text-white text-uppercase" id="mesin"
                        value="<?= $laporan[0]['mesin'] ?>">
                    <input type="hidden" value="<?= $laporan[0]['cutoff'] ?>" name="cutoff" id="cutoff">
                    <input type="hidden" value="<?= $laporan[0]['weight_as_selongsong'] ?>" name="weight_as_selongsong"
                        id="weight_as_selongsong">
                    <input type="hidden" value="<?= $laporan[0]['mesinweb_id'] ?>" name="id_mesinweb" id="id_mesinweb">
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="jenis_kertas" class="col-form-label">Bahan Kertas Roll</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-info text-white text-uppercase"
                        id="jenis_kertas" value="<?= $laporan[0]['jenis_kertas'] ?>">
                </div>
                <div class="form-group col-sm-3 col-md-2">
                    <label for="gramatur" class="col-form-label">Gramatur</label>
                    <div class="input-group input-group-sm">
                        <input type="text" readonly class="form-control bg-gradient-danger text-white text-uppercase"
                            id="gramatur" value="<?= $laporan[0]['gramatur'] ?>">
                        <div class="input-group-append">
                            <span class="input-group-text bg-gradient-info text-white"
                                id="inputGroup-sizing-sm">gr</span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-3 col-md-2">
                    <label for="lebar" class="col-form-label">Lebar</label>
                    <div class="input-group input-group-sm">
                        <input type="text" readonly class="form-control bg-gradient-danger text-white text-uppercase"
                            id="lebar" value="<?= $laporan[0]['lebar'] ?>">
                        <div class="input-group-append">
                            <span class="input-group-text bg-gradient-info text-white"
                                id="inputGroup-sizing-sm">cm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <table class="table table-hover table-bordered table-striped table-sm table-responsive" id="dataTable">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Velt</th>
                <th scope="col" col-width="300">Tanggal Cetak</th>
                <th scope="col">Jumlah Plate</th>
                <th scope="col">Pasang Plate</th>
                <th scope="col">Mulai Cetak</th>
                <th scope="col">Selesai Cetak</th>
                <th scope="col">Insit</th>
                <th scope="col">Speed</th>
                <th scope="col">Nomorator</th>
                <th scope="col">Avel</th>
                <th scope="col">Waste</th>
                <th scope="col">Kode Roll</th>
                <th scope="col">Pemakaian</th>
                <th scope="col">Cyan</th>
                <th scope="col">Magenta</th>
                <th scope="col">Yellow</th>
                <th scope="col">Black</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($laporan as $lp) : ?>
            <tr>
                <td><?= $lp["velt"] ?></td>
                <td><?= $lp['tgl_cetak_web'] ?></td>
                <td><?= $lp['jml_plate'] ?></td>
                <td><?= $lp['pasang_plate_web'] ?></td>
                <td><?= $lp['mulai_cetak_web'] ?></td>
                <td><?= $lp['selesai_cetak_web'] ?></td>
                <td><?= $lp['insit'] ?></td>
                <td><?= $lp['speed'] ?></td>
                <td><?= $lp['nomorator_web'] ?></td>
                <td><?= $lp['avel'] ?></td>
                <td><?= $lp['waste'] ?></td>
                <td><?= $lp['kode_roll'] ?></td>
                <td><?= $lp['pemakaian_roll'] ?></td>
                <td><?= $lp['web_cyan'] ?></td>
                <td><?= $lp['web_magenta'] ?></td>
                <td><?= $lp['web_yellow'] ?></td>
                <td><?= $lp['web_black'] ?></td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

    <!-- tampilkan per velt -->
    <!-- <div class="card">
        <div class="card-body">
            <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Item2</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
            </div>
            <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                <h4 id="list-item-1">Item 1</h4>
                <p>...</p>
                <h4 id="list-item-2">Item 2</h4>
                <p>...</p>
                <h4 id="list-item-3">Item 3</h4>
                <p>...</p>
                <h4 id="list-item-4">Item 4</h4>
                <p>...</p>
            </div>
        </div>
    </div> -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->