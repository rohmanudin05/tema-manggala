<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>


<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-cogs"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding sinergi-program">
		<table style="margin:0 auto;width:100%;">
			<?php foreach($sinergi_program as $key => $program) :
				$baris[$program['baris']][$program['kolom']] = $program;
			endforeach; ?>

			<?php foreach($baris as $baris_program) : ?>
				<tr>
					<td >
						<?php $width = 100/count($baris_program)-count($baris_program)?>
						<?php foreach($baris_program as $key => $program) : ?>
							<span style="display: inline-block; width: <?= $width.'%'?>">
								<a href="<?= $program['tautan']?>" rel="noopener noreferrer" target="_blank"><img src="<?= base_url().LOKASI_GAMBAR_WIDGET.$program['gambar']?>" style="float:left; margin:5px;" alt="<?= $program['judul']?>" /></a>
							</span>
						<?php endforeach; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>