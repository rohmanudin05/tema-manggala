<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-bar-chart"></i>
		</div>
		<h1 class="colorsec">Data Statistik</h1>
	</div>
	<div class="boxmodule-padding">
		<div class="headpage flexcenter"><h1>Daftar Calon Pemilih (pada tgl pemilihan <?= $tanggal_pemilihan ?>)</h1></div>
		<div class="table-responsive">
			<table id="dpt" class="table table-bordered table-striped">
			<thead>
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">Nama Dusun</th>
				<th class="text-center">RW</th>
				<th class="text-center">Jiwa</th>
				<th class="text-center">L</th>
				<th class="text-center">P</th>
			</tr>
			</thead><?php
			if(count($main) > 0){ ?>
				<tbody><?php
				foreach($main as $data){ ?>
					<tr>
						<td class="text-center"><?= $data["no"] ?></td>
						<td class="text-left"><?= strtoupper($data["dusun"]) ?></td>
						<td class="text-center"><?= strtoupper($data["rw"]) ?></td>
						<td class="text-right"><?= $data["jumlah_warga"] ?></td>
						<td class="text-right"><?= $data["jumlah_warga_l"] ?></td>
						<td class="text-right"><?= $data["jumlah_warga_p"] ?></td>
					</tr><?php
				} ?>
				</tbody>
				<tr>
					<th colspan="3" class="text-right">TOTAL</th>
					<th class="text-right"><?= $total["total_warga"] ?></th>
					<th class="text-right"><?= $total["total_warga_l"] ?></th>
					<th class="text-right"><?= $total["total_warga_p"] ?></th>
				</tr><?php
			} else { ?>
				<tr><td colspan=6 class="text-center">Daftar masih kosong</td></tr><?php
			} ?>
			</table>
		</div>	
	</div>	
</div>	