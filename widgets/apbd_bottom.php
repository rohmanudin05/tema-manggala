<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="apbdstyle">
<div class="container-page">
<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-money"></i>
		</div>
		<h1 class="colorsec">APBD <?= ucwords($this->setting->sebutan_desa); ?></h1>
	</div>
	<div class="boxmodule-padding apbd">
	<div class="flexcolumn margin-min10">
		<?php foreach ($data_widget as $subdata_name => $subdatas): ?>
		<div class="column-3">
			<h1 class="colorsec"><?= ($subdatas['laporan'])?></h1>
			<?php foreach ($subdatas as $key => $subdata): ?>
			<?php if($subdata['judul'] != NULL and $key != 'laporan' and $subdata['realisasi'] != 0 or $subdata['anggaran'] != 0): ?>
				<div class="apbd-box">
					<h3><?= $subdata['judul']; ?></h3>
					<div class="flexcenter">
					<p>Anggaran</p><p style="margin:0 5px;">|</p><p>Realisasi</p>
					</div>
					<table class="table-apbd" style="width:100%;">
						<tr>
							<td style="font-size:90%;text-align:left;">Rp. <?= number_format($subdata['anggaran']); ?></td><td style="font-size:90%;text-align:right;">Rp. <?= number_format($subdata['realisasi']); ?></td>
						</tr>
					</table>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: <?= $subdata['persen'] ?>%"><?= $subdata['persen'] ?>%</div>
					</div>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>	

		</div>
		<?php endforeach; ?>
	</div>
	</div>
</div>	
</div>
</div>