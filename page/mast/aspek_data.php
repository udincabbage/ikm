<?php
include_once "lib/seslogin.php";
include_once "page/lib/dtaspek.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		if (trim($_POST['txt1'])=="") {
			$pesanError[] = "Data <b>".$field1."</b> tidak boleh kosong !";		
		}
		$txt1= $_POST['txt1'];
		// $txt2= $_POST['txt2'];
		// $txt3= $_POST['txt3'];
		// $txt4= $_POST['txt4'];
		// $txt5= $_POST['txt5'];
		// $txt6= '0';
		// $txt7= $_POST['txt7'];
		// $txt8= $_POST['txt8'];
		// $txt9= $_POST['txt9'];
		
		$cekSql="SELECT * FROM ".$tableName." WHERE ".$field1."='$txt1'";
		$cekQry=mysqli_query($koneksidb, $cekSql) or die ("Eror Query".mysqli_error()); 
		if(mysqli_num_rows($cekQry)>=1){
			$pesanError[] = "Maaf, ".$isian1." <b> $txt1 </b> sudah ada, ganti dengan yang lain";
		}		

		if (count($pesanError)>=1 ){
            echo "<div class='mssgBox'>";
			echo "<img src='img/attention.png'> <br><hr>";
				$noPesan=0;
				foreach ($pesanError as $indeks=>$pesan_tampil) { 
				$noPesan++;
					echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
				} 
			echo "</div> <br>"; 
		}
		else {
			// $kodeBaru	= buatKode($tableName, $huruf);
			$mySql	= "INSERT INTO ".$tableName." (".$field1.",".$field2.",".$field3.",".$field4.",".$field5.",".$field6.") VALUES ('$txt1','$txt2','$txt3','$txt4','$txt5','$txt6')";
			$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=".$formName."-Data'>";
			}
			exit;
		}
	} // Penutup POST
	// $data0	= buatKode($tableName, $huruftgl);
	$data1	= isset($_POST['txt1']) ? $_POST['txt1'] : '';
	// $data2	= isset($_POST['txt2']) ? $_POST['txt2'] : date("Y-m-d");
	// $data3	= isset($_POST['txt3']) ? $_POST['txt3'] : '';
	// $data4	= isset($_POST['txt4']) ? $_POST['txt4'] : '';
	// $data5	= isset($_POST['txt5']) ? $_POST['txt5'] : '';
	// $data6	= isset($_POST['txt6']) ? $_POST['txt6'] : '';
	// $data7	= isset($_POST['txt7']) ? $_POST['txt7'] : '';
	// $data8	= isset($_POST['txt8']) ? $_POST['txt8'] : '';
	// $data9	= isset($_POST['txt9']) ? $_POST['txt9'] : '';
	// $data10	= isset($_POST['txt10']) ? $_POST['txt10'] : '';
	// $data11	= isset($_POST['txt11']) ? $_POST['txt11'] : '';
} // Penutup GET

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT $tableName.* FROM ".$tableName." ";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql="SELECT $tableName.* FROM ".$tableName." 
  where $field2 like '%$qcari%' or $field3 like '%$qcari%' or $field4 like '%$qcari%' or $field5 like '%$qcari%' ";
}
$pageQry = mysqli_query($koneksidb, $pageSql) or die ("error paging: ".mysql_error());
$jml	 = mysqli_num_rows($pageQry);
$max	 = ceil($jml/$row);


?>
<table class="table table-bordered table-striped">
  <tr>
    <th><h1><b>Data <?php echo $formName;?></b> <form class="navbar-search pull-right"  method="POST" action="?page=<?php echo $formName?>-Data">
								<input type="text" name="qcari" placeholder="Cari..." autofocus/>
  </form></h1></th>
     
  </tr>
 
  <tr>
  <td > <a class="toggle-link" href="?page=<?php echo $formName?>-Add"><i class="icon-plus"></i> Tambah Data</a>
  </td>
  
  </tr> 



  
	<table class="table table-bordered table-striped">
      <tr>
        <th width="30" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th width="820"><strong><?php echo $isian1; ?></strong></th>
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
        <td> <?php echo $kolomData[$field1]; ?> </td>
		
       <td class="cc" align="center"><a href="?page=<?php echo $formName;?>-Edit&Kode=<?php echo $Kode; ?>" target="_self"><i class="icon-edit"></i></a></td>
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
