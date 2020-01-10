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
            <th>Tanggal</th>
            <th>NO Dokumen</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
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
      <td><?= $exportpembelian['tanggal']; ?></td>
      <td><?= $exportpembelian['no_dok']; ?></td>
      <td><?= $exportpembelian['kode_barang']; ?></td>
      <td><?= $exportpembelian['nama_barang']; ?></td>
      <td><?= $exportpembelian['kategori']; ?></td>
      <td><?= $exportpembelian['qty']; ?></td>
    </tr>

    <?php  
      endforeach;
    ?>
  </tbody>
 </table>