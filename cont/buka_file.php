<?php
# KONTROL MENU PROGRAM
if($_GET) {
	// Jika mendapatkan variabel URL ?page
	switch ($_GET['page']){
		case '' :
			if(!file_exists ("page/home.php")) die ("page/404.php");
			include "page/home.php";	break;

		case 'Error' :
			if(!file_exists ("page/404.php")) die ("Halaman Rusak!");
			include "page/404.php";	break;

		case 'Halaman-Utama' :
			if(!file_exists ("page/home.php")) die ("Sorry Empty Page!");
			include "page/home.php";	break;

		case 'Terima-Kasih' :
			if(!file_exists ("page/terima_kasih.php")) die ("Sorry Empty Page!");
			include "page/terima_kasih.php";	break;

		case 'Latar-Belakang' :
			if(!file_exists ("page/latar_belakang.php")) die ("Sorry Empty Page!");
			include "page/latar_belakang.php";	break;

		case 'Data-Perusahaan' :
			if(!file_exists ("page/data_perusahaan.php")) die ("Sorry Empty Page!");
			include "page/data_perusahaan.php";	break;

		case 'Bidang-Usaha' :
			if(!file_exists ("page/bidang_usaha.php")) die ("Sorry Empty Page!");
			include "page/bidang_usaha.php";	break;

		# LOGIN USER
		case 'Login' :
			if(!file_exists ("cont/login.php")) die ("Sorry Empty Page!");
			include "cont/login.php"; break;

		case 'Login-Validasi' :
			if(!file_exists ("cont/login_validasi.php")) die ("Sorry Empty Page!");
			include "cont/login_validasi.php"; break;

		case 'Logout' :
			if(!file_exists ("cont/login_out.php")) die ("Sorry Empty Page!");
			include "cont/login_out.php"; break;

		#DEFAULT PAGE
		case 'Setting' :
			if(!file_exists ("page/settings.php")) die ("Sorry Empty Page!");
			include "page/settings.php"; break;
		case 'Home' :
			if(!file_exists ("page/home.php")) die ("Sorry Empty Page!");
			include "page/home.php"; break;
		case 'Bantuan' :
			if(!file_exists ("page/help.php")) die ("Sorry Empty Page!");
			include "page/help.php"; break;
		case 'Profil' :
			if(!file_exists ("page/profile.php")) die ("Sorry Empty Page!");
			include "page/profile.php"; break;
		case 'Project' :
			if(!file_exists ("page/projects.php")) die ("Sorry Empty Page!");
			include "page/projects.php"; break;
		case 'Jadwal' :
			if(!file_exists ("page/tasks.php")) die ("Sorry Empty Page!");
			include "page/tasks.php"; break;
		case 'Pesan' :
			if(!file_exists ("page/messages.php")) die ("Sorry Empty Page!");
			include "page/messages.php"; break;
		case 'Berkas' :
			if(!file_exists ("page/files.php")) die ("Sorry Empty Page!");
			include "page/files.php"; break;
		case 'Kegiatan' :
			if(!file_exists ("page/activity.php")) die ("Sorry Empty Page!");
			include "page/activity.php"; break;
		case 'Gallery' :
			if(!file_exists ("page/gallery.php")) die ("Sorry Empty Page!");
			include "page/gallery.php"; break;
		case 'Kosong' :
			if(!file_exists ("page/blank.php")) die ("Sorry Empty Page!");
			include "page/blank.php"; break;
		case 'Visi-Misi' :
			if(!file_exists ("page/visi-misi.php")) die ("Sorry Empty Page!");
			include "page/visi-misi.php"; break;
		case 'Dasar-Hukum' :
			if(!file_exists ("page/hukum.php")) die ("Sorry Empty Page!");
			include "page/hukum.php"; break;
		case 'Kontak' :
			if(!file_exists ("page/kontak.php")) die ("Sorry Empty Page!");
			include "page/kontak.php"; break;
		case 'Kuesioner-Grafik' :
			if(!file_exists ("page/column.php")) die ("Sorry Empty Page!");
			include "page/column.php"; break;
		case 'Kuesioner-Grafik-Pie' :
			if(!file_exists ("page/pie.php")) die ("Sorry Empty Page!");
			include "page/pie.php"; break;
		case 'Total-Grafik' :
			if(!file_exists ("page/column_total.php")) die ("Sorry Empty Page!");
			include "page/column_total.php"; break;
		case 'Kuesioner-Bulan-Grafik' :
			if(!file_exists ("page/line.php")) die ("Sorry Empty Page!");
			include "page/line.php"; break;


	# MAIN #SUPER ADMIN
		case 'Master' :
			if(!file_exists ("su/master.php")) die ("Sorry Empty Page!");
			include "su/master.php";	break;
	# MAIN #SUPER ADMIN
		case 'Backup-Data' :
			if(!file_exists ("page/mast/backup-new.php")) die ("Sorry Empty Page!");
			include "page/mast/backup-new.php";	break;

		# BUKUT TAMU #SUPER ADMIN
		case 'Buku-Tamu-Data' :
			if(!file_exists ("page/mast/bukutamu_data.php")) die ("Sorry Empty Page!");
			include "page/mast/bukutamu_data.php";	break;
		case 'Buku-Tamu-Delete' :
			if(!file_exists ("page/mast/bukutamu_delete.php")) die ("Sorry Empty Page!");
			include "page/mast/bukutamu_delete.php"; break;
		case 'Buku-Tamu-Edit' :
			if(!file_exists ("page/mast/bukutamu_edit.php")) die ("Sorry Empty Page!");
			include "page/mast/bukutamu_edit.php"; break;
		case 'Buku-Tamu-Tolak' :
			if(!file_exists ("page/mast/bukutamu_tolak.php")) die ("Sorry Empty Page!");
			include "page/mast/bukutamu_tolak.php"; break;

	# USER DATA  #SUPER ADMIN
		case 'Pengguna-Data' :
			if(!file_exists ("page/mast/user_data.php")) die ("Sorry Empty Page!");
			include "page/mast/user_data.php";	break;
		case 'Pengguna-Delete' :
			if(!file_exists ("page/mast/user_delete.php")) die ("Sorry Empty Page!");
			include "page/mast/user_delete.php"; break;
		case 'Pengguna-Edit' :
			if(!file_exists ("page/mast/user_edit.php")) die ("Sorry Empty Page!");
			include "page/mast/user_edit.php"; break;
		case 'Pengguna-Add' :
			if(!file_exists ("page/mast/user_add.php")) die ("Sorry Empty Page!");
			include "page/mast/user_add.php"; break;

	# TETIMONI DATA  #SUPER ADMIN
		case 'Testimonial' :
			if(!file_exists ("page/pesan.php")) die ("Sorry Empty Page!");
			include "page/pesan.php";	break;
		case 'Testimonial-Data' :
			if(!file_exists ("page/mast/pesan_data.php")) die ("Sorry Empty Page!");
			include "page/mast/pesan_data.php";	break;
		case 'Testimonial-Delete' :
			if(!file_exists ("page/mast/pesan_delete.php")) die ("Sorry Empty Page!");
			include "page/mast/pesan_delete.php"; break;
		case 'Testimonial-Edit' :
			if(!file_exists ("page/mast/pesan_edit.php")) die ("Sorry Empty Page!");
			include "page/mast/pesan_edit.php"; break;
		case 'Testimonial-Terima' :
			if(!file_exists ("page/mast/pesan_terima.php")) die ("Sorry Empty Page!");
			include "page/mast/pesan_terima.php"; break;
		case 'Testimonial-Tolak' :
			if(!file_exists ("page/mast/pesan_tolak.php")) die ("Sorry Empty Page!");
			include "page/mast/pesan_tolak.php"; break;

	# ASPEK DATA  #SUPER ADMIN
		case 'Aspek-Data' :
			if(!file_exists ("page/mast/aspek_data.php")) die ("Sorry Empty Page!");
			include "page/mast/aspek_data.php";	break;
		case 'Aspek-Delete' :
			if(!file_exists ("page/mast/aspek_delete.php")) die ("Sorry Empty Page!");
			include "page/mast/aspek_delete.php"; break;
		case 'Aspek-Edit' :
			if(!file_exists ("page/mast/aspek_edit.php")) die ("Sorry Empty Page!");
			include "page/mast/aspek_edit.php"; break;
		case 'Aspek-Add' :
			if(!file_exists ("page/mast/aspek_add.php")) die ("Sorry Empty Page!");
			include "page/mast/aspek_add.php"; break;
		case 'Aspek-Detail' :
			if(!file_exists ("page/mast/aspek_tolak.php")) die ("Sorry Empty Page!");
			include "page/mast/aspek_tolak.php"; break;

	# KUIS DATA  #SUPER ADMIN
		case 'Kuis-Data' :
			if(!file_exists ("page/mast/kuis_data.php")) die ("Sorry Empty Page!");
			include "page/mast/kuis_data.php";	break;
		case 'Kuis-Delete' :
			if(!file_exists ("page/mast/kuis_delete.php")) die ("Sorry Empty Page!");
			include "page/mast/kuis_delete.php"; break;
		case 'Kuis-Edit' :
			if(!file_exists ("page/mast/kuis_edit.php")) die ("Sorry Empty Page!");
			include "page/mast/kuis_edit.php"; break;
		case 'Kuis-Add' :
			if(!file_exists ("page/mast/kuis_add.php")) die ("Sorry Empty Page!");
			include "page/mast/kuis_add.php"; break;
		case 'Kuis-Detail' :
			if(!file_exists ("page/mast/kuis_tolak.php")) die ("Sorry Empty Page!");
			include "page/mast/kuis_tolak.php"; break;

	# kuesioner DATA  #SUPER ADMIN
		case 'Kuesioner-Data' :
			if(!file_exists ("page/mast/kuesioner_data.php")) die ("Sorry Empty Page!");
			include "page/mast/kuesioner_data.php";	break;
		case 'Kuesioner-Delete' :
			if(!file_exists ("page/mast/kuesioner_delete.php")) die ("Sorry Empty Page!");
			include "page/mast/kuesioner_delete.php"; break;
		case 'Kuesioner-Edit' :
			if(!file_exists ("page/mast/kuesioner_edit.php")) die ("Sorry Empty Page!");
			include "page/mast/kuesioner_edit.php"; break;
		case 'Kuesioner-Add' :
			if(!file_exists ("page/mast/kuesioner_add.php")) die ("Sorry Empty Page!");
			include "page/mast/kuesioner_add.php"; break;
		case 'Kuesioner-Detail' :
			if(!file_exists ("page/mast/kuesioner_detail.php")) die ("Sorry Empty Page!");
			include "page/mast/kuesioner_detail.php"; break;
		case 'Kuesioner-Online' :
			if(!file_exists ("page/kuis_online.php")) die ("Sorry Empty Page!");
			include "page/kuis_online.php"; break;
		case 'Kuesioner-Mahasiswa' :
			if(!file_exists ("page/kuesioner_mahasiswa.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_mahasiswa.php"; break;
		case 'Kuesioner-Dosen' :
			if(!file_exists ("page/kuesioner_dosen.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_dosen.php"; break;
		case 'Kuesioner-Mahasiswa-List' :
			if(!file_exists ("page/kuesioner_mahasiswa_list.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_mahasiswa_list.php"; break;
		case 'Kuesioner-List' :
				if(!file_exists ("page/kuesioner_list.php")) die ("Sorry Empty Page!");
				include "page/kuesioner_list.php"; break;
		case 'Kuesioner-Dosen-List' :
			if(!file_exists ("page/kuesioner_dosen_list.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_dosen_list.php"; break;
		case 'Kuesioner-Selesai' :
			if(!file_exists ("page/kuesioner_selesai.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_selesai.php"; break;
		case 'Kuesioner-Main' :
			if(!file_exists ("page/kuesioner_main.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_main.php"; break;
		case 'Kuesioner-Tahun' :
			if(!file_exists ("page/kuesioner_tahun.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_tahun.php"; break;
		case 'Kuesioner-Kriteria' :
			if(!file_exists ("page/kuesioner_kriteria.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_kriteria.php"; break;
		case 'Kuesioner-Jenis' :
			if(!file_exists ("page/kuesioner_jenis.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_jenis.php"; break;
		case 'Kuesioner-Responden' :
			if(!file_exists ("page/kuesioner_responden.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_responden.php"; break;
		case 'Kuesioner-Indikator' :
			if(!file_exists ("page/kuesioner_indikator.php")) die ("Sorry Empty Page!");
			include "page/kuesioner_indikator.php"; break;

	# JAWABAN DATA  #SUPER ADMIN
		case 'Jawaban-Data' :
			if(!file_exists ("page/mast/hasil_data.php")) die ("Sorry Empty Page!");
			include "page/mast/hasil_data.php";	break;
		case 'Jawaban-Delete' :
			if(!file_exists ("page/mast/hasil_delete.php")) die ("Sorry Empty Page!");
			include "page/mast/hasil_delete.php"; break;

	# UNSUR DATA  #SUPER ADMIN
		case 'Unsur-Data' :
			if(!file_exists ("page/mast/unsur_data.php")) die ("Sorry Empty Page!");
			include "page/mast/unsur_data.php";	break;
		case 'Unsur-Delete' :
			if(!file_exists ("page/mast/unsur_delete.php")) die ("Sorry Empty Page!");
			include "page/mast/unsur_delete.php"; break;
		case 'Jawaban-Laporan' :
			if(!file_exists ("page/laporan/jawaban_modif.php")) die ("Sorry Empty Page!");
			include "page/laporan/jawaban_modif.php"; break;
		case 'Jawaban-Responden' :
			if(!file_exists ("page/laporan/jawaban_responden.php")) die ("Sorry Empty Page!");
			include "page/laporan/jawaban_responden.php"; break;

	}
}
else {
	// Jika tidak mendapatkan variabel URL : ?page
	if(!file_exists ("page/home.php")) die ("page/404.php");
	include "page/home.php";
}
?>
