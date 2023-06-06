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
					<?php if ($list_jawab) : ?>
						<?php $this->load->view("$folder_themes/partials/analisis"); ?>
					<?php else : ?>
						<div class="boxmodule">
							<div class="boxmodule-head flexleft">
								<div class="icon-boxmodule bgsec flexcenter">
									<i class="fa fa-edit"></i>
								</div>
								<h1 class="colorsec">DAFTAR AGREGASI DATA ANALISIS DESA</h1>
							</div>
							<div class="boxmodule-padding">
							<?php if ($list_indikator): ?>
								<?php if (count($master_indikator) > 1) : ?>
								<form action="<?=site_url('data_analisis'); ?>" method="get">
									<div class="row" style="margin-bottom: 20px;">
										<label style="padding-top: 5px;" class="col-sm-1 control-label" >Analisis: </label>
										<div class="col-sm-6">
											<select class="form-control select2" name="master" onchange="this.form.submit()" style="width: 100%;">
											<?php foreach ($master_indikator as $master): ?>
												<option value="<?= $master['id']?>" <?= selected($list_indikator['0']['id_master'], $master['id'])?> ><?= "{$master['master']} ({$master['tahun']})"?></option>
											<?php endforeach; ?>
											</select>
										</div>
									</div>
								</form>
								<?php endif; ?>
								<div class="table-responsive">
									<table>
										<tr>
											<td width="200">Pendataan </td>
																	<td width="20"> :</td>
																	<td><?= $list_indikator['0']['master']; ?></td>
																</tr>
																<tr>
																	<td>Subjek </td>
																	<td> : </td>
																	<td><?= $list_indikator['0']['subjek']; ?></td>
																</tr>
																<tr>
																	<td>Tahun </td>
																	<td> :</td>
																	<td><?= $list_indikator['0']['tahun']; ?></td>
																</tr>
									</table>
								</div>
								<h4 style="margin-top: 15px; margin-bottom: 10px;">Indikator</h4>
								<div class="table-responsive">
									<table>
									<?php foreach ($list_indikator AS $data): ?>
										<tr>
											<td><?= $data['nomor'].'.'; ?>
											<td><a href="<?= site_url("jawaban_analisis/$data[id]/$data[subjek_tipe]/$data[id_periode]"); ?>"><h5><b><?= $data['indikator']?></b></h5></a></td>
										</tr>
									<?php endforeach; ?>
									</table>
								</div>
							<?php else: ?>
							<div class="no-found flexcenter">
								<p>Mohon maaf, tidak ada data yang dapat ditampilkan</p>
							</div>
							<?php endif; ?>
							</div>
						</div>
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