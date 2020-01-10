<?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$title.xls");
  header("Pragma: no-cache");
  header("Expires: 0");
 ?>
 
 <table border="1" width="100%">
  <thead>
       <tr>
            <th>No</th>
            <th>No Dokumen</th>
            <th>Tanggal Dokumen</th>
            <th>Departemen</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Qty</th>
       </tr>
  </thead>
  <tbody>

    <?php 
      $i = 1; 
      foreach ($hasil as $exportpembelian) : 
    ?>
    <tr>
      <td><?= $i++; ?></td>
      
      <td><?= $exportpembelian['no_dok']; ?></td>
      <td><?= date("d-F-Y",strtotime($exportpembelian['tgl_dok'])); ?></td>
      <td><?= $exportpembelian['departemen']; ?></td>
      <td><?= $exportpembelian['kode_barang']; ?></td>
      <td><?= $exportpembelian['nama_barang']; ?></td>
      <td><?= $exportpembelian['qty']; ?></td>
      
    </tr>

    <?php 
      endforeach;
    ?>
  </tbody>
 </table>