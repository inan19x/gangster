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
CREATE DATABASE `gangster` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `gangster`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `isitopik`
--

CREATE TABLE `isitopik` (
  `tisi` int(5) NOT NULL auto_increment,
  `tid` varchar(5) collate latin1_general_ci NOT NULL,
  `isi` text collate latin1_general_ci NOT NULL,
  `tgl` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `dari` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`tisi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `isitopik`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `uname` varchar(20) collate latin1_general_ci NOT NULL,
  `passwd` varchar(32) collate latin1_general_ci NOT NULL,
  `hint` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(40) collate latin1_general_ci NOT NULL,
  `kata` varchar(255) collate latin1_general_ci NOT NULL,
  `alamat` varchar(100) collate latin1_general_ci NOT NULL,
  `mobilephone` varchar(20) collate latin1_general_ci NOT NULL,
  `school` varchar(100) collate latin1_general_ci NOT NULL,
  `kesibukan` varchar(20) collate latin1_general_ci NOT NULL,
  `deskripsi` varchar(255) collate latin1_general_ci NOT NULL,
  `poto` varchar(20) collate latin1_general_ci NOT NULL default 'default',
  UNIQUE KEY `uname` (`uname`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `member`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `testi`
--

CREATE TABLE `testi` (
  `id` int(5) NOT NULL auto_increment,
  `dari` varchar(20) collate latin1_general_ci NOT NULL,
  `isi` varchar(255) collate latin1_general_ci NOT NULL,
  `untuk` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `testi`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `topik`
--

CREATE TABLE `topik` (
  `tid` int(5) NOT NULL auto_increment,
  `topik` varchar(50) collate latin1_general_ci NOT NULL,
  `author` varchar(20) collate latin1_general_ci NOT NULL,
  `darilast` varchar(20) collate latin1_general_ci NOT NULL,
  `tgllast` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `topik`
--

