<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-camera"></i>
		</div>
		<h1 class="colorsec">Galeri Foto</h1>
	</div>
	<div class="boxmodule-padding gallerypage">
		<div class="headpage flexcenter"><h1>Album Foto : <?= $parent['nama']; ?></h1></div>
		<?php if ($gallery): ?>
			<div class="flexcolumn margin-min5">
			<?php foreach ($gallery as $data): ?>
				<div class="gallery-col">
					<a data-fancybox="gallery" href="<?= AmbilGaleri($data['gambar'], 'sedang') ?>">
					<div class="image-gal">
						<?php if (is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])): ?>
							<img src="<?= AmbilGaleri($data['gambar'], 'kecil') ?>" alt="<?= $data['nama']; ?>"/>
						<?php else: ?>
							<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>	
						<?php endif ?>
						<div class="gradbg"></div>
						<div class="absolute-title-bottom">
							<h3>Album : <?= $data['nama']; ?></h3>
						</div>
					</div>
					</a>
				</div>
			<?php endforeach ?>	
			</div>
			<?php $this->load->view("$folder_themes/commons/paging"); ?>
		<?php else: ?>
			<div class="no-found flexcenter">
			<p>Mohon maaf, tidak ada data yang dapat ditampilkan</p>
			</div>
		<?php endif ?>
	</div>
</div>