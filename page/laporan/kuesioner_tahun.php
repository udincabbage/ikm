<?php
	$now = date("Y-m-d"); 
	$tahun = date("Y"); 
	$bulan = date("m"); 
	$aspek	= isset($_POST['aspek']) ? $_POST['aspek'] : '';
?>
	<form class="form-horizontal"  method="GET" action="page/laporan/kuesioner-pdf.php?tahun=['tahun']" target="_blank">
		<fieldset>
<table class="table table-bordered table-striped">
							<tr>
      <th colspan="2" ><h2>Pilih Laporan Jawaban Kuesioner Pertahun</h2></th>
    </tr>
<tr>
<td>Tahun</td>
<td><input type="number" class="span20" name="tahun" value="<?php echo $tahun; ?>" min="2015" required/></td>
</tr>  
<!-- <tr>
<td>Bulan</td>
<td><select name="bulan" class="span20" >
		 
		<?php
		$mySql2 = "SELECT bulan FROM tjawaban group by bulan ";
		$myQry = mysqli_query($koneksidb, $mySql2) or die ("Gagal Query absen ".mysql_error());
		while ($kolomData1 = mysqli_fetch_array($myQry)) {
			$oka = tampil_bulan($kolomData1[bulan]);
			if ($bulan == $kolomData1['bulan']) {
				$cek = "selected";
			} else { $cek=""; }
			
			echo "<option value='$kolomData1[bulan]' $cek> $oka </option>";
		}
		$mySql ="";
		?>
		</select></td>
</tr>   
<tr>
<td>Aspek</td>
<td> <select name="aspek" class="span20" >
		<option value="" selected>Semua Aspek</option>
		<?php
		$mySql2 = "SELECT * FROM taspek ";
		$myQry = mysqli_query($koneksidb, $mySql2) or die ("Gagal Query absen ".mysql_error());
		while ($kolomData1 = mysqli_fetch_array($myQry)) {
			if ($aspek == $kolomData1['id_aspek']) {
				$cek = "selected";
			} else { $cek=""; }
			
			echo "<option value='$kolomData1[id_aspek]' $cek> $kolomData1[nama_aspek] </option>";
		}
		$mySql ="";
		?>
		</select></td>
</tr>  
-->
 <tr>
<td colspan="2"> <button type="submit" class="btn btn-primary">Proses</button>
								<button type="reset" class="btn " name="reset" id="reset" onclick="return confirm('hapus data yang telah anda ketik?')"/>Reset</button>
		   <button type="button" class="btn " name=" KEMBALI " id="cancel" value=" BATAL "  onclick="history.back();"/> Batal </button></td>
 
</tr>
</table>
</fieldset>
</form>