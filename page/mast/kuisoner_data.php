<?php
include_once "lib/seslogin.php";
include_once "page/lib/dtkuesioner.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT $tableName.* FROM ".$tableName." ";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql="SELECT $tableName.* FROM ".$tableName." 
  where nama_aspek like '%$qcari%' or $field2 like '%$qcari%' ";
}
$pageQry = mysqli_query($koneksidb, $pageSql) or die ("error paging: ".mysql_error());
$jml	 = mysqli_num_rows($pageQry);
$max	 = ceil($jml/$row);


?>
<table class="table table-bordered table-striped">
  <tr>
    <th><h1><b>Data <?php echo $formName;?></b> <form class="navbar-search pull-right"  method="POST" action="?page=<?php echo $formName?>-Data">
								<input type="text" name="qcari" placeholder="pencarian..." autofocus/>
  </form></h1></th>
     
  </tr>
 
  <tr>
  <td > <a class="toggle-link" href="?page=<?php echo $formName?>-Add"><i class="icon-plus"></i> Tambah Data</a>
  </td>
  
  </tr> 



  
	<table class="table table-bordered table-striped">
      <tr>
        <th width="20" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th width="180"><strong>Kode Kuesioner</strong></th>
        <th width="180"><strong><?php echo $isian1; ?></strong></th>
        <th width="180"><strong><?php echo $isian5; ?></strong></th>
        <th width="125"><strong><?php echo $isian2; ?></strong></th>
        <th width="120"><strong><?php echo $isian3; ?></strong></th>
        <th width="120"><strong><?php echo $isian4; ?></strong></th>
        <th colspan="3"><strong>Option</strong></th>
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
		
       <td class="cc" align="center"><a href="?page=<?php echo $formName;?>-Detail&Kode=<?php echo $Kode; ?>" target="_self"><i class="icon-th-list"></i></a></td>
       <td class="cc" align="center"><a href="?page=<?php echo $formName;?>-Grafik&Kode=<?php echo $Kode; ?>" target="_self"><i class="icon-th"></i></a></td>
    <!--   <td class="cc" align="center"><a href="?page=<?php echo $formName;?>-Edit&Kode=<?php echo $Kode; ?>" target="_self"><i class="icon-edit"></i></a></td> -->
       <td class="cc" align="center"><a href="?page=<?php echo $formName;?>-Delete&Kode=<?php echo $Kode; ?>" onclick="return confirm('Anda Yakin menghapus Data <?php echo $formName;?> dengan Nama <?php echo $kolomData[$field0]; ?>? ')"><i class="icon-trash"></i></a></td>
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
