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
       </tr>
  </thead>
  <tbody>

    <?php 
      $i = 1; 
      foreach ($hasil as $db) : 
    ?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $db['kode_barang']; ?></td>
      <td><?= $db['nama_barang']; ?></td>
    </tr>

    <?php 
      $i++;  
      endforeach;
    ?>
  </tbody>
 </table>