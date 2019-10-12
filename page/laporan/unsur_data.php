<?php
session_start();
include_once "../../lib/connection.php";
include_once "../../lib/library.php";
include_once "../lib/dtjawaban_temp.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT tjawaban_temp.id_kuis,sum(nilai) AS nilai, sum(nilai)/ COUNT(tjawaban_temp.id_kuis) AS unsur, tkuis.*,taspek.id_aspek,taspek.nama_aspek FROM tjawaban_temp LEFT JOIN tkuis ON tkuis.id_kuis=tjawaban_temp.id_kuis LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek GROUP BY tjawaban_temp.id_kuis ";
$pageSql2 = "SELECT sum(nilai)/ COUNT(id_kuis) AS total FROM  tjawaban_temp  ";
$dataSql = "SELECT id_responden FROM tjawaban_temp  GROUP BY id_responden";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql="SELECT $tableName.*,tkuis.id_aspek,nama_aspek  FROM ".$tableName." LEFT JOIN tkuis ON tkuis.id_kuis=$tableName.id_kuis LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek 
  WHERE nama_aspek like '%$qcari%' or $field3 like '%$qcari%' or $field2 like '%$qcari%' ";
}
$pageQry = mysqli_query($koneksidb, $pageSql) or die ("error paging: ".mysql_error());
$jml	 = mysqli_num_rows($pageQry);
$max	 = ceil($jml/$row);
$totQry	 = mysqli_query($koneksidb, $pageSql2) or die ("error paging: ".mysql_error());
$totData	 =  mysqli_fetch_array($totQry);
$totdataQry	 = mysqli_query($koneksidb, $dataSql) or die ("error paging: ".mysql_error());
$totalQ	 =  mysqli_num_rows($totdataQry);
?>
<?php include('head.php');
?>
<table width="100%" class="table table-bordered table-striped">
  <tr>
    <th width="910"><h1><b>Total Indeks Kepuasan Masyarakat</b>  </h1></th>
     
  </tr>
  <tr>
    <td width="910"> </td>
     
  </tr>

</table>
	<table class="table table-bordered table-striped">
      <tr>
        <th width="20" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th width="320"><strong>Aspek</strong></th>
        <th width="180"><strong>Bobot Rata-Rata Unsur</strong></th>
        <th width="130"><strong>Nilai Rata-Rata Unsur</strong></th> 
        <th width="180"><strong>Hasil Pengukuran</strong></th> 
      </tr>
		<?php
		$mySql = $pageSql." ORDER BY ".$field0." ASC LIMIT $hal, $row";
		$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah : ".mysql_error());
		$nomor  = 1; 
		while ($kolomData = mysqli_fetch_array($myQry)) {
			
			// $Kode = $kolomData[$field0];
			
		
// $total	= SUM($kolomData['unsur']);
			// $sub2 = substr($kolomData[$field2],0,245);
			if($kolomData['unsur']>='3.5'){$hasil=$kolomData['jawaban_d']; $cc='c1';}
			elseif($kolomData['unsur']>='2.5'){$hasil=$kolomData['jawaban_c']; $cc='c2';}
			elseif($kolomData['unsur']>='1.5'){$hasil=$kolomData['jawaban_b']; $cc='c3';}
			else{$hasil=$kolomData['jawaban_a']; $cc='c4';}
		?>
      <tr class="<?php echo $cc; ?>">
        <td align="center"> <?php echo $nomor++; ?> </td>
        <td> <?php echo $kolomData['nama_aspek']; ?> </td>
        <td> <?php echo $kolomData['nilai']; ?> </td>
        <td> <?php echo round($kolomData['unsur'],2); ?> </td>
        <td> <?php echo $hasil; ?> </td>
		
      
      </tr>
      <?php } ?>
	  
    </table>
	&nbsp;
	<table class="table table-bordered table-striped">
	<tr>
	   <th width="720"><b>Jumlah Responden</b></th> 
	   <th width="170"><b><?php echo $totalQ; ?></b></th>
	  </tr> 
	<tr>
	  <td width="720"><b>Total Nilai Indeks    </b></td> 
	  <td width="170"><b><?php echo round($totData['total'],2); ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Nilai Indeks Kepuasan Masyarakat  </b></td> 
	  <td><b><?php  $ikm =($totData['total']*25); echo round($ikm,2); ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Kesimpulan Nilai Kerja Unit Pelayanan</b></td> 
	  <td><b><?php if($totData['total']>='3.25'){$tothasil='Sangat Baik';}
			elseif($totData['total']>='2.5'){$tothasil='Baik';}
			elseif($totData['total']>='1.75'){$tothasil='Tidak Baik';}
			else{$tothasil='Sangat Tidak Baik';} echo $tothasil; ?></b></td>
	  </tr> 
	  
  
</table> 
<?php include('footer.php');
?>