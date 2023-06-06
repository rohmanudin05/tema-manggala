<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-group"></i>
		</div>
		<h1 class="colorsec">Pemerintah <?= ucwords($this->setting->sebutan_desa); ?></h1>
	</div>
	<div class="boxmodule-padding pemerintah">
		<div class="flexcolumn margin-min10">
		<?php foreach ($pemerintah as $data): ?>
			<div class="column-3">
				<div class="pem-box">
					<div class="aparatur-foto">
					<?php if ($data['foto']): ?>
					<img src="<?= $data['foto'] ?>">
					<?php else : ?>
					<img src="<?= AmbilFoto($data['foto'], '', $data['id_sex']) ?>">
					<?php endif ?>
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
		<?php endforeach ?>	
		</div>
	</div>
</div>
