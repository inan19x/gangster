-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 04. Februari 2009 jam 20:30
-- Versi Server: 5.0.45
-- Versi PHP: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `gangster`
--
CREATE DATABASE IF NOT EXISTS `gangster` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `gangster`;

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
	  `id` int(5) NOT NULL,
	  `tgl` timestamp NOT NULL DEFAULT current_timestamp(),
	  `html` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isitopik`
--

CREATE TABLE `isitopik` (
	  `tisi` int(5) NOT NULL,
	  `tid` varchar(5) NOT NULL,
	  `isi` text NOT NULL,
	  `tgl` timestamp NOT NULL DEFAULT current_timestamp(),
	  `dari` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
	  `uname` varchar(20) NOT NULL,
	  `passwd` varchar(32) NOT NULL,
	  `hint` varchar(100) NOT NULL,
	  `email` varchar(40) NOT NULL,
	  `kata` varchar(255) NOT NULL,
	  `alamat` varchar(100) NOT NULL,
	  `mobilephone` varchar(20) NOT NULL,
	  `school` varchar(100) NOT NULL,
	  `kesibukan` varchar(20) NOT NULL,
	  `deskripsi` varchar(255) NOT NULL,
	  `poto` varchar(20) NOT NULL DEFAULT 'default'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
	  `id` int(5) NOT NULL,
	  `dari` varchar(20) NOT NULL,
	  `isi` varchar(255) NOT NULL,
	  `untuk` varchar(20) NOT NULL,
	  `tgl` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
	  `tid` int(5) NOT NULL,
	  `topik` varchar(50) NOT NULL,
	  `author` varchar(20) NOT NULL,
	  `darilast` varchar(20) NOT NULL,
	  `tgllast` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isitopik`
--
ALTER TABLE `isitopik`
  ADD PRIMARY KEY (`tisi`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `isitopik`
--
ALTER TABLE `isitopik`
  MODIFY `tisi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `tid` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

