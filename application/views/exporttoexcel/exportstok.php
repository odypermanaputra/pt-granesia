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
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Stok</th>
       </tr>
  </thead>
  <tbody>

    <?php 
      $i = 1; 
      foreach ($hasil as $exportstok) : 
    ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $exportstok['kode_barang']; ?></td>
      <td><?= $exportstok['nama_barang']; ?></td>
      <td><?= $exportstok['kategori']; ?></td>
      <td><?= $exportstok['stok']; ?></td>
    </tr>

    <?php  
      endforeach;
    ?>
  </tbody>
 </table>