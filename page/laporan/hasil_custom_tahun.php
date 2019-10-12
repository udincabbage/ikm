<?php
session_start();
include_once "../../lib/connection.php";
include_once "../../lib/library.php";
include_once "../lib/dtjawaban.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 520;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
// $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';
$aspek = isset($_GET['aspek']) ? $_GET['aspek'] : '';
if($aspek=='') {
$pageSql = "SELECT $tableName.id_jawaban,$tableName.id_responden,$tableName.tahun,$tableName.bulan,$tableName.id_kuis,$tableName.jawaban,tkuis.id_aspek,nama_aspek  FROM ".$tableName." LEFT JOIN tkuis ON tkuis.id_kuis=$tableName.id_kuis LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek WHERE $tableName.tahun='$tahun' ";
$pageSql2 = "SELECT sum(nilai)/ COUNT(id_kuis) AS total FROM tjawaban_temp WHERE tahun='$tahun' ";
	
} else{
$pageSql = "SELECT $tableName.id_jawaban,$tableName.id_responden,$tableName.tahun,$tableName.bulan,$tableName.id_kuis,$tableName.jawaban,tkuis.id_aspek,nama_aspek  FROM ".$tableName." LEFT JOIN tkuis ON tkuis.id_kuis=$tableName.id_kuis LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek WHERE $tableName.tahun='$tahun' AND $tableName.bulan='$bulan' ";
$pageSql2 = "SELECT sum(nilai)/ COUNT(id_kuis) AS total FROM tjawaban_temp WHERE tahun='$tahun' ";
	
}

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


?>
<?php include('head.php');
?>

<table width="100%" class="table table-bordered table-striped">
  <tr>
    <th width="910"><h1><b>Jawaban Kuesioner</b>  </h1></th>
     
  </tr>
  <tr>
    <td width="910"> </td>
     
  </tr>

</table>
	<table class="table table-bordered table-striped">
      <tr>
        <th width="20" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th width="130"><strong><?php echo $isian2; ?></strong></th>
        <th width="100"><strong><?php echo $isian3; ?></strong></th>
        <th width="100"><strong><?php echo $isian4; ?></strong></th> 
        <th width="320"><strong><?php echo $isian6; ?></strong></th>
        <th width="140"><strong><?php echo $isian7; ?></strong></th> 
      </tr>
		<?php
		$mySql = $pageSql." ORDER BY ".$field0." ASC LIMIT $hal, $row";
		$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah : ".mysql_error());
		$nomor  = 1; 
		while ($kolomData = mysqli_fetch_array($myQry)) {
			
			$Kode = $kolomData[$field0];
			// $sub2 = substr($kolomData[$field2],0,245);
			// if($kolomData[$field5]=='1'){$id5='Ya';}
			// elseif($kolomData[$field5]=='0'){$id5='Tidak';}
			// else{$id5='Unknown';}
		?>
      <tr>
        <td align="center"> <?php echo $nomor++; ?> </td>
        <td> <?php echo $kolomData[$field2]; ?> </td>
        <td> <?php echo $kolomData[$field3]; ?> </td>
        <td> <?php echo tampil_bulan($kolomData[$field4]); ?> </td> 
        <td> <?php echo $kolomData['nama_aspek']; ?> </td>
        <td> <?php echo $kolomData[$field7]; ?> </td>
		
        </tr>
      <?php } ?>
    </table>
	&nbsp; 
	<table class="table table-bordered table-striped">
	<tr>
	   <th width="700"><b>Total Nilai Indeks    </b></th> 
	   <th width="190"><b><?php echo round($totData['total'],2); ?></b></th>
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