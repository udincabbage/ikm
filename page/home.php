<div id="content">
	<div id="content-header">
		<div id="breadcrumb">
			<a href="#" title="Go to Home" class="tip-bottom">
				<i class="icon-home"></i> Home
			</a>
		</div>
		<h1>Beranda</h1>
	</div>
	<?php
	if(isset($_SESSION['SES_MAN'])) {?>

		<div class="hero-unit"><legend>ADMINISTRATOR </legend>
			<p> Selamat datang di APLIKASI ANALISIS KEPUASAN LAYANAN pada Universitas Islam Kalimantan Muhammad Arsyad Al Banjari Banjarmasin, silakan gunakan menu navigasi untuk mencari/merubah informasi lebih lanjut</p>
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
			</div>
