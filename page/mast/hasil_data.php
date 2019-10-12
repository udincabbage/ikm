<?php
include_once "lib/seslogin.php";
include_once "page/lib/dtjawaban.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 28;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT $tableName.id_jawaban,$tableName.id_responden,$tableName.tahun,$tableName.bulan,$tableName.id_kuis,$tableName.jawaban,tkuis.id_aspek,nama_aspek  FROM ".$tableName." LEFT JOIN tkuis ON tkuis.id_kuis=$tableName.id_kuis LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek   ";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql="SELECT $tableName.*,tkuis.id_aspek,nama_aspek  FROM ".$tableName." LEFT JOIN tkuis ON tkuis.id_kuis=$tableName.id_kuis LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek 
  WHERE nama_aspek like '%$qcari%' or $field3 like '%$qcari%'or $field2 like '%$qcari%' ";
}
$pageQry = mysqli_query($koneksidb, $pageSql) or die ("error paging: ".mysql_error());
$jml	 = mysqli_num_rows($pageQry);
$max	 = ceil($jml/$row);


?>
<table class="table table-bordered table-striped">
  <tr>
    <th><h1><b>Data <?php echo $formName;?> Kuesioner</b> <form class="navbar-search pull-right"  method="POST" action="?page=<?php echo $formName?>-Data">
								<input type="text" name="qcari" placeholder="pencarian..." autofocus/>
  </form></h1></th>
     
  </tr>


  
	<table class="table table-bordered table-striped">
      <tr>
        <th width="20" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th width="125"><strong><?php echo $isian2; ?></strong></th>
        <th width="120"><strong><?php echo $isian3; ?></strong></th>
        <th width="120"><strong><?php echo $isian4; ?></strong></th> 
        <th width="520"><strong><?php echo $isian6; ?></strong></th>
        <th width="120"><strong><?php echo $isian7; ?></strong></th>
        <th colspan="3"><strong>Option</strong></th>
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
		
       <td class="cc" align="center"><a href="?page=<?php echo $formName;?>-Delete&Kode=<?php echo $Kode; ?>" onclick="return confirm('Anda Yakin menghapus Data <?php echo $formName;?> dengan Nama <?php echo $kolomData[$field1]; ?>? ')"><i class="icon-trash"></i></a></td>
      </tr>
      <?php } ?>
    </table>
	<table class="table table-bordered table-striped">
	
  <tr>
    <td><strong>Jumlah Data :</strong> <?php echo $jml; ?> </td>
    <td align="right"><b>Halaman ke :</b> 
	<?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=".$formName."-Data&hal=$list[$h]'>$h</a> ";
	}
	?>	</td>
  </tr>
</table>
