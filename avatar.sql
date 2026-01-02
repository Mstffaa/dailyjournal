-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 06:20 AM
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
(9, 'Elemen Api: Sumber Kekuatan dan Kehendak', 'Elemen Api adalah simbol kekuatan, kemauan, dan ambisi. Para pengendali api percaya bahwa setiap nyala api memiliki roh yang hidup. Mereka berlatih untuk mengendalikan panas, menciptakan ledakan energi, serta memanfaatkan cahaya dari bara kehidupan. Dalam legenda, hanya mereka yang hatinya kuat namun terkendali yang mampu menguasai elemen ini tanpa membiarkan amarah menguasai diri.', 'api.png', '2025-12-10 13:27:36', 'admin'),
(10, 'Elemen Air: Arus Kehidupan dan Harmoni', 'Pengendali air belajar dari arus sungai dan ombak laut. Elemen ini melambangkan penyembuhan, ketenangan, dan adaptasi. Air mampu berubah bentuk mengikuti wadahnya, begitu pula para pengendalinya yang mampu menyesuaikan diri dalam situasi apa pun. Dalam cerita kuno, para tabib air dipercaya memiliki kemampuan untuk menyembuhkan luka fisik maupun batin.', 'air.png', '2025-12-10 13:27:36', 'admin'),
(11, 'Elemen Tanah: Kekuatan, Stabilitas, dan Keteguhan', 'Tanah adalah elemen yang kokoh, melambangkan keteguhan dan keberanian. Para pengendali tanah berlatih untuk merasakan getaran bumi, menggeser bebatuan, hingga menciptakan dinding pertahanan besar. Di banyak kisah, pengendali tanah menjadi benteng utama dalam pertempuran karena kekuatan fisik dan tekad mereka yang tidak tergoyahkan.', 'tanah.png', '2025-12-10 13:27:36', 'admin'),
(12, 'Elemen Angin: Kebebasan, Kejernihan, dan Kecepatan', 'Angin adalah elemen yang melambangkan kebebasan sejati. Para pengendali angin hidup sebagai pengelana langit yang percaya bahwa udara membawa suara semesta. Mereka menguasai teknik bergerak cepat seperti angin, melayang dengan ringan, bahkan memanipulasi tekanan udara. Filosofi mereka: siapa pun yang mengikuti arus alam akan menemukan kedamaian.', 'angin.png', '2025-12-10 13:27:36', 'admin');

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
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
