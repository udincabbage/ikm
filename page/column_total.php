<?php 
include_once "lib/seslogin.php"; 
   
	//Membuat Query gasan js
	$t=mysqli_query($koneksidb,"SELECT tjawaban_temp.id_kuis,sum(nilai) AS nilai, sum(nilai)/ COUNT(tjawaban_temp.id_kuis) AS unsur,taspek.nama_aspek FROM tjawaban_temp LEFT JOIN tkuis ON tkuis.id_kuis=tjawaban_temp.id_kuis LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek GROUP BY tjawaban_temp.id_kuis ")  or die ("error paging: ".mysqli_error());
	$n = mysqli_query($koneksidb,"SELECT sum(nilai)/ COUNT(id_kuis) AS total FROM  tjawaban_temp  ") or die ("error total : ".mysqli_error());;
	$nda =mysqli_fetch_array($n);
	$nomor =1;
$dataSql = "SELECT id_responden FROM tjawaban_temp  GROUP BY id_responden";
$totdataQry	 = mysqli_query($koneksidb, $dataSql) or die ("error paging: ".mysql_error());
$totalQ	 =  mysqli_num_rows($totdataQry);
?>

<div id="view2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>  

	<table class="table table-bordered table-striped span6">
	<tr>
	   <td  ><b>Jumlah Responden</b></td> 
	   <td ><b><?php echo $totalQ; ?></b></td>
	  </tr> 
	<tr>
	  <td  width="620"><b>Total Nilai Indeks    </b></td> 
	  <td width="270"><b><?php echo round($nda['total'],2); ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Nilai Indeks Kepuasan Masyarakat  </b></td> 
	  <td><b><?php  $ikm =($nda['total']*25); echo round($ikm,2); ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Kesimpulan Nilai Kerja Unit Pelayanan</b></td> 
	  <td><h3><?php if($nda['total']>='3.25'){$tothasil='Sangat Baik';}
			elseif($nda['total']>='2.5'){$tothasil='Baik';}
			elseif($nda['total']>='1.75'){$tothasil='Tidak Baik';}
			else{$tothasil='Sangat Tidak Baik';} echo $tothasil; ?></h3></td>
	  </tr> 
	  
  
</table> 

<table class="table table-bordered table-striped span6">
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