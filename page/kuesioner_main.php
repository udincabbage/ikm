<?php
$rerata_kepuasan = array(83,87,81,84,61,84,83,82,87);
$kriteria = array();
$kriteria[0] = "Tata Pamong, Tata Kelola, dan Kerjasama";
$kriteria[1] = "Kemahasiswaan";
$kriteria[2] = "Sumber Daya Manusia";
$kriteria[3] = "Keuangan";
$kriteria[4] = "Sarana dan Prasarana";
$kriteria[5] = "Pendidikan";
$kriteria[6] = "Penelitian";
$kriteria[7] = "Pengabdian kepada Masyarakat";
$kriteria[8] = "Lembaga Penjamin Mutu";
?>
<div id="content">
	<div id="content-header">
		<div id="breadcrumb">
			<a href="#" title="Go to Home" class="tip-bottom">
				<i class="icon-home"></i> Home
			</a>
			<a href="#" class="current">
				Table Kepuasan Layanan
			</a>
		</div>
		<h1>Table Kepuasan Layanan</h1>
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
										<td style="text-align:center"><strong>Rerata Kepuasan (%)</strong></td>
									</tr>
								</thead>
								<tbody>
									<?php
									$jumlah_kriteria = sizeof($kriteria);
									for ($i=0; $i < $jumlah_kriteria; $i++) {
										$j=$i+1;
										echo "<tr>
											<td style=\"text-align:center\">".$j."</td>
											<td>".$kriteria[$i]."</td>
											<td style=\"text-align:right\"><a href=\"?page=Kuesioner-Tahun&id=".$j."\">".$rerata_kepuasan[$i]."</a></td>
										</tr>";
									}
									?>								
									<tr>
										<td colspan="2">Rata-rata</td>
										<td style="text-align:right"><strong>80.32</strong></td>
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
		pointFormat: 'Rerata Kepuasan tiap semester: <b>{point.y:.1f} %</b>'
	},
	series: [{
		name: 'Population',
		data: [
				<?php
					for ($i=0; $i < 9; $i++) {
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
