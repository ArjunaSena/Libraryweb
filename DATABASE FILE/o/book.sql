-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 12:59 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarygh`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `isbn` char(13) NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(80) NOT NULL,
  `category` varchar(80) NOT NULL,
  `price` int(4) UNSIGNED NOT NULL,
  `copies` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `title`, `author`, `category`, `price`, `copies`) VALUES
('6900152484440', 'V for Vendetta', 'Alan Moore', 'Comics', 299, 12),
('9780151013838', 'Life of Pi', 'Yann Martel', 'Philosophical Fiction', 300, 8),
('9780316029193', 'Blood of Elves', 'Andrzej Sapkowski', 'Fantasy', 400, 7),
('9780930289232', 'Watchmen', 'Alan Moore', 'Comics', 90, 10),
('9781632155160', 'The Walking Dead: Compendium One', 'Robert Kirkman', 'Graphic Novel', 100, 10),
('9782253115847', 'To Kill a Mockingbird', 'Harper Lee', 'Classic', 600, 2),
('9783401716947', 'The Three Musketeers', 'Alexandre Dumas', 'Adventure Novel', 400, 3),
('9788809810570', 'Little Women', 'Louisa May Alcott', 'Bildungsroman', 321, 2),
('9788838439018', 'The Call of The wild', 'Jack London', 'Adventure Fiction', 301, 4),
('9885691200700', 'The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', 420, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
