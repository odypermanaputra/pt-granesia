<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Form Serah Terima Barang</h1>
          <p class="mb-4">Pilih tanggal dan bagian untuk menampilkan daftar pemakaian barang sesuai permintaan barang dari tiap bagian.

          <?= $this->session->flashdata('message'); ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Pemakaian</h6>
              
            </div>
            <div class="card-body">
              <nav class="navbar justify-content-between">                
                <form class="form-group" action="" method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control datepicker" name="caritanggal" value="<?= set_value('caritanggal'); ?>">
                    <select class="form-control" id="departemen" name="departemen" value="<?= set_value('departemen'); ?>">
                      <?php foreach ($departemen as $bag) : ?>
                        <option value="<?= $bag['nama_departemen'];?>" <?= set_select('departemen', $bag['nama_departemen']); ?>><?= $bag['nama_departemen'] ;?></option>
                      <?php endforeach; ?>
                    </select>
                    <div class="input-group-append">
                      <button class="btn btn-primary" name="caristb" type="submit">Cari <i class="fas fa-fw fa-search"></i></button>
                      
                      <button name="cetak" id="cetak" class="btn btn-success" target="_blank">Cetak<i class="fas fa-fw fa-print"></i></button>
                    </div>
                  </div>
                </form>
              </nav>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama Barang</th>  
                      <th>Bagian</th>
                      <th>Qty</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama Barang</th> 
                      <th>Bagian</th> 
                      <th>Qty</th>
                    </tr>
                  </tfoot>
                  <tbody>                    
                     <?php
                      $no = 1;
                      foreach ($pag as $pemakaian) :              
                    ?>
                    <tr>
                      <td scope="row"><?= $no; ?></td> 
                      <td><?= $pemakaian['tgl_dok'] ?></td>             
                      <td><?= $pemakaian['nama_barang'] ?></td>  
                      <td><?= $pemakaian['departemen'] ?></td>            
                      <td><?= $pemakaian['qty'] ?></td>
                    </tr>
                    <?php 
                      $no++;
                      endforeach; 
                      ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
          <script type="text/javascript">
            $(function(){
              $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,           
              });
            })
          </script>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content