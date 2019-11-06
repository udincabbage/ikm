<?php
// include_once "lib/seslogin.php";
include_once "page/lib/dtkuis.php";
// session_unset();

// session_destroy();
// session_start();
// if(isset($_SESSION["mulai_waktu"])){
// $telah_berlalu = time() - $_SESSION["mulai_waktu"];
// }
// else {
// $_SESSION["mulai_waktu"] = time();
// $telah_berlalu = 0;
// }

if($_GET) {
	$Kode_aspek=$_GET['Kode'];
	if(isset($_POST['btnSave'])){
		// $iduser = $_SESSION['SES_LOGIN'];

		// $wktu_tes = '00:00:10';
		// $nilai 	= $jwbn_benar * 10;
		$user_ip = getUserIP();
		$id_kuesioner 	= '101';
		$tahun 	= date("Y");
		$bulan 	= date("m");
		$kodeBaru	= buatKode3('tjawaban', $huruftgl);

		foreach ($_POST as $key=>$val)
		{
			$key = str_replace("_", "", $key);
			If ($key <> 'btnSave') //you might need to check that you only reading the radio options
			{

				$mySql="INSERT INTO tjawaban (ip_address, id_responden, tahun, bulan, id_kuesioner, id_kuis, jawaban)
				VALUES ('$user_ip', '$kodeBaru', '$tahun', '$bulan', '$id_kuesioner', '$key', '$val')";


				$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal query 1 ".mysqli_error($koneksidb));
				if($val=='d'){$nil='4';}
				elseif($val=='c'){$nil='3';}
				elseif($val=='b'){$nil='2';}
				else{$nil='1';}

				$mySql="INSERT INTO tjawaban_temp (ip_address, id_responden, tahun, bulan, id_kuesioner, id_kuis, jawaban, nilai)
				VALUES ('$user_ip', '$kodeBaru', '$tahun', '$bulan', '$id_kuesioner', '$key', '$val', '$nil')";

				// }
				$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal query 2 ".mysqli_error($koneksidb));
			}
			$mySql = "DELETE FROM tjawaban WHERE  id_kuis='0'";
			$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal buang 02 ".mysqli_error($koneksidb));
			$mySql = "DELETE FROM tjawaban_temp WHERE  id_kuis='0'";
			$myQry	= mysqli_query($koneksidb, $mySql) or die ("Gagal buang 01 ".mysqli_error($koneksidb));
			if($myQry){

				$_SESSION['TEST'] ='1';
				echo "<meta http-equiv='refresh' content='0; url=?page=Kuesioner-Selesai&Kode=".$kodeBaru."'>";

			}

		}

		// $mySql	= "INSERT INTO ttes (id_user, wktu_tes, jwbn_benar, nilai) VALUES ('$iduser','$wktu_tes','$jwbn_benar','$nilai')";

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
$pageSql = 'SELECT tkuis.*, tresponden_kuis.* FROM tkuis
LEFT JOIN tresponden_kuis ON tresponden_kuis.id_kuis=tkuis.id_kuis
WHERE tkuis.id_aspek='.$Kode_aspek.'
GROUP BY tresponden_kuis.responden';

if(isset($_POST['qcari'])){
	$qcari=$_POST['qcari'];
	$pageSql="SELECT $tableName.*,nama_aspek FROM ".$tableName." LEFT JOIN taspek ON taspek.id_aspek=$tableName.id_aspek
	where $field2 like '%$qcari%' or $field3 like '%$qcari%' ";
}
$pageQry = mysqli_query($koneksidb, $pageSql) or die ("error paging 1 : ".mysqli_error($koneksidb));
$jml	 = mysqli_num_rows($pageQry);
$max	 = ceil($jml/$row);


?>
<?php
switch ($Kode_aspek) {
    case 15:
							$aspek = "Tata Pamong, Tata Kelola, dan Kerjasama";
							break;
    case 16:
							$aspek = "Mahasiswa";
							break;
    case 17:
							$aspek = "Sumber Daya Manusia";
							break;
    case 18:
							$aspek = "Keuangan, Sarana, dan Prasarana";
							break;
    case 19:
							$aspek = "Pendidikan";
							break;
    case 20:
							$aspek = "Penelitian";
							break;
    case 21:
							$aspek = "pengabdian kepada Masyarakat";
							break;
    case 22:
							$aspek = "Luaran dan Capaian Tridharma";
							break;
			default:
					echo "Your favorite color is neither red, blue, nor green!";
}
?>

<form id="new-project"  action="?page=Kuesioner-Mahasiswa" method="post" name="form1" target="_self">
	<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<tr>
			<td colspan="2"><h1><b><?php echo $aspek;?></b></h1></td>
		</tr>

		<table class="table table-bordered table-striped">

			<?php
			$mySql = $pageSql." ORDER BY responden ";
			$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah 1 : ".mysqli_error($koneksidb));
			$nomor  = 1;
			while ($kolomData = mysqli_fetch_array($myQry)) {

				$Kode = $Kode_aspek;
				$responden = $kolomData['responden'];
				$selectKuis = 'SELECT tkuis.id_kuis, tkuis.soal,
				tkuis.jawaban_a,tkuis.jawaban_b,tkuis.jawaban_c,tkuis.jawaban_d FROM tresponden_kuis
				LEFT JOIN tkuis ON tresponden_kuis.id_kuis=tkuis.id_kuis
				LEFT JOIN taspek ON tkuis.id_aspek = taspek.id_aspek
				WHERE tresponden_kuis.responden="'.$responden.'" and tkuis.id_aspek='.$Kode;
				$queryKuis = mysqli_query($koneksidb, $selectKuis)  or die ("Query salah 2 : ".mysqli_error($koneksidb));


				?>
				<tr>

					<td  rowspan="2"><h4> <?php echo numberToRomanRepresentation($nomor++); ?>. </h4></td>
					<td  align="left" ><h4> <?php echo $responden ?> &nbsp; </h4></td>
					<td width="5%" style="vertical-align:middle"><strong>Sangat tidak puas</strong></td>
					<td width="5%" style="vertical-align:middle"><strong>Tidak puas</strong></td>
					<td width="5%" style="vertical-align:middle"><strong>Puas</strong></td>
					<td width="5%" style="vertical-align:middle"><strong>Sangat puas</strong></td>
					<td width="5%" style="vertical-align:middle"><strong>Weighted Average (%)</strong></td>
					<td width="5%" style="vertical-align:middle"><strong>Grafik</strong></td>

				</tr>
				<tr>
					<td colspan="12"><strong>&nbsp; </strong></td>
				</tr>
				<?php
				$nomor2=1;
				include "data.php";
				$rata=0;
				$jumlah_semua=0;
				while ($kolomData2 = mysqli_fetch_array($queryKuis)) {
					$Kode1 = $kolomData2['id_kuis'];
					?>
				<tr>
					<td> <?php echo $nomor2 ?> </td>
					<td> <?php echo $kolomData2[$field2]; ?> </td>
					<?php
					switch ($Kode_aspek) {
						case 15 :
								$stp = $c2["Q".$nomor2]["stp"];
								$tp = $c2["Q".$nomor2]["tp"];
								$p = $c2["Q".$nomor2]["p"];
								$sp = $c2["Q".$nomor2]["sp"];

								$weighted_average = $c2["Q".$nomor2]["stp"]*1+
								                    $c2["Q".$nomor2]["tp"]*2+
																		$c2["Q".$nomor2]["p"]*3+
																		$c2["Q".$nomor2]["sp"]*4;
								$jumlah = $c2["Q".$nomor2]["stp"]+
													$c2["Q".$nomor2]["tp"]+
													$c2["Q".$nomor2]["p"]+
													$c2["Q".$nomor2]["sp"];
								$jumlah=$jumlah*4;
								$weighted_average = ($weighted_average/$jumlah)*100;

								echo "<td style=\"text-align:right\">".$c2["Q".$nomor2]["stp"]."</td>";
								echo "<td style=\"text-align:right\">".$c2["Q".$nomor2]["tp"]."</td>";
								echo "<td style=\"text-align:right\">".$c2["Q".$nomor2]["p"]."</td>";
								echo "<td style=\"text-align:right\">".$c2["Q".$nomor2]["sp"]."</td>";
								echo "<td style=\"text-align:right\">".round($weighted_average,2)."</td>";
								break;
						case 16 :
								$stp = $c3["Q".$nomor2]["stp"];
								$tp = $c3["Q".$nomor2]["tp"];
								$p = $c3["Q".$nomor2]["p"];
								$sp = $c3["Q".$nomor2]["sp"];
								$weighted_average = $c3["Q".$nomor2]["stp"]*1+
								                    $c3["Q".$nomor2]["tp"]*2+
																		$c3["Q".$nomor2]["p"]*3+
																		$c3["Q".$nomor2]["sp"]*4;
								$jumlah = $c3["Q".$nomor2]["stp"]+
													$c3["Q".$nomor2]["tp"]+
													$c3["Q".$nomor2]["p"]+
													$c3["Q".$nomor2]["sp"];
								$jumlah=$jumlah*4;
								$weighted_average = ($weighted_average/$jumlah)*100;
								echo "<td style=\"text-align:right\">".$c3["Q".$nomor2]["stp"]."</td>";
								echo "<td style=\"text-align:right\">".$c3["Q".$nomor2]["tp"]."</td>";
								echo "<td style=\"text-align:right\">".$c3["Q".$nomor2]["p"]."</td>";
								echo "<td style=\"text-align:right\">".$c3["Q".$nomor2]["sp"]."</td>";
								echo "<td style=\"text-align:right\">".round($weighted_average,2)."</td>";
								break;
						case 17 :
								// print_r($c4_dosen);
								$stp = $responden=="DOSEN"?(int)$c4_dosen["Q".$nomor2]["stp"]:(int)$c4_tendik["Q".$nomor2]["stp"];
								$tp = $responden=="DOSEN"?(int)$c4_dosen["Q".$nomor2]["tp"]:(int)$c4_tendik["Q".$nomor2]["tp"];
								$p = $responden=="DOSEN"?(int)$c4_dosen["Q".$nomor2]["p"]:(int)$c4_tendik["Q".$nomor2]["p"];
								$sp = $responden=="DOSEN"?(int)$c4_dosen["Q".$nomor2]["sp"]:(int)$c4_tendik["Q".$nomor2]["sp"];

								$weighted_average = $stp*1+
								                    $tp*2+
																		$p*3+
																		$sp*4;
								$jumlah = $stp+$tp+$p+$sp;
								$jumlah=$jumlah*4;
								$weighted_average = ($weighted_average/$jumlah)*100;

								echo "<td style=\"text-align:right\">$stp</td>";
								echo "<td style=\"text-align:right\">$tp</td>";
								echo "<td style=\"text-align:right\">$p</td>";
								echo "<td style=\"text-align:right\">$sp</td>";
								echo "<td style=\"text-align:right\">".round($weighted_average,2)."</td>";
								break;
						case 18 :
								$stp = $c5["Q".$nomor2]["stp"];
								$tp = $c5["Q".$nomor2]["tp"];
								$p = $c5["Q".$nomor2]["p"];
								$sp = $c5["Q".$nomor2]["sp"];
								$weighted_average = $c5["Q".$nomor2]["stp"]*1+
								                    $c5["Q".$nomor2]["tp"]*2+
																		$c5["Q".$nomor2]["p"]*3+
																		$c5["Q".$nomor2]["sp"]*4;
								$jumlah = $c5["Q".$nomor2]["stp"]+
													$c5["Q".$nomor2]["tp"]+
													$c5["Q".$nomor2]["p"]+
													$c5["Q".$nomor2]["sp"];
								$jumlah=$jumlah*4;
								$weighted_average = ($weighted_average/$jumlah)*100;
								echo "<td style=\"text-align:right\">".$c5["Q".$nomor2]["stp"]."</td>";
								echo "<td style=\"text-align:right\">".$c5["Q".$nomor2]["tp"]."</td>";
								echo "<td style=\"text-align:right\">".$c5["Q".$nomor2]["p"]."</td>";
								echo "<td style=\"text-align:right\">".$c5["Q".$nomor2]["sp"]."</td>";
								echo "<td style=\"text-align:right\">".round($weighted_average,2)."</td>";
								break;
						case 19 :
								$stp = $c6["Q".$nomor2]["stp"];
								$tp = $c6["Q".$nomor2]["tp"];
								$p = $c6["Q".$nomor2]["p"];
								$sp = $c6["Q".$nomor2]["sp"];
								$weighted_average = $c6["Q".$nomor2]["stp"]*1+
								                    $c6["Q".$nomor2]["tp"]*2+
																		$c6["Q".$nomor2]["p"]*3+
																		$c6["Q".$nomor2]["sp"]*4;
								$jumlah = $c6["Q".$nomor2]["stp"]+
													$c6["Q".$nomor2]["tp"]+
													$c6["Q".$nomor2]["p"]+
													$c6["Q".$nomor2]["sp"];
								$jumlah=$jumlah*4;
								$weighted_average = ($weighted_average/$jumlah)*100;
								echo "<td style=\"text-align:right\">".$c6["Q".$nomor2]["stp"]."</td>";
								echo "<td style=\"text-align:right\">".$c6["Q".$nomor2]["tp"]."</td>";
								echo "<td style=\"text-align:right\">".$c6["Q".$nomor2]["p"]."</td>";
								echo "<td style=\"text-align:right\">".$c6["Q".$nomor2]["sp"]."</td>";
								echo "<td style=\"text-align:right\">".round($weighted_average,2)."</td>";
								break;
						case 20 :
								$stp = $c7["Q".$nomor2]["stp"];
								$tp = $c7["Q".$nomor2]["tp"];
								$p = $c7["Q".$nomor2]["p"];
								$sp = $c7["Q".$nomor2]["sp"];
								$weighted_average = $c7["Q".$nomor2]["stp"]*1+
								                    $c7["Q".$nomor2]["tp"]*2+
																		$c7["Q".$nomor2]["p"]*3+
																		$c7["Q".$nomor2]["sp"]*4;
								$jumlah = $c7["Q".$nomor2]["stp"]+
													$c7["Q".$nomor2]["tp"]+
													$c7["Q".$nomor2]["p"]+
													$c7["Q".$nomor2]["sp"];
								$jumlah=$jumlah*4;
								$weighted_average = ($weighted_average/$jumlah)*100;
								echo "<td style=\"text-align:right\">".$c7["Q".$nomor2]["stp"]."</td>";
								echo "<td style=\"text-align:right\">".$c7["Q".$nomor2]["tp"]."</td>";
								echo "<td style=\"text-align:right\">".$c7["Q".$nomor2]["p"]."</td>";
								echo "<td style=\"text-align:right\">".$c7["Q".$nomor2]["sp"]."</td>";
								echo "<td style=\"text-align:right\">".round($weighted_average,2)."</td>";
								break;
						case 21 :
								$stp = $c8["Q".$nomor2]["stp"];
								$tp = $c8["Q".$nomor2]["tp"];
								$p = $c8["Q".$nomor2]["p"];
								$sp = $c8["Q".$nomor2]["sp"];
								$weighted_average = $c8["Q".$nomor2]["stp"]*1+
								                    $c8["Q".$nomor2]["tp"]*2+
																		$c8["Q".$nomor2]["p"]*3+
																		$c8["Q".$nomor2]["sp"]*4;
								$jumlah = $c8["Q".$nomor2]["stp"]+
													$c8["Q".$nomor2]["tp"]+
													$c8["Q".$nomor2]["p"]+
													$c8["Q".$nomor2]["sp"];
								$jumlah=$jumlah*4;
								$weighted_average = ($weighted_average/$jumlah)*100;
								echo "<td style=\"text-align:right\">".$c8["Q".$nomor2]["stp"]."</td>";
								echo "<td style=\"text-align:right\">".$c8["Q".$nomor2]["tp"]."</td>";
								echo "<td style=\"text-align:right\">".$c8["Q".$nomor2]["p"]."</td>";
								echo "<td style=\"text-align:right\">".$c8["Q".$nomor2]["sp"]."</td>";
								echo "<td style=\"text-align:right\">".round($weighted_average,2)."</td>";
								break;
					default: ?>
					<td style="text-align:right">0</td>
					<td style="text-align:right">1</td>
					<td style="text-align:right">2</td>
					<td style="text-align:right">3</td>
				<?php } ?>
					<td style="text-align:center"><a href="?page=Kuesioner-Grafik-Pie&Kode=<?php echo $Kode1; ?>&tahun=201802&stp=<?php echo $stp; ?>&tp=<?php echo $tp; ?>&p=<?php echo $p; ?>&sp=<?php echo $sp; ?>" target="_self"><i class="icon-adjust"></i></a></td>
				</tr>
				<?php
					$nomor2++;
					$jumlah_semua=$jumlah_semua+round($weighted_average,2);
				}
				?>

				<!-- <tr>
				<td colspan="2"><strong><button type="submit"  name="btnSaveTemp" class="btn btn-primary">Simpan</button> &nbsp; <button type="reset" class="btn " name="reset" id="reset" onclick="return confirm('Reset data yang telah anda ketik?')"/>Reset</button></strong></td>
			</tr> -->
			<tr>
				<td style="text-align:right" colspan="6"><strong>Rata-rata</strong></td>
				<td style="text-align:right"><strong><?php echo round($jumlah_semua/($nomor2-1),2); ?> </strong></td>
				<td style="text-align:right"><strong><?php //echo round($jumlah_semua/($nomor2-1),2); ?> </strong></td>
			</tr>
		<?php } ?>
	</table>
</div>
	<!-- <table class="table table-bordered table-striped"> -->

		<!-- <tr>

		<td colspan="2" align="right"><b>Halaman ke :</b>
		<?php
		for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		//echo " <a href='?page=Kuesioner-Mahasiswa&hal=$list[$h]'>$h</a> ";
	}
	?>	</td>
</tr> -->
<!-- <tr>

	<td colspan="2" align="right">

		<button type="submit" class="btn  btn-primary" name="btnSave" onclick="return confirm('Selesai menjawab semua soal? Anda tidak akan bisa mengulangi tes ini nanti')"/>Selesai</button></td>
	</tr>
</table> -->
</form>
