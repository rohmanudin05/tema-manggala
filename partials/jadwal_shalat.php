<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if (config_item('kode_kota')): ?>
<script>
	$(document).ready(function(){if($("#jadwal-shalat").length){const a="https://api.banghasan.com/",s=`sholat/format/json/kota/kode/${KODE_KOTA}`,l=`sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${TANGGAL}`;try{$.ajax({url:a+s,type:"get",dataType:"json",crossDomain:!0,success:function(a){$("[data-name=kota]").html(a.kota[0].nama).removeClass("shimmer line-short")},error:function(a){$(".line-short").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".line-short").removeClass("shimmer line-short")}}),$.ajax({url:a+l,type:"get",dataType:"json",crossDomain:!0,success:function(a){$(".shimmer").removeClass("shimmer"),$("[data-name=tanggal]").html(`<span>${a.jadwal.data.tanggal}</span>`),$("[data-name=imsak]").html(`<span>${a.jadwal.data.imsak}</span>`),$("[data-name=subuh]").html(`<span>${a.jadwal.data.subuh}</span>`),$("[data-name=terbit]").html(`<span>${a.jadwal.data.terbit}</span>`),$("[data-name=dhuha]").html(`<span>${a.jadwal.data.dhuha}</span>`),$("[data-name=dzuhur]").html(`<span>${a.jadwal.data.dzuhur}</span>`),$("[data-name=ashar]").html(`<span>${a.jadwal.data.ashar}</span>`),$("[data-name=maghrib]").html(`<span>${a.jadwal.data.maghrib}</span>`),$("[data-name=isya]").html(`<span>${a.jadwal.data.isya}</span>`)},error:function(a){$(".box-shalat").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".box-shalat").removeClass("shimmer")}})}catch(a){console.log(a)}}});
	$(document).ready(function(){if($("#jadwal-shalat2").length){const b="https://api.banghasan.com/",t=`sholat/format/json/kota/kode/${KODE_KOTA}`,m=`sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${BESOK}`;try{$.ajax({url:b+m,type:"get",dataType:"json",crossDomain:!0,success:function(b){$(".shimmer").removeClass("shimmer"),$("[data-name=tanggal2]").html(`<span>${b.jadwal.data.tanggal}</span>`),$("[data-name=imsak2]").html(`<span>${b.jadwal.data.imsak}</span>`),$("[data-name=subuh2]").html(`<span>${b.jadwal.data.subuh}</span>`),$("[data-name=terbit2]").html(`<span>${b.jadwal.data.terbit}</span>`),$("[data-name=dhuha2]").html(`<span>${b.jadwal.data.dhuha}</span>`),$("[data-name=dzuhur2]").html(`<span>${b.jadwal.data.dzuhur}</span>`),$("[data-name=ashar2]").html(`<span>${b.jadwal.data.ashar}</span>`),$("[data-name=maghrib2]").html(`<span>${b.jadwal.data.maghrib}</span>`),$("[data-name=isya2]").html(`<span>${b.jadwal.data.isya}</span>`)},error:function(b){$(".box-shalat").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".box-shalat").removeClass("shimmer")}})}catch(b){console.log(b)}}});
</script>

<?php if (config_item('kode_kota')): ?>
	<script>
		const KODE_KOTA = "<?= config_item('kode_kota') ?>";
		const TANGGAL = "<?= date('Y-m-d') ?>";
		const BESOK = "<?= date("Y-m-d", mktime(0,0,0,date("n"),date("j")+1,date("Y"))) ?>";
	</script>
<?php endif; ?>

	<div class="boxmodule">
		<div class="boxmodule-head flexleft">
			<div class="icon-boxmodule bgsec flexcenter">
			<i class="fa fa-clock-o"></i>
			</div>
			<h1 class="colorsec">Jadwal Shalat</h1>
		</div>
		<div class="boxmodule-padding">
		<div class="flexcolumn margin-min5" id="jadwal-shalat">
			<div class="shalat-judul flexleft">
				<div>
					<h2><b>Jadwal Imsak, Shalat & Berbuka</b><br/>Untuk Wilayah <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?><br/><span id="tanggalwaktu"></span></h2>
				</div>
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
				document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
				</script>
			</div>
			<div class="shalat-isi">
				<div class="flexcolumn margin-min3">
					<div class="shalat-box">
						<div class="shalat-box-judul flexcenter">Imsak</div>
						<div class="shalat-time"><span data-name="imsak"></span></div>
					</div>
					<div class="shalat-box">
						<div class="shalat-box-judul flexcenter">Subuh</div>
						<div class="shalat-time"><span data-name="subuh"></span></div>
					</div>
					<div class="shalat-box">
						<div class="shalat-box-judul flexcenter">Dzuhur</div>
						<div class="shalat-time"><span data-name="dzuhur"></span></div>
					</div>
					<div class="shalat-box">
						<div class="shalat-box-judul flexcenter">Ashar</div>
						<div class="shalat-time"><span data-name="ashar"></span></div>
					</div>
					<div class="shalat-box">
						<div class="shalat-box-judul flexcenter">Maghrib</div>
						<div class="shalat-time"><span data-name="maghrib"></span></div>
					</div>
					<div class="shalat-box">
						<div class="shalat-box-judul flexcenter">Isya</div>
						<div class="shalat-time"><span data-name="isya"></span></div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
<?php endif; ?>