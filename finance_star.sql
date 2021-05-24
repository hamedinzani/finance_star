-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2021 pada 17.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance_star`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `position_item`
--

CREATE TABLE `position_item` (
  `id` int(11) NOT NULL,
  `position_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `position_item`
--

INSERT INTO `position_item` (`id`, `position_Name`) VALUES
(1, 'Project Manager'),
(2, 'Top Management'),
(3, 'Finance'),
(4, 'Admin'),
(5, 'Sales'),
(6, 'Team'),
(7, 'Individu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `po_item_itembase`
--

CREATE TABLE `po_item_itembase` (
  `id` int(11) NOT NULL,
  `no_Po` varchar(11) NOT NULL,
  `task` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` enum('Hours','Days','Months','Years') NOT NULL,
  `rate` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `po_item_wordbase`
--

CREATE TABLE `po_item_wordbase` (
  `id` int(11) NOT NULL,
  `no_Po` varchar(11) NOT NULL,
  `locked` int(11) NOT NULL,
  `repetitions` int(11) NOT NULL,
  `fuzzy100` int(11) NOT NULL,
  `fuzzy95` int(11) NOT NULL,
  `fuzzy85` int(11) NOT NULL,
  `fuzzy75` int(11) NOT NULL,
  `fuzzy50` int(11) NOT NULL,
  `new` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_order`
--

CREATE TABLE `purchase_order` (
  `no_Po` varchar(11) NOT NULL,
  `id_Pm` varchar(7) NOT NULL,
  `resource_Name` varchar(50) NOT NULL,
  `resource_Email` varchar(30) NOT NULL,
  `resource_Status` enum('project_Manager','top_Management','finance','admin','sales','team','individu') NOT NULL,
  `mobile_Phone` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `project_Name` varchar(50) NOT NULL,
  `id_quotation` varchar(9) NOT NULL,
  `public_Notes` text NOT NULL,
  `regards` text NOT NULL,
  `footer` text NOT NULL,
  `rate` int(11) NOT NULL,
  `address_Resource` text NOT NULL,
  `grand_Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `quitation_item`
--

CREATE TABLE `quitation_item` (
  `id_q_num` int(11) NOT NULL,
  `no_Quotation` varchar(9) NOT NULL,
  `job_Desc` varchar(30) NOT NULL,
  `volume` int(11) NOT NULL,
  `unit` enum('Hours','Days','Months','Years') NOT NULL,
  `price` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `quotation`
--

CREATE TABLE `quotation` (
  `no_Quotation` varchar(9) NOT NULL,
  `project_Name` varchar(50) NOT NULL,
  `client_Name` varchar(50) NOT NULL,
  `project_Start` date NOT NULL,
  `due_Date` date NOT NULL,
  `client_Email` varchar(50) NOT NULL,
  `public_Notes` text NOT NULL,
  `header` varchar(50) NOT NULL,
  `footer` varchar(50) NOT NULL,
  `total_Cost` int(11) NOT NULL,
  `grand_Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_item`
--

CREATE TABLE `status_item` (
  `id` int(11) NOT NULL,
  `status_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_item`
--

INSERT INTO `status_item` (`id`, `status_Name`) VALUES
(0, 'admin'),
(1, 'Freelance'),
(2, 'In House (Star Jakarta)'),
(3, 'In House (Speequel Jakarta)'),
(4, 'In House (Speequel Malaysia)'),
(5, 'Vendor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_User` varchar(7) NOT NULL,
  `user_Name` varchar(15) NOT NULL,
  `pass_Word` varchar(15) NOT NULL,
  `full_Name` varchar(30) NOT NULL,
  `email_Address` varchar(30) NOT NULL,
  `id_Position` int(11) NOT NULL,
  `id_Status` int(11) NOT NULL,
  `profile_Photo` text NOT NULL,
  `last_Login` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_User`, `user_Name`, `pass_Word`, `full_Name`, `email_Address`, `id_Position`, `id_Status`, `profile_Photo`, `last_Login`, `created_at`, `is_active`) VALUES
('STR001', 'admin', 'passadmin', 'admin finance 1', 'Adminfinance123@gmail.com', 4, 0, 'STR001.PNG', '2021-05-23 15:30:34', '2021-05-19 14:10:03', 0),
('STR002', 'irfan', 'coba11', 'muhammad irfan', 'muhammadirfan.9f@gmail.com', 7, 1, 'STR002.jpg', '2021-05-19 19:56:25', '2021-05-19 17:12:39', 0),
('STR003', 'hamed', '1234', 'Ilham nur inzani', 'ilhaminzani@gmail.com', 5, 2, 'STR003.jpg', '2021-05-20 07:23:22', '2021-05-19 20:00:03', 0),
('STR004', 'po', '1234', 'project manager', 'darewadwgmail.com', 1, 3, 'STR004.jpg', '2021-05-20 05:03:00', '2021-05-20 05:02:49', 0),
('STR005', 'admin', '1234', 'project manager', 'adaadas', 4, 0, 'STR005.JPG', '2021-05-20 07:20:34', '2021-05-20 07:20:34', 0),
('STR006', 'viro', '1234', 'delviro', 'viro@gmail.com', 4, 0, 'STR006.PNG', '2021-05-23 15:32:13', '2021-05-23 15:32:13', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `position_item`
--
ALTER TABLE `position_item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `po_item_itembase`
--
ALTER TABLE `po_item_itembase`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `po_item_wordbase`
--
ALTER TABLE `po_item_wordbase`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`no_Po`);

--
-- Indeks untuk tabel `quitation_item`
--
ALTER TABLE `quitation_item`
  ADD PRIMARY KEY (`id_q_num`);

--
-- Indeks untuk tabel `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`no_Quotation`);

--
-- Indeks untuk tabel `status_item`
--
ALTER TABLE `status_item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_User`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `po_item_itembase`
--
ALTER TABLE `po_item_itembase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `po_item_wordbase`
--
ALTER TABLE `po_item_wordbase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `quitation_item`
--
ALTER TABLE `quitation_item`
  MODIFY `id_q_num` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
