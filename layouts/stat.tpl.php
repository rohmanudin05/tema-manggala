<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view("$folder_themes/commons/meta"); ?>
</head>
<body>
	<div class="absolute-container">
	<?php $this->load->view("$folder_themes/partials/header"); ?>
	<div class="pagebody">
		<div>
			<div class="container-page">
			<div class="flexcolumn margin-min20">
				<div class="pageleft">
					<?php if ($tipe == 2): ?>
						<?php $this->load->view("$folder_themes/partials/statistik_sosial"); ?>
					<?php elseif ($tipe == 3): ?>
						<?php $this->load->view("$folder_themes/partials/statistik_wilayah"); ?>
					<?php elseif ($tipe == 4): ?>
						<?php $this->load->view("$folder_themes/partials/statistik_dpt"); ?>
					<?php else: ?>
						<?php $this->load->view("$folder_themes/partials/statistik_global"); ?>
					<?php endif; ?>
				</div>
				<div class="pageright">
					<?php $this->load->view("$folder_themes/partials/sidepage"); ?>
				</div>
			</div>
			</div>
			<div class="pagebottom"><?php $this->load->view("$folder_themes/commons/meta_footer"); ?></div>
		</div>
	</div>
	</div>
	
</body>
</html>