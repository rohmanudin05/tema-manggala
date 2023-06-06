<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<?php if($transparansi) $this->load->view($folder_themes .'/widgets/apbd_bottom', $transparansi) ?>	

<div class="footer-sec bgprime">
	<div class="container-page">
		<div class="flexcolumn">
			<div class="footer-left">
				<div class="flexleft">
					<img src="<?= gambar_desa($desa['logo']);?>"/>
					<div>
					<h3><?= ucwords($this->setting->website_title); ?></h3>
					<h2><?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h2>
					</div>
				</div>
			</div>	
			<div class="footer-right">
				<div class="flexright">
					<div>
					<p><?= ucwords($this->setting->sebutan_kecamatan_singkat." ".$desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?> - <?=$desa['nama_propinsi']?></p>
					<?php if ($desa['email_desa']): ?> 
						<p><i class="fa fa-envelope"></i> <?= ucwords(" ".$desa['email_desa'])?>, </p>
					<?php endif ?>
					<?php if ($desa['telepon']): ?> 
						<p><i class="fa fa-phone"></i> <?= ucwords(" ".$desa['telepon'])?></p>
					<?php endif ?>
					</div>
				</div>
			</div>	
		</div>
		<div class="dukungan flexcenter">
			<?php if ($bsre != null && $bsre->value == 1 || file_exists('mitra')): ?>
				<div class="dukungan-box flexcenter">
				<?php if ($bsre != null && $bsre->value == 1): ?>
					<div class="flexcenter">
						<img style="width:auto;height:35px;" src="<?=asset('assets/images/bsre.png?v', false); ?>">
					</div>
				<?php endif ?>
				<?php if (file_exists('mitra')): ?>
					<div class="flexcenter">
						<a href="https://my.idcloudhost.com/aff.php?aff=3172" rel="noopener noreferrer" target="_blank"><img style="width:auto;height:20px;" src="<?= base_url('/assets/images/Logo-IDcloudhost.png')?>" alt="IDCloudHost" title="IDCloudHost"></a>
					</div>
				<?php endif ?>
				</div>
			<?php endif ?>
		</div>
	</div>
</div>
<div class="copyright flexcenter">
	<div>
	<p>&copy;
	<a href="https://opendesa.id/" rel="noopener noreferrer" target="_blank">OpenDesa</a> - <a href="https://github.com/OpenSID/OpenSID" rel="noopener noreferrer" target="_blank">OpenSID <?= AmbilVersi()?></a></p>
	<p><a href="https://temabatuah.com" target="blank"><?= THEME_NAME ?> <?= THEME_VERSION ?></a></p>
	</div>
</div>


<script src="<?= base_url("{$this->theme_folder}/{$this->theme}/assets/js/wow.min.js") ?>"></script>
<script src="<?= base_url("{$this->theme_folder}/{$this->theme}/assets/js/slick.min.js") ?>"></script>
<script src="<?= base_url("{$this->theme_folder}/{$this->theme}/assets/js/custom.js") ?>"></script>