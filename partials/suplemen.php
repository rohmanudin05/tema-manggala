<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
			<i class="fa fa-group"></i>
		</div>
		<h1 class="colorsec">Suplemen</h1>
	</div>
	<div class="boxmodule-padding">
		<div style="margin:0 0 30px;">
			<div style="text-aign:center;">
			<div class="headpage" style="text-align:center;"><h1><?= $main['suplemen']['nama']; ?></h1></div>
			<table width="auto" class="table-mini" style="margin:0 auto;">
				<tr>
					<td style="width:45%;">Nama Data</td><td style="width:15px;text-align:center;">:</td><td><?= $main['suplemen']['nama']; ?></td>
				</tr>
				<tr>
					<td style="width:45%;">Sasaran Terdata</td><td style="width:15px;text-align:center;">:</td><td><?= $sasaran[$main['suplemen']['sasaran']]; ?></td>
				</tr>
				<tr>
					<td style="width:45%;">Keterangan</td><td style="width:15px;text-align:center;">:</td><td><?= $main['suplemen']['keterangan']; ?></td>
				</tr>
			</table>
			</div>
		</div>
		
		<div class="blog-section">
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id="tabel-data">
				<thead class="bg-gray disabled color-palette">
					<tr>
						<th style="width:50px;text-align:center;">No</th>
						<th>Nama</th>
						<th>Lahir</th>
						<th>Alamat</th>
						<th>L/P</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($main['terdata'] as $key => $data): ?>
					<tr>
						<td style="width:50px;text-align:center;"><?= ($key + 1); ?></td>
						<td><b><?= $data['terdata_nama']; ?></b></td>
						<td><?= $data["tempat_lahir"]; ?></td>
						<td><?= $data["info"];?></td>
						<td><?= $data["sex"]; ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		</div>
		
	</div>
</div>