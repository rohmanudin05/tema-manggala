<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<style type="text/css">
	.sdgs-row{display: flex;flex-flow: row wrap;justify-content: space-between center;}
	.sdgs-col{position:relative;width:calc(16.66666667% - 10px);margin:5px 5px;border:1px solid;border-radius:5px;text-align:center;}
	.icon-sdgs{width:100%;height:auto;margin:15px 0;text-align:center;}
	.icon-sdgs img{width:100px;height:auto;}
	.sdgs-point{padding:10px;position:relative;overflow:hidden;border:none;border-top:1px solid;text-align:center;}
	.sdgs-point h2{font-size:120%;margin:0 0;padding:0;line-height:1.2;font-weight:bold;}
	.sdgs-point p{font-size:100%;margin:0 0 5px;padding:0;line-height:1.2;font-weight:500;}
	.info-box {border: 1px solid;border-radius: 5px !important;height:auto !important;min-height:auto !important;max-height:auto !important;box-shadow:none !important;padding:15px !important;}
	.total-bumds{font-size:20px !important;}
	.desc-bumds{font-size:16px !important;}
	.sdgs .heading-module{height:50px;}
     .sdgs .heading-module i.fa{font-size:200%;}
     .sdgs .heading-module h1{font-size:140%;line-height:1;}
	 
	@media (max-width: 992px) {
	.sdgs-col{position:relative;width:calc(33.33333333% - 10px);margin:5px 5px;}	
	.icon-sdgs{margin:10px 0;}
	.icon-sdgs img{width:65px;height:auto;}
	.sdgs .heading-module{height:50px;}
     .sdgs .heading-module i.fa{font-size:150%;margin-top:-3px !important;}
     .sdgs .heading-module h1{font-size:130%;}
	 .sdgs .plr-15{padding-left:10px !important;padding-right:10px !important;}
	 .sdgs-point h2{font-size:110%;}
	.sdgs-point p{font-size:100%;}
	}		
</style>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-group"></i>
		</div>
		<h1 class="colorsec">SDGS </h1>
	</div>
	<div class="boxmodule-padding">
		<?php $evaluasi = sdgs() ?>
				<?php if ($error_msg = $evaluasi->error_msg): ?>
					<div class="alert alert-danger">
						<b><?= $error_msg ?></b>
					</div>
				<?php else: ?>	
					<div class="info-box sdgshead bgwhite bordergrey1" style="display: flex;justify-content: center;padding:15px !important;margin-bottom:5px !important;">
						<span class="info-box-number total-bumds" style="text-align: center;" id="total">
						<span class="info-box-text desc-bumds" style="text-align: center;">Skor SDGs <?= ucwords($this->setting->sebutan_desa) ?></span>
						</span>
					</div>
					
					<div class="sdgs-row mlr-min-5">
						
					<?php foreach ($evaluasi->data as $key => $value): ?>
						<div class="sdgs-col bgwhite bordergrey1">
							<div class="icon-sdgs">
								<img src="<?= asset("images/sdgs/{$value->image}") ?>" alt="sdgs-logo">
							</div>
							<div class="sdgs-point bordergrey1">
								<p>Nilai</p>
								<h2><?= $value->score ?></h2>
							</div>
						</div>
						<?php endforeach ?>
					</div>
				<?php endif; ?>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#total').prepend('<?= $hasil ?>')
});
</script>