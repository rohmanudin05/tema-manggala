<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>


<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-calendar"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div id="agenda">
	<div class="boxmodule-padding">
		<ul class="nav nav-tabs">
			<?php if (count($hari_ini) > 0): ?>
				<li class="active"><a data-toggle="tab" href="#hari-ini">Hari ini</a></li>
			<?php endif; ?>
			<?php if (count($yad) > 0): ?>
				<li class="<?php count($hari_ini) == 0 and print('active')?>"><a data-toggle="tab" href="#yad">Mendatang</a></li>
			<?php endif; ?>
			<?php if (count($lama) > 0): ?>
				<li class="<?php count(array_merge($hari_ini, $yad)) == 0 and print('active')?>"><a data-toggle="tab" href="#lama">Lama</a></li>
			<?php endif; ?>
		</ul>
		<div class="tab-content">
			<?php if (count(array_merge($hari_ini, $yad, $lama)) > 0): ?>
				<div id="hari-ini" class="tab-pane fade in active">
					<?php if (count($hari_ini) > 0): ?>
					<div class="boxwidget">
					<div class="withscroll">
					<?php foreach ($hari_ini as $agenda): ?>
						<a href="<?= site_url('artikel/'.buat_slug($agenda))?>">
						<div class="agenda-row">
						<h3><?= $agenda['judul']?></h3>
						<table style="width: 100%;" class="table-mini table-striped">
						<a href="<?= site_url('artikel/'.buat_slug($agenda))?>">
							<tr>
								<td style="width:40%;">Waktu</td><td style="width:10px;text-align:center;">:</td><td><?php if ($agenda['tgl_agenda']): ?><?= tgl_indo2($agenda['tgl_agenda'])?><?php endif;?></td>
							</tr>
							<tr>
								<td style="width:40%;">Lokasi</td><td style="width:10px;text-align:center;">:</td><td><?php if ($agenda['lokasi_kegiatan']): ?><?= $agenda['lokasi_kegiatan']?><?php endif;?></td>
							</tr>
							<tr>
								<td style="width:40%;">Koordinator</td><td style="width:10px;text-align:center;">:</td><td><?php if ($agenda['koordinator_kegiatan']): ?><?= $agenda['koordinator_kegiatan']?><?php endif;?></td>
							</tr>
						</a>	
						</table>
						</div>
						</a>
					<?php endforeach; ?>
					</div>
					</div>
					<?php endif;?>
				</div>

				<div id="yad" class="tab-pane fade <?php count($hari_ini) == 0 and print('in active')?>">
					<?php if (count($yad) > 0): ?>
					<div class="boxwidget">
					<div class="withscroll">
					<?php foreach ($yad as $agenda): ?>
						<a href="<?= site_url('artikel/'.buat_slug($agenda))?>">
						<div class="agenda-row">
						<h3><?= $agenda['judul']?></h3>
						<table style="width: 100%;" class="table-mini table-striped">
						<a href="<?= site_url('artikel/'.buat_slug($agenda))?>">
							<tr>
								<td style="width:40%;">Waktu</td><td style="width:10px;text-align:center;">:</td><td><?php if ($agenda['tgl_agenda']): ?><?= tgl_indo2($agenda['tgl_agenda'])?><?php endif;?></td>
							</tr>
							<tr>
								<td style="width:40%;">Lokasi</td><td style="width:10px;text-align:center;">:</td><td><?php if ($agenda['lokasi_kegiatan']): ?><?= $agenda['lokasi_kegiatan']?><?php endif;?></td>
							</tr>
							<tr>
								<td style="width:40%;">Koordinator</td><td style="width:10px;text-align:center;">:</td><td><?php if ($agenda['koordinator_kegiatan']): ?><?= $agenda['koordinator_kegiatan']?><?php endif;?></td>
							</tr>
						</a>	
						</table>
						</div>
						</a>
					<?php endforeach; ?>
					</div>
					</div>
					<?php endif;?>
				</div>

				<div id="lama" class="tab-pane fade <?php count(array_merge($hari_ini, $yad)) == 0 and print('in active')?>">
					<?php if (count($lama) > 0): ?>
					<div class="boxwidget">
					<div class="withscroll">
					<?php foreach ($lama as $agenda): ?>
						<a href="<?= site_url('artikel/'.buat_slug($agenda))?>">
						<div class="agenda-row">
						<h3><?= $agenda['judul']?></h3>
						<table style="width: 100%;" class="table-mini table-striped">
						<a href="<?= site_url('artikel/'.buat_slug($agenda))?>">
							<tr>
								<td style="width:40%;">Waktu</td><td style="width:10px;text-align:center;">:</td><td><?php if ($agenda['tgl_agenda']): ?><?= tgl_indo2($agenda['tgl_agenda'])?><?php endif;?></td>
							</tr>
							<tr>
								<td style="width:40%;">Lokasi</td><td style="width:10px;text-align:center;">:</td><td><?php if ($agenda['lokasi_kegiatan']): ?><?= $agenda['lokasi_kegiatan']?><?php endif;?></td>
							</tr>
							<tr>
								<td style="width:40%;">Koordinator</td><td style="width:10px;text-align:center;">:</td><td><?php if ($agenda['koordinator_kegiatan']): ?><?= $agenda['koordinator_kegiatan']?><?php endif;?></td>
							</tr>
						</a>	
						</table>
						</div>
						</a>
					<?php endforeach; ?>
					</div>
					</div>
					<?php endif;?>
				</div>
			<?php else: ?>
				<p>Belum ada agenda</p>
			<?php endif; ?>
		
		</div>
	</div>
	</div>
</div>