<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
			<i class="fa fa-edit"></i>
		</div>
		<h1 class="colorsec">Artikel</h1>
	</div>
	<div class="boxmodule-padding">
		<div class="headpage"><h1><?= $single_artikel["judul"] ?></h1></div>
		<div class="artikel-info" style="margin-bottom:15px !important;width:100%;position:relative;overflow:hidden;">
			<div class="info-item flexleft"><i class="fa fa-calendar"></i><p><?= tgl_indo2($single_artikel['tgl_upload']) ?></p></div>
			<div class="info-item flexleft"><i class="fa fa-user"></i><p><?= $single_artikel['owner'] ?></p></div>
			<div class="info-item flexleft"><i class="fa fa-eye"></i><p><?= hit($single_artikel['hit']) ?> dibaca</p></div>
		</div>
		<div class="image-blog">
				
				<?php if ($single_artikel['gambar'] != '' and is_file(LOKASI_FOTO_ARTIKEL . "sedang_" . $single_artikel['gambar'])) : ?>
					<a data-fancybox="gallery" href="<?= AmbilFotoArtikel($single_artikel['gambar'], 'sedang') ?>"><img src="<?= AmbilFotoArtikel($single_artikel['gambar'], 'sedang') ?>" /></a>
				<?php endif ?>
				<?php if ($single_artikel['gambar1'] != '' and is_file(LOKASI_FOTO_ARTIKEL . "sedang_" . $single_artikel['gambar1'])) : ?>
					<a data-fancybox="gallery" href="<?= AmbilFotoArtikel($single_artikel['gambar1'], 'sedang') ?>"><img src="<?= AmbilFotoArtikel($single_artikel['gambar1'], 'sedang') ?>" /></a>
				<?php endif ?>
				<?php if ($single_artikel['gambar2'] != '' and is_file(LOKASI_FOTO_ARTIKEL . "sedang_" . $single_artikel['gambar2'])) : ?>
					<a data-fancybox="gallery" href="<?= AmbilFotoArtikel($single_artikel['gambar2'], 'sedang') ?>"><img src="<?= AmbilFotoArtikel($single_artikel['gambar2'], 'sedang') ?>" /></a>
				<?php endif ?>
				<?php if ($single_artikel['gambar3'] != '' and is_file(LOKASI_FOTO_ARTIKEL . "sedang_" . $single_artikel['gambar3'])) : ?>
					<a data-fancybox="gallery" href="<?= AmbilFotoArtikel($single_artikel['gambar3'], 'sedang') ?>"><img src="<?= AmbilFotoArtikel($single_artikel['gambar3'], 'sedang') ?>" /></a>
				<?php endif ?>
		</div>
		<div class="blog-section">
			<?php if ($single_artikel['id_kategori'] == 1000) : ?>
				<table width="100%" class="table table-striped" style="margin-bottom:15px;">
					<tr>
						<td>Tanggal & Jam</td><td width="20px">:</td><td><?= tgl_indo2($detail_agenda['tgl_agenda']) ?></td>
					</tr>
					<tr>
						<td>Lokasi</td><td width="20px">:</td><td><?= $detail_agenda['lokasi_kegiatan'] ?></td>
					</tr>
					<tr>
						<td>Koordinator</td><td width="20px">:</td><td><?= $detail_agenda['koordinator_kegiatan'] ?></td>
					</tr>
				</table>	
			<?php endif ?>
			<?php if ($single_artikel['dokumen'] != '' and is_file(LOKASI_DOKUMEN . $single_artikel['dokumen'])) : ?>
				<div class="flexcenter" style="margin-bottom:15px;">
				<p>Unduh Lampiran: <a href='<?= site_url("first/unduh_dokumen_artikel/{$single_artikel['id']}") ?>' title=""><b><?= $single_artikel['link_dokumen'] ?></b></a></p>
				</div>
			<?php endif ?>
			<div class="blog-content">
				<?= $single_artikel["isi"] ?>
			</div>
		</div>
		
		<div class="blog-section flexcenter">
			<?php $share = [
				'link' => site_url('artikel/' . buat_slug($single_artikel)),
				'judul' => htmlspecialchars($single_artikel["judul"]),
			];
			$this->load->view("$folder_themes/commons/share", $share); ?>
		</div>
		
		<?php if (!empty($komentar)) : ?>
			<div class="blog-section">
				<div class="headsub"><h2>Komentar</h2></div>
				<?php foreach ($komentar as $data) : ?>
				<div class="comment-row">
					<div class="headicon flexleft">
						<i class="fa fa-comments" style="margin:0 5px 0 0;"></i><?= $data['owner'] ?>
					</div>
					<div class="comment-title">
						<p style="margin-top:5px;"><?= tgl_indo2($data['tgl_upload']) ?><br/><?= $data['komentar'] ?></p>
					</div>
				</div>
				<?php endforeach ?>				
			</div>
		<?php endif ?>
		
		<?php if ($single_artikel['boleh_komentar'] == 1) : ?>
			<div class="blog-section">
				<div class="headsub"><h2>Kirim Komentar</h2></div>
				<?php
				$notif = $this->session->flashdata('notif');
				$label = ($notif['status'] == -1) ? 'label-danger' : 'label-info';
				?>
				<?php if ($notif) : ?>
					<div class="box-header <?= $label ?>"><?= $notif['pesan'] ?></div>
				<?php endif ?>
				
				<div class="card-body">
				<form class="form-horizontal" id="validasi" name="form" action="<?= site_url("add_comment/{$single_artikel['id']}") ?>" method="POST" onSubmit="return validasi(this);">
					<div class="row">
						<div class="col-sm-12" style="margin-bottom:10px;">	
						<label for="inputName" class="custom-label">User Name</label>
							<input class="form-control" type="text" name="owner" maxlength="50" placeholder="ketik di sini" value="<?= $notif['data']['owner'] ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12" style="margin-bottom:10px;">	
						<label for="inputName" class="custom-label">No. Hp</label>
							<input class="form-control" type="text" name="no_hp" maxlength="15" placeholder="ketik di sini" value="<?= $notif['data']['no_hp'] ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12" style="margin-bottom:10px;">	
						<label for="inputName" class="custom-label">Email</label>
							<input class="form-control" type="text" name="email" maxlength="50" placeholder="email@gmail.com" value="<?= $notif['data']['email'] ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12" style="margin-bottom:10px;">		
						<label for="inputName" class="custom-label">Isi Komentar</label>
							<textarea class="form-control" name="komentar"><?= $notif['data']['komentar'] ?></textarea>
						</div>
					</div>
					<div class="row captha">
						<div class="col-md-4">
							<a href="#" onclick="document.getElementById('captcha').src = '<?= base_url() . "securimage/securimage_show.php?" ?>' + Math.random(); return false" style="color: #000000;">
							<img id="captcha" src="<?= base_url('securimage/securimage_show.php') ?>" alt="CAPTCHA Image" />
							</a>
						</div>
						<div class="col-sm-12" style="margin-bottom:10px;">
							<label for="inputName" class="custom-label" style="font-weight:500;">Isikan Jawaban Dibawah</label>
							<input type="text" name="captcha_code" class="form-control" maxlength="6" placeholder="Ketik disini"/>
						</div>
					</div>
					<div class="flexright">
						<button type="submit" class="btn btn-success">Kirim Komentar</button>
					</div>
				</form>
				</div>
			</div>
		<?php endif ?>
		
		<?php if ($single_artikel['boleh_komentar'] == 1) : ?>
			<div class="blog-section">
				<div class="headsub"><h2>Komentar Facebook</h2></div>
				<div class="fb-comments" data-href="<?= site_url('artikel/' . buat_slug($single_artikel)) ?>" width="100%" data-numposts="5"></div>
			</div>
		<?php endif ?>
	</div>
</div>