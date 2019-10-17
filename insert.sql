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


INSERT INTO tkuis (id_aspek, soal, jawaban_a, jawaban_b, jawaban_c,jawaban_d) VALUES (20,"","Tidak setuju", "Tidak tahu", "Setuju", "Sangat setuju");
