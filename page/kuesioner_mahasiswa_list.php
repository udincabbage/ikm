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
$pageSql = 'SELECT taspek.id_aspek, taspek.nama_aspek FROM tresponden_kuis
LEFT JOIN tkuis ON tresponden_kuis.id_kuis=tkuis.id_kuis
LEFT JOIN taspek ON tkuis.id_aspek = taspek.id_aspek
WHERE tresponden_kuis.responden="MAHASISWA"
GROUP by nama_aspek';

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


?>

<form id="new-project"  action="?page=Kuesioner-Mahasiswa" method="post" name="form1" target="_self">
	<table class="table table-bordered table-striped">
		<tr>
			<td colspan="2"><h1><b>Kuesioner Mahasiswa</b></h1></td>
		</tr>

		<table class="table table-bordered table-striped">

			<?php
			$mySql = $pageSql." ORDER BY nama_aspek ";
			$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah 1 : ".mysqli_error($koneksidb));
			$nomor  = 1;
		//	while ($kolomData = mysqli_fetch_array($myQry)) {

				$Kode = 16;
				$selectKuis = 'SELECT tkuis.id_kuis, tkuis.soal,
				tkuis.jawaban_a,tkuis.jawaban_b,tkuis.jawaban_c,tkuis.jawaban_d FROM tresponden_kuis
				LEFT JOIN tkuis ON tresponden_kuis.id_kuis=tkuis.id_kuis
				LEFT JOIN taspek ON tkuis.id_aspek = taspek.id_aspek
				WHERE tresponden_kuis.responden="MAHASISWA" and tkuis.id_aspek='.$Kode;
				$queryKuis = mysqli_query($koneksidb, $selectKuis)  or die ("Query salah 2 : ".mysqli_error($koneksidb));


				?>
				<tr>

					<td width="3%" rowspan="2"><h4> <?php echo numberToRomanRepresentation($nomor++); ?>. </h4></td>
					<td width="97%" align="left" colspan="8"><h4> Mahasiswa &nbsp; </h4></td>

				</tr>
				<tr>
					<td colspan="12"><strong>&nbsp; </strong></td>
				</tr>
				<?php
				$nomor2=1;
				while ($kolomData2 = mysqli_fetch_array($queryKuis)) {
					$Kode1 = $kolomData2['id_kuis'];
					?>
				<tr>
					<td><strong> <?php echo $nomor2 ?> </strong></td>
					<td><strong> <?php echo $kolomData2[$field2]; ?> </strong></td>
					<td colspan="8"><a href="?page=Kuesioner-Grafik-Pie&Kode=<?php echo $Kode1; ?>&tahun=201802" target="_self"><i class="icon-adjust"></i></a></td>
				</tr>
				<?php $nomor2++;} ?>

				<!-- <tr>
				<td colspan="2"><strong><button type="submit"  name="btnSaveTemp" class="btn btn-primary">Simpan</button> &nbsp; <button type="reset" class="btn " name="reset" id="reset" onclick="return confirm('Reset data yang telah anda ketik?')"/>Reset</button></strong></td>
			</tr> -->
			<tr>
				<td colspan="12"><strong>&nbsp; </strong></td>
			</tr>
		<?php //} ?>
	</table>
	<table class="table table-bordered table-striped">

		<!-- <tr>

		<td colspan="2" align="right"><b>Halaman ke :</b>
		<?php
		for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=Kuesioner-Mahasiswa&hal=$list[$h]'>$h</a> ";
	}
	?>	</td>
</tr> -->
<tr>

	<td colspan="2" align="right">

		<button type="submit" class="btn  btn-primary" name="btnSave" onclick="return confirm('Selesai menjawab semua soal? Anda tidak akan bisa mengulangi tes ini nanti')"/>Selesai</button></td>
	</tr>
</table>
</form>
