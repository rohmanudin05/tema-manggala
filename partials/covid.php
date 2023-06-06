<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if ($this->setting->covid_desa): ?>
	<div class="boxmodule">
		<div class="boxmodule-head flexleft">
			<div class="icon-boxmodule bgsec flexcenter">
			<i class="fa fa-cog"></i>
			</div>
			<h1 class="colorsec">Data Covid-19</h1>
		</div>
		<div class="boxmodule-padding">
			<?php $this->load->view('head_tags_front') ?>
			<?php defined('BASEPATH') || exit('No direct script access allowed');
				$panel = [
					'default',
					'info',
					'primary',
					'secondary',
					'warning',
					'danger',
					'success',
				];
			?>
			<div class="flexcolumn margin-min3">
			<?php foreach ($covid as $key => $val):
			if ($key >= 7) break;
			?>
				<div class="covid-item">
				<div class="<?= $panel[$key]; ?>">
					<div class="box-small-head flexcenter"><?= $val['nama']; ?></div>
					<div class="box-small-inner flexcenter">
					<div>
					<h2><?= number_format($val['jumlah']); ?></h2>
					<p>Orang</p>
					</div>
					</div>
				</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
<?php endif ?>