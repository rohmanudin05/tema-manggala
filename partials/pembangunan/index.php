<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-group"></i>
		</div>
		<h1 class="colorsec">Pembangunan</h1>
	</div>
	<div class="boxmodule-padding pembangunan">
	<?php if ($pembangunan): ?>
		<div class="flexcolumn margin-min10">
		<?php foreach ($pembangunan as $data): ?>
			<div class="column-2">
				<a href="<?= site_url("pembangunan/$data->slug"); ?>" title="Detail">
				<div class="image-artikel">
					<?php if ($data->foto): ?>
					<img src="<?= base_url() . LOKASI_GALERI . $data->foto; ?>">
					<?php else: ?>
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/no-image.jpg") ?>"/>
					<?php endif; ?>
					<div class="gradbg"></div>
					<div class="absolute-title-bottom">
					<h3><?= $data->judul ?></h3>
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
