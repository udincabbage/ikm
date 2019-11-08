<?php

// $rerata_kepuasan = array(86,81,79,77,81);
$rerata_kepuasan = array();
$kriteria = array();


if($_GET) {
	$kode=$_GET['id'];
	switch ($kode) {
		case 1:
			$aspek = "Tata Pamong, Tata Kelola, dan Kerjasama";
			$kriteria[0] = "2018/2019 Genap";
			$rerata_kepuasan[0] = 83;
			$stp[0] = 0;
			$tp[0] = 0;
			$p[0] = 67;
			$sp[0] = 33;
		break;
		case 2:
			$aspek = "Kemahasiswaan";
			$kriteria[0] = "2018/2019 Genap";
			$rerata_kepuasan[0] = 87;
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
			$stp[0] = 0;
			$tp[0] = 0;
			$p[0] = 54;
			$sp[0] = 46;
			$stp[1] = 0;
			$tp[1] = 7;
			$p[1] = 72;
			$sp[1] = 21;
			$stp[2] = 0;
			$tp[2] = 2;
			$p[2] = 74;
			$sp[2] = 24;
			$stp[3] = 0;
			$tp[3] = 9;
			$p[3] = 76;
			$sp[3] = 15;
			$rerata_kepuasan[0] = 86;
			$rerata_kepuasan[1] = 81;
			$rerata_kepuasan[2] = 79;
			$rerata_kepuasan[3] = 77;
			break;
		case 4:
			$aspek = "Keuangan";
			$kriteria[0] = "2018/2019 Genap";
			$rerata_kepuasan[0] = 84;

			$stp[0] = 0;
			$tp[0] = 6;
			$p[0] = 58;
			$sp[0] = 36;

			break;
		case 5:
			$aspek = "Sarana dan Prasarana";
			$kriteria[0] = "2018/2019 Genap";
			$rerata_kepuasan[0] = 71;

			$stp[0] = 0;
			$tp[0] = 29;
			$p[0] = 60;
			$sp[0] = 11;

			break;
		case 6:
			$aspek = "Pendidikan";
			$kriteria[0] = "2018/2019 Genap";
			$rerata_kepuasan[0] = 84;
			$stp[0] = 0;
			$tp[0] = 2;
			$p[0] = 62;
			$sp[0] = 36;
			break;
		case 7:
			$aspek = "Penelitian";
			$kriteria[0] = "2018/2019 Genap";
			$rerata_kepuasan[0] = 83;
			$stp[0] = 0;
			$tp[0] = 5;
			$p[0] = 60;
			$sp[0] = 35;
			break;
		case 8:
			$aspek = "pengabdian kepada Masyarakat";
			$kriteria[0] = "2018/2019 Genap";
			$rerata_kepuasan[0] = 82;
			$stp[0] = 0;
			$tp[0] = 6;
			$p[0] = 62;
			$sp[0] = 32;
			break;
		case 9:
			$aspek = "Lembaga Penjaminan Mutu";
			$kriteria[0] = "2018/2019 Genap";
			$rerata_kepuasan[0] = 87;
			$stp[0] = 0;
			$tp[0] = 1;
			$p[0] = 50;
			$sp[0] = 49;
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
				<a href="?page=Kuesioner-Main" class="current">
					Per Tahun
				</a>
			</div>
			<h1><?php echo $aspek; ?></h1>
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
											<td style="text-align:center"><strong>Kriteria</strong></td>
											<td style="text-align:center"><strong>Sangat Tidak Puas</strong></td>
											<td style="text-align:center"><strong>Tidak Puas</strong></td>
											<td style="text-align:center"><strong>Puas</strong></td>
											<td style="text-align:center"><strong>Sangat Puas</strong></td>
											<td style="text-align:center"><strong>Weighted Average (%)</strong></td>
										</tr>
									</thead>
									<tbody>
										<?php
										$jumlah_kriteria = sizeof($kriteria);

										$jumlah_tahun = sizeof($kriteria);
										$average_stp = array_sum($stp)/$jumlah_tahun;
										$average_tp = array_sum($tp)/$jumlah_tahun;
										$average_p = array_sum($p)/$jumlah_tahun;
										$average_sp = array_sum($sp)/$jumlah_tahun;
										$rerata_kepuasan = array_filter($rerata_kepuasan);
										if(count($rerata_kepuasan)) {
										    $average = array_sum($rerata_kepuasan)/count($rerata_kepuasan);
										}
										for ($i=0; $i < $jumlah_kriteria; $i++) {
											$j=$i+1;
											echo "<tr>
												<td style=\"text-align:center\">".$j."</td>
												<td>".$kriteria[$i]."</td>
												<td style=\"text-align:right\">".$stp[$i]."</td>
												<td style=\"text-align:right\">".$tp[$i]."</td>
												<td style=\"text-align:right\">".$p[$i]."</td>
												<td style=\"text-align:right\">".$sp[$i]."</td>
												<td style=\"text-align:right\"><a href=\"?page=Kuesioner-Responden&kode=$kode&id=".$j."\">".$rerata_kepuasan[$i]."</a></td>
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
					$rep = sizeof($kriteria);
					for ($i=0; $i < $rep; $i++) {
						echo "['".$kriteria[$i]."',".$rerata_kepuasan[$i]."],";
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
