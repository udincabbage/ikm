<?php
session_start();
include_once "../../lib/connection.php";
include_once "../../lib/library.php";
include_once "../lib/dtkuesioner.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT $tableName.* FROM ".$tableName." WHERE tahun='".$tahun."' ";

$pageSql2 = "SELECT sum(nilai)/ COUNT(id_kuis) AS total FROM tjawaban_temp WHERE tahun='$tahun' ";
$dataSql = "SELECT id_responden FROM tjawaban_temp WHERE tahun='".$tahun."'  GROUP BY id_responden";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql="SELECT $tableName.* FROM ".$tableName." 
  where nama_aspek like '%$qcari%' or $field2 like '%$qcari%' ";
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
    <th width="930"><h1><b>Data kuesioner</b>  </h1></th>
     
  </tr>
  <tr>
    <td width="930"> </td>
     
  </tr>

</table>
  
	<table class="table table-bordered table-striped">
      <tr>
        <th width="20" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th width="99"><strong>Kode kuesioner</strong></th>
        <th width="70"><strong><?php echo $isian1; ?></strong></th>
        <th width="70"><strong><?php echo $isian5; ?></strong></th>
        <th width="110"><strong><?php echo $isian2; ?></strong></th>
        <th width="220"><strong><?php echo $isian3; ?></strong></th>
        <th width="220"><strong><?php echo $isian4; ?></strong></th>
        
      </tr>
		<?php
		$mySql = $pageSql." ORDER BY ".$field0." DESC LIMIT $hal, $row";
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
        <td> <?php echo $kolomData[$field0]; ?> </td>
        <td> <?php echo $kolomData[$field1]; ?> </td>
        <td> <?php echo tampil_bulan($kolomData[$field5]); ?> </td>
        <td> <?php echo $kolomData[$field2]; ?> </td>
        <td> <?php echo $kolomData[$field3]; ?> </td>
        <td> <?php echo $kolomData[$field4]; ?> </td>
		 </tr>
      <?php } ?>
    </table>
	&nbsp; 
	<table class="table table-bordered table-striped">
	<tr>
	   <th width="700"><b>Jumlah Responden</b></th> 
	   <th width="210"><b><?php echo $totalQ; ?></b></th>
	  </tr> 
	<tr>
	   <td width="700"><b>Total Nilai Indeks per Tahun <?php echo $tahun; ?>   </b></td> 
	   <td width="190"><b><?php echo round($totData['total'],2); ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Nilai Indeks Kepuasan Masyarakat per Tahun <?php echo $tahun; ?>    </b></td> 
	  <td><b><?php  $ikm =($totData['total']*25); echo round($ikm,2); ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Kesimpulan Nilai Kerja Unit Pelayanan per Tahun <?php echo $tahun; ?>   </b></td> 
	  <td><b><?php if($totData['total']>='3.25'){$tothasil='Sangat Baik';}
			elseif($totData['total']>='2.5'){$tothasil='Baik';}
			elseif($totData['total']>='1.75'){$tothasil='Tidak Baik';}
			else{$tothasil='Sangat Tidak Baik';} echo $tothasil; ?></b></td>
	  </tr>
  
</table>
	
<?php include('footer.php');
?>
