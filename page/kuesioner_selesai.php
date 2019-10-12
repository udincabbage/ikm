<?php
// $iduser = $_SESSION['SES_LOGIN'];
		// $cekSql="SELECT * FROM ttes WHERE id_user='$iduser'";
			// $cekQry=mysqli_query($koneksidb, $cekSql) or die ("Eror Query jawaban ".mysqli_error()); 
		// $dataQu = mysqli_fetch_array($cekQry);
		$Kode = isset($_GET['Kode']) ?  $_GET['Kode'] : 0; 
?>
					<h1>
						Kuesioner Online
					</h1>
					<div class="well blank-slate">
					
						<p><b>Terima Kasih</b>, anda telah berpartisipasi pada Kuesioner</p>
						
						<h3>				ANALISIS INDEKS KEPUASAN MASYARAKAT TERHADAP PELAYANAN PUBLIK PADA KELURAHAN GUNTUNG PAIKAT KOTA BANJARBARU	 </h3>
					<!--	
					<p><b><a href="page/laporan/jawabanresponden-pdf.php?respon=<?Php echo $Kode; ?>"><img src="img/btn_print.png" width="30"> &nbsp; Cetak data Hasil kuisoner</a></b></p>
					<p><b><a href="page/laporan/total-pdf.php"><img src="img/btn_print.png" width="30"> &nbsp; Cetak data Total Indeks Kepuasan Masyarakat </a></b></p>
						<?php
						// echo "<meta http-equiv='refresh' content='13; url=page/laporan/total-pdf.php'>";
						echo "<meta http-equiv='refresh' content='13; url=?page=Kuesioner-Laporan-Tahun'>";
						?>
						
						-->
					</div>
				