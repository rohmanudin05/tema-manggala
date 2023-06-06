<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>


<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-map-marker"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding">
			<div id="map_canvas"></div>
			<button class="btn bgsec btn-block" style="margin-top:5px;"><a href="https://www.openstreetmap.org/#map=15/<?=$data_config['lat']."/".$data_config['lng']?>" style="color:#fff;" rel="noopener noreferrer" target="_blank">Buka Peta</a></button>
			<button class="btn bgsec btn-block flexcenter" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" style="color:#fff;">
				Detail
				<i class="fa fa-chevron-up" style="margin:0 0 0 5px;"></i>
				<i class="fa fa-chevron-down" style="margin:0 0 0 5px;"></i>
			</button>
			<div id="collapse2" class="panel-collapse collapse" style="margin:0;padding:0;">
				<?php if (is_file(FCPATH . LOKASI_LOGO_DESA . $desa['kantor_desa'])): ?>
					<img style="width:100%;display:block;margin:5px 0;border-radius:4px;" src="<?=gambar_desa($desa['kantor_desa'], TRUE)?>" alt="Kantor Desa">
				<?php endif; ?>
				<table class="table-mini" style="width:100%;">
						<tr>
							<td width="40%">Alamat</td><td style="width:20px !important;text-align:center;">:</td><td><?=$desa['alamat_kantor']?></td>
						</tr>
						<tr>
							<td width="40%"><?=ucwords($this->setting->sebutan_desa)." "?></td>
							<td style="width:20px !important;text-align:center;">:</td>
							<td><?=$desa['nama_desa']?></td>
						</tr>
						<tr>
							<td width="40%"><?=ucwords($this->setting->sebutan_kecamatan)?></td>
							<td style="width:20px !important;text-align:center;">:</td>
							<td><?=$desa['nama_kecamatan']?></td>
						</tr>
						<tr>
							<td width="40%"><?=ucwords($this->setting->sebutan_kabupaten)?></td>
							<td style="width:20px !important;text-align:center;">:</td>
							<td><?=$desa['nama_kabupaten']?></td>
						</tr>
						<tr>
							<td width="40%">Kodepos</td>
							<td style="width:20px !important;text-align:center;">:</td>
							<td><?=$desa['kode_pos']?></td>
						</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
		var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
		var zoom = <?=$data_config['zoom'] ?: 10?>;
	<?php else: ?>
		var posisi = [-1.0546279422758742,116.71875000000001];
		var zoom = 10;
	<?php endif; ?>

	var options = {
		maxZoom: <?= setting('max_zoom_peta') ?>,
		minZoom: <?= setting('min_zoom_peta') ?>,
	};

	var lokasi_kantor = L.map('map_canvas', options).setView(posisi, zoom);

	//Menampilkan BaseLayers Peta
	var baseLayers = getBaseLayers(lokasi_kantor, "<?= setting('mapbox_key') ?>", "<?= setting('jenis_peta') ?>");

	L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(lokasi_kantor);

	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
		var kantor_desa = L.marker(posisi).addTo(lokasi_kantor);
	<?php endif; ?>
</script>