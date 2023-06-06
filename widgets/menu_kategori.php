<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-user"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding">
	<ul id="ul-menu" class="sidebar-latest">
		<?php foreach($menu_kiri as $data):?>
			<li>
				<a href="<?= site_url("artikel/kategori/$data[slug]"); ?>">
					<?= $data['kategori']; ?><?php (count($data['submenu'])>0) and print('<span class="caret"></span>'); ?>
				</a>
				<?php if(count($data['submenu'])>0): ?>
					<ul class="nav submenu">
						<?php foreach($data['submenu'] as $submenu):?>
							<li><a href="<?= site_url("artikel/kategori/$submenu[slug]"); ?>"><?= $submenu['kategori']?></a></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</li>
		<?php endforeach;?>
	</ul>
	</div>
</div>
