<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">


        <div class="card">
            <div class="card-body">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal"
                                data-target="#tambahOrder">Tambah Order</button>
                        </div>
                    </div>
                </nav>
                <table class="table table-hover table-bordered table-responsive-sm table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Order</th>
                            <th scope="col">Tanggal Masuk Order</th>
                            <th scope="col">Jenis Pekerjaan</th>
                            <th scope="col">Bahan Cover</th>
                            <th scope="col">Bahan Isi</th>
                            <th scope="col">Oplah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($order as $ord) :
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $ord['no_order'] ?></td>
                            <td><?= date("d M Y", strtotime($ord['tgl_masuk_order'])); ?></td>
                            <td><?= $ord['jenis_pekerjaan'] ?></td>
                            <td><?= $ord['nama_barang'] ?></td>
                            <td><?= $ord['jenis_kertas'] ?></td>
                            <td><?= $ord['oplah'] ?></td>
                            <td>
                                <a href="<?= base_url('Ppc/detail_order') ?>/<?= $ord['id_order'] ?>"
                                    class="badge badge-sm badge-success"><i class="fas fa-search"></i> detail</a>
                            </td>
                        </tr>
                        <?php 
                    $no++;
                    endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>









        <!-- modal untuk menambahan order -->
        <!-- Modal -->
        <div class="modal fade" id="tambahOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Form Tambah Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('Ppc/tambahOrder') ?>" method="POST">
                            <div class="form-row">
                                <input type="text" name="username" value="<?= $user['name'] ?>" hidden>
                                <div class="form-group col-md-2">
                                    <label for="no_order">No Order</label>
                                    <input type="text" class="form-control form-control-sm text-uppercase" id="no_order"
                                        name="no_order" autocomplete="off" required>
                                    <?php echo form_error('no_order', '<small id="no_order" class="form-text text-danger ml-2">', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="tgl_masuk_order">Tanggal Masuk Order</label>
                                    <input type="text" class="form-control form-control-sm datepicker"
                                        id="tgl_masuk_order" name="tgl_masuk_order" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nama_pelanggan">Nama pemesan</label>
                                    <input type="text" class="form-control form-control-sm text-capitalize"
                                        id="nama_pelanggan" name="nama_pelanggan" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="alamat_pelanggan">Alamat Pemesan</label>
                                    <input type="text" class="form-control form-control-sm text-capitalize"
                                        id="alamat_pelanggan" name="alamat_pelanggan" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                                    <input type="text" class="form-control form-control-sm text-capitalize"
                                        id="jenis_pekerjaan" name="jenis_pekerjaan" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="bahan_cover">Bahan Baku Kertas : (cover)</label>
                                    <select id="bahan_cover" class="form-control form-control-sm" name="bahan_cover">
                                        <?php
                                    foreach ($databarang as $ksheet) : ?>
                                        <option value="<?= $ksheet['kode_barang'] ?>"><?= $ksheet['nama_barang'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="bahan_isi">(isi)</label>
                                    <select id="bahan_isi" class="form-control form-control-sm" name="bahan_isi">
                                        <?php foreach ($kertasWeb as $kweb) : ?>
                                        <option value="<?= $kweb['id_jkertasroll'] ?>"><?= $kweb['jenis_kertas'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="ukuran_jadi">Ukuran Jadi (cm)</label>
                                    <input type="text" class="form-control form-control-sm" id="ukuran_jadi"
                                        name="ukuran_jadi" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="oplah">Oplah</label>
                                    <input type="number" class="form-control form-control-sm" id="oplah" name="oplah"
                                        autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="mesincover_id">Mesin : (cover)</label>
                                    <select id="mesincover_id" class="form-control form-control-sm"
                                        name="mesincover_id">
                                        <?php
                                    foreach ($mesinsheets as $sheet) : ?>
                                        <option value="<?= $sheet['idmesinsheet'] ?>"><?= $sheet['mesin_sheet'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="mesin_isi">(isi)</label>
                                    <select id="mesin_isi" class="form-control form-control-sm" name="mesin_isi">
                                        <?php foreach ($mesinwebs as $web) : ?>
                                        <option value="<?= $web['idmesinweb'] ?>"><?= $web['mesin'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm" id="btn-order"
                                    name="tambahOrder">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- akhir modal menambahkan order -->



    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->