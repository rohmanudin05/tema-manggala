<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
			<?php if ($title) : ?>
				<?php if (!empty($judul_kategori)): ?>
					<i class="fa fa-bars"></i>
				<?php else: ?>
					<i class="fa fa-folder"></i>
				<?php endif; ?>
			<?php else: ?>
				<i class="fa fa-search"></i>
			<?php endif; ?>
		</div>
		<h1 class="colorsec">
			<?php if ($title) : ?>
				<?php if (!empty($judul_kategori)): ?>
					<?= $judul_kategori['kategori'] ?>
				<?php else: ?>
					<?= $title ?>
				<?php endif; ?>
			<?php else: ?>
				Hasil Pencarian
			<?php endif; ?>
		</h1>
	</div>
	<div class="boxmodule-padding">
	<?php if ($artikel): ?>
		<?php foreach ($artikel as $data): ?>
		<div class="artikel-row">		
		<a href="<?= site_url('artikel/'.buat_slug($data)) ?>">
		<div class="flexcolumn margin-min5">
			<div class="artikel-image">
				<div class="image-artikel">
				<?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$data['gambar'])): ?>
					<img src="<?= AmbilFotoArtikel($data['gambar'],'sedang') ?>">
				<?php else: ?>
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
					<div class="imagelogo"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
				<?php endif; ?>
				</div>
			</div>
			<div class="artikel-title">
				<h2><?= $data['judul'] ?></h2>
				<div class="artikel-info" style="margin:5px 0;">
					<div class="info-item flexleft"><i class="fa fa-calendar"></i><p><?= tgl_indo($data['tgl_upload']);?></p></div>
					<div class="info-item flexleft"><i class="fa fa-eye"></i><p><?= hit($data['hit']) ?> dibaca</p></div>
					<div class="info-item flexleft"><i class="fa fa-comment"></i><p><?php $baca_komentar = $this->db->query("SELECT * FROM komentar WHERE id_artikel = '" . $data['id'] . "'");$komentarku = $baca_komentar->num_rows(); echo number_format($komentarku, 0, ',', '.'); ?></p></div>
					<div class="info-item flexleft"><i class="fa fa-user"></i><p><?= $data['owner'] ?></p></div>
				</div>
				<div class="artikel-intro"><p><?= potong_teks ($data['isi'], 160); ?>...</p></div>
			</div>
		</div>	
		</a>
		</div>
		<?php endforeach; ?>
		
		<?php $this->load->view("$folder_themes/commons/paging"); ?>
	<?php else: ?>
		<div class="no-found flexcenter">
		<p>Mohon maaf, tidak ada data yang dapat ditampilkan</p>
		</div>
	<?php endif;?>	
	</div>
</div>