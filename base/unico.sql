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

CREATE TABLE `unico` (
  `codigo` varchar(15) NOT NULL,
  `descrip` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pvc`
--

  INSERT INTO `unico` VALUES ('03-160', 'TORNILLO DRIWALL 6X1" (50PZA)');
 INSERT INTO `unico` VALUES ('03-170', 'TORNILLO DRIWALL 8X1-1/2" (50PZA)');
 INSERT INTO `unico` VALUES ('03-275', 'TORNILLO DRIWALL 8X2" (50PZA)');
 INSERT INTO `unico` VALUES ('03-328', 'TORNILLO DRIWALL 8X1-1/4" (50PZA)');
 INSERT INTO `unico` VALUES ('03-408', 'TORNILLO DRIWALL 6X1-1/4" (50PZA)');
 INSERT INTO `unico` VALUES ('03-410', 'TORNILLO DRYWALL 6X3/4" (50PZA)');
 INSERT INTO `unico` VALUES ('03-415', 'TORNILLO DRIWALL 6X1-5/8" (50PZA)');
 INSERT INTO `unico` VALUES ('03-416', 'TORNILLO DRIWALL 7X1-5/8" (50PZA)');
 INSERT INTO `unico` VALUES ('03-420', 'TORNILLO DRIWALL 6X1" (50PZA)');
 INSERT INTO `unico` VALUES ('03-437', 'TORNILLO DRIWALL 7X1-1/4" (50PZA)');
 INSERT INTO `unico` VALUES ('03-438', 'TORNILLO DRIWALL 6X2" (50PZA)');
 INSERT INTO `unico` VALUES ('03-459', 'TORNILLO DRIWALL 6X1-3/4" (50PZA)');
 INSERT INTO `unico` VALUES ('03-734', 'TORNILLO DRIWALL 7X1-1/2" (50PZA)');
 INSERT INTO `unico` VALUES ('03-735', 'TORNILLO DRIWALL GALV. 6X2" (50PZA)');
 INSERT INTO `unico` VALUES ('03-741', 'TORNILLO DRIWALL GALV. 6X1-1/2" (50PZA)');
 INSERT INTO `unico` VALUES ('1000957', 'TIRRO VERDE 3/4" X 55MTS HYSTI');
 INSERT INTO `unico` VALUES ('10NGM-19.2', 'RUEDA MACIZA 10" C/BUJE');
 INSERT INTO `unico` VALUES ('1280', 'ARGOLLAS HAMACA C/GANCHO PAR');
 INSERT INTO `unico` VALUES ('1283', 'ARGOLLA HAMACA CON BASE PAR');
 INSERT INTO `unico` VALUES ('16655', 'COLA BLANCA 1/4 GAL. PEGA-VEN');
 INSERT INTO `unico` VALUES ('16EN', 'RUEDA NEUMATICA 16" C/EJE 3/4"');
 INSERT INTO `unico` VALUES ('207013', 'LIJA 3M #240');
 INSERT INTO `unico` VALUES ('20717', 'LIJA 3M #220');
 INSERT INTO `unico` VALUES ('207205', 'LIJA 3M # 1500');
 INSERT INTO `unico` VALUES ('207206', 'LIJA 3M # 1200');
 INSERT INTO `unico` VALUES ('20725', 'LIJA 3M # 150');
 INSERT INTO `unico` VALUES ('20729', 'LIJA 3M #600');
 INSERT INTO `unico` VALUES ('21526', 'RAMPLUG METALICO C/TORN. 1/4"');
 INSERT INTO `unico` VALUES ('21527', 'RAMPLUG METALICO C/TORN. 5/16"');
 INSERT INTO `unico` VALUES ('3504-A', 'ABRAZADERA 7/32" ACERO');
 INSERT INTO `unico` VALUES ('3506-A', 'ABRAZADERA 7/16" ACERO');
 INSERT INTO `unico` VALUES ('35-IMEX', 'CERRADURA EMBUTIR 35MM IMEX');
 INSERT INTO `unico` VALUES ('36-12-266', 'CERRADURA CILINDRO FIJO TEZZA');
 INSERT INTO `unico` VALUES ('3M-CHAMPU', 'CHAMPU 3M P/AUTOS 1LT C/RESALTADOR');
 INSERT INTO `unico` VALUES ('430075', 'RUEDA CONT.SUELTAS 3" BRUFER');
 INSERT INTO `unico` VALUES ('430125', 'RUEDA CONT.SUELTAS 5" BRUFER');
 INSERT INTO `unico` VALUES ('500044', 'POXIMIX 4 TONELADAS PEGATANQUE');
 INSERT INTO `unico` VALUES ('510085', 'RUEDA CONT. FIJA 3.1/2"');
 INSERT INTO `unico` VALUES ('520075', 'RUEDA CONT. GIRATORIA 3"');
 INSERT INTO `unico` VALUES ('62008-A', 'ABRAZADERA 1/2" ACERO');
 INSERT INTO `unico` VALUES ('62010-A', 'ABRAZADERA 9/16" ACERO');
 INSERT INTO `unico` VALUES ('62012-A', 'ABRAZADERA 11/16" ACERO');
 INSERT INTO `unico` VALUES ('62016-A', 'ABRAZADERA 13/16" ACERO');
 INSERT INTO `unico` VALUES ('62020-A', 'ABRAZADERA 13/16" ACERO');
 INSERT INTO `unico` VALUES ('62024-A', 'ABRAZADERA 1-1/16" ACERO');
 INSERT INTO `unico` VALUES ('62028-A', 'ABRAZADERA 1-5/16" ACERO');
 INSERT INTO `unico` VALUES ('ACE01', 'ACEROLIT VENCOR LM');
 INSERT INTO `unico` VALUES ('ALA01', 'ALAMBRE GALV. C- 17.5 GRANEL 50KG');
 INSERT INTO `unico` VALUES ('ALA04', 'ALAMBRE LISO GALV C-12 VICSON 80KG');
 INSERT INTO `unico` VALUES ('ALA05', 'ALAMBRE LISO GALV C-16 VICSON 50KG');
 INSERT INTO `unico` VALUES ('ALA06', 'ALAMBRE LISO GALV C-14 VICSON 50KG');
 INSERT INTO `unico` VALUES ('ALA07', 'ALAMBRE LISO GALV C-10 VICSON 50 KG');
 INSERT INTO `unico` VALUES ('ALA09', 'CABILLA LISA 9MM X 6MTS TREX');
 INSERT INTO `unico` VALUES ('ALA17.5', 'ALAMBRE DULCE C17.5 800GR.');
 INSERT INTO `unico` VALUES ('AMA01', 'AMARRE P/TECHO');
 INSERT INTO `unico` VALUES ('ANG01', 'ANGULO 50 X 50 X 12MTS');
 INSERT INTO `unico` VALUES ('B3M-CT-01', 'CINTA REFLECTIVA 3M CAMION');
 INSERT INTO `unico` VALUES ('B3M-VH-01', 'CINTA REFLECTIVA 3M CARRO');
 INSERT INTO `unico` VALUES ('BAR0102', 'BARNIZ TRANSP. BELL 1GAL.');
 INSERT INTO `unico` VALUES ('BAR0103', 'BARNIZ TRANSP. BELL 1/4GAL.');
 INSERT INTO `unico` VALUES ('BAR2040', 'BARNIZ NITRO 1/4GAL secamiento/rap.');
 INSERT INTO `unico` VALUES ('BAR2130', 'BARNIZ NATURAL NITRO 1GAL 4UND');
 INSERT INTO `unico` VALUES ('BAR2140', 'BARNIZ NATURAL NITRO 1/4 GAL 12UND');
 INSERT INTO `unico` VALUES ('BAR2930', 'BARNIZ MATE NITRO 1GAL 4UND');
 INSERT INTO `unico` VALUES ('BAR2940', 'BARNIZ MATE NITRO 1/4GAL 12UND');
 INSERT INTO `unico` VALUES ('BIS2P', 'BISAGRA ARMILLAR 2"');
 INSERT INTO `unico` VALUES ('BIS3P', 'BISAGRA ARMILLAR 3"');
 INSERT INTO `unico` VALUES ('BIS4P', 'BISAGRA ARMILLAR 4"');
 INSERT INTO `unico` VALUES ('BT-05', 'BORNE PLOMO CARRO');
 INSERT INTO `unico` VALUES ('BT-07', 'BORNE BRONCE CAMION (PAR)');
 INSERT INTO `unico` VALUES ('BT-12', 'BORNE PLOMO CAMION');
 INSERT INTO `unico` VALUES ('CABI01', 'BARRA 12MM X 6MTS');
 INSERT INTO `unico` VALUES ('CABI02', 'BARRA 10MM X 6MTS');
 INSERT INTO `unico` VALUES ('CAD-12', 'CADENA P/MATERO CAL. 12 X 30MTS');
 INSERT INTO `unico` VALUES ('CAD-14', 'CADENA P/MATERO CAL. 14 X 30MTS');
 INSERT INTO `unico` VALUES ('CAD1-4', 'CADENA GALV. 1/4" 25KG');
 INSERT INTO `unico` VALUES ('CAD1-8', 'CADENA GALV. 1/8" 25KG');
 INSERT INTO `unico` VALUES ('CAD-27', 'CADENAP/PERRO GALV. 25 X 1.80');
 INSERT INTO `unico` VALUES ('CAD3-16', 'CADENA GALV 3/16" 25KG');
 INSERT INTO `unico` VALUES ('CAD3-32', 'CADENA GALV  3/32" 25KG');
 INSERT INTO `unico` VALUES ('CAD3-8', 'CADENA GALV. 3/8" 25KG');
 INSERT INTO `unico` VALUES ('CAD5-16', 'CADENA GALV 5/16" 25KG');
 INSERT INTO `unico` VALUES ('CAD5-32', 'CADENA GALV 5/32" 25KG');
 INSERT INTO `unico` VALUES ('CAD7-32', 'CADENA GALV. 7/32" 25KG');
 INSERT INTO `unico` VALUES ('CAN-16', 'CAUCHO SOLO 16" T/IMSA');
 INSERT INTO `unico` VALUES ('CAN70', 'CANDADO CISA 70MM ANTICIZALLA');
 INSERT INTO `unico` VALUES ('CB50K', 'CEMENTO BLANCO 50KG BELGA CBR A-1');
 INSERT INTO `unico` VALUES ('CEM01', 'CEMENTO GRIS 42.5KG');
 INSERT INTO `unico` VALUES ('CER01', 'CERRADURA EMBUTIR 35MM SECURITY');
 INSERT INTO `unico` VALUES ('CER0190', 'CERRADURA EMBUTIR 25MM CISA');
 INSERT INTO `unico` VALUES ('CER05', 'CERRADURA EMBUTIR 35MM CISA');
 INSERT INTO `unico` VALUES ('CER06', 'CERRADURA EMBUTIR 60MM CISA');
 INSERT INTO `unico` VALUES ('CIZ01', 'CIZALLA BRINK 24 "');
 INSERT INTO `unico` VALUES ('CLA01', 'CLAVO ACERO 1" 1KG (800 UND)');
 INSERT INTO `unico` VALUES ('CLA0-1', 'CLAVO ACERO LISO 1" ( 50PAQ)');
 INSERT INTO `unico` VALUES ('CLA02', 'CLAVO ACERO 2" 1KG (225UND)');
 INSERT INTO `unico` VALUES ('CLA0230', 'CLAVO LISO 1-1/2" MEJIA 500PZA');
 INSERT INTO `unico` VALUES ('CLA0239', 'CLAVO LISO 1" MEJIA 500PZA');
 INSERT INTO `unico` VALUES ('CLA03', 'CLAVO ACERO 3" 1KG (120UND)');
 INSERT INTO `unico` VALUES ('CLA04', 'CLAVO ACERO 4" 1KG (90UND)');
 INSERT INTO `unico` VALUES ('CLA1-1/2', 'CLAVO ACERO 1-1/2" 1KG (470UND)');
 INSERT INTO `unico` VALUES ('CLA20', 'CLAVO TREXA 2-1/2" X 12 10KG TOBO');
 INSERT INTO `unico` VALUES ('CLA21', 'CLAVO TREXA 2-1/2" X 11 10KG TOBO');
 INSERT INTO `unico` VALUES ('CLA2-1/2', 'CLAVO ACERO 2-1/2" 1KG (145UND)');
 INSERT INTO `unico` VALUES ('CLA22', 'CLAVO TREXA 3-1/2" X 9 10KG TOBO');
 INSERT INTO `unico` VALUES ('CLA23', 'CLAVO TREXA 4" X 8 10KG TOBO');
 INSERT INTO `unico` VALUES ('CLA3.5', 'CLAVO ACERO 3-1/2" RANURADO');
 INSERT INTO `unico` VALUES ('CLA3-4', 'CLAVO ACERO LISO 3/4" ( 50PAQ)');
 INSERT INTO `unico` VALUES ('CN-10', 'CARRUCHA NEUMATICA 10"');
 INSERT INTO `unico` VALUES ('CN-10B', 'CARRUCHA BUHONERA NEUM. 2LONAS');
 INSERT INTO `unico` VALUES ('CN-10N', 'RUEDA NEUMATICA 10" C/BUJE');
 INSERT INTO `unico` VALUES ('CN-10PN', 'CARRUCHA PESADA NEUM. 2LONAS');
 INSERT INTO `unico` VALUES ('CP1E', 'COCINA ELECTRICA 1HORN. PIONERA');
 INSERT INTO `unico` VALUES ('CRG-10', 'CARRUCHA RUEDA/GOMA 10"');
 INSERT INTO `unico` VALUES ('DIS14', 'DISCO TRONZADORA 14" MAKITA');
 INSERT INTO `unico` VALUES ('EBL-1000', 'LICUADORA VASO/PLAST 10 SPEED ELITE');
 INSERT INTO `unico` VALUES ('EC-288CF', 'CERRADURA CILINDRO FIJO 116-L');
 INSERT INTO `unico` VALUES ('EHC-2022', 'CAFETERA 4TAZAS ELITE');
 INSERT INTO `unico` VALUES ('ELEC01', 'ELECTRODO GRICON 6013 3/32 azul');
 INSERT INTO `unico` VALUES ('ELEC02', 'ELECTRODO 7018 1/8 (SUPERCITO)');
 INSERT INTO `unico` VALUES ('ELEC03', 'ELECTRODO GRICON 7018 5/32 (SUPERCITO)');
 INSERT INTO `unico` VALUES ('ELEC04', 'ELECTRODO GRICON 6013 1/8 GRIS');
 INSERT INTO `unico` VALUES ('ELEC05', 'ELECTRODO 1/8" 6013 Z-13 GRIS');
 INSERT INTO `unico` VALUES ('ELEC06', 'ELECTRODO HIERRO COLADO 3/32');
 INSERT INTO `unico` VALUES ('ELEC07', 'ELECTRODO GRICON 6013 1/8 azul');
 INSERT INTO `unico` VALUES ('ELEC08', 'ELECTRODO GRICON 3/32" 6013 GRIS');
 INSERT INTO `unico` VALUES ('ELEC10', 'ELECTRODO 3/32 AZUL 6013 west arco');
 INSERT INTO `unico` VALUES ('ELEC11', 'ELECTRODO 1/8 AZUL 6013 west arco');
 INSERT INTO `unico` VALUES ('EMB02', 'CINTA EMBALAR TRANSP. 49mm X 90mt');
 INSERT INTO `unico` VALUES ('EMB03', 'CINTA EMBALAR TRANSP. 49mm x 45mt');
 INSERT INTO `unico` VALUES ('EMB06', 'CINTA EMBALAR TRANSP. 49mm X 1500mt 3m');
 INSERT INTO `unico` VALUES ('EST01', 'TUBO EST. RECT. 80X40X4.25MM 12MT');
 INSERT INTO `unico` VALUES ('F101', 'COCINA T/REVERBERO 1HORNILLA EL FOGONERO');
 INSERT INTO `unico` VALUES ('F102', 'COCINA T/REVERBERO 2HORNILLA EL FOGONERO');
 INSERT INTO `unico` VALUES ('FG0903', 'CABO TORNEADO P/ESCARDILLA');
 INSERT INTO `unico` VALUES ('FON01', 'FONDO ANTICORROSIVO NEGRO GAL. AYA');
 INSERT INTO `unico` VALUES ('FR-16466', 'CERRADURA POMO/CROMADO ZETA LOCK');
 INSERT INTO `unico` VALUES ('GAN01', 'GANCHO 2X1 CORTO 100UND');
 INSERT INTO `unico` VALUES ('GAN02', 'GANCHO 3 X 1.1/2" 100UND');
 INSERT INTO `unico` VALUES ('IPA01', 'IPA CEMENTO PLASTICO 1GAL');
 INSERT INTO `unico` VALUES ('JA200', 'EXPRIMIDOR DE JUGO WINDMERE');
 INSERT INTO `unico` VALUES ('LAM01', 'LAMINA GALV. LISA 0.70 X1 219X2440');
 INSERT INTO `unico` VALUES ('LIS01', 'LISTON P/MACHIHEMBRADO ML.');
 INSERT INTO `unico` VALUES ('MACHI01', 'MACHIHEMBRADO PINO');
 INSERT INTO `unico` VALUES ('MAL03', 'MALLA POLLITO 1" X 1 X 30MT VICSON');
 INSERT INTO `unico` VALUES ('MAL15', 'MALLA PAJARERA 3/4"X1,5MT C-21 30MTS');
 INSERT INTO `unico` VALUES ('MANI-088', 'MANILLA PLACA CCS F/M NIQUELADAS');
 INSERT INTO `unico` VALUES ('MART01', 'MARTILLO BELLOTA 8001-A');
 INSERT INTO `unico` VALUES ('MAS01', 'MASTI ESTUCO (PROFESIONAL) 1GAL.');
 INSERT INTO `unico` VALUES ('MAS02', 'MASTI ESTUCO (PROFESIONAL) 1/4GAL');
 INSERT INTO `unico` VALUES ('MEC14', 'MECATE MONITEX 1/4"');
 INSERT INTO `unico` VALUES ('MEC15', 'MECATE MONITEX 1/2"');
 INSERT INTO `unico` VALUES ('META-04', 'ESCALERA ALUMINIO 4 PELD.');
 INSERT INTO `unico` VALUES ('META-06', 'ESCALERA ALUMINIO 6 PELD.');
 INSERT INTO `unico` VALUES ('META-08', 'ESCALERA ALUMINIO 8 PELD.');
 INSERT INTO `unico` VALUES ('META-10', 'ESCALERA ALUMINIO 10 PELD.');
 INSERT INTO `unico` VALUES ('META-11', 'ESCALERA ALUMINIO 11 PELD.');
 INSERT INTO `unico` VALUES ('META-12', 'ESCALERA ALUMINIO 12 PELD.');
 INSERT INTO `unico` VALUES ('MLLA03', 'MALLA TRUCSON 5X5 120MT2');
 INSERT INTO `unico` VALUES ('OXI01', 'OXIDO BAYER ROJO 25KG');
 INSERT INTO `unico` VALUES ('OXI02', 'OXIDO BAYER AZUL 25KG');
 INSERT INTO `unico` VALUES ('OXI03', 'OXIDO BAYER VERDE 25KG');
 INSERT INTO `unico` VALUES ('OXI04', 'OXIDO BAYER AMARILLO 25KG');
 INSERT INTO `unico` VALUES ('OXI05', 'OXIDO BAYER NEGRO 25KG');
 INSERT INTO `unico` VALUES ('PD50-02', 'PANEL DECORATIVO 8 PZAS');
 INSERT INTO `unico` VALUES ('PEG01', 'PEGA LOKA3 42UND');
 INSERT INTO `unico` VALUES ('PEG02', 'PEGA MAGIC GLUE 3CC');
 INSERT INTO `unico` VALUES ('PEG1020', 'PEGA ENCHAPEG 3000 CUÑETE');
 INSERT INTO `unico` VALUES ('PEG1030', 'PEGA ENCHAPEG 3000 1GAL 4UND');
 INSERT INTO `unico` VALUES ('PEG1040', 'PEGA ENCHAPEG 3000 1/4 12UND');
 INSERT INTO `unico` VALUES ('PEG1050', 'PEGA ENCHAPEG 3000 1/8 20UND');
 INSERT INTO `unico` VALUES ('PEG1070', 'PEGA ENCHAPEG 3000 1/32 30UND');
 INSERT INTO `unico` VALUES ('PEG2201', 'PEGA CEMENTO BELL 5GAL.');
 INSERT INTO `unico` VALUES ('PEG2202', 'PEGA CEMENTO BELL 1GAL.');
 INSERT INTO `unico` VALUES ('PEG2203', 'PEGA CEMENTO BELL 1/4 (12UND)');
 INSERT INTO `unico` VALUES ('PEG2204', 'PEGA CEMENTO BELL 1/8 (20UND)');
 INSERT INTO `unico` VALUES ('PEG2206', 'PEGA CEMENTO BELL 1/32 (25UND)');
 INSERT INTO `unico` VALUES ('PEG2701', 'PEGA CEMENTO BELL 400 5GAL.');
 INSERT INTO `unico` VALUES ('PEG3001', 'PEGA CEMENTO BELL 500  5GAL.');
 INSERT INTO `unico` VALUES ('PEG3030', 'PEGA ENCHAPEG 2000 1GAL 4UND');
 INSERT INTO `unico` VALUES ('PEG3040', 'PEGA ENCHAPEG 2000 1/4GAL 12UND');
 INSERT INTO `unico` VALUES ('PEG4009', 'PEGA COLA BLANCA BELL 20KG.');
 INSERT INTO `unico` VALUES ('PEG4010', 'PEGA COLA BLANCA BELL 4KG.');
 INSERT INTO `unico` VALUES ('PEG4011', 'PEGA COLA BLANCA BELL 1KG');
 INSERT INTO `unico` VALUES ('PEG4012', 'PEGA COLA BLANCA BELL 500 GR');
 INSERT INTO `unico` VALUES ('PEG4013', 'PEGA COLA BLANCA BELL 250 GR');
 INSERT INTO `unico` VALUES ('PEG5020', 'COLA BLANCA CUÑETE ENCHAPEG D-50');
 INSERT INTO `unico` VALUES ('PEG5030', 'COLA BLANCA GALON ENCHAPEG D-50');
 INSERT INTO `unico` VALUES ('PEG5040', 'COLA BLANCA 1/4 GAL. D-50');
 INSERT INTO `unico` VALUES ('PEG5050', 'COLA BLANCA 1/8 GAL. ENCHAPEG D-50');
 INSERT INTO `unico` VALUES ('PEG5060', 'COLA BLANCA 1/16 GAL. ENCHAPEG D-50');
 INSERT INTO `unico` VALUES ('PIN01', 'PINTURA ESM. UNIMAX NEGRO 1GAL.');
 INSERT INTO `unico` VALUES ('PLE01', 'PLETINA 40 X 8 X 6');
 INSERT INTO `unico` VALUES ('PP07', 'CORDEL BALER TWINE BLANCO ROLLO SISALARA');
 INSERT INTO `unico` VALUES ('PP08', 'CORDEL BANANERO 4.5KG 4500MT ELEFANT');
 INSERT INTO `unico` VALUES ('PP30', 'CORDEL P.P 30 ROLLO SISALARA');
 INSERT INTO `unico` VALUES ('PR1804', 'CAUCHO SOLO 10" T/IMSA');
 INSERT INTO `unico` VALUES ('PT11010300', 'IPA PRIMER GALON');
 INSERT INTO `unico` VALUES ('PT13421000', 'IPA MANTO ECOLINE 3000 2.7MM X 10MTS');
 INSERT INTO `unico` VALUES ('PT13441500', 'IPA MANTO ECOLINE 3000 3.15M X 10MTS');
 INSERT INTO `unico` VALUES ('PT20030400', 'IPA GOTA FIX 1/4 GALON');
 INSERT INTO `unico` VALUES ('PU1530', 'POLIURETANO 1GAL PARQUET BTE.');
 INSERT INTO `unico` VALUES ('PU1540', 'POLIURETANO 1/4GAL PARQUET BTE. 12U.');
 INSERT INTO `unico` VALUES ('PUL01', 'TUBO RECT. 2 X 1 X 6MT 0.9MM');
 INSERT INTO `unico` VALUES ('REG02', 'REGULADOR PRO-PIEZAS AUTO GAS');
 INSERT INTO `unico` VALUES ('REG03', 'REGULADOR PRO-PIEZAS MARIPOSA');
 INSERT INTO `unico` VALUES ('RG-10B', 'CARRUCHA BUHONERA RUEDA/GOMA');
 INSERT INTO `unico` VALUES ('ROLD50M', 'ROLDANA 2" C/BASE Y MUNICIONERA');
 INSERT INTO `unico` VALUES ('ROLD60M', 'ROLDANA 2.1/2" C/BASE Y MUNICIONERA');
 INSERT INTO `unico` VALUES ('ROLD80M', 'ROLDANA 3" C/BASE Y MUNICIONERA');
 INSERT INTO `unico` VALUES ('ROLD90M', 'ROLDANA 3.1/2" C/BASE Y MUNICIONERA');
 INSERT INTO `unico` VALUES ('SAC01', 'SACO SINTETICO 60 X 90CM  BLANCO');
 INSERT INTO `unico` VALUES ('SEL0502', 'SELLADOR CONCENTRADO BELL 1GAL');
 INSERT INTO `unico` VALUES ('SEL0503', 'SELLADOR CONCENTRADO BELL 1/4GAL.');
 INSERT INTO `unico` VALUES ('SEL0602', 'SELLADOR LISTO P/USAR 1 GAL BELL');
 INSERT INTO `unico` VALUES ('SEL0603', 'SELLADOR LISTO P/USAR 1/4 GAL BELL');
 INSERT INTO `unico` VALUES ('SEL1430', 'SELLADOR LISTO GAL. NITRO 4UND');
 INSERT INTO `unico` VALUES ('SEL1440', 'SELLADOR LISTO 1/4GAL NITRO 12UND');
 INSERT INTO `unico` VALUES ('SER01', 'SERRUCHO BELLOTA 24"');
 INSERT INTO `unico` VALUES ('SFG10', 'SADWICHERA BLANCA 2 PAN FRIGIDAIRE');
 INSERT INTO `unico` VALUES ('SIL01', 'SILICON SILIPEX 290ML TRANSP.');
 INSERT INTO `unico` VALUES ('SIL0123', 'SILICON TRASLUCIDO C/FUNGICID HERCULES');
 INSERT INTO `unico` VALUES ('SIL02', 'SILICON BOND 70GR TRANSP.');
 INSERT INTO `unico` VALUES ('SIL04', 'SILICON BOND 70GR ROJO');
 INSERT INTO `unico` VALUES ('SIL05', 'SILICON BOND 70GR NEGRO');
 INSERT INTO `unico` VALUES ('SIL06', 'SILICON SILIPEX 70ML TRANSP.');
 INSERT INTO `unico` VALUES ('SIL07', 'SILICON SILIPEX 70GR GRIS');
 INSERT INTO `unico` VALUES ('SIL08', 'SILICON SILIPEX 70ML NEGRO');
 INSERT INTO `unico` VALUES ('SIL09', 'SILICON SILIPEX 70ML ROJO.');
 INSERT INTO `unico` VALUES ('SIL10', 'SILICON BOND 290GR TRANSP.');
 INSERT INTO `unico` VALUES ('SIL12', 'SILICON SILIPEX 70ML BLANCO');
 INSERT INTO `unico` VALUES ('SIL13', 'SILICON SILIPEX 290ML BLANCO');
 INSERT INTO `unico` VALUES ('SIL14', 'SILICON SILIPEX 290ML NEGRO');
 INSERT INTO `unico` VALUES ('SIL15', 'SILICON SILIPEX 290ML TRANSP/FUNGICIDA');
 INSERT INTO `unico` VALUES ('SIL16', 'SILICON SILIPEX 145ML TRANSP');
 INSERT INTO `unico` VALUES ('SIL17', 'SILICON SILIPEX 290ML ACRIELASTIC BLANCO');
 INSERT INTO `unico` VALUES ('SIL18', 'SILICON SILIPEX 70ML TRANSP. MICROCARTUC');
 INSERT INTO `unico` VALUES ('SQ1276', 'SQ LIMPIADOR CUERO 360 CM3');
 INSERT INTO `unico` VALUES ('SQ18-6', 'SQ ABRILLANTADOR P/TAPI.');
 INSERT INTO `unico` VALUES ('SQ70-5-1L', 'SQ FORMULA MARINA 70-5 1LITRO');
 INSERT INTO `unico` VALUES ('SQ70-6', 'SQ FORMULA MECANICA 70-6');
 INSERT INTO `unico` VALUES ('SQL5X1', 'SQ ACEITE LUBRICANTE 5X1 115CC.');
 INSERT INTO `unico` VALUES ('SQM18-6', 'SQ ABRILLANTADOR MINI');
 INSERT INTO `unico` VALUES ('SQMOTORG', 'SQ LIMPIA MOTOR GALON');
 INSERT INTO `unico` VALUES ('SQS5X1', 'SQ SPRAY 5 EN 1 400CM3');
 INSERT INTO `unico` VALUES ('SQ-SCHAUN', 'SQ CHAMPU CON CERA SCHAUM 1GAL');
 INSERT INTO `unico` VALUES ('TAC-1', 'TACHUELA P/ZAPATERO 5/16 450GRS');
 INSERT INTO `unico` VALUES ('TAC-12', 'TACHUELA P/ZAPATERO 7/32" 450GRS');
 INSERT INTO `unico` VALUES ('TAC-34', 'TACHUELA P/ZAPATERO 9/32" 450GRS');
 INSERT INTO `unico` VALUES ('TAC-5', 'TACHUELA P/ZAPATERO 21/32" 450GRS');
 INSERT INTO `unico` VALUES ('TRI04', 'MALLA POLLITO 1" 30X1.00 NEGRA');
 INSERT INTO `unico` VALUES ('TRN10', 'TRIPA SOLA 10"');
 INSERT INTO `unico` VALUES ('TRN16', 'TRIPA SOLA 14"');
 INSERT INTO `unico` VALUES ('VEN0144', 'VENTILADOR D/TORRE 3VEL. ZUGET 4003');
 INSERT INTO `unico` VALUES ('VIC1.1-4', 'CLAVOS VICON 1.1/4X 15" 24.5KG');
 INSERT INTO `unico` VALUES ('VIC1X16', 'CLAVOS VICSON 1 X 16" 24.5KG');
 INSERT INTO `unico` VALUES ('VIC2.5X10', 'CLAVO VICSON 2.1/2"X 10 24,5KG');
 INSERT INTO `unico` VALUES ('VIC2.5X11', 'CLAVO VICSON 2.1/2" X 11 25KG');
 INSERT INTO `unico` VALUES ('VIC2.5X12', 'CLAVOS VICSON 2.1/2" X 12" 20KG TREXA');
 INSERT INTO `unico` VALUES ('VIC2X10', 'CLAVOS VICSON 2" X 10" 24.5KG');
 INSERT INTO `unico` VALUES ('VIC3.5X9', 'CLAVO VICSON 3.5 X 9"');
 INSERT INTO `unico` VALUES ('VIC3X10', 'CLAVO VICSON 3 X 10"');
 INSERT INTO `unico` VALUES ('VIC4X8', 'CLAVO VICSON 4 X 8" 24.5KG');
 INSERT INTO `unico` VALUES ('Y9060502', 'YESO TIPO III ALFAYESO 10KG');
 INSERT INTO `unico` VALUES ('Y906052', 'YESO BLANCO ORIENTAL 5KG');





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
