<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<?php $latar_web = $latar_website ? base_url($latar_website) : base_url($this->theme_folder.'/'.$this->theme .'/images/latar_website.jpg') ?>

<div class="headermain">
	<div class="header-bg" style="background-image: url(<?= $latar_web ?>);">
		<div class="header-bg-mask"></div>
	</div>
	<div class="header-top">
		<div class="container-page">
		<div class="header-section flexleft">
			<div class="header-section-left">
				<a class="flexleft" href="<?= site_url(); ?>">
				<img src="<?= gambar_desa($desa['logo']);?>"/>
				<div>
				<h2><?= ucwords($this->setting->website_title); ?></h2>
				<h1><?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h1>
				<div class="desktop-view"><h2><?= ucwords($this->setting->sebutan_kecamatan_singkat." ".$desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?></h2></div>
				</div>
				</a>
			</div>
			<div class="header-section-right flexright">
				<div>
				<div id="date"></div>
				<a style="color:#fff;" data-remote="false" data-toggle="modal" data-target="#search" title="Cari"><button class="btn bgprime"><i class="fa fa-search"></i></button></a>
				<a style="color:#fff;" href="<?= site_url('siteman') ?>"><button class="btn bgsec">Login</button></a>
				<a style="color:#fff;" href="<?= site_url('kehadiran') ?>"><button class="btn bgsec">Kehadiran</button></a>
				<a style="color:#fff;" href="<?= site_url('layanan-mandiri') ?>"><button class="btn bgsec">E-Mandiri</button></a>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="header-menu">
	<div class="container-page">
		<nav class="menu">
			<ul class="menumain">
			<li class="bghome"><a href="<?= site_url(); ?>"><i class="fa fa-home" style="margin-right:5px;"></i>Beranda</a></li>
			<?php foreach($menu_atas as $data) { ?>
				<?php if(count($data['submenu'])>0): ?>
					<li class="plus-submenu"><a href="<?= $data['link']?>"><?= $data['nama']; if(count($data['submenu'])>0) { echo "<span class='caret'></span>"; } ?></a>
						<ul class="submenu">
							<?php foreach($data['submenu'] as $submenu): ?>
								<li><a href="<?= $submenu['link']?>"><?= $submenu['nama']?></a></li>
							<?php endforeach; ?>	
						</ul>
					</li>
				<?php else: ?>
					<li><a href="<?= $data['link']?>"><?= $data['nama']?></a></li>
				<?php endif; ?>
			<?php } ?>	
			</ul>
		</nav>
	</div>
	</div>
</div>
<div class="running-text bgprime">
	<marquee onmouseover="this.stop()" onmouseout="this.start()">
	<?php if ($teks_berjalan): ?>
	<?php foreach ($teks_berjalan AS $teks): ?>
		<span>
		<?= $teks['teks']?>
		<?php if ($teks['tautan']): ?>
			<a href="<?= $teks['tautan'] ?>" rel="noopener noreferrer" title="Baca Selengkapnya"><?= $teks['judul_tautan']?></a>
		<?php endif; ?>
		</span>
	<?php endforeach ?>
	<?php else: ?>
		Selamat Datang Di <?= ucwords($this->setting->website_title); ?> <?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?>, <?= ucwords($this->setting->sebutan_kecamatan_singkat." ".$desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?>
	<?php endif; ?>
	</marquee>
</div>

<div class="m-mobile-area">
<div class="m-mobile flexleft">
	<div class="m-mobile-btn flexcenter" onclick="Openmenu()">
	<svg viewBox="0 0 24 24">
		<path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
	</svg>
	</div>
</div>
</div>

<div id="mmenu" class="mmenu">
	<div class="mmenu-inner">
		<?php $this->load->view("$folder_themes/partials/mmenu"); ?>
		<a href="javascript:void(0)" onclick="Closemenu()">
		<div class="closemenu flexcenter">
			<svg viewBox="0 0 24 24"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
		</div>
		</a>
	</div>
</div>

<script>
	function Openmenu() {
	  document.getElementById("mmenu").style.width = "100%";
	}
	function Closemenu() {
	  document.getElementById("mmenu").style.width = "0";
	}  
</script>

<script>
	var tw = new Date();
	if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
	else (a=tw.getTime());
	tw.setTime(a);
	var tahun= tw.getFullYear ();
	var hari= tw.getDay ();
	var bulan= tw.getMonth ();
	var tanggal= tw.getDate ();
	var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
	var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
	document.getElementById("date").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>

	<div class="modal fade" id="search" tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h4 class='modal-title'>Cari Artikel</h4>
				</div>
				<div class="modal-body">
					<form method=get action="<?= site_url(); ?>">
						<div class="formsearch flexleft">
							<input type="text" name="cari" maxlength="50" class="form-control" value="<?= $cari ?>" placeholder="Cari Artikel">
							<button type="submit" class="btn bgsec btn-sm" style="margin:0;color:#fff;margin:0 0 0 5px;"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>