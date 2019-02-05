-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 03:53 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti`
--

CREATE TABLE `bukti` (
  `id_bukti` int(25) DEFAULT NULL,
  `id_faktur` int(25) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE `faktur` (
  `id_faktur` char(15) NOT NULL,
  `id_pelanggan` char(15) NOT NULL,
  `id_pesanan` char(15) NOT NULL,
  `status` int(2) NOT NULL,
  `total` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`id_faktur`, `id_pelanggan`, `id_pesanan`, `status`, `total`) VALUES
('15424437301508', '215424435224', '1542443730', 2, 105000),
('15424442184338', '215424441974', '1542444218', 1, 220000),
('15424558671971', '215424558474', '1542455867', 0, 105000),
('15425079275447', '215425078974', '1542507927', 0, 105000),
('15425191575666', '215425191424', '1542519157', 0, 105000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` char(15) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat` text,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `alamat`, `email`, `no_hp`) VALUES
('215424435224', 'Bambang', 'Laki-Laki', 'bb RT. 002/001 Parung panjang bogor 16360 jawa barat', 'bambang@gmail.com', '089239219381'),
('215424441974', 'Bejo', 'Laki-Laki', 'nfdf RT. 002/006 PARUNG PANJANG KABUPATEN ACEH SINGKIL 21312 ACEH', 'r@gmail.com', '0328230'),
('215424558474', 'Bejo', 'Laki-Laki', 'Bogor RT. 002/001 PARUNG PANJANG KABUPATEN ACEH SINGKIL 21312 ACEH', 'r@gmail.com', '0328230'),
('215425078974', 'Danu', 'Laki-Laki', 'Jl.Bojong kenyot RT. 002/006 PARUNG PANJANG KABUPATEN ACEH SINGKIL 21312 ACEH', 'r@gmail.com', '0328230'),
('215425191424', 'Dono', 'Laki-Laki', 'nfdf RT. 002/006 PARUNG PANJANG KABUPATEN ACEH SINGKIL 21312 ACEH', 'r@gmail.com', '0328230');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` char(15) DEFAULT NULL,
  `id_pelanggan` char(15) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(9) DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_pelanggan`, `id_product`, `qty`, `harga`, `tgl_pemesanan`) VALUES
('1542443730', '215424435224', 3, 1, 105000, '2018-11-17'),
('1542444218', '215424441974', 6, 1, 115000, '2018-11-17'),
('1542444218', '215424441974', 2, 1, 105000, '2018-11-17'),
('1542455867', '215424558474', 2, 1, 105000, '2018-11-17'),
('1542507927', '215425078974', 3, 1, 105000, '2018-11-18'),
('1542519157', '215425191424', 2, 1, 105000, '2018-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(9) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis_produk` enum('Lokal','Thailand') NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `deskripsi`, `jenis_produk`, `img`) VALUES
(1, 'Aglaonema Bidadari', '160000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', 'animasi daun herbal.png'),
(2, 'Aglaonema Legacy', '105000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(3, 'Pride of Sumatra', '105000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(4, 'Aglaonema Lipstik', '76000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(5, 'Dud Anjamani', '95000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(6, 'Aglaonema Moonlight', '115000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(7, 'Lady Valentine', '108000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(8, 'Red Kochin', '130000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(9, 'Aglaonema Red Ruby', '108000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(11, 'Widuri', '140000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(12, 'aa', '12000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(13, 'ab', '200000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(14, 'ac', '12000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Lokal', ''),
(15, 'ad', '21000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Thailand', ''),
(16, 'ae', '30000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Thailand', ''),
(17, 'af', '80000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Thailand', ''),
(18, 'aj', '90000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Thailand', ''),
(19, 'ak', '60000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Thailand', ''),
(20, 'akj', '56778', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maxime, tenetur. Molestias ratione beatae impedit eligendi quas sapiente cupiditate aut dicta doloribus expedita quisquam, dolorum exercitationem non et est laboriosam! ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis quaerat cupiditate voluptatem aliquam cum unde sapiente sint magni esse consequatur quasi, quisquam ratione. Facilis, dignissimos omnis labore eius ipsa!', 'Thailand', '');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` char(25) DEFAULT NULL,
  `atas_nama` text,
  `nomor_rekening` char(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `atas_nama`, `nomor_rekening`, `nama_bank`) VALUES
('1542463384', 'Ranu Pirman', '2982184', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `resi`
--

CREATE TABLE `resi` (
  `id_resi` int(25) DEFAULT NULL,
  `id_faktur` int(25) DEFAULT NULL,
  `nomor_resi` char(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resi`
--

INSERT INTO `resi` (`id_resi`, `id_faktur`, `nomor_resi`, `tanggal`) VALUES
(1542458995, 2147483647, 'GE76236462174', '2017-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` char(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `status` enum('1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `nama`, `deskripsi`, `img`, `status`) VALUES
('1542217865', 'Hay tayo', 'Tayo', 'admin1542217865.jpg', '2'),
('1542260175', 'Tanaman', 'klalalla', 'admin1542260175.jpg', '1'),
('1542260706', 'TAyoo', 'hahhah', 'admin1542260706.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(25) NOT NULL,
  `Nama` varchar(20) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `Nohp` char(13) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `sandi` varchar(50) NOT NULL,
  `level` enum('Client','Admin') DEFAULT NULL,
  `status_keadaan` enum('1','0') NOT NULL,
  `status_data` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Nama`, `Email`, `Nohp`, `username`, `password`, `sandi`, `level`, `status_keadaan`, `status_data`) VALUES
('3742387362472', 'Ranu', 'Ranu@gmail.com', '082892112717', 'ranu', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Admin', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
