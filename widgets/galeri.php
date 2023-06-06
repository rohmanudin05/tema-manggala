<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-camera"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding">
		<div class="flexcolumn margin-min3">
			<?php foreach ($w_gal As $data): ?>
			<div class="gallery-col">
				<a href="<?= site_url("galeri/$data[id]"); ?>">
				<div class="image-gal">
					<?php if (is_file(LOKASI_GALERI . "kecil_" . $data['gambar'])): ?>
						<img src="<?= AmbilGaleri($data['gambar'],'kecil')?>" alt="Album : <?= "$data[nama]" ?>">
					<?php else: ?>
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
					<?php endif; ?>	
				</div>
				</a>
			</div>
			<?php endforeach; ?>	
		</div>
	</div>
</div>