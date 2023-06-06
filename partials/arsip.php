<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
			<i class="fa fa-folder"></i>
		</div>
		<h1 class="colorsec">Arsip</h1>
	</div>
	<div class="boxmodule-padding arsip">
	<?php if(count($farsip)>0): ?>
		<div class="table-responsive">
		<table class="table table-striped" style="width:100%;">
			<tbody>
			<?php foreach($farsip AS $data): ?>
				<tr>
					<td style="text-align:center;width:50px;vertical-align:top;"><?= $data["no"]?></td>
					<td style="width:65%;">
						<a href="<?= site_url('artikel/'.buat_slug($data))?>"><h3 class="colorsec"><?= $data["judul"]?></h3></a>
						Oleh : <?= $data["owner"]?><br/>
						<?= hit($data['hit']) ?> dibaca
					</td>
					<td style="text-align:right;"><?= tgl_indo($data["tgl_upload"])?><br/></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		</div>
		<?php
		$data['paging_page'] = 'first/arsip';
		$this->load->view("$folder_themes/commons/paging", $data);
		?>
	<?php else: ?>
		<div class="no-found flexcenter">
		<p>Mohon maaf, tidak ada data yang dapat ditampilkan</p>
		</div>
	<?php endif;?>	
	</div>
</div>