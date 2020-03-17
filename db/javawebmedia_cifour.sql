-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 02:06 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javawebmedia_cifour`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `keywords` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori`, `slug_berita`, `judul_berita`, `isi`, `status_berita`, `jenis_berita`, `keywords`, `gambar`, `hits`, `tanggal_post`, `tanggal`) VALUES
(1, 1, 1, 'kursus-web-development', 'Kursus Web Development', '<p><span style=\"color:rgb(0,0,0);\">Anda akan belajar membangun website profil perusahaan dengan bootstrap, framework JavaScript, PHP framework Codeigniter / Laravel dan database MySQL.</span></p><figure class=\"table\" style=\"width:729.6px;\"><table style=\"background-color:rgb(255, 255, 255);\"><tbody><tr><td>Biaya Kursus Kelas (Workshop)</td><td>: Rp. <strong>2.250.000</strong></td></tr><tr><td>Biaya Kursus Private</td><td>: Rp. <strong>3.250.000</strong></td></tr><tr><td>Durasi Kursus</td><td>: 30 jam (15 Sesi atau 5 s/d 8 Minggu)<br>&nbsp; Rata-rata Seminggu 2-3 kali pertemuan</td></tr></tbody></table></figure><h2>Deskripsi ringkas</h2><p><span style=\"color:rgb(0,0,0);\">Anda akan belajar membangun website profil perusahaan dengan bootstrap, framework JavaScript, PHP framework Codeigniter / Laravel dan database MySQL.</span></p><hr><p>Anda akan belajar membangun website <strong>profil perusahaan</strong> dengan menggunakan bootstrap, framework JavaScript, <i><strong>PHP framework</strong> <strong>Codeigniter / Laravel</strong></i>&nbsp;dan database MySQL.</p><h2>Materi kursus</h2><p>Anda akan mempelajari hal-hal berikut ini:</p><ul><li>Dasar-dasar HTML, CSS dan Bootstrap</li><li>Mengembangkan website profil perusahaan dengan framework Codeigniter / Laraveldan database MySQL</li><li>Integrasi framework JavaScript dengan Codeigniter / Laravel</li></ul><h2>Tujuan Kursus</h2><p>Setelah Anda belajar&nbsp;di&nbsp;<strong>Kursus Web Development</strong>, Anda akan dapat:</p><ul><li>Membuat website profil perusahaan (<i>company profile</i>) dengan framework Codeigniter / Laravel dan database MySQL</li><li>Aplikasi pendaftaran online sederhana</li><li>Bekerja sebagai&nbsp;<strong> Web Programmer&nbsp;</strong>atau&nbsp;<strong>Web Developer dengan keahlian Bootstrap, HTML, CSS, JavaScript dan framework Codeigniter / Larevel.</strong></li></ul><h2>Urutan materi</h2><ol><li>Installasi Software pendukung</li><li>Dasar-dasar HTML, CSS dan Bootstrap</li><li>Membuat&nbsp;<i><strong>Brief project ,&nbsp;</strong></i>yaitu merencanakan website yang akan dibuat sehingga nantinya bisa diwujudkan menjadi website sebenarnya</li><li>Merencanakan, membuat dan mengelola database MySQL</li><li>Integrasi template <i>front end </i>dan <i>back end </i>dengan framework Codeigniter / Laravel</li><li>Authentication (Login, Logout &amp; Proteksi Halaman)</li><li>CRUD <i>(Create, Read, Update &amp; Delete) </i>Dasar</li><li>CRUD Kompleks dengan relasi database</li><li>Laporan PDF dengan MPDF</li><li>Security review atas aplikasi yang telah dibuat</li><li>Upload web ke hosting atau meng-onlinekan website</li></ol><h2>Software yang digunakan</h2><p>XAMPP, Sublime Text/Notepad/Visual Studio, Browser, Aplikasi pengolah gambar, Composer dll.</p>', 'Publish', 'Berita', 'Anda akan belajar membangun website profil perusahaan dengan bootstrap, framework JavaScript, PHP framework Codeigniter / Laravel dan database MySQL.', '1584406577_a3db07fb23cfebe633ec.png', 0, '0000-00-00 00:00:00', '2020-03-17 00:57:03'),
(2, 1, 1, 'kursus-advanced-web-programming', 'Kursus Advanced Web Programming', '<p><span style=\"color:rgb(0,0,0);\">Anda akan belajar membangun web based application dengan bootstrap, framework JavaScript, PHP framework Codeigniter / Laravel dan database MySQL.</span></p><figure class=\"table\" style=\"width:729.6px;\"><table style=\"background-color:rgb(255, 255, 255);\"><tbody><tr><td>Biaya Kursus Kelas (Workshop)</td><td>: Rp. <strong>2.500.000</strong></td></tr><tr><td>Biaya Kursus Private</td><td>: Rp. <strong>3.750.000</strong></td></tr><tr><td>Durasi Kursus</td><td>: 30 jam (15 Sesi atau 5 s/d 8 Minggu)<br>&nbsp; Rata-rata Seminggu 2-3 kali pertemuan</td></tr></tbody></table></figure><hr><h2>Deskripsi ringkas</h2><p><span style=\"color:rgb(0,0,0);\">Anda akan belajar membangun web based application dengan bootstrap, framework JavaScript, PHP framework Codeigniter / Laravel dan database MySQL.</span></p><hr><p>Anda akan belajar membangun <strong>aplikasi berbasis website (</strong><i><strong>web based application</strong></i><strong>)</strong> dengan menggunakan bootstrap, framework JavaScript, <i><strong>PHP framework</strong> <strong>Codeigniter/Laravel </strong></i>dan database MySQL.</p><h2>Materi kursus</h2><p>Anda akan mempelajari hal-hal berikut ini:</p><ul><li>Membangun aplikasi berbasis website</li><li>Membuat laporan dengan berbagai format (PDF, Excel, Word dll)</li><li>Membangun web service (API)</li><li>Membangun aplikasi web dengan berbagai database (MySQL, Oracle, SQL Server, PostgreSQL dll)</li><li><i><strong>Data visualization</strong></i> (format grafik dan peta digital)</li></ul><h2>Tujuan Kursus</h2><p>Setelah Anda belajar&nbsp;di&nbsp;<strong>Kursus Web Development</strong>, Anda akan dapat:</p><ul><li>Membangun aplikasi kompleks berbasis web dengan berbagai database</li><li>Bekerja sebagai&nbsp;<strong> Senior Web Web Developer.</strong></li></ul><h2>Urutan materi</h2><ol><li>Installasi Software pendukung</li><li>Merencanakan, membuat &amp; mengelola database MySQL</li><li>Integrasi template <i>front end </i>dan <i>back end </i>dengan framework PHP</li><li>Authentication (Login, Logout &amp; Proteksi Halaman)</li><li>CRUD <i>(Create, Read, Update &amp; Delete) </i>Dasar</li><li>CRUD Kompleks dengan relasi database</li><li>Membuat berbagai jenis laporan (PDF, Excel, Word, Web Service/API, dll)</li><li>Membuat data visualization (Grafik dan Peta Digital)</li><li>Security review atas aplikasi yang telah dibuat</li><li>Version control dengan Git</li><li>Upload web ke hosting atau meng-onlinekan website</li></ol><h2>Software yang digunakan</h2><p>XAMPP, Sublime Text/Notepad/Visual Studio, Browser, Aplikasi pengolah gambar, Composer dll.</p>', 'Publish', 'Berita', 'Kursus Advanced Web Programming', '1584406683_1d1cfe4cf49c3afe9962.png', 0, '2020-03-16 19:58:03', '2020-03-17 00:58:03'),
(3, 1, 1, 'kursus-wordpress-mastering-cms', 'Kursus Wordpress (Mastering CMS)', '<p><span style=\"color:rgb(0,0,0);\">Belajar Wordpress untuk website company profile, toko online (woocommerce), customisasi template, plugin dan optimasi di mesin pencari.</span></p><figure class=\"table\" style=\"width:729.6px;\"><table style=\"background-color:rgb(255, 255, 255);\"><tbody><tr><td>Biaya Kursus Kelas (Workshop)</td><td>: Rp. <strong>2.000.000</strong></td></tr><tr><td>Biaya Kursus Private</td><td>: Rp. <strong>3.500.000</strong></td></tr><tr><td>Durasi Kursus</td><td>: 24 jam (12 Sesi atau 4 s/d 6 Minggu)<br>&nbsp; Rata-rata Seminggu 2-3 kali pertemuan</td></tr></tbody></table></figure><hr><h2>Deskripsi ringkas</h2><p><span style=\"color:rgb(0,0,0);\">Belajar Wordpress untuk website company profile, toko online (woocommerce), customisasi template, plugin dan optimasi di mesin pencari.</span></p><hr><p>Anda akan belajar membangun website pribadi, perusahaan, <strong>toko online </strong>dengan platform <strong>CMS (</strong><i><strong>Content Management System) </strong></i><strong>Wordpress</strong> dan database MySQL. Kursus ini tidak memerlukan koding yang berat. Cocok untuk yang ingin membuat website instan dengan cepat.</p><h2>Materi kursus</h2><p>Anda akan mempelajari hal-hal berikut ini:</p><ul><li>Dasar-dasar HTML5, CSS3 dan Bootstrap</li><li>Pembuatan website profil perusahaan dengan Wordpress</li><li>Pembuatan website <i><strong>online store</strong></i> dengan Wordpress dengan plugin Woocommerce</li></ul><h2>Tujuan Kursus</h2><p>Setelah Anda belajar&nbsp;di&nbsp;<strong>Kursus Web Design</strong>, Anda dapat:</p><ul><li>Mengelola konten website dengan CMS.</li><li>Membangun website profil perusahaan dan <i><strong>online store</strong></i> dengan CMS Wordpress</li><li>Bekerja sebagai&nbsp;<strong>Content Creator dan Admin Toko Online.</strong></li></ul><h2>Urutan materi</h2><ol><li>Installasi Software pendukung</li><li>Dasar-dasar layouting dengan HTML dan CSS</li><li>Installasi CMS Wordpress</li><li>Pembuatan website <i><strong>company profile</strong></i></li><li>Mengelola plugin, widget dan menu</li><li>Memilih, mengelola dan mengubah template Wordpress</li><li>Pembuatan toko online dengan Plugin Woocommerce</li><li>Pengelolaan konten website, produk dan order toko online</li><li>Optimasi website Wordpress</li><li>Security website Wordpress</li><li>Pendaftaran website <i>Google Webmaster, Google Anayltic dan Google Business</i></li></ol><h2>Software yang digunakan</h2><p>XAMPP, Sublime Text/Notepad/Visual Studio, Browser, Aplikasi pengolah gambar</p>', 'Publish', 'Berita', 'Kursus Wordpress (Mastering CMS)', '1584406894_16a37a34af76ba25ecae.png', 0, '2020-03-16 20:01:34', '2020-03-17 01:01:34'),
(4, 1, 2, 'kursus-statistik-dan-olah-data-spss-dan-stata-paket-basic', 'Kursus Statistik dan Olah Data (SPSS dan STATA) Paket Basic', '<p><span style=\"color:rgb(0,0,0);\">Belajar statistik tingkat dasar dengan SPSS dan STATA. Mulai dari metodologi penelitian, analisis, hingga interpretasi data hasil penelitian.</span></p><figure class=\"table\" style=\"width:729.6px;\"><table style=\"background-color:rgb(255, 255, 255);\"><tbody><tr><td>Biaya Kursus Kelas (Workshop)</td><td>: Rp. <strong>1.000.000</strong></td></tr><tr><td>Biaya Kursus Private</td><td>: Rp. <strong>1.500.000</strong></td></tr><tr><td>Durasi Kursus</td><td>: 6 jam (3 Sesi atau 1 s/d 2 Minggu)<br>&nbsp; Rata-rata Seminggu 2-3 kali pertemuan</td></tr></tbody></table></figure><hr><h2>Deskripsi ringkas</h2><p><span style=\"color:rgb(0,0,0);\">Belajar statistik tingkat dasar dengan SPSS dan STATA. Mulai dari metodologi penelitian, analisis, hingga interpretasi data hasil penelitian.</span></p><hr><h3><strong>Paket Basic - 2 sesi (@ 2,5 jam) atau 1 sesi (300 menit)</strong></h3><p>Tujuan dari kursus ini adalah mampu melakukan manajemen dan analisis data dengan SPSS/Stata dan melakukan analisis deskriptif dan penyajian data serta intrepretasinya.</p><p>Materi Kursus:</p><ul><li>Pengantar manajemen dan analisis data</li><li>Transfer data, Entry data dan Cleaning Data</li><li>Transformasi data (select cases, recode, split, dll)</li><li>Statistik deskriptif untuk data numeric (mean, median, standar deviasi, varians, percentile dll) dan data kategorik (proporsi/persentase)</li><li>Penyajian data (Box Plot, Bar Diagram, Pie, Histogram, dll)</li></ul><p><strong>Bonus: Uji Validitas dan Reliabilitas Instrumen, durasi 1 jam</strong></p><h3><strong>Paket In house Training</strong></h3><p>Paket in house training ini dilakukan sesuai kebutuhan institusi atau personal. Untuk materi dan biaya akan kami ajukan melalui proposal.</p>', 'Publish', 'Berita', 'Kursus Statistik dan Olah Data (SPSS dan STATA) Paket Basic', '1584406955_2eec06e494bc4e91312c.png', 0, '2020-03-16 20:02:35', '2020-03-17 01:02:35'),
(5, 1, 3, 'kursus-desain-grafis', 'Kursus Desain Grafis', '<p><span style=\"color:rgb(0,0,0);\">Belajar desain grafis mulai dari tahap brief project, dengan Adobe Photoshop, Illustrator dan Indesign. Belajar membuat logo, edit foto, banner dan juga layout buku.</span></p><figure class=\"table\" style=\"width:729.6px;\"><table style=\"background-color:rgb(255, 255, 255);\"><tbody><tr><td>Biaya Kursus Kelas (Workshop)</td><td>: Rp. <strong>2.000.000</strong></td></tr><tr><td>Biaya Kursus Private</td><td>: Rp. <strong>3.000.000</strong></td></tr><tr><td>Durasi Kursus</td><td>: 24 jam (12 Sesi atau 4 s/d 6 Minggu)<br>&nbsp; Rata-rata Seminggu 2-3 kali pertemuan</td></tr></tbody></table></figure><hr><h2>Deskripsi ringkas</h2><p><span style=\"color:rgb(0,0,0);\">Belajar desain grafis mulai dari tahap brief project, dengan Adobe Photoshop, Illustrator dan Indesign. Belajar membuat logo, edit foto, banner dan juga layout buku.</span></p><hr><p>Anda akan belajar desain grafis mulai dari tahap brief project, dasar-dasar desain secara manual ataupun dengan program (Photoshop, Illustrator dan Indesign) dan juga praktek langsung bagaimana mencetak dan mengaplikasikan hasil desain tersebut.</p><h3>Materi kursus:</h3><ul><li>Dasar-dasar dan konsep desain</li><li>Merencanakan desain dengan&nbsp;<strong>Visual Diary</strong></li><li>Penggunaan Adobe&nbsp;<strong>Photoshop</strong></li><li>Penggunaan Adobe&nbsp;<strong>Illustrator</strong></li><li>Penggunaan Adobe&nbsp;<strong>Indesign</strong></li><li>Aplikasi hasil desain (cetak dan digital media)</li></ul><h3>Tujuan Kursus</h3><ul><li>Anda dapat merencanakan dan membuat sebuah konsep desain</li><li>Anda dapat membaca sebuah brief project dan mengaplikasikannya</li><li>Menjadi seorang&nbsp;<i><strong>Junior Graphic Designer</strong></i></li></ul><h3>Urutan Materi</h3><ul><li>Installasi Adobe Photoshop, Illustrator dan Adobe Indesign</li><li>Pemahaman Konsep Desain Grafis, Citarasa Warna dan Jenis-jenis gambar</li><li>Pengenalan Adobe Photoshop</li><li>Pengolahan foto menggunakan Photoshop</li><li>Manipulasi dan perbaikan foto dengan Adobe Photoshop</li><li>Pengolahan foto untuk diproses lebih lanjut (misalnya untuk leaflet, brosur, banner, spanduk, xbanner, buku dll)</li><li>Pengenalan Adobe Illustrator</li><li>Membuat logo dengan Adobe Illustrator</li><li>Mendesain kartu nama, spanduk, leaflet, banner, xbanner, sticker, book cover dan lain-lain dengan Adobe Illustrator</li><li>Pengenalan Adobe Indesign</li><li>Membuat layout buku dan penerapannya dengan Adobe Indesign</li><li>Mencetak hasil desain secara digital</li></ul>', 'Publish', 'Berita', 'Kursus Desain Grafis', '1584407033_38b37a2c42e82dbcb205.jpg', 0, '2020-03-16 20:03:53', '2020-03-17 01:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_user`, `slug_kategori`, `nama_kategori`, `urutan`, `hits`, `tanggal`) VALUES
(1, 0, 'Kursus-Web', 'Kursus Web', 1, 0, '2020-03-17 00:56:44'),
(2, 0, 'Kursus-Statistik', 'Kursus Statistik', 2, 0, '2020-03-17 01:03:11'),
(3, 0, 'Kursus-Desain', 'Kursus Desain', 3, 0, '2020-03-17 01:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal`) VALUES
(1, 'Andoyo Cakep Banget', 'javawebmedia@gmail.com', 'andoyo', '02bd2110cf6d75229745092321c819c1c72b91ad', 'Admin', '2020-03-17 00:37:08'),
(2, 'Java Web Media', 'contact@javawebmedia.co.id', 'javawebmedia', 'dc28d4424ece38803650f440d7eb1cb2b3fb6651', 'Admin', '2020-03-16 15:07:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
