<?php
include_once "lib/seslogin.php";
include_once "page/lib/dtpesan.php";

if($_GET) {
	if(empty($_GET['Kode'])){
		echo "<b>Data yang dirubah tidak ada</b>";
	}
	else {
		$mySql	= "UPDATE ".$tableName." SET ".$field5."='1' WHERE ".$field0."='".$_GET['Kode']."'";
		// $mySql = "DELETE FROM ".$tableName." WHERE ".$field0."='".$_GET['Kode']."'";
		$myQry = mysqli_query($koneksidb,$mySql) or die ("Eror hapus data".mysql_error());
		if($myQry){
			echo "<meta http-equiv='refresh' content='0; url=?page=".$formName."-Data'>";
		}
	}
}
?>