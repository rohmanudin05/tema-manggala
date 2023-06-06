<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="boxmodule">
	<div class="boxmodule-head flexleft">
		<div class="icon-boxmodule bgsec flexcenter">
		<i class="fa fa-bullhorn"></i>
		</div>
		<h1 class="colorsec">Pengaduan</h1>
	</div>
	<div class="boxmodule-padding">
	<form action="<?= $search_action; ?>" method="get">
			<div class="row">
				<div class="col-md-3">
					<select class="form-control" id="caristatus" name="caristatus" style="padding:5px 10px !important;height:auto !important;line-height:auto !important;margin:1px 0 0 !important;">
						<option value="">Semua Status</option>
						<option value="1" <?= selected($caristatus, 1); ?>>Menunggu Diproses</option>
						<option value="2" <?= selected($caristatus, 2); ?>>Sedang Diproses</option>
						<option value="3" <?= selected($caristatus, 3); ?>>Selesai Diproses</option>
					</select>
				</div>
				<div class="col-md-6">
					<div class="input-group">
						<input type="text" name="cari" value="<?= $cari; ?>" placeholder="Cari pengaduan disini..." class="form-control">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
							<?php if ($cari) : ?>
								<a href="<?= site_url('pengaduan'); ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
							<?php endif; ?>
						</span>
					</div>
				</div>
				<div class="col-md-3">
					<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#buatpengaduan">Formulir Pengaduan</button>
				</div>
			</div>
		</form>
		
	<?php if ($pengaduan) : ?>
		
		<?php foreach ($pengaduan as $key => $value) : ?>
			<div class="list-group-item<?= $value['status'] ?> allstatus" data-toggle="modal" data-target="#pengaduan<?= $value['id'] ?>">
			<div class="list-pengaduan">
				<div class="table-responsive">
				<table class="table-pengaduan" style="width:100%;border:none;">
					<tr>
						<td><i class="fa fa-user"></i></td>
						<td><?= $value['nama']; ?></td>
						<td><?= $value['created_at'] ?><br/><?= $value['judul'] ?></td>
						<td style="text-align:right;float:right;">
							<?php if ($value['status'] == '1') : ?>
								<span class="label label-danger">Menunggu Diproses</span>
							<?php elseif ($value['status'] == '2') : ?>
								<span class="label label-info">Sedang Diproses</span>
							<?php elseif ($value['status'] == '3') : ?>
								<span class="label label-success">Selesai Diproses</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><span><?= substr($value['isi'], 0, 50); ?> <?php if (strlen($value['isi']) > 50) : ?><label class="text-info">read more...</label><?php endif; ?></span></td>
						<td><span class="label label-<?= $value['jumlah'] > 0 ? 'success' : 'danger'; ?> pull-right"><i class="fa fa-comments"></i> <?= $value['jumlah']; ?> Tanggapan</span></td>
					</tr>
				</table>
				</div>
			</div>

			</div>	
<div class="modal fade" id="pengaduan<?= $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="pengaduan<?= $value['id'] ?>" aria-hidden="true">
						<div class="modal-wrapper">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bgsec">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title" style="color:#fff;"><i class="fa fa-file"></i> Detail Pengaduan</h4>
									</div>
									<div class="modal-body">
										<h3 style="font-size:100%;margin:0 0 15px;padding:0;line-height:1.1;font-weight:bold;"><?= $value['judul'] ?></h3>
										<?php if ($value['foto']) : ?>
											<img style="width:100%;height:auto;margin:0 0 15px;" src="<?= base_url(LOKASI_PENGADUAN . $value['foto']); ?>">
										<?php endif; ?>
										<table class="table-pengaduan" style="width:100%;border:none;">
											<tr>
												<td>Oleh</td><td><?= $value['nama']; ?></td>
											<tr/>	
											<tr>
												<td>Tanggal</td><td><?= $value['created_at'] ?></td>
											<tr/>	
											<tr>
												<td>Isi</td><td><?= $value['isi'] ?></td>
											<tr/>	
										</table>
										<h3 style="font-size:100%;margin:15px 0 15px;padding:0;line-height:1.1;font-weight:bold;">Tanggapan :</h3>
										<?php foreach ($pengaduan_balas as $keyna => $valuena) : ?>
											<?php if ($valuena['id_pengaduan'] && $valuena['id_pengaduan'] == $value['id']) : ?>
												<div class="row" style="padding:10px 0;">
													<div class="col-md-12">
														<p>Ditanggapi oleh <?= $valuena['nama']; ?> | <?= $valuena['created_at'] ?></p>
														<p style="margin-top:5px;"><?= $valuena['isi'] ?></p>
													</div>
												</div>
											<?php endif; ?>
										<?php endforeach; ?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
									</div>
								</div>
							</div>
						</div>
					</div>			
			<?php endforeach; ?>
		
		<?php $this->load->view("$folder_themes/commons/paging"); ?>
	<?php else: ?>
		<div class="no-found flexcenter">
		<p>Mohon maaf, tidak ada data yang dapat ditampilkan</p>
		</div>
	<?php endif ?>	
	</div>
</div>


<div class="modal fade" id="buatpengaduan" tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class='modal-title'>Pengaduan</h4>
			</div>
			<div class="modal-body">
				<form action="<?= $form_action; ?>" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<?php if (($notif = session('notif')) && ($data = session('notif')['data'])) : ?>
							<div class="alert alert-danger" role="alert"><?= $notif['pesan']; ?></div>
						<?php endif; ?>
						
						<div class="form-group">
							<input name="nik" type="text" maxlength="16" class="form-control" placeholder="NIK" value="<?= $data['nik']; ?>">
						</div>
						<div class="form-group">
							<input name="nama" type="text" class="form-control" placeholder="Nama*" value="<?= $data['nama']; ?>" required>
						</div>
						<div class="form-group">
							<input name="email" type="email" class="form-control" placeholder="Email" value="<?= $data['email']; ?>">
						</div>
						<div class="form-group">
							<input name="telepon" type="text" class="form-control" placeholder="Telepon" value="<?= $data['telepon']; ?>">
						</div>
						<div class="form-group">
							<input name="judul" type="text" class="form-control" placeholder="Judul*" value="<?= $data['judul']; ?>" required>
						</div>
						<div class="form-group">
							<textarea name="isi" class="form-control" placeholder="Isi Pengaduan*" rows="5" required><?= $data['isi']; ?></textarea>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input type="text" accept="image/*" onchange="readURL(this);" class="form-control" id="file_path" placeholder="Unggah Foto" name="foto" value="<?= $data['foto']; ?>">
								<input type="file" accept="image/*" onchange="readURL(this);" class="hidden" id="file" name="foto" value="<?= $data['foto']; ?>">
								<span class="input-group-btn">
									<button type="button" class="btn btn-info" id="file_browser" style="padding:5px 10px;"><i class="fa fa-search"></i></button>
								</span>
							</div>
							<small>Gambar: png,jpg,jpeg</small><br>
							<br><img id="blah" src="#" alt="gambar" class="img-responsive hidden" />
						</div>
						<div class="form-group">
							<table>
								<tr class="captcha">
									<td>&nbsp;</td>
									<td>
										<a href="#" id="b-captcha" onclick="document.getElementById('captcha').src = '<?= base_url() . "securimage/securimage_show.php?" ?>' + Math.random(); return false" style="color: #000000;">
											<img id="captcha" src="<?= base_url('securimage/securimage_show'); ?>" alt="CAPTCHA Image" />
										</a>
									</td>
									<td>&nbsp;&nbsp;&nbsp;</td>
									<td>
										<input type="text" name="captcha_code" class="form-control" maxlength="6" placeholder="Isikan jawaban" required />
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<a href="<?= site_url('pengaduan') ?> " class="btn btn-danger pull-left"><i class="fa fa-times"></i> Tutup</a>
						<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-pencil"></i> Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	
<script type="text/javascript">
	$(document).ready(function() {
		window.setTimeout(function() {
			$("#notifikasi").fadeTo(500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 1000);

		var data = "<?= session('notif')['data'] ?>";
		if (data) {
			$('#newpengaduan').modal('show');
		}
	});

	$('#b-captcha').click();

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#blah').removeClass('hidden');
				$('#blah').attr('src', e.target.result).width(150).height(auto);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>	