-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-07-2019 a las 06:40:00
-- Versión del servidor: 10.1.38-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `museu2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accions_user`
--

CREATE TABLE `accions_user` (
  `id` int(11) NOT NULL,
  `user` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `tipus` char(1) CHARACTER SET utf8mb4 NOT NULL,
  `taula` varchar(30) NOT NULL,
  `temps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accions_user`
--

INSERT INTO `accions_user` (`id`, `user`, `tipus`, `taula`, `temps`) VALUES
(40, 'admin', 'U', 'Entitat', '2019-07-10 09:54:22'),
(41, 'admin', 'U', 'Entitat', '2019-07-10 09:57:12'),
(42, 'admin', 'U', 'Entitat', '2019-07-10 10:06:55'),
(43, 'admin', 'U', 'Entitat', '2019-07-10 10:07:37'),
(44, 'admin', 'U', 'Entitat', '2019-07-10 10:07:48'),
(45, 'admin', 'U', 'Entitat', '2019-07-10 10:08:03'),
(46, 'admin', 'U', 'Document Entitat', '2019-07-10 10:09:24'),
(47, 'admin', 'I', 'Document Entitat', '2019-07-10 10:10:13'),
(48, 'admin', 'I', 'Document Entitat', '2019-07-10 10:11:05'),
(49, 'admin', 'I', 'Document Entitat', '2019-07-10 10:11:46'),
(50, 'admin', 'I', 'Document Entitat', '2019-07-10 10:12:25'),
(51, 'admin', 'U', 'Document Entitat', '2019-07-10 10:12:38'),
(52, 'admin', 'U', 'Document Entitat', '2019-07-10 10:12:53'),
(53, 'admin', 'I', 'Document Entitat', '2019-07-10 10:13:23'),
(54, 'admin', 'I', 'Document Entitat', '2019-07-10 10:13:51'),
(55, 'admin', 'I', 'Document Entitat', '2019-07-10 10:15:09'),
(56, 'admin', 'I', 'Document Entitat', '2019-07-10 10:15:39'),
(57, 'admin', 'I', 'Document Entitat', '2019-07-10 10:16:18'),
(58, 'admin', 'I', 'Document Entitat', '2019-07-10 10:16:46'),
(59, 'admin', 'U', 'Competició Entitat', '2019-07-10 10:19:20'),
(60, 'admin', 'U', 'Competició Entitat', '2019-07-10 10:19:58'),
(61, 'admin', 'D', 'Activitat Entitat', '2019-07-10 10:21:30'),
(62, 'admin', 'D', 'Activitat Entitat', '2019-07-10 10:21:38'),
(63, 'admin', 'D', 'Activitat Entitat', '2019-07-10 10:21:45'),
(64, 'admin', 'D', 'Entitats', '2019-07-10 10:23:58'),
(65, 'admin', 'U', 'Entitat', '2019-07-10 10:25:35'),
(66, 'admin', 'U', 'Entitat', '2019-07-10 10:25:56'),
(67, 'admin', 'U', 'Entitat', '2019-07-10 10:26:28'),
(68, 'admin', 'U', 'Entitat', '2019-07-10 10:27:30'),
(69, 'admin', 'U', 'Entitat', '2019-07-10 10:27:49'),
(70, 'admin', 'U', 'Entitat', '2019-07-10 10:30:46'),
(71, 'admin', 'I', 'Document Entitat', '2019-07-10 10:33:20'),
(72, 'admin', 'U', 'Document Entitat', '2019-07-10 10:34:30'),
(73, 'admin', 'U', 'Document Entitat', '2019-07-10 10:35:43'),
(74, 'admin', 'I', 'Competició Entitat', '2019-07-10 10:37:15'),
(75, 'admin', 'U', 'Competició Entitat', '2019-07-10 10:38:02'),
(76, 'admin', 'I', 'Document Entitat', '2019-07-10 10:39:30'),
(77, 'admin', 'I', 'Document Entitat', '2019-07-10 10:40:52'),
(78, 'admin', 'U', 'Document Entitat', '2019-07-10 10:41:06'),
(79, 'admin', 'I', 'tipus activitats', '2019-07-10 10:43:20'),
(80, 'admin', 'I', 'tipus activitats', '2019-07-10 10:43:33'),
(81, 'admin', 'I', 'tipus activitats', '2019-07-10 10:43:54'),
(82, 'admin', 'I', 'tipus activitats', '2019-07-10 10:44:27'),
(83, 'admin', 'I', 'Activitat Entitat', '2019-07-10 10:46:28'),
(84, 'admin', 'U', 'Persona', '2019-07-10 10:52:58'),
(85, 'admin', 'D', 'Trajectoria Jugador', '2019-07-10 10:54:55'),
(86, 'admin', 'D', 'Trajectoria Jugador', '2019-07-10 10:55:02'),
(87, 'admin', 'I', 'Relat Entitat', '2019-07-10 11:38:06'),
(88, 'admin', 'I', 'Relat Entitat', '2019-07-10 11:40:28'),
(89, 'admin', 'I', 'Relat Entitat', '2019-07-10 11:41:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activitats_entitat`
--

CREATE TABLE `activitats_entitat` (
  `id` int(11) NOT NULL,
  `id_entitat` int(11) NOT NULL,
  `temporada` year(4) NOT NULL,
  `tipus_act` int(11) NOT NULL,
  `actuacions` varchar(30) NOT NULL,
  `detalls1` varchar(30) NOT NULL,
  `detalls2` varchar(30) NOT NULL,
  `fotos` int(11) NOT NULL,
  `entrevistes` int(11) NOT NULL,
  `croniques` int(11) NOT NULL,
  `cartell` int(11) NOT NULL,
  `programa` int(11) NOT NULL,
  `video` int(11) NOT NULL,
  `altre1` varchar(10) NOT NULL,
  `altre2` varchar(10) NOT NULL,
  `fotod` varchar(100) NOT NULL,
  `entrevistad` varchar(100) NOT NULL,
  `cronicad` varchar(100) NOT NULL,
  `cartelld` varchar(100) NOT NULL,
  `programad` varchar(100) NOT NULL,
  `videod` varchar(100) NOT NULL,
  `altre1d` varchar(100) NOT NULL,
  `altre2d` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `activitats_entitat`
--

INSERT INTO `activitats_entitat` (`id`, `id_entitat`, `temporada`, `tipus_act`, `actuacions`, `detalls1`, `detalls2`, `fotos`, `entrevistes`, `croniques`, `cartell`, `programa`, `video`, `altre1`, `altre2`, `fotod`, `entrevistad`, `cronicad`, `cartelld`, `programad`, `videod`, `altre1d`, `altre2d`) VALUES
(6, 5, 1954, 4, 'Debut Liguilla 3ª. Div. Grupo ', 'Promoción a 2ª. División', 'Libro CD. Menorca Pag. 113', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbitratges`
--

CREATE TABLE `arbitratges` (
  `divisio_id` int(11) NOT NULL,
  `persones_id` int(11) NOT NULL,
  `temporada` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caixo_club`
--

CREATE TABLE `caixo_club` (
  `id` int(11) NOT NULL,
  `club` int(11) NOT NULL,
  `temporada` year(4) NOT NULL,
  `comentari` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caixo_club`
--

INSERT INTO `caixo_club` (`id`, `club`, `temporada`, `comentari`) VALUES
(1, 4, 1998, 'Celebración 75 Aniversario Campo Los Pinos  / Visita de RCD. Mallorca 1ª. Div. '),
(2, 4, 1999, 'Estreno Himno CE. Alaior Autor Letra Ponç Pons ; Musica Antonio Pons Solista Simón Orfila + Coro CE. Alaior'),
(3, 5, 1951, 'Pergamino celebración XXXI  Aniversario / Libro Historia CD. Menorca  Pag. 7 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caixo_persona`
--

CREATE TABLE `caixo_persona` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `role` char(1) NOT NULL,
  `temporada` year(4) NOT NULL,
  `club` int(11) NOT NULL,
  `comentari` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrecs`
--

CREATE TABLE `carrecs` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `descripcio` varchar(50) NOT NULL,
  `directiu` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrecs`
--

INSERT INTO `carrecs` (`id`, `nom`, `descripcio`, `directiu`) VALUES
(1, 'President', 'President del Club o Entitat', 'S'),
(2, 'Delegat', 'Delegat del Club o Entitat', 'N'),
(3, 'Vocal', 'Vocal de la Junta Directiva', 'S'),
(4, 'Metge', 'Metge del Club o Entitat', 'N'),
(5, 'Encarregat de Camp', 'Encarregat de Camp', 'N'),
(6, 'Fisio', 'Fisioterapeuta', 'N'),
(7, 'Preparador Físic', 'Preparador Físic', 'N'),
(10, 'Vice President', 'Vice President de la Junta Directiva', 'S'),
(11, 'Secretari', 'Secretari de la Junta Directiva', 'S'),
(12, 'Tresorer', 'Tresorer de la Junta Directiva', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `descripcio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `nom`, `descripcio`) VALUES
(1, '1r Divisió', 'Primera Divisió'),
(2, '2n Divisió', 'Segona Divisió'),
(3, '2n Divisió B', 'Segona Divisió B'),
(4, '3r Divisió', 'Tercera Divisió'),
(5, 'Regional Preferent', 'Regional Preferent'),
(6, 'Juvenil', 'Juvenil'),
(7, '1r Regional', 'Primera Regional'),
(8, '2n Regional', 'Segona Regional'),
(9, '3r Regional', 'Tercera Regional'),
(10, '4t Regional', 'Quarta Regional'),
(11, 'Cadet', 'Cadet'),
(12, 'Infantil', 'Infantil'),
(13, 'Benjamí', 'Benjamí'),
(14, 'Pre-Benjamí', 'Pre-Benjamí'),
(15, 'Aleví', 'Aleví');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubs`
--

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `poblacions_id` int(11) DEFAULT NULL,
  `pais_id` int(11) DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  `inici` year(4) DEFAULT NULL,
  `inici_detall` varchar(100) DEFAULT NULL,
  `nom_esportiu` varchar(50) DEFAULT NULL,
  `escut` int(11) NOT NULL DEFAULT '0',
  `himne` int(11) NOT NULL DEFAULT '0',
  `cd` int(11) NOT NULL DEFAULT '0',
  `insignia` int(11) NOT NULL DEFAULT '0',
  `camiseta` int(11) NOT NULL DEFAULT '0',
  `bufanda` int(11) NOT NULL DEFAULT '0',
  `bandera` int(11) NOT NULL DEFAULT '0',
  `altre` varchar(100) NOT NULL,
  `detalls2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clubs`
--

INSERT INTO `clubs` (`id`, `nom`, `poblacions_id`, `pais_id`, `provincia_id`, `inici`, `inici_detall`, `nom_esportiu`, `escut`, `himne`, `cd`, `insignia`, `camiseta`, `bufanda`, `bandera`, `altre`, `detalls2`) VALUES
(4, 'CE ALAIOR', 5, 1, 51, 1934, 'Fundado de fusión CD Alaiorense - Alaior FC', 'ALAIOR / CD', 1, 1, 0, 1, 1, 0, 1, '', ''),
(5, 'CD MENORCA', 6, 1, 51, 1920, 'Nombre Inicial  MAHON FC.', 'MENORCA', 1, 0, 0, 1, 1, 1, 1, 'Libro', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competicions`
--

CREATE TABLE `competicions` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `descripcio` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `competicions`
--

INSERT INTO `competicions` (`id`, `nom`, `descripcio`) VALUES
(1, 'Lliga', 'Liga Nacional España'),
(2, 'Copa del Rei', 'Copa de Su Majestad el Rey'),
(3, 'Amistós', 'Amistós'),
(4, 'Copa Federació', 'Copa Federación Española de Futbol'),
(5, 'Seleccions Autonòmiques', 'Campionat de Seleccions Autonòmiques'),
(6, 'Super Copa España', 'Super Copa España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competicio_entitat`
--

CREATE TABLE `competicio_entitat` (
  `id` int(11) NOT NULL,
  `id_entitat` int(11) NOT NULL,
  `temporada` varchar(20) NOT NULL,
  `id_competicio` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `tecnic` varchar(50) NOT NULL,
  `detalls1` varchar(30) NOT NULL,
  `pj` int(11) NOT NULL,
  `pg` int(11) NOT NULL,
  `pe` int(11) NOT NULL,
  `pp` int(11) NOT NULL,
  `gf` int(11) NOT NULL,
  `gc` int(11) NOT NULL,
  `punts` int(11) NOT NULL,
  `classificacio` varchar(10) NOT NULL,
  `detalls2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `competicio_entitat`
--

INSERT INTO `competicio_entitat` (`id`, `id_entitat`, `temporada`, `id_competicio`, `id_categoria`, `tecnic`, `detalls1`, `pj`, `pg`, `pe`, `pp`, `gf`, `gc`, `punts`, `classificacio`, `detalls2`) VALUES
(1, 4, '2002/03', 1, 7, '??', 'Debut en Competición', 8, 2, 1, 4, 19, 24, 5, '4/5', ''),
(3, 5, '1942', 1, 7, 'Antonio Pascual “Cicerón\"', '', 8, 5, 2, 1, 28, 18, 12, '1/5', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunitats`
--

CREATE TABLE `comunitats` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `paisos_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunitats`
--

INSERT INTO `comunitats` (`id`, `nom`, `paisos_id`) VALUES
(1, 'Andalucía', 1),
(2, 'Aragón', 1),
(3, 'Asturias', 1),
(4, 'Balears, Illes', 1),
(5, 'Canarias', 1),
(6, 'Cantabria', 1),
(7, 'Castilla y León', 1),
(8, 'Castilla-La Mancha', 1),
(9, 'Cataluña', 1),
(10, 'Comunitat Valenciana', 1),
(11, 'Extremadura', 1),
(12, 'Galicia', 1),
(13, 'Madrid', 1),
(14, 'Murcia', 1),
(15, 'Navarra', 1),
(16, 'País Vasco', 1),
(17, 'La Rioja', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `continents`
--

CREATE TABLE `continents` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `continents`
--

INSERT INTO `continents` (`id`, `nom`) VALUES
(1, 'Africa'),
(2, 'Asia'),
(3, 'Europa'),
(4, 'Nord-Amèrica'),
(5, 'Sud-Amèrica'),
(6, 'Oceania');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demarcacions`
--

CREATE TABLE `demarcacions` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `descripcio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `demarcacions`
--

INSERT INTO `demarcacions` (`id`, `nom`, `descripcio`) VALUES
(1, 'Porter', 'Porter'),
(2, 'Defensa', 'Defensa'),
(3, 'Mig', 'Mig'),
(4, 'Davanter', 'Davanter');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisio`
--

CREATE TABLE `divisio` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `document_entitat`
--

CREATE TABLE `document_entitat` (
  `id` int(11) NOT NULL,
  `id_entitat` int(11) NOT NULL,
  `temporada` year(4) NOT NULL,
  `document` varchar(30) NOT NULL,
  `continguts` varchar(50) NOT NULL,
  `premsa` varchar(30) NOT NULL,
  `altres` varchar(30) NOT NULL,
  `foto` int(11) NOT NULL,
  `entrevista` int(11) NOT NULL,
  `reportatge` int(11) NOT NULL,
  `cartell` int(11) NOT NULL,
  `llibre` int(11) NOT NULL,
  `video` int(11) NOT NULL,
  `altre1` varchar(20) NOT NULL,
  `altre2` varchar(30) NOT NULL,
  `detalls` varchar(100) NOT NULL,
  `fotod` varchar(100) NOT NULL,
  `entrevistad` varchar(100) NOT NULL,
  `reportatged` varchar(100) NOT NULL,
  `cartelld` varchar(100) NOT NULL,
  `llibred` varchar(100) NOT NULL,
  `videod` varchar(100) NOT NULL,
  `altre1d` varchar(100) NOT NULL,
  `altre2d` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `document_entitat`
--

INSERT INTO `document_entitat` (`id`, `id_entitat`, `temporada`, `document`, `continguts`, `premsa`, `altres`, `foto`, `entrevista`, `reportatge`, `cartell`, `llibre`, `video`, `altre1`, `altre2`, `detalls`, `fotod`, `entrevistad`, `reportatged`, `cartelld`, `llibred`, `videod`, `altre1d`, `altre2d`) VALUES
(1, 4, 1934, 'Acta Fundació Club', 'Acta Fundació Club', '', '', 0, 0, 0, 0, 0, 0, '', '', 'banda sonora', '', '', '', '', '', '', '', ''),
(3, 4, 1942, 'Carta UD Levante', 'Cesión Jugador por Mili', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(4, 4, 1981, 'Grabación Radio', 'Grabación Radio José Mª. Garcia', '', '', 0, 0, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(5, 4, 1993, 'Cartel', 'Cartel  Partido Final Camp. Balear Juv.', '', '', 0, 0, 0, 1, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(6, 4, 1994, 'Libro', '1000 Goles 3ª. Div. P. Perea', '', '', 0, 0, 0, 0, 1, 0, '', '', '', '', '', '', '', '', '', '', ''),
(7, 4, 1994, 'Foto', 'Ascenso Div. Honor Juv 94-95', '', '', 1, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(8, 4, 1996, 'Entrevista', 'Esp. Sant Llorenç 1996	', '', '', 0, 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(9, 4, 1997, 'Especial Revista D.M.', '75 Aniversario', 'D.M.', '', 0, 0, 0, 1, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(10, 4, 1999, 'Estreno + Edición +CD', 'Estreno + Edición +CD', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', ''),
(11, 4, 2004, 'Camiseta', 'Camiseta Temp. 2004/55 Cad.  ', '', '', 0, 0, 0, 0, 0, 0, 'Camiseta', '', '', '', '', '', '', '', '', '', ''),
(12, 4, 2005, 'Bufanda', 'Confección 2005', '', '', 0, 0, 0, 0, 0, 0, 'Bufanda', '', '', '', '', '', '', '', '', 'Confección 2005', ''),
(13, 5, 1983, 'Certificación RFEF', 'Afiliación Federativa', '', '', 0, 0, 0, 0, 0, 0, '', '', 'Afiliación Federativa del 1 Marzo 1920 / Libro CD. Menorca Tomo I Pag. 9', '', '', '', '', '', '', '', ''),
(14, 5, 1920, 'Libro Historia CD. Menorca', 'Tomo I', '', 'Autor Sr. Deseado Mercadal Gel', 0, 0, 0, 0, 1, 0, '', '', '', '', '', '', '', '', '', '', ''),
(15, 5, 1974, 'Libro Historia CD. Menorca', 'Tomo I / Acta Fusión', '', '', 0, 0, 0, 0, 1, 0, '', '', 'Acta Fusión / CD. Menorca-UD. Mahón / Creación Sporting Mahones FC', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equips`
--

CREATE TABLE `equips` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `clubs_id` int(11) DEFAULT NULL,
  `catagories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimedias`
--

CREATE TABLE `multimedias` (
  `id` int(11) NOT NULL,
  `tipus` varchar(45) DEFAULT NULL,
  `ubicacio` varchar(45) DEFAULT NULL,
  `clubs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paisos`
--

CREATE TABLE `paisos` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `continents_id` int(11) DEFAULT NULL,
  `nom_eng` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paisos`
--

INSERT INTO `paisos` (`id`, `nom`, `continents_id`, `nom_eng`) VALUES
(1, 'España', 3, 'Spain'),
(2, 'Francia', 3, 'France'),
(3, 'Portugal', 3, 'Portugal'),
(4, 'Italia', 3, 'Italy'),
(5, 'Alemania', 3, 'Germany'),
(6, 'Austria', 3, 'Austria'),
(7, 'Reino Unido', 3, 'United Kingdom'),
(8, 'Suiza', 3, 'Switzerland'),
(9, 'Irlanda', 3, 'Ireland'),
(10, 'Belgica', 3, 'Belgium'),
(11, 'Holanda', 3, 'Netherlands'),
(12, 'Dinamarca', 3, 'Denmark'),
(13, 'Luxemburgo', 3, 'Luxembourg'),
(14, 'Republica Checa', 3, 'Czech Republic'),
(15, 'Polonia', 3, 'Poland'),
(16, 'Eslovaquia', 3, 'Slovakia'),
(17, 'Hungria', 3, 'Hungary'),
(18, 'Eslovenia', 3, 'Slovenia'),
(19, 'Suecia', 3, 'Sweden'),
(20, 'Noruega', 3, 'Norway'),
(21, 'Finlandia', 3, 'Finland'),
(22, 'Grecia', 3, 'Greece'),
(23, 'Albania', 3, 'Albania'),
(24, 'Croacia', 3, 'Croatia'),
(25, 'Rumania', 3, 'Romania'),
(26, 'Bosnia Herzegovina', 3, 'Bosnia and Herzegovina'),
(27, 'Montenegro', 3, 'Montenegro'),
(28, 'Moldavia', 3, 'Moldova'),
(29, 'Ucrania', 3, 'Ukraine'),
(30, 'Belorusia', 3, 'Belarus'),
(31, 'Lituania', 3, 'Lithuania'),
(32, 'Latvia', 3, 'Latvia'),
(33, 'Estonia', 3, 'Estonia'),
(34, 'Turquia', 3, 'Turkey'),
(35, 'Serbia', 3, 'Serbia'),
(36, 'Kosovo', 3, 'Kosovo'),
(37, 'Bulgaria', 3, 'Bulgaria'),
(38, 'Macedonia', 3, 'Republic of Macedonia'),
(39, 'Georgia', 3, 'Georgia'),
(40, 'Armenia', 3, 'Armenia'),
(41, 'Azerbaijan', 3, 'Azerbaijan'),
(42, 'Rusia', 3, 'Russia'),
(43, 'Marruecos', 1, 'Morocco'),
(44, 'Algeria', 1, 'Algeria'),
(45, 'Sahara Oeste', 1, 'Western Sahara'),
(46, 'Libia', 1, 'Libya'),
(47, 'Tunez', 1, 'Tunisia'),
(48, 'Egipto', 1, 'Egypt'),
(49, 'Sudan', 1, 'Sudan'),
(50, 'Chad', 1, 'Chad'),
(51, 'Niger', 1, 'Niger'),
(52, 'Mali', 1, 'Mali'),
(53, 'Mauritania', 1, 'Mauritania'),
(54, 'Eritrea', 1, 'Eritrea'),
(55, 'Djibouti', 1, 'Djibouti'),
(56, 'Somalia', 1, 'Somaliland'),
(57, 'Etiopia', 1, 'Ethiopia'),
(58, 'Sudan Sur', 1, 'South Sudan'),
(59, 'Republica Central Africana', 1, 'Central African Republic'),
(60, 'Camerun', 1, 'Cameroon'),
(61, 'Nigeria', 1, 'Nigeria'),
(62, 'Benin', 1, 'Benin'),
(63, 'Togo', 1, 'Togo'),
(64, 'Burkina Faso', 1, 'Burkina Faso'),
(65, 'Gana', 1, 'Ghana'),
(66, 'Costa de Ivory', 1, 'Ivory Coast'),
(67, 'Liberia', 1, 'Liberia'),
(68, 'Sierra Leona', 1, 'Sierra Leone'),
(69, 'Guinea', 1, 'Guinea'),
(70, 'Guinea-Bissau', 1, 'Guinea-Bissau'),
(71, 'Gambia', 1, 'The Gambia'),
(72, 'Senegal', 1, 'Senegal'),
(73, 'Guinea Ecuatorial ', 1, 'Equatorial Guinea'),
(74, 'Gabon', 1, 'Gabon'),
(75, 'Republica del Congo', 1, 'Republic of the Congo'),
(76, 'Republica Democratica del Congo', 1, 'Democratic Republic of the Congo'),
(77, 'Uganda', 1, 'Uganda'),
(78, 'Kenia', 1, 'Kenya'),
(79, 'Tanzania', 1, 'Tanzania'),
(80, 'Rwanda', 1, 'Rwanda'),
(81, 'Burundi', 1, 'Burundi'),
(82, 'Zambia', 1, 'Zambia'),
(83, 'Angola', 1, 'Angola'),
(84, 'Malawi', 1, 'Malawi'),
(85, 'Mozambique', 1, 'Mozambique'),
(86, 'Madagascar', 1, 'Madagascar'),
(87, 'Zimbawe', 1, 'Zimbabwe'),
(88, 'Botswana', 1, 'Botswana'),
(89, 'Namibia', 1, 'Namibia'),
(90, 'eSwatini', 1, 'eSwatini'),
(91, 'Lesotho', 1, 'Lesotho'),
(92, 'Sudafrica', 1, 'South Africa'),
(93, 'Seychelles', 1, 'Seychelles'),
(94, 'Iraq', 2, 'Iraq'),
(95, 'Iran', 2, 'Iran'),
(96, 'Jordania', 2, 'Jordan'),
(97, 'Kuwait', 2, 'Kuwait'),
(98, 'Lebanon', 2, 'Lebanon'),
(99, 'Oman', 2, 'Oman'),
(100, 'Qatar', 2, 'Qatar'),
(101, 'Arabia Saudi', 2, 'Saudi Arabia'),
(102, 'Siria', 2, 'Syria'),
(103, 'Emiratos Arabes Unidos', 2, 'United Arab Emirates'),
(104, 'Yemen', 2, 'Yemen'),
(105, 'Georgia', 2, 'Georgia'),
(106, 'Armenia', 2, 'Armenia'),
(107, 'Azerbaijan', 2, 'Azerbaijan'),
(108, 'Kazakhstan', 2, 'Kazakhstan'),
(109, 'Uzbekistan', 2, 'Uzbekistan'),
(110, 'Kyrgyzstan', 2, 'Kyrgyzstan'),
(111, 'Turkmenistan', 2, 'Turkmenistan'),
(112, 'Tajikistan', 2, 'Tajikistan'),
(113, 'India', 2, 'India'),
(114, 'Nepal', 2, 'Nepal'),
(115, 'Bhutan', 2, 'Bhutan'),
(116, 'Canada', 4, 'Canada'),
(117, 'Estados Unidos de America', 4, 'United States of America'),
(118, 'Mexico', 4, 'Mexico'),
(119, 'Bahamas', 4, 'The Bahamas'),
(120, 'Cuba', 4, 'Cuba'),
(121, 'Jamaica', 4, 'Jamaica'),
(122, 'Haiti', 4, 'Haiti'),
(123, 'Republica Dominicana', 4, 'Dominican Republic'),
(124, 'Guatemala', 4, 'Guatemala'),
(125, 'Belize', 4, 'Belize'),
(126, 'El Salvador', 4, 'El Salvador'),
(127, 'Honduras', 4, 'Honduras'),
(128, 'Nicaragua', 4, 'Nicaragua'),
(129, 'Costa Rica', 4, 'Costa Rica'),
(130, 'Panama', 4, 'Panama'),
(131, 'Colombia', 5, 'Colombia'),
(132, 'Venezuela', 5, 'Venezuela'),
(133, 'Guyana', 5, 'Guyana'),
(134, 'Surinam', 5, 'Suriname'),
(135, 'Francia', 5, 'France'),
(136, 'Ecuador', 5, 'Ecuador'),
(137, 'Peru', 5, 'Peru'),
(138, 'Bolivia', 5, 'Bolivia'),
(139, 'Brazil', 5, 'Brazil'),
(140, 'Paraguay', 5, 'Paraguay'),
(141, 'Uruguay', 5, 'Uruguay'),
(142, 'Argentina', 5, 'Argentina'),
(143, 'Chile', 5, 'Chile'),
(144, 'Australia', 6, 'Australia'),
(145, 'Nueva Zelanda', 6, 'New Zealand'),
(146, 'Papua Nueva Guinea', 6, 'Papua New Guinea'),
(147, 'Indonesia', 6, 'Indonesia'),
(148, 'Filipinas', 6, 'Philippines'),
(149, 'Fiji', 6, 'Fiji'),
(150, 'Malasia', 6, 'Malaysia'),
(151, 'Brunei', 6, 'Brunei');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partits`
--

CREATE TABLE `partits` (
  `local` int(11) NOT NULL,
  `visitant` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `gols_local` int(2) DEFAULT NULL,
  `gols_visitant` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persones`
--

CREATE TABLE `persones` (
  `id` int(11) NOT NULL,
  `nom_esportiu` varchar(50) NOT NULL,
  `nom` varchar(150) DEFAULT NULL,
  `ap1` varchar(150) DEFAULT NULL,
  `ap2` varchar(150) DEFAULT NULL,
  `alias` varchar(250) DEFAULT NULL,
  `croniques` int(4) DEFAULT NULL,
  `fotos` int(4) DEFAULT NULL,
  `entrevistes` int(4) DEFAULT NULL,
  `data_naixament` year(4) DEFAULT NULL,
  `mort` year(4) DEFAULT NULL,
  `mort_detall` varchar(200) DEFAULT NULL,
  `detalls` varchar(30) NOT NULL,
  `material` varchar(30) NOT NULL,
  `ficha` int(11) NOT NULL,
  `dada1` varchar(30) NOT NULL,
  `dada2` varchar(30) NOT NULL,
  `dada3` varchar(30) NOT NULL,
  `detalls2` varchar(30) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `poblacions_id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `paisos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persones`
--

INSERT INTO `persones` (`id`, `nom_esportiu`, `nom`, `ap1`, `ap2`, `alias`, `croniques`, `fotos`, `entrevistes`, `data_naixament`, `mort`, `mort_detall`, `detalls`, `material`, `ficha`, `dada1`, `dada2`, `dada3`, `detalls2`, `dni`, `poblacions_id`, `provincia_id`, `paisos_id`) VALUES
(1, 'FINESTRES', 'Ramón', 'Finestres', 'Juanico', 'PAULO', 0, 20, 0, 1941, 2019, '', '1º Hist. AHFM', '', 0, 'llibre 1', ' 2', ' 3', '', '18223345G', 5, 51, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilles`
--

CREATE TABLE `plantilles` (
  `equips_id` int(11) NOT NULL,
  `persones_id` int(11) NOT NULL,
  `temporada` char(4) NOT NULL,
  `carrec` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacions`
--

CREATE TABLE `poblacions` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) DEFAULT NULL,
  `provincies_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `poblacions`
--

INSERT INTO `poblacions` (`id`, `nom`, `provincies_id`) VALUES
(1, 'Ciutadella', 51),
(2, 'Ferreries', 51),
(3, 'Es Mercadal', 51),
(4, 'Es Migjorn Gran', 51),
(5, 'Alaior', 51),
(6, 'Maó', 51),
(7, 'Es Castell', 51),
(8, 'Sant Lluís', 51),
(9, 'Berlin', 55),
(10, 'Paris', 55),
(12, 'Eivissa', 52),
(13, 'Sant Antoni de Portmany', 52),
(14, 'Sant Joan de Labritja', 52),
(15, 'Sant Josep de sa Talaia', 52),
(16, 'Santa Eulària des Riu', 52),
(17, 'Alaró', 7),
(18, 'Alcúdia', 7),
(19, 'Algaida', 7),
(20, 'Andratx', 7),
(21, 'Ariany', 7),
(22, 'Artà', 7),
(23, 'Banyalbufar', 7),
(24, 'Binissalem', 7),
(25, 'Búger', 7),
(26, 'Bunyola', 7),
(27, 'Calvià', 7),
(28, 'Campanet', 7),
(29, 'Campos', 7),
(30, 'Capdepera', 7),
(31, 'Consell', 7),
(32, 'Costitx', 7),
(33, 'Deià', 7),
(34, 'Escorca', 7),
(35, 'Esporles', 7),
(36, 'Estellencs', 7),
(37, 'Felanitx	Mallorca', 7),
(38, 'Fornalutx', 7),
(39, 'Inca', 7),
(40, 'Lloret de Vistalegre', 7),
(41, 'Lloseta', 7),
(42, 'Llubí', 7),
(43, 'Llucmajor', 7),
(44, 'Manacor', 7),
(45, 'Mancor de la Vall', 7),
(46, 'Maria de la Salut', 7),
(47, 'Marratxí', 7),
(48, 'Montuïri', 7),
(49, 'Muro', 7),
(50, 'Palma', 7),
(51, 'Petra', 7),
(52, 'Sa Pobla', 7),
(53, 'Pollença', 7),
(54, 'Porreres', 7),
(55, 'Puigpunyent', 7),
(56, 'Ses Salines', 7),
(57, 'Sant Joan', 7),
(58, 'Sant Llorenç des Cardassar', 7),
(59, 'Santa Eugènia', 7),
(60, 'Santa Margalida', 7),
(61, 'Santa Maria del Camí', 7),
(62, 'Santanyí', 7),
(63, 'Selva', 7),
(64, 'Sencelles', 7),
(65, 'Sineu', 7),
(66, 'Sóller', 7),
(67, 'Son Servera', 7),
(68, 'Valldemossa', 7),
(69, 'Vilafranca de Bonany', 7),
(70, 'Fornells', 51),
(71, 'Sant Climent', 51);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincies`
--

CREATE TABLE `provincies` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `comunitats_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincies`
--

INSERT INTO `provincies` (`id`, `nom`, `comunitats_id`) VALUES
(1, 'Álava', 16),
(2, 'Albacete', 8),
(3, 'Alicante', 10),
(4, 'Almería', 1),
(5, 'Ávila', 7),
(6, 'Badajoz', 11),
(7, 'Mallorca', 4),
(8, 'Barcelona', 9),
(9, 'Burgos', 7),
(10, 'Cáceres', 11),
(11, 'Cádiz', 1),
(12, 'Castellón', 10),
(13, 'Ciudad Real', 8),
(14, 'Córdoba', 1),
(15, 'A Coruña', 12),
(16, 'Cuenca', 8),
(17, 'Girona', 9),
(18, 'Granada', 1),
(19, 'Guadalajara', 8),
(20, 'Gipuzkoa', 16),
(21, 'Huelva', 1),
(22, 'Huesca', 2),
(23, 'Jaén', 1),
(24, 'León', 7),
(25, 'Lleida', 9),
(26, 'Rioja', 17),
(27, 'Lugo', 12),
(28, 'Madrid', 13),
(29, 'Málaga', 1),
(30, 'Murcia', 14),
(31, 'Navarra', 15),
(32, 'Ourense', 12),
(33, 'Asturias', 3),
(34, 'Palencia', 7),
(35, 'Palmas', 5),
(36, 'Pontevedra', 12),
(37, 'Salamanca', 7),
(38, 'Santa Cruz de Tenerife', 5),
(39, 'Cantabria', 6),
(40, 'Segovia', 7),
(41, 'Sevilla', 1),
(42, 'Soria', 7),
(43, 'Tarragona', 9),
(44, 'Teruel', 2),
(45, 'Toledo', 8),
(46, 'Valencia/València', 10),
(47, 'Valladolid', 7),
(48, 'Bizkaia', 16),
(49, 'Zamora', 7),
(50, 'Zaragoza', 2),
(51, 'Menorca', 4),
(52, 'Eivissa', 4),
(55, 'No Aplicable', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicituds`
--

CREATE TABLE `solicituds` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `persones_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp`
--

CREATE TABLE `temp` (
  `comid` varchar(200) NOT NULL,
  `com` varchar(200) NOT NULL,
  `provid` varchar(200) NOT NULL,
  `prov` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temp`
--

INSERT INTO `temp` (`comid`, `com`, `provid`, `prov`) VALUES
('1', 'Andalucía', '4', 'Almería'),
('1', 'Andalucía', '11', 'Cádiz'),
('1', 'Andalucía', '14', 'Córdoba'),
('1', 'Andalucía', '18', 'Granada'),
('1', 'Andalucía', '21', 'Huelva'),
('1', 'Andalucía', '23', 'Jaén'),
('1', 'Andalucía', '29', 'Málaga'),
('1', 'Andalucía', '41', 'Sevilla'),
('2', 'Aragón', '22', 'Huesca'),
('2', 'Aragón', '44', 'Teruel'),
('2', 'Aragón', '50', 'Zaragoza'),
('3', 'Asturias', '33', 'Asturias'),
('4', 'Balears Balears', '7', 'Balears Balears'),
('5', 'Canarias', '35', 'Palmas'),
('5', 'Canarias', '38', 'Santa Cruz de Tenerife'),
('6', 'Cantabria', '39', 'Cantabria'),
('7', 'Castilla y León', '5', 'Ávila'),
('7', 'Castilla y León', '9', 'Burgos'),
('7', 'Castilla y León', '24', 'León'),
('7', 'Castilla y León', '34', 'Palencia'),
('7', 'Castilla y León', '37', 'Salamanca'),
('7', 'Castilla y León', '40', 'Segovia'),
('7', 'Castilla y León', '42', 'Soria'),
('7', 'Castilla y León', '47', 'Valladolid'),
('7', 'Castilla y León', '49', 'Zamora'),
('8', 'Castilla-La Mancha', '2', 'Albacete'),
('8', 'Castilla-La Mancha', '13', 'Ciudad Real'),
('8', 'Castilla-La Mancha', '16', 'Cuenca'),
('8', 'Castilla-La Mancha', '19', 'Guadalajara'),
('8', 'Castilla-La Mancha', '45', 'Toledo'),
('9', 'Cataluña', '8', 'Barcelona'),
('9', 'Cataluña', '17', 'Girona'),
('9', 'Cataluña', '25', 'Lleida'),
('9', 'Cataluña', '43', 'Tarragona'),
('10', 'Comunitat Valenciana', '3', 'Alicante/Alacant'),
('10', 'Comunitat Valenciana', '12', 'Castellón/Castelló'),
('10', 'Comunitat Valenciana', '46', 'Valencia/València'),
('11', 'Extremadura', '6', 'Badajoz'),
('11', 'Extremadura', '10', 'Cáceres'),
('12', 'Galicia', '15', 'A Coruña'),
('12', 'Galicia', '27', 'Lugo'),
('12', 'Galicia', '32', 'Ourense'),
('12', 'Galicia', '36', 'Pontevedra'),
('13', 'Madrid', '28', 'Madrid'),
('14', 'Murcia', '30', 'Murcia'),
('15', 'Navarra', '31', 'Navarra'),
('16', 'País Vasco', '1', 'Araba/Álava'),
('16', 'País Vasco', '48', 'Bizkaia'),
('16', 'País Vasco', '20', 'Gipuzkoa'),
('17', 'La Rioja', '26', 'Rioja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temps_activitats`
--

CREATE TABLE `temps_activitats` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `descripcio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `temps_activitats`
--

INSERT INTO `temps_activitats` (`id`, `nom`, `descripcio`) VALUES
(1, 'Torneig Estiu', 'Torneig Estiu'),
(2, 'Torneig Tardor', 'Torneig Tardor'),
(3, 'Torneig Hivern', 'Torneig Hivern'),
(4, 'Debut Lliga', 'Debut Lliga'),
(5, 'Fase Ascens', 'Fase Ascens');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trajectoria_persona`
--

CREATE TABLE `trajectoria_persona` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `role` char(1) NOT NULL,
  `temporada` year(4) NOT NULL,
  `id_club` int(11) NOT NULL,
  `id_carrec` int(11) NOT NULL,
  `id_visitant` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_competicio` int(11) NOT NULL,
  `id_demarcacio` int(11) NOT NULL,
  `detalls1` varchar(100) NOT NULL,
  `pj` int(11) NOT NULL,
  `resultat` varchar(30) NOT NULL,
  `pg` int(11) NOT NULL,
  `pe` int(11) NOT NULL,
  `pp` int(11) NOT NULL,
  `gf` int(11) NOT NULL,
  `gc` int(11) NOT NULL,
  `classificacio` varchar(30) NOT NULL,
  `detalls2` varchar(100) NOT NULL,
  `actuacio` varchar(30) NOT NULL,
  `num_equips` int(11) NOT NULL,
  `entrenador` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` char(1) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`username`, `password`, `role`) VALUES
('admin', '12345', 'A'),
('bernat', 'petrus', 'V'),
('lorenzo', 'triay', 'V'),
('osvaldo', 'correche', 'V'),
('paco', 'perea', 'V');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accions_user`
--
ALTER TABLE `accions_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indices de la tabla `activitats_entitat`
--
ALTER TABLE `activitats_entitat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entitat` (`id_entitat`);

--
-- Indices de la tabla `arbitratges`
--
ALTER TABLE `arbitratges`
  ADD PRIMARY KEY (`divisio_id`,`persones_id`,`temporada`),
  ADD KEY `fk_divisio_has_persones_persones1_idx` (`persones_id`),
  ADD KEY `fk_divisio_has_persones_divisio1_idx` (`divisio_id`);

--
-- Indices de la tabla `caixo_club`
--
ALTER TABLE `caixo_club`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club` (`club`);

--
-- Indices de la tabla `caixo_persona`
--
ALTER TABLE `caixo_persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `carrecs`
--
ALTER TABLE `carrecs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clubs_poblacions1_idx` (`poblacions_id`),
  ADD KEY `fk_clubs_paisos1_idx` (`pais_id`),
  ADD KEY `fk_clubs_provincies1_idx` (`provincia_id`);

--
-- Indices de la tabla `competicions`
--
ALTER TABLE `competicions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `competicio_entitat`
--
ALTER TABLE `competicio_entitat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entitat` (`id_entitat`);

--
-- Indices de la tabla `comunitats`
--
ALTER TABLE `comunitats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comunitats_paisos1_idx` (`paisos_id`);

--
-- Indices de la tabla `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `demarcacions`
--
ALTER TABLE `demarcacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `divisio`
--
ALTER TABLE `divisio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `document_entitat`
--
ALTER TABLE `document_entitat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entitat` (`id_entitat`);

--
-- Indices de la tabla `equips`
--
ALTER TABLE `equips`
  ADD PRIMARY KEY (`id`,`catagories_id`),
  ADD KEY `fk_equips_club1_idx` (`clubs_id`),
  ADD KEY `fk_equips_catagories1_idx` (`catagories_id`);

--
-- Indices de la tabla `multimedias`
--
ALTER TABLE `multimedias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_multimedias_clubs1_idx` (`clubs_id`);

--
-- Indices de la tabla `paisos`
--
ALTER TABLE `paisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_paisos_continents_idx` (`continents_id`);

--
-- Indices de la tabla `partits`
--
ALTER TABLE `partits`
  ADD PRIMARY KEY (`local`,`visitant`),
  ADD KEY `fk_equips_has_equips_equips2_idx` (`visitant`),
  ADD KEY `fk_equips_has_equips_equips1_idx` (`local`);

--
-- Indices de la tabla `persones`
--
ALTER TABLE `persones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantilles`
--
ALTER TABLE `plantilles`
  ADD PRIMARY KEY (`persones_id`,`temporada`,`carrec`,`equips_id`),
  ADD KEY `fk_equips_has_persones_persones1_idx` (`persones_id`),
  ADD KEY `fk_equips_has_persones_equips1_idx` (`equips_id`);

--
-- Indices de la tabla `poblacions`
--
ALTER TABLE `poblacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_poblacions_provincies1_idx` (`provincies_id`);

--
-- Indices de la tabla `provincies`
--
ALTER TABLE `provincies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provincies_comunitats1_idx` (`comunitats_id`);

--
-- Indices de la tabla `solicituds`
--
ALTER TABLE `solicituds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_solicituds_persones1_idx` (`persones_id`);

--
-- Indices de la tabla `temps_activitats`
--
ALTER TABLE `temps_activitats`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trajectoria_persona`
--
ALTER TABLE `trajectoria_persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persona` (`id_persona`,`id_club`,`id_carrec`,`id_categoria`,`id_demarcacio`),
  ADD KEY `id_carrec` (`id_carrec`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_demarcacio` (`id_demarcacio`),
  ADD KEY `id_club` (`id_club`),
  ADD KEY `id_competicio` (`id_competicio`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accions_user`
--
ALTER TABLE `accions_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT de la tabla `activitats_entitat`
--
ALTER TABLE `activitats_entitat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `caixo_club`
--
ALTER TABLE `caixo_club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `caixo_persona`
--
ALTER TABLE `caixo_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `carrecs`
--
ALTER TABLE `carrecs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `competicions`
--
ALTER TABLE `competicions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `competicio_entitat`
--
ALTER TABLE `competicio_entitat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `comunitats`
--
ALTER TABLE `comunitats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `continents`
--
ALTER TABLE `continents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `demarcacions`
--
ALTER TABLE `demarcacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `divisio`
--
ALTER TABLE `divisio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `document_entitat`
--
ALTER TABLE `document_entitat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `equips`
--
ALTER TABLE `equips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paisos`
--
ALTER TABLE `paisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT de la tabla `persones`
--
ALTER TABLE `persones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `poblacions`
--
ALTER TABLE `poblacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT de la tabla `provincies`
--
ALTER TABLE `provincies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `temps_activitats`
--
ALTER TABLE `temps_activitats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `trajectoria_persona`
--
ALTER TABLE `trajectoria_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activitats_entitat`
--
ALTER TABLE `activitats_entitat`
  ADD CONSTRAINT `activitats_entitat_ibfk_1` FOREIGN KEY (`id_entitat`) REFERENCES `clubs` (`id`);

--
-- Filtros para la tabla `arbitratges`
--
ALTER TABLE `arbitratges`
  ADD CONSTRAINT `fk_divisio_has_persones_divisio1` FOREIGN KEY (`divisio_id`) REFERENCES `divisio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_divisio_has_persones_persones1` FOREIGN KEY (`persones_id`) REFERENCES `persones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `caixo_club`
--
ALTER TABLE `caixo_club`
  ADD CONSTRAINT `caixo_club_ibfk_1` FOREIGN KEY (`club`) REFERENCES `clubs` (`id`);

--
-- Filtros para la tabla `caixo_persona`
--
ALTER TABLE `caixo_persona`
  ADD CONSTRAINT `caixo_persona_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persones` (`id`);

--
-- Filtros para la tabla `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `clubs_ibfk_1` FOREIGN KEY (`pais_id`) REFERENCES `paisos` (`id`),
  ADD CONSTRAINT `fk_clubs_poblacions1` FOREIGN KEY (`poblacions_id`) REFERENCES `poblacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clubs_provincies1` FOREIGN KEY (`provincia_id`) REFERENCES `provincies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `competicio_entitat`
--
ALTER TABLE `competicio_entitat`
  ADD CONSTRAINT `competicio_entitat_ibfk_1` FOREIGN KEY (`id_entitat`) REFERENCES `clubs` (`id`);

--
-- Filtros para la tabla `comunitats`
--
ALTER TABLE `comunitats`
  ADD CONSTRAINT `fk_comunitats_paisos1` FOREIGN KEY (`paisos_id`) REFERENCES `paisos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `document_entitat`
--
ALTER TABLE `document_entitat`
  ADD CONSTRAINT `document_entitat_ibfk_1` FOREIGN KEY (`id_entitat`) REFERENCES `clubs` (`id`);

--
-- Filtros para la tabla `equips`
--
ALTER TABLE `equips`
  ADD CONSTRAINT `fk_equips_catagories1` FOREIGN KEY (`catagories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equips_club1` FOREIGN KEY (`clubs_id`) REFERENCES `clubs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `multimedias`
--
ALTER TABLE `multimedias`
  ADD CONSTRAINT `fk_multimedias_clubs1` FOREIGN KEY (`clubs_id`) REFERENCES `clubs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paisos`
--
ALTER TABLE `paisos`
  ADD CONSTRAINT `fk_paisos_continents` FOREIGN KEY (`continents_id`) REFERENCES `continents` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `partits`
--
ALTER TABLE `partits`
  ADD CONSTRAINT `fk_equips_has_equips_equips1` FOREIGN KEY (`local`) REFERENCES `equips` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equips_has_equips_equips2` FOREIGN KEY (`visitant`) REFERENCES `equips` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plantilles`
--
ALTER TABLE `plantilles`
  ADD CONSTRAINT `fk_equips_has_persones_equips1` FOREIGN KEY (`equips_id`) REFERENCES `equips` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equips_has_persones_persones1` FOREIGN KEY (`persones_id`) REFERENCES `persones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `poblacions`
--
ALTER TABLE `poblacions`
  ADD CONSTRAINT `fk_poblacions_provincies1` FOREIGN KEY (`provincies_id`) REFERENCES `provincies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `provincies`
--
ALTER TABLE `provincies`
  ADD CONSTRAINT `fk_provincies_comunitats1` FOREIGN KEY (`comunitats_id`) REFERENCES `comunitats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicituds`
--
ALTER TABLE `solicituds`
  ADD CONSTRAINT `fk_solicituds_persones1` FOREIGN KEY (`persones_id`) REFERENCES `persones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trajectoria_persona`
--
ALTER TABLE `trajectoria_persona`
  ADD CONSTRAINT `trajectoria_persona_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persones` (`id`),
  ADD CONSTRAINT `trajectoria_persona_ibfk_2` FOREIGN KEY (`id_carrec`) REFERENCES `carrecs` (`id`),
  ADD CONSTRAINT `trajectoria_persona_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `trajectoria_persona_ibfk_4` FOREIGN KEY (`id_demarcacio`) REFERENCES `demarcacions` (`id`),
  ADD CONSTRAINT `trajectoria_persona_ibfk_5` FOREIGN KEY (`id_club`) REFERENCES `clubs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
