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
		// $txt5= md5($_POST['txt5']);
		// $txt6= $_POST['txt6'];
		
		$cekSql="SELECT * FROM ".$tableName." WHERE ".$field1."='$txt1'";
		$cekQry=mysqli_query($koneksidb, $cekSql) or die ("Eror Query".mysqli_error()); 
		if(mysqli_num_rows($cekQry)>=1){
			$pesanError[] = "Maaf, ".$isian4." <b> $txt4 </b> sudah ada, ganti dengan yang lain";
		}		

		if (count($pesanError)>=1 ){
            echo "<div class='mssgBox'>";
			echo "<img src='images/attention.png'> <br><hr>";
				$noPesan=0;
				foreach ($pesanError as $indeks=>$pesan_tampil) { 
				$noPesan++;
					echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
				} 
			echo "</div> <br>"; 
		}
		else {
			$kodeBaru	= buatKode($tableName, $huruf);
			$mySql	= "INSERT INTO ".$tableName." (".$field1." ) VALUES ('$txt1' )";
			$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=".$formName."-Data'>";
			}
			exit;
		}
	} // Penutup POST
	$data0	= buatKode($tableName, $huruf);
	$data1	= isset($_POST['txt1']) ? $_POST['txt1'] : '';
	// $data2	= isset($_POST['txt2']) ? $_POST['txt2'] : '';
	// $data3	= isset($_POST['txt3']) ? $_POST['txt3'] : '';
	 // $data4	= isset($_POST['txt4']) ? $_POST['txt4'] : '';
	// $data5	= isset($_POST['txt5']) ? $_POST['txt5'] : '';
	// $data6	= isset($_POST['txt6']) ? $_POST['txt6'] : '';
} // Penutup GET


?>


  <form id="new-project" class="form-horizontal" action="?page=<?php echo $formName;?>-Add" method="post" name="form1" target="_self">
						<fieldset>
						<table class="table table-bordered table-striped">
							<tr>
      <th colspan="3" ><h2>Tambah  <?php  echo $formName ?> </h2></th>
    </tr>
    <tr>
      <td width="24%"><b><?php echo $isian1; ?></b></td>
      <td width="2%"><b>:</b></td>
      <td width="74%"><input name="txt1" class="span20" type="text" value="<?php echo $data1; ?>" size="60" onkeyup="validHuruf(this)" pattern="[A-Z a-z]{3,56}" maxlength="50" autofocus required/></td>
    </tr>
    <!--<tr>
      <td><b><?php echo $isian2; ?></b></td>
      <td><b>:</b></td>
      <td><input name="txt2" type="text" value="<?php echo $data2; ?>" size="60" maxlength="100" /></td>
    </tr>
	<tr>
      <td><b><?php echo $isian3; ?></b></td>
      <td><b>:</b></td>
      <td><input name="txt3" type="text" value="<?php echo $data3; ?>" size="60" onkeyup="validAngka(this)"  pattern="[0-9]{8,12}" maxlength="12" required/></td>
		
    </tr>
    <tr>
      <td><b><?php echo $isian4; ?></b></td>
      <td><b>:</b></td>
      <td><input name="txt4" type="text" value="<?php echo $data4; ?>" size="60" maxlength="16" pattern="[a-z,0-9]{3,16}" required/></td>
    </tr>
    <tr>
      <td><b><?php echo $isian5; ?></b></td>
      <td><b>:</b></td>
      <td><input name="txt5" type="password" value="<?php echo $data5; ?>" size="60" maxlength="16" required/></td>
    </tr>
    <tr>
      <td><b><?php echo $isian6; ?></b></td>
      <td><b>:</b></td>
	  <td><label for="txt6" ></label>
        <select name="txt6" required>
          <option value="" selected>------------------</option>
          <option value="1"required>Administrator</option>
          <option value="3">Manajer</option>
          <option value="2">Sales</option>
          </select></td>
    </tr> 
	-->
	
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><button type="submit"  name="btnSave" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn " name="reset" id="reset" onclick="return confirm('hapus data yang telah anda ketik?')"/>Reset</button>
		   <button type="button" class="btn " name=" KEMBALI " id="cancel" value=" BATAL "  onclick="history.back();"/> Batal </button></td>
    </tr>
	</table>
						</fieldset>
			</form>
 
  </td>
  
  </tr> 
</table>
