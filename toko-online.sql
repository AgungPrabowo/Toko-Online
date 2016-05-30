-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2016 at 09:34 
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `username` char(25) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` char(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Concox'),
(2, 'Meitrack'),
(3, 'TopFly'),
(4, 'Server');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` int(50) NOT NULL,
  `id_province` char(2) NOT NULL,
  `id_regencies` char(4) NOT NULL,
  `id_order` char(5) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_depan` char(25) NOT NULL,
  `nama_belakang` char(25) NOT NULL,
  `id_produk` char(50) NOT NULL,
  `harga` char(25) NOT NULL,
  `qty` char(10) NOT NULL,
  `alamat` text NOT NULL,
  `kota_tujuan` char(50) NOT NULL,
  `kode_pos` char(5) NOT NULL,
  `status` char(10) NOT NULL,
  `telp` char(20) NOT NULL,
  `total` char(50) NOT NULL,
  `tgl_beli` char(30) NOT NULL,
  `note-kirim` text,
  `note-transfer` text,
  `kurir` char(20) NOT NULL,
  `layanan` char(20) NOT NULL,
  `biaya_kirim` char(20) NOT NULL,
  `metode-bayar` char(25) NOT NULL,
  `resi` char(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_province`, `id_regencies`, `id_order`, `id_user`, `nama_depan`, `nama_belakang`, `id_produk`, `harga`, `qty`, `alamat`, `kota_tujuan`, `kode_pos`, `status`, `telp`, `total`, `tgl_beli`, `note-kirim`, `note-transfer`, `kurir`, `layanan`, `biaya_kirim`, `metode-bayar`, `resi`) VALUES
(1, '33', '3374', '1996', 0, '', '', '1', '1000000', '2', 'jl.bendungan 1135', '', '50245', 'TERKIRIM', '085225189497', '1000000', '1454676627', '', '', 'jne', 'yes', '10000', '0', ''),
(2, '33', '3374', '1996', 0, '', '', '2', '1000000', '2', 'jl.bendungan 1135', '', '50245', 'TERKIRIM', '085225189497', '1000000', '1454676627', '', '', 'jne', 'yes', '10000', '0', ''),
(3, '0', '0', '1208', 0, 'agung', 'prabowo', 'coba', '1000000', '1', 'jl.bendungan 1135', 'Jakarta Pusat', '50245', '', '085225189794', '1000000', '1462204451', NULL, NULL, 'jne', 'OKE', '\r\n	 											  260', '0', ''),
(4, '0', '0', '8107', 0, 'agung', 'prabowo', 'coba', '1000000', '1', 'jl.bendungan 1135', 'Jakarta Pusat', '50245', '', '085225189794', '1000000', '1462204490', NULL, NULL, 'jne', 'OKE', '\r\n	 											  260', '0', ''),
(5, '0', '0', '8107', 0, 'agung', 'prabowo', 'coba lagi', '1000000', '1', 'jl.bendungan 1135', 'Jakarta Pusat', '50245', '', '085225189794', '1000000', '1462204490', NULL, NULL, 'jne', 'OKE', '\r\n	 											  260', '0', ''),
(6, '0', '0', '854', 0, 'agung', 'prabowo', 'coba', '1000000', '2', 'jl.bendungan 1135', 'Jakarta Barat', '50245', 'TERTUNDA', '085225189794', '2000000', '1462204683', 'coba', 'ahaa', 'jne', 'OKE', '\r\n	 											  260', '0', ''),
(7, '0', '0', '6297', 0, 'agung', 'prabowo', 'coba lagi', '1000000', '2', 'jl.bendungan 1135', 'Jakarta Barat', '50245', 'TERTUNDA', '085225189794', '2000000', '1462204839', 'asasd', 'ada', 'jne', 'JTR250', '\r\n	 											  110', '0', ''),
(8, '0', '0', '2356', 0, 'agung', 'prabowo', 'coba', '1000000', '1', 'jl.bendungan 1135', 'Jakarta Pusat', '50245', 'TERTUNDA', '085225189794', '1000000', '1462205090', 'ada', 'ada', 'jne', 'OKE', '13000', '0', ''),
(9, '0', '0', '2391', 1, 'agung', 'prabowo', 'coba', '1000000', '1', 'jl.bendungan 1135', 'Jakarta Timur', '50245', 'TERTUNDA', '085225189794', '1000000', '1462205567', 'zdad', 'ada', 'jne', 'OKE', '13000', 'MANDIRI', ''),
(10, '33', '3374', '247', 0, 'a', 'a', 'GPS Tracker ET200', '500000', '1', 'a', 'Jakarta Selatan', '1', 'TERTUNDA', '1112', '500000', '1462993893', 'aaa', 'asas', 'jne', 'OKE', '13000', 'MANDIRI', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(10) NOT NULL,
  `id_kategori` int(25) NOT NULL,
  `judul` char(50) NOT NULL,
  `harga` int(25) NOT NULL,
  `stok` int(25) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `judul`, `harga`, `stok`, `isi`, `gambar`, `tanggal`) VALUES
(1, 1, 'TR06', 900000, 10, '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: ''Open Sans'', sans-serif; font-size: 13px; line-height: 20px;">Gps Tracker TR06 versi terbaru ini merupakan keluaran terbaru dari Concox yang menyempurnakan produk TR06 dengan versi sebelumnya. Versi terbarunya memiliki fitur tambahan yaitu bisa mengecek Pulsa melalui SMS.</span></p>\r\n', '1a2f650294374bc30612e8e9c1ec7860.jpg,4d9f095821175dc39b1684805d9e33b5.jpg,bb7ea7a9781d1d8caf8b690dfb7f0b97.jpg,c983ba267c87e2af011537654d9d28b4.jpg,c983ba267c87e2af011537654d9d28b4.jpg', 1461251423),
(2, 1, 'TR02', 800000, 10, '<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	Anda memerlukan gps tracker handal dengan harga terjangkau? bisa di monitor lewat website atau dengan sms dari Gadget/Ponsel Anda. Yang lebih pentingnya lagi yaitu cara pemasangan pun cukup mudah sekali.<br style="box-sizing: border-box; outline: none;" />\r\n	GPS Tracker TR02 hadir melindungi kendaraan Anda khususnya para pemilik sepeda motor / mobil yang khawatir kendaraannya dicuri ataupun dirampok. Dengan Web monitoring www.gps-trace.com</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	GPS Tracker yang telah didesain untuk sepeda motor Anda. Dengan Tegangan Daya yang rendah dan ukuran lebih kecil, memungkinkan Anda memasang GPS Tracker ini pada Sepeda Motor Anda.</p>\r\n', '3da9186bbebfecf4f32c791965fc3952.jpg,a17da73129d77738a64ee7aa8fa469c3.jpg,a91f9091a5b84d58f46188a28a016846.jpg,e40f5d259dd729608c6b240f872e39da.jpg,e40f5d259dd729608c6b240f872e39da.jpg', 1461336776),
(3, 1, 'GT02D', 500000, 101, '<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	Dapatkan GPS Tracker untuk sepeda motor, dengan teknologi Super Saving Power bisa menghemat aki motor Anda sehingga tidak ada lagi gejala aki habis dan motor tidak bisa di starter.&nbsp;<br style="box-sizing: border-box; outline: none;" />\r\n	Dengan fitur Terbaru Super saving Power arus yg dipakai hanya 1 - 2 mA jauh lebih hemat dibanding GPS Tracker tipe lain dan mulai sekarang aki motor Anda tidak akan kehabisan lagi.&nbsp;<br style="box-sizing: border-box; outline: none;" />\r\n	GPS Pelacak Kendaraan GT02D, Kami berperan dalam menyediakan GPS kepada pelanggan setia kami dengan kualitas yang sangat baik.</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	Untuk mobil dengan kaca film V-Cool disarankan menggunakan GPS Tracker GT02D karena sinyalnya lebih kuat dan menggunakan Antena + Chipset Khusus.</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	GPS Tracker yang telah didesain untuk sepeda motor Anda. Dengan Tegangan Daya yang rendah dan ukuran lebih kecil, memungkinkan Anda memasang GPS Tracker ini pada Sepeda Motor Anda.</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	NB: Hasil Test dengan tegangan 12 Volt, arus listrik yang dipakai pada Mode Power Saving adalah 1 Miliampere.</p>\r\n', '1dd11680978d96b9769c795322714a82.jpg,93b599ce4bb1f14ac17ee5b13853335a.jpg,f5b61d4c32f2c39c14bcadf5bbb65bb8.jpg,f5b61d4c32f2c39c14bcadf5bbb65bb8.jpg,f5b61d4c32f2c39c14bcadf5bbb65bb8.jpg', 1462744244),
(4, 2, 'MVT800', 1600000, 20, '<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	Bosan dengan GPS Tracker biasa yang ngaku Canggih??? Kita siapkan!!!<br style="box-sizing: border-box; outline: none;" />\r\n	GPS Tracker Canggih dengan fasilitas Super Lengkap!!!</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	MVT800 adalah salah satu pelacak GPS terbaru yang telah ditambahkan ke merek Meitrack. MVT800 dapat digambarkan sebagai kaliber tinggi GPS tracker, banyak fitur dan aksesoris yang menawarkan. MVT800 sangat sempurna untuk pelacakan armada karena kemampuannya untuk memantau konsumsi bahan bakar dan suhu jika diperlukan.&nbsp;<br style="box-sizing: border-box; outline: none;" />\r\n	<br style="box-sizing: border-box; outline: none;" />\r\n	Melacak kendaraan secara real time, juga memantau apa yang terjadi di dalam kabin dengan fitur listen-in, memiliki fitur percakapan dua arah dengan menambahkan aksesoris speaker dan mikrofon. MVT800, GPS pelacak kendaraan dengan salah satu yang terbaik pelacak yang tahan air untuk kendaraan, mobil ataupun alat berat di pasar saat ini.</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	MVT800 adalah merek baru GPS tracker yang mendukung dua protokol Meitrack dan Meiligao protokol. Mendukung anti-pencurian mobil pribadi dan mobil dinas.</p>\r\n', '1279c5d7822a2d977e4abacd9131b7e3.jpg,e3cc0db9e49db1bda299f19a8550e8c3.jpg,0d661b1d9a4a9d901198e19e7ab4a931.jpg,97ef640a0e1b2df219d253ec1430772b.jpg,97ef640a0e1b2df219d253ec1430772b.jpg', 1462746169),
(5, 2, 'MVT600', 1500000, 20, '<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	Sebuah kendaraan GPS tracker benar-benar unik, yang MVT600 memiliki banyak fungsi dan fitur. The MVT600 dapat memungkinkan seseorang untuk memantau interior kendaraan dengan melampirkan kamera opsional. Kamera ini dapat mengambil snapshot ketika peristiwa tertentu terjadi seperti, mobil mulai bergerak, membuka atau menutup pintu. Jenis lain dari aksesoris dapat ditambahkan seperti sensor bahan bakar, dan bahkan pembaca RFID.</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	sensor suhu sangat penting jika kendaraan memiliki unit pendingin yang perlu dipantau, sensor dapat mengirim peringatan jika suhu tiba-tiba berfluktuasi. RFID memungkinkan untuk kendaraan yang akan dioperasikan oleh individu terpilih yang membawa kartu RFID, ini merupakan salah satu ukuran keamanan yang lebih untuk memiliki kendaraan yang hanya harus dioperasikan oleh personil yang dipilih.</p>\r\n', '49c41eff3101cb6e879e7006a5e3aaf6.jpg,2d1516d8544b8f578e32c30dae845cd6.jpg,f81eb87a5e7ff44101d705fd90b4bf38.jpg,d5557d3527ada33eb9628b8249a4e7a2.jpg,d5557d3527ada33eb9628b8249a4e7a2.jpg', 1462746398),
(6, 2, 'MVT380', 1100000, 20, '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: ''Open Sans'', sans-serif; font-size: 13px; line-height: 20px;">GPS Tracker MVT 380 adalah alat pelacak GPS / GSM / GPRS yang khusus dirancang untuk mengetahui posisi kendaraan secara langsung.Dapat berguna untuk fungsi pengawasan dan pengamanan, serta menghindari dari pencurian kendaraan.</span></p>\r\n', '89ff01176d1dd758c55521a53f268bf9.jpg,b76227033f12fa722f150a6187329837.jpg,37f51beceeb10a3183f17225f7380d9d.jpg,8387558d20e44ec25dd93a5d8eab6801.jpg,8387558d20e44ec25dd93a5d8eab6801.jpg', 1462746523),
(8, 3, 'T8803', 600000, 10, '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: ''Open Sans'', sans-serif; font-size: 13px; line-height: 20px;">GPS TRACKER T8803 INI mempunyai tingkat kestabilan tinggi dari GPS dan GSM Module. Keakuratan perangkat dapat tercapai antara 5-10 meter dan tahan terhadap air.</span></p>\r\n', '6af593ed84c160bd407d58624205fafa.jpg,31d4c87f6821234ff0e610ad5082d5a2.jpg,31d4c87f6821234ff0e610ad5082d5a2.jpg,31d4c87f6821234ff0e610ad5082d5a2.jpg,31d4c87f6821234ff0e610ad5082d5a2.jpg', 1462746634),
(10, 1, 'GPS Tracker GT06N', 800000, 10, '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: ''Open Sans'', sans-serif; font-size: 13px; line-height: 20px;">Gps Tracker GT06N versi terbaru ini merupakan keluaran terbaru dari Concox yang menyempurnakan produk GT06N dengan versi sebelumnya. Versi terbarunya memiliki fitur tambahan yaitu bisa mengecek Pulsa melalui SMS.</span></p>\r\n', '5725a7967b94a662c25538bef15b9c29.jpg,9041de7f9f92eb7b4af94777f86d01b3.jpg,bf1d73b2d2d68a78c5d62962fdc3ca70.jpg,1d571a4b72b3427b988b3b5766c4ec4c.jpg,1d571a4b72b3427b988b3b5766c4ec4c.jpg', 1462747128),
(11, 1, 'GPS Tracker ET200', 500000, 10, '<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	GPS Tracker handal dengan harga yang terjangkau. Bisa di monitor lewat website(server) atau dengan sms dari gadget/ponsel Anda. Cara pemasangan pun cukup mudah sekali. Karena ukurannya yang kecil dan ringan, ET200 mudah untuk disembunyikan dan mudah untuk dipasang.</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	Tegangan lebih rendah dari GPS lain (Posisi standby ET200 0,3 Ampere).<br style="box-sizing: border-box; outline: none;" />\r\n	Cocok untuk Anda khususnya para pemilik sepeda motor.</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	<span style="font-size:14px;"><strong>Fitur ET200 :</strong></span><br style="box-sizing: border-box; outline: none;" />\r\n	- Cek posisi via sms dan webtracking<br style="box-sizing: border-box; outline: none;" />\r\n	- Mematikan dan menghidupkan mesin<br style="box-sizing: border-box; outline: none;" />\r\n	- Laporan mesin mati/hidup (sms dan Web)<br style="box-sizing: border-box; outline: none;" />\r\n	- Laporan SOS bila alat di sabotase<br style="box-sizing: border-box; outline: none;" />\r\n	- Riwayat perjalanan 30hari<br style="box-sizing: border-box; outline: none;" />\r\n	- Lihat kecepatan<br style="box-sizing: border-box; outline: none;" />\r\n	- Pembatasan kecepatan (speed limit)<br style="box-sizing: border-box; outline: none;" />\r\n	- Pembatasan area (geofence)<br style="box-sizing: border-box; outline: none;" />\r\n	- Cek pulsa<br style="box-sizing: border-box; outline: none;" />\r\n	- Backup Baterai<br style="box-sizing: border-box; outline: none;" />\r\n	- Free Server (gps-trace)<br style="box-sizing: border-box; outline: none;" />\r\n	- Water resistance (Tahan cipratan air dan debu).</p>\r\n', '28b3736c53b7e1903e58fdb11940ed1f.jpg,5b8b1b62b06f281bd1fd676922bff976.jpg,5b8b1b62b06f281bd1fd676922bff976.jpg,5b8b1b62b06f281bd1fd676922bff976.jpg,5b8b1b62b06f281bd1fd676922bff976.jpg', 1462747242),
(12, 2, 'VT300', 1100000, 101, '<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	GPS Tracker / GPS Tracking VT 300 adalah alat pelacak GPS / GSM / GPRS yang khusus dirancang untuk mengetahui posisi kendaraan secara langsung. Biasanya berguna untuk fungsi pengawasan dan pengamanan, serta menghindari dari pencurian kendaraan.</p>\r\n<p style="box-sizing: border-box; outline: none; margin: 0px 0px 15px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	Dengan modul GPS dan GPRS kualitas terbaik, GPS Tracker / GPS Tracking VT 300 memiliki kepekaan signal satelit yang sangat baik dan performa stabil. Akurasi yang sangat tepat bahkan di tempat-tempat terpencil.</p>\r\n', 'a14e6178de25ab8110bb7a48ef8365b8.jpg,a14e6178de25ab8110bb7a48ef8365b8.jpg,a14e6178de25ab8110bb7a48ef8365b8.jpg,a14e6178de25ab8110bb7a48ef8365b8.jpg,a14e6178de25ab8110bb7a48ef8365b8.jpg', 1462746556),
(13, 4, 'Cootrack', 0, 0, 'Info lebih lanjut, silahkan hubungi Kami.', 'cootrack1.jpg,cootrack2.jpg,cootrack3.jpg,cootrack4.jpg,', 1462746556),
(14, 4, 'ID-GPSTracker', 0, 0, 'Info lebih lanjut, silahkan hubungi Kami.', 'idgps.jpg,idgps1.jpg,idgps.jpg2,idgps3.jpg,', 1462746556),
(15, 4, 'TRAX.CENTER', 0, 0, 'TRAX Center, server lokal dengan banyak fitur. Seperti; Realtime Update, Push Notification, dan Mail Notification & Remote Cut Off.\r\nDi situs resminya, Anda juga disuguhkan User Interface yang cukup menarik. Adanya video ilustrasi, contoh penggunaan dan bahkan cara pemasangan GPS Tracker memungkin bagi kaum awam mudah memahaminya.\r\n', 'trax.jpg,trax (1).jpg,,,', 0),
(16, 4, 'track.powertrack.co.id', 0, 0, 'POWERTrack, memungkinkan untuk mengakses fitur pengaturan dan pelacakan yang paling umum, memonitor posisi objek di peta, mendapatkan informasi rinci seperti; kecepatan, koordinat, alamat, riwayat pergerakan dan banyak lagi', 'power.jpg,,,,', 0);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE IF NOT EXISTS `provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
('11', 'ACEH\r'),
('12', 'SUMATERA UTARA\r'),
('13', 'SUMATERA BARAT\r'),
('14', 'RIAU\r'),
('15', 'JAMBI\r'),
('16', 'SUMATERA SELATAN\r'),
('17', 'BENGKULU\r'),
('18', 'LAMPUNG\r'),
('19', 'KEPULAUAN BANGKA BELITUNG\r'),
('21', 'KEPULAUAN RIAU\r'),
('31', 'DKI JAKARTA\r'),
('32', 'JAWA BARAT\r'),
('33', 'JAWA TENGAH\r'),
('34', 'DI YOGYAKARTA\r'),
('35', 'JAWA TIMUR\r'),
('36', 'BANTEN\r'),
('51', 'BALI\r'),
('52', 'NUSA TENGGARA BARAT\r'),
('53', 'NUSA TENGGARA TIMUR\r'),
('61', 'KALIMANTAN BARAT\r'),
('62', 'KALIMANTAN TENGAH\r'),
('63', 'KALIMANTAN SELATAN\r'),
('64', 'KALIMANTAN TIMUR\r'),
('65', 'KALIMANTAN UTARA\r'),
('71', 'SULAWESI UTARA\r'),
('72', 'SULAWESI TENGAH\r'),
('73', 'SULAWESI SELATAN\r'),
('74', 'SULAWESI TENGGARA\r'),
('75', 'GORONTALO\r'),
('76', 'SULAWESI BARAT\r'),
('81', 'MALUKU\r'),
('82', 'MALUKU UTARA\r'),
('91', 'PAPUA BARAT\r'),
('94', 'PAPUA\r');

-- --------------------------------------------------------

--
-- Table structure for table `regencies`
--

CREATE TABLE IF NOT EXISTS `regencies` (
  `id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regencies`
--

INSERT INTO `regencies` (`id`, `province_id`, `name`) VALUES
('1101', '11', 'KABUPATEN SIMEULUE\r'),
('1102', '11', 'KABUPATEN ACEH SINGKIL\r'),
('1103', '11', 'KABUPATEN ACEH SELATAN\r'),
('1104', '11', 'KABUPATEN ACEH TENGGARA\r'),
('1105', '11', 'KABUPATEN ACEH TIMUR\r'),
('1106', '11', 'KABUPATEN ACEH TENGAH\r'),
('1107', '11', 'KABUPATEN ACEH BARAT\r'),
('1108', '11', 'KABUPATEN ACEH BESAR\r'),
('1109', '11', 'KABUPATEN PIDIE\r'),
('1110', '11', 'KABUPATEN BIREUEN\r'),
('1111', '11', 'KABUPATEN ACEH UTARA\r'),
('1112', '11', 'KABUPATEN ACEH BARAT DAYA\r'),
('1113', '11', 'KABUPATEN GAYO LUES\r'),
('1114', '11', 'KABUPATEN ACEH TAMIANG\r'),
('1115', '11', 'KABUPATEN NAGAN RAYA\r'),
('1116', '11', 'KABUPATEN ACEH JAYA\r'),
('1117', '11', 'KABUPATEN BENER MERIAH\r'),
('1118', '11', 'KABUPATEN PIDIE JAYA\r'),
('1171', '11', 'KOTA BANDA ACEH\r'),
('1172', '11', 'KOTA SABANG\r'),
('1173', '11', 'KOTA LANGSA\r'),
('1174', '11', 'KOTA LHOKSEUMAWE\r'),
('1175', '11', 'KOTA SUBULUSSALAM\r'),
('1201', '12', 'KABUPATEN NIAS\r'),
('1202', '12', 'KABUPATEN MANDAILING NATAL\r'),
('1203', '12', 'KABUPATEN TAPANULI SELATAN\r'),
('1204', '12', 'KABUPATEN TAPANULI TENGAH\r'),
('1205', '12', 'KABUPATEN TAPANULI UTARA\r'),
('1206', '12', 'KABUPATEN TOBA SAMOSIR\r'),
('1207', '12', 'KABUPATEN LABUHAN BATU\r'),
('1208', '12', 'KABUPATEN ASAHAN\r'),
('1209', '12', 'KABUPATEN SIMALUNGUN\r'),
('1210', '12', 'KABUPATEN DAIRI\r'),
('1211', '12', 'KABUPATEN KARO\r'),
('1212', '12', 'KABUPATEN DELI SERDANG\r'),
('1213', '12', 'KABUPATEN LANGKAT\r'),
('1214', '12', 'KABUPATEN NIAS SELATAN\r'),
('1215', '12', 'KABUPATEN HUMBANG HASUNDUTAN\r'),
('1216', '12', 'KABUPATEN PAKPAK BHARAT\r'),
('1217', '12', 'KABUPATEN SAMOSIR\r'),
('1218', '12', 'KABUPATEN SERDANG BEDAGAI\r'),
('1219', '12', 'KABUPATEN BATU BARA\r'),
('1220', '12', 'KABUPATEN PADANG LAWAS UTARA\r'),
('1221', '12', 'KABUPATEN PADANG LAWAS\r'),
('1222', '12', 'KABUPATEN LABUHAN BATU SELATAN\r'),
('1223', '12', 'KABUPATEN LABUHAN BATU UTARA\r'),
('1224', '12', 'KABUPATEN NIAS UTARA\r'),
('1225', '12', 'KABUPATEN NIAS BARAT\r'),
('1271', '12', 'KOTA SIBOLGA\r'),
('1272', '12', 'KOTA TANJUNG BALAI\r'),
('1273', '12', 'KOTA PEMATANG SIANTAR\r'),
('1274', '12', 'KOTA TEBING TINGGI\r'),
('1275', '12', 'KOTA MEDAN\r'),
('1276', '12', 'KOTA BINJAI\r'),
('1277', '12', 'KOTA PADANGSIDIMPUAN\r'),
('1278', '12', 'KOTA GUNUNGSITOLI\r'),
('1301', '13', 'KABUPATEN KEPULAUAN MENTAWAI\r'),
('1302', '13', 'KABUPATEN PESISIR SELATAN\r'),
('1303', '13', 'KABUPATEN SOLOK\r'),
('1304', '13', 'KABUPATEN SIJUNJUNG\r'),
('1305', '13', 'KABUPATEN TANAH DATAR\r'),
('1306', '13', 'KABUPATEN PADANG PARIAMAN\r'),
('1307', '13', 'KABUPATEN AGAM\r'),
('1308', '13', 'KABUPATEN LIMA PULUH KOTA\r'),
('1309', '13', 'KABUPATEN PASAMAN\r'),
('1310', '13', 'KABUPATEN SOLOK SELATAN\r'),
('1311', '13', 'KABUPATEN DHARMASRAYA\r'),
('1312', '13', 'KABUPATEN PASAMAN BARAT\r'),
('1371', '13', 'KOTA PADANG\r'),
('1372', '13', 'KOTA SOLOK\r'),
('1373', '13', 'KOTA SAWAH LUNTO\r'),
('1374', '13', 'KOTA PADANG PANJANG\r'),
('1375', '13', 'KOTA BUKITTINGGI\r'),
('1376', '13', 'KOTA PAYAKUMBUH\r'),
('1377', '13', 'KOTA PARIAMAN\r'),
('1401', '14', 'KABUPATEN KUANTAN SINGINGI\r'),
('1402', '14', 'KABUPATEN INDRAGIRI HULU\r'),
('1403', '14', 'KABUPATEN INDRAGIRI HILIR\r'),
('1404', '14', 'KABUPATEN PELALAWAN\r'),
('1405', '14', 'KABUPATEN S I A K\r'),
('1406', '14', 'KABUPATEN KAMPAR\r'),
('1407', '14', 'KABUPATEN ROKAN HULU\r'),
('1408', '14', 'KABUPATEN BENGKALIS\r'),
('1409', '14', 'KABUPATEN ROKAN HILIR\r'),
('1410', '14', 'KABUPATEN KEPULAUAN MERANTI\r'),
('1471', '14', 'KOTA PEKANBARU\r'),
('1473', '14', 'KOTA D U M A I\r'),
('1501', '15', 'KABUPATEN KERINCI\r'),
('1502', '15', 'KABUPATEN MERANGIN\r'),
('1503', '15', 'KABUPATEN SAROLANGUN\r'),
('1504', '15', 'KABUPATEN BATANG HARI\r'),
('1505', '15', 'KABUPATEN MUARO JAMBI\r'),
('1506', '15', 'KABUPATEN TANJUNG JABUNG TIMUR\r'),
('1507', '15', 'KABUPATEN TANJUNG JABUNG BARAT\r'),
('1508', '15', 'KABUPATEN TEBO\r'),
('1509', '15', 'KABUPATEN BUNGO\r'),
('1571', '15', 'KOTA JAMBI\r'),
('1572', '15', 'KOTA SUNGAI PENUH\r'),
('1601', '16', 'KABUPATEN OGAN KOMERING ULU\r'),
('1602', '16', 'KABUPATEN OGAN KOMERING ILIR\r'),
('1603', '16', 'KABUPATEN MUARA ENIM\r'),
('1604', '16', 'KABUPATEN LAHAT\r'),
('1605', '16', 'KABUPATEN MUSI RAWAS\r'),
('1606', '16', 'KABUPATEN MUSI BANYUASIN\r'),
('1607', '16', 'KABUPATEN BANYU ASIN\r'),
('1608', '16', 'KABUPATEN OGAN KOMERING ULU SELATAN\r'),
('1609', '16', 'KABUPATEN OGAN KOMERING ULU TIMUR\r'),
('1610', '16', 'KABUPATEN OGAN ILIR\r'),
('1611', '16', 'KABUPATEN EMPAT LAWANG\r'),
('1612', '16', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR\r'),
('1613', '16', 'KABUPATEN MUSI RAWAS UTARA\r'),
('1671', '16', 'KOTA PALEMBANG\r'),
('1672', '16', 'KOTA PRABUMULIH\r'),
('1673', '16', 'KOTA PAGAR ALAM\r'),
('1674', '16', 'KOTA LUBUKLINGGAU\r'),
('1701', '17', 'KABUPATEN BENGKULU SELATAN\r'),
('1702', '17', 'KABUPATEN REJANG LEBONG\r'),
('1703', '17', 'KABUPATEN BENGKULU UTARA\r'),
('1704', '17', 'KABUPATEN KAUR\r'),
('1705', '17', 'KABUPATEN SELUMA\r'),
('1706', '17', 'KABUPATEN MUKOMUKO\r'),
('1707', '17', 'KABUPATEN LEBONG\r'),
('1708', '17', 'KABUPATEN KEPAHIANG\r'),
('1709', '17', 'KABUPATEN BENGKULU TENGAH\r'),
('1771', '17', 'KOTA BENGKULU\r'),
('1801', '18', 'KABUPATEN LAMPUNG BARAT\r'),
('1802', '18', 'KABUPATEN TANGGAMUS\r'),
('1803', '18', 'KABUPATEN LAMPUNG SELATAN\r'),
('1804', '18', 'KABUPATEN LAMPUNG TIMUR\r'),
('1805', '18', 'KABUPATEN LAMPUNG TENGAH\r'),
('1806', '18', 'KABUPATEN LAMPUNG UTARA\r'),
('1807', '18', 'KABUPATEN WAY KANAN\r'),
('1808', '18', 'KABUPATEN TULANGBAWANG\r'),
('1809', '18', 'KABUPATEN PESAWARAN\r'),
('1810', '18', 'KABUPATEN PRINGSEWU\r'),
('1811', '18', 'KABUPATEN MESUJI\r'),
('1812', '18', 'KABUPATEN TULANG BAWANG BARAT\r'),
('1813', '18', 'KABUPATEN PESISIR BARAT\r'),
('1871', '18', 'KOTA BANDAR LAMPUNG\r'),
('1872', '18', 'KOTA METRO\r'),
('1901', '19', 'KABUPATEN BANGKA\r'),
('1902', '19', 'KABUPATEN BELITUNG\r'),
('1903', '19', 'KABUPATEN BANGKA BARAT\r'),
('1904', '19', 'KABUPATEN BANGKA TENGAH\r'),
('1905', '19', 'KABUPATEN BANGKA SELATAN\r'),
('1906', '19', 'KABUPATEN BELITUNG TIMUR\r'),
('1971', '19', 'KOTA PANGKAL PINANG\r'),
('2101', '21', 'KABUPATEN KARIMUN\r'),
('2102', '21', 'KABUPATEN BINTAN\r'),
('2103', '21', 'KABUPATEN NATUNA\r'),
('2104', '21', 'KABUPATEN LINGGA\r'),
('2105', '21', 'KABUPATEN KEPULAUAN ANAMBAS\r'),
('2171', '21', 'KOTA B A T A M\r'),
('2172', '21', 'KOTA TANJUNG PINANG\r'),
('3101', '31', 'KABUPATEN KEPULAUAN SERIBU\r'),
('3171', '31', 'KOTA JAKARTA SELATAN\r'),
('3172', '31', 'KOTA JAKARTA TIMUR\r'),
('3173', '31', 'KOTA JAKARTA PUSAT\r'),
('3174', '31', 'KOTA JAKARTA BARAT\r'),
('3175', '31', 'KOTA JAKARTA UTARA\r'),
('3201', '32', 'KABUPATEN BOGOR\r'),
('3202', '32', 'KABUPATEN SUKABUMI\r'),
('3203', '32', 'KABUPATEN CIANJUR\r'),
('3204', '32', 'KABUPATEN BANDUNG\r'),
('3205', '32', 'KABUPATEN GARUT\r'),
('3206', '32', 'KABUPATEN TASIKMALAYA\r'),
('3207', '32', 'KABUPATEN CIAMIS\r'),
('3208', '32', 'KABUPATEN KUNINGAN\r'),
('3209', '32', 'KABUPATEN CIREBON\r'),
('3210', '32', 'KABUPATEN MAJALENGKA\r'),
('3211', '32', 'KABUPATEN SUMEDANG\r'),
('3212', '32', 'KABUPATEN INDRAMAYU\r'),
('3213', '32', 'KABUPATEN SUBANG\r'),
('3214', '32', 'KABUPATEN PURWAKARTA\r'),
('3215', '32', 'KABUPATEN KARAWANG\r'),
('3216', '32', 'KABUPATEN BEKASI\r'),
('3217', '32', 'KABUPATEN BANDUNG BARAT\r'),
('3218', '32', 'KABUPATEN PANGANDARAN\r'),
('3271', '32', 'KOTA BOGOR\r'),
('3272', '32', 'KOTA SUKABUMI\r'),
('3273', '32', 'KOTA BANDUNG\r'),
('3274', '32', 'KOTA CIREBON\r'),
('3275', '32', 'KOTA BEKASI\r'),
('3276', '32', 'KOTA DEPOK\r'),
('3277', '32', 'KOTA CIMAHI\r'),
('3278', '32', 'KOTA TASIKMALAYA\r'),
('3279', '32', 'KOTA BANJAR\r'),
('3301', '33', 'KABUPATEN CILACAP\r'),
('3302', '33', 'KABUPATEN BANYUMAS\r'),
('3303', '33', 'KABUPATEN PURBALINGGA\r'),
('3304', '33', 'KABUPATEN BANJARNEGARA\r'),
('3305', '33', 'KABUPATEN KEBUMEN\r'),
('3306', '33', 'KABUPATEN PURWOREJO\r'),
('3307', '33', 'KABUPATEN WONOSOBO\r'),
('3308', '33', 'KABUPATEN MAGELANG\r'),
('3309', '33', 'KABUPATEN BOYOLALI\r'),
('3310', '33', 'KABUPATEN KLATEN\r'),
('3311', '33', 'KABUPATEN SUKOHARJO\r'),
('3312', '33', 'KABUPATEN WONOGIRI\r'),
('3313', '33', 'KABUPATEN KARANGANYAR\r'),
('3314', '33', 'KABUPATEN SRAGEN\r'),
('3315', '33', 'KABUPATEN GROBOGAN\r'),
('3316', '33', 'KABUPATEN BLORA\r'),
('3317', '33', 'KABUPATEN REMBANG\r'),
('3318', '33', 'KABUPATEN PATI\r'),
('3319', '33', 'KABUPATEN KUDUS\r'),
('3320', '33', 'KABUPATEN JEPARA\r'),
('3321', '33', 'KABUPATEN DEMAK\r'),
('3322', '33', 'KABUPATEN SEMARANG\r'),
('3323', '33', 'KABUPATEN TEMANGGUNG\r'),
('3324', '33', 'KABUPATEN KENDAL\r'),
('3325', '33', 'KABUPATEN BATANG\r'),
('3326', '33', 'KABUPATEN PEKALONGAN\r'),
('3327', '33', 'KABUPATEN PEMALANG\r'),
('3328', '33', 'KABUPATEN TEGAL\r'),
('3329', '33', 'KABUPATEN BREBES\r'),
('3371', '33', 'KOTA MAGELANG\r'),
('3372', '33', 'KOTA SURAKARTA\r'),
('3373', '33', 'KOTA SALATIGA\r'),
('3374', '33', 'KOTA SEMARANG\r'),
('3375', '33', 'KOTA PEKALONGAN\r'),
('3376', '33', 'KOTA TEGAL\r'),
('3401', '34', 'KABUPATEN KULON PROGO\r'),
('3402', '34', 'KABUPATEN BANTUL\r'),
('3403', '34', 'KABUPATEN GUNUNG KIDUL\r'),
('3404', '34', 'KABUPATEN SLEMAN\r'),
('3471', '34', 'KOTA YOGYAKARTA\r'),
('3501', '35', 'KABUPATEN PACITAN\r'),
('3502', '35', 'KABUPATEN PONOROGO\r'),
('3503', '35', 'KABUPATEN TRENGGALEK\r'),
('3504', '35', 'KABUPATEN TULUNGAGUNG\r'),
('3505', '35', 'KABUPATEN BLITAR\r'),
('3506', '35', 'KABUPATEN KEDIRI\r'),
('3507', '35', 'KABUPATEN MALANG\r'),
('3508', '35', 'KABUPATEN LUMAJANG\r'),
('3509', '35', 'KABUPATEN JEMBER\r'),
('3510', '35', 'KABUPATEN BANYUWANGI\r'),
('3511', '35', 'KABUPATEN BONDOWOSO\r'),
('3512', '35', 'KABUPATEN SITUBONDO\r'),
('3513', '35', 'KABUPATEN PROBOLINGGO\r'),
('3514', '35', 'KABUPATEN PASURUAN\r'),
('3515', '35', 'KABUPATEN SIDOARJO\r'),
('3516', '35', 'KABUPATEN MOJOKERTO\r'),
('3517', '35', 'KABUPATEN JOMBANG\r'),
('3518', '35', 'KABUPATEN NGANJUK\r'),
('3519', '35', 'KABUPATEN MADIUN\r'),
('3520', '35', 'KABUPATEN MAGETAN\r'),
('3521', '35', 'KABUPATEN NGAWI\r'),
('3522', '35', 'KABUPATEN BOJONEGORO\r'),
('3523', '35', 'KABUPATEN TUBAN\r'),
('3524', '35', 'KABUPATEN LAMONGAN\r'),
('3525', '35', 'KABUPATEN GRESIK\r'),
('3526', '35', 'KABUPATEN BANGKALAN\r'),
('3527', '35', 'KABUPATEN SAMPANG\r'),
('3528', '35', 'KABUPATEN PAMEKASAN\r'),
('3529', '35', 'KABUPATEN SUMENEP\r'),
('3571', '35', 'KOTA KEDIRI\r'),
('3572', '35', 'KOTA BLITAR\r'),
('3573', '35', 'KOTA MALANG\r'),
('3574', '35', 'KOTA PROBOLINGGO\r'),
('3575', '35', 'KOTA PASURUAN\r'),
('3576', '35', 'KOTA MOJOKERTO\r'),
('3577', '35', 'KOTA MADIUN\r'),
('3578', '35', 'KOTA SURABAYA\r'),
('3579', '35', 'KOTA BATU\r'),
('3601', '36', 'KABUPATEN PANDEGLANG\r'),
('3602', '36', 'KABUPATEN LEBAK\r'),
('3603', '36', 'KABUPATEN TANGERANG\r'),
('3604', '36', 'KABUPATEN SERANG\r'),
('3671', '36', 'KOTA TANGERANG\r'),
('3672', '36', 'KOTA CILEGON\r'),
('3673', '36', 'KOTA SERANG\r'),
('3674', '36', 'KOTA TANGERANG SELATAN\r'),
('5101', '51', 'KABUPATEN JEMBRANA\r'),
('5102', '51', 'KABUPATEN TABANAN\r'),
('5103', '51', 'KABUPATEN BADUNG\r'),
('5104', '51', 'KABUPATEN GIANYAR\r'),
('5105', '51', 'KABUPATEN KLUNGKUNG\r'),
('5106', '51', 'KABUPATEN BANGLI\r'),
('5107', '51', 'KABUPATEN KARANG ASEM\r'),
('5108', '51', 'KABUPATEN BULELENG\r'),
('5171', '51', 'KOTA DENPASAR\r'),
('5201', '52', 'KABUPATEN LOMBOK BARAT\r'),
('5202', '52', 'KABUPATEN LOMBOK TENGAH\r'),
('5203', '52', 'KABUPATEN LOMBOK TIMUR\r'),
('5204', '52', 'KABUPATEN SUMBAWA\r'),
('5205', '52', 'KABUPATEN DOMPU\r'),
('5206', '52', 'KABUPATEN BIMA\r'),
('5207', '52', 'KABUPATEN SUMBAWA BARAT\r'),
('5208', '52', 'KABUPATEN LOMBOK UTARA\r'),
('5271', '52', 'KOTA MATARAM\r'),
('5272', '52', 'KOTA BIMA\r'),
('5301', '53', 'KABUPATEN SUMBA BARAT\r'),
('5302', '53', 'KABUPATEN SUMBA TIMUR\r'),
('5303', '53', 'KABUPATEN KUPANG\r'),
('5304', '53', 'KABUPATEN TIMOR TENGAH SELATAN\r'),
('5305', '53', 'KABUPATEN TIMOR TENGAH UTARA\r'),
('5306', '53', 'KABUPATEN BELU\r'),
('5307', '53', 'KABUPATEN ALOR\r'),
('5308', '53', 'KABUPATEN LEMBATA\r'),
('5309', '53', 'KABUPATEN FLORES TIMUR\r'),
('5310', '53', 'KABUPATEN SIKKA\r'),
('5311', '53', 'KABUPATEN ENDE\r'),
('5312', '53', 'KABUPATEN NGADA\r'),
('5313', '53', 'KABUPATEN MANGGARAI\r'),
('5314', '53', 'KABUPATEN ROTE NDAO\r'),
('5315', '53', 'KABUPATEN MANGGARAI BARAT\r'),
('5316', '53', 'KABUPATEN SUMBA TENGAH\r'),
('5317', '53', 'KABUPATEN SUMBA BARAT DAYA\r'),
('5318', '53', 'KABUPATEN NAGEKEO\r'),
('5319', '53', 'KABUPATEN MANGGARAI TIMUR\r'),
('5320', '53', 'KABUPATEN SABU RAIJUA\r'),
('5321', '53', 'KABUPATEN MALAKA\r'),
('5371', '53', 'KOTA KUPANG\r'),
('6101', '61', 'KABUPATEN SAMBAS\r'),
('6102', '61', 'KABUPATEN BENGKAYANG\r'),
('6103', '61', 'KABUPATEN LANDAK\r'),
('6104', '61', 'KABUPATEN MEMPAWAH\r'),
('6105', '61', 'KABUPATEN SANGGAU\r'),
('6106', '61', 'KABUPATEN KETAPANG\r'),
('6107', '61', 'KABUPATEN SINTANG\r'),
('6108', '61', 'KABUPATEN KAPUAS HULU\r'),
('6109', '61', 'KABUPATEN SEKADAU\r'),
('6110', '61', 'KABUPATEN MELAWI\r'),
('6111', '61', 'KABUPATEN KAYONG UTARA\r'),
('6112', '61', 'KABUPATEN KUBU RAYA\r'),
('6171', '61', 'KOTA PONTIANAK\r'),
('6172', '61', 'KOTA SINGKAWANG\r'),
('6201', '62', 'KABUPATEN KOTAWARINGIN BARAT\r'),
('6202', '62', 'KABUPATEN KOTAWARINGIN TIMUR\r'),
('6203', '62', 'KABUPATEN KAPUAS\r'),
('6204', '62', 'KABUPATEN BARITO SELATAN\r'),
('6205', '62', 'KABUPATEN BARITO UTARA\r'),
('6206', '62', 'KABUPATEN SUKAMARA\r'),
('6207', '62', 'KABUPATEN LAMANDAU\r'),
('6208', '62', 'KABUPATEN SERUYAN\r'),
('6209', '62', 'KABUPATEN KATINGAN\r'),
('6210', '62', 'KABUPATEN PULANG PISAU\r'),
('6211', '62', 'KABUPATEN GUNUNG MAS\r'),
('6212', '62', 'KABUPATEN BARITO TIMUR\r'),
('6213', '62', 'KABUPATEN MURUNG RAYA\r'),
('6271', '62', 'KOTA PALANGKA RAYA\r'),
('6301', '63', 'KABUPATEN TANAH LAUT\r'),
('6302', '63', 'KABUPATEN KOTA BARU\r'),
('6303', '63', 'KABUPATEN BANJAR\r'),
('6304', '63', 'KABUPATEN BARITO KUALA\r'),
('6305', '63', 'KABUPATEN TAPIN\r'),
('6306', '63', 'KABUPATEN HULU SUNGAI SELATAN\r'),
('6307', '63', 'KABUPATEN HULU SUNGAI TENGAH\r'),
('6308', '63', 'KABUPATEN HULU SUNGAI UTARA\r'),
('6309', '63', 'KABUPATEN TABALONG\r'),
('6310', '63', 'KABUPATEN TANAH BUMBU\r'),
('6311', '63', 'KABUPATEN BALANGAN\r'),
('6371', '63', 'KOTA BANJARMASIN\r'),
('6372', '63', 'KOTA BANJAR BARU\r'),
('6401', '64', 'KABUPATEN PASER\r'),
('6402', '64', 'KABUPATEN KUTAI BARAT\r'),
('6403', '64', 'KABUPATEN KUTAI KARTANEGARA\r'),
('6404', '64', 'KABUPATEN KUTAI TIMUR\r'),
('6405', '64', 'KABUPATEN BERAU\r'),
('6409', '64', 'KABUPATEN PENAJAM PASER UTARA\r'),
('6411', '64', 'KABUPATEN MAHAKAM HULU\r'),
('6471', '64', 'KOTA BALIKPAPAN\r'),
('6472', '64', 'KOTA SAMARINDA\r'),
('6474', '64', 'KOTA BONTANG\r'),
('6501', '65', 'KABUPATEN MALINAU\r'),
('6502', '65', 'KABUPATEN BULUNGAN\r'),
('6503', '65', 'KABUPATEN TANA TIDUNG\r'),
('6504', '65', 'KABUPATEN NUNUKAN\r'),
('6571', '65', 'KOTA TARAKAN\r'),
('7101', '71', 'KABUPATEN BOLAANG MONGONDOW\r'),
('7102', '71', 'KABUPATEN MINAHASA\r'),
('7103', '71', 'KABUPATEN KEPULAUAN SANGIHE\r'),
('7104', '71', 'KABUPATEN KEPULAUAN TALAUD\r'),
('7105', '71', 'KABUPATEN MINAHASA SELATAN\r'),
('7106', '71', 'KABUPATEN MINAHASA UTARA\r'),
('7107', '71', 'KABUPATEN BOLAANG MONGONDOW UTARA\r'),
('7108', '71', 'KABUPATEN SIAU TAGULANDANG BIARO\r'),
('7109', '71', 'KABUPATEN MINAHASA TENGGARA\r'),
('7110', '71', 'KABUPATEN BOLAANG MONGONDOW SELATAN\r'),
('7111', '71', 'KABUPATEN BOLAANG MONGONDOW TIMUR\r'),
('7171', '71', 'KOTA MANADO\r'),
('7172', '71', 'KOTA BITUNG\r'),
('7173', '71', 'KOTA TOMOHON\r'),
('7174', '71', 'KOTA KOTAMOBAGU\r'),
('7201', '72', 'KABUPATEN BANGGAI KEPULAUAN\r'),
('7202', '72', 'KABUPATEN BANGGAI\r'),
('7203', '72', 'KABUPATEN MOROWALI\r'),
('7204', '72', 'KABUPATEN POSO\r'),
('7205', '72', 'KABUPATEN DONGGALA\r'),
('7206', '72', 'KABUPATEN TOLI-TOLI\r'),
('7207', '72', 'KABUPATEN BUOL\r'),
('7208', '72', 'KABUPATEN PARIGI MOUTONG\r'),
('7209', '72', 'KABUPATEN TOJO UNA-UNA\r'),
('7210', '72', 'KABUPATEN SIGI\r'),
('7211', '72', 'KABUPATEN BANGGAI LAUT\r'),
('7212', '72', 'KABUPATEN MOROWALI UTARA\r'),
('7271', '72', 'KOTA PALU\r'),
('7301', '73', 'KABUPATEN KEPULAUAN SELAYAR\r'),
('7302', '73', 'KABUPATEN BULUKUMBA\r'),
('7303', '73', 'KABUPATEN BANTAENG\r'),
('7304', '73', 'KABUPATEN JENEPONTO\r'),
('7305', '73', 'KABUPATEN TAKALAR\r'),
('7306', '73', 'KABUPATEN GOWA\r'),
('7307', '73', 'KABUPATEN SINJAI\r'),
('7308', '73', 'KABUPATEN MAROS\r'),
('7309', '73', 'KABUPATEN PANGKAJENE DAN KEPULAUAN\r'),
('7310', '73', 'KABUPATEN BARRU\r'),
('7311', '73', 'KABUPATEN BONE\r'),
('7312', '73', 'KABUPATEN SOPPENG\r'),
('7313', '73', 'KABUPATEN WAJO\r'),
('7314', '73', 'KABUPATEN SIDENRENG RAPPANG\r'),
('7315', '73', 'KABUPATEN PINRANG\r'),
('7316', '73', 'KABUPATEN ENREKANG\r'),
('7317', '73', 'KABUPATEN LUWU\r'),
('7318', '73', 'KABUPATEN TANA TORAJA\r'),
('7322', '73', 'KABUPATEN LUWU UTARA\r'),
('7325', '73', 'KABUPATEN LUWU TIMUR\r'),
('7326', '73', 'KABUPATEN TORAJA UTARA\r'),
('7371', '73', 'KOTA MAKASSAR\r'),
('7372', '73', 'KOTA PAREPARE\r'),
('7373', '73', 'KOTA PALOPO\r'),
('7401', '74', 'KABUPATEN BUTON\r'),
('7402', '74', 'KABUPATEN MUNA\r'),
('7403', '74', 'KABUPATEN KONAWE\r'),
('7404', '74', 'KABUPATEN KOLAKA\r'),
('7405', '74', 'KABUPATEN KONAWE SELATAN\r'),
('7406', '74', 'KABUPATEN BOMBANA\r'),
('7407', '74', 'KABUPATEN WAKATOBI\r'),
('7408', '74', 'KABUPATEN KOLAKA UTARA\r'),
('7409', '74', 'KABUPATEN BUTON UTARA\r'),
('7410', '74', 'KABUPATEN KONAWE UTARA\r'),
('7411', '74', 'KABUPATEN KOLAKA TIMUR\r'),
('7412', '74', 'KABUPATEN KONAWE KEPULAUAN\r'),
('7413', '74', 'KABUPATEN MUNA BARAT\r'),
('7414', '74', 'KABUPATEN BUTON TENGAH\r'),
('7415', '74', 'KABUPATEN BUTON SELATAN\r'),
('7471', '74', 'KOTA KENDARI\r'),
('7472', '74', 'KOTA BAUBAU\r'),
('7501', '75', 'KABUPATEN BOALEMO\r'),
('7502', '75', 'KABUPATEN GORONTALO\r'),
('7503', '75', 'KABUPATEN POHUWATO\r'),
('7504', '75', 'KABUPATEN BONE BOLANGO\r'),
('7505', '75', 'KABUPATEN GORONTALO UTARA\r'),
('7571', '75', 'KOTA GORONTALO\r'),
('7601', '76', 'KABUPATEN MAJENE\r'),
('7602', '76', 'KABUPATEN POLEWALI MANDAR\r'),
('7603', '76', 'KABUPATEN MAMASA\r'),
('7604', '76', 'KABUPATEN MAMUJU\r'),
('7605', '76', 'KABUPATEN MAMUJU UTARA\r'),
('7606', '76', 'KABUPATEN MAMUJU TENGAH\r'),
('8101', '81', 'KABUPATEN MALUKU TENGGARA BARAT\r'),
('8102', '81', 'KABUPATEN MALUKU TENGGARA\r'),
('8103', '81', 'KABUPATEN MALUKU TENGAH\r'),
('8104', '81', 'KABUPATEN BURU\r'),
('8105', '81', 'KABUPATEN KEPULAUAN ARU\r'),
('8106', '81', 'KABUPATEN SERAM BAGIAN BARAT\r'),
('8107', '81', 'KABUPATEN SERAM BAGIAN TIMUR\r'),
('8108', '81', 'KABUPATEN MALUKU BARAT DAYA\r'),
('8109', '81', 'KABUPATEN BURU SELATAN\r'),
('8171', '81', 'KOTA AMBON\r'),
('8172', '81', 'KOTA TUAL\r'),
('8201', '82', 'KABUPATEN HALMAHERA BARAT\r'),
('8202', '82', 'KABUPATEN HALMAHERA TENGAH\r'),
('8203', '82', 'KABUPATEN KEPULAUAN SULA\r'),
('8204', '82', 'KABUPATEN HALMAHERA SELATAN\r'),
('8205', '82', 'KABUPATEN HALMAHERA UTARA\r'),
('8206', '82', 'KABUPATEN HALMAHERA TIMUR\r'),
('8207', '82', 'KABUPATEN PULAU MOROTAI\r'),
('8208', '82', 'KABUPATEN PULAU TALIABU\r'),
('8271', '82', 'KOTA TERNATE\r'),
('8272', '82', 'KOTA TIDORE KEPULAUAN\r'),
('9101', '91', 'KABUPATEN FAKFAK\r'),
('9102', '91', 'KABUPATEN KAIMANA\r'),
('9103', '91', 'KABUPATEN TELUK WONDAMA\r'),
('9104', '91', 'KABUPATEN TELUK BINTUNI\r'),
('9105', '91', 'KABUPATEN MANOKWARI\r'),
('9106', '91', 'KABUPATEN SORONG SELATAN\r'),
('9107', '91', 'KABUPATEN SORONG\r'),
('9108', '91', 'KABUPATEN RAJA AMPAT\r'),
('9109', '91', 'KABUPATEN TAMBRAUW\r'),
('9110', '91', 'KABUPATEN MAYBRAT\r'),
('9111', '91', 'KABUPATEN MANOKWARI SELATAN\r'),
('9112', '91', 'KABUPATEN PEGUNUNGAN ARFAK\r'),
('9171', '91', 'KOTA SORONG\r'),
('9401', '94', 'KABUPATEN MERAUKE\r'),
('9402', '94', 'KABUPATEN JAYAWIJAYA\r'),
('9403', '94', 'KABUPATEN JAYAPURA\r'),
('9404', '94', 'KABUPATEN NABIRE\r'),
('9408', '94', 'KABUPATEN KEPULAUAN YAPEN\r'),
('9409', '94', 'KABUPATEN BIAK NUMFOR\r'),
('9410', '94', 'KABUPATEN PANIAI\r'),
('9411', '94', 'KABUPATEN PUNCAK JAYA\r'),
('9412', '94', 'KABUPATEN MIMIKA\r'),
('9413', '94', 'KABUPATEN BOVEN DIGOEL\r'),
('9414', '94', 'KABUPATEN MAPPI\r'),
('9415', '94', 'KABUPATEN ASMAT\r'),
('9416', '94', 'KABUPATEN YAHUKIMO\r'),
('9417', '94', 'KABUPATEN PEGUNUNGAN BINTANG\r'),
('9418', '94', 'KABUPATEN TOLIKARA\r'),
('9419', '94', 'KABUPATEN SARMI\r'),
('9420', '94', 'KABUPATEN KEEROM\r'),
('9426', '94', 'KABUPATEN WAROPEN\r'),
('9427', '94', 'KABUPATEN SUPIORI\r'),
('9428', '94', 'KABUPATEN MAMBERAMO RAYA\r'),
('9429', '94', 'KABUPATEN NDUGA\r'),
('9430', '94', 'KABUPATEN LANNY JAYA\r'),
('9431', '94', 'KABUPATEN MAMBERAMO TENGAH\r'),
('9432', '94', 'KABUPATEN YALIMO\r'),
('9433', '94', 'KABUPATEN PUNCAK\r'),
('9434', '94', 'KABUPATEN DOGIYAI\r'),
('9435', '94', 'KABUPATEN INTAN JAYA\r'),
('9436', '94', 'KABUPATEN DEIYAI\r'),
('9471', '94', 'KOTA JAYAPURA\r');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL,
  `id_provinces` char(2) NOT NULL,
  `id_regencies` char(4) NOT NULL,
  `username` char(25) NOT NULL,
  `email` char(25) NOT NULL,
  `pass` text NOT NULL,
  `nama_depan` char(25) NOT NULL,
  `nama_belakang` char(25) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` char(10) NOT NULL,
  `no_telp` char(20) NOT NULL,
  `tgl_daftar` char(20) NOT NULL,
  `aktif` char(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_provinces`, `id_regencies`, `username`, `email`, `pass`, `nama_depan`, `nama_belakang`, `alamat`, `kode_pos`, `no_telp`, `tgl_daftar`, `aktif`) VALUES
(1, '33', '3374', 'agung', 'agungprabowo112@gmail.com', 'e59cd3ce33a68f536c19fedb82a7936f', 'agung', 'prabowo', 'jl.bendungan 1135', '50245', '085225189794', '110696', ''),
(2, '33', '3374', 'agung prabowo', 'agungprabowo112@gmail.com', '68d616be81074a698db50c173542dfa9', 'agung prabowo', '', 'jl.bendungan 1135', '', '085225189749', '1461669978', 'NO'),
(3, '19', '1901', 'admin', 'toptracker05@yahoo.com', '0cc175b9c0f1b6a831c399e269772661', 'agung prabowo', '', 'aa', '', '085225189749', '1461670693', 'NO'),
(4, '0', '0', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '1463059077', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regencies`
--
ALTER TABLE `regencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regencies_province_id_index` (`province_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `regencies`
--
ALTER TABLE `regencies`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
