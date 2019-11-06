<?php // TODO: Memisah Kuesioner Sarana dan Prasarana, Dosen dan Mahasiswa ?>
<?php // TODO: Keuangan dibuat Dosen dan Mahasiswa ?>
<?php // TODO: Sarana Prasarana: Ruang Kuliah, Ruang Kantor, Ruang Perpustakaan, Sarana Praktikum, Sarana Ibadah, Kantin, Lahan Parkir, WC ?>
<?php // TODO: Sarana Prasarana: Cukup 29, Puas 60, Sangat Puas 11 ?>
<?php // TODO: Menambah Kuesioner Bagian LPMUTU ?>

<?php
session_start();
include_once "lib/connection.php";
include_once "lib/library.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Universitas Islam Kalimantan MAB Banjarmasin</title><meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="css/fullcalendar.css" />
	<link rel="stylesheet" href="css/maruti-style.css" />
	<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
</head>
<body>

	<!--Header-part-->
	<div id="header">
		<h1><a href="http://teknobara.co.id">TEKNOBARA</a></h1>
	</div>

	<!--top-Header-messaages-->
	<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
	<!--close-top-Header-messaages-->

	<!--top-Header-menu-->
	<div id="user-nav" class="navbar navbar-inverse">
		<ul class="nav">
			<!-- <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
			<li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a class="sAdd" title="" href="#">new message</a></li>
			<li><a class="sInbox" title="" href="#">inbox</a></li>
			<li><a class="sOutbox" title="" href="#">outbox</a></li>
			<li><a class="sTrash" title="" href="#">trash</a></li>
		</ul>
	</li>
	<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li> -->
	<li class=""><a title="" href="?page=Login"><i class="icon icon-share-alt"></i> <span class="text">Login</span></a></li>
</ul>
</div>
<!-- <div id="search">
<input type="text" placeholder="Search here..."/>
<button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-Header-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-signal"></i> Charts &amp; graphs</a>
	<ul>
		<li class="active"><a href="?page=Halaman-Utama"><i class="icon icon-home"></i> <span>Home</span></a> </li>
		<li ><a href="?page=Kuesioner-Main"><i class="icon icon-list"></i> <span>Kuesioner</span></a> </li>
		<li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>Grafik Kuesioner</span></a>
      <ul>
				<li><a href="?page=Kuesioner-List&Kode=15">Tata Pamong, Tata Kelola, dan Kerjasama</a></li>
        <li><a href="?page=Kuesioner-List&Kode=16">Mahasiswa</a></li>
        <li><a href="?page=Kuesioner-List&Kode=17">Sumber Daya Manusia</a></li>
        <li><a href="?page=Kuesioner-List&Kode=18">Keuangan, Sarana, dan Prasarana</a></li>
        <li><a href="?page=Kuesioner-List&Kode=19">Pendidikan</a></li>
        <li><a href="?page=Kuesioner-List&Kode=20">Penelitian</a></li>
        <li><a href="?page=Kuesioner-List&Kode=21">Pengabdian kepada Masyarakat</a></li>
        <li><a href="?page=Kuesioner-List&Kode=22">Luaran dan Capaian Tridharma</a></li>
		 </ul>
	 </li>
		<!-- <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
		<li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
		<li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
		<li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
		<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
			<ul>
				<li><a href="form-common.html">Basic Form</a></li>
				<li><a href="form-validation.html">Form with Validation</a></li>
				<li><a href="form-wizard.html">Form with Wizard</a></li>
			</ul>
		</li>
		<li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
		<li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
		<li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">4</span></a>
			<ul>
				<li><a href="index2.html">Dashboard2</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="calendar.html">Calendar</a></li>
				<li><a href="chat.html">Chat option</a></li>
			</ul>
		</li> -->
	</ul>
</div>




<?php include "cont/buka_file.php";?>



<?php include ("cont/footer.php") ?>
</body>

</html>
