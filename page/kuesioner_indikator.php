<?php

// $rerata_kepuasan = array(86,81,79,77,81);
$rerata_kepuasan = array();
$rerata_kepuasan_responden = array();
$kriteria = array();
// $responden = array();
$pertanyaan = array();


if($_GET) {
	$responden=$_GET['r'];
	$id=$_GET['id'];
	$kode=$_GET['kode'];
	switch ($kode) {
		case 1:
		$aspek = "Tata Pamong, Tata Kelola, dan Kerjasama";
		$kriteria[0] = "2018/2019 Genap";
		//1.	Transparans (transparansi)
		$pertanyaan[0] = "Uniska MAB mampu menyajikan informasi penyelenggaraan kegiatan secara terbuka, cepat dan tepat.";
		if($responden=="Mahasiswa"){
			$stp[0]=0;
			$tp[0]=0;
			$p[0]=2659;
			$sp[0]=1549;
		}else if($responden=="Dosen"){
			$stp[0]=0;
			$tp[0]=8;
			$p[0]=240;
			$sp[0]=158;
		}else{
			$stp[0]=0;
			$tp[0]=0;
			$p[0]=84;
			$sp[0]=22;
		}

		//2.	Akuntabilitas (Independensi)
		$pertanyaan[1] = "Uniska MAB mampu memberikan pelayanan yang memuaskan bagi mahasiswa";
		if($responden=="Mahasiswa"){
			$stp[1]=0;
			$tp[1]=0;
			$p[1]=2451;
			$sp[1]=1757;
		}else if($responden=="Dosen"){
			$stp[1]=0;
			$tp[1]=0;
			$p[1]=251;
			$sp[1]=155;
		}else{
			$stp[1]=0;
			$tp[1]=0;
			$p[1]=85;
			$sp[1]=21;
		}
		$pertanyaan[2] = "Uniska MAB mempu mempertanggung jawabkan setiap kebijakan yang diambil secara proposional";
		if($responden=="Mahasiswa"){
			$stp[2]=0;
			$tp[2]=0;
			$p[2]=3842;
			$sp[2]=366;
		}else if($responden=="Dosen"){
			$stp[2]=0;
			$tp[2]=8;
			$p[2]=238;
			$sp[2]=160;
		}else{
			$stp[2]=0;
			$tp[2]=0;
			$p[2]=71;
			$sp[2]=35;
		}
		//3.	Responsibility (Responsibilitas)
		$pertanyaan[3] = "Civitas akademika dapat membangun suasana akademik yang kondusif dalam proses pembelajaran";
		if($responden=="Mahasiswa"){
			$stp[3]=0;
			$tp[3]=0;
			$p[3]=3345;
			$sp[3]=863;
		}else if($responden=="Dosen"){
			$stp[3]=0;
			$tp[3]=3;
			$p[3]=242;
			$sp[3]=161;
		}else{
			$stp[3]=0;
			$tp[3]=0;
			$p[3]=66;
			$sp[3]=40;
		}
		$pertanyaan[4] = "Uniska MAB sangat responsif dalam melayani mahasiswa";
		if($responden=="Mahasiswa"){
			$stp[4]=0;
			$tp[4]=0;
			$p[4]=2301;
			$sp[4]=1907;
		}else if($responden=="Dosen"){
			$stp[4]=0;
			$tp[4]=3;
			$p[4]=240;
			$sp[4]=163;
		}else{
			$stp[4]=0;
			$tp[4]=0;
			$p[4]=67;
			$sp[4]=39;
		}
		$pertanyaan[5] = "Walisongo mempunyai uraian tugas dan tanggung jawab jelas dari setiap pejabat struktural.";
		if($responden=="Mahasiswa"){
			$stp[5]=0;
			$tp[5]=0;
			$p[5]=3474;
			$sp[5]=734;
		}else if($responden=="Dosen"){
			$stp[5]=0;
			$tp[5]=0;
			$p[5]=226;
			$sp[5]=180;
		}else{
			$stp[5]=0;
			$tp[5]=0;
			$p[5]=61;
			$sp[5]=45;
		}
		//4.	Indenpendence (Indepedensi)
		$pertanyaan[6] = "Pengelola Uniska MAB dalam melaksanakan peran dan tanggung jawabnya terhindar dari pihak manapun";
		if($responden=="Mahasiswa"){
			$stp[6]=0;
			$tp[6]=0;
			$p[6]=3122;
			$sp[6]=1086;
		}else if($responden=="Dosen"){
			$stp[6]=0;
			$tp[6]=0;
			$p[6]=251;
			$sp[6]=155;
		}else{
			$stp[6]=0;
			$tp[6]=0;
			$p[6]=64;
			$sp[6]=42;
		}
		$pertanyaan[7] = "Dalam melaksanakan tugas dan fungsinya, pegawai tidak saling melempar tanggung jawab satu sama lain";
		if($responden=="Mahasiswa"){
			$stp[7]=0;
			$tp[7]=0;
			$p[7]=3152;
			$sp[7]=1056;
		}else if($responden=="Dosen"){
			$stp[7]=0;
			$tp[7]=0;
			$p[7]=216;
			$sp[7]=190;
		}else{
			$stp[7]=0;
			$tp[7]=0;
			$p[7]=77;
			$sp[7]=29;
		}
		$pertanyaan[8] = "Uniska MAB dikelola secara profesional tanpa benturan kepentingan dan pengaruh tekenan dari pihak manapun";
		if($responden=="Mahasiswa"){
			$stp[8]=0;
			$tp[8]=0;
			$p[8]=3342;
			$sp[8]=866;
		}else if($responden=="Dosen"){
			$stp[8]=0;
			$tp[8]=0;
			$p[8]=232;
			$sp[8]=174;
		}else{
			$stp[8]=0;
			$tp[8]=0;
			$p[8]=61;
			$sp[8]=45;
		}
		//5.	Fairness (kesetaraan dan Kewajaran)
		$pertanyaan[9] = "Uniska MAB memberikan perlakuan yang setara kepad pihak yang berkepentingan sesuai dengan manfaat dan kontribusi yang diberikan kepada Universitas.";
		if($responden=="Mahasiswa"){
			$stp[9]=0;
			$tp[9]=0;
			$p[9]=3107;
			$sp[9]=1101;
		}else if($responden=="Dosen"){
			$stp[9]=0;
			$tp[9]=10;
			$p[9]=246;
			$sp[9]=150;
		}else{
			$stp[9]=0;
			$tp[9]=0;
			$p[9]=64;
			$sp[9]=42;
		}
		$pertanyaan[10] = "Uniska MAB memberikan kesempatan yang sama dalam penerimaan karyawan, mahasiswa berkarir dan melaksanakan tugasnya secara profesional tanpa adanya diskriminasi";
		if($responden=="Mahasiswa"){
			$stp[10]=0;
			$tp[10]=0;
			$p[10]=3501;
			$sp[10]=707;
		}else if($responden=="Dosen"){
			$stp[10]=0;
			$tp[10]=0;
			$p[10]=250;
			$sp[10]=156;
		}else{
			$stp[10]=0;
			$tp[10]=0;
			$p[10]=76;
			$sp[10]=30;
		}

		break;
		case 2:
		$aspek = "Kemahasiswaan";
		$kriteria[0] = "2018/2019 Genap";
		$pertanyaan[0] = "Mahasiswa mendapatkan layanan pada saat registrasi mahasiswa baru";
		$pertanyaan[1] = "Mahasiswa mendapatkan layanan Kepenasehatan Akademik";
		$pertanyaan[2] = "Mahasiswa mendapatkan layanan pelaksanaan perkuliahan";
		$pertanyaan[3] = "Mahasiswa mendapatan pendidikan karakter";
		$pertanyaan[4] = "Mahasiswa mendapatkan pendidikan tentang anti korupsi";
		$pertanyaan[5] = "Mahasiswa mendapatkan pendidikan NAPZA";
		$pertanyaan[6] = "Kurikulum yang diajarkan sesuai dengan perkembangan ilmu pengetahuan dan teknologi";
		$pertanyaan[7] = "Kejelasan materi perkuliahan yang diberikan dosen";
		$pertanyaan[8] = "Waktu dipergunakan secara efektif oleh dosen dalam proses pembelajaran";
		$pertanyaan[9] = "Dosen memberikan tugas sesuai dengan capaian pembelajaran";
		$pertanyaan[10] = "Mahasiswa mendapatkan layanan Pelaksanaan UTS";
		$pertanyaan[11] = "Mahasiswa mendapatkan layanan Praktikum";
		$pertanyaan[12] = "Mahasiswa mendapatkan layanan pembimbingan magang/PL";
		$pertanyaan[13] = "Mahasiswa dilibatkan dalam penelitian atau PkM dosen";
		$pertanyaan[14] = "Mahasiswa mendapatkan layanan pembimbingan Skripsi/Tesis";
		$pertanyaan[15] = "Dosen memasukkan hasil penelitiannya dalam pembelajaran";
		$pertanyaan[16] = "Mahasiswa mendapatkan layanan pengembangan suasana akademik.";

		$stp[0]=0;$tp[0]=0;$p[0]=2128;$sp[0]=2080;
		$stp[1]=0;$tp[1]=0;$p[1]=2319;$sp[1]=1889;
		$stp[2]=0;$tp[2]=0;$p[2]=2035;$sp[2]=2173;
		$stp[3]=0;$tp[3]=0;$p[3]=2077;$sp[3]=2131;
		$stp[4]=0;$tp[4]=0;$p[4]=2078;$sp[4]=2130;
		$stp[5]=0;$tp[5]=0;$p[5]=2105;$sp[5]=2103;
		$stp[6]=0;$tp[6]=0;$p[6]=2068;$sp[6]=2140;
		$stp[7]=0;$tp[7]=0;$p[7]=2172;$sp[7]=2036;
		$stp[8]=0;$tp[8]=0;$p[8]=2186;$sp[8]=2022;
		$stp[9]=0;$tp[9]=0;$p[9]=2232;$sp[9]=1976;
		$stp[10]=0;$tp[10]=0;$p[10]=2278;$sp[10]=1930;
		$stp[11]=0;$tp[11]=0;$p[11]=2249;$sp[11]=1959;
		$stp[12]=0;$tp[12]=0;$p[12]=2330;$sp[12]=1878;
		$stp[13]=0;$tp[13]=0;$p[13]=2168;$sp[13]=2040;
		$stp[14]=0;$tp[14]=0;$p[14]=2090;$sp[14]=2118;
		$stp[15]=0;$tp[15]=0;$p[15]=2373;$sp[15]=1835;
		$stp[16]=0;$tp[16]=0;$p[16]=2210;$sp[16]=1998;


		break;
		case 3:
		$aspek = "Sumber Daya Manusia";
		$kriteria[0] = "2018/2019 Genap";
		if($responden=="Dosen"){
			$pertanyaan[0] = "Kepuasan terhadap pengembangan karir";
			$pertanyaan[1] = "Kepuasan bekerja sesuai dengan tugas dan fungsi";
			$pertanyaan[2] = "Beban kerja";
			$pertanyaan[3] = "Arahan pimpinan";
			$pertanyaan[4] = "Keteladanan pimpinan";
			$pertanyaan[5] = "Sinkronisasi kebijakan pimpinan";
			$pertanyaan[6] = "Konsistensi penegakan aturan";
			$pertanyaan[7] = "Suasana kerja";
			$pertanyaan[8] = "Penghasilan";
			$pertanyaan[9] = "Penghargaan Prestasi";
			$pertanyaan[10] = "Keamanan Tempat Kerja";
			$pertanyaan[11] = "Jaminan Sosial";

			$stp[0]=0;$tp[0]=0;$p[0]=287;$sp[0]=119;
			$stp[1]=0;$tp[1]=0;$p[1]=310;$sp[1]=96;
			$stp[2]=0;$tp[2]=0;$p[2]=193;$sp[2]=213;
			$stp[3]=0;$tp[3]=0;$p[3]=191;$sp[3]=215;
			$stp[4]=0;$tp[4]=0;$p[4]=208;$sp[4]=198;
			$stp[5]=0;$tp[5]=0;$p[5]=235;$sp[5]=171;
			$stp[6]=0;$tp[6]=0;$p[6]=209;$sp[6]=197;
			$stp[7]=0;$tp[7]=0;$p[7]=191;$sp[7]=215;
			$stp[8]=0;$tp[8]=0;$p[8]=252;$sp[8]=154;
			$stp[9]=0;$tp[9]=0;$p[9]=190;$sp[9]=216;
			$stp[10]=0;$tp[10]=0;$p[10]=191;$sp[10]=215;
			$stp[11]=0;$tp[11]=0;$p[11]=193;$sp[11]=213;
		}else if($responden=="Tenaga Kependidikan"){
				$pertanyaan[0] = "Kepuasan terhadap pengembangan karir";
				$pertanyaan[1] = "Kepuasan bekerja sesuai dengan tugas dan fungsi";
				$pertanyaan[2] = "Beban kerja";
				$pertanyaan[3] = "Arahan pimpinan";
				$pertanyaan[4] = "Keteladanan pimpinan";
				$pertanyaan[5] = "Sinkronisasi kebijakan pimpinan";
				$pertanyaan[6] = "Konsistensi penegakan aturan";
				$pertanyaan[7] = "Suasana kerja";
				$pertanyaan[8] = "Penghasilan";
				$pertanyaan[9] = "Penghargaan Prestasi";
				$pertanyaan[10] = "Keamanan Tempat Kerja";
				$pertanyaan[11] = "Jaminan Sosial";

				$stp[0]=0;$tp[0]=0;$p[0]=76;$sp[0]=30;
				$stp[1]=0;$tp[1]=0;$p[1]=82;$sp[1]=24;
				$stp[2]=0;$tp[2]=0;$p[2]=50;$sp[2]=56;
				$stp[3]=0;$tp[3]=0;$p[3]=49;$sp[3]=57;
				$stp[4]=0;$tp[4]=0;$p[4]=53;$sp[4]=53;
				$stp[5]=0;$tp[5]=0;$p[5]=61;$sp[5]=45;
				$stp[6]=0;$tp[6]=0;$p[6]=54;$sp[6]=52;
				$stp[7]=0;$tp[7]=0;$p[7]=49;$sp[7]=57;
				$stp[8]=0;$tp[8]=0;$p[8]=66;$sp[8]=40;
				$stp[9]=0;$tp[9]=0;$p[9]=50;$sp[9]=56;
				$stp[10]=0;$tp[10]=0;$p[10]=49;$sp[10]=57;
				$stp[11]=0;$tp[11]=0;$p[11]=50;$sp[11]=56;
		}
		break;
		case 4:
		$aspek = "Keuangan";
		$kriteria[0] = "2018/2019 Genap";
		if($responden=="Dosen"){
			$pertanyaan[0] = "Prosedur pelayanan di Biro Keuangan tidak berbelit-belit ";
			$pertanyaan[1] = "Proses pelayanan di Biro Keuangan cepat dan tepat ";
			$pertanyaan[2] = "Kegiatan administrasi rapi dan teratur ";
			$pertanyaan[3] = "Staf Biro Keuangan memberikan pelayanan yang memuaskan sesuai dengan kebutuhan anda ";
			$pertanyaan[4] = "Staf Biro Keuangan menunjukkan disiplin kerja yang tinggi ";
			$pertanyaan[5] = "Staf Biro Keuangan memberi tanggapan yang cepat dan baik terhadap keluhan anda ";
			$pertanyaan[6] = "Prosedur penyampaian informasi jelas dan mudah dimengerti ";
			$pertanyaan[7] = "Staf Biro Keuangan selalu ada sesuai jadwal ";
			$pertanyaan[8] = "Staf Biro Keuangan memiliki kemampuan, pengetahuan, dan kecakapan yang tinggi dalam menjalankan tugasnya ";
			$pertanyaan[9] = "Biro Keuangan memberikan kemudahan dalam akses pelayanan administrasi keuangan ";
			$pertanyaan[10] = "Biro Keuangan tidak membiarkan pengguna layanan menunggu terlalu lama";
			$pertanyaan[11] = "Staf Biro Keuangan bertugas sepenuh hati dalam memberikan pelayanan ";
			$pertanyaan[12] = "Komunikasi Staf Biro Keuangan dengan pengguna layanan berjalan dengan baik dan lancar ";
			$pertanyaan[13] = "Staf Biro Keuangan memberikan perlakuan yang adil kepada setiap pengguna layanan ";
			$pertanyaan[14] = "Ruang pelayanan dan ruang tunggu Biro Keuangan sudah nyaman ";
			$pertanyaan[15] = "Staf Biro Keuangan berpenampilan rapi, sopan sesuai dengan situasi dan kondisi  ";
			$pertanyaan[16] = "Kantor Biro Keuangan tertata rapi dan bersih";
			$pertanyaan[17] = "Informasi yang diberikan Biro Keuangan dapat diandalkan ";
			$pertanyaan[18] = "Sistem Informasi yang ada di Biro Keuangan bekerja dengan handal  ";

			$stp[0]=0;$tp[0]=0;$p[0]=2659;$sp[0]=1549;
			$stp[1]=0;$tp[1]=0;$p[1]=2249;$sp[1]=1959;
			$stp[2]=0;$tp[2]=0;$p[2]=2104;$sp[2]=2104;
			$stp[3]=0;$tp[3]=0;$p[3]=2090;$sp[3]=2118;
			$stp[4]=0;$tp[4]=0;$p[4]=2128;$sp[4]=2080;
			$stp[5]=0;$tp[5]=0;$p[5]=2232;$sp[5]=1976;
			$stp[6]=0;$tp[6]=0;$p[6]=2078;$sp[6]=2130;
			$stp[7]=0;$tp[7]=0;$p[7]=2207;$sp[7]=2001;
			$stp[8]=0;$tp[8]=0;$p[8]=2099;$sp[8]=2109;
			$stp[9]=0;$tp[9]=0;$p[9]=3108;$sp[9]=1100;
			$stp[10]=0;$tp[10]=0;$p[10]=3037;$sp[10]=1171;
			$stp[11]=0;$tp[11]=0;$p[11]=3008;$sp[11]=1200;
			$stp[12]=0;$tp[12]=0;$p[12]=2808;$sp[12]=1400;
			$stp[13]=0;$tp[13]=0;$p[13]=3122;$sp[13]=1086;
			$stp[14]=0;$tp[14]=0;$p[14]=2985;$sp[14]=1223;
			$stp[15]=0;$tp[15]=0;$p[15]=2963;$sp[15]=1245;
			$stp[16]=0;$tp[16]=0;$p[16]=2787;$sp[16]=1421;
			$stp[17]=0;$tp[17]=0;$p[17]=2132;$sp[17]=2076;
			$stp[18]=0;$tp[18]=0;$p[18]=2656;$sp[18]=1554;
		}else if($responden=="Tenaga Kependidikan"){
			$pertanyaan[0] = "Prosedur pelayanan di Biro Keuangan tidak berbelit-belit ";
			$pertanyaan[1] = "Proses pelayanan di Biro Keuangan cepat dan tepat ";
			$pertanyaan[2] = "Kegiatan administrasi rapi dan teratur ";
			$pertanyaan[3] = "Staf Biro Keuangan memberikan pelayanan yang memuaskan sesuai dengan kebutuhan anda ";
			$pertanyaan[4] = "Staf Biro Keuangan menunjukkan disiplin kerja yang tinggi ";
			$pertanyaan[5] = "Staf Biro Keuangan memberi tanggapan yang cepat dan baik terhadap keluhan anda ";
			$pertanyaan[6] = "Prosedur penyampaian informasi jelas dan mudah dimengerti ";
			$pertanyaan[7] = "Staf Biro Keuangan selalu ada sesuai jadwal ";
			$pertanyaan[8] = "Staf Biro Keuangan memiliki kemampuan, pengetahuan, dan kecakapan yang tinggi dalam menjalankan tugasnya ";
			$pertanyaan[9] = "Biro Keuangan memberikan kemudahan dalam akses pelayanan administrasi keuangan ";
			$pertanyaan[10] = "Biro Keuangan tidak membiarkan pengguna layanan menunggu terlalu lama";
			$pertanyaan[11] = "Staf Biro Keuangan bertugas sepenuh hati dalam memberikan pelayanan ";
			$pertanyaan[12] = "Komunikasi Staf Biro Keuangan dengan pengguna layanan berjalan dengan baik dan lancar ";
			$pertanyaan[13] = "Staf Biro Keuangan memberikan perlakuan yang adil kepada setiap pengguna layanan ";
			$pertanyaan[14] = "Ruang pelayanan dan ruang tunggu Biro Keuangan sudah nyaman ";
			$pertanyaan[15] = "Staf Biro Keuangan berpenampilan rapi, sopan sesuai dengan situasi dan kondisi  ";
			$pertanyaan[16] = "Kantor Biro Keuangan tertata rapi dan bersih";
			$pertanyaan[17] = "Informasi yang diberikan Biro Keuangan dapat diandalkan ";
			$pertanyaan[18] = "Sistem Informasi yang ada di Biro Keuangan bekerja dengan handal  ";

			$stp[0]=0;$tp[0]=0;$p[0]=2659;$sp[0]=1549;
			$stp[1]=0;$tp[1]=0;$p[1]=2249;$sp[1]=1959;
			$stp[2]=0;$tp[2]=0;$p[2]=2104;$sp[2]=2104;
			$stp[3]=0;$tp[3]=0;$p[3]=2090;$sp[3]=2118;
			$stp[4]=0;$tp[4]=0;$p[4]=2128;$sp[4]=2080;
			$stp[5]=0;$tp[5]=0;$p[5]=2232;$sp[5]=1976;
			$stp[6]=0;$tp[6]=0;$p[6]=2078;$sp[6]=2130;
			$stp[7]=0;$tp[7]=0;$p[7]=2207;$sp[7]=2001;
			$stp[8]=0;$tp[8]=0;$p[8]=2099;$sp[8]=2109;
			$stp[9]=0;$tp[9]=0;$p[9]=3108;$sp[9]=1100;
			$stp[10]=0;$tp[10]=0;$p[10]=3037;$sp[10]=1171;
			$stp[11]=0;$tp[11]=0;$p[11]=3008;$sp[11]=1200;
			$stp[12]=0;$tp[12]=0;$p[12]=2808;$sp[12]=1400;
			$stp[13]=0;$tp[13]=0;$p[13]=3122;$sp[13]=1086;
			$stp[14]=0;$tp[14]=0;$p[14]=2985;$sp[14]=1223;
			$stp[15]=0;$tp[15]=0;$p[15]=2963;$sp[15]=1245;
			$stp[16]=0;$tp[16]=0;$p[16]=2787;$sp[16]=1421;
			$stp[17]=0;$tp[17]=0;$p[17]=2132;$sp[17]=2076;
			$stp[18]=0;$tp[18]=0;$p[18]=2656;$sp[18]=1554;
		}else if($responden=="Mahasiswa"){
				$pertanyaan[0] = "Prosedur pelayanan di Biro Keuangan tidak berbelit-belit ";
				$pertanyaan[1] = "Proses pelayanan di Biro Keuangan cepat dan tepat ";
				$pertanyaan[2] = "Kegiatan administrasi rapi dan teratur ";
				$pertanyaan[3] = "Staf Biro Keuangan memberikan pelayanan yang memuaskan sesuai dengan kebutuhan anda ";
				$pertanyaan[4] = "Staf Biro Keuangan menunjukkan disiplin kerja yang tinggi ";
				$pertanyaan[5] = "Staf Biro Keuangan memberi tanggapan yang cepat dan baik terhadap keluhan anda ";
				$pertanyaan[6] = "Prosedur penyampaian informasi jelas dan mudah dimengerti ";
				$pertanyaan[7] = "Staf Biro Keuangan selalu ada sesuai jadwal ";
				$pertanyaan[8] = "Staf Biro Keuangan memiliki kemampuan, pengetahuan, dan kecakapan yang tinggi dalam menjalankan tugasnya ";
				$pertanyaan[9] = "Biro Keuangan memberikan kemudahan dalam akses pelayanan administrasi keuangan ";
				$pertanyaan[10] = "Biro Keuangan tidak membiarkan pengguna layanan menunggu terlalu lama";
				$pertanyaan[11] = "Staf Biro Keuangan bertugas sepenuh hati dalam memberikan pelayanan ";
				$pertanyaan[12] = "Komunikasi Staf Biro Keuangan dengan pengguna layanan berjalan dengan baik dan lancar ";
				$pertanyaan[13] = "Staf Biro Keuangan memberikan perlakuan yang adil kepada setiap pengguna layanan ";
				$pertanyaan[14] = "Ruang pelayanan dan ruang tunggu Biro Keuangan sudah nyaman ";
				$pertanyaan[15] = "Staf Biro Keuangan berpenampilan rapi, sopan sesuai dengan situasi dan kondisi  ";
				$pertanyaan[16] = "Kantor Biro Keuangan tertata rapi dan bersih";
				$pertanyaan[17] = "Informasi yang diberikan Biro Keuangan dapat diandalkan ";
				$pertanyaan[18] = "Sistem Informasi yang ada di Biro Keuangan bekerja dengan handal  ";

				$stp[0]=0;$tp[0]=0;$p[0]=2659;$sp[0]=1549;
				$stp[1]=0;$tp[1]=0;$p[1]=2249;$sp[1]=1959;
				$stp[2]=0;$tp[2]=0;$p[2]=2104;$sp[2]=2104;
				$stp[3]=0;$tp[3]=0;$p[3]=2090;$sp[3]=2118;
				$stp[4]=0;$tp[4]=0;$p[4]=2128;$sp[4]=2080;
				$stp[5]=0;$tp[5]=0;$p[5]=2232;$sp[5]=1976;
				$stp[6]=0;$tp[6]=0;$p[6]=2078;$sp[6]=2130;
				$stp[7]=0;$tp[7]=0;$p[7]=2207;$sp[7]=2001;
				$stp[8]=0;$tp[8]=0;$p[8]=2099;$sp[8]=2109;
				$stp[9]=0;$tp[9]=0;$p[9]=3108;$sp[9]=1100;
				$stp[10]=0;$tp[10]=0;$p[10]=3037;$sp[10]=1171;
				$stp[11]=0;$tp[11]=0;$p[11]=3008;$sp[11]=1200;
				$stp[12]=0;$tp[12]=0;$p[12]=2808;$sp[12]=1400;
				$stp[13]=0;$tp[13]=0;$p[13]=3122;$sp[13]=1086;
				$stp[14]=0;$tp[14]=0;$p[14]=2985;$sp[14]=1223;
				$stp[15]=0;$tp[15]=0;$p[15]=2963;$sp[15]=1245;
				$stp[16]=0;$tp[16]=0;$p[16]=2787;$sp[16]=1421;
				$stp[17]=0;$tp[17]=0;$p[17]=2132;$sp[17]=2076;
				$stp[18]=0;$tp[18]=0;$p[18]=2656;$sp[18]=1554;
		}

		break;
		case 5:
		$aspek = "Sarana dan Prasarana";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 61;

		if($responden=="Dosen"){
			$pertanyaan[0] = "Ruang Kuliah";
			$pertanyaan[1] = "Ruang Kantor";
			$pertanyaan[2] = "Ruang Perpustakaan";
			$pertanyaan[3] = "Sarana Praktikum";
			$pertanyaan[4] = "Sarana Ibadah";
			$pertanyaan[5] = "Kantin";
			$pertanyaan[6] = "Lahan Parkir";
			$pertanyaan[7] = "WC";


			$stp[0]=0;$tp[0]=0;$p[0]=2659;$sp[0]=1549;
			$stp[1]=0;$tp[1]=0;$p[1]=2249;$sp[1]=1959;
			$stp[2]=0;$tp[2]=0;$p[2]=2104;$sp[2]=2104;
			$stp[3]=0;$tp[3]=0;$p[3]=2090;$sp[3]=2118;
			$stp[4]=0;$tp[4]=0;$p[4]=2128;$sp[4]=2080;
			$stp[5]=0;$tp[5]=0;$p[5]=2232;$sp[5]=1976;
			$stp[6]=0;$tp[6]=0;$p[6]=2078;$sp[6]=2130;
			$stp[7]=0;$tp[7]=0;$p[7]=2207;$sp[7]=2001;
		}else if($responden=="Tenaga Kependidikan"){
			$pertanyaan[0] = "Ruang Kuliah";
			$pertanyaan[1] = "Ruang Kantor";
			$pertanyaan[2] = "Ruang Perpustakaan";
			$pertanyaan[3] = "Sarana Praktikum";
			$pertanyaan[4] = "Sarana Ibadah";
			$pertanyaan[5] = "Kantin";
			$pertanyaan[6] = "Lahan Parkir";
			$pertanyaan[7] = "WC";


			$stp[0]=0;$tp[0]=0;$p[0]=2659;$sp[0]=1549;
			$stp[1]=0;$tp[1]=0;$p[1]=2249;$sp[1]=1959;
			$stp[2]=0;$tp[2]=0;$p[2]=2104;$sp[2]=2104;
			$stp[3]=0;$tp[3]=0;$p[3]=2090;$sp[3]=2118;
			$stp[4]=0;$tp[4]=0;$p[4]=2128;$sp[4]=2080;
			$stp[5]=0;$tp[5]=0;$p[5]=2232;$sp[5]=1976;
			$stp[6]=0;$tp[6]=0;$p[6]=2078;$sp[6]=2130;
			$stp[7]=0;$tp[7]=0;$p[7]=2207;$sp[7]=2001;
		}else if($responden=="Mahasiswa"){
				$pertanyaan[0] = "Ruang Kuliah";
				$pertanyaan[1] = "Ruang Kantor";
				$pertanyaan[2] = "Ruang Perpustakaan";
				$pertanyaan[3] = "Sarana Praktikum";
				$pertanyaan[4] = "Sarana Ibadah";
				$pertanyaan[5] = "Kantin";
				$pertanyaan[6] = "Lahan Parkir";
				$pertanyaan[7] = "WC";


				$stp[0]=0;$tp[0]=0;$p[0]=2659;$sp[0]=1549;
				$stp[1]=0;$tp[1]=0;$p[1]=2249;$sp[1]=1959;
				$stp[2]=0;$tp[2]=0;$p[2]=2104;$sp[2]=2104;
				$stp[3]=0;$tp[3]=0;$p[3]=2090;$sp[3]=2118;
				$stp[4]=0;$tp[4]=0;$p[4]=2128;$sp[4]=2080;
				$stp[5]=0;$tp[5]=0;$p[5]=2232;$sp[5]=1976;
				$stp[6]=0;$tp[6]=0;$p[6]=2078;$sp[6]=2130;
				$stp[7]=0;$tp[7]=0;$p[7]=2207;$sp[7]=2001;
		}
		break;
		case 6:
		$aspek = "Pendidikan";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 84;
		break;
		case 7:
		$aspek = "Penelitian";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 83;
		break;
		case 8:
		$aspek = "pengabdian kepada Masyarakat";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 82;
		break;
		case 9:
		$aspek = "Lembaga Penjaminan Mutu";
		$kriteria[0] = "2018/2019 Genap";
		$rerata_kepuasan[0] = 87;
		break;
		default:
		echo "KOSONG";
	}

	?>

	<div id="content">
		<div id="content-header">
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom">
					<i class="icon-home"></i> Home
				</a>
				<a href="?page=Kuesioner-Main">
					Table Kepuasan Layanan
				</a>
				<a href="?page=Kuesioner-Tahun&id=<?php echo $kode;?>">
					Per Tahun
				</a>
				<a href="?page=Kuesioner-Responden&kode=<?php echo $kode;?>&id=<?php echo $id;?>">
					Responden
				</a>
				<a href="#" class="current">
					Indikator
				</a>
			</div>
			<h1><?php echo $aspek." > ".$kriteria[0]." > ".$responden; ?></h1>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span6">
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
							<h5>Tabel</h5>
						</div>
						<div class="widget-content">
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<td style="text-align:center"><strong>No</strong></td>
											<td style="text-align:center"><strong>Pertanyaan</strong></td>
											<td style="text-align:center"><strong>Sangat Tidak Puas</strong></td>
											<td style="text-align:center"><strong>Tidak Puas</strong></td>
											<td style="text-align:center"><strong>Puas</strong></td>
											<td style="text-align:center"><strong>Sangat Puas</strong></td>
											<td style="text-align:center"><strong>Weighted Average (%)</strong></td>
										</tr>
									</thead>
									<tbody>
										<?php
										$jumlah_pertanyaan = sizeof($pertanyaan);
										// $rerata_kepuasan_pertanyaan = array_filter($rerata_kepuasan_pertanyaan);
										// if(count($rerata_kepuasan_pertanyaan)) {
										//     $average = array_sum($rerata_kepuasan_pertanyaan)/count($rerata_kepuasan_pertanyaan);
										// }
										$weighted_average = array();
										$jumlah_weighted_average = 0;
										$jumlah_stp=0;
										$jumlah_tp=0;
										$jumlah_p=0;
										$jumlah_sp=0;
										for ($i=0; $i < $jumlah_pertanyaan; $i++) {
											$j=$i+1;
											$jumlah_stp=$jumlah_stp+$stp[$i];
											$jumlah_tp=$jumlah_tp+$tp[$i];
											$jumlah_p=$jumlah_p+$p[$i];
											$jumlah_sp=$jumlah_sp+$sp[$i];
											$jumlah_nilai = $stp[$i]+$tp[$i]+$p[$i]+$sp[$i];
											$weighted_average[$i] = $stp[$i]*1+$tp[$i]*2+$p[$i]*3+$sp[$i]*4;
											$weighted_average[$i] = $weighted_average[$i]/($jumlah_nilai*4);
											$jumlah_weighted_average = $jumlah_weighted_average+($weighted_average[$i]*100);
											$link = "<a href=\"?page=Kuesioner-Grafik-Pie&Kode=1&tahun=201802&stp=".$stp[$i]."&tp=".$tp[$i]."&p=".$p[$i]."&sp=".$sp[$i]."\" target=\"_self\">".round($weighted_average[$i]*100,0)."</i></a>";
											echo "<tr>
												<td style=\"text-align:center\">".$j."</td>
												<td>".$pertanyaan[$i]."</td>
												<td style=\"text-align:right\">".$stp[$i]."</td>
												<td style=\"text-align:right\">".$tp[$i]."</td>
												<td style=\"text-align:right\">".$p[$i]."</td>
												<td style=\"text-align:right\">".$sp[$i]."</td>
												<td style=\"text-align:right\">$link</a></td>
											</tr>";
										}
										$total = $jumlah_stp+$jumlah_tp+$jumlah_p+$jumlah_sp;
										?>
										<tr>
											<td colspan="2" >Presentase</td>
											<td style="text-align:right"><?php echo round(($jumlah_stp/$total)*100,0);?></td>
											<td style="text-align:right"><?php echo round(($jumlah_tp/$total)*100,0);?></td>
											<td style="text-align:right"><?php echo round(($jumlah_p/$total)*100,0);?></td>
											<td style="text-align:right"><?php echo round(($jumlah_sp/$total)*100,0);?></td>
											<td style="text-align:right"><?php echo round($jumlah_weighted_average/$jumlah_pertanyaan,0);?></td>
										</tr>
									</tbody>

								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
							<h5>Bar chart</h5>
						</div>
						<div class="widget-content">
							<div class="bars" id="bars" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
							<div id="viewPie" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</form>
</div>
<?php } ?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script type="text/javascript">
Highcharts.chart('bars', {
	chart: {
		type: 'column'
	},
	title: {
		text: 'Rerata Kepuasan Layanan'
	},
	subtitle: {
		text: 'Universitas Islam Kalimantan Islam MAB'
	},
	xAxis: {
		type: 'category',
		labels: {
			rotation: -45,
			style: {
				fontSize: '13px',
				fontFamily: 'Verdana, sans-serif'
			}
		}
	},
	yAxis: {
		min: 0,
		title: {
			text: 'Rerata Kepuasan (%)'
		}
	},
	legend: {
		enabled: false
	},
	tooltip: {
		pointFormat: 'Nilai Kepuasan tiap semester: <b>{point.y:.1f} %</b>'
	},
	series: [{
		name: 'Population',
		data: [
				<?php
					$rep = sizeof($pertanyaan);
					for ($i=0; $i < $rep; $i++) {
						echo "['".($i+1)."',".($weighted_average[$i]*100)."],";
					}
				 ?>
		],
		dataLabels: {
			enabled: true,
			rotation: -90,
			color: '#FFFFFF',
			align: 'right',
			format: '{point.y:.1f}', // one decimal
			y: 10, // 10 pixels down from the top
			style: {
				fontSize: '13px',
				fontFamily: 'Verdana, sans-serif'
			}
		}
	}]
});

Highcharts.chart('viewPie', {
	chart: {
		plotBackgroundColor: null,
		plotBorderWidth: null,
		plotShadow: false,
		type: 'pie'
	},
	title: {
		text: '<?php //echo $pertanyaan;?>'
	},
	tooltip: {
		pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	},
	plotOptions: {
		pie: {
			allowPointSelect: true,
			cursor: 'pointer',
			dataLabels: {
				enabled: true,
				format: '<b>{point.name}</b>: {point.percentage:.1f} %'
			}
		}
	},
	series: [{
		name: 'Jawaban',
		colorByPoint: true,
		data: [{
			name: 'Puas',
			y: <?php echo $jumlah_p;?>,
			sliced: true,
			selected: true
		}, {
			name: 'Sangat puas',
			y: <?php echo $jumlah_sp;?>
		}, {
			name: 'Tidak puas',
			y: <?php echo $jumlah_tp;?>
		}, {
			name: 'Sangat tidak puas',
			y: <?php echo $jumlah_stp;?>
		}]
	}]
});
</script>
