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
					<?php if(IS_PREMIUM) : ?>
					<?php if (preg_match("/halaman_statis/i", $halaman_statis)) {
					$this->load->view($halaman_statis);
					} else {
					$halaman_statis = str_replace('home/idm', 'idm/index', $halaman_statis);
					$this->load->view("{$folder_themes}/partials/{$halaman_statis}");
					}
					?>
				<?php else : ?>
					<?php if ($idm): ?>
						<?php
						if (preg_match("/halaman_statis/i", $halaman_statis)) {
						$this->load->view($halaman_statis);
						} else {
						$halaman_statis = str_replace('home/idm', 'idm/index', $halaman_statis);
						$this->load->view("{$folder_themes}/partials/{$halaman_statis}");
						}
						?>  
					<?php else : ?>
						<?php
						if (preg_match("/halaman_statis/i", $halaman_statis)) {
						$this->load->view($halaman_statis);
						} else {
						$this->load->view("{$folder_themes}/partials/{$halaman_statis}");
						}
						?>
					<?php endif; ?>
				<?php endif ?>
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