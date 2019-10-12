<?php 
session_start();
include_once "../../lib/connection.php";
include_once "../../lib/library.php";
   
	//Membuat Query gasan js
	$t=mysqli_query($koneksidb,"SELECT tjawaban_temp.id_kuis,sum(nilai) AS nilai, sum(nilai)/ COUNT(tjawaban_temp.id_kuis) AS unsur,taspek.nama_aspek FROM tjawaban_temp LEFT JOIN tkuis ON tkuis.id_kuis=tjawaban_temp.id_kuis LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek GROUP BY tjawaban_temp.id_kuis ")  or die ("error paging: ".mysqli_error());
	$n = mysqli_query($koneksidb,"SELECT sum(nilai)/ COUNT(id_kuis) AS total FROM  tjawaban_temp  ") or die ("error total : ".mysqli_error());;
	$nda =mysqli_fetch_array($n);
	$nomor =1;
?>
<body>
<div id="view2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>  
<table class="table table-bordered table-striped">
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
	  </table>
<table class="table  ">
      <tr>
        <td align="center" colspan="2" width="440">Hasil Total Indeks Kepuasan Masyarakat </td>
        <td width="510"><h3><?php if($nda['total']>='3.25'){$tothasil='Sangat Baik';}
			elseif($nda['total']>='2.5'){$tothasil='Baik';}
			elseif($nda['total']>='1.75'){$tothasil='Tidak Baik';}
			elseif($nda['total']<'1.75'){$tothasil='Sangat Tidak Baik';} echo $tothasil; ?></h3> </td> 	 
      </tr> 
    </table>
	
	</body>
	
 <script src="../../js/jquery.min.js"></script>
            <script src="../../js/jquery.ui.custom.js"></script>
            <script src="../../js/bootstrap.min.js"></script>
            <script src="../../js/fullcalendar.min.js"></script>
            <script src="../../js/maruti.js"></script>
            <script src="../../js/maruti.calendar.js"></script>
				<script src="../../js/highcharts.js"></script>
				<script src="../../js/exporting.js"></script>
<script type="text/javascript">
$(function () {
    $('#view2').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Total Indek Kepuasan Masyarakat'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Aspek Pelayanan'
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Nilai Rata-rata Unsur'
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
		
		<?php
		$no =1;
		while($r=mysqli_fetch_array($t)){
		 	echo "{ name: '".$no++.". ".$r["nama_aspek"]."',data: [".$r["unsur"]."] },";
		}
		?>
		
		]
    });
});
</script>
