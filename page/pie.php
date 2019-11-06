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

// switch ($Kode) {
// 	case 15:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2080;
// 	$setuju = 2120;
// 	$tidakTahu = 8;
// 	$tidakSetuju = 0;
// 	break;
// 	case 16:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1889;
// 	$setuju = 2302;
// 	$tidakTahu = 12;
// 	$tidakSetuju = 5;
// 	break;
// 	case 17:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2173;
// 	$setuju = 2002;
// 	$tidakTahu = 25;
// 	$tidakSetuju = 8;
// 	break;
// 	case 18:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2131;
// 	$setuju = 2015;
// 	$tidakTahu = 56;
// 	$tidakSetuju = 6;
// 	break;
// 	case 19:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2130;
// 	$setuju = 2001;
// 	$tidakTahu = 65;
// 	$tidakSetuju = 12;
// 	break;
// 	case 20:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2103;
// 	$setuju = 1999;
// 	$tidakTahu = 98;
// 	$tidakSetuju = 8;
// 	break;
// 	case 21:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2140;
// 	$setuju = 2008;
// 	$tidakTahu = 56;
// 	$tidakSetuju = 4;
// 	break;
// 	case 22:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2036;
// 	$setuju = 2120;
// 	$tidakTahu = 45;
// 	$tidakSetuju = 7;
// 	break;
// 	case 23:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2022;
// 	$setuju = 2130;
// 	$tidakTahu = 46;
// 	$tidakSetuju = 10;
// 	break;
// 	case 24:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1976;
// 	$setuju = 2156;
// 	$tidakTahu = 68;
// 	$tidakSetuju = 8;
// 	break;
// 	case 25:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1930;
// 	$setuju = 2184;
// 	$tidakTahu = 87;
// 	$tidakSetuju = 7;
// 	break;
// 	case 26:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1959;
// 	$setuju = 2200;
// 	$tidakTahu = 45;
// 	$tidakSetuju = 4;
// 	break;
// 	case 27:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1878;
// 	$setuju = 2301;
// 	$tidakTahu = 25;
// 	$tidakSetuju = 4;
// 	break;
// 	case 28:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2040;
// 	$setuju = 2112;
// 	$tidakTahu = 45;
// 	$tidakSetuju = 11;
// 	break;
// 	case 29:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2118;
// 	$setuju = 1998;
// 	$tidakTahu = 87;
// 	$tidakSetuju = 5;
// 	break;
// 	case 30:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1835;
// 	$setuju = 2320;
// 	$tidakTahu = 45;
// 	$tidakSetuju = 8;
// 	break;
// 	case 31:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1998;
// 	$setuju = 2125;
// 	$tidakTahu = 78;
// 	$tidakSetuju = 7;
// 	break;
// 	case 32:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1631;
// 	$setuju = 2522;
// 	$tidakTahu = 16;
// 	$tidakSetuju = 9;
// 	break;
// 	case 33:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1690;
// 	$setuju = 2456;
// 	$tidakTahu = 56;
// 	$tidakSetuju = 6;
// 	break;
// 	case 34:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1630;
// 	$setuju = 2482;
// 	$tidakTahu = 88;
// 	$tidakSetuju = 8;
// 	break;
// 	case 35:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1549;
// 	$setuju = 2555;
// 	$tidakTahu = 99;
// 	$tidakSetuju = 5;
// 	break;
// 	case 36:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2104;
// 	$setuju = 1998;
// 	$tidakTahu = 98;
// 	$tidakSetuju = 8;
// 	break;
// 	case 37:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1702;
// 	$setuju = 2454;
// 	$tidakTahu = 45;
// 	$tidakSetuju = 7;
// 	break;
// 	case 38:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1701;
// 	$setuju = 2444;
// 	$tidakTahu = 55;
// 	$tidakSetuju = 8;
// 	break;
// 	case 39:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 130;
// 	$setuju = 272;
// 	$tidakTahu = 4;
// 	$tidakSetuju = 0;
// 	break;
// 	case 40:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 120;
// 	$setuju = 276;
// 	$tidakTahu = 10;
// 	$tidakSetuju = 1;
// 	break;
// 	case 41:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 116;
// 	$setuju = 280;
// 	$tidakTahu = 10;
// 	$tidakSetuju = 3;
// 	break;
// 	case 42:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 155;
// 	$setuju = 240;
// 	$tidakTahu = 11;
// 	$tidakSetuju = 3;
// 	break;
// 	case 43:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 123;
// 	$setuju = 272;
// 	$tidakTahu = 11;
// 	$tidakSetuju = 1;
// 	break;
// 	case 44:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 100;
// 	$setuju = 288;
// 	$tidakTahu = 18;
// 	$tidakSetuju = 3;
// 	break;
// 	case 45:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 87;
// 	$setuju = 308;
// 	$tidakTahu = 11;
// 	$tidakSetuju = 2;
// 	break;
// 	case 46:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 83;
// 	$setuju = 307;
// 	$tidakTahu = 16;
// 	$tidakSetuju = 3;
// 	break;
// 	case 47:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 102;
// 	$setuju = 290;
// 	$tidakTahu = 14;
// 	$tidakSetuju = 1;
// 	break;
// 	case 48:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 92;
// 	$setuju = 300;
// 	$tidakTahu = 14;
// 	$tidakSetuju = 3;
// 	break;
// 	case 49:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 64;
// 	$setuju = 328;
// 	$tidakTahu = 14;
// 	$tidakSetuju = 2;
// 	break;
// 	case 50:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 58;
// 	$setuju = 333;
// 	$tidakTahu = 15;
// 	$tidakSetuju = 3;
// 	break;
// 	case 51:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 134;
// 	$setuju = 260;
// 	$tidakTahu = 12;
// 	$tidakSetuju = 1;
// 	break;
// 	case 52:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 119;
// 	$setuju = 272;
// 	$tidakTahu = 15;
// 	$tidakSetuju = 2;
// 	break;
// 	case 53:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 111;
// 	$setuju = 280;
// 	$tidakTahu = 15;
// 	$tidakSetuju = 2;
// 	break;
// 	case 54:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 128;
// 	$setuju = 264;
// 	$tidakTahu = 14;
// 	$tidakSetuju = 0;
// 	break;
// 	case 55:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 142;
// 	$setuju = 248;
// 	$tidakTahu = 16;
// 	$tidakSetuju = 0;
// 	break;
// 	case 56:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 95;
// 	$setuju = 300;
// 	$tidakTahu = 11;
// 	$tidakSetuju = 2;
// 	break;
// 	case 57:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 100;
// 	$setuju = 288;
// 	$tidakTahu = 18;
// 	$tidakSetuju = 3;
// 	break;
// 	case 58:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 103;
// 	$setuju = 285;
// 	$tidakTahu = 18;
// 	$tidakSetuju = 1;
// 	break;
// 	case 59:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 71;
// 	$setuju = 323;
// 	$tidakTahu = 12;
// 	$tidakSetuju = 2;
// 	break;
// 	case 60:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 122;
// 	$setuju = 272;
// 	$tidakTahu = 12;
// 	$tidakSetuju = 3;
// 	break;
// 	case 61:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1549;
// 	$setuju = 2555;
// 	$tidakTahu = 9;
// 	$tidakSetuju = 5;
// 	break;
// 	case 62:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1959;
// 	$setuju = 2200;
// 	$tidakTahu = 45;
// 	$tidakSetuju = 4;
// 	break;
// 	case 63:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2104;
// 	$setuju = 1998;
// 	$tidakTahu = 98;
// 	$tidakSetuju = 8;
// 	break;
// 	case 64:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2118;
// 	$setuju = 1998;
// 	$tidakTahu = 87;
// 	$tidakSetuju = 5;
// 	break;
// 	case 65:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2080;
// 	$setuju = 2120;
// 	$tidakTahu = 8;
// 	$tidakSetuju = 0;
// 	break;
// 	case 66:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1976;
// 	$setuju = 2156;
// 	$tidakTahu = 68;
// 	$tidakSetuju = 8;
// 	break;
// 	case 67:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2130;
// 	$setuju = 2001;
// 	$tidakTahu = 65;
// 	$tidakSetuju = 12;
// 	break;
// 	case 68:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2001;
// 	$setuju = 2200;
// 	$tidakTahu = 7;
// 	$tidakSetuju = 0;
// 	break;
// 	case 69:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 2109;
// 	$setuju = 1999;
// 	$tidakTahu = 100;
// 	$tidakSetuju = 0;
// 	break;
// 	case 70:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1100;
// 	$setuju = 3106;
// 	$tidakTahu = 2;
// 	$tidakSetuju = 0;
// 	break;
// 	case 71:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1171;
// 	$setuju = 2989;
// 	$tidakTahu = 48;
// 	$tidakSetuju = 0;
// 	break;
// 	case 72:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1200;
// 	$setuju = 2995;
// 	$tidakTahu = 13;
// 	$tidakSetuju = 0;
// 	break;
// 	case 73:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1400;
// 	$setuju = 2798;
// 	$tidakTahu = 10;
// 	$tidakSetuju = 0;
// 	break;
// 	case 74:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1410;
// 	$setuju = 2789;
// 	$tidakTahu = 9;
// 	$tidakSetuju = 0;
// 	break;
// 	case 75:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1301;
// 	$setuju = 2900;
// 	$tidakTahu = 7;
// 	$tidakSetuju = 0;
// 	break;
// 	case 76:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1313;
// 	$setuju = 2888;
// 	$tidakTahu = 7;
// 	$tidakSetuju = 0;
// 	break;
// 	case 77:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1292;
// 	$setuju = 2911;
// 	$tidakTahu = 5;
// 	$tidakSetuju = 0;
// 	break;
// 	case 78:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1215;
// 	$setuju = 2992;
// 	$tidakTahu = 1;
// 	$tidakSetuju = 0;
// 	break;
// 	case 79:
// 	$jumlahResponden = 4208;
// 	$sangatSetuju = 1200;
// 	$setuju = 2997;
// 	$tidakTahu = 11;
// 	$tidakSetuju = 0;
// 	break;
// 	case 80:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 100;
// 	$setuju = 288;
// 	$tidakTahu = 18;
// 	$tidakSetuju = 3;
// 	break;
// 	case 81:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 111;
// 	$setuju = 280;
// 	$tidakTahu = 15;
// 	$tidakSetuju = 2;
// 	break;
// 	case 82:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 134;
// 	$setuju = 260;
// 	$tidakTahu = 12;
// 	$tidakSetuju = 1;
// 	break;
// 	case 83:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 92;
// 	$setuju = 300;
// 	$tidakTahu = 14;
// 	$tidakSetuju = 3;
// 	break;
// 	case 84:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 83;
// 	$setuju = 307;
// 	$tidakTahu = 16;
// 	$tidakSetuju = 3;
// 	break;
// 	case 85:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 128;
// 	$setuju = 264;
// 	$tidakTahu = 14;
// 	$tidakSetuju = 0;
// 	break;
// 	case 86:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 64;
// 	$setuju = 328;
// 	$tidakTahu = 14;
// 	$tidakSetuju = 1;
// 	break;
// 	case 87:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 102;
// 	$setuju = 290;
// 	$tidakTahu = 14;
// 	$tidakSetuju = 1;
// 	break;
// 	case 88:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 71;
// 	$setuju = 323;
// 	$tidakTahu = 12;
// 	$tidakSetuju = 2;
// 	break;
// 	case 89:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 102;
// 	$setuju = 290;
// 	$tidakTahu = 14;
// 	$tidakSetuju = 1;
// 	break;
// 	case 90:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 123;
// 	$setuju = 272;
// 	$tidakTahu = 11;
// 	$tidakSetuju = 1;
// 	break;
// 	case 91:
// 	$jumlahResponden = 406;
// 	$sangatSetuju = 119;
// 	$setuju = 272;
// 	$tidakTahu = 15;
// 	$tidakSetuju = 2;
// 	break;
//
// 	default:
// 	echo "Your favorite color is neither red, blue, nor green!";
// }

	$tidakSetuju=$_GET['stp'];
	$tidakTahu=$_GET['tp'];
	$setuju=$_GET['p'];
	$sangatSetuju=$_GET['sp'];
	$jumlahResponden = $tidakSetuju+$tidakTahu+$setuju+$sangatSetuju;

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
<div id="content">
	<div id="content-header">
		<div id="breadcrumb">
			<a href="?page=Kuesioner-Main" title="Go to Home" class="tip-bottom">
				<i class="icon-home"></i> Home
			</a>
			<a href="#" class="current">
				Diagram Pie
			</a>
		</div>
		<!-- <h1>Table Kepuasan Layanan</h1> -->
	</div>
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
		<td><b>Sangat Puas  </b></td>
		<td><b><?php  echo $sangatSetuju; ?></b></td>
	</tr>
	<tr>
		<td><b>Puas  </b></td>
		<td><b><?php  echo $setuju; ?></b></td>
	</tr>
	<tr>
		<td><b>Tidak Puas  </b></td>
		<td><b><?php  echo $tidakTahu; ?></b></td>
	</tr>
	<tr>
		<td><b>Sangat Tidak Puas  </b></td>
		<td><b><?php  echo $tidakSetuju; ?></b></td>
	</tr>

</table>
</div>
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
			y: <?php echo $setuju;?>,
			sliced: true,
			selected: true
		}, {
			name: 'Sangat puas',
			y: <?php echo $sangatSetuju;?>
		}, {
			name: 'Tidak puas',
			y: <?php echo $tidakTahu;?>
		}, {
			name: 'Sangat tidak setuju',
			y: <?php echo $tidakSetuju;?>
		}]
	}]
});

</script>
