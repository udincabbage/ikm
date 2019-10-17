<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/maruti.js"></script>
<script src="js/maruti.calendar.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<?php
// include_once "lib/seslogin.php";

$Kode	 = isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txt0'];
$tahun	 = isset($_GET['Tahun']) ?  $_GET['Tahun'] : '';

$mySql = "SELECT * FROM tkuis WHERE id_kuis=$Kode";
$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah 1 : ".mysqli_error($koneksidb));
$pertanyaan="";
while ($kolomData = mysqli_fetch_array($myQry)) {
	$pertanyaan = $kolomData['soal'];
}

switch ($Kode) {
    case 15:
        $jumlahResponden = 4208;
				$sangatSetuju = 2080;
				$setuju = 2120;
				$tidakTahu = 8;
				$tidakSetuju = 0;
        break;
    case 16:
        $jumlahResponden = 4208;
				$sangatSetuju = 1889;
				$setuju = 2302;
				$tidakTahu = 12;
				$tidakSetuju = 5;
        break;
    case 17:
        $jumlahResponden = 4208;
				$sangatSetuju = 2173;
				$setuju = 2002;
				$tidakTahu = 25;
				$tidakSetuju = 8;
        break;
    case 18:
        $jumlahResponden = 4208;
				$sangatSetuju = 2131;
				$setuju = 2015;
				$tidakTahu = 56;
				$tidakSetuju = 6;
        break;
    case 19:
        $jumlahResponden = 4208;
				$sangatSetuju = 2130;
				$setuju = 2001;
				$tidakTahu = 65;
				$tidakSetuju = 12;
        break;
    case 20:
        $jumlahResponden = 4208;
				$sangatSetuju = 2103;
				$setuju = 1999;
				$tidakTahu = 98;
				$tidakSetuju = 8;
        break;
    case 21:
        $jumlahResponden = 4208;
				$sangatSetuju = 2140;
				$setuju = 2008;
				$tidakTahu = 56;
				$tidakSetuju = 4;
        break;
    case 22:
        $jumlahResponden = 4208;
				$sangatSetuju = 2036;
				$setuju = 2120;
				$tidakTahu = 45;
				$tidakSetuju = 7;
        break;
    case 23:
        $jumlahResponden = 4208;
				$sangatSetuju = 2022;
				$setuju = 2130;
				$tidakTahu = 46;
				$tidakSetuju = 10;
        break;
    case 24:
        $jumlahResponden = 4208;
				$sangatSetuju = 1976;
				$setuju = 2156;
				$tidakTahu = 68;
				$tidakSetuju = 8;
        break;
    case 25:
        $jumlahResponden = 4208;
				$sangatSetuju = 1930;
				$setuju = 2184;
				$tidakTahu = 87;
				$tidakSetuju = 7;
        break;
    case 26:
        $jumlahResponden = 4208;
				$sangatSetuju = 1959;
				$setuju = 2200;
				$tidakTahu = 45;
				$tidakSetuju = 4;
        break;
    case 27:
        $jumlahResponden = 4208;
				$sangatSetuju = 1878;
				$setuju = 2301;
				$tidakTahu = 25;
				$tidakSetuju = 4;
        break;
    case 28:
        $jumlahResponden = 4208;
				$sangatSetuju = 2040;
				$setuju = 2112;
				$tidakTahu = 45;
				$tidakSetuju = 11;
        break;
    case 29:
        $jumlahResponden = 4208;
				$sangatSetuju = 2118;
				$setuju = 1998;
				$tidakTahu = 87;
				$tidakSetuju = 5;
        break;
    case 30:
        $jumlahResponden = 4208;
				$sangatSetuju = 1835;
				$setuju = 2320;
				$tidakTahu = 45;
				$tidakSetuju = 8;
        break;
    case 31:
        $jumlahResponden = 4208;
				$sangatSetuju = 1998;
				$setuju = 2125;
				$tidakTahu = 78;
				$tidakSetuju = 7;
        break;
    case 32:
        $jumlahResponden = 4208;
				$sangatSetuju = 1631;
				$setuju = 2522;
				$tidakTahu = 16;
				$tidakSetuju = 9;
        break;
    case 33:
        $jumlahResponden = 4208;
				$sangatSetuju = 1690;
				$setuju = 2456;
				$tidakTahu = 56;
				$tidakSetuju = 6;
        break;
    case 34:
        $jumlahResponden = 4208;
				$sangatSetuju = 1630;
				$setuju = 2482;
				$tidakTahu = 88;
				$tidakSetuju = 8;
        break;
    case 35:
        $jumlahResponden = 4208;
				$sangatSetuju = 1549;
				$setuju = 2555;
				$tidakTahu = 99;
				$tidakSetuju = 5;
        break;
    case 36:
        $jumlahResponden = 4208;
				$sangatSetuju = 2104;
				$setuju = 1998;
				$tidakTahu = 98;
				$tidakSetuju = 8;
        break;
    case 37:
        $jumlahResponden = 4208;
				$sangatSetuju = 1702;
				$setuju = 2454;
				$tidakTahu = 45;
				$tidakSetuju = 7;
        break;
    case 38:
        $jumlahResponden = 4208;
				$sangatSetuju = 1701;
				$setuju = 2444;
				$tidakTahu = 55;
				$tidakSetuju = 8;
        break;
    case 39:
        $jumlahResponden = 102;
				$sangatSetuju = 10;
				$setuju = 88;
				$tidakTahu = 4;
				$tidakSetuju = 0;
        break;
    case 40:
        $jumlahResponden = 102;
				$sangatSetuju = 17;
				$setuju = 75;
				$tidakTahu = 10;
				$tidakSetuju = 1;
        break;
    case 41:
        $jumlahResponden = 102;
				$sangatSetuju = 22;
				$setuju = 70;
				$tidakTahu = 10;
				$tidakSetuju = 3;
        break;
    case 42:
        $jumlahResponden = 102;
				$sangatSetuju = 31;
				$setuju = 60;
				$tidakTahu = 11;
				$tidakSetuju = 3;
        break;
    case 43:
        $jumlahResponden = 102;
				$sangatSetuju = 13;
				$setuju = 78;
				$tidakTahu = 11;
				$tidakSetuju = 1;
        break;
    case 44:
        $jumlahResponden = 102;
				$sangatSetuju = 12;
				$setuju = 72;
				$tidakTahu = 18;
				$tidakSetuju = 3;
        break;
    case 45:
        $jumlahResponden = 102;
				$sangatSetuju = 14;
				$setuju = 77;
				$tidakTahu = 11;
				$tidakSetuju = 2;
        break;
    case 46:
        $jumlahResponden = 102;
				$sangatSetuju = 9;
				$setuju = 77;
				$tidakTahu = 16;
				$tidakSetuju = 3;
        break;
    case 47:
        $jumlahResponden = 102;
				$sangatSetuju = 12;
				$setuju = 76;
				$tidakTahu = 14;
				$tidakSetuju = 1;
        break;
    case 48:
        $jumlahResponden = 102;
				$sangatSetuju = 13;
				$setuju = 75;
				$tidakTahu = 14;
				$tidakSetuju = 3;
        break;
    case 49:
        $jumlahResponden = 102;
				$sangatSetuju = 4;
				$setuju = 84;
				$tidakTahu = 14;
				$tidakSetuju = 2;
        break;
    case 50:
        $jumlahResponden = 102;
				$sangatSetuju = 3;
				$setuju = 84;
				$tidakTahu = 15;
				$tidakSetuju = 3;
        break;
    case 51:
        $jumlahResponden = 102;
				$sangatSetuju = 25;
				$setuju = 65;
				$tidakTahu = 12;
				$tidakSetuju = 1;
        break;
    case 52:
        $jumlahResponden = 102;
				$sangatSetuju = 19;
				$setuju = 68;
				$tidakTahu = 15;
				$tidakSetuju = 2;
        break;
    case 53:
        $jumlahResponden = 102;
				$sangatSetuju = 18;
				$setuju = 69;
				$tidakTahu = 15;
				$tidakSetuju = 2;
        break;
    case 54:
        $jumlahResponden = 102;
				$sangatSetuju = 22;
				$setuju = 66;
				$tidakTahu = 14;
				$tidakSetuju = 0;
        break;
    case 55:
        $jumlahResponden = 102;
				$sangatSetuju = 22;
				$setuju = 64;
				$tidakTahu = 16;
				$tidakSetuju = 0;
        break;
    case 56:
        $jumlahResponden = 102;
				$sangatSetuju = 16;
				$setuju = 75;
				$tidakTahu = 11;
				$tidakSetuju = 2;
        break;
    case 57:
        $jumlahResponden = 102;
				$sangatSetuju = 12;
				$setuju = 72;
				$tidakTahu = 18;
				$tidakSetuju = 3;
        break;
    case 58:
        $jumlahResponden = 102;
				$sangatSetuju = 20;
				$setuju = 64;
				$tidakTahu = 18;
				$tidakSetuju = 1;
        break;
    case 59:
        $jumlahResponden = 102;
				$sangatSetuju = 3;
				$setuju = 87;
				$tidakTahu = 12;
				$tidakSetuju = 2;
        break;
    case 60:
        $jumlahResponden = 102;
				$sangatSetuju = 22;
				$setuju = 68;
				$tidakTahu = 12;
				$tidakSetuju = 3;
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

//Membuat Query halaman
// 	$c=mysqli_query($koneksidb,"SELECT tjawaban_group.nama_aspek, tjawaban_group.id_kuesioner FROM tjawaban_group  WHERE id_kuesioner='".$Kode."'")  or die ("error paging: ".mysqli_error());
// 	$data = mysqli_fetch_array($c);
// 	//Membuat Query gasan js
// 	$q=mysqli_query($koneksidb,"SELECT tjawaban_group.nama_aspek, tjawaban_group.unsur FROM tjawaban_group   WHERE id_kuesioner='".$Kode."'")  or die ("error paging: ".mysqli_error());
// 	$n = mysqli_query($koneksidb,"SELECT sum(unsur)/ COUNT(id_kuis) AS total FROM  tjawaban_group WHERE id_kuesioner='".$Kode."' ") or die ("error total : ".mysqli_error());;
// 	$nda =mysqli_fetch_array($n);
// 	$dataSql = "SELECT id_responden FROM tjawaban_temp WHERE tahun='".$tahun."' AND bulan='".$bulan."' GROUP BY id_responden";
// $totdataQry	 = mysqli_query($koneksidb, $dataSql) or die ("error paging: ".mysql_error());
// $totalQ	 =  mysqli_num_rows($totdataQry);
?>

<div id="viewPie" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table class="table table-bordered table-striped">
	<tr>
		<!-- <tr> -->
			<td><b>Jumlah Responden</b></td>
			<td><b><?php echo $jumlahResponden	; ?></b></td>
		<!-- </tr> -->
		<!-- <td  width="620"><b>Total Nilai Indeks    </b></td>
		<td width="270"><b><?php //echo round($nda['total'],2); ?></b></td> -->
	</tr>
	<tr>
		<td><b>Sangat setuju  </b></td>
		<td><b><?php  echo $sangatSetuju; ?></b></td>
	</tr>
	<tr>
		<td><b>Setuju  </b></td>
		<td><b><?php  echo $setuju; ?></b></td>
	</tr>
	<tr>
		<td><b>Tidak tahu  </b></td>
		<td><b><?php  echo $tidakTahu; ?></b></td>
	</tr>
	<tr>
		<td><b>Tidak setuju  </b></td>
		<td><b><?php  echo $tidakSetuju; ?></b></td>
	</tr>

</table>

<!-- <table class="table table-bordered table-striped span6">
	<tr>
		<th width="30" align="center"><strong>No</strong></th>
		<th width="200"><strong>Nilai Interval</strong></th>
		<th width="400"><strong>Kinerja Unit Pelayanan</strong></th>
	</tr>

	<tr>
		<td align="center">1 </td>
		<td>1.00 - 1.75 </td>
		<td>Sangat tidak baik</td>
	</tr>

	<tr>
		<td align="center">2 </td>
		<td>1.75 - 2.50 </td>
		<td>Tidak baik</td>
	</tr>

	<tr>
		<td align="center">3 </td>
		<td>2.50 - 3.25 </td>
		<td>Baik</td>
	</tr>

	<tr>
		<td align="center">4 </td>
		<td>3.25 - 4.00 </td>
		<td>Sangat baik</td>
	</tr>
</table> -->
<script type="text/javascript">
Highcharts.chart('viewPie', {
	chart: {
		plotBackgroundColor: null,
		plotBorderWidth: null,
		plotShadow: false,
		type: 'pie'
	},
	title: {
		text: '<?php echo $pertanyaan;?>'
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
			name: 'Setuju',
			y: <?php echo $setuju;?>,
			sliced: true,
			selected: true
		}, {
			name: 'Sangat setuju',
			y: <?php echo $sangatSetuju;?>
		}, {
			name: 'Tidak tahu',
			y: <?php echo $tidakTahu;?>
		}, {
			name: 'Tidak setuju',
			y: <?php echo $tidakSetuju;?>
		}]
	}]
});

</script>
