-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-10-2017 a las 17:58:35
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferreplom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pvc`
--

CREATE TABLE `pintura` (
  `codigo` varchar(15) NOT NULL,
  `descrip` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pvc`
--

  INSERT INTO `pintura` VALUES ('1001', 'PINTURA CAUCHO GAL. BLANCO PINTAPRO');
 INSERT INTO `pintura` VALUES ('2370221', 'ESTUKA ACRILICO 1/4 GA 1001209');
 INSERT INTO `pintura` VALUES ('262001', 'OXIDO ALEMAN AMARILLO 40KG');
 INSERT INTO `pintura` VALUES ('262002', 'OXIDO ALEMAN AZUL 50KG');
 INSERT INTO `pintura` VALUES ('39030', 'CERA PULIR SINTETICA 3M 473ML');
 INSERT INTO `pintura` VALUES ('40783', 'REFRIGERANTE MOTOR 3M 1GAL');
 INSERT INTO `pintura` VALUES ('6814', 'ABRILLANTADOR CHAMPION 255CC');
 INSERT INTO `pintura` VALUES ('ASF01', 'ASFALTO PLASTICO 1/4 GAL. BITUPLAST 12UN');
 INSERT INTO `pintura` VALUES ('BAR2240', 'BARNIZ MARINO 1/4GAL MENEQUIM');
 INSERT INTO `pintura` VALUES ('BAR2330', 'BARNIZ CAOBA 1GAL MENEQUIN 4UND.');
 INSERT INTO `pintura` VALUES ('BAR2340', 'BARNIZ CAOBA 1/4GAL MENEQUIN 12UND.');
 INSERT INTO `pintura` VALUES ('BAR2430', 'BARNIZ CAOBA CLARO MENEQUIN 1GAL');
 INSERT INTO `pintura` VALUES ('BAR2440', 'BARNIZ CAOBA CLARO MENEQUIN 1/4GAL');
 INSERT INTO `pintura` VALUES ('CHAMP-01', 'SPRAY CHAMPION BLANCO BRILLANTE');
 INSERT INTO `pintura` VALUES ('CLBE133BL', 'PINTURA COLLET CÑT BLANCO EXTREMO T-AA');
 INSERT INTO `pintura` VALUES ('CLBE134BL', 'PINTURA COLLET GAL BLANCO EXTREMO T-AA');
 INSERT INTO `pintura` VALUES ('CLBE135BL', 'PINTURA COLLET 1/4GAL BLANCO EXT T-AA');
 INSERT INTO `pintura` VALUES ('CLDP117AP', 'PINTURA COLLET 1/4GAL AMARILLO PRIM T-AA');
 INSERT INTO `pintura` VALUES ('CLDP118AI', 'PINTURA COLLET 1/4GAL AMARILLO IMP T-AA');
 INSERT INTO `pintura` VALUES ('CLDP119RC', 'PINTURA COLLET 1/4GAL ROJO CAYENA T-AA');
 INSERT INTO `pintura` VALUES ('CLDP121AS', 'PINTURA COLLET 1/4GAL AZUL SALTO A T-AA');
 INSERT INTO `pintura` VALUES ('CLDP122AI', 'PINTURA COLLET 1/4GAL AZUL INTENSO T-AA');
 INSERT INTO `pintura` VALUES ('CLDP123VJ', 'PINTURA COLLET 1/4GAL VERDE JADE T-AA');
 INSERT INTO `pintura` VALUES ('CLDP124MV', 'PINTURA COLLET 1/4GAL MANZANA VERDE T-AA');
 INSERT INTO `pintura` VALUES ('CLDP126MV', 'PINTURA COLLET 1/4GAL MORADO VIOLET T-AA');
 INSERT INTO `pintura` VALUES ('CLDP127ML', 'PINTURA COLLET 1/4GAL MARRON LATTE T-AA');
 INSERT INTO `pintura` VALUES ('CLDP128MT', 'PINTURA COLLET 1/4GAL MARRON TIERRA T-AA');
 INSERT INTO `pintura` VALUES ('CLDP129RG', 'PINTURA COLLET 1/4GAL ROJO GUAYABA T-AA');
 INSERT INTO `pintura` VALUES ('CLDP130NI', 'PINTURA COLLET 1/4GAL NARANJA INT T-AA');
 INSERT INTO `pintura` VALUES ('CLDP131GM', 'PINTURA COLLET 1/4GAL GRIS MIRRA T-AA');
 INSERT INTO `pintura` VALUES ('CLDP140GE', 'PINTURA COLLET 1/4GAL GRIS ESTELAR T-AA');
 INSERT INTO `pintura` VALUES ('CLDP158CO', 'PINTURA COLLET 1/4GAL CORAL T-AA');
 INSERT INTO `pintura` VALUES ('CLDP327AI', 'PINTURA COLLET GAL AMARILLO IMP T-A');
 INSERT INTO `pintura` VALUES ('CLDP328RC', 'PINTURA COLLET GAL ROJO CAYENA T-A');
 INSERT INTO `pintura` VALUES ('CLDP330AS', 'PINTURA COLLET GAL AZUL SALTO A. T-A');
 INSERT INTO `pintura` VALUES ('CLDP331AI', 'PINTURA COLLET GAL AZUL INTENSO T-A');
 INSERT INTO `pintura` VALUES ('CLDP332VJ', 'PINTURA COLLET GAL VERDE JADE T-A');
 INSERT INTO `pintura` VALUES ('CLDP333VM', 'PINTURA COLLET GAL VERDE MANZANA T-A');
 INSERT INTO `pintura` VALUES ('CLDP334LS', 'PINTURA COLLET GAL LILA SUTILEZA T-A');
 INSERT INTO `pintura` VALUES ('CLDP335MV', 'PINTURA COLLET GAL MORADO VIOLETA T-A');
 INSERT INTO `pintura` VALUES ('CLDP336ML', 'PINTURA COLLET GAL MARRON LATTE T-A');
 INSERT INTO `pintura` VALUES ('CLDP337MT', 'PINTURA COLLET GAL MARRON TIERRA T-A');
 INSERT INTO `pintura` VALUES ('CLDP338RG', 'PINTURA COLLET GAL ROJO GUAYABA T-A');
 INSERT INTO `pintura` VALUES ('CLDP339NI', 'PINTURA COLLET GAL NARANJA INTENSO T-A');
 INSERT INTO `pintura` VALUES ('CLDP340GM', 'PINTURA COLLET GAL GRIS MIRRA T-A');
 INSERT INTO `pintura` VALUES ('CLDP342GE', 'PINTURA COLLET GAL GRIS ESTELAR T-A');
 INSERT INTO `pintura` VALUES ('CLDP343CO', 'PINTURA COLLET GAL CORAL T-A');
 INSERT INTO `pintura` VALUES ('CLPB156BL', 'PINTURA COLLET GAL BLANCO T-B');
 INSERT INTO `pintura` VALUES ('E100-10', 'MANPICA ESMALTE GAL. BLANCO B.');
 INSERT INTO `pintura` VALUES ('E402-10', 'MANPICA ESMALTE GAL. AZUL C.');
 INSERT INTO `pintura` VALUES ('E601-10', 'MANPICA ESMALTE GAL. GRIS.');
 INSERT INTO `pintura` VALUES ('E701-10', 'MANPICA ESMALTE GAL. HABANO');
 INSERT INTO `pintura` VALUES ('FON15-30', 'FONDO HERRERIA 1/4GAL. GRIS');
 INSERT INTO `pintura` VALUES ('FON60-30', 'FONDO HERRERIA GALON ROJO');
 INSERT INTO `pintura` VALUES ('FON60-40', 'FONDO HERRERIA 1/4GAL. ROJO');
 INSERT INTO `pintura` VALUES ('FON61-30', 'FONDO HERRERIA GALON GRIS');
 INSERT INTO `pintura` VALUES ('FON-6230', 'FONDO HERRERIA GALON NEGRO');
 INSERT INTO `pintura` VALUES ('IPA02', 'ASFALTO PLASTICO 1/4GAL IPA');
 INSERT INTO `pintura` VALUES ('IPA03', 'ASFALTO LIQUIDO IPA 1GALON');
 INSERT INTO `pintura` VALUES ('LTB01', 'LIMPIADOR PRIMER 1/4GAL TUBRICA');
 INSERT INTO `pintura` VALUES ('M00004', 'MANPICA BARNIZ TRANSP. 1/4GAL.');
 INSERT INTO `pintura` VALUES ('M00010', 'MANPICA BARNIZ TRANSP. GALON');
 INSERT INTO `pintura` VALUES ('M10001', 'MANPICA FONDO MET. BLANCO GAL.');
 INSERT INTO `pintura` VALUES ('M10004', 'MANPICA MASTIC ESTUCO 1/4GAL.');
 INSERT INTO `pintura` VALUES ('M10005', 'MANPICA FONDO MET. BLANCO 1/4GAL.');
 INSERT INTO `pintura` VALUES ('M10010', 'MANPICA MASTIC ESTUCO GALON');
 INSERT INTO `pintura` VALUES ('M100-10', 'MAX-PINTURA GALON BLANCO');
 INSERT INTO `pintura` VALUES ('M100-40', 'PINTURA CUÑETE 4GAL.BLANCO PINCO');
 INSERT INTO `pintura` VALUES ('M100-50', 'MAX-PINTURA CUÑETE BLANCO');
 INSERT INTO `pintura` VALUES ('M200-10', 'MAX-PINTURA GALON AMARILLO');
 INSERT INTO `pintura` VALUES ('M200-40', 'MAX-PINTURA CUÑETE 4GAL. AMARILLO');
 INSERT INTO `pintura` VALUES ('M211-10', 'MAX-PINTURA GALON MARFIL ORIENTAL');
 INSERT INTO `pintura` VALUES ('M211-40', 'MAX-PINTURA CUÑETE 4GAL. MARFIL ORIENTAL');
 INSERT INTO `pintura` VALUES ('M227-10', 'MAX-PINTURA GALON MELON');
 INSERT INTO `pintura` VALUES ('M227-40', 'MAX-PINTURA CUÑETE 4GAL. MELON');
 INSERT INTO `pintura` VALUES ('M30004', 'MANPICA FONDO MET. ROJO 1/4GAL.');
 INSERT INTO `pintura` VALUES ('M30010', 'MANPICA FONDO MET. ROJO GALON');
 INSERT INTO `pintura` VALUES ('M318-10', 'MAX-PINTURA GALON ROSA PINK');
 INSERT INTO `pintura` VALUES ('M318-40', 'MAX-PINTURA CUÑETE 4GAL. ROSA PINK');
 INSERT INTO `pintura` VALUES ('M32110', 'MANPICA FONDO MINIO GALON');
 INSERT INTO `pintura` VALUES ('M32153', 'MANPICA FONDO MINIO CUÑETE 5GAL.');
 INSERT INTO `pintura` VALUES ('M322-10', 'MAX-PINTURA GAL. MANDARINA');
 INSERT INTO `pintura` VALUES ('M322-40', 'MAX-PINTURA CUÑETE 4GAL. MANDARINA');
 INSERT INTO `pintura` VALUES ('M341-10', 'MAX-PINTURA GALON ROSA PETALO');
 INSERT INTO `pintura` VALUES ('M341-40', 'MAX-PINTURA CUÑETE 4GAL. ROSA PETALO');
 INSERT INTO `pintura` VALUES ('M412-10', 'MAX-PINTURA GALON AZUL CIELO');
 INSERT INTO `pintura` VALUES ('M412-40', 'MAX-PINTURA CUÑETE 4GAL. AZUL CIELO');
 INSERT INTO `pintura` VALUES ('M413-10', 'MAX-PINTURA GALON FLORIDO');
 INSERT INTO `pintura` VALUES ('M413-40', 'MAX-PINTURA CUÑETE 4GAL. FLORIDO');
 INSERT INTO `pintura` VALUES ('M414-10', 'MAX-PINTURA GALON AZUL PROFUNDO');
 INSERT INTO `pintura` VALUES ('M414-40', 'MAX-PINTURA CUÑETE 4GAL. AZUL PROFUNDO');
 INSERT INTO `pintura` VALUES ('M432-10', 'MAX-PINTURA GALON LILA');
 INSERT INTO `pintura` VALUES ('M432-40', 'MAX-PINTURA CUÑETE 4GAL. LILA');
 INSERT INTO `pintura` VALUES ('M502-10', 'MAX-PINTURA GALON VERDE MANZANA');
 INSERT INTO `pintura` VALUES ('M502-40', 'MAX-PINTURA CUÑETE 4GAL. VERDE MANZANA');
 INSERT INTO `pintura` VALUES ('M516-10', 'MAX-PINTURA GALON TURQUESA');
 INSERT INTO `pintura` VALUES ('M516-40', 'MAX-PINTURA CUÑETE 4GAL. TURQUESA');
 INSERT INTO `pintura` VALUES ('M60004', 'MANPICA FONDO MET. GRIS 1/4GAL.');
 INSERT INTO `pintura` VALUES ('M60010', 'MANPICA FONDO MET. GRIS GALON');
 INSERT INTO `pintura` VALUES ('M80004', 'MANPICA FONDO MET. NEGRO 1/4GAL.');
 INSERT INTO `pintura` VALUES ('M80010', 'MANPICA FONDO MET. NEGRO GALON');
 INSERT INTO `pintura` VALUES ('MTR02', 'MANPICA TRAFICO BLANCO 5GAL');
 INSERT INTO `pintura` VALUES ('MTRF01', 'MANPICA TRAFICO AMARILLO 5GAL');
 INSERT INTO `pintura` VALUES ('PEG200', 'PEGA CEMENTO CONTACTO 1/32 HERCULES');
 INSERT INTO `pintura` VALUES ('PIN0302', 'PINTURA ESMALTE 1/4 GAL. ORO RICO EURO');
 INSERT INTO `pintura` VALUES ('PIN0512', 'PINTURA ESMALTE 1/32 GAL. ORO RICO EURO');
 INSERT INTO `pintura` VALUES ('PIN0513', 'PINTURA ESMALTE 1/32 GAL. COBRE EURO');
 INSERT INTO `pintura` VALUES ('PIN0515', 'PINTURA ESMALTE 1/32 GAL. PLATEADO EURO');
 INSERT INTO `pintura` VALUES ('PU4230', 'POLIURETANO 1GAL PARQUET MATE');
 INSERT INTO `pintura` VALUES ('PU4240', 'POLIURETANO 1/4GAL PARQUET MATE');
 INSERT INTO `pintura` VALUES ('PU4330', 'POLIURETANO 1GAL PARQUET SATINADO');
 INSERT INTO `pintura` VALUES ('PU4340', 'POLIURETANO 1/4GAL PARQUET SATINADO');
 INSERT INTO `pintura` VALUES ('R-0036-40', 'LACA NITRO 1/4 GAL CONCENTRADO MATE');
 INSERT INTO `pintura` VALUES ('R-0037-40', 'LACA NITRO 1/4 GAL CONCENTRADA BRILLATE');
 INSERT INTO `pintura` VALUES ('REM4030', 'REMOVEDOR PINTURA 1GAL MENEQUIN');
 INSERT INTO `pintura` VALUES ('REM4040', 'REMOVEDOR PINTURA 1/4GAL. MENEQUIN');
 INSERT INTO `pintura` VALUES ('S100-10', 'MANPICA SATINADO GAL. BLANCO');
 INSERT INTO `pintura` VALUES ('SEL1330', 'SELLADOR NITRO 1GAL CONCENTRADO');
 INSERT INTO `pintura` VALUES ('SEL1340', 'SELLADOR NITRO 1/4GAL CONCENTRADO');
 INSERT INTO `pintura` VALUES ('SEL5030', 'SELLADOR CATALIZADO MENEQUIM 1GAL');
 INSERT INTO `pintura` VALUES ('SOL5930', 'SOLVENTE MENSOL 1GAL MENEQUIN');
 INSERT INTO `pintura` VALUES ('SOL5940', 'SOLVENTE MENSOL 1/4GAL MENEQUIN');
 INSERT INTO `pintura` VALUES ('SQ70-12', 'SQ AGARRE P/CORREAS');
 INSERT INTO `pintura` VALUES ('SQ70-4', 'SQ TUMBA PINTURA 70-4');
 INSERT INTO `pintura` VALUES ('SQ70-5', 'SQ FORMULA MARINA 70-5');
 INSERT INTO `pintura` VALUES ('SQA01', 'SQ AMBIENTADOR VAINILLA');
 INSERT INTO `pintura` VALUES ('SQA02', 'SQ AMBIENTADOR CARRO NUEVO');
 INSERT INTO `pintura` VALUES ('SQA03', 'SQ AMBIENTADOR FRESA');
 INSERT INTO `pintura` VALUES ('SQA04', 'SQ AMBIENTADOR MANZANA');
 INSERT INTO `pintura` VALUES ('SQA05', 'SQ AMBIENTADOR UVA');
 INSERT INTO `pintura` VALUES ('SQDES', 'SQ DESMOLDEANTE BANDA ROJA');
 INSERT INTO `pintura` VALUES ('SQLCBD', 'SQ LIMPIA CARBURADOR 440CM3');
 INSERT INTO `pintura` VALUES ('SQLCH', 'SQ LIMPIADOR CAUCHOS 440CM3');
 INSERT INTO `pintura` VALUES ('SQMOTOR', 'SQ LIMPIA MOTOR');
 INSERT INTO `pintura` VALUES ('SQP-F', 'SQ PULE-FACIL 400CM3');
 INSERT INTO `pintura` VALUES ('SQSONAX', 'SQ SONAX LIMPIADOR ARMAS');
 INSERT INTO `pintura` VALUES ('SQVELOUR', 'SQ LIMPIADOR TAPICERIAS VELOUR');
 INSERT INTO `pintura` VALUES ('VP01', 'PINTURA VP COLONIAL CUÑT 4GAL BLANCO INT');
 INSERT INTO `pintura` VALUES ('VP02', 'PINTURA VP COLONIAL 1GAL BLANCO INTENSO');





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;