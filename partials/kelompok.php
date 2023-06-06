<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
			<i class="fa fa-group"></i>
		</div>
		<h1 class="colorsec">Kelompok</h1>
	</div>
	<div class="boxmodule-padding">
		<div class="flexcenter" style="margin:0 0 30px;">
			<div style="text-aign:center;">
			<div class="headpage" style="text-align:center;"><h1><?= $detail['nama']; ?></h1></div>
			<p style="margin:0 auto;text-align:center;"><?= $detail['keterangan']?></p>
			</div>
		</div>
		
		<div class="blog-section">
		<div class="headsub"><h2>Daftar Pengurus</h2></div>
		<div class="table-responsive">
			<table width="100%" class="table table-striped">
				<thead>
					<tr>
						<th style="width:50px;text-align:center;">No</th>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Alamat</th>
						<th>L/P</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pengurus as $key => $data): ?>
					<tr>
						<td style="width:50px;text-align:center;"><?= $key + 1?></td>
						<td><?= $data['nama']?></td>
						<td><?= $data['jabatan']?></td>
						<td><?= $data['alamat']?></td>
						<td><?= $data['sex']; ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		</div>
		
		<div class="blog-section">
		<div class="headsub"><h2>Daftar Anggota</h2></div>
		<div class="table-responsive">
			<table width="100%" class="table table-striped">
			<thead>
				<tr>
					<th style="width:50px;text-align:center;">No</th>
					<th>Nama</th>
					<th>No. Anggota</th>
					<th>Alamat</th>
					<th>L/P</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($anggota as $key => $data): ?>
				<tr>
					<td style="width:50px;text-align:center;"><?= $key + 1?></td>
					<td><?= $data['nama']?></td>
					<td><?= $data['no_anggota'] ?:'-'; ?></td>
					<td><?= $data['alamat']?></td>
					<td><?= $data['sex']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		</div>
		</div>
	</div>
</div>