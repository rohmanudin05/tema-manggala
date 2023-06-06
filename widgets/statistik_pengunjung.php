<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-pie-chart"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding">
		<table style="width: 100%;" cellpadding="0" cellspacing="0" class="table-mini">
						<tr>
							<td style="width:45%;">Hari ini</td><td style="width:15px;text-align:center;">:</td><td><?= ribuan($statistik_pengunjung['hari_ini']); ?></td>
						</tr>
						<tr>
							<td style="width:45%;">Kemarin</td><td style="width:15px;text-align:center;">:</td><td class="case"><?= ribuan($statistik_pengunjung['kemarin']); ?></td>
						</tr>
						<tr>
							<td style="width:45%;">Total Pengunjung</td><td style="width:15px;text-align:center;">:</td><td class="case"><?= ribuan($statistik_pengunjung['total']); ?></td>
						</tr>
						<tr>
							<td style="width:45%;">Sistem Operasi</td><td style="width:15px;text-align:center;">:</td><td class="case"><?= $statistik_pengunjung['os']; ?></td>
						</tr>
						<tr>
							<td style="width:45%;">IP Address</td><td style="width:15px;text-align:center;">:</td><td class="case"><?= $statistik_pengunjung['ip_address']; ?></td>
						</tr>
						<tr>
							<td style="width:45%;">Browser</td><td style="width:15px;text-align:center;">:</td><td class="case"><?= $statistik_pengunjung['browser']; ?></td>
						</tr>
		</table>
	</div>
</div>