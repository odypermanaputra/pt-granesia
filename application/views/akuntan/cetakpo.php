<!-- Begin Page Content -->
<div class="container-fluid">

	<div class="row">
		<div class="col-md-12">
			<img src="<?= base_url('assets/') ?>img/kop-surat.jpg" width="1000px" height="317px">
		</div>
	</div>
	<div>
		<h5 class="text-center text-dark font-weight-bold suratpesanan">SURAT PESANAN</h5>
	</div>
	<br>
	<!-- <?php var_dump($pesanan); ?> <br> -->
	<!-- <?php echo $segmen ?> -->
	<div class="container">

		<div class="text-dark mb-5">
			<h5 class="text-uppercase"><strong>No</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?= $pesanan[0]['nopo'] ?>
			</h5>
			<h5><strong>Perihal</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;Permohonan Barang</h5>
		</div>

		<div class="kepada text-dark">
			<h5 class="mb-0 "><strong>Kepada Yth.,</strong></h5><br>
			<h5 class="text-uppercase mt-0 "><?= $pesanan[0]['kepada']  ?></h5>
			<h5><?= $pesanan[0]['alamat']; ?></h5>
			<h5>di <?= $pesanan[0]['kota']; ?></h5>
		</div>
		<br>
		<div class="tujuan text-dark">
			<p class="h5 text-justify ">Berdasarkan kebutuhan kami, mohon dikirim barang-barang sebagai berikut :</p>
		</div>
		<table class="table text-dark table-stripped table-hover h5 ">
			<thead>
				<tr class="bg-secondary text-white">
					<th scope="col">No</th>
					<th scope="col" class="">Jenis Barang</th>
					<th scope="col" colspan="2" class="text-center">Isi</th>
					<th colspan="2" class="text-center">Banyaknya</th>
					<th scope="col">Harga Satuan</th>
				</tr>
			</thead>
			<tbody>

				<?php
				$no = 1;

				foreach ($pesanan as $itempesanan) :
					$hargaestimasi = number_format($itempesanan['estimasiharga'], 0, ",", ".");
					$hargajumlah = number_format($itempesanan['jumlah'], 0, ",", "."); ?>
					<tr>
						<th scope="row"><?= $no++  ?></th>
						<td><?= $itempesanan['nama_barang']; ?></td>
						<td class="text-right text-dark"><?= $itempesanan['isi']; ?></td>
						<td class="text-right text-dark" style="border: 0px"><?= $itempesanan['satuanisi']; ?></td>
						<td class="text-right text-dark"><?= $itempesanan['qty']; ?></td>
						<td class="text-left text-dark"><?= $itempesanan['satuan']; ?></td>
						<td class="text-left text-dark">Rp. <?= $hargaestimasi ?></td>
						<!-- <td class="text-left text-dark">Rp. <?= $hargajumlah  ?></td> -->
					</tr>

				<?php endforeach; ?>

			</tbody>
		</table>
		<p class="text-dark h5 text-justify mb-4">Barang tersebut diatas mohon dikirim ke PT. Percetakan dan Penertbitan Granesia, Jln. Soekarno Hatta No. 147 Bandung, paling lambat <strong><?= $itempesanan['jangkawaktu'] . " (" . $itempesanan['lama'] . ")" ?> </strong> sejak surat pesanan ini diterima.
		</p>
		<p class="mt-2 text-dark h5 text-justify mb-3">
			Pembayaran atas pesanan ini akan dibayarkan dalam tempo 60 hari dengan Giro dimuka melalui rekening bank Bapak/Saudara, Setelah Berita Acara Penerimaan Barang (BAPB) ditandatangani oleh PT. Percetakan dan penerbitan Granesia.
		</p>
		<p class="text-dark mt-2 h5 text-justify mt-4">Atas perhatian dan kerjasamanya kami ucapkan terimakasih.
		</p> <br>
		<div>
			<p class="text-dark h5 ">Bandung, <?= date('d F Y'); ?><br></p>
		</div>
		<div class="row text-dark mb-4">
			<div class="col-md-8 ">
				<h5>
					PT. Percetakan dan Penerbitan Granesia,
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<strong>Roni Martono</strong><br>
					<small><i>Production & General Affair Manager</i></small>
				</h5>
			</div>
			<!-- <div class="col-md-1">

			</div> -->
			<div class="col-md-4 ">
				<h5>
					Supplier,
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					...............................................................
				</h5>
			</div>
		</div>

		<small><strong>*) Harga <?php if ($itempesanan['ppn'] == 'y') {
									echo "sudah";
								}
								if ($itempesanan['ppn'] == 't') {
									echo "belum";
								};
								?> termasuk PPN </strong></small><br>
		<small><strong>**) Diisi oleh supplier </strong></small>
	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content