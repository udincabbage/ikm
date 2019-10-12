<?php
session_start();
include_once "../../lib/connection.php";
include_once "../../lib/library.php";
include_once "../lib/dtaspek.php";
# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT $tableName.* FROM ".$tableName." ";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql="SELECT $tableName.* FROM ".$tableName." 
  where $field2 like '%$qcari%' or $field3 like '%$qcari%' or $field4 like '%$qcari%' or $field5 like '%$qcari%' ";
}
$pageQry = mysqli_query($koneksidb, $pageSql) or die ("error paging: ".mysql_error());
$jml	 = mysqli_num_rows($pageQry);
$max	 = ceil($jml/$row);


?>
<?php include('head.php');
?>

<table width="100%" class="table table-bordered table-striped">
  <tr>
    <th width="910"><h1><b>Laporan Data Aspek</b>  </h1></th>
     
  </tr>
  <tr>
    <td width="910"> </td>
     
  </tr>

</table>
  
	<table class="table table-bordered table-striped">
      <tr>
        <th width="30" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th width="820"><strong><?php echo $isian1; ?></strong></th>
       
      </tr>
		<?php
		$mySql = $pageSql." ORDER BY ".$field0." ASC LIMIT $hal, $row";
		$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah : ".mysql_error());
		$nomor  = 1; 
		while ($kolomData = mysqli_fetch_array($myQry)) {
			
			$Kode = $kolomData[$field0];
			// $sub2 = substr($kolomData[$field2],0,245);
			// if($kolomData[$field5]=='1'){$id5='Ya';}
			// elseif($kolomData[$field5]=='0'){$id5='Tidak';}
			// else{$id5='Unknown';}
		?>
      <tr>
        <td align="center"> <?php echo $nomor++; ?> </td>
        <td> <?php echo $kolomData[$field1]; ?> </td>
		
          </tr>
      <?php } ?>
    </table>
	
	
<?php include('footer.php');
?>