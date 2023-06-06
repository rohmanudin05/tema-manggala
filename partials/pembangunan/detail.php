<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-group"></i>
		</div>
		<h1 class="colorsec">Pembangunan</h1>
	</div>
	<div class="boxmodule-padding">
	<?php if ($pembangunan): ?>
		<div class="headpage flexcenter"><h1><?= $pembangunan->judul ?></h1></div>
		<?php if ($pembangunan->foto): ?>
			<img style="display:block;width:100%;height:auto;border-radius:5px;" src="<?= base_url() . LOKASI_GALERI . $pembangunan->foto; ?>">
			<table style="width: 100%;margin:15px 0 0;" class="table table-striped table-inverse counter">
				<tr>
					<td style="width:40%;">Nama Kegiatan</td><td style="width:15px;text-align:center;">:</td><td><?= $pembangunan->judul ?></td>
				</tr>
				<tr>
					<td style="width:40%;">Lokasi</td><td style="width:15px;text-align:center;">:</td><td><?= $pembangunan->alamat ?></td>
				</tr>
				<tr>
					<td style="width:40%;">Tahun</td><td style="width:15px;text-align:center;">:</td><td><?= $pembangunan->tahun_anggaran ?></td>
				</tr>
				<tr>
					<td style="width:40%;">Sumber Dana</td><td style="width:15px;text-align:center;">:</td><td><?= $pembangunan->sumber_dana ?></td>
				</tr>
				<tr>
					<td style="width:40%;">Nilai</td><td style="width:15px;text-align:center;">:</td><td>Rp. <?= number_format($pembangunan->anggaran,0) ?></td>
				</tr>
				<tr>
					<td style="width:40%;">Volume</td><td style="width:15px;text-align:center;">:</td><td><?= $pembangunan->volume?></td>
				</tr>
				<tr>
					<td style="width:40%;">Pelaksana</td><td style="width:15px;text-align:center;">:</td><td><?= $pembangunan->pelaksana_kegiatan?></td>
				</tr>
				<tr>
					<td style="width:40%;">Keterangan</td><td style="width:15px;text-align:center;">:</td><td><?= $pembangunan->keterangan ?></td>
				</tr>
			</table>
			
			<?php if ($dokumentasi): ?>
			<div class="blog-section">	
				<div class="headsub" style="margin-top:15px;"><h2>Foto Dokumentasi</h2></div>
				<div class="flexcolumn margin-min5">
				<?php foreach ($dokumentasi as $value): ?>
					<div class="column-3b">
					<div class="image-gal">
						<?php if (is_file(LOKASI_GALERI . $value->gambar)): ?>
							<a data-fancybox="gallery" href="<?= base_url(LOKASI_GALERI . $value->gambar); ?>">
							<img src="<?= base_url(LOKASI_GALERI . $value->gambar); ?>" alt="<?= $pembangunan->slug . '-' . $value->persentase; ?>"/>
							</a>
						<?php else: ?>
							<img src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" alt="<?= $pembangunan->slug . '-' . $value->persentase; ?>"/>
						<?php endif; ?>
					</div>
					<p style="margin:5px 0 0;">Foto Pembangunan <?= $value->persentase; ?></p>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
			<?php endif; ?>
			
			<div class="blog-section">	
				<div class="headsub"><h2>Lokasi Pembangunan</h2></div>
				<div id="map" class="mappemb"></div>
			</div>
			
			<div class="blog-section flexcenter">	
				<?php
				$share = [
				'link' => site_url('pembangunan/' . $pembangunan->slug),
				'judul' => $pembangunan->judul,
				];
				$this->load->view("$folder_themes/commons/share", $share);
				?>
			</div>
			
		<?php endif; ?>
	<?php else: ?>
		<div class="no-found flexcenter">
		<p>Mohon maaf, tidak ada data yang dapat ditampilkan</p>
		</div>
	<?php endif ?>	
	</div>
</div>


<script type="text/javascript">
		$(document).ready(function() {
			let lat = "<?= $pembangunan->lat ?? $desa['lat']; ?>";
			let lng = "<?= $pembangunan->lng ?? $desa['lng']; ?>";
			let posisi = [lat, lng];
			let zoom = 15;
			let logo = L.icon({
				iconUrl: "<?= base_url('assets/images/gis/point/construction.png'); ?>",
			});

			
			var options = {
				maxZoom: <?= setting('max_zoom_peta') ?>,
				minZoom: <?= setting('min_zoom_peta') ?>,
			};

			pembangunan = L.map('map', options).setView(posisi, zoom);
			getBaseLayers(pembangunan, "<?= setting('mapbox_key') ?>", "<?= setting('jenis_peta') ?>");
			pembangunan.addLayer(new L.Marker(posisi, {icon:logo}));
		});
	</script>