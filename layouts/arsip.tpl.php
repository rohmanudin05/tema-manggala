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
					<?php $this->load->view("$folder_themes/partials/arsip"); ?>
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