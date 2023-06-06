<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-map-marker"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding">
		<div id="map_wilayah"></div>
		<a style="color:#fff;margin:5px 0 0;" href="https://www.openstreetmap.org/#map=15/<?=$data_config['lat']."/".$data_config['lng']?>" class="btn bgsec btn-block" rel="noopener noreferrer" target="_blank">Buka Peta</a>
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

	//Style polygon
	var style_polygon = {
		stroke: true,
		color: '#FF0000',
		opacity: 1,
		weight: 2,
		fillColor: '#8888dd',
		fillOpacity: 0.5
	};
	var wilayah_desa = L.map('map_wilayah', options).setView(posisi, zoom);

	//Menampilkan BaseLayers Peta
	var baseLayers = getBaseLayers(wilayah_desa, "<?= setting('mapbox_key') ?>", "<?= setting('jenis_peta') ?>");

	L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(wilayah_desa);

	<?php if (!empty($data_config['path'])): ?>
		var polygon_desa = <?= $data_config['path']; ?>;
		var kantor_desa = L.polygon(polygon_desa, style_polygon).bindTooltip("Wilayah Desa").addTo(wilayah_desa);
		wilayah_desa.fitBounds(kantor_desa.getBounds());
	<?php endif; ?>
</script>