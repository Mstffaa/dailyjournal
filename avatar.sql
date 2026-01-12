-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2026 at 02:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avatar`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(10, 'Air (Water)', 'Elemen yang mewakili keluwesan, penyembuhan, dan kemampuan beradaptasi. Pengendali air memanfaatkan aliran dan ketenangan untuk kekuatan.', 'air.png', '2025-12-10 13:27:36', 'admin'),
(11, 'Tanah (Earth)', 'Melambangkan kekuatan, keteguhan, dan keberanian menghadapi tekanan. Pengendali tanah berpijak kokoh dan berani menghadapi tantangan.', 'tanah.png', '2025-12-10 13:27:36', 'admin'),
(12, 'Angin (Air)', 'Melambangkan kebebasan, kedamaian, dan keseimbangan batin. Para pengendali udara hidup sederhana dan penuh ketenangan.', 'angin.png', '2025-12-10 13:27:36', 'admin'),
(16, 'Api (Fire)', 'Elemen yang melambangkan kekuatan, ambisi, dan semangat yang membara dan penuh tekad.', '20251226214512.png', '2025-12-26 21:45:12', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'The Awakening of Avatar Aang', 'After a hundred years trapped in ice, Aang awakens to a world at war. As the last Airbender and the Avatar, he must accept a destiny far greater than himself.', 'all team1.jpg', '2026-01-12 10:59:32', 'admin'),
(2, 'A Team United by Friendship', 'Katara and Sokka become Aang’s first allies, forming a bond built on trust, courage, and shared goals. Together, they begin a journey that turns strangers into family.', 'all team2.jpg', '2026-01-12 11:08:19', 'admin'),
(3, 'Learning the Ways of the Four Elements\r\n', 'Traveling across nations, Aang trains to master water, earth, and fire. Each lesson is not only about bending, but also about patience, discipline, and balance.', 'teman.jpg', '2026-01-12 11:11:11', 'admin'),
(4, 'Facing the Fire Nation', 'The team encounters powerful enemies, elite soldiers, and skilled benders of the Fire Nation. Every battle tests their strength, teamwork, and determination.', 'all team 4.jpeg', '2026-01-12 11:33:05', 'admin'),
(5, 'Trials, Sacrifice, and Growth', 'Loss, fear, and hard choices force each member to grow. Through failure and sacrifice, they discover who they truly are.', '20260112113732.jpeg', '2026-01-12 11:37:32', 'admin'),
(6, 'Hope in the Midst of War', 'In a world torn by conflict, Team Avatar becomes a symbol of resistance and hope. Their actions inspire others to believe in peace and change.', '20260112113929.jpeg', '2026-01-12 11:39:29', 'admin'),
(7, 'The Legend of Team Avatar', 'The journey reaches its climax as destiny is fulfilled. Team Avatar’s story lives on as a legend that restores balance and harmony to the world.', '20260112114038.jpeg', '2026-01-12 11:40:38', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(2, 'danny', '21232f297a57a5a743894a0e4a801fc3', ''),
(3, 'katara', '21232f297a57a5a743894a0e4a801fc3', ''),
(4, 'Emil', '202cb962ac59075b964b07152d234b70', ''),
(5, 'Tri', '21232f297a57a5a743894a0e4a801fc3', ''),
(6, 'Syania cindo', '21232f297a57a5a743894a0e4a801fc3', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
