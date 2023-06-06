<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-folder"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding" style="padding-bottom:0;">
		<ul role="tablist" class="nav nav-tabs custom-tabs">
				<li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#terkini">Terbaru</a></li>
				<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#populer">Populer</a></li>
				<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#acak">Acak</a></li>
		</ul>
		<div class="tab-content">
			<?php foreach (array('terkini' => 'arsip_terkini', 'populer' => 'arsip_populer', 'acak' => 'arsip_acak') as $jenis => $jenis_arsip) : ?>
				<div id="<?= $jenis ?>" class="tab-pane fade in <?php ($jenis == 'terkini') and print('active') ?>" role="tabpanel">
				<div class="boxwidget-tall">
				<div class="withscroll">
				<?php foreach ($$jenis_arsip as $arsip): ?>
					<a href="<?= site_url('artikel/'.buat_slug($arsip))?>">
					<div class="small-row">
						<p><?= tgl_indo($arsip['tgl_upload']); ?> | <i class="fa fa-eye"></i> <?= hit($arsip['hit']); ?></p>
						<div class="flexcolumn margin-min3">
							<div class="small-image">
								<div class="small-foto">
								<?php if (is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$arsip[gambar])): ?>
									<img src="<?= base_url(LOKASI_FOTO_ARTIKEL.'kecil_'.$arsip[gambar])?>"/>
								<?php else: ?>
									<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
									<div class="imagelogo"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
								<?php endif;?>
								</div>
							</div>
							<div class="small-title">
								<h2><?= $arsip['judul']?></h2>
							</div>
						</div>
					</div>	
					</a>
				<?php endforeach; ?>
				</div>	
				</div>	
				</div>
			<?php endforeach ?>
		</div>
	</div>	
</div>
