<h1>Beranda</h1>
<?php
	if(isset($_SESSION['SES_MAN'])) {?>
	
	<div class="hero-unit"><legend>ADMINISTRATOR </legend>
	<p> Selamat datang di APLIKASI ANALISIS INDEKS KEPUASAN MASYARAKAT TERHADAP PELAYANAN PUBLIK PADA KELURAHAN GUNTUNG PAIKAT KOTA BANJARBARU, silakan gunakan menu navigasi untuk mencari/merubah informasi lebih lanjut. Anda telah login sebagai Administrator.</p>
	<?php }
	else if (isset($_SESSION['SES_TU'])) {?>
	<div class="hero-unit">
	
	<legend>SALES </legend>
	<p> Selamat datang di APLIKASI ANALISIS INDEKS KEPUASAN MASYARAKAT TERHADAP PELAYANAN PUBLIK PADA KELURAHAN GUNTUNG PAIKAT KOTA BANJARBARU, silakan gunakan menu navigasi untuk mencari informasi lebih lanjut. Anda telah login sebagai Sales.</p>
	<?php }
	else if (isset($_SESSION['SES_PRO'])) {?>
	<div class="hero-unit">
	<legend>MANAJER </legend>
	<p> Selamat datang di website kami, silakan gunakan menu navigasi untuk mencari informasi lebih lanjut. Anda telah login sebagai Manager.</p>
	<?php }
	else  {?>
	<div class="hero-unit">
	<legend>USER </legend>
	<p> Selamat datang di website kami, silakan gunakan menu navigasi untuk mencari informasi lebih lanjut. Anda juga bisa menggunakan login untuk memproses lebih lanjut informasi ataupun melakukan perubahan data dalam Sistem Informasi ini</p>
	<?php }?>
</div>
			