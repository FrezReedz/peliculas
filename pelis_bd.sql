-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `peliculas`;
CREATE DATABASE `peliculas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `peliculas`;

DROP TABLE IF EXISTS `actor`;
CREATE TABLE `actor` (
  `id_actor` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `id_peli` int(5) NOT NULL,
  PRIMARY KEY (`id_actor`),
  KEY `id_peli` (`id_peli`),
  CONSTRAINT `actor_ibfk_1` FOREIGN KEY (`id_peli`) REFERENCES `pelicula` (`id_peli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `comentario`;
CREATE TABLE `comentario` (
  `id_comentario` int(5) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `id_peli` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `id_peli` (`id_peli`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_peli`) REFERENCES `pelicula` (`id_peli`),
  CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `director`;
CREATE TABLE `director` (
  `id_director` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `id_peli` int(5) NOT NULL,
  PRIMARY KEY (`id_director`),
  KEY `id_peli` (`id_peli`),
  CONSTRAINT `director_ibfk_1` FOREIGN KEY (`id_peli`) REFERENCES `pelicula` (`id_peli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `genero`;
CREATE TABLE `genero` (
  `id_genero` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `id_peli` int(5) NOT NULL,
  PRIMARY KEY (`id_genero`),
  KEY `id_peli` (`id_peli`),
  CONSTRAINT `genero_ibfk_1` FOREIGN KEY (`id_peli`) REFERENCES `pelicula` (`id_peli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `pelicula`;
CREATE TABLE `pelicula` (
  `id_peli` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `sinopsis` varchar(1500) NOT NULL,
  `anyo` date NOT NULL,
  `actor` varchar(50) DEFAULT NULL,
  `director` varchar(20) DEFAULT NULL,
  `genero` varchar(150) NOT NULL,
  PRIMARY KEY (`id_peli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `nick` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rol` varchar(10) NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuario` (`id_usuario`, `nick`, `email`, `pass`, `rol`) VALUES
(1,	'admin',	'admin@gmail.com',	'63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1',	'admin'),
(3,	'MJ23',	'JORDAN@GMAIL.COM',	'4317339e5240cb4f8d9bb3b887992acad5f2eaae',	'normal'),
(4,	'SCARLET',	'SCARLET@GMAIL.COM',	'046d5c57f1808d22fadb22d8d6c21d47c51fa2a3',	'normal'),
(5,	'fer83',	'unyaema@gmail.com',	'2ec10e4f7cd2159e7ea65d2454f68287ecf81251',	'admin');

DROP TABLE IF EXISTS `valoracion`;
CREATE TABLE `valoracion` (
  `id_valoracion` int(5) NOT NULL AUTO_INCREMENT,
  `vota_si` int(1) NOT NULL,
  `vota_no` int(1) NOT NULL,
  `total` int(4) NOT NULL,
  `id_peli` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  PRIMARY KEY (`id_valoracion`),
  KEY `id_peli` (`id_peli`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`id_peli`) REFERENCES `pelicula` (`id_peli`),
  CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2015-12-11 13:05:21
