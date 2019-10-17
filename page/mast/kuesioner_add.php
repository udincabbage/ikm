<?php
include_once "lib/seslogin.php";
include_once "page/lib/dtkuesioner.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		if (trim($_POST['txt1'])=="") {
			$pesanError[] = "Data <b>".$field1."</b> tidak boleh kosong !";
		}
		$txt0= $_POST['txt0'];
		$txt1= $_POST['txt1'];
		// $txt2= $_POST['txt2'];
		// $txt3= $_POST['txt3'];
		// $txt4= $_POST['txt4'];
		$txt5= $_POST['txt5'];
		// $txt6= $_POST['txt6'];

		$cekSql="SELECT * FROM ".$tableName." WHERE ".$field1."='$txt1' AND ".$field5."='$txt5'";
		$cekQry=mysqli_query($koneksidb, $cekSql) or die ("Eror Query".mysqli_error());
		if(mysqli_num_rows($cekQry)>=1){
			$t5 = tampil_bulan($txt5);
			$pesanError[] = "Maaf, ".$isian5." <b> $t5 </b> sudah ada, ganti dengan yang lain";
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

			$tmpSql ="SELECT tjawaban_temp.id_kuis,sum(nilai) AS bobot, sum(nilai)/ COUNT(tjawaban_temp.id_kuis) AS unsur,
			tkuis.jawaban_a, tkuis.jawaban_b, tkuis.jawaban_c, tkuis.jawaban_d,taspek.id_aspek,taspek.nama_aspek
			FROM tjawaban_temp LEFT JOIN tkuis ON tkuis.id_kuis=tjawaban_temp.id_kuis
			LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek
			WHERE tahun='$txt1' AND bulan='$txt5' GROUP BY tjawaban_temp.id_kuis";
				$tmpQry = mysqli_query($koneksidb,$tmpSql) or die ("Gagal Query Tmp".mysqli_error($koneksidb));
				$jml =	mysqli_fetch_row($tmpQry);
				if($jml<'1') {
					echo " Kuesioner tidak ada pada bulan tersebut! ";
				}
				else {
				// while ($tmpRow = mysqli_fetch_array($tmpQry)) {


					// $data1 = $tmpRow['id_kuis'];
					// $data2 = $tmpRow['bobot'];
					// $data3 = $tmpRow['unsur'];
			// if($tmpRow['unsur']>='3.5'){$hasil=$tmpRow['jawaban_d'];}
			// elseif($tmpRow['unsur']>='2.5'){$hasil=$tmpRow['jawaban_c'];}
			// elseif($tmpRow['unsur']>='1.5'){$hasil=$tmpRow['jawaban_b'];}
			// else{$hasil=$tmpRow['jawaban_a'];}
					// // Masukkan semua barang yang udah diisi ke tabel pembelian detail
					// $itemSql = "INSERT INTO tunsur SET
											// id_aspek='$data1',
											// id_kuesioner='$txt0',
											// bobot='$data2',
											// nilai='$data3',
											// hasil_ukur='$hasil' ";
		  			// mysqli_query($koneksidb, $itemSql) or die ("Gagal Query tunsur  ".mysqli_error());
					// // $x++;
					// // }
					$insertSql = "INSERT INTO tjawaban_group(id_kuis,id_aspek,nama_aspek,bobot,unsur,jawaban_a,jawaban_b,jawaban_c,jawaban_d,id_kuesioner) SELECT tjawaban_temp.id_kuis,taspek.id_aspek,taspek.nama_aspek,sum(nilai) AS bobot, sum(nilai)/ COUNT(tjawaban_temp.id_kuis) AS unsur,
					tkuis.jawaban_a, tkuis.jawaban_b, tkuis.jawaban_c, tkuis.jawaban_d, '$txt0'
					FROM tjawaban_temp LEFT JOIN tkuis ON tkuis.id_kuis=tjawaban_temp.id_kuis
					LEFT JOIN taspek ON taspek.id_aspek=tkuis.id_aspek
					WHERE tahun='$txt1' AND bulan='$txt5' GROUP BY tjawaban_temp.id_kuis";
					$insertQry = mysqli_query($koneksidb,$insertSql) or die ("Gagal tambah Tmp".mysqli_error($koneksidb));
				}


			$pageSql2 = "SELECT sum(nilai)/ COUNT(id_kuis) AS total FROM  tjawaban_temp WHERE tahun='$txt1' AND bulan='$txt5'";
			$totQry	  = mysqli_query($koneksidb, $pageSql2) or die ("error paging: ".mysql_error());
			$totData  =  mysqli_fetch_array($totQry);
			$txt2	  = $totData['total'];
			$ikm 	  = ($totData['total']*25);
			$date 	  = date("Y-m-d");
			if($totData['total']>='3.25'){$tothasil='Sangat Baik';}
			elseif($totData['total']>='2.5'){$tothasil='Baik';}
			elseif($totData['total']>='1.75'){$tothasil='Tidak Baik';}
			else{$tothasil='Sangat Tidak Baik';}
			 $kodeBaru	= buatKode($tableName, $huruftgl);
			$mySql	= "INSERT INTO ".$tableName." (".$field0.",".$field1.",".$field2.",".$field3.",".$field4.",".$field5." ,".$field6." ) VALUES ('$txt0','$txt1','$txt2','$ikm','$tothasil','$txt5','$date' )";
			$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=".$formName."-Data'>";
			}
			exit;
				}
		}
	} // Penutup POST
	 $data0	= buatKode($tableName, $huruftgl);
	$data1	= isset($_POST['txt1']) ? $_POST['txt1'] : '';
	$data2	= isset($_POST['txt2']) ? $_POST['txt2'] : '';
	$data3	= isset($_POST['txt3']) ? $_POST['txt3'] : '';
	 $data4	= isset($_POST['txt4']) ? $_POST['txt4'] : '';
	$data5	= isset($_POST['txt5']) ? $_POST['txt5'] : '';
	// $data6	= isset($_POST['txt6']) ? $_POST['txt6'] : '';
 // Penutup GET


?>


  <form id="new-project" class="form-horizontal" action="?page=<?php echo $formName;?>-Add" method="post" name="form1" target="_self">
						<fieldset>
						<table class="table table-bordered table-striped">
							<tr>
      <th colspan="3" ><h2>Tambah  Hasil <?php  echo $formName ?> </h2></th>
    </tr>
    <tr>
      <td width="24%"><b>Kode Kuesioner</b></td>
      <td width="2%"><b>:</b></td>
      <td width="74%"><input name="txt0" class="span20" type="text" value="<?php echo $data0; ?>" size="60" maxlength="200" readonly/>

	  </td>
    </tr><tr>
      <td width="24%"><b><?php echo $isian1; ?></b></td>
      <td width="2%"><b>:</b></td>
      <td width="74%">
	 <select name="txt1" class="span20" >

		<?php
		$mySql2 = "SELECT tahun FROM tjawaban group by tahun ";
		$myQry = mysqli_query($koneksidb, $mySql2) or die ("Gagal Query absen ".mysql_error());
		while ($kolomData1 = mysqli_fetch_array($myQry)) {
			if ($data1 == $kolomData1['tahun']) {
				$cek = "selected";
			} else { $cek=""; }

			echo "<option value='$kolomData1[tahun]' $cek> $kolomData1[tahun] </option>";
		}
		$mySql ="";
		?>
		</select>
	  </td>
    </tr>
    <tr>
      <td width="24%"><b><?php echo $isian5; ?></b></td>
      <td width="2%"><b>:</b></td>
      <td width="74%">
	 <select name="txt5" class="span20" >

		<?php
		$mySql2 = "SELECT bulan FROM tjawaban group by bulan ";
		$myQry = mysqli_query($koneksidb, $mySql2) or die ("Gagal Query absen ".mysql_error());
		while ($kolomData1 = mysqli_fetch_array($myQry)) {
			$oka = tampil_bulan($kolomData1[bulan]);
			if ($data5 == $kolomData1['bulan']) {
				$cek = "selected";
			} else { $cek=""; }

			echo "<option value='$kolomData1[bulan]' $cek> $oka </option>";
		}
		$mySql ="";
		?>
		</select>
	  </td>
    </tr>



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
