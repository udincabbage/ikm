<?php

// $rerata_kepuasan = array(86,81,79,77,81);
$rerata_kepuasan = array();
$rerata_kepuasan_responden = array();
$kriteria = array();
$responden = array();


if($_GET) {
	$id=$_GET['id'];
	$kode=$_GET['kode'];
	switch ($kode) {
		case 1:
			$aspek = "Tata Pamong, Tata Kelola, dan Kerjasama";
			$kriteria[0] = "2018/2019 Genap";

			$rerata_kepuasan[0] = 83;
			$rerata_kepuasan_responden[0] = 81;
			$rerata_kepuasan_responden[1] = 85;
			$rerata_kepuasan_responden[2] = 83;

			$responden[0] = "Mahasiswa";
			$responden[1] = "Dosen";
			$responden[2] = "Tenaga Kependidikan";
			$stp[0] = 0;
			$tp[0] = 0;
			$p[0] = 74;
			$sp[0] = 26;

			$stp[1] = 0;
			$tp[1] = 1;
			$p[1] = 59;
			$sp[1] = 40;

			$stp[2] = 0;
			$tp[2] = 0;
			$p[2] = 67;
			$sp[2] = 33;
		break;
		case 2:
		$aspek = "Kemahasiswaan";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan_responden[0] = 87;
		$responden[0] = "Mahasiswa";

		$stp[0] = 0;
		$tp[0] = 0;
		$p[0] = 52;
		$sp[0] = 48;

		break;
		case 3:
		$aspek = "Sumber Daya Manusia";
		$kriteria[0] = "2018/2019 Genap";
		$kriteria[1] = "2018/2019 Ganjil";
		$kriteria[2] = "2017/2018 Genap";
		$kriteria[3] = "2017/2018 Ganjil";
		$responden[0] = "Dosen";
		$responden[1] = "Tenaga Kependidikan";
		$rerata_kepuasan[0] = 86;
		$rerata_kepuasan[1] = 81;
		$rerata_kepuasan[2] = 79;
		$rerata_kepuasan[3] = 77;

		switch ($id) {
			case 1:
				$stp[0] = 0;
				$tp[0] = 0;
				$p[0] = 54;
				$sp[0] = 46;

				$stp[1] = 0;
				$tp[1] = 0;
				$p[1] = 54;
				$sp[1] = 46;
				$rerata_kepuasan_responden[0] = 86;
				$rerata_kepuasan_responden[1] = 86;
				break;
			case 2:
				$stp[0] = 0;
				$tp[0] = 0;
				$p[0] = 74;
				$sp[0] = 26;

				$stp[1] = 0;
				$tp[1] = 0;
				$p[1] = 74;
				$sp[1] = 26;
				$rerata_kepuasan_responden[0] = 81;
				$rerata_kepuasan_responden[1] = 81;
				break;
			case 3:
				$stp[0] = 0;
				$tp[0] = 0;
				$p[0] = 54;
				$sp[0] = 46;

				$stp[1] = 0;
				$tp[1] = 0;
				$p[1] = 54;
				$sp[1] = 46;
				$rerata_kepuasan_responden[0] = 79;
				$rerata_kepuasan_responden[1] = 79;
				break;
			case 4:
				$stp[0] = 0;
				$tp[0] = 0;
				$p[0] = 54;
				$sp[0] = 46;

				$stp[1] = 0;
				$tp[1] = 0;
				$p[1] = 54;
				$sp[1] = 46;
				$rerata_kepuasan_responden[0] = 77;
				$rerata_kepuasan_responden[1] = 77;
				break;
			default:
			echo "KOSONG";
		}

		break;
		case 4:
		$aspek = "Keuangan";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 84;
		$kriteria[0] = "2018/2019 Genap";
		$kriteria[1] = "2018/2019 Ganjil";
		$kriteria[2] = "2017/2018 Genap";
		$kriteria[3] = "2017/2018 Ganjil";
		$responden[0] = "Dosen";
		$responden[1] = "Tenaga Kependidikan";
		$responden[2] = "Mahasiswa";
		$rerata_kepuasan[0] = 86;
		$rerata_kepuasan[1] = 81;
		$rerata_kepuasan[2] = 79;
		$rerata_kepuasan[3] = 77;

		$stp[0] = 0;
		$tp[0] = 1;
		$p[0] = 51;
		$sp[0] = 48;

		$stp[1] = 0;
		$tp[1] = 8;
		$p[1] = 50;
		$sp[1] = 42;

		$stp[2] = 0;
		$tp[2] = 9;
		$p[2] = 73;
		$sp[2] = 18;

		$rerata_kepuasan_responden[0] = 86;
		$rerata_kepuasan_responden[1] = 86;
		$rerata_kepuasan_responden[2] = 85;

		break;
		case 5:
		$aspek = "Sarana dan Prasarana";
		$kriteria[0] = "2018/2019 Genap";
		$responden[0] = "Dosen";
		$responden[1] = "Tenaga Kependidikan";
		$responden[2] = "Mahasiswa";
		$rerata_kepuasan[0] = 61;
		$rerata_kepuasan[1] = 61;
		$rerata_kepuasan[2] = 61;

		$stp[0] = 0;
		$tp[0] = 35;
		$p[0] = 60;
		$sp[0] = 5;

		$stp[1] = 0;
		$tp[1] = 22;
		$p[1] = 56;
		$sp[1] = 22;

		$stp[2] = 0;
		$tp[2] = 30;
		$p[2] = 64;
		$sp[2] = 6;

		$rerata_kepuasan[0] = 61;

		$rerata_kepuasan_responden[0] = 68;
		$rerata_kepuasan_responden[1] = 75;
		$rerata_kepuasan_responden[2] = 69;
		break;
		case 6:
		$aspek = "Pendidikan";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 84;

		$responden[0] = "Mahasiswa";
		$rerata_kepuasan[0] = 61;
		$stp[0] = 0;
		$tp[0] = 5;
		$p[0] = 61;
		$sp[0] = 34;
		$rerata_kepuasan_responden[0] = round(($stp[0]*1+$tp[0]*2+$p[0]*3+$sp[0]*4)*100/400,0);


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
				<a href="?page=Kuesioner-Responden" class="current">
					Responden
				</a>
			</div>
			<h1><?php echo $aspek." > ",$kriteria[0]; ?></h1>
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
											<td style="text-align:center"><strong>Responden</strong></td>
											<td style="text-align:center"><strong>Sangat Tidak Puas</strong></td>
											<td style="text-align:center"><strong>Tidak Puas</strong></td>
											<td style="text-align:center"><strong>Puas</strong></td>
											<td style="text-align:center"><strong>Sangat Puas</strong></td>
											<td style="text-align:center"><strong>Weighted Average</strong></td>
										</tr>
									</thead>
									<tbody>
										<?php
										$jumlah_responden = sizeof($responden);
										$rerata_kepuasan_responden = array_filter($rerata_kepuasan_responden);
										if(count($rerata_kepuasan_responden)) {
										    $average = array_sum($rerata_kepuasan_responden)/count($rerata_kepuasan_responden);
												$average_stp = array_sum($stp)/$jumlah_responden;
												$average_tp = array_sum($tp)/$jumlah_responden;
												$average_p = array_sum($p)/$jumlah_responden;
												$average_sp = array_sum($sp)/$jumlah_responden;
										}
										for ($i=0; $i < $jumlah_responden; $i++) {
											$j=$i+1;
											echo "<tr>
												<td style=\"text-align:center\">".$j."</td>
												<td>".$responden[$i]."</td>
												<td style=\"text-align:right\">".$stp[$i]."</td>
												<td style=\"text-align:right\">".$tp[$i]."</td>
												<td style=\"text-align:right\">".$p[$i]."</td>
												<td style=\"text-align:right\">".$sp[$i]."</td>
												<td style=\"text-align:right\"><a href=\"?page=Kuesioner-Indikator&kode=$kode&id=$j&r=$responden[$i]\">".$rerata_kepuasan_responden[$i]."</a></td>
											</tr>";
										}
										?>
										<tr>
											<td colspan="2" >Rerata</td>

											<td style="text-align:right"><?php echo round($average_stp,0);?></td>
											<td style="text-align:right"><?php echo round($average_tp,0);?></td>
											<td style="text-align:right"><?php echo round($average_p,0);?></td>
											<td style="text-align:right"><?php echo round($average_sp,0);?></td>
											<td style="text-align:right"><?php echo round($average,0);?></td>
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
							<div id="viewPie" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
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
					$rep = sizeof($responden);
					for ($i=0; $i < $rep; $i++) {
						echo "['".$responden[$i]."',".$rerata_kepuasan_responden[$i]."],";
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

Highcharts.chart('viewPie', {
	chart: {
		plotBackgroundColor: null,
		plotBorderWidth: null,
		plotShadow: false,
		type: 'pie'
	},
	title: {
		text: '<?php //echo $pertanyaan;?>'
	},
	tooltip: {
		pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	},
	plotOptions: {
		pie: {
			allowPointSelect: true,
			cursor: 'pointer',
			dataLabels: {
				enabled: true,
				format: '<b>{point.name}</b>: {point.percentage:.1f} %'
			}
		}
	},
	series: [{
		name: 'Jawaban',
		colorByPoint: true,
		data: [{
			name: 'Puas',
			y: <?php echo $average_p;?>,
			sliced: true,
			selected: true
		}, {
			name: 'Sangat puas',
			y: <?php echo $average_sp;?>
		}, {
			name: 'Tidak puas',
			y: <?php echo $average_tp;?>
		}, {
			name: 'Sangat tidak puas',
			y: <?php echo $average_stp;?>
		}]
	}]
});
</script>
