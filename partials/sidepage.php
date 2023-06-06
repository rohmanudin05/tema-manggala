<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="widget">
<?php if ($w_cos): ?>
	<?php foreach ($w_cos as $widget): ?>
	<?php $judul_widget = [
		'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
	]; ?>
		<?php if ($widget["jenis_widget"] == 1): ?>
			<?php $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) ?>
		<?php elseif($widget['jenis_widget'] == 2) : ?>
			<?php $this->load->view("../../{$widget['isi']}", $judul_widget) ?>
		<?php else : ?>
			<div class="boxmodule">
				<div class="boxmodule-head flexleft">
					<div class="icon-boxmodule bgsec flexcenter">
					<i class="fa fa-folder"></i>
					</div>
					<h1 class="colorsec"><?= $judul_widget['judul_widget'] ?></h1>
				</div>
				<div class="boxmodule-padding">
					<?= html_entity_decode($widget['isi']) ?>
				</div>
			</div>
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>
</div>