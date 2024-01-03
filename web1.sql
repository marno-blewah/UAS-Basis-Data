-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 07:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web1`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_add`
--

CREATE TABLE `db_add` (
  `id_data` int(11) NOT NULL,
  `program_studi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dosen_pengampu` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nama_matkul` varchar(50) CHARACTER SET latin1 NOT NULL,
  `semester` int(11) NOT NULL,
  `bobot_sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_add`
--

INSERT INTO `db_add` (`id_data`, `program_studi`, `dosen_pengampu`, `nama_matkul`, `semester`, `bobot_sks`) VALUES
(2, 'D3 Teknik Informatika', 'Sandhika Galih', 'PWEB 2', 3, 4),
(6, 'D3 Teknik Informatika', 'Leonardo Di Caprio', 'Multimedia', 3, 2),
(7, 'D3 Teknik Informatika', 'Hastari Utama', 'Pengolahan Basisdata', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `db_mahasiswa`
--

CREATE TABLE `db_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_mahasiswa`
--

INSERT INTO `db_mahasiswa` (`id`, `nama`, `nim`) VALUES
(3, 'Bagas Nur Faudzi', '22.01.4905'),
(4, 'Vicki Adhi Pratama', '22.01.4906'),
(5, 'Muhammad Kharis Laksamana', '22.01.4907'),
(6, 'Marthin Miladdiyah K.N', '22.01.4909'),
(7, 'Muhammad Raihan Hidayat', '22.01.4910'),
(8, 'Istiqomah', '22.01.4911'),
(9, 'Kholil Ghibran Herwin Syah Putra', '22.01.4912'),
(10, 'Larasati Putri Aisya', '22.01.4913'),
(11, 'Prabowo Bayu Wicaksono', '22.01.4914'),
(12, 'Amelia Dia Ananda', '22.01.4915'),
(13, 'Muhammad Rizqi Ramadhan', '22.01.4916'),
(14, 'Wahyu Imam Ramadhan', '22.01.4917'),
(15, 'Rieski Dhanu Saputra', '22.01.4918'),
(16, 'Ragil Agung Pamungkas', '22.01.4919'),
(17, 'Hanafi Triambudi Ahmad', '22.01.4920'),
(18, 'Adnan Silvan Erusani', '22.01.4921'),
(19, 'Latiffah Syukri\' Alliyah', '22.01.4924'),
(20, 'Alloyciyus Gilang Bima Sakti', '22.01.4925'),
(21, 'Aurelia Raihanisari', '22.01.4926'),
(22, 'Rizki Candra Kurniawan', '22.01.4927'),
(23, 'Bambang Dwi K', '22.01.4928'),
(24, 'Luthfi Adam Setiawan', '22.01.4929'),
(25, 'Arsyad Dhiya\' Ul Akhfiya', '22.01.4930'),
(26, 'Wisnu Eko Saputro', '22.01.4931'),
(27, 'Hendri Cahyadi', '22.01.4932'),
(28, 'Zeky Maulana Fargab', '22.01.4933'),
(29, 'Agia Hana Nabila', '22.01.4934'),
(30, 'Alda Mevia', '22.01.4935'),
(31, 'Agustino Wijayanto', '22.01.4936'),
(32, 'Daniel Firman Ardiansyah', '22.01.4937'),
(33, 'Yordan Bagus Sadewo', '22.01.4938'),
(34, 'Arya Nur Fahrizi Ramadhan', '22.01.4939'),
(35, 'Rizki Abdul Aziz', '22.01.4940'),
(36, 'Tegar Ramadhan Sutirto', '22.01.4941'),
(37, 'Thofa Hesa Alfauzi', '22.01.4942'),
(38, 'Rohma Rifqi Pamungkas', '22.01.4943'),
(39, 'Rizal Septrianto', '22.01.4944'),
(40, 'Dinda Dyah Ayu Putri Pratiwi', '22.01.4945'),
(41, 'Rizky Arliano Vebrian', '22.01.4946'),
(42, 'Ahmad Muhaimin', '22.01.4948'),
(43, 'Ammar Ariefiyanta', '22.01.4949'),
(44, 'Rissa Rizkika', '22.01.4950'),
(45, 'Fajar Nur Said', '22.01.4951'),
(46, 'Alfian Reza S', '22.01.4952'),
(47, 'Ahmad Fajar Wicaksana', '22.01.4953');

-- --------------------------------------------------------

--
-- Table structure for table `db_materi`
--

CREATE TABLE `db_materi` (
  `id_materi` int(11) NOT NULL,
  `judul_materi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `indikator` varchar(255) CHARACTER SET latin1 NOT NULL,
  `deskripsi` text CHARACTER SET latin1 NOT NULL,
  `metode` varchar(255) CHARACTER SET latin1 NOT NULL,
  `bobot_penilaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_materi`
--

INSERT INTO `db_materi` (`id_materi`, `judul_materi`, `indikator`, `deskripsi`, `metode`, `bobot_penilaian`) VALUES
(3, 'Mengenal Codeigniter', 'Mahasiswa mampu memahami codeigniter', 'CodeIgniter adalah sebuah kerangka kerja (framework) pengembangan aplikasi berbasis web yang bersifat open-source dan menggunakan bahasa pemrograman PHP. Tujuan utama dari CodeIgniter adalah menyediakan alat yang sederhana dan efisien untuk membangun aplikasi web dengan cepat.', 'Daring', 10),
(4, 'Mengenal PHP', 'Mahasiswa mampu mendefinisikan PHP', 'PHP adalah singkatan dari \"Hypertext Preprocessor,\" dan itu adalah bahasa pemrograman server-side yang umum digunakan untuk pengembangan web. PHP digunakan untuk membuat halaman web dinamis dengan menyematkan kode PHP ke dalam HTML.', 'Luring', 20);

-- --------------------------------------------------------

--
-- Table structure for table `db_tugas`
--

CREATE TABLE `db_tugas` (
  `id_tugas` int(11) NOT NULL,
  `kode` varchar(128) CHARACTER SET latin1 NOT NULL,
  `matkul` varchar(128) CHARACTER SET latin1 NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_tugas`
--

INSERT INTO `db_tugas` (`id_tugas`, `kode`, `matkul`, `deskripsi`, `deadline`) VALUES
(11, 'DT094', 'Pengolahan Basisdata', 'Membuat Aplikasi', '2024-01-12'),
(12, 'DT152', 'Struktur Data', 'Membuat Binary Tree', '2024-01-10'),
(13, 'DT170', 'PWEB 2', 'Membuat RPS', '2024-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(4, 'Vicki Adhi Pratama', 'vickiadhi@mail.com', 'user.png', '$2y$10$5wqW5rC7L0Pc/nodI2fTCOqHUDxscim5Oz3P5v4CMMdOvoBMJ1Uri', 1, 1, 1703545285),
(5, 'Rieski Dhanu Saputra', 'rieski@mail.com', 'user2.png', '$2y$10$SI9TPWjk4a8XM7RKkuksiOtJ8UMoDdSmNSmX1bckQ0GGP4e9Q5CSy', 2, 1, 1703549885);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Create', 'user/create', 'fas fa-fw fa-folder-plus', 1),
(9, 2, 'List', 'user/list', 'fas fa-fw fa-clipboard-list', 1),
(10, 2, 'Tugas', 'user/tugas', 'fas fa-fw fa-briefcase', 1),
(11, 2, 'Daftar Mahasiswa', 'user/mahasiswa', 'fas fa-fw fa-user-graduate', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_add`
--
ALTER TABLE `db_add`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `db_mahasiswa`
--
ALTER TABLE `db_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_materi`
--
ALTER TABLE `db_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `db_tugas`
--
ALTER TABLE `db_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_add`
--
ALTER TABLE `db_add`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `db_mahasiswa`
--
ALTER TABLE `db_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `db_materi`
--
ALTER TABLE `db_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `db_tugas`
--
ALTER TABLE `db_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
