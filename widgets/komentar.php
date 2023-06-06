<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-comments"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding">
			<marquee class="boxwidget" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up" width="100%" behavior=”alternate”>
				<?php foreach($komen As $data): ?>
					<table class="table-mini comment" style="margin:10px 0;">
						<tr>
							<th style="border:none;margin:0 !important;padding:0 !important;"><i class="fa fa-comment"></i> <?= $data['owner']?></th>
						</tr>
						<tr>
							<td>
								<?= tgl_indo2($data['tgl_upload'])?><br/><?= potong_teks($data['komentar'], 50); ?>...<a href="<?= site_url('artikel/' . buat_slug($data)); ?>"> selengkapnya</a>
							</td>
						</tr>
					</table>
				<?php endforeach; ?>
			</marquee>
	</div>
</div>
