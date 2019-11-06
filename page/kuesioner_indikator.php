<?php

// $rerata_kepuasan = array(86,81,79,77,81);
$rerata_kepuasan = array();
$rerata_kepuasan_responden = array();
$kriteria = array();
// $responden = array();
$pertanyaan = array();


if($_GET) {
	$responden=$_GET['r'];
	$id=$_GET['id'];
	$kode=$_GET['kode'];
	switch ($kode) {
		case 1:
		$aspek = "Tata Pamong, Tata Kelola, dan Kerjasama";
		$kriteria[0] = "2018/2019 Genap";
		//1.	Transparans (transparansi)
		$pertanyaan[0] = "Uniska MAB mampu menyajikan informasi penyelenggaraan kegiatan secara terbuka, cepat dan tepat.";
		if($responden=="Mahasiswa"){
			$stp[0]=0;
			$tp[0]=0;
			$p[0]=2659;
			$sp[0]=1549;
		}else if($responden=="Dosen"){
			$stp[0]=0;
			$tp[0]=8;
			$p[0]=240;
			$sp[0]=158;
		}else{
			$stp[0]=0;
			$tp[0]=0;
			$p[0]=84;
			$sp[0]=22;
		}

		//2.	Akuntabilitas (Independensi)
		$pertanyaan[1] = "Uniska MAB mampu memberikan pelayanan yang memuaskan bagi mahasiswa";
		if($responden=="Mahasiswa"){
			$stp[1]=0;
			$tp[1]=0;
			$p[1]=2451;
			$sp[1]=1757;
		}else if($responden=="Dosen"){
			$stp[1]=0;
			$tp[1]=0;
			$p[1]=251;
			$sp[1]=155;
		}else{
			$stp[1]=0;
			$tp[1]=0;
			$p[1]=85;
			$sp[1]=21;
		}
		$pertanyaan[2] = "Uniska MAB mempu mempertanggung jawabkan setiap kebijakan yang diambil secara proposional";
		if($responden=="Mahasiswa"){
			$stp[2]=0;
			$tp[2]=0;
			$p[2]=3842;
			$sp[2]=366;
		}else if($responden=="Dosen"){
			$stp[2]=0;
			$tp[2]=8;
			$p[2]=238;
			$sp[2]=160;
		}else{
			$stp[2]=0;
			$tp[2]=0;
			$p[2]=71;
			$sp[2]=35;
		}
		//3.	Responsibility (Responsibilitas)
		$pertanyaan[3] = "Civitas akademika dapat membangun suasana akademik yang kondusif dalam proses pembelajaran";
		if($responden=="Mahasiswa"){
			$stp[3]=0;
			$tp[3]=0;
			$p[3]=3345;
			$sp[3]=863;
		}else if($responden=="Dosen"){
			$stp[3]=0;
			$tp[3]=3;
			$p[3]=242;
			$sp[3]=161;
		}else{
			$stp[3]=0;
			$tp[3]=0;
			$p[3]=66;
			$sp[3]=40;
		}
		$pertanyaan[4] = "Uniska MAB sangat responsif dalam melayani mahasiswa";
		if($responden=="Mahasiswa"){
			$stp[4]=0;
			$tp[4]=0;
			$p[4]=2301;
			$sp[4]=1907;
		}else if($responden=="Dosen"){
			$stp[4]=0;
			$tp[4]=3;
			$p[4]=240;
			$sp[4]=163;
		}else{
			$stp[4]=0;
			$tp[4]=0;
			$p[4]=67;
			$sp[4]=39;
		}
		$pertanyaan[5] = "Walisongo mempunyai uraian tugas dan tanggung jawab jelas dari setiap pejabat struktural.";
		if($responden=="Mahasiswa"){
			$stp[5]=0;
			$tp[5]=0;
			$p[5]=3474;
			$sp[5]=734;
		}else if($responden=="Dosen"){
			$stp[5]=0;
			$tp[5]=0;
			$p[5]=226;
			$sp[5]=180;
		}else{
			$stp[5]=0;
			$tp[5]=0;
			$p[5]=61;
			$sp[5]=45;
		}
		//4.	Indenpendence (Indepedensi)
		$pertanyaan[6] = "Pengelola Uniska MAB dalam melaksanakan peran dan tanggung jawabnya terhindar dari pihak manapun";
		if($responden=="Mahasiswa"){
			$stp[6]=0;
			$tp[6]=0;
			$p[6]=3122;
			$sp[6]=1086;
		}else if($responden=="Dosen"){
			$stp[6]=0;
			$tp[6]=0;
			$p[6]=251;
			$sp[6]=155;
		}else{
			$stp[6]=0;
			$tp[6]=0;
			$p[6]=64;
			$sp[6]=42;
		}
		$pertanyaan[7] = "Dalam melaksanakan tugas dan fungsinya, pegawai tidak saling melempar tanggung jawab satu sama lain";
		if($responden=="Mahasiswa"){
			$stp[7]=0;
			$tp[7]=0;
			$p[7]=3152;
			$sp[7]=1056;
		}else if($responden=="Dosen"){
			$stp[7]=0;
			$tp[7]=0;
			$p[7]=216;
			$sp[7]=190;
		}else{
			$stp[7]=0;
			$tp[7]=0;
			$p[7]=77;
			$sp[7]=29;
		}
		$pertanyaan[8] = "Uniska MAB dikelola secara profesional tanpa benturan kepentingan dan pengaruh tekenan dari pihak manapun";
		if($responden=="Mahasiswa"){
			$stp[8]=0;
			$tp[8]=0;
			$p[8]=3342;
			$sp[8]=866;
		}else if($responden=="Dosen"){
			$stp[8]=0;
			$tp[8]=0;
			$p[8]=232;
			$sp[8]=174;
		}else{
			$stp[8]=0;
			$tp[8]=0;
			$p[8]=61;
			$sp[8]=45;
		}
		//5.	Fairness (kesetaraan dan Kewajaran)
		$pertanyaan[9] = "Uniska MAB memberikan perlakuan yang setara kepad pihak yang berkepentingan sesuai dengan manfaat dan kontribusi yang diberikan kepada Universitas.";
		if($responden=="Mahasiswa"){
			$stp[9]=0;
			$tp[9]=0;
			$p[9]=3107;
			$sp[9]=1101;
		}else if($responden=="Dosen"){
			$stp[9]=0;
			$tp[9]=10;
			$p[9]=246;
			$sp[9]=150;
		}else{
			$stp[9]=0;
			$tp[9]=0;
			$p[9]=64;
			$sp[9]=42;
		}
		$pertanyaan[10] = "Uniska MAB memberikan kesempatan yang sama dalam penerimaan karyawan, mahasiswa berkarir dan melaksanakan tugasnya secara profesional tanpa adanya diskriminasi";
		if($responden=="Mahasiswa"){
			$stp[10]=0;
			$tp[10]=0;
			$p[10]=3501;
			$sp[10]=707;
		}else if($responden=="Dosen"){
			$stp[10]=0;
			$tp[10]=0;
			$p[10]=250;
			$sp[10]=156;
		}else{
			$stp[10]=0;
			$tp[10]=0;
			$p[10]=76;
			$sp[10]=30;
		}

		break;
		case 2:
		$aspek = "Kemahasiswaan";
		$kriteria[0] = "2018/2019 Genap";
			$pertanyaan[0] = "Mahasiswa mendapatkan layanan pada saat registrasi mahasiswa baru";
			$pertanyaan[1] = "Mahasiswa mendapatkan layanan Kepenasehatan Akademik";
			$pertanyaan[2] = "Mahasiswa mendapatkan layanan pelaksanaan perkuliahan";
			$pertanyaan[3] = "Mahasiswa mendapatan pendidikan karakter";
			$pertanyaan[4] = "Mahasiswa mendapatkan pendidikan tentang anti korupsi";
			$pertanyaan[5] = "Mahasiswa mendapatkan pendidikan NAPZA";
			$pertanyaan[6] = "Kurikulum yang diajarkan sesuai dengan perkembangan ilmu pengetahuan dan teknologi";
			$pertanyaan[7] = "Kejelasan materi perkuliahan yang diberikan dosen";
			$pertanyaan[8] = "Waktu dipergunakan secara efektif oleh dosen dalam proses pembelajaran";
			$pertanyaan[9] = "Dosen memberikan tugas sesuai dengan capaian pembelajaran";
			$pertanyaan[10] = "Mahasiswa mendapatkan layanan Pelaksanaan UTS";
			$pertanyaan[11] = "Mahasiswa mendapatkan layanan Praktikum";
			$pertanyaan[12] = "Mahasiswa mendapatkan layanan pembimbingan magang/PL";
			$pertanyaan[13] = "Mahasiswa dilibatkan dalam penelitian atau PkM dosen";
			$pertanyaan[14] = "Mahasiswa mendapatkan layanan pembimbingan Skripsi/Tesis";
			$pertanyaan[15] = "Dosen memasukkan hasil penelitiannya dalam pembelajaran";
			$pertanyaan[16] = "Mahasiswa mendapatkan layanan pengembangan suasana akademik.";

			$stp[0]=0;$tp[0]=0;$p[0]=2128;$sp[0]=2080;
			$stp[1]=0;$tp[1]=0;$p[1]=2319;$sp[1]=1889;
			$stp[2]=0;$tp[2]=0;$p[2]=2035;$sp[2]=2173;
			$stp[3]=0;$tp[3]=0;$p[3]=2077;$sp[3]=2131;
			$stp[4]=0;$tp[4]=0;$p[4]=2078;$sp[4]=2130;
			$stp[5]=0;$tp[5]=0;$p[5]=2105;$sp[5]=2103;
			$stp[6]=0;$tp[6]=0;$p[6]=2068;$sp[6]=2140;
			$stp[7]=0;$tp[7]=0;$p[7]=2172;$sp[7]=2036;
			$stp[8]=0;$tp[8]=0;$p[8]=2186;$sp[8]=2022;
			$stp[9]=0;$tp[9]=0;$p[9]=2232;$sp[9]=1976;
			$stp[10]=0;$tp[10]=0;$p[10]=2278;$sp[10]=1930;
			$stp[11]=0;$tp[11]=0;$p[11]=2249;$sp[11]=1959;
			$stp[12]=0;$tp[12]=0;$p[12]=2330;$sp[12]=1878;
			$stp[13]=0;$tp[13]=0;$p[13]=2168;$sp[13]=2040;
			$stp[14]=0;$tp[14]=0;$p[14]=2090;$sp[14]=2118;
			$stp[15]=0;$tp[15]=0;$p[15]=2373;$sp[15]=1835;
			$stp[16]=0;$tp[16]=0;$p[16]=2210;$sp[16]=1998;


		break;
		case 3:
		$aspek = "Sumber Daya Manusia";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 86;
		$rerata_kepuasan[1] = 81;
		$rerata_kepuasan[2] = 79;
		$rerata_kepuasan[3] = 77;
		break;
		case 4:
		$aspek = "Keuangan";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 84;
		break;
		case 5:
		$aspek = "Sarana dan Prasarana";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 61;
		break;
		case 6:
		$aspek = "Pendidikan";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 84;
		break;
		case 7:
		$aspek = "Penelitian";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 83;
		break;
		case 8:
		$aspek = "pengabdian kepada Masyarakat";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 82;
		break;
		case 9:
		$aspek = "Lembaga Penjaminan Mutu";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 87;
		break;
		default:
		echo "KOSONG";
	}

	?>

	<div id="content">
		<div id="content-header">
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom">
					<i class="icon-home"></i> Home
				</a>
				<a href="?page=Kuesioner-Main">
					Table Kepuasan Layanan
				</a>
				<a href="?page=Kuesioner-Tahun&id=<?php echo $kode;?>">
					Per Tahun
				</a>
				<a href="?page=Kuesioner-Responden&kode=<?php echo $kode;?>&id=<?php echo $id;?>">
					Responden
				</a>
				<a href="#" class="current">
					Indikator
				</a>
			</div>
			<h1><?php echo $aspek." > ".$kriteria[0]." > ".$responden; ?></h1>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span6">
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
							<h5>Tabel</h5>
						</div>
						<div class="widget-content">
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<td style="text-align:center"><strong>No</strong></td>
											<td style="text-align:center"><strong>Pertanyaan</strong></td>
											<td style="text-align:center"><strong>Sangat Tidak Puas</strong></td>
											<td style="text-align:center"><strong>Tidak Puas</strong></td>
											<td style="text-align:center"><strong>Puas</strong></td>
											<td style="text-align:center"><strong>Sangat Puas</strong></td>
											<td style="text-align:center"><strong>Weighted Average (%)</strong></td>
										</tr>
									</thead>
									<tbody>
										<?php
										$jumlah_pertanyaan = sizeof($pertanyaan);
										// $rerata_kepuasan_pertanyaan = array_filter($rerata_kepuasan_pertanyaan);
										// if(count($rerata_kepuasan_pertanyaan)) {
										//     $average = array_sum($rerata_kepuasan_pertanyaan)/count($rerata_kepuasan_pertanyaan);
										// }
										$weighted_average = array();
										$jumlah_weighted_average = 0;
										for ($i=0; $i < $jumlah_pertanyaan; $i++) {
											$j=$i+1;
											$jumlah_nilai = $stp[$i]+$tp[$i]+$p[$i]+$sp[$i];
											$weighted_average[$i] = $stp[$i]*1+$tp[$i]*2+$p[$i]*3+$sp[$i]*4;
											$weighted_average[$i] = $weighted_average[$i]/($jumlah_nilai*4);
											$jumlah_weighted_average = $jumlah_weighted_average+($weighted_average[$i]*100);
											$link = "<a href=\"?page=Kuesioner-Grafik-Pie&Kode=1&tahun=201802&stp=".$stp[$i]."&tp=".$tp[$i]."&p=".$p[$i]."&sp=".$sp[$i]."\" target=\"_self\">".round($weighted_average[$i]*100,0)."</i></a>";
											echo "<tr>
												<td style=\"text-align:center\">".$j."</td>
												<td>".$pertanyaan[$i]."</td>
												<td style=\"text-align:right\">".$stp[$i]."</td>
												<td style=\"text-align:right\">".$tp[$i]."</td>
												<td style=\"text-align:right\">".$p[$i]."</td>
												<td style=\"text-align:right\">".$sp[$i]."</td>
												<td style=\"text-align:right\">$link</a></td>
											</tr>";
										}
										?>
										<tr>
											<td colspan="6" >Rerata</td>
											<td style="text-align:right"><?php echo round($jumlah_weighted_average/$jumlah_pertanyaan,0);?></td>
										</tr>
									</tbody>

								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
							<h5>Bar chart</h5>
						</div>
						<div class="widget-content">
							<div class="bars" id="bars" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php } ?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script type="text/javascript">
Highcharts.chart('bars', {
	chart: {
		type: 'column'
	},
	title: {
		text: 'Rerata Kepuasan Layanan'
	},
	subtitle: {
		text: 'Universitas Islam Kalimantan Islam MAB'
	},
	xAxis: {
		type: 'category',
		labels: {
			rotation: -45,
			style: {
				fontSize: '13px',
				fontFamily: 'Verdana, sans-serif'
			}
		}
	},
	yAxis: {
		min: 0,
		title: {
			text: 'Rerata Kepuasan (%)'
		}
	},
	legend: {
		enabled: false
	},
	tooltip: {
		pointFormat: 'Nilai Kepuasan tiap semester: <b>{point.y:.1f} %</b>'
	},
	series: [{
		name: 'Population',
		data: [
				<?php
					$rep = sizeof($pertanyaan);
					for ($i=0; $i < $rep; $i++) {
						echo "['".($i+1)."',".($weighted_average[$i]*100)."],";
					}
				 ?>
		],
		dataLabels: {
			enabled: true,
			rotation: -90,
			color: '#FFFFFF',
			align: 'right',
			format: '{point.y:.1f}', // one decimal
			y: 10, // 10 pixels down from the top
			style: {
				fontSize: '13px',
				fontFamily: 'Verdana, sans-serif'
			}
		}
	}]
});
</script>
