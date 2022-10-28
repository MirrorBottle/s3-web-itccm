-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 02:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s3_web_itccm`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditors`
--

CREATE TABLE `auditors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auditor_qualifications`
--

CREATE TABLE `auditor_qualifications` (
  `id` int(11) NOT NULL,
  `auditor_id` int(11) DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL,
  `expiration_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `registration_numbe` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `fax_number` varchar(255) DEFAULT NULL,
  `homepage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL,
  `registration_date` date NOT NULL,
  `examination_number` varchar(255) DEFAULT NULL,
  `examination_start_date` date DEFAULT NULL,
  `examination_end_date` date DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `examination_auditors`
--

CREATE TABLE `examination_auditors` (
  `id` int(11) NOT NULL,
  `examination_id` int(11) DEFAULT NULL,
  `auditor_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `position` enum('1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `examination_documents`
--

CREATE TABLE `examination_documents` (
  `id` int(11) NOT NULL,
  `examination_id` int(11) DEFAULT NULL,
  `document_type` enum('1','2','3') DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `uploaded_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `examination_scopes`
--

CREATE TABLE `examination_scopes` (
  `id` int(11) NOT NULL,
  `examination_id` int(11) DEFAULT NULL,
  `scope_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scopes`
--

CREATE TABLE `scopes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `standards`
--

CREATE TABLE `standards` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('1','2','3') DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `auditor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditors`
--
ALTER TABLE `auditors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auditor_qualifications`
--
ALTER TABLE `auditor_qualifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auditor_id` (`auditor_id`),
  ADD KEY `standard_id` (`standard_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_numbe` (`registration_numbe`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `examination_number` (`examination_number`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `standard_id` (`standard_id`);

--
-- Indexes for table `examination_auditors`
--
ALTER TABLE `examination_auditors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examination_id` (`examination_id`),
  ADD KEY `auditor_id` (`auditor_id`);

--
-- Indexes for table `examination_documents`
--
ALTER TABLE `examination_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examination_id` (`examination_id`);

--
-- Indexes for table `examination_scopes`
--
ALTER TABLE `examination_scopes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examination_id` (`examination_id`),
  ADD KEY `scope_id` (`scope_id`);

--
-- Indexes for table `scopes`
--
ALTER TABLE `scopes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standards`
--
ALTER TABLE `standards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auditor_qualifications`
--
ALTER TABLE `auditor_qualifications`
  ADD CONSTRAINT `auditor_qualifications_ibfk_1` FOREIGN KEY (`auditor_id`) REFERENCES `auditors` (`id`),
  ADD CONSTRAINT `auditor_qualifications_ibfk_2` FOREIGN KEY (`standard_id`) REFERENCES `standards` (`id`);

--
-- Constraints for table `examinations`
--
ALTER TABLE `examinations`
  ADD CONSTRAINT `examinations_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `examinations_ibfk_2` FOREIGN KEY (`standard_id`) REFERENCES `standards` (`id`);

--
-- Constraints for table `examination_auditors`
--
ALTER TABLE `examination_auditors`
  ADD CONSTRAINT `examination_auditors_ibfk_1` FOREIGN KEY (`examination_id`) REFERENCES `examinations` (`id`),
  ADD CONSTRAINT `examination_auditors_ibfk_2` FOREIGN KEY (`auditor_id`) REFERENCES `auditors` (`id`);

--
-- Constraints for table `examination_documents`
--
ALTER TABLE `examination_documents`
  ADD CONSTRAINT `examination_documents_ibfk_1` FOREIGN KEY (`examination_id`) REFERENCES `examinations` (`id`);

--
-- Constraints for table `examination_scopes`
--
ALTER TABLE `examination_scopes`
  ADD CONSTRAINT `examination_scopes_ibfk_1` FOREIGN KEY (`examination_id`) REFERENCES `examinations` (`id`),
  ADD CONSTRAINT `examination_scopes_ibfk_2` FOREIGN KEY (`scope_id`) REFERENCES `scopes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
