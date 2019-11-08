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
		break;
		case 2:
			$aspek = "Kemahasiswaan";
			$kriteria[0] = "2018/2019 Genap";
			$rerata_kepuasan[0] = 87;
		break;
		case 3:
			$aspek = "Sumber Daya Manusia";
			$kriteria[0] = "2018/2019 Genap";
			$kriteria[1] = "2018/2019 Ganjil";
			$kriteria[2] = "2017/2018 Genap";
			$kriteria[3] = "2017/2018 Ganjil";
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
			$rerata_kepuasan[0] = 71;
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
											<td style="text-align:center"><strong>Nilai Kepuasan (%)</strong></td>
										</tr>
									</thead>
									<tbody>
										<?php
										$jumlah_kriteria = sizeof($kriteria);
										$rerata_kepuasan = array_filter($rerata_kepuasan);
										if(count($rerata_kepuasan)) {
										    $average = array_sum($rerata_kepuasan)/count($rerata_kepuasan);
										}
										for ($i=0; $i < $jumlah_kriteria; $i++) {
											$j=$i+1;
											echo "<tr>
												<td style=\"text-align:center\">".$j."</td>
												<td>".$kriteria[$i]."</td>
												<td style=\"text-align:right\"><a href=\"?page=Kuesioner-Responden&kode=$kode&id=".$j."\">".$rerata_kepuasan[$i]."</a></td>
											</tr>";
										}
										?>
										<tr>
											<td colspan="2" >Rerata</td>
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
</script>
