<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<?php if ($jam_kerja) : ?>
<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-clock-o"></i>
		</div>
		<h1 class="colorsec"><?= $judul_widget ?></h1>
	</div>
	<div class="boxmodule-padding jam-kerja">
		<table style="width: 100%;margin:0;" cellpadding="0" cellspacing="0" class="table table-striped table-inverse counter table-mini">
			<thead>
				<tr>
				<th>Hari</th><th>Mulai</th><th>Selesai</th>
				</tr>
			</thead>
						<tbody>
							<?php foreach ($jam_kerja as $value) : ?>
							<tr>
								<td><?= $value->nama_hari ?></td>
								<?php if ($value->status) : ?>
									<td><?= $value->jam_masuk ?></td>
									<td><?= $value->jam_keluar ?></td>
								<?php else : ?>
									<td colspan="2"><span class="label label-danger"> Libur </span></td>
								<?php endif ?>
							</tr>
							<?php endforeach ?>
						</tbody>
		</table>
	</div>
</div>
<?php endif ?>