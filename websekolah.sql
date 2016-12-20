-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 06:29 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pend_terakhir` varchar(5) NOT NULL,
  `mata_pelajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `pend_terakhir`, `mata_pelajaran`) VALUES
('234354327654326543', 'Mark Nobel', 'S3', '2'),
('436864356753245965', 'Bambang Susatyo', 'S2', '4'),
('52895289531250', 'Juliah', 'S2', '14');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nm_kolom` varchar(25) DEFAULT NULL,
  `nama_mapel` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nm_kolom`, `nama_mapel`) VALUES
(1, 'pem_desktop', 'Pemrogramman Desktop'),
(2, 'pbo', 'Pemrogramman Berbasis Objek'),
(3, 'jarkom', 'Jaringan Komputer'),
(4, 'pem_web', 'Pemrogramman Web'),
(5, 'pem_mobile', 'Pemrogramman Mobile'),
(6, 'leg_aspek', 'Legal Aspek Produk TI'),
(7, 'pem_multimedia', 'Pemrogramman Multimedia'),
(8, 'bisnis_tik', 'Bisnis TIK'),
(9, 'bhs_ing_bisnis', 'Bahasa Inggris Bisnis'),
(10, 'komp_modern', 'Komputasi Modern'),
(11, 'dasar_pemasaran', 'Dasar Pemasaran'),
(12, 'kewirausahaan', 'Kewirausahaan'),
(13, 'perilaku_konsumen', 'Perilaku Konsumen'),
(14, 'man_proyek', 'Manajemen Proyek'),
(15, 'etika_bisnis', 'Etika Bisnis'),
(16, 'stat_dasar', 'Statistika Dasar'),
(17, 'imd', 'Interactive Media Design'),
(18, 'graphic_design', 'Graphic Design'),
(19, 'konsep_tek', 'Konsep Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `nis` char(20) NOT NULL,
  `pem_desktop` varchar(1) DEFAULT NULL,
  `pbo` char(1) DEFAULT NULL,
  `jarkom` char(1) DEFAULT NULL,
  `pem_web` char(1) DEFAULT NULL,
  `pem_mobile` char(1) DEFAULT NULL,
  `leg_aspek` char(1) DEFAULT NULL,
  `pem_multimedia` char(1) DEFAULT NULL,
  `bisnis_tik` char(1) DEFAULT NULL,
  `bhs_ing_bisnis` char(1) DEFAULT NULL,
  `komp_modern` char(1) DEFAULT NULL,
  `dasar_pemasaran` char(1) DEFAULT NULL,
  `kewirausahaan` char(1) DEFAULT NULL,
  `perilaku_konsumen` char(1) DEFAULT NULL,
  `man_proyek` char(1) DEFAULT NULL,
  `etika_bisnis` char(1) DEFAULT NULL,
  `stat_dasar` char(1) DEFAULT NULL,
  `imd` char(1) DEFAULT NULL,
  `graphic_design` char(1) DEFAULT NULL,
  `konsep_tek` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nis`, `pem_desktop`, `pbo`, `jarkom`, `pem_web`, `pem_mobile`, `leg_aspek`, `pem_multimedia`, `bisnis_tik`, `bhs_ing_bisnis`, `komp_modern`, `dasar_pemasaran`, `kewirausahaan`, `perilaku_konsumen`, `man_proyek`, `etika_bisnis`, `stat_dasar`, `imd`, `graphic_design`, `konsep_tek`) VALUES
('16001', 'C', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('16002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('16009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('16011', NULL, 'E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('16012', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `created_at`) VALUES
(2, 'Cegah "Bully", Instagram Rilis Fitur Tutup Komentar', 'KOMPAS.com - Instagram punya fitur baru untuk mencegah perundungan (bully) di dunia cyber. Fitur yang dimaksud adalah sebuah pilihan untuk menutup kolom komentar. \n\nTujuannya agar pengguna bisa menghindarkan diri dari komentar-komentar yang tidak menyenangkan.\n\nHal menariknya, penutupan kolom komentar tersebut bukan diberlakukan secara spesifik per foto yang diunggah. Artinya, pengguna bisa membagi mana foto yang boleh dan tidak dikomentari.\n\nSelain itu ada juga fitur tambahan lain, yakni pilihan untuk menghapus followers dari akun pribadi (tertutup) dan ikon like untuk komentar pengguna lain.\n\nAkan tetapi, saat ini belum semua pengguna bisa mengakses fitur tersebut. Fitur baru itu baru bisa diakses oleh akun-akun terpilih.\n\nSebagaimana dilansir KompasTekno dari The Verge, Kamis (8/12/2016), Instagram berencana untuk merilis fitur tersebut secara bertahap, sehingga dalam beberapa pekan mendatang seluruh pengguna sudah bisa memakainya\n\nSebagai pelengkap fitur baru, anak usaha Facebook ini juga membuat sebuah alat pelaporan anonim. Alat ini berguna untuk melaporkan pengguna yang terindikasi menyakiti dirinya sendiri.\n\n“Jika Anda yakin bahwa orang yang Anda sayangi itu mungkin sedang berniat menyakiti diri sendiri, Anda bisa melaporkannya secara anonim. Kami akan menghubungkan teman Anda itu dengan organisasi yang bisa membantu,” tulis CEO Instagram Kevin Systrom, dalam sebuah blog.', '2016-12-07'),
(4, 'Miracle Juara Programming Mendunia', 'Para pembuat foto asal Newcastle University menamakan proyek yang dikerjakannya itu dengan Touch Research Project. Karya foto mereka diberi tajuk Lightpainting Wi-Fi.\r\nSelasa (6/12/2016), menggunakan sensor pintar dan kamera untuk menangkap sinyal Wi-Fi. Touch Research Project menggunakan teknik fotografi long exposure dengan sensor RSSI untuk melihat sinyal Wi-Fi.\r\n\r\nDari foto terlihat, apabila seseorang sedang dikelilingi sinyal Wi-Fi, berarti ia sedang berselancar di dunia maya menggunakan jaringan tersebut.juara, tapi ditengah jalan dia sakit perut, jadinya juaranya diserahin ke miracle', '2016-12-07'),
(5, 'Sinyal Wi-Fi Bisa Difoto, Ini Penampakannya', 'KOMPAS.com — Ingin melihat seperti apa rupa sinyal Wi-Fi itu sebenarnya? Jika ya, sekelompok orang di Newcastle University berhasil memotret penampakan sinyal Wi-Fi dengan teknik fotografi.\r\n\r\nWi-Fi yang dimaksud di sini bukan perangkat untuk memancarkan sinyal, melainkan sinyal yang dipancarkan. Selama ini sinyal tersebut memang tak terlihat mata telanjang.\r\n\r\nPara pembuat foto asal Newcastle University itu menamakan proyek yang dikerjakannya itu dengan Touch Research Project. Karya foto mereka diberi tajuk Lightpainting Wi-Fi.\r\n\r\nGrup tersebut, sebagaimana KompasTekno rangkum dari Pocket-Lint, Selasa (6/12/2016), menggunakan sensor pintar dan kamera untuk menangkap sinyal Wi-Fi. Touch Research Project menggunakan teknik fotografi long exposure dengan sensor RSSI untuk melihat sinyal Wi-Fi.\r\n\r\nDari foto terlihat, apabila seseorang sedang dikelilingi sinyal Wi-Fi, berarti ia sedang berselancar di dunia maya menggunakan jaringan tersebut.\r\n\r\nWarna-warna dari sinyal Wi-Fi dibagi menjadi dua, yakni biru dan merah. Apabila sinyal menampilkan warna merah, berarti sinyal sedang kuat. Sebaliknya, jika sinyal berwarna biru, berarti sinyal sedang lemah.\r\n\r\nBerikut beberapa foto karya Touch Research Project yang menangkap penampakan sinyal Wi-Fi di beberapa tempat.', '2016-12-08'),
(6, 'halo', 'apa', '2016-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` char(20) NOT NULL,
  `nama` varchar(70) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tmpt_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `thn_masuk` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `email`, `thn_masuk`) VALUES
('16002', 'Jack O'' Permana', 'Jl. Situ Gede 2, Jakarta Selatan', 'Jakarta', '1987-12-25', 'L', 'jack@ganteng.com', '2016'),
('16003', 'Garuk Sutah', 'Jl. Singke 2 no 12, Jakarta Utara', 'Jakarta', '1991-06-20', 'L', 'garuk@sambel.com', '2016'),
('16004', 'Sultan Hady', 'Jl. Air Got no 2, Jakarta Utara', 'Bontang', '1983-04-09', 'L', 'sultan@rs.com', '2016'),
('16005', 'Navia Velania', 'Jl. Sumbang Bordir no 13, Jakarta Timur', 'Utah', '1990-06-26', 'L', 'velanavia@gmail.com', '2016'),
('16006', 'Dahlan Pangestu', 'Jl. Suta no 3, jakarta selatan', 'Bontang', '1991-03-31', 'L', 'dahlan@iscan.com', '2016'),
('16007', 'Hana Milia', 'Jl. Banjar 3, Jakarta Barat', 'Gorontalo', '1987-04-11', 'P', 'hana@gmail.com', '2016'),
('16008', 'Harun Walidain', 'Boulevard of Broken Dream', 'Lenteng Agung', '1980-09-29', 'L', 'harun@nurah.com', '2016'),
('16010', 'indra', 'jakarta', 'cirebon', '1971-06-28', 'L', 'dagdasd@qwe.com', '2016'),
('16011', 'Abdul Azizi', 'Jakarta timur barat', 'Jakarta tenggara', '1995-12-06', 'L', 'aziziabdul@icloud.com', '2016'),
('16012', 'Roby', 'Jakarta', 'Manado', '1970-06-30', 'L', 'sfdsdf@wsdsd.com', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `kunci` int(11) NOT NULL,
  `nis` char(20) DEFAULT NULL,
  `nip` char(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_jenis_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kunci`, `nis`, `nip`, `username`, `password`, `id_jenis_user`) VALUES
(2, NULL, NULL, 'admin', 'admin', 0),
(9, '16001', NULL, '16001', '16001', 1),
(12, NULL, '234354327654326543', '234354327654326543', '234354327654326543', 2),
(13, '16009', NULL, '16009', '16009', 1),
(14, '16011', NULL, '16011', '16011', 1),
(15, '16002', NULL, '16002', '16002', 1),
(16, '16012', NULL, '16012', '16012', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kunci`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kunci` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
