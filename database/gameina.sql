-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 12:43 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameina`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(64) NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `email_admin` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$e8aQ6j6wg/lh8/Y71sVo6ukh7nF/YYLY.SPUAtEvncoq1fEzVhtFS');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` int(64) NOT NULL,
  `nama_game` varchar(64) NOT NULL,
  `id_publisher` int(64) NOT NULL,
  `nama_publisher` varchar(64) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `kategori` varchar(16) NOT NULL,
  `harga` varchar(64) NOT NULL,
  `gambar_game` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `nama_game`, `id_publisher`, `nama_publisher`, `deskripsi_produk`, `kategori`, `harga`, `gambar_game`) VALUES
(12, 'Mobile Legend', 25, 'Syauqi Zaidan', 'LOL', 'Multiplayer', '222222', 'giphy.gif'),
(13, 'Mobile Legend', 25, 'Syauqi Zaidan', 'LOL', 'Battle Royale', '121221', 'giphy1.gif');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(64) NOT NULL,
  `id_game` int(64) NOT NULL,
  `harga` varchar(64) NOT NULL,
  `jumlah` varchar(64) NOT NULL,
  `tanggal` varchar(64) NOT NULL,
  `id_user` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(255) NOT NULL,
  `id` int(64) NOT NULL,
  `id_game` int(64) NOT NULL,
  `jumlah_pembayaran` varchar(64) NOT NULL,
  `nama_user` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id`, `id_game`, `jumlah_pembayaran`, `nama_user`) VALUES
(1113, 70, 123, '123', '123'),
(1114, 70, 10, '100.000', 'Syauqi Zaidan Khairan Khalaf'),
(1115, 70, 10, '100.000', 'Syauqi Zaidan Khairan Khalaf'),
(1116, 70, 10, '100.000', 'Syauqi Zaidan Khairan Khalaf'),
(1117, 70, 10, '100.000', 'Syauqi Zaidan Khairan Khalaf'),
(1118, 70, 10, '100.000', 'Syauqi Zaidan Khairan Khalaf'),
(1119, 70, 10, '100.000', 'Syauqi Zaidan Khairan Khalaf'),
(1120, 70, 10, '100.000', 'Syauqi Zaidan Khairan Khalaf');

-- --------------------------------------------------------

--
-- Table structure for table `playgames`
--

CREATE TABLE `playgames` (
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `gambar_game` varchar(255) NOT NULL,
  `deskripsi_game` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `link_game` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playgames`
--

INSERT INTO `playgames` (`id_game`, `nama_game`, `gambar_game`, `deskripsi_game`, `kategori`, `link_game`) VALUES
(1, 'Cube Ninja', 'cnn1.jpg', 'Game tentang ninja laki lakis', 'arcade', 'ninja.html'),
(2, 'Birdy Rush', 'birdy_rush.png', 'Game tentang burung', 'arcade', 'bird.html'),
(3, 'Olympic Rio', 'olympic.jpg', 'Permainan Sport Terseru dan populer telah hadir!', 'populer', 'olympic.html'),
(4, 'Cut The Rope', 'header.jpg', 'Bermain dan beri makan omnom! si alien lucu .', 'populer', 'cut_the_rope.html'),
(5, 'Turbo Racing', 'turbo_racing.jpg', 'Permainan Balapan Menegangkan ! seru dan menarik!', 'populer', 'turbo_racing.html'),
(6, '8 Ball Pool', 'ball_pool.jpg', 'Mainkan game billiar terpopuler di sini ! mainkan gratis!', 'populer', 'ball_pool.html'),
(7, 'Red Code', 'red.jpg', 'Game perang terseru dan terkeren! yuk main sekarang dude!', 'populer', 'red_code.html'),
(8, 'Monkey Kick', 'monkey_kick.jpg', 'Tendang MONYET yang lucu dan pikakeheulen jiga kamu :)', 'populer', 'monkey_kick.html'),
(9, 'Bloxorz', 'bloxorz.png', 'Mystery box oriented game yang bikin kamu pusing dan menantang!', 'populer', 'bloxorz.html'),
(10, 'Basketball', 'basket.jpg', 'Mainkan olahraga basket dengan mudah disini!', 'populer', 'basket.html'),
(11, 'Free Falling', 'free_falling.jpg', 'Rasakan sensasi parkour yang seru dan menegangkan disini!', 'populer', 'free_falling.html'),
(12, 'Thunderbirds', 'thunderbirds.jpg', 'Mainkan game thunderbirds yang seru,menarik dan gege', 'populer', 'thunderbirds.html'),
(13, 'Battle Golf', 'battle_golf.jpg', 'Mainkan game golf bersama temanmu sekarang!', 'populer', 'battle_golf.html'),
(14, 'Cartapult', 'cartapult.jpg', 'Tabrakan dan ledakan mobil sekitarmu hahahahhaha!', 'populer', 'cartapult.html'),
(16, 'Zombiester', 'zombie_buster.png', 'Kalahkan para zombie dan bertahan hidup agar kamu selamat!', 'fps', 'zombie.html'),
(17, 'Tank Wars', 'tank_wars.jpg', 'Kalahkan tank lain , kuasai mereka dan menangkan pertandingan!', 'fps', 'tankwars.html'),
(18, 'Combatdier', 'soldiers-combat.jpg', 'Kalahkan musuh dan bertahan hidup untuk menang!', 'fps', 'combat.html'),
(19, 'Jelly Jump', 'jelly_jump.jpg', 'Loncat loncat fucekkkk', 'fps', 'jelly.html'),
(20, 'Throatgery', 'throat_surgery.jpg', 'Mainkan simulasi operasi gigi sekarang!', 'arcade', 'surgery.html'),
(21, 'BoxKid', 'box_kid.jpg', 'Mainkan game keren puzzle dan mengasah otak!', 'arcade', 'box.html'),
(22, 'Turbo Racing', 'turbo_racing.jpg', 'Permainan Balapan Menegangkan ! seru dan menarik!', 'balapan', 'turbo_racing.html'),
(23, 'BoxKid', 'box_kid.jpg', 'Mainkan game keren puzzle dan mengasah otak!', 'misteri', 'box.html'),
(24, 'Throatgery', 'throat_surgery.jpg', 'Mainkan simulasi operasi gigi sekarang!', 'edukasi', 'surgery.html'),
(25, 'Olympic Rio', 'olympic.jpg', 'Permainan Sport Terseru dan populer telah hadir!', 'olahraga', 'olympic.html'),
(26, 'Thunderbirds', 'thunderbirds.jpg', 'Mainkan game thunderbirds yang seru,menarik dan gege', 'petualangan', 'thunderbirds.html'),
(27, 'Free Falling', 'free_falling.jpg', 'Rasakan sensasi parkour yang seru dan menegangkan disini!', 'Aksi', 'free_falling.html'),
(28, 'Thunderbirds', 'thunderbirds.jpg', 'Mainkan game thunderbirds yang seru,menarik dan gege', 'aksi', 'thunderbirds.html'),
(29, 'Red Code', 'red.jpg', 'Game perang terseru dan terkeren! yuk main sekarang dude!', 'aksi', 'red_code.html'),
(30, 'Monkey Kick', 'monkey_kick.jpg', 'Tendang MONYET yang lucu dan pikakeheulen jiga kamu :)', 'aksi', 'monkey_kick.html'),
(31, 'Firewatergirl', 'fireboy.jpg', 'Mainkan game bersama temanmu! selesaikan level bersama sama!', 'multiplayer', 'fire boys.html'),
(32, 'Cartapult', 'cartapult.jpg', 'Tabrakan dan ledakan mobil sekitarmu hahahahhaha!', 'balapan', 'cartapult.html'),
(33, 'Birdy Rush', 'birdy_rush.png', 'Game tentang burung', 'balapan', 'bird.html'),
(34, 'Thunderbirds', 'thunderbirds.jpg', 'Mainkan game thunderbirds yang seru,menarik dan gege', 'balapan', 'thunderbirds.html'),
(35, 'Cut The Rope', 'header.jpg', 'Bermain dan beri makan omnom! si alien lucu .', 'misteri', 'cut_the_rope.html'),
(36, 'Bloxorz', 'bloxorz.png', 'Mystery box oriented game yang bikin kamu pusing dan menantang!', 'misteri', 'bloxorz.html'),
(37, 'Red Code', 'red.jpg', 'Game perang terseru dan terkeren! yuk main sekarang dude!', 'misteri', 'red_code.html'),
(38, 'Free Falling', 'free_falling.jpg', 'Rasakan sensasi parkour yang seru dan menegangkan disini!', 'olahraga', 'free_falling.html'),
(39, 'Thunderbirds', 'thunderbirds.jpg', 'Mainkan game thunderbirds yang seru,menarik dan gege', 'olahraga', 'thunderbirds.html'),
(41, 'Cut The Rope', 'header.jpg', 'Bermain dan beri makan omnom! si alien lucu .', 'petualangan', 'cut_the_rope.html'),
(42, 'Red Code', 'red.jpg', 'Game perang terseru dan terkeren! yuk main sekarang dude!', 'petualangan', 'red_code.html'),
(43, 'Monkey Kick', 'monkey_kick.jpg', 'Tendang MONYET yang lucu dan pikakeheulen jiga kamu :)', 'petualangan', 'monkey_kick.html'),
(44, '8 Ball Pool', 'ball_pool.jpg', 'Mainkan game billiar terpopuler di sini ! mainkan gratis!', 'multiplayer', 'ball_pool.html'),
(45, 'Battle Golf', 'battle_golf.jpg', 'Mainkan game golf bersama temanmu sekarang!', 'multiplayer', 'battle_golf.html'),
(46, 'Cut The Rope', 'header.jpg', 'Bermain dan beri makan omnom! si alien lucu .', 'multiplayer', 'cut_the_rope.html'),
(47, 'Bloxorz', 'bloxorz.png', 'Mystery box oriented game yang bikin kamu pusing dan menantang!', 'edukasi', 'bloxorz.html'),
(48, 'Cut The Rope', 'header.jpg', 'Bermain dan beri makan omnom! si alien lucu .', 'edukasi', 'cut_the_rope.html'),
(49, 'Basketball', 'basket.jpg', 'Mainkan olahraga basket dengan mudah disini!', 'olahraga', 'basket.html'),
(50, 'Olympic Rio', 'olympic.jpg', 'Permainan Sport Terseru dan populer telah hadir!', 'edukasi', 'olympic.html'),
(54, 'Final Fantasy', 'k4n5pyovt5c41.jpg', '', 'Action', ''),
(56, 'dreadout1', 'Picture1.png', '', 'Action', '');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id_publisher` int(64) NOT NULL,
  `nama_publisher` varchar(64) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `email_publisher` varchar(64) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` varchar(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id_publisher`, `nama_publisher`, `nama_perusahaan`, `email_publisher`, `image`, `password`, `is_active`, `date_created`) VALUES
(25, 'Syauqi Zaidan', 'Desienfy', 'syaufykhairan@gmail.com', 'k4n5pyovt5c41.jpg', '$2y$10$usZznYoh9n4i89ySFivE6elyY03RH/Zm9U.EC/Q.2qHwjA9VwcEvO', '1', 1583756973),
(30, 'Maantan', 'MaantanCorp', 'maantan@gmail.com', 'default.jpg', '$2y$10$7FO.XWhJ1PBpeLUGZ.lFWuk3XvhetC90PBOQRte7m6aN1OUlfaxcy', '1', 1592549207);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `inacash` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `is_active`, `date_created`, `inacash`) VALUES
(70, 'Syauqi Zaidan Khairan Khalaf', 'zaidanline67@gmail.com', 'pp.jfif', '$2y$10$fv3F2TtNn/7oi1/6i2CQkuC8CaNaSliRNfkhCKTBX5ZhX0zp1H5M.', 1, 1583582357, 200000),
(82, 'Nurul Annisa', 'anissa30403@gmail.com', 'default.jpg', '$2y$10$iTE5h.PUrc7Cnc.O.4oAFO08u8M3doA1QXtoFcdLkKXMNcI1bla2.', 1, 1583975818, 0),
(83, 'Ditta Audia Roza', 'audiadiit@gmail.com', 'default.jpg', '$2y$10$WaGebURGdE6l1cNzO/3SguARI3lVMktWsMpKhvrRPrvjFagSEJXK6', 1, 1583978764, 0),
(85, 'Askal Drajat Fachrezi', 'askaldrajat@gmail.com', 'default.jpg', '$2y$10$hGskZSQQOfs2ZC4SmjtWNuvFu2sIhErh/40yI93MTvX9UrJ1khek6', 1, 1583979637, 0),
(88, 'Syauqi Zaidan Khairan Khalaf', 'syaaufy@gmail.com', 'default.jpg', '$2y$10$8RSmU944nBT6coUtfspRl.6UzbzmejRhiuitcCUsjZQVFaGaF9MtK', 1, 1592548950, 0),
(89, 'Dummy', 'Dummy@gmail.com', 'default.jpg', '$2y$10$gsjeehNm3yfEd.UwaWmr0ehdFtgucO4k7g5t3iUgVVG2GnG23gL1C', 1, 1592549022, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(55, 'annisa30403@gmail.com', 'M84IrsJ2B03Ddg0aCRIbfluXXm99bv33tlBTzEVpE0I=', 1583975411),
(59, 'dinamarsela17@gmail.com', 'wH1DOZ8hymnp2CCiSBUFILri4I+AsaCtPlRXmwWwcqA=', 1583979496),
(63, 'syaaufy@gmail.com', 'WEohsMGvSSoQFwLCm4lT923mQNi4SqrxkjwaUDzVLmU=', 1592548950),
(64, 'Dummy@gmail.com', 'oY3JdrQ2ZFJw2G9PHCdjueWdSIuKmk+EPbjAH25SkGA=', 1592549022),
(65, 'maantan@gmail.com', 'sAA7OTqO8+6KMeG6O6xjReIoAld3mCuoZDM/T3z3uM8=', 1592549207);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`,`id_publisher`),
  ADD KEY `id_publisher` (`id_publisher`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`,`id_game`,`id_user`),
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`,`id`,`id_game`),
  ADD KEY `id_user` (`id`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `playgames`
--
ALTER TABLE `playgames`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id_publisher`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1121;

--
-- AUTO_INCREMENT for table `playgames`
--
ALTER TABLE `playgames`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id_publisher` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
