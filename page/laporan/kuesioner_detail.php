<?php
session_start();
include_once "../../lib/connection.php";
include_once "../../lib/library.php";
include_once "../lib/dtkuesioner.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$Kode	 = isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txt0']; 
$tahun	 = isset($_GET['Tahun']) ?  $_GET['Tahun'] : ''; 
$bulan	 = isset($_GET['Bulan']) ?  $_GET['Bulan'] : ''; 
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT tjawaban_group.nama_aspek, tjawaban_group.bobot, tjawaban_group.unsur, tjawaban_group.jawaban_a, tjawaban_group.jawaban_b, tjawaban_group.jawaban_c, tjawaban_group.jawaban_d FROM tjawaban_group WHERE id_kuesioner='".$Kode."' ";
$pageSql2 = "SELECT * FROM tkuesioner WHERE id_kuesioner='".$Kode."' ";
$dataSql = "SELECT id_responden FROM tjawaban_temp WHERE tahun='".$tahun."' AND bulan='".$bulan."' GROUP BY id_responden";
 
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
    <th width="910"><h1><b>Laporan Data Kuesioner <?php echo tampil_bulan($totData['bulan']); ?> <?php echo $totData['tahun']; ?></b>  </h1></th>
     
  </tr>
  <tr>
    <td width="910"> </td>
     
  </tr>

</table>
   
	<table class="table table-bordered table-striped">
      <tr>
        <th width="20" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th width="320"><strong>Aspek</strong></th>
        <th width="160"><strong>Bobot Rata-Rata Unsur</strong></th>
        <th width="140"><strong>Nilai Rata-Rata Unsur</strong></th> 
        <th width="190"><strong>Hasil Pengukuran</strong></th> 
      </tr>
		<?php
		$mySql = $pageSql." ORDER BY ".$field0." ASC LIMIT $hal, $row";
		$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah : ".mysql_error());
		$nomor  = 1; 
		while ($kolomData = mysqli_fetch_array($myQry)) {
			 
			if($kolomData['unsur']>='3.5'){$cc='c1';$hasil=$kolomData['jawaban_d'];}
			elseif($kolomData['unsur']>='2.5'){  $cc='c2';$hasil=$kolomData['jawaban_c'];}
			elseif($kolomData['unsur']>='1.5'){  $cc='c3';$hasil=$kolomData['jawaban_b'];}
			else{ $cc='c4';$hasil=$kolomData['jawaban_a'];}
		?>
       <tr class="<?php echo $cc; ?>">
        <td align="center"> <?php echo $nomor++; ?> </td>
        <td> <?php echo $kolomData['nama_aspek']; ?> </td>
        <td> <?php echo $kolomData['bobot']; ?> </td>
        <td> <?php echo $kolomData['unsur']; ?> </td>
        <td> <?php echo $hasil; ?> </td>
		
      
      </tr>
      <?php } ?>
	  
    </table>
	&nbsp;
	<table class="table table-bordered table-striped">
	<tr>
	   <th width="700"><b>Jumlah Responden</b></th> 
	   <th width="190"><b><?php echo $totalQ; ?></b></th>
	  </tr> 
	<tr>
	  <td width="700"><b>Total Nilai Indeks    </b></td> 
	  <td width="190"><b><?php echo $totData['indeks']; ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Nilai Indeks Kepuasan Masyarakat  </b></td> 
	  <td><b><?php echo $totData['ikm']; ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Kesimpulan Nilai Kerja Unit Pelayanan</b></td> 
	  <td><b><?php echo $totData['hasil_ukur']; ?></b></td>
	  </tr>
  
</table>

<?php include('footer.php');
?>
