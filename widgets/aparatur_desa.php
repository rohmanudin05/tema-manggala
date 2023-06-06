<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-user"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding aparatur">
		<div class="carousel js-flickity" data-flickity='{ "autoPlay": true, "cellAlign": "left", "wrapAround": true }' style="padding:0;overflow:hidden;">
		<?php foreach($aparatur_desa['daftar_perangkat'] as $data) : ?>
			<div class="carousel-cell">
				<div style="position:relative;overflow:hidden;margin:0;">
				<div class="aparatur-foto">
					<img src="<?= $data['foto'] ?>">
					<div class="gradbg"></div>
					<div class="absolute-title-bottom">
						<h2><?= $data['jabatan'] ?></h2>
						<h3><?= $data['nama'] ?></h3>
						<?php if ($this->setting->tampilkan_kehadiran && $data['status_kehadiran'] == 'hadir') : ?>
							<button class="btn bgsec" style="padding:5px 10px;line-height:1.1;color:#fff;margin:5px 0 0;">Sudah Rekap Kehadiran</button>
						<?php else : ?>
							<button class="btn bgprime" style="padding:5px 10px;line-height:1.1;margin:5px 0 0;">Belum Rekap Kehadiran</button>
						<?php endif ?>
					</div>
				</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</div>
