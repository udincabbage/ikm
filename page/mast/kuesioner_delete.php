<?php
include_once "lib/seslogin.php";
include_once "page/lib/dtkuesioner.php";

if($_GET) {
	if(empty($_GET['Kode'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$mySql = "DELETE FROM ".$tableName." WHERE ".$field0."='".$_GET['Kode']."'";
		$myQry = mysqli_query($koneksidb,$mySql) or die ("Eror hapus data".mysql_error());
		$mySql = "DELETE FROM tjawaban_group WHERE id_kuesioner='".$_GET['Kode']."'";
		$myQry = mysqli_query($koneksidb,$mySql) or die ("Eror hapus anak data".mysql_error());
		if($myQry){
			echo "<meta http-equiv='refresh' content='0; url=?page=".$formName."-Data'>";
		}
	}
}
?>