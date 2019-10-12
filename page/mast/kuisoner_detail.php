<?php
include_once "lib/seslogin.php";
include_once "page/lib/dtkuesioner.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$Kode	 = isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txt0']; 
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT tjawaban_group.nama_aspek, tjawaban_group.bobot, tjawaban_group.unsur, tjawaban_group.jawaban_a, tjawaban_group.jawaban_b, tjawaban_group.jawaban_c, tjawaban_group.jawaban_d FROM tjawaban_group WHERE id_kuesioner='".$Kode."' ";

$pageSql2 = "SELECT * FROM tkuesioner WHERE id_kuesioner='".$Kode."' ";

// if(isset($_POST['qcari'])){
  // $qcari=$_POST['qcari'];
  // $pageSql="SELECT tjawaban_group.* FROM tjawaban_group WHERE id_kuesioner='".$Kode."' 
  // WHERE nama_aspek like '%$qcari%' or $field3 like '%$qcari%' or $field2 like '%$qcari%' ";
// }
$pageQry = mysqli_query($koneksidb, $pageSql) or die ("error paging: ".mysql_error());
$jml	 = mysqli_num_rows($pageQry);
$max	 = ceil($jml/$row);
$totQry	 = mysqli_query($koneksidb, $pageSql2) or die ("error paging: ".mysql_error());
$totData	 =  mysqli_fetch_array($totQry);
?>
<table class="table table-bordered table-striped">
  <tr>
    <th><h3><b>Detail Kuesioner <?php echo $Kode; ?> <?php echo tampil_bulan($totData['bulan']); ?> <?php echo $totData['tahun']; ?></b>   
	<form class="navbar-search pull-right"  method="POST" action="?page=<?php echo $formName?>-Data">
	<a href="page/laporan/kuesioner_detail-pdf.php?Kode=<?php echo $Kode; ?>" target="_blank"><img src="img/btn_print.png" width="40px"> </a>
  </form>
	</h3></th>
     
  </tr>


   
</table>
	<table class="table table-bordered table-striped">
      <tr>
        <th width="20" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th width="520"><strong>Aspek</strong></th>
        <th width="120"><strong>Bobot Rata-Rata Unsur</strong></th>
        <th width="120"><strong>Nilai Rata-Rata Unsur</strong></th> 
        <th width="180"><strong>Hasil Pengukuran</strong></th> 
      </tr>
		<?php
		$mySql = $pageSql." ORDER BY ".$field0." ASC ";
		$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah : ".mysql_error());
		$nomor  = 1; 
		while ($kolomData = mysqli_fetch_array($myQry)) {
			
			// $Kode = $kolomData[$field0];
			
		
// $total	= SUM($kolomData['unsur']);
			// $sub2 = substr($kolomData[$field2],0,245);
			if($kolomData['unsur']>='3.5'){$hasil=$kolomData['jawaban_d'];}
			elseif($kolomData['unsur']>='2.5'){$hasil=$kolomData['jawaban_c'];}
			elseif($kolomData['unsur']>='1.5'){$hasil=$kolomData['jawaban_b'];}
			else{$hasil=$kolomData['jawaban_a'];}
		?>
      <tr>
        <td align="center"> <?php echo $nomor++; ?> </td>
        <td> <?php echo $kolomData['nama_aspek']; ?> </td>
        <td> <?php echo $kolomData['bobot']; ?> </td>
        <td> <?php echo $kolomData['unsur']; ?> </td>
        <td> <?php echo $hasil ;?></td>
		
      
      </tr>
      <?php } ?>
	  
    </table>
	<table class="table table-bordered table-striped">
	<tr>
	  <td><b>Total Nilai Indeks    </b></td> 
	  <td><b><?php echo $totData['indeks']; ?></b></td>
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