INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Mahasiswa memiliki kesempatan yang sama untuk aktif di organisasi kemahasiswaan
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Unit Kegiatan Mahasiswa (UKM) yang ada telah sesuai dengan minat/bakat mahasiswa
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Kegiatan UKM didukung dan difasilitasi oleh universitas
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Mahasiswa mendapat pelayanan bimbingan dan konseling dari Dosen Pembimbing Akademik (PA)
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Dosen PA aktif berkomunikasi dengan mahasiswa bimbingannya
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Mahasiswa dibantu oleh Universitas jika mengalami masalah akademik
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Pimpinan Universitas beserta jajarannya menyediakan waktu bagi orang tua mahasiswa yang ingin berkonsultasi
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Universitas memberikan bantuan pengobatan pada mahasiswa yang sedang sakit
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Terdapat asuransi/santunan kecelakaan bagi mahasiswa
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Universitas memiliki pelayanan kesehatan yang memadai
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Universitas menyediakan beasiswa bagi mahasiswa berprestasi atau kurang mampu
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Unit kemahasiswa memberikan informasi mengenai magang dan lowongan kerja
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Kewirausahaan mahasiswa turut didukung/dibantu/dipantau oleh universitas
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (16,"Program Kreatifitas Mahasiswa difasilitasi dengan baik
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (19,"Mahasiswa mendapatkan pendidikan karakter
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (19,"Mahasiswa mendapatkan pendidikan tentang anti korupsi
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (19,"Mahasiswa mendapatkan pendidikan tentang NAPZA
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (19,"Kurikulum yang diajarkan sesuai dengan perkembangan ilmu pengetahuan dan teknologi
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (19,"Dosen memberikan tugas sesuai dengan capaian pembelajaran
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (19,"Mahasiswa dilibatkan dalam penelitian atau PkM dosen
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (19,"Dosen memasukkan hasil penelitiannya dalam pengajaran
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");

SELECT taspek.nama_aspek FROM tresponden_kuis
LEFT JOIN tkuis ON tresponden_kuis.id_kuis=tkuis.id_kuis
LEFT JOIN taspek ON tkuis.id_aspek = taspek.id_aspek
WHERE tresponden_kuis.responden="MAHASISWA"

SELECT taspek.nama_aspek, tkuis.soal FROM tresponden_kuis
LEFT JOIN tkuis ON tresponden_kuis.id_kuis=tkuis.id_kuis
LEFT JOIN taspek ON tkuis.id_aspek = taspek.id_aspek
WHERE tresponden_kuis.responden="MAHASISWA"

INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Universitas Telah Memiliki jumlah dosen yang cukup
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Universitas memfasilitasi dan mendorong dosen untuk mengelola jabatan fungsional
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Universitas memberikan bantuan yang cukup untuk dosen mendapatkan sertifikasi
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Beban kerja dosen yang dibebankan sudah sesuai dengan aturan
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Universitas mendorong dosen untuk produktif dalam Penelitian dan PkM
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Universitas telah mendorong dosen untuk melaporkan rekognisinya
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Peneliti dapat mengakses Renstra Penelitian Universitas
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Peneliti melakukan penelitian sesuai dengan Renstra Penelitian Universitas
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Peneliti dapat mengakses pedoman penelitian
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Pedoman penelitian telah disosialisasikan
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Tata cara penilaian dan review dilakukan secara transparan
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Hasil penilaian penelitian dikembalikan penelitian
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Pengangkatan reviewer sesuai dengan kebutuhan dan keahlian
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Peneliti tergabung dalam suatu kelompok keahlian
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Peneliti melakukan penelitian sesuai dengan kelompok keahliannya
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Pengabdi dapat mengakses Renstra Pengabdian kepada Masyarakat (PkM)
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Pengabdi melakukan Pengabdian sesuai dengan Renstra PkM Universitas
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Pengabdi dapat mengakses pedoman Pengabdian
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Pedoman PkM telah disosialisasikan
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Tata cara penilaian dan review dilakukan secara transparan
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Hasil penilaian Pengabdian dikembalikan Pengabdian
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Pengangkatan reviewer sesuai dengan kebutuhan dan keahlian
","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");

INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (40,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (41,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (42,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (43,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (44,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (45,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (46,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (47,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (48,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (49,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (50,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (51,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (52,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (53,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (54,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (55,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (56,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (57,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (58,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (59,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (60,"DOSEN");


Keuangan Respondennya siapa?
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Prosedur pelayanan di Biro Keuangan tidak berbelit-belit","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Proses pelayanan di Biro Keuangan cepat dan tepat","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Kegiatan administrasi rapi dan teratur","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Staf Biro Keuangan memberikan pelayanan yang memuaskan sesuai dengan kebutuhan anda","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Staf Biro Keuangan menunjukkan disiplin kerja yang tinggi","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Staf Biro Keuangan memberi tanggapan yang cepat dan baik terhadap keluhan anda","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Prosedur penyampaian informasi jelas dan mudah dimengerti","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Staf Biro Keuangan selalu ada sesuai jadwal","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Staf Biro Keuangan memiliki kemampuan, pengetahuan, dan kecakapan yang tinggi dalam menjalankan tugasnya","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Biro Keuangan memberikan kemudahan dalam akses pelayanan administrasi keuangan","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Biro Keuangan tidak membiarkan pengguna layanan menunggu terlalu lama","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Staf Biro Keuangan bertugas sepenuh hati dalam memberikan pelayanan","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Komunikasi Staf Biro Keuangan dengan pengguna layanan berjalan dengan baik dan lancar","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Staf Biro Keuangan memberikan perlakuan yang adil kepada setiap pengguna layanan","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Ruang pelayanan dan ruang tunggu Biro Keuangan sudah nyaman","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Staf Biro Keuangan berpenampilan rapi, sopan sesuai dengan situasi dan kondisi","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Kantor Biro Keuangan tertata rapi dan bersih","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Informasi yang diberikan Biro Keuangan dapat diandalkan","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (18,"Sistem Informasi yang ada di Biro Keuangan bekerja dengan handal","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");

INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (61,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (62,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (63,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (64,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (65,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (66,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (67,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (68,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (69,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (70,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (71,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (72,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (73,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (74,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (75,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (76,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (77,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (78,"MAHASISWA");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (79,"MAHASISWA");


INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Kesopanan dan keramahan petugas","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Kecepatan pelayanan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Kemampuan petugas dalam memberikan pelayanan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Ketepatan pelaksanaan jadwal pelayanan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Kemudahan prosedur pelayanan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Kemudahan prosedur pelayanan (pengajuan proposal, review proposal, seleksi, dan pencairan dana)","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Kesesuaian antara prosedur dan pelaksanaan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Kecukupan dana penelitian dengan subjek penelitian","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Sosialisasi program","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Transparansi","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Efektifitas konsorsium keilmuan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"Publikasi hasil penelitian","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");

INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (80,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (81,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (82,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (83,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (84,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (85,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (86,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (87,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (88,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (89,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (90,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (91,"DOSEN");

INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Kepuasan Terhadap Pengembangan Karir","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Kepuasan Bekerja Sesuai dengan Tugas dan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Beban Kerja","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Arahan Pimpinan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Keteladanan Pimpinan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Sinkronisasi Kebijakan Pimpinan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Konsistensi Penegakan Aturan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Suasana Kerja","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Penghasilan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Penghargaan Prestasi","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Keamanan Tempat Kerja","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (17,"Jaminan Sosial","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");

INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (92,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (93,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (94,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (95,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (96,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (97,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (98,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (99,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (100,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (101,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (102,"DOSEN");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (103,"DOSEN");

INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (92,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (93,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (94,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (95,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (96,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (97,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (98,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (99,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (100,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (101,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (102,"TENAGA PENDIDIK");
INSERT INTO tresponden_kuis (id_kuis,responden) VALUES (103,"TENAGA PENDIDIK");


INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan layanan pada saat registrasi mahasiswa baru","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan layanan Kepenasehatan Akademik","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan layanan pelaksanaan perkuliahan","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatan pendidikan karakter","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan pendidikan tentang anti korupsi","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan pendidikan NAPZA","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Kurikulum yang diajarkan sesuai dengan perkembangan ilmu pengetahuan dan teknologi","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Kejelasan materi perkuliahan yang diberikan dosen","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Waktu dipergunakan secara efektif oleh dosen dalam proses pembelajaran","  Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Dosen memberikan tugas sesuai dengan capaian pembelajaran","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan layanan Pelaksanaan UTS","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan layanan Praktikum","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan layanan pembimbingan magang/PL","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa dilibatkan dalam penelitian atau PkM dosen","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan layanan pembimbingan Skripsi/Tesis","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Dosen memasukkan hasil penelitiannya dalam pembelajaran","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,16,"Mahasiswa mendapatkan layanan pengembangan suasana akademik.","Sangat tidak puas","Tidak puas","Puas","Sangat puas");

INSERT INTO tresponden_kuis VALUES (NULL,104,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,105,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,106,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,107,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,108,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,109,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,110,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,111,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,112,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,113,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,114,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,115,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,116,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,117,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,118,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,119,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,120,"MAHASISWA");

INSERT INTO tkuis VALUES (NULL,19,"Mahasiswa mendapatkan sarana pembelajaran yang sesuai dengan kurikulum.","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Laboratorium yang tersedia sudah relevan dengan kebutuhan keilmuan.","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Buku referensi telah tersedia di perpustakaan","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Mahasiswa memiliki kesempatan yang sama untuk aktif di organisasi kemahasiswaan","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Untuk Unit Kegiatan Mahasiswa (UKM) yang telah sesuai dengan minat/bakat mahasiswa","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Kegiatan UKM didukung dan difasilitasi oleh universitas","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Mahasiswa mendapat pelayanan bimbingan dan konseling dari dosen pembimbingan akademik","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Dosen PA aktif berkomunikasi dengan mahasiswa bimbingannya","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Mahasiswa dibantu oleh Universitas jika mengalami masalah akademik","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Pimpinan Universitas beserta jajarannya menyediakan waktu bagi orang tua mahasiswa yang ingin bekomunikasi.","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Kepedulian universitas dalam memahami kepentingan dan kendala mahasiswa","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Universitas memberikan bantuan pengobatan pada mahasiswa yang sedang sakit","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Terdapat asuransi/santunan kecelakaan bagi mahasiswa","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Universitas menyediakan beasiswa bagi mahasiswa berprestasi atau kurang mampu","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Universitas memberikan informasi akademik dan pelayanan non akademik dalam bentuk online","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Unit kemahasiswa memberikan informasi mengenai magang dan lowongan kerja","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Kewirausahaan mahasiswa turut didukung/dibantu oleh universitas","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Program kreatifitas Mahasiswa difasilitasi dengan baik.","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,19,"Universitas memberikan respon positif terhadap pengaduan mahasiswa","Sangat tidak puas","Tidak puas","Puas","Sangat puas");

INSERT INTO tresponden_kuis VALUES (NULL,121,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,122,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,123,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,124,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,125,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,126,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,127,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,128,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,129,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,130,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,131,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,132,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,133,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,134,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,135,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,136,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,137,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,138,"MAHASISWA");
INSERT INTO tresponden_kuis VALUES (NULL,139,"MAHASISWA");


INSERT INTO tkuis VALUES (NULL,15,"Ketersediaan dokumen pedoman karakteristik kepemimpinan","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,15,"Ketersediaan dokumen etika dosen","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,15,"Ada SOP Pemberian bantuan dana bagi dosen","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,15,"Sistem Penghargaan dan Sanksi terhadap dosen, tendik, dan mahasiswa","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,15,"Ketersediaan dokumen kerjasama","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,15,"Ketersediaan dokumen SK Kegiatan","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,15,"Ada kriteria pemilihan Rektor","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,15,"Pengumuman ketika diselenggarakan pemilihan Rektor","Sangat tidak puas","Tidak puas","Puas","Sangat puas");
INSERT INTO tkuis VALUES (NULL,15,"Pelaksanakan Audit Mutu Internal secara periodik","Sangat tidak puas","Tidak puas","Puas","Sangat puas");

INSERT INTO tresponden_kuis VALUES (NULL,140,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,141,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,142,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,143,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,144,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,145,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,146,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,147,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,148,"DOSEN");

INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Kesopanan dan keramahan petugas","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Kecepatan pelayanan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Kemampuan petugas dalam memberikan pelayanan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Ketepatan pelaksanaan jadwal pelayanan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Kemudahan prosedur pelayanan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Kemudahan prosedur pelayanan (pengajuan proposal, review proposal, seleksi, dan pencairan dana)","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Kesesuaian antara prosedur dan pelaksanaan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Kecukupan dana pengabdian dengan subjek pengabdian","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Sosialisasi program","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Transparansi","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Efektifitas konsorsium keilmuan","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");
INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (21,"Publikasi hasil pengabdian","Sangat tidak puas", "Tidak puas", "Puas", "Sangat puas");

INSERT INTO tresponden_kuis VALUES (NULL,149,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,150,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,151,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,152,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,153,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,154,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,155,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,156,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,157,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,158,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,159,"DOSEN");
INSERT INTO tresponden_kuis VALUES (NULL,160,"DOSEN");
