<div class="cetakstb mx-auto mt-3">
  <div class="row">
    <div class="col-sm-3">
      <img src="<?= base_url('assets/img/logo/') ?>granesia1.png" width="100" height="100">
    </div>
    <div class="col-sm">
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-8 col-form-label text-right h5">No Dokumen :</label>
        <div class="col-sm-4">
            <!-- <?php              
              echo $pag[0]["no_dok"];
              ?> -->
              <strong>
              <input type="text" readonly class="form-control-plaintext " id="staticEmail" value="<?= $pag[0]["no_dok"]; ?>"></strong>
        </div>
        <label for="staticEmail" class="col-sm-8 col-form-label text-right h5">Bagian :</label>
        <div class="col-sm-4">
          <strong><input type="text" readonly class="form-control-plaintext " id="staticEmail" value="<?= $bagian; ?>"></strong>
        </div>
      </div>
      <div class="form-group row">
        
      </div>
    </div>
  </div>

  <!-- <?php var_dump($pag) ?> -->

  
  <div><strong><h1 class="mt-3 text-center text-primary ">NOTA SERAH TERIMA BARANG</h1></strong></div>
  
  <div class="table-responsive mb-4" >
    <table class="table kostum" id="dataTable" width="100%" cellspacing="0">
      <thead class="notajudul">
        <tr>
          <th>No</th>        
          <th width="400">Nama Barang</th>
          <th colspan="2" width="120" class="text-center">Jumlah</th>
          <th width="250" class="text-center">Keterangan</th>
        </tr>
      </thead>
      <tbody>                    
        <?php
          $no = 1;
          foreach ($pag as $pemakaian) :              
        ?> 
        <tr>
          <td scope="row"><?= $no; ?></td>             
          <td><?= $pemakaian['nama_barang'] ?></td>              
          <td><?= $pemakaian['qty'] ?></td>
          <td style="border-left: 0px"><?= $pemakaian['satuan'] ?></td>
          <td class="text-center"><?= $pemakaian['keterangan'] ?></td>
        </tr>
        <?php 
          $no++;
          endforeach; 
          ?>
        </tbody>
    </table>
  </div>
  <?php
          $mengetahui = "Roni Martono";
          if($user['name'] == "Hadi S")
          {
            $penerima   = "Ari Kandrian";
            
          } else {
            $penerima   = ""; 
          }
        ?>
  <h6 class="text-right">Bandung, <?php echo date('d F Y') ?></h6>
  <div class="row">
    <div class="col-sm-4"> 
      <h5 class="text-center mb-5 pb-3">Yang menyerahkan,</h5>
      <h5 class="text-center mt-5 pt-4"><strong><?= $user['name']; ?></strong></h5>
    </div>
    <div class="col-sm-4"> 
      <h5 class="text-center mb-4 pb-2"><strong>Mengetahui,</strong></h5>
      <h5 class="text-center mt-5 pt-4"><strong><?= $mengetahui; ?></strong></h5>
    </div>
    <div class="col-sm-4"> 
      <h5 class="text-center mb-5 pb-3">Yang menerima,</h5>
      <h5 class="text-center mt-5 pt-4"><strong><?= $penerima; ?></strong></h5>
    </div>
  </div>
  <div class="mx-auto btn-kembali pt-5 mt-5">
  <a href="<?= base_url('user/pemakaian') ?>" class="btn btn-info "><--- Back</a>
</div>
</div>





