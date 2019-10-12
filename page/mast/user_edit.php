<?php
include_once "lib/seslogin.php";
include_once "page/lib/dtuser.php";


if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		if (trim($_POST['txt1'])=="") {
			$pesanError[] = "Data <b>".$field1."</b> tidak boleh kosong !";		
		}
		$txt1= $_POST['txt1'];
		$txt2= $_POST['txt2'];
		$txt3= $_POST['txt3'];
		 $txt4= $_POST['txt4'];
		 $txt5= md5($_POST['txt5']);	
		 $txt7= $_POST['txt5'];
	
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
			# SIMPAN PERUBAHAN DATA, Jika jumlah error pesanError tidak ada, simpan datanya
			$mySql	= "UPDATE ".$tableName." SET ".$field1."='$txt1', ".$field2."='$txt2', ".$field3."='$txt3', ".$field4."='$txt4', ".$field5."='$txt5', ".$field7."='$txt7' WHERE ".$field0." ='".$_POST['txt0']."'";
			$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=".$formName."-Data'>";
			}
			exit;
		}
	} // Penutup POST
	
	# TAMPILKAN DATA LOGIN UNTUK DIEDIT
	$Kode	 = isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txt0']; 
	$sqlShow = "SELECT * FROM ".$tableName." WHERE ".$field0."='$Kode'";
	$qryShow = mysqli_query($koneksidb, $sqlShow)  or die ("Query ambil data kategori salah : ".mysql_error());
	$dataShow = mysqli_fetch_array($qryShow);
	
		# MASUKKAN DATA KE VARIABEL
		$data0	= $dataShow[$field0];
		$data1	= $dataShow[$field1];
		$data2	= isset($dataShow[$field2]) ?  $dataShow[$field2] : $_POST['txt1'];
		$data2Lm	= $dataShow[$field2];
		$data3	= isset($dataShow[$field3]) ?  $dataShow[$field3] : $_POST['txt3'];
		$data3Lm	= $dataShow[$field3];
		$data4	= isset($dataShow[$field3]) ?  $dataShow[$field4] : $_POST['txt4'];
		$data4Lm	= $dataShow[$field4];
		$data5	= isset($dataShow[$field5]) ?  $dataShow[$field5] : $_POST['txt5'];
		$data5Lm	= $dataShow[$field5];
		$data6	= isset($dataShow[$field6]) ?  $dataShow[$field6] : $_POST['txt6'];
		$data6Lm	= $dataShow[$field6];
		$data7	= isset($dataShow[$field7]) ?  $dataShow[$field7] : $_POST['txt7'];
} // Penutup GET
?>
<form  class="form-horizontal" action="?page=<?php echo $formName;?>-Edit" method="post" name="form1" target="_self" id="form1">
<fieldset>
							<legend>Ubah <?php echo $formName?></legend>
							<div class="control-group">
								<label class="control-label" for="input01"><?php echo $isian1; ?></label>
								<div class="controls">
									<input name="txt1" type="text" class="input-xlarge" id="input01" value="<?php echo $data1; ?>"  onkeyup="validHuruf(this)" pattern="[A-Z a-z]{3,56}" size="60" maxlength="50"/>
									<input name="txt0" type="hidden" value="<?php echo $Kode; ?>" />
								</div>
							</div>
					<div class="control-group">
								<label class="control-label" for="input01"><?php echo $isian2; ?></label>
								<div class="controls">
									<input name="txt2" type="text" class="input-xlarge" id="input01" value="<?php echo $data2; ?>" />
									<input name="txtLama" type="hidden" value="<?php echo $data2Lm; ?>" />
								</div>
							</div>
							
					<div class="control-group">
								<label class="control-label" for="input01"><?php echo $isian3; ?></label>
								<div class="controls">
									<input name="txt3" type="text" class="input-xlarge" id="input01" value="<?php echo $data3; ?>"  onkeyup="validAngka(this)" pattern="[0-9]{8,12}" size="60" maxlength="12"/>
									<input name="txtLama" type="hidden" value="<?php echo $data3Lm; ?>" />
								</div>
							</div>
					<div class="control-group">
								<label class="control-label" for="input01"><?php echo $isian4; ?></label>
								<div class="controls">
									<input name="txt4" type="text" class="input-xlarge" id="input01" value="<?php echo $data4; ?>"  onkeyup="validAngka(this)" pattern="[A-Z a-z]{3,12}" size="60" maxlength="12"/>
									<input name="txtLama" type="hidden" value="<?php echo $data4Lm; ?>" />
								</div>
							</div>
					<div class="control-group">
								<label class="control-label" for="input01"><?php echo $isian5; ?></label>
								<div class="controls">
									<input name="txt5" type="text" class="input-xlarge" id="input01" value="<?php echo $data7; ?>" size="60" maxlength="12"/>
									<input name="txtLama" type="hidden" value="<?php echo $data5Lm; ?>" />
								</div>
							</div>
				 
								</div>
							</div>
			<div class="form-actions">
								<button type="submit"  name="btnSave" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn " name="reset" id="reset" onclick="return confirm('hapus data yang telah anda ketik?')"/>Reset</button>
		  <button type="button" class="btn " name=" KEMBALI " id="cancel" value=" BATAL " onclick="history.back();" />Batal </button>
							</div>				
							
							
	<!--						
  <table class="table-list" width="610" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <th colspan="3" scope="col">Ubah <?php echo $formName?> </th>
    </tr>
    <tr>
      <td width="24%"><b><?php echo $isian1; ?></b></td>
      <td width="2%"><b>:</b></td>
      <td width="74%"><input name="txt1"  value="<?php echo $data1; ?>"  onkeyup="validHuruf(this)" pattern="[A-Z a-z]{3,56}" size="60" maxlength="50"/>
      <input name="txt0" type="hidden" value="<?php echo $Kode; ?>" /></td>
    </tr>
    <tr>
      <td><b><?php echo $isian2; ?></b></td>
      <td><b>:</b></td>
      <td><input name="txt2" value="<?php echo $data2; ?>" size="60" maxlength="100" />
      <input name="txtLama" type="hidden" value="<?php echo $data2Lm; ?>" /></td>
    </tr>
	<tr>
      <td><b><?php echo $isian4; ?></b></td>
      <td><b>:</b></td>
      <td><input name="txt4" value="<?php echo $data4; ?>" size="60" maxlength="16" pattern="[a-z,0-9]{3,16}" />
      <input name="txtLama" type="hidden" value="<?php echo $data4Lm; ?>" /></td>
    </tr>
	<tr>
      <td><b><?php echo $isian5; ?> Baru</b></td>
      <td><b>:</b></td>
      <td><input name="txt5" type="password" value="" size="60" maxlength="16" required/>
      <input name="txtLama" type="hidden" value="<?php echo $data5Lm; ?>" /></td>
    </tr>
	<tr>
      <td><b><?php echo $isian6; ?></b></td>
      <td><b>:</b></td>
	  <td><label for="txt6"></label>
        <select name="txt6" id="ketegori">
          <option selected="selected">------------------</option>
          <option value="1"<?php echo ($data6== '1') ?  "selected" : "" ;  ?>>Administrator</option>
          <option value="3"<?php echo ($data6== '3') ?  "selected" : "" ;  ?>>Manajer</option>
          <option value="2"<?php echo ($data6== '2') ?  "selected" : "" ;  ?>>Tata Usaha</option>
          </select></td>
    </tr>
	<tr>
      <td><b><?php echo $isian3; ?></b></td>
      <td><b>:</b></td>
      <td><input name="txt3" value="<?php echo $data3; ?>" size="60" maxlength="13" pattern="[0-9]{8,12}" maxlength="12" />
      <input name="txtLama" type="hidden" value="<?php echo $data3Lm; ?>" /></td>
    </tr>
	
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;" /></td>
    </tr>
  </table>
  
  -->
</form>

