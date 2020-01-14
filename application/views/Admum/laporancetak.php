<!-- Begin Page Content -->
<div class="container-fluid">



    <?= $this->session->flashdata('flash');  ?>

    <?php var_dump($laporan) ?>

    <div class="card m-0">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-sm-2">
                    <label for="no_order" class="col-form-label">No Order</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-info text-white text-uppercase" id="no_order"
                        value="<?= $showOrderbyID['no_order'] ?>">
                </div>
                <div class="form-group col-sm-6">
                    <label for="jenis_pekerjaan" class="col-form-label">Jenis Pekerjaan</label>
                    <input type="text" readonly
                        class="form-control form-control-sm bg-gradient-info text-white text-capitalize"
                        id="jenis_pekerjaan" value="<?= htmlspecialchars($showOrderbyID['jenis_pekerjaan']) ?>">
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
                    <input type="hidden" value="<?= $showOrderbyID['mesinweb_id'] ?>" name="id_mesinweb"
                        id="id_mesinweb">
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



    <table>
    </table>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->