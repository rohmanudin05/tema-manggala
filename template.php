<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view("$folder_themes/commons/meta"); ?>
</head>
<body>
	<div class="absolute-container">
	<?php $this->load->view("$folder_themes/partials/header"); ?>
	<div class="pagebody">
		<div>
			<div class="container-page">
			<div class="flexcolumn margin-min20">
				<div class="pageleft">
					<?php if (!empty($judul_kategori)): ?>
						<?php $this->load->view("$folder_themes/partials/kategori_artikel"); ?>
					<?php else: ?>
						<?php $this->load->view("$folder_themes/partials/modslide"); ?>
						<?php $this->load->view("$folder_themes/partials/jadwal_shalat"); ?>
						<?php if($headline) : ?>
							<div class="headline boxmodule">
								<div class="boxmodule-head flexleft">
									<div class="icon-boxmodule bgsec flexcenter">
									<i class="fa fa-star"></i>
									</div>
									<h1 class="colorsec">Headline</h1>
								</div>
								<div class="boxmodule-padding">
									<a href="<?= site_url('artikel/'.buat_slug($headline))?>">
									<div class="flexcolumn margin-min5">
										<div class="artikel-image">
											<div class="image-artikel">
											<?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$headline['gambar'])): ?>
												<img src="<?= AmbilFotoArtikel($headline['gambar'],'sedang') ?>">
											<?php else: ?>
												<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
												<div class="imagelogo"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
											<?php endif; ?>
											</div>
										</div>
										<div class="artikel-title">
											<h2><?= $headline['judul'] ?></h2>
											<div class="artikel-info" style="margin:5px 0;">
												<div class="info-item flexleft"><i class="fa fa-calendar"></i><p><?= tgl_indo($headline['tgl_upload']);?></p></div>
												<div class="info-item flexleft"><i class="fa fa-eye"></i><p><?= hit($headline['hit']) ?> dibaca</p></div>
												<div class="info-item flexleft"><i class="fa fa-comment"></i><p><?php $baca_komentar = $this->db->query("SELECT * FROM komentar WHERE id_artikel = '" . $headline['id'] . "'");$komentarku = $baca_komentar->num_rows(); echo number_format($komentarku, 0, ',', '.'); ?></p></div>
												<div class="info-item flexleft"><i class="fa fa-user"></i><p><?= $headline['owner'] ?></p></div>
											</div>
											<div class="artikel-intro"><p><?= potong_teks ($headline['isi'], 160); ?>...</p></div>
										</div>
									</div>
									</a>
								</div>
							</div>
						<?php endif; ?>
						<?php $this->load->view("$folder_themes/partials/artikel_home"); ?>
						<?php $this->load->view("$folder_themes/partials/covid"); ?>
					<?php endif; ?>	
				</div>
				<div class="pageright">
					<?php $this->load->view("$folder_themes/partials/sidepage"); ?>
				</div>
			</div>
			</div>
			<div class="pagebottom"><?php $this->load->view("$folder_themes/commons/meta_footer"); ?></div>
		</div>
	</div>
	</div>
	
</body>
</html>