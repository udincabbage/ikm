<?php
// include_once "lib/seslogin.php";
include_once "page/lib/dtkuis.php";
// session_start();
if(isset($_SESSION["mulai_waktu"])){
	$telah_berlalu = time() - $_SESSION["mulai_waktu"];
	}
else {
	$_SESSION["mulai_waktu"] = time();
	$telah_berlalu = 0;
	}	
	
if($_GET) {
	if(isset($_POST['btnSaveTemp'])){
		$pesanError = array();
		// if (trim($_POST['txt1'])=="") {
			// $pesanError[] = "Data <b>".$field1."</b> tidak boleh kosong !";		
		// }
		// $hal = $_GET['hal'];
		$iduser = $_SESSION['SES_LOGIN'];
		$txt1= $_POST['soal'];
		$txt2= $_POST['jwb'];
		// $txt3= $_POST['txt3'];
		// $txt4= $_POST['txt4'];
		// $txt5= $_POST['txt5'];
		// $txt6= $_POST['txt6'];
		// $txt7= $_POST['txt7'];
		// $txt8= $_POST['txt8'];
		// $txt9= $_POST['txt9'];
		
		// $cekSql="SELECT * FROM ".$tableName." WHERE  ".$field1."='$txt1' AND ".$field2."='$txt2'";
		// $cekQry=mysqli_query($koneksidb, $cekSql) or die ("Eror Query".mysqli_error()); 
		// if(mysqli_num_rows($cekQry)>=1){
			// $pesanError[] = "Maaf, ".$isian2." <b> $txt2 </b> sudah ada, ganti dengan yang lain";
		// }		

		// if (count($pesanError)>=1 ){
            // echo "<div class='mssgBox'>";
			// echo "<img src='img/attention.png'> <br><hr>";
				// $noPesan=0;
				// foreach ($pesanError as $indeks=>$pesan_tampil) { 
				// $noPesan++;
					// echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
				// } 
			// echo "</div> <br>"; 
		// }
		// else {
			// $kodeBaru	= buatKode($tableName, $huruf);
			$mySql	= "INSERT INTO tjawaban_temp (id_user, id_soal, jawaban) VALUES ('$iduser','$txt1','$txt2')";
			$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal query".mysql_error());
			// if($myQry){
				// echo "<meta http-equiv='refresh' content='0; url=?page=".$formName."-Data'>";
			// }
			if($myQry){
				
				// echo "<meta http-equiv='refresh' content='0; url=?page=Tes-Online&hal=".$hal."'>";
				echo "Jawaban Tersimpan";
			}
			// exit;
		}
		
	if(isset($_POST['btnSave'])){
		$iduser = $_SESSION['SES_LOGIN'];
		$cekSql="SELECT tjawaban_temp.id_user,tjawaban_temp.id_soal,tjawaban_temp.jawaban,tsoal.jawaban FROM `tjawaban_temp`,tsoal WHERE tjawaban_temp.id_soal=tsoal.id_soal  AND tjawaban_temp.jawaban=tsoal.jawaban AND tjawaban_temp.id_user='$iduser'";
		$cekQry=mysqli_query($koneksidb, $cekSql) or die ("Eror Query jawaban ".mysqli_error()); 
	
			$wktu_tes = '00:00:10';
			$jwbn_benar = mysqli_num_rows($cekQry);
			$nilai 	= $jwbn_benar * 10;
			// $kodeBaru	= buatKode($tableName, $huruf);
			$mySql	= "INSERT INTO ttes (id_user, wktu_tes, jwbn_benar, nilai) VALUES ('$iduser','$wktu_tes','$jwbn_benar','$nilai')";
			$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal query".mysql_error());
			
			$mySql	= "UPDATE tuser SET sts_test='1'  WHERE id_user ='".$iduser."'";
			$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal query".mysql_error());
			if($myQry){
				
			$_SESSION['TEST'] ='1';
				echo "<meta http-equiv='refresh' content='0; url=?page=Tes-Selesai'>";
				
			}
			exit;
		
	} 
	// Penutup POST
	
	// $data0	= buatKode2($tableName, $huruftgl);
	// $data1	= isset($_POST['txt1']) ? $_POST['txt1'] : $_SESSION['SES_LOGIN'];
	$data2	= isset($_POST['txt2']) ? $_POST['txt2'] : '';
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
$row = 8;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT $tableName.*,nama_aspek FROM ".$tableName." LEFT JOIN taspek ON taspek.id_aspek=$tableName.id_aspek ";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql="SELECT $tableName.*,nama_aspek FROM ".$tableName." LEFT JOIN taspek ON taspek.id_aspek=$tableName.id_aspek
  where $field2 like '%$qcari%' or $field3 like '%$qcari%' ";
}
$pageQry = mysqli_query($koneksidb, $pageSql) or die ("error paging: ".mysql_error());
$jml	 = mysqli_num_rows($pageQry);
$max	 = ceil($jml/$row);


?>

 <form id="new-project"  action="?page=Tes-Online" method="post" name="form1" target="_self">
<table class="table table-bordered table-striped">
  <tr>
    <td colspan="2"><h1><b>Kuesioner Online</b></h1></td>
  </tr>
  
	<table class="table table-striped">
      
		<?php
		$mySql = $pageSql." ORDER BY RAND(".$field0.") LIMIT $hal, $row";
		$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah : ".mysql_error());
		$nomor  = 1; 
		while ($kolomData = mysqli_fetch_array($myQry)) {
			
			$Kode = $kolomData[$field0];
		?>
		<tr>
        
        <td width="3%"><h4> <?php echo $nomor++; ?>. </h4></td>
        <td width="97%" align="left"><h4> [<?php echo $kolomData['nama_aspek']; ?>] &nbsp;   <?php echo $kolomData[$field2]; ?></h4></td>
        
      </tr>
	  <input type="hidden" name="soal" value="<?php echo $kolomData[$field0]; ?>">
      <tr>
        <td><input type="radio" name="jwb" value="a"></td>
        <td> <?php echo $kolomData[$field3]; ?></td>
      </tr>
      <tr>
        <td><input type="radio" name="jwb" value="b"></td>
        <td> <?php echo $kolomData[$field4]; ?></td>
      </tr>
      <tr>
        <td><input type="radio" name="jwb" value="c" ></td>
        <td> <?php echo $kolomData[$field5]; ?></td>
      </tr>
      <tr>
        <td><input type="radio" name="jwb" value="d" > </td>
        <td> <?php echo $kolomData[$field6]; ?></td>
      </tr>
	
	  <tr>
       <td colspan="2"><strong><button type="submit"  name="btnSaveTemp" class="btn btn-primary">Simpan</button> &nbsp; <button type="reset" class="btn " name="reset" id="reset" onclick="return confirm('Reset data yang telah anda ketik?')"/>Reset</button></strong></td>
      </tr>
	  <tr>
       <td colspan="2"><strong>&nbsp; </strong></td>
      </tr>
      <?php } ?>
    </table>
	<table class="table table-bordered table-striped">
	
  <tr>
   
    <td colspan="2" align="right"><b>Halaman ke :</b> 
	<?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=Kuesioner-Online&hal=$list[$h]'>$h</a> ";
	}
	?>	</td>
  </tr>
  <tr>
   
    <td colspan="2" align="right"> 
								
								<button type="submit" class="btn  btn-primary" name="btnSave" onclick="return confirm('Selesai menjawab semua soal? Anda tidak akan bisa mengulangi tes ini nanti')"/>Selesai</button></td>
  </tr>
</table>
</form>
