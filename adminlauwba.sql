-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 02:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminlauwba`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`username`, `nama_lengkap`, `password`, `last_login`) VALUES
('sigitsuryono25', 'Sigit Suryono', '$2y$10$320YKwKXdI4fl34vusneNu4dFSdPpEJE/Y1BU1Mo2UOp0kPZ7q6HG', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `nama_file`, `deskripsi`, `kategori`, `timestamp`) VALUES
(1, 'Coba Galleri Pertama Kedua', 'Welcome_Scan.jpg', '<p>ini deskrpsi singkat dari foto yang diupload</p>\r\n', 3, '2018-10-06 01:33:44'),
(2, 'Coba Gallery Kedua', 'd_nightcamping_1920x1200.png', '<p>deskripsi singkat ini akan terlihat apabila foto telah diklik&nbsp;</p>\r\n\r\n<h1><strong>Paham yaaa</strong></h1>\r\n', 3, '2018-10-06 01:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_gallery`
--

CREATE TABLE `kategori_gallery` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_gallery`
--

INSERT INTO `kategori_gallery` (`id`, `nama`) VALUES
(1, 'In House Training'),
(3, 'Kategori Gallery');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kelas`
--

CREATE TABLE `kategori_kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text,
  `harga` int(11) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_kelas`
--

INSERT INTO `kategori_kelas` (`id`, `nama`, `deskripsi`, `harga`, `foto`, `timestamp`) VALUES
(1, 'Private', '<h3>KELAS PRIVATE</h3>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;KELAS ini khusus bagi Anda yang butuh penanganan KHUSUS</p>\n\n<p>dengan&nbsp;<strong>materi serta waktu pelakasaan</strong>&nbsp;bisa menyesuaikan dengan kebutuhan Anda.</p>\n\n<p>&nbsp;</p>\n\n<p>Catt :</p>\n\n<ul>\n	<li><strong>Biaya</strong>&nbsp;Kelas Private baik Android maupun WEB jika sesuai&nbsp;<a href=\"https://www.lauwba.com/training-lauwba-techno.php\">materi REGULER(lihat Klik Disini)&nbsp;</a>Yaitu 1.990ribu/Orang</li>\n	<li>Bagi peserta yang&nbsp;<strong>request khusus materi</strong>&nbsp;training/kursus, biayanya&nbsp; menyesuaikan tingkat kesulitan materi yang diminta</li>\n	<li>Bagi yang dari&nbsp;<strong>Luar Kota, GRATIS antar jemput dari Bandara, Stasiun terminal. PENGINAPAN&nbsp;</strong>telah kami Siapkan dengan tambahan biaya khsus&nbsp;<strong>Penginapan :<br />\n	-KLS 1</strong>&nbsp;POP HOTEL (+1,2Jt) selama 4 hari. Jaraknya -+ 70 meter dari kantor lokasi training<br />\n	-<strong>KLS 2</strong>&nbsp;GREEN KOST (+400rb) selama 1 pekan.&nbsp;Jaraknya -+ 7km&nbsp; dari kantor lokasi training</li>\n	<li>Jika mempunyai&nbsp;<strong>penawaran Khusus</strong>&nbsp;bisa menghubungi kami&nbsp;<a href=\"https://api.whatsapp.com/send?phone=6282221777206&amp;text=Maaf%20Bu,%20Mau%20Konsultasi%20tentang%20training/kursus%20di%20Lauwba...\">TELP/WA : 08 222 1 777 206 KLIK DISINI</a></li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>--&nbsp;<br />\nSalam<br />\nAbu Faruq | Admin<br />\nLAUWBA TECHNO INDONESIA<br />\n08 222 1 777 206 |&nbsp;<a href=\"https://lauwba.com/\">www.lauwba.com&nbsp;</a><br />\nJl. Kusumanegara No 224 Yogyakarta</p>\n\n<p>&nbsp;</p>\n\n<p>--</p>\n\n<p><strong>Tag :</strong><strong>&nbsp;</strong><em>Tempat kursus android jogja, kursus android jogja, kursus android makassar, training android jogja, training android makassar, jasa pembuatan aplikasi android jogja, jasa pembuatan aplikasi android makassar, jakarta, semarang, surabaya, sumatera. kursus website jogja, kursus website makassar, training website jogja, training website makassar, jasa pembuatan website jogja, jasa pembuatan website makassar, jakarta, semarang, surabaya, sumatera, Private Android Jogja, In House Training Android Jogja, Kursus Pemrograman Android Jogja, Private web Jogja, In House Training web Jogja, Kursus Pemrograman web Jogja. Kursus Android, Kursus Web.</em></p>\n', 949000, 'private.jpg', '2018-10-10 07:43:41'),
(2, 'Reguler Class', 'deskripsi reguler', 999000, 'kursus_dan_jasa_pembuatan_website_jogja_kursus_website_makassar.png', '2018-10-10 06:27:49'),
(3, 'Bootcamp', '<p><strong>Training/Kursus Belajar Membuat Aplikasi Android &nbsp;di Kaliurang Wisata Gunung Merapi - Yogyakarta selama 3 hari FULL Day</strong></p>\n\n<p>KELAS BOOT CAMP<br />\n#PELATIHAN Membuat Aplikasi ANDROID<br />\nGRATIS Mengulang sampai BISA! | Daftar sekarang di&nbsp;<a href=\"https://l.facebook.com/l.php?u=http%3A%2F%2Fwww.lauwba.com%2F&amp;h=ATM_1BOMz8XBmvSpRSu4huorB1k9tQ9U2dh-NzqYdlpQEzQFoxWq3K4Qf3Hs42xFY3zq3T0HFTYrPxfrCJ7lIPdN2qISiwE9eHYDjKvd6631cQuqzdCW3EE2SKkKQE_-NEFlCA&amp;enc=AZNTRgXuYDs18KmJxAY-JyxWfxfs_2DPYM3x2-AkvHtz8O-VvE_cDnfa-34MS1RCX3xTC0cr1AHDTQN74xrttgl3bj24saogfPvxdtQ25artYxrIrtQkyloqC7ZYT8X4eAmXbfXpDGbhhgyikg6D_F9ca_uq6-cfnBa32DI2N-pt1THwhb-uDM-AsWsTbS4EkOLEWMdNgt2LKHcfLZxYFhJ3&amp;s=1\" target=\"_blank\">www.lauwba.com</a>&nbsp;Kuota TERBATAS 10 Orang<br />\n#Selama 3 Hari Full Day di Lantai 2 IT Training Center Lauwba Yogyakarta&nbsp;<br />\nBerikut materi yang didapatkan selama training.....:</p>\n', 499000, 'bootcamp.png', '2018-10-10 06:27:49'),
(5, 'In House', '<h3>IN HOUSE TRAINING</h3>\n\n<p>&nbsp;</p>\n\n<p><strong>In house training</strong>&nbsp;adalah pelatihan SDM atau pelatihan karyawan yang pelaksanaannya berdasarkan permintaan oleh instansi/klien. .&nbsp; Untuk Biaya sendiri baik Kls In House Training&nbsp;untuk Android Development maupun WEB Development yaitu :</p>\n\n<p>1. Peserta minimal 1 org Rp.6,5Jt/Org<br />\n2. Peserta minimal 3 org Rp.3,5Jt/Org<br />\n2. Peserta minimal 5 org Rp.2jt/org<br />\n3. Peserta minimal 10 org Rp.1,2Jt/org<br />\n5. Peserta minimal 20 org Rp.900rb/org</p>\n\n<p>+ Semuanya di tanggung biaya transport + penginapan(Khusus untuk pelaksanaan di tempat Bpk/Ibu).&nbsp;<br />\nDurasi waktu Full Day 4 Hari sesuai materi serta modul yang telah kami siapkan (Materi bisa request) dengan rincian materi :</p>\n\n<p>&nbsp;</p>\n\n<p><strong>MATERI UNTUK (KELAS ANDROID)</strong></p>\n\n<p>PENGENALAN&nbsp; TENTANG WEBSITE</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Apa itu Website</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Manfaat Website</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Alur Kerja Website</li>\n</ul>\n\n<p>&nbsp;REGISTRASI DOMAIN &amp; HOSTING (SERVER)</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Macam-macang jenis domain dan penggunaannya</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan Antar Muka Cpanel/Hosting</li>\n</ul>\n\n<p>&nbsp;PROJECT&rdquo; MEMBUAT WEBSITE DARI NOL(HTML)</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan HTML &amp; XHTML</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengaturan Text, Membuat Tabel, Form &amp; Frame.</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Membuat Link, menyisipkan gambar &amp; multimedia</li>\n</ul>\n\n<p>&nbsp; MEMBANGUN WEBSITE DINAMIS PHP</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan &amp; dasar-dasar PHP</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Membuat fungsi Seleksi &amp; Perulangan</li>\n</ul>\n\n<p>&nbsp;MEMBUAT DATABASE DENGAN MYSQL</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan MYSQL</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Koneksi Data PHP dengan MYSQL</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Penggunaan a query untk akses server dr android</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Perancangan database</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Perancangan koneksi ke server</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Penggunaan library aQuery</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Mengambil data dari server&nbsp; menggunakan AQuery</li>\n</ul>\n\n<p>&nbsp;MEMBUAT HALAMAN ADMIN &amp; TAMPILAN UTAMA&nbsp; WEBSITE DENGAN MENGGUNAKAN PHP &amp; CSS</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan CSS</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Mendesain Tampilan Admin(Frond End)</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Mendesain Tampilan Utama website dengan meng.&nbsp;&nbsp;&nbsp;</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Bootstrap (Website Responsive support Mobile)</li>\n</ul>\n\n<p>&nbsp;MEMBUAT APLIKASI ANDROID UNTUK WEBSITE&nbsp; MASING-MASING PESERTA</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; FINISHING&rdquo; Instal di HP Android&nbsp; dan Persiapan</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Upload ke Server Masing-masing.</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p><strong>-----------------</strong></p>\n\n<p><strong>BERIKUT MATERI UNTUK KELAS WEB</strong></p>\n\n<p>PENGENALAN&nbsp; TENTANG WEBSITE</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Apa itu Website</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Manfaat Website</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Alur Kerja Website</li>\n</ul>\n\n<p>&nbsp;REGISTRASI DOMAIN &amp; HOSTING (SERVER)</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Macam-macang jenis domain dan penggunaannya</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan Antar Muka Cpanel/Hosting</li>\n</ul>\n\n<p>&nbsp;PROJECT&rdquo; MEMBUAT WEBSITE DARI NOL(HTML)</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan HTML &amp; XHTML</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengaturan Text, Membuat Tabel, Form &amp; Frame.</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Membuat Link, menyisipkan gambar &amp; multimedia</li>\n</ul>\n\n<p>&nbsp; MEMBANGUN WEBSITE DINAMIS PHP</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan &amp; dasar-dasar PHP</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Membuat fungsi Seleksi &amp; Perulangan</li>\n</ul>\n\n<p>&nbsp;MEMBUAT DATABASE DENGAN MYSQL</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan MYSQL</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Koneksi Data PHP dengan MYSQL</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Penggunaan a query untk akses server dr android</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Perancangan database</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Perancangan koneksi ke server</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Penggunaan library aQuery</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Mengambil data dari server&nbsp; menggunakan AQuery</li>\n</ul>\n\n<p>&nbsp;MEMBUAT HALAMAN ADMIN &amp; TAMPILAN UTAMA&nbsp; WEBSITE DENGAN MENGGUNAKAN PHP &amp; CSS</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan CSS</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Mendesain Tampilan Admin(Frond End)</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Mendesain Tampilan Utama website dengan meng.&nbsp;&nbsp;&nbsp;</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Bootstrap (Website Responsive support Mobile)</li>\n</ul>\n\n<p>&nbsp;MEMBUAT APLIKASI ANDROID UNTUK WEBSITE&nbsp; MASING-MASING PESERTA</p>\n\n<ul>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; FINISHING&rdquo; Instal di HP Android&nbsp; dan Persiapan</li>\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Upload ke Server Masing-masing.</li>\n</ul>\n\n<p><strong>&nbsp;</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Catt :</p>\n\n<ul>\n	<li>Untuk Waktu Pelaksanaan serta materi training bisa menyesuaikan peserta.</li>\n	<li>Kami juga membuka kelas Private dan REGULER&nbsp;&nbsp;<a href=\"https://www.lauwba.com/training-lauwba-techno.php\">materi serta biaya Kelas REGULER(lihat Klik Disini)&nbsp;</a>&nbsp;Bagi yang ingin langsung datang kekantor kami dan kami juga membuka KELAS PRIVATE&nbsp;\n	<p>rincian materi serta biaya&nbsp;<a href=\"https://www.lauwba.com/detail_it_training.php?id=26\">KELAS PRIVATE (KLIK Dsisini)</a></p>\n	</li>\n	<li>Jika mempunyai penawaran Khusus bisa menghubungi kami&nbsp;<a href=\"https://api.whatsapp.com/send?phone=6282221777206&amp;text=Maaf%20Bu,%20Mau%20Konsultasi%20tentang%20training/kursus%20di%20Lauwba...\">TELP/WA : 08 222 1 777 206 KLIK DISINI</a></li>\n</ul>\n\n<p>--&nbsp;<br />\nSalam<br />\nAbu Faruq | Admin<br />\nLAUWBA TECHNO INDONESIA<br />\n08 222 1 777 206 |&nbsp;<a href=\"https://www.lauwba.com/\">www.lauwba.com&nbsp;</a><br />\nJl. Kusumanegara No 224 Yogyakarta</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Tag :kursus android, kursus web,</strong><strong>&nbsp;</strong><em>Tempat kursus android jogja, kursus android jogja, kursus android makassar, training android jogja, training android makassar, jasa pembuatan aplikasi android jogja, jasa pembuatan aplikasi android makassar, jakarta, semarang, surabaya, sumatera. kursus website jogja, kursus website makassar, training website jogja, training website makassar, jasa pembuatan website jogja, jasa pembuatan website makassar, jakarta, semarang, surabaya, sumatera, Private Android Jogja, In House Training Android Jogja, Kursus Pemrograman Android Jogja, Private web Jogja, In House Training web Jogja, Kursus Pemrograman web Jogja. Kursus Android, Kursus Web.</em></p>\n', 499000, '35231419.jpg', '2018-10-10 06:27:49'),
(17, 'Incubator', '<h1 style=\"text-align:justify\">Kelas Inkubator</h1>\n\n<p style=\"text-align:justify\">kelas inkubator adalah kelas yang pelaksanaanya selama 3 bulan full day dengan dibimbing dari nol didalam membuat project sampai selesai. Tujuan dari kelas ini adalah untuk melahirkan pelaku startup baru dan programmer yang siap memasuki dunia kerja,&nbsp;</p>\n', 999000, 'incubator.jpg', '2018-10-10 06:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_portofolio`
--

CREATE TABLE `kategori_portofolio` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_portofolio`
--

INSERT INTO `kategori_portofolio` (`id`, `nama`) VALUES
(1, 'Android Project');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama` text NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_kategori`, `nama`, `deskripsi`, `foto_kelas`) VALUES
(17, 1, 'PELATIHAN MEMBUAT APLIKASI ANDROID KELAS BOOT CAMP PERIODE 2019', '<p><strong><img alt=\"\" src=\"/CodeIgniter/Admin/assets/ckfinder/userfiles/files/amn.png\" style=\"float:left; height:144px; margin:10px; width:250px\" />Training/Kursus Belajar Membuat Aplikasi Android &nbsp;di Kaliurang Wisata Gunung Merapi - Yogyakarta selama 3 hari FULL Day</strong></p>\r\n\r\n<p>KELAS BOOT CAMP<br />\r\n#PELATIHAN Membuat Aplikasi ANDROID<br />\r\nGRATIS Mengulang sampai BISA! | Daftar sekarang di&nbsp;<a href=\"https://l.facebook.com/l.php?u=http%3A%2F%2Fwww.lauwba.com%2F&amp;h=ATM_1BOMz8XBmvSpRSu4huorB1k9tQ9U2dh-NzqYdlpQEzQFoxWq3K4Qf3Hs42xFY3zq3T0HFTYrPxfrCJ7lIPdN2qISiwE9eHYDjKvd6631cQuqzdCW3EE2SKkKQE_-NEFlCA&amp;enc=AZNTRgXuYDs18KmJxAY-JyxWfxfs_2DPYM3x2-AkvHtz8O-VvE_cDnfa-34MS1RCX3xTC0cr1AHDTQN74xrttgl3bj24saogfPvxdtQ25artYxrIrtQkyloqC7ZYT8X4eAmXbfXpDGbhhgyikg6D_F9ca_uq6-cfnBa32DI2N-pt1THwhb-uDM-AsWsTbS4EkOLEWMdNgt2LKHcfLZxYFhJ3&amp;s=1\" target=\"_blank\">www.lauwba.com</a>&nbsp;Kuota TERBATAS 10 Orang<br />\r\n#Selama 3 Hari Full Day di Lantai 2 IT Training Center Lauwba Yogyakarta&nbsp;<br />\r\nBerikut materi yang didapatkan selama training.....:<br />\r\n================</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Program ini didesain khusus bagi Anda yang ingin sampai mahir didalam membuat Aplikasi ANDROID&nbsp; dengan dibimbing dari NOL/Dasar dan GRATIS mengulang sampai BISA!. Berikut ini materi yang akan didapatkan selama Training/Kursus&nbsp; :</p>\r\n\r\n<p>PENGENALAN ANDROID<br />\r\n- Apa itu Android<br />\r\n- Manfaat Android<br />\r\n- Versi Android<br />\r\n- Siklus Activity Android</p>\r\n\r\n<p>ANDROID STUDIO<br />\r\n- Pengenalan Dasar Android Studio<br />\r\n- Persyaratan hardware<br />\r\n- Pengenalan Antar Muka Android Studio<br />\r\n- Menggunakan icon<br />\r\n- Menggunakan Theme<br />\r\n- Android Manifest<br />\r\n- Membaca Error Program dengan Logcat</p>\r\n\r\n<p>PROJECT&rdquo; MEMBUAT APLIKASI ANDROID<br />\r\n- Membuat Aplikasi dengan standard google<br />\r\n- Memilih Layout<br />\r\n- Menggunakan Navigation Drawer<br />\r\n- Costumisasi Color pada Action Bar Application<br />\r\n- Penggunaan Intent pada button &amp; image button<br />\r\n- Tombol keluar<br />\r\n- Pengiriman data menggunakan intent<br />\r\n- Pengambilan data dengan menggunakan intent<br />\r\n- Membuat SPLASH SCREEN pada project<br />\r\n- Penggunaan Spinner, Img view &amp; Costum Dialog<br />\r\n- Membuat GALERI IMAGE pada project<br />\r\n- Membuat WEB VIEW pada project<br />\r\n- Membuat RADIO STREAMING pada project<br />\r\n- Membuat VIDEO STREAMING pada project</p>\r\n\r\n<p>-MAPS GPS Location</p>\r\n\r\n<p>PROJECT&rdquo; MEMBUAT APLIKASI PORTAL BERITA<br />\r\n- Penggunaan a query untk akses server dr android<br />\r\n- Perancangan database<br />\r\n- Perancangan koneksi ke server<br />\r\n- Penggunaan library aQuery<br />\r\n- Mengambil data dari server menggunakan AQuery</p>\r\n\r\n<p>FINISHING&rdquo; Instal di HP Android Masing-masing<br />\r\n- Persiapan Upload ke Google Play Store</p>\r\n\r\n<p><strong>PELAKSANAAN :</strong><br />\r\n#TERBATAS 10 Orang</p>\r\n\r\n<p><strong>Pelaksanaan :</strong></p>\r\n\r\n<p>Lantai 2 IT Training Center Lauwba Indonesia,&nbsp;&nbsp;Yogyakarta<br />\r\n<strong>Penutupan</strong>&nbsp; Keliling Wisata Yogyakarta</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>FASILITAS :</strong><br />\r\n- Sertifikat RESMI<br />\r\n- GRATIS Mengulang sampai BISA!</p>\r\n\r\n<p>-GRATIS Ikut Kelas REGULER<br />\r\n- Peserta terbatas 10 Orang &nbsp;full internet<br />\r\n- Aplikasi dan Modul dalam bentuk BUKU</p>\r\n\r\n<p>-GRATIS Penginapan selama 5 hari</p>\r\n\r\n<p>-GRATIS Makan &amp; Snak</p>\r\n\r\n<p>-Snack dan Ngopi sambil Cooding<br />\r\n- Khusus untuk peserta dari/ luar kota disediakan penjemputan apabila ada request.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>KONTRIBUSI :</strong><br />\r\n<strong>PROMO :</strong><br />\r\n*Mahasiswa: Rp 1,5jt<br />\r\n*Umum: Rp 1,9jt<br />\r\n&nbsp;</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/gratis?source=feed_text&amp;story_id=1289489321074431\">#GRATIS</a>&nbsp;Mengulang sampai BISA!</p>\r\n\r\n<p><strong>CARA DAFTAR :</strong></p>\r\n\r\n<p><strong>Langsung Form dibawah ini&nbsp; atau<br />\r\n&nbsp;<strong>langsung hubungi&nbsp; kami</strong><br />\r\n====</strong></p>\r\n\r\n<p>Konsultasi TELP/WA :&nbsp;<strong>08 222 1 777 206</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tag : kursus android,&nbsp;</strong>kursus android jogja, kursus android makassar, training android jogja, training android makassar, jasa pembuatan aplikasi android jogja, jasa pembuatan aplikasi android makassar, jakarta, semarang, surabaya, sumatera. kursus website jogja, kursus website makassar, training website jogja, training website makassar, jasa pembuatan website jogja, jasa pembuatan website makassar, jakarta, semarang, surabaya, sumatera.</p>\r\n', 'bootcamp.png'),
(18, 2, 'PELATIHAN MEMBUAT APLIKASI ANDROID (ANDROID PROGRAMMING)', '<p>Kursus android Jogja &amp; Makassar. Kini kami kembali membuka kelas kursus/training Membuat Aplikasi Android di Yogyakarta dan Makassar setelah sebelumnya kami telah meluluskan -+ 1000 peserta untuk training Android, WEB dan Teknisi yang berasal dari kalangan Dosen, Guru, utusan Instansi Pemerintahan, Utusan Perusahaan dan Mahasiswa yang ada di Jogja, Jawa Tengah, Sumatera, Aceh, Ambon dan Makassar.</p>\r\n\r\n<p>Program ini didesain khusus bagi Anda yang ingin sampai mahir didalam membuat Aplikasi&nbsp;<strong>ANDROID&nbsp;</strong>dengan dibimbing dari NOL/Dasar dan GRATIS mengulang sampai BISA!. Berikut ini materi yang akan didapatkan selama Training/Kursus :</p>\r\n\r\n<p>PENGENALAN ANDROID</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp; Apa itu Android</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Manfaat Android</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Versi Android</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Siklus Activity Android</li>\r\n</ul>\r\n\r\n<p>ANDROID STUDIO</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp; Pengenalan Dasar Android Studio</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Persyaratan hardware</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp; Pengenalan Antar Muka Android Studio</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Menggunakan icon</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Menggunakan Theme</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Android Manifest</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Membaca Error Program dengan&nbsp; Logcat</li>\r\n</ul>\r\n\r\n<p>PROJECT&rdquo;&nbsp; MEMBUAT APLIKASI ANDROID</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp; Membuat Aplikasi dengan standard google</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Memilih Layout</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Menggunakan Navigation Drawer</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Costumisasi Color pada Action Bar Application</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Penggunaan Intent pada button &amp; image button</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Tombol keluar</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Pengiriman data menggunakan intent</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Pengambilan data dengan menggunakan intent</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Membuat&nbsp; SPLASH SCREEN pada project</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Penggunaan Spinner, Img view &amp; Costum Dialog</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Membuat GALERI IMAGE pada project</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Membuat&nbsp; WEB VIEW pada project</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Membuat&nbsp; RADIO STREAMING pada project</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Membuat VIDEO STREAMING pada project</li>\r\n</ul>\r\n\r\n<p>PROJECT&rdquo; MEMBUAT APLIKASI PORTAL BERITA</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp; Penggunaan a query untk akses server dr android</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Perancangan database</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Perancangan koneksi ke server</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Penggunaan library aQuery</li>\r\n	<li>&nbsp;&nbsp;&nbsp; Mengambil data dari server&nbsp; menggunakan AQuery</li>\r\n</ul>\r\n\r\n<p>FINISHING&rdquo; Instal di HP Android Masing-masing</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp; Persiapan Upload ke Google Play Store</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>PELAKSANAAN</strong></p>\r\n\r\n<p><strong>#TERBATAS&nbsp;</strong>8&nbsp;orang/kelas</p>\r\n\r\n<p>&nbsp;<strong>Yogyakarta :</strong></p>\r\n\r\n<p>Lantai 2 IT Training Center Room Lauwba Techno Jl. Kusumanegara No 224 Yogyakarta</p>\r\n\r\n<p><strong>Makassar :</strong></p>\r\n\r\n<p>Jl. Poros BTP Ruko Pujasera No.9 Makassar (100 meter dari gerbang BTP &ldquo;Kantor FULL BRIGHT INSTITUTE<strong>)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>FASILITAS :</strong></p>\r\n\r\n<ul>\r\n	<li>Sertifikat RESMI</li>\r\n	<li>GRATIS Mengulang sampai BISA!</li>\r\n	<li>Peserta terbatas 10org/kelas full internet</li>\r\n	<li>Aplikasi dan Modul dalam bentuk BUKU (+20rb)</li>\r\n	<li>GRATIS Domain dan Hosting(Training WEB)</li>\r\n	<li>Voucher pembuatan website senilai Rp. 300.000</li>\r\n	<li>Perangkat Laptop dan PC + Tools lengkap(training teknisi)</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>#GRATIS Mengulang sampai BISA!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>CARA DAFTAR SEMUA JENIS TRAINING :</strong></p>\r\n\r\n<p><strong>Langsung mengisi form dibawah ini atau langsung datang kekantor kami sebelum kuota FULL.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Konsultasi TELP/WA :&nbsp;<strong>08 222 1 777 206</strong></p>\r\n\r\n<p>&nbsp;Selain kelas REGULER, kami juga membuka kelas IN HOUSE TRAINING dan KELAS PRIVATE, lebih lengkapnya klik dibawah ini :</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Tag :&nbsp;</strong>kursus android jogja,&nbsp; kursus android Yogyakarta, kursus android makassar, training android jogja, training android makassar, jasa pembuatan aplikasi android jogja, jasa pembuatan aplikasi android makassar, jakarta, semarang, klaten, Kalimantan, surabaya, sumatera.</p>\r\n\r\n<p><strong>Tag :&nbsp;</strong>kursus WEB jogja,&nbsp; kursus web Yogyakarta, kursus web makassar, training web jogja, training web makassar, jasa pembuatan web jogja, jasa pembuatan web makassar, jakarta, klaten,&nbsp; semarang, Kalimantan, surabaya, sumatera.</p>\r\n', 'kursus_android_makassar_android_jogja.png'),
(19, 2, 'PELATIHAN MEMBUAT WEBSITE (WEB DESIGN & PROGRAMMING)', '<p>Kursus web jogja &amp; Makassar. Program ini didesain khusus bagi Anda yang ingin sampai mahir didalam membuat&nbsp;<strong>Website&nbsp;</strong>dengan dibimbing dari NOL/Dasar dan GRATIS mengulang sampai BISA!.</p>\r\n\r\n<p>Kini kami membuka kelas kursus/training&nbsp; website di Jogja dan Makassar setelah sebelumnya kami telah meluluskan -+ 500 peserta untuk training Android, WEB dan Teknisi yang berasal dari kalangan Dosen, Guru dan Mahasiswa yang ada di Jogja, Jawa Tengah, Sumatera, Aceh, Ambon dan Makassar.</p>\r\n\r\n<p>Berikut ini materi yang akan didapatkan selama Training/Kursus :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PENGENALAN&nbsp; TENTANG WEBSITE</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Apa itu Website</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Manfaat Website</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Alur Kerja Website</li>\r\n</ul>\r\n\r\n<p>&nbsp;REGISTRASI DOMAIN &amp; HOSTING (SERVER)</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Macam-macang jenis domain dan penggunaannya</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan Antar Muka Cpanel/Hosting</li>\r\n</ul>\r\n\r\n<p>&nbsp;PROJECT&rdquo; MEMBUAT WEBSITE DARI NOL(HTML)</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan HTML &amp; XHTML</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengaturan Text, Membuat Tabel, Form &amp; Frame.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Membuat Link, menyisipkan gambar &amp; multimedia</li>\r\n</ul>\r\n\r\n<p>&nbsp; MEMBANGUN WEBSITE DINAMIS PHP</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan &amp; dasar-dasar PHP</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Membuat fungsi Seleksi &amp; Perulangan</li>\r\n</ul>\r\n\r\n<p>&nbsp;MEMBUAT DATABASE DENGAN MYSQL</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan MYSQL</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Koneksi Data PHP dengan MYSQL</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Penggunaan a query untk akses server dr android</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Perancangan database</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Perancangan koneksi ke server</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Penggunaan library aQuery</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Mengambil data dari server&nbsp; menggunakan AQuery</li>\r\n</ul>\r\n\r\n<p>&nbsp;MEMBUAT HALAMAN ADMIN &amp; TAMPILAN UTAMA&nbsp; WEBSITE DENGAN MENGGUNAKAN PHP &amp; CSS</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Pengenalan CSS</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Mendesain Tampilan Admin(Frond End)</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Mendesain Tampilan Utama website dengan meng.&nbsp;&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Bootstrap (Website Responsive support Mobile)</li>\r\n</ul>\r\n\r\n<p>&nbsp;MEMBUAT APLIKASI ANDROID UNTUK WEBSITE&nbsp; MASING-MASING PESERTA</p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; FINISHING&rdquo; Instal di HP Android&nbsp; dan Persiapan</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp; Upload ke Server Masing-masing.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>PELAKSANAAN</strong></p>\r\n\r\n<p><strong>#TERBATAS 8</strong>&nbsp;orang/kelas</p>\r\n\r\n<p>&nbsp;<strong>Yogyakarta :</strong></p>\r\n\r\n<p>IT Training Center Room Lauwba Techno Jl. Kusumanegara No 224 Yogyakarta</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Makassar :</strong></p>\r\n\r\n<p>Jl. Poros BTP Ruko Pujasera No.9 Makassar (100 meter dari gerbang BTP &ldquo;Kantor FULL BRIGHT INSTITUTE<strong>)</strong></p>\r\n\r\n<p><strong>#Tempat masih dalam konfirmasi</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>FASILITAS :</strong></p>\r\n\r\n<ul>\r\n	<li>Sertifikat RESMI</li>\r\n	<li>GRATIS Mengulang sampai BISA!</li>\r\n	<li>Peserta terbatas 18org/kelas full internet</li>\r\n	<li>Aplikasi dan Modul dalam bentuk BUKU</li>\r\n	<li>GRATIS Domain dan Hosting(Training WEB)</li>\r\n	<li>Voucher pembuatan website senilai Rp. 300.000</li>\r\n	<li>Perangkat Laptop dan PC + Tools lengkap(training teknisi)</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>#GRATIS Mengulang sampai BISA!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>CARA DAFTAR SEMUA JENIS TRAINING :</strong></p>\r\n\r\n<p><strong>Langsung mengisi form dibawah ini atau langsung datang ke kantor kami sebelum KUOTA FULL</strong></p>\r\n\r\n<p><strong>terbatas 8 orang.</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>Konsultasi TELP/WA :&nbsp;<strong>08 222 1 777 206</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tag :&nbsp;</strong>kursus android jogja, kursus android makassar, training android jogja, training android makassar, jasa pembuatan aplikasi android jogja, jasa pembuatan aplikasi android makassar, jakarta, semarang, surabaya, sumatera. kursus website jogja, kursus website makassar, training website jogja, training website makassar, jasa pembuatan website jogja, jasa pembuatan website makassar, jakarta, semarang, surabaya, sumatera.</p>\r\n', 'kursus_dan_jasa_pembuatan_website_jogja_kursus_website_makassar.png'),
(20, 2, 'PELATIHAN TEKNISI LAPTOP DAN PC KELAS ADV', '<p>Kini kami kembali membuka kelas Training &quot;Pelatihan Komputer (Teknisi Laptop &amp; Komputer)&quot; Setelah sebelumnya kami sudah sukses meluluskan peserta training&nbsp; sebanyak -+500&nbsp; peserta yang berasal dari berbagai kalangan seperti dari kalangan Tenaga pengajar Dosen, Guru TIK SMK SMA, Wiraswasta, Instansi Pemerintahan, Mahasiswa, Pelajar, &amp; berasal dari Indonesia timur Makassar sampai Yogyakrta</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Materi Pelatihan yang didapatkan selama 1 bulan:</strong></p>\r\n\r\n<p>1. Servis laptop dan komputer dari DASAR sampai BISA!</p>\r\n\r\n<p>2. Praktek merakit komputer</p>\r\n\r\n<p>3. Pengenal komponen komputer</p>\r\n\r\n<p>4. Troubleshoting pada komputer</p>\r\n\r\n<p>5. Praktek merakit laptop</p>\r\n\r\n<p>6. Pengenalan komponen laptop</p>\r\n\r\n<p>7. Praktek Penggunaan Solder</p>\r\n\r\n<p>8. Praktek Angkat chipset menggunakan BLOWER</p>\r\n\r\n<p>9. Tips &amp; trik perbaikan laptop dan PC mati total</p>\r\n\r\n<p>10. Tips &amp; trik perbaikan laptop dan PC tidak ada tampilan</p>\r\n\r\n<p>11. Tips &amp; trik perbaikan keyboard, baterai, LCD</p>\r\n\r\n<p>12. Praktek setup BIOS</p>\r\n\r\n<p>13. Praktek install OS (Windows 7, 8, &amp; 10)</p>\r\n\r\n<p>14. Praktek basmi virus TANPA ANTI VIRUS</p>\r\n\r\n<p>15. Praktek optimalisasi laptop</p>\r\n\r\n<p>16. Prak mengembalikan data yang hilang/terformat</p>\r\n\r\n<p>17. Ujian (Wajib agar peserta benar - benar teruji)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Testimoni :</strong></p>\r\n\r\n<p><strong>Faisal Malik</strong></p>\r\n\r\n<p><strong>Mahasiswa Ilmu Komputer UGM</strong></p>\r\n\r\n<p>Pelatihannya sangat bermanfaat, jadi menambah pengetahuan saya ttg komputer, terutama bagian hardware, skrg sy sdh berani membongkar komputer sendiri.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Grey E.</strong></p>\r\n\r\n<p><strong>Mahasiswa TI STMIK AKAKOM &amp; Alumni D3 POLITEKNIK NEGERI AMBON</strong></p>\r\n\r\n<p>Dengan adanya pelatihan ini sangat membantu saya. Apalagi dengan biaya cukup murah, dan juga pematerinya merupakan orang yg ahli di bidang tersebut dgn sistem pembelajaran full praktek jadi mudah paham.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Agussalim, S.Pd</strong></p>\r\n\r\n<p><strong>(Guru SMK Negeri Maros Sulsel)</strong></p>\r\n\r\n<p>Alhamdulillah setelah mengikuti pelatihan komputer di LTI, sangat membantu saya mengajar di sekolah dan mendapatkan ilmu baru terutama dalam hal praktek merakit PC/Laptop &amp; menginstal.</p>\r\n\r\n<p>&nbsp;<strong>PELAKSANAAN</strong></p>\r\n\r\n<p><strong>#TERBATAS&nbsp;</strong>12 orang/kelas</p>\r\n\r\n<p>&nbsp;<strong>Yogyakarta :</strong></p>\r\n\r\n<p>IT Training Center Room Lauwba Techno Jl. Laksa Adisucipto No 209 Yogyakarta(samping Ayam Goreng Suharti Ujung Jembatan Janti)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>FASILITAS :</strong></p>\r\n\r\n<ul>\r\n	<li>Sertifikat RESMI</li>\r\n	<li>GRATIS Mengulang sampai BISA!</li>\r\n	<li>Peserta terbatas 18org/kelas full internet</li>\r\n	<li>Aplikasi dan Modul dalam bentuk BUKU</li>\r\n	<li>GRATIS Domain dan Hosting(Training WEB)</li>\r\n	<li>Voucher pembuatan website senilai Rp. 300.000</li>\r\n	<li>Perangkat Laptop dan PC + Tools lengkap(training teknisi)</li>\r\n	<li>Konsultasi service laptop dan PC Gratis (training teknisi)</li>\r\n</ul>\r\n\r\n<p><strong>KONTRIBUSI :</strong></p>\r\n\r\n<p><em><strong>PROMO :</strong></em></p>\r\n\r\n<p>Rp. 2.000.000</p>\r\n\r\n<p>*Mahasiswa: Rp399rb &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>*Umum: Rp 849rb</p>\r\n\r\n<p>#GRATIS Mengulang sampai BISA!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>CARA DAFTAR SEMUA JENIS TRAINING :</strong></p>\r\n\r\n<p><strong>SMS :&nbsp;</strong>(ketik)DAFTAR-LTI(spasi)Nama(spasi)JenisTraining(spasi)WaktuTraining(spasi)AsalKampus/Instansi</p>\r\n\r\n<p><strong>Kirim ke : 08 222 1 777 206</strong></p>\r\n\r\n<p><strong>atau langsung mengisi form dibawah ini :</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tag :&nbsp;</strong>kursus komputer makassar, kursus laptop makassar, kursus teknisis laptop makassar jogja, kursus android jogja, kursus android makassar, training android jogja, training android makassar, jasa pembuatan aplikasi android jogja, jasa pembuatan aplikasi android makassar, jakarta, semarang, surabaya, sumatera. kursus website jogja, kursus website makassar, training website jogja, training website makassar, jasa pembuatan website jogja, jasa pembuatan website makassar, jakarta, semarang, surabaya, sumatera.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '45TRAINING_kurusus_teknisi_laptop_dan_komputerlauwba_techno_jogja_yogyakarta_makassar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `side_image` text NOT NULL,
  `headline` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul_berita`, `konten`, `tanggal`, `side_image`, `headline`) VALUES
(5, 'Ini judul setelah update', '<p>fgdfg</p>\r\n', '2018-10-06 07:49:05', 'amn.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `nama_file`, `deskripsi`, `kategori`, `timestamp`) VALUES
(1, 'M_portofolio', '420101kursus_jan_jasa_pembuatan_aplikasi_android_ist_akprind_yogyakarta_.jpeg', '<p>M_portofolio</p>\r\n', 0, '2018-10-10 03:05:51'),
(4, 'ambah Portofolio', '420101kursus_jan_jasa_pembuatan_aplikasi_android_ist_akprind_yogyakarta_.jpeg', '<h2>ambah Portofolio</h2>\r\n', 1, '2018-10-10 03:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id_posisi` int(11) NOT NULL,
  `nama_posisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id_posisi`, `nama_posisi`) VALUES
(2, 'Ceo and Founder'),
(3, 'IT Trainer & Mobile Apps Developer'),
(4, 'Chief Financial Officer'),
(5, 'Web and Mobile Apps Developer'),
(6, 'Fr. IT Trainer & Developer'),
(7, 'Finance Director'),
(8, 'Administrator'),
(9, 'IT Trainer & Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `side_bar_info`
--

CREATE TABLE `side_bar_info` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `side_bar_info`
--

INSERT INTO `side_bar_info` (`id`, `content`, `id_kelas`) VALUES
(3, '<h2>WEEKDAY</h2>\r\n\r\n<hr />\r\n<table cellpadding=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Mulai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>03 September 2018</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Selesai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>05 Oktober 2018</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hari&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Senin-Jumat</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pukul&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>09:00 - 16:00 WIB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Durasi&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Biaya&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Rp 1990000,-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>Lauwba</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Min. Peserta&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>3 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Confirm&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>0 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Terdaftar &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>3 Person</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>WEEKEND</h2>\r\n\r\n<hr />\r\n<table cellpadding=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Mulai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>12 Oktober 2018</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Selesai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>13 Oktober 2018</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hari&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Sabtu-Minggu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pukul&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>09:00 - 20:00 WIB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Durasi&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Biaya&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Rp 1990000,-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>Lauwba</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Min. Peserta&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>3 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Confirm&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>0 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Terdaftar &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>5 Person</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>PRIVATE TRAINING</h2>\r\n\r\n<hr />\r\n<p>Training yang waktu pelaksanaan, durasi, harga, silabus, tempat dan jumlah pesertanya dapat disesuaikan dengan permintaan anda.</p>\r\n\r\n<p>Silakan hubungi marketing kami untuk keterangan lebih lanjut.</p>\r\n\r\n<h2>KETENTUAN</h2>\r\n\r\n<hr />\r\n<ol>\r\n	<li>Kelas akan dilaksanakan sesuai dengan jadwal jika minimal quota peserta terpenuhi</li>\r\n	<li>Peserta terdaftar adalah peserta yang sudah melakukan pendaftaran dan pembayaran sesuai yang telah ditentukan</li>\r\n	<li>Peserta dimungkinkan membatalkan pendaftaran dengan cara konfirmasi ke pihak Lauwba maksimal 3 (tiga) hari kerja sebelum pelaksanaan</li>\r\n</ol>\r\n\r\n<h2>FASILITAS</h2>\r\n\r\n<hr />\r\n<ol>\r\n	<li>Sertifikat</li>\r\n	<li>Aplikasi &amp; Modul Tutorial</li>\r\n	<li>Voucher Pembuatan Website senilai 300.000</li>\r\n	<li>Langsung terdaftar sebagai anggota KITSS</li>\r\n</ol>\r\n\r\n<h2>KONSULTASI LANGSUNG</h2>\r\n\r\n<hr />\r\n<p>Jika ada yang mau ditanyakan, silakan Hubungi kami</p>\r\n\r\n<p>KONSULTASI 1X24 JAM WA/telp&nbsp;<br />\r\n<em>Fast Respon</em>&nbsp;082221777206</p>\r\n', 17),
(4, '<h2>WEEKDAY</h2>\r\n\r\n<hr />\r\n<table cellpadding=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Mulai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>29 September 2018</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Selesai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>10 November 2018</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hari&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Sabtu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pukul&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>13:00 - 16:00 WIB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Durasi&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>1Bulan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Biaya&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Rp 949000,-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>Lauwba &amp; LKP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Min. Peserta&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>3 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Confirm&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>0 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Terdaftar &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>29 Person</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h2>WEEKEND</h2>\r\n\r\n<hr />\r\n<table cellpadding=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Mulai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>07 Oktober 2018</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Selesai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>27 Oktober 2018</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hari&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Minggu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pukul&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>08:30 - 11:30 WIB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Durasi&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>1Bulan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Biaya&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Rp 949000,-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>Lauwba &amp; LKP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Min. Peserta&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>3 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Confirm&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>0 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Terdaftar &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>898 Person</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>PRIVATE TRAINING</h2>\r\n\r\n<hr />\r\n<p>Training yang waktu pelaksanaan, durasi, harga, silabus, tempat dan jumlah pesertanya dapat disesuaikan dengan permintaan anda.</p>\r\n\r\n<p>Silakan hubungi marketing kami untuk keterangan lebih lanjut.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>KETENTUAN</h2>\r\n\r\n<hr />\r\n<ol>\r\n	<li>Kelas akan dilaksanakan sesuai dengan jadwal jika minimal quota peserta terpenuhi</li>\r\n	<li>Peserta terdaftar adalah peserta yang sudah melakukan pendaftaran dan pembayaran sesuai yang telah ditentukan</li>\r\n	<li>Peserta dimungkinkan membatalkan pendaftaran dengan cara konfirmasi ke pihak Lauwba maksimal 3 (tiga) hari kerja sebelum pelaksanaan</li>\r\n</ol>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h2>FASILITAS</h2>\r\n\r\n<hr />\r\n<ol>\r\n	<li>Sertifikat</li>\r\n	<li>Aplikasi &amp; Modul Tutorial</li>\r\n	<li>Voucher Pembuatan Website senilai 300.000</li>\r\n	<li>Langsung terdaftar sebagai anggota KITSS</li>\r\n</ol>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>KONSULTASI LANGSUNG</h2>\r\n\r\n<hr />\r\n<p>Jika ada yang mau ditanyakan, silakan Hubungi kami</p>\r\n\r\n<p>KONSULTASI 1X24 JAM WA/telp&nbsp;<br />\r\n<em>Fast Respon</em>&nbsp;082221777206</p>\r\n', 18),
(5, '<h2>WEEKDAY</h2>\r\n\r\n<hr />\r\n<table cellpadding=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Mulai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>01 September 2018</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Selesai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>27 Oktober 2018</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hari&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Sabtu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pukul&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>08:30 - 11:30 WIB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Durasi&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>1,5bulan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Biaya&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Rp 949000,-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>Lauwba &amp; LKP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Min. Peserta&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>3 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Confirm&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>0 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Terdaftar &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>48 Person</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h4>WEEKEND</h4>\r\n\r\n<table cellpadding=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Mulai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>09 September 2018</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Selesai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>28 September 2018</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hari&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Minggu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pukul&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>13:00 - 16:00 WIB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Durasi&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>1,5bulan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Biaya&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Rp 949000,-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>Lauwba &amp; LKP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Min. Peserta&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>3 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Confirm&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>1 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Terdaftar &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>94 Person</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h2>PRIVATE TRAINING</h2>\r\n\r\n<hr />\r\n<p>Training yang waktu pelaksanaan, durasi, harga, silabus, tempat dan jumlah pesertanya dapat disesuaikan dengan permintaan anda.</p>\r\n\r\n<p>Silakan hubungi marketing kami untuk keterangan lebih lanjut.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>KETENTUAN</h2>\r\n\r\n<hr />\r\n<ol>\r\n	<li>Kelas akan dilaksanakan sesuai dengan jadwal jika minimal quota peserta terpenuhi</li>\r\n	<li>Peserta terdaftar adalah peserta yang sudah melakukan pendaftaran dan pembayaran sesuai yang telah ditentukan</li>\r\n	<li>Peserta dimungkinkan membatalkan pendaftaran dengan cara konfirmasi ke pihak Lauwba maksimal 3 (tiga) hari kerja sebelum pelaksanaan</li>\r\n</ol>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>FASILITAS</h2>\r\n\r\n<hr />\r\n<ol>\r\n	<li>Sertifikat</li>\r\n	<li>Aplikasi &amp; Modul Tutorial</li>\r\n	<li>Voucher Pembuatan Website senilai 300.000</li>\r\n	<li>Langsung terdaftar sebagai anggota KITSS</li>\r\n</ol>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h2>KONSULTASI LANGSUNG</h2>\r\n\r\n<hr />\r\n<p>Jika ada yang mau ditanyakan, silakan Hubungi kami</p>\r\n\r\n<p>KONSULTASI 1X24 JAM WA/telp&nbsp;<br />\r\n<em>Fast Respon</em>&nbsp;082221777206</p>\r\n', 19),
(6, '<h2>WEEKDAY</h2>\r\n\r\n<hr />\r\n<table cellpadding=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Mulai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>04 Agustus 2018</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Selesai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>12 September 2018</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hari&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Minggu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pukul&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>08:30 - 11:30 WIB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Durasi&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Biaya&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Rp 699000,-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>Lauwba</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Min. Peserta&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>3 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Confirm&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>0 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Terdaftar &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>994 Person</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>WEEKEND</h2>\r\n\r\n<hr />\r\n<table cellpadding=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Mulai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>24 Agustus 2018</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Selesai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>18 September 2018</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hari&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Sabtu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pukul&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>13:00 - 18:00 WIB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Durasi&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>1Bulan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Biaya&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>Rp 699000,-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>\r\n			<p>Lauwba</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Min. Peserta&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>3 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Confirm&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>0 Peserta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Terdaftar &nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:</td>\r\n			<td>165 Person</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>PRIVATE TRAINING</h2>\r\n\r\n<hr />\r\n<p>Training yang waktu pelaksanaan, durasi, harga, silabus, tempat dan jumlah pesertanya dapat disesuaikan dengan permintaan anda.</p>\r\n\r\n<p>Silakan hubungi marketing kami untuk keterangan lebih lanjut.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>KETENTUAN</h2>\r\n\r\n<hr />\r\n<ol>\r\n	<li>Kelas akan dilaksanakan sesuai dengan jadwal jika minimal quota peserta terpenuhi</li>\r\n	<li>Peserta terdaftar adalah peserta yang sudah melakukan pendaftaran dan pembayaran sesuai yang telah ditentukan</li>\r\n	<li>Peserta dimungkinkan membatalkan pendaftaran dengan cara konfirmasi ke pihak Lauwba maksimal 3 (tiga) hari kerja sebelum pelaksanaan</li>\r\n</ol>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h2>FASILITAS</h2>\r\n\r\n<hr />\r\n<ol>\r\n	<li>Sertifikat</li>\r\n	<li>Aplikasi &amp; Modul Tutorial</li>\r\n	<li>Voucher Pembuatan Website senilai 300.000</li>\r\n	<li>Langsung terdaftar sebagai anggota KITSS</li>\r\n</ol>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>KONSULTASI LANGSUNG</h2>\r\n\r\n<hr />\r\n<p>Jika ada yang mau ditanyakan, silakan Hubungi kami</p>\r\n\r\n<p>KONSULTASI 1X24 JAM WA/telp&nbsp;<br />\r\n<em>Fast Respon</em>&nbsp;082221777206</p>\r\n', 20);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `posisi` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `deskripsi`, `posisi`, `foto`) VALUES
(3, 'Hardiansah, M. Kom', '<p>CEO &amp; FOUNDER</p>\r\n', 2, 'trainer_Hardiansah_abu_faruq_Lauwba_Techno_Indonesia.jpg'),
(4, 'Ariesna, S.Si', '<p>CFO</p>\r\n', 4, 'ariesna_s_si_trainer_lauwba.jpg'),
(5, 'Sigit Suryono, M. Kom', '<p>Web and Mobile App Developer</p>\r\n', 5, 'sigit_suryono_s_kom_m_kom_trainer_lauwba.jpg'),
(6, 'M. Arief Firdaus, M. Kom', '<p>Freelance IT Trainer and Developer</p>\r\n', 6, 'm_arief_firdaus_m_kom_trainer_lauwba_techno.jpg'),
(7, 'Febriani Riwis, S.Kom', '<h4><strong>Febriani Riwis, S.Kom</strong></h4>\r\n', 9, 'Febriani_riwis_sari_s_kom_trainer_lauwba_copy.jpg'),
(8, 'Siti Zulaiha, S.Kom', '<h4><strong>Siti Zulaiha, S.Kom</strong></h4>\r\n', 7, 'mbak_siti.jpeg'),
(9, 'Fandi Sujatmiko, S.Kom', '<h4><strong>Fandi Sujatmiko, S.Kom</strong></h4>\r\n', 3, 'fandi_sujatmiko_s_kom_trainer_lauwba_Techno.jpg'),
(10, 'Lina Handayani, S.Kom', '<h4><strong>Lina Handayani, S.Kom</strong></h4>\r\n', 8, 'lina.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama_pemberi` varchar(100) NOT NULL,
  `testimoni` varchar(250) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama_pemberi`, `testimoni`, `foto`, `tanggal`) VALUES
(3, 'Sigit Suryono', '<p>Teman Baikmu</p>\r\n', 'ssss.PNG', '2018-10-09 01:59:26'),
(6, 'Siti Zulaiha', '<p>Terbaik</p>\r\n', 'siti_zul.jpeg', '2018-10-03 08:58:48'),
(7, 'Girin', '<p>Mungkin Yang Terbaik</p>\r\n', 'free-cartoon-giraffe-vector-background.jpg', '2018-10-03 08:59:26'),
(10, 'Febriani Riwis Sari, S, Kom.', '<p>hajima hajiman</p>\r\n', 'siti_zul.jpeg', '2018-10-09 01:56:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_gallery`
--
ALTER TABLE `kategori_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_kelas`
--
ALTER TABLE `kategori_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_portofolio`
--
ALTER TABLE `kategori_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indexes for table `side_bar_info`
--
ALTER TABLE `side_bar_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_gallery`
--
ALTER TABLE `kategori_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_kelas`
--
ALTER TABLE `kategori_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori_portofolio`
--
ALTER TABLE `kategori_portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id_posisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `side_bar_info`
--
ALTER TABLE `side_bar_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
