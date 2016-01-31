-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2016 a las 17:58:33
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartilla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activacion`
--

CREATE TABLE IF NOT EXISTS `activacion` (
  `id` int(10) unsigned NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `users_email` varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `activacion`
--

INSERT INTO `activacion` (`id`, `codigo`, `users_email`) VALUES
(2, '816345838e9e630723f1003bec8f23', 'd@gmail.com'),
(3, 'fca8cb380e7fa41b9ebea74af826a9', 'e@gmail.com'),
(4, '7ae6b32131e73a103ce28da224c2e3', 'andreyfanton@hotmail.com'),
(5, '3e921a837fb3793bb8d9b7e0985c04', 'e@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `id_actividad` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `dia` int(11) NOT NULL,
  `semana` int(11) NOT NULL,
  `respuesta` varchar(45) NOT NULL,
  `enunciado_actividad` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `tipo`, `dia`, `semana`, `respuesta`, `enunciado_actividad`) VALUES
(0, 'matematicas', 3, 1, '45', '9 x 5 ='),
(1, 'matematicas', 1, 1, '8', '5 + 3 ='),
(2, 'matematicas', 1, 1, '5', '14 - 9 ='),
(3, 'matematicas', 1, 1, '147', '21 x 7 ='),
(4, 'matematicas', 1, 1, '44', '32 + 12 ='),
(5, 'matematicas', 1, 1, '60', '76 - 16 ='),
(6, 'matematicas', 1, 1, '79', '44 + 35 ='),
(7, 'matematicas', 1, 1, '2', '12 / 6 ='),
(8, 'matematicas', 1, 1, '68', '34 x 2 ='),
(9, 'matematicas', 1, 1, '15', '7 + 8 ='),
(10, 'matematicas', 1, 1, '58', '80 - 22 ='),
(11, 'matematicas', 1, 1, '10', '4 + 6 ='),
(12, 'matematicas', 1, 1, '100', '98 + 2 ='),
(13, 'matematicas', 1, 1, '48', '12 x 4 ='),
(14, 'matematicas', 1, 1, '20', '100 / 5 ='),
(15, 'matematicas', 1, 1, '112', '56 x 2 ='),
(16, 'matematicas', 1, 1, '83', '49 + 34 ='),
(17, 'matematicas', 1, 1, '39', '69 - 30 ='),
(18, 'matematicas', 1, 1, '270', '54 x 5 ='),
(19, 'matematicas', 1, 1, '101', '78 + 23 ='),
(20, 'matematicas', 1, 1, '118', '59 x 2 ='),
(30, 'matematicas', 2, 1, '9', '6 + 3 ='),
(31, 'matematicas', 2, 1, '30', '21 + 9 ='),
(32, 'matematicas', 2, 1, '41', '34 + 7 ='),
(33, 'matematicas', 2, 1, '65', '67 - 2 ='),
(34, 'matematicas', 2, 1, '52', '45 + 7 ='),
(35, 'matematicas', 2, 1, '345', '69 x 5 ='),
(36, 'matematicas', 2, 1, '9', '72 / 8 ='),
(37, 'matematicas', 2, 1, '32', '77 - 45 ='),
(38, 'matematicas', 2, 1, '17', '6 + 11 ='),
(39, 'matematicas', 2, 1, '10', '44 - 34 ='),
(40, 'matematicas', 2, 1, '63', '7 x 9 ='),
(41, 'matematicas', 2, 1, '138', '99 + 39 ='),
(42, 'matematicas', 2, 1, '123', '67 + 56='),
(43, 'matematicas', 2, 1, '8', '56 / 7 ='),
(44, 'matematicas', 2, 1, '39', '78 x 2 ='),
(45, 'matematicas', 2, 1, '288', '48 x 6 ='),
(46, 'matematicas', 2, 1, '116', '70 + 46 ='),
(47, 'matematicas', 2, 1, '20', '87 - 67 ='),
(48, 'matematicas', 2, 1, '15', '6 + 9 ='),
(49, 'matematicas', 2, 1, '72', '24 x 3 ='),
(50, 'memoria', 4, 1, '2', 'estrella'),
(51, 'memoria', 4, 1, '4', 'cuadrado-amarillo'),
(52, 'memoria', 4, 1, '1', 'cuadrado-azul'),
(53, 'memoria', 4, 1, '3', 'circulo'),
(54, 'memoria', 1, 1, 'ALICATE', 'herramienta'),
(55, 'memoria', 1, 1, 'DESTORNILLADOR', 'herramienta'),
(56, 'memoria', 1, 1, 'MARTILLO', 'herramienta'),
(57, 'memoria', 1, 1, 'BANANO', 'fruta'),
(58, 'memoria', 1, 1, 'FRESA', 'fruta'),
(59, 'memoria', 1, 1, 'NARANJA', 'fruta'),
(60, 'memoria', 3, 1, 'PANTERA', 'salvaje'),
(61, 'memoria', 3, 1, 'AGUILA', 'salvaje'),
(62, 'memoria', 3, 1, 'ZORRO', 'salvaje'),
(63, 'memoria', 3, 1, 'PERRO', 'domestico'),
(64, 'memoria', 3, 1, 'GATO', 'domestico'),
(65, 'memoria', 3, 1, 'VACA', 'domestico'),
(66, 'atencion', 1, 1, 'ITALIA', 'pais1'),
(67, 'atencion', 1, 1, 'PARIS', 'pais2'),
(68, 'atencion', 1, 1, 'ARGENTINA', 'pais3'),
(69, 'memoria', 5, 1, '2', 'capitalNarino'),
(70, 'memoria', 5, 1, '5', 'cuentosDeAdas'),
(71, 'memoria', 5, 1, '4', 'RojoAzul'),
(72, 'memoria', 5, 1, '1', 'compromiso'),
(73, 'memoria', 5, 1, '3', 'vegetal'),
(74, 'memoria', 2, 1, 'CUADRO-A', 'circulo'),
(75, 'memoria', 2, 1, 'CUADRO-A', 'cara'),
(76, 'memoria', 2, 1, 'CUADRO-A', 'corazon'),
(77, 'memoria', 2, 1, 'CUADRO-A', 'hexagono'),
(78, 'memoria', 2, 1, 'CUADRO-B', 'cruz'),
(79, 'memoria', 2, 1, 'CUADRO-B', 'cubo'),
(80, 'memoria', 2, 1, 'CUADRO-B', 'cilindro'),
(81, 'memoria', 2, 1, 'CUADRO-B', 'sol'),
(82, 'atencion', 2, 1, '10', 'cantidad de numeros'),
(87, 'atencion', 3, 1, 'PEDRO', 'trabaja mas tiempo'),
(88, 'atencion', 3, 1, 'PARQUES,MUSEOS Y BIBLIOTECAS', 'lugares que visitan'),
(89, 'atencion', 3, 1, '3', 'cantidad de hijos'),
(90, 'atencion', 3, 1, 'RUTH', 'nombre esposa'),
(91, 'atencion', 3, 1, 'CARPINTERO', 'profesion'),
(92, 'atencion', 4, 1, '7°', 'semestre protagonista'),
(93, 'atencion', 4, 1, 'LITERATURA', 'carrera protagonista'),
(94, 'atencion', 4, 1, 'CAROLINE', 'nombre protagonista'),
(95, 'atencion', 4, 1, 'ESCRIBIR SU PROPIA NOVELA', 'meta protagonista'),
(96, 'atencion', 4, 1, 'UNA SEMANA', 'respuesta editorial'),
(97, 'atencion', 4, 1, 'EDITORIAL LITERATURAS S.A', 'nombre editorial'),
(98, 'atencion', 4, 1, 'MI MUNDO EXTRAñO', 'nombre novela'),
(99, 'atencion', 4, 1, '6', 'cantidad de 5'),
(100, 'atencion', 4, 1, '0', 'cantidad de 7'),
(101, 'atencion', 4, 1, '4', 'cantidad de 1'),
(102, 'atencion', 5, 1, 'TRENZA', 'repite en circulo'),
(103, 'atencion', 5, 1, '2', 'cuantas veces'),
(104, 'atencion', 5, 1, 'CRUGIDO,SOIDO,MAUYIDO,RUJIDO,TRENZZA,TRENSA', 'mal escritas'),
(105, 'atencion', 5, 1, '6', 'ido'),
(106, 'atencion', 5, 1, '2', 'esa'),
(107, 'matematicas', 3, 1, '79', '88 - 9 ='),
(109, 'matematicas', 3, 1, '22', '89 - 67 ='),
(110, 'matematicas', 3, 1, '145', '56 + 89 ='),
(111, 'matematicas', 3, 1, '13', '4 + 9 ='),
(112, 'matematicas', 3, 1, '78', '45 + 33 ='),
(113, 'matematicas', 3, 1, '16', '28 - 12 ='),
(114, 'matematicas', 3, 1, '31', '17 + 14 ='),
(115, 'matematicas', 3, 1, '320', '64 x 5 ='),
(116, 'matematicas', 3, 1, '22', '34 - 12 ='),
(117, 'matematicas', 3, 1, '30', '15 x 2 ='),
(118, 'matematicas', 3, 1, '173', '83 + 90 ='),
(119, 'matematicas', 3, 1, '45', '112 - 67 ='),
(120, 'matematicas', 3, 1, '7', '49 / 7 ='),
(121, 'matematicas', 3, 1, '46', '40 + 6 ='),
(122, 'matematicas', 3, 1, '50', '117 - 67 ='),
(123, 'matematicas', 3, 1, '78', '75 + 3 ='),
(124, 'matematicas', 3, 1, '57', '78 - 21 ='),
(125, 'matematicas', 3, 1, '21', '35 - 14 ='),
(126, 'matematicas', 3, 1, '250', '25 x 10 ='),
(127, 'matematicas', 4, 1, '34', '57 - 23 ='),
(128, 'matematicas', 4, 1, '72', ' 110 - 38 ='),
(129, 'matematicas', 4, 1, '50 ', '25 + 25 ='),
(130, 'matematicas', 4, 1, '145', '56 + 89 ='),
(131, 'matematicas', 4, 1, '85', '48 + 37 ='),
(132, 'matematicas', 4, 1, '205', '90 + 115 ='),
(133, 'matematicas', 4, 1, '2', '12 / 6 ='),
(134, 'matematicas', 4, 1, '126', '18 x 7 ='),
(135, 'matematicas', 4, 1, '72', '9 x 8 ='),
(136, 'matematicas', 4, 1, '3', '12 / 4 ='),
(137, 'matematicas', 4, 1, '71', '26 + 45 ='),
(138, 'matematicas', 4, 1, '9', '72 / 8 ='),
(139, 'matematicas', 4, 1, '125', '89 + 36 ='),
(140, 'matematicas', 4, 1, '288', '96 x 3 ='),
(141, 'matematicas', 4, 1, '48', '59 - 11  ='),
(142, 'matematicas', 4, 1, '6', '82 - 76 ='),
(143, 'matematicas', 4, 1, '44', '11 x 4 ='),
(144, 'matematicas', 4, 1, '80', '36 + 44 ='),
(145, 'matematicas', 4, 1, '63', '78 - 15 ='),
(146, 'matematicas', 4, 1, '130', '65 x 2 ='),
(147, 'matematicas', 5, 1, '67', '112 - 45 ='),
(148, 'matematicas', 5, 1, '94', '38 + 56 ='),
(149, 'matematicas', 5, 1, '10', '48 - 38 ='),
(150, 'matematicas', 5, 1, '112', '56 x 2 ='),
(151, 'matematicas', 5, 1, '91', '7 x 13 ='),
(152, 'matematicas', 5, 1, '80', '65 + 15  ='),
(153, 'matematicas', 5, 1, '24', '144 / 6 ='),
(154, 'matematicas', 5, 1, '42', '17 + 25 ='),
(155, 'matematicas', 5, 1, '90', '15 x 6 ='),
(156, 'matematicas', 5, 1, '57', '12 + 45  ='),
(157, 'matematicas', 5, 1, '325', '65 x 5 ='),
(158, 'matematicas', 5, 1, '5', '35 / 7 ='),
(159, 'matematicas', 5, 1, '204', '198 + 6 ='),
(160, 'matematicas', 5, 1, '171', '57 x 3 ='),
(161, 'matematicas', 5, 1, '187', '232 - 45 ='),
(162, 'matematicas', 5, 1, '13', '89 - 76 ='),
(163, 'matematicas', 5, 1, '108', '27 x 4 ='),
(164, 'matematicas', 5, 1, '22', '78 - 56 ='),
(165, 'matematicas', 5, 1, '165', '98 + 67 ='),
(166, 'matematicas', 5, 1, '500', '100 x 5 ='),
(167, 'memoria', 2, 2, 'NARANJA', '5'),
(168, 'memoria', 2, 2, '4', 'verde'),
(169, 'memoria', 2, 2, 'AMARILLO', '1'),
(170, 'memoria', 2, 2, 'VIOLETA', '3'),
(171, 'memoria', 2, 2, 'ROJO', '2'),
(172, 'memoria', 2, 2, '6', 'azul'),
(173, 'memoria', 1, 2, 'TRIANGULO', 'figura'),
(174, 'memoria', 1, 2, 'DIVISION', 'figura'),
(175, 'memoria', 1, 2, 'TRISTE', 'figura'),
(176, 'memoria', 1, 2, 'PENTAGONO', 'figura'),
(177, 'memoria', 1, 2, 'FELIZ', 'figura'),
(178, 'memoria', 1, 2, 'MAS', 'figura'),
(179, 'memoria', 3, 2, 'FUTBOL', 'deporte que jugaban'),
(180, 'memoria', 3, 2, 'SOLEADA', 'clima del dia del viaje'),
(181, 'memoria', 3, 2, 'DESORDEN', 'enojo de la madre'),
(182, 'memoria', 3, 2, 'LAZOS', 'objeto que no llevaban'),
(183, 'memoria', 3, 2, 'TIOS,PRIMOS,SOBRINOS,PADRES', 'quienes iban'),
(184, 'memoria', 4, 2, 'FOGATA', 'palabra1'),
(185, 'memoria', 4, 2, 'CAMIóN', 'palabra2'),
(186, 'memoria', 4, 2, 'LUCIéRNAGA', 'palabra3'),
(187, 'memoria', 4, 2, 'CUADRO', 'palabra4'),
(188, 'memoria', 4, 2, 'ESCALERAS', 'palabra5'),
(189, 'memoria', 4, 2, 'MONTAñA', 'palabra6'),
(190, 'memoria', 4, 2, 'CAMINAR', 'palabra7'),
(191, 'memoria', 4, 2, 'ESCORPIóN', 'palabra8'),
(192, 'memoria', 4, 2, 'BASURA', 'palabra9'),
(193, 'memoria', 5, 2, 'AMARILLO', 'color triangulo'),
(194, 'memoria', 5, 2, 'SEIS', 'puntas de la estrella'),
(195, 'memoria', 5, 2, 'CRUZ', 'figura dentro del circulo'),
(196, 'memoria', 5, 2, 'DERECHA', 'direccion flecha'),
(197, 'memoria', 1, 3, 'DOS', 'cantidad de circulos'),
(198, 'memoria', 1, 3, 'RAYO', 'figura amarilla'),
(199, 'memoria', 1, 3, 'CERO', 'cuadros negros'),
(200, 'memoria', 1, 3, 'UNO', 'cantidad de rombos'),
(201, 'memoria', 1, 3, 'AZUL', 'color que se repite'),
(202, 'memoria', 1, 3, 'CIRCULO', 'figura sin contacto'),
(203, 'memoria', 1, 3, 'UNO', 'cantidad de hexagonos'),
(204, 'memoria', 1, 3, 'TRIANGULO', 'figura de color negro'),
(205, 'memoria', 2, 3, 'CRUZ', 'figura de color rojo'),
(206, 'memoria', 2, 3, 'NEGRO', 'color flecha'),
(207, 'memoria', 2, 3, 'TRIANGULO', 'figura color morado'),
(208, 'memoria', 2, 3, 'NARANJA', 'color estrella'),
(209, 'memoria', 2, 3, 'HEXAGONO', 'figura de color azul'),
(210, 'memoria', 2, 3, 'CILINDRO', 'figura de color gris'),
(211, 'memoria', 3, 3, '263', 'numero1'),
(212, 'memoria', 3, 3, '65', 'numero2'),
(213, 'memoria', 3, 3, '99', 'numero3'),
(214, 'memoria', 3, 3, '001', 'numero4'),
(215, 'memoria', 3, 3, '789', 'numero5'),
(216, 'memoria', 3, 3, '33', 'numero6'),
(217, 'memoria', 3, 3, '46', 'numero7'),
(218, 'memoria', 3, 3, '765', 'numero8'),
(219, 'memoria', 3, 3, '222', 'numero9'),
(220, 'memoria', 3, 3, '908', 'numero10'),
(221, 'memoria', 4, 3, '1', 'numero1'),
(222, 'memoria', 4, 3, '3', 'numero2'),
(223, 'memoria', 4, 3, '6', 'numero3'),
(224, 'memoria', 4, 3, '8', 'numero4'),
(225, 'memoria', 4, 3, '0', 'numero5'),
(226, 'memoria', 4, 3, '2', 'numero6'),
(227, 'memoria', 4, 3, '4', 'numero7'),
(228, 'memoria', 4, 3, '7', 'numero8'),
(229, 'memoria', 4, 3, '5', 'numero9'),
(230, 'memoria', 4, 3, '9', 'numero10'),
(231, 'memoria', 5, 3, 'CAMA', 'palabra1'),
(232, 'memoria', 5, 3, 'MESA', 'palabra2'),
(233, 'memoria', 5, 3, 'TELEVISOR', 'palabra3'),
(234, 'memoria', 5, 3, 'SILLóN', 'palabra4'),
(235, 'memoria', 5, 3, 'CAMAROTE', 'palabra5'),
(236, 'memoria', 5, 3, 'NEVERA', 'palabra6'),
(237, 'memoria', 5, 3, 'MICROONDAS', 'palabra7'),
(238, 'memoria', 5, 3, 'VENTILADOR', 'palabra8'),
(239, 'memoria', 5, 3, 'CLOSET', 'palabra9'),
(240, 'memoria', 5, 3, 'RADIO', 'palabra10'),
(241, 'memoria', 5, 3, 'LAVADORA', 'palabra11'),
(242, 'memoria', 5, 3, 'SOFá', 'palabra12'),
(243, 'memoria', 5, 3, 'SILLA', 'palabra13'),
(244, 'memoria', 5, 3, 'ESTUFA', 'palabra14'),
(245, 'memoria', 1, 4, 'CAMELLO', 'palabra1'),
(246, 'memoria', 1, 4, 'SOLDADO', 'palabra2'),
(247, 'memoria', 1, 4, 'LEóN', 'palabra3'),
(248, 'memoria', 1, 4, 'PERRO', 'palabra4'),
(249, 'memoria', 1, 4, 'GATO', 'palabra5'),
(250, 'memoria', 1, 4, 'OVEJA', 'palabra6'),
(251, 'memoria', 1, 4, 'MUJER', 'palabra7'),
(252, 'memoria', 1, 4, 'MOTO', 'palabra8'),
(253, 'memoria', 1, 4, 'SOFá', 'palabra9'),
(254, 'memoria', 1, 4, 'MANZANA', 'palabra10'),
(255, 'memoria', 2, 4, '15', 'cantidad de rectangulos'),
(256, 'memoria', 2, 4, 'AZUL,MORADO,ROJO', 'colores del cuadrado'),
(257, 'memoria', 2, 4, 'NEGRO', 'color de la x'),
(258, 'memoria', 2, 4, 'VERDE', 'linea que mas se repite'),
(259, 'memoria', 2, 4, 'AZUL,NARANJA', 'lineas verticales'),
(260, 'memoria', 2, 4, 'ESTRELLA', 'figura del interior'),
(261, 'memoria', 4, 4, 'PERAS', 'palabra1'),
(262, 'memoria', 4, 4, 'MANGOS', 'palabra2'),
(263, 'memoria', 4, 4, 'CEBOLLAS', 'palabra3'),
(264, 'memoria', 4, 4, 'SANDíAS', 'palabra4'),
(265, 'memoria', 4, 4, 'UVAS', 'palabra5'),
(266, 'memoria', 4, 4, 'TOMATES', 'palabra6'),
(267, 'memoria', 4, 4, 'MANZANAS', 'palabra7'),
(268, 'memoria', 4, 4, 'FRESAS', 'palabra8'),
(269, 'memoria', 4, 4, 'YUCA', 'palabra9'),
(270, 'memoria', 4, 4, 'GUANáBANA', 'palabra10'),
(271, 'memoria', 4, 4, 'CEREZAS', 'palabra11'),
(272, 'memoria', 4, 4, 'MELONES', 'palabra12'),
(273, 'memoria', 5, 4, '18', 'numero1'),
(274, 'memoria', 5, 4, '12', 'numero2'),
(275, 'memoria', 5, 4, '14', 'numero3'),
(276, 'memoria', 5, 4, '10', 'numero4'),
(277, 'memoria', 5, 4, '15', 'numero5'),
(278, 'memoria', 5, 4, '17', 'numero6'),
(279, 'memoria', 5, 4, '11', 'numero7'),
(280, 'memoria', 5, 4, '13', 'numero8'),
(281, 'memoria', 5, 4, '16', 'numero9'),
(282, 'memoria', 5, 4, '19', 'numero10'),
(283, 'atencion', 1, 2, '4', 'secuencia1'),
(286, 'atencion', 1, 2, '9', 'secuencia1'),
(288, 'atencion', 1, 2, '2', 'cantidad secuencia1'),
(289, 'atencion', 1, 2, '5', 'secuencia2'),
(290, 'atencion', 1, 2, '8', 'secuencia2'),
(292, 'atencion', 1, 2, '12', 'secuencia2'),
(294, 'atencion', 1, 2, '3', 'cantidad secuencia2'),
(295, 'atencion', 1, 2, '16', 'secuencia3'),
(296, 'atencion', 1, 2, '1', 'cantidad secuencia3'),
(297, 'atencion', 1, 2, '14', 'secuencia4'),
(298, 'atencion', 1, 2, '1', 'cantidad secuencia4'),
(299, 'atencion', 1, 2, '5', 'secuencia5'),
(300, 'atencion', 1, 2, '9', 'secuencia5'),
(301, 'atencion', 1, 2, '10', 'secuencia5'),
(302, 'atencion', 1, 2, '3', 'cantidad secuencia5'),
(303, 'atencion', 2, 2, 'TRIANGULO,CIRCULO,FLECHA,CUADRO', 'secuencia siguiente'),
(304, 'atencion', 3, 2, '132', 'secuencia1'),
(305, 'atencion', 3, 2, '180', 'secuencia2'),
(306, 'atencion', 3, 2, '220', 'secuencia3'),
(307, 'atencion', 3, 2, '450', 'secuencia4'),
(308, 'atencion', 4, 2, 'ARROZ', 'palabra1'),
(309, 'atencion', 4, 2, 'COMER', 'palabra2'),
(310, 'atencion', 4, 2, 'MARTILLO', 'palabra3'),
(311, 'atencion', 4, 2, 'BALON', 'palabra4'),
(312, 'atencion', 4, 2, 'LUIS', 'palabra5'),
(313, 'atencion', 5, 2, 'LADO', 'palabras'),
(314, 'atencion', 5, 2, 'FRENO', 'palabras'),
(315, 'atencion', 5, 2, 'FRESA', 'palabras'),
(316, 'atencion', 5, 2, 'RENO', 'palabras'),
(317, 'atencion', 1, 4, '1', 'figura1'),
(318, 'atencion', 1, 4, '2', 'figura2'),
(319, 'atencion', 1, 4, '3', 'figura3'),
(320, 'atencion', 1, 4, '2', 'figura4'),
(321, 'atencion', 3, 4, 'AMARILLO', 'serie1'),
(322, 'atencion', 3, 4, 'VERDE', 'serie2'),
(323, 'atencion', 3, 4, 'AMARILLO', 'serie3'),
(324, 'atencion', 3, 4, 'VERDE', 'serie4'),
(325, 'atencion', 4, 4, 'CUADERNOS', 'utiles'),
(326, 'atencion', 4, 4, 'LIBROS', 'utiles'),
(327, 'atencion', 4, 4, 'COLORES', 'utiles'),
(328, 'atencion', 4, 4, 'LAPICES', 'utiles'),
(329, 'atencion', 4, 4, 'CALCULADORA', 'utiles'),
(330, 'atencion', 5, 4, '672', 'secuencia1'),
(331, 'atencion', 5, 4, '768', 'secuencia2'),
(332, 'atencion', 5, 4, '12798', 'secuencia3'),
(333, 'atencion', 5, 4, '46', 'secuencia4'),
(334, 'matematicas', 4, 2, 'C', 'conjunto1'),
(335, 'matematicas', 4, 2, 'A', 'conjunto2'),
(336, 'matematicas', 4, 2, 'E', 'conjunto3'),
(337, 'matematicas', 4, 2, 'D', 'conjunto4'),
(338, 'matematicas', 5, 2, '5', '16'),
(339, 'matematicas', 5, 2, '1', '3'),
(340, 'matematicas', 5, 2, '4', '14'),
(341, 'matematicas', 5, 2, '2', '6'),
(342, 'matematicas', 5, 2, '6', '4'),
(343, 'matematicas', 5, 2, '3', '17'),
(344, 'matematicas', 3, 3, '30', 'numero1'),
(345, 'matematicas', 3, 3, '90', 'numero2'),
(346, 'matematicas', 3, 3, '2', 'numero3'),
(347, 'matematicas', 3, 3, '20', 'numero4'),
(348, 'matematicas', 3, 3, '80', 'numero5'),
(349, 'matematicas', 3, 3, '4', 'numero6'),
(350, 'matematicas', 3, 3, '20', 'numero7'),
(351, 'matematicas', 3, 3, '40', 'numero8'),
(352, 'matematicas', 3, 3, '4', 'numero9'),
(353, 'matematicas', 3, 3, '25', 'numero10'),
(354, 'atencion', 1, 3, '11', 'secuencia1'),
(355, 'atencion', 1, 3, '1', 'cantidad secuencia1'),
(356, 'atencion', 1, 3, '6', 'secuencia2'),
(357, 'atencion', 1, 3, '7', 'secuencia2'),
(358, 'atencion', 1, 3, '12', 'secuencia2'),
(359, 'atencion', 1, 3, '3', 'cantidad secuencia2'),
(360, 'atencion', 1, 3, '5', 'secuencia3'),
(361, 'atencion', 1, 3, '9', 'secuencia3'),
(362, 'atencion', 1, 3, '2', 'cantidad secuencia3'),
(363, 'atencion', 1, 3, '6', 'secuencia4'),
(364, 'atencion', 1, 3, '8', 'secuencia4'),
(365, 'atencion', 1, 3, '10', 'secuencia4'),
(366, 'atencion', 1, 3, '4', 'cantidad secuencia4'),
(367, 'atencion', 2, 3, '2', 'imagen1'),
(368, 'atencion', 2, 3, '9', 'imagen2'),
(369, 'atencion', 2, 3, '10', 'imagen3'),
(370, 'atencion', 2, 3, '3', 'imagen4'),
(371, 'atencion', 2, 3, '5', 'imagen5'),
(372, 'atencion', 2, 3, '4', 'imagen6'),
(373, 'atencion', 2, 3, '6', 'imagen7'),
(374, 'atencion', 2, 3, '1', 'imagen8'),
(375, 'atencion', 2, 3, '7', 'imagen9'),
(376, 'atencion', 2, 3, '8', 'imagen10'),
(377, 'atencion', 3, 3, '2', 'imagen1'),
(378, 'atencion', 3, 3, '5', 'imagen2'),
(380, 'atencion', 3, 3, '3', 'imagen4'),
(381, 'atencion', 3, 3, '8', 'imagen5'),
(382, 'atencion', 3, 3, '1', 'imagen6'),
(383, 'atencion', 3, 3, '6', 'imagen7'),
(384, 'atencion', 3, 3, '4', 'imagen8'),
(385, 'atencion', 3, 3, '9', 'imagen9'),
(386, 'atencion', 3, 3, '7', 'imagen10'),
(387, 'atencion', 3, 3, '10', 'imagen3'),
(388, 'atencion', 4, 3, '3', 'puntos rojos'),
(389, 'atencion', 4, 3, '2', 'puntos negros'),
(390, 'atencion', 4, 3, '3', 'puntos azules'),
(391, 'atencion', 4, 3, '2', 'puntos morados'),
(392, 'atencion', 5, 3, '5', 'signo pesos'),
(393, 'atencion', 5, 3, '5', 'unos'),
(394, 'atencion', 5, 3, '6', 'ochos'),
(395, 'atencion', 5, 3, '4', 'signo pregunta'),
(396, 'atencion', 5, 2, 'DALI', 'palabras'),
(397, 'atencion', 5, 2, 'LASER', 'palabras'),
(398, 'atencion', 5, 2, 'LAS', 'palabras'),
(399, 'atencion', 5, 2, 'DON', 'palabras'),
(400, 'atencion', 5, 2, 'NO', 'palabras'),
(401, 'atencion', 5, 2, 'RES', 'palabras'),
(402, 'atencion', 5, 2, 'USO', 'palabras'),
(403, 'atencion', 5, 2, 'ESA', 'palabras'),
(404, 'atencion', 5, 2, 'ES', 'palabras'),
(405, 'atencion', 5, 2, 'DONE', 'palabras'),
(406, 'atencion', 5, 2, 'RUSA', 'palabras'),
(407, 'atencion', 5, 2, 'OSA', 'palabras'),
(408, 'atencion', 5, 2, 'LASO', 'palabras'),
(409, 'atencion', 5, 2, 'EN', 'palabras'),
(410, 'atencion', 5, 2, 'FUE', 'palabras'),
(411, 'atencion', 5, 2, 'CURE', 'palabras'),
(412, 'atencion', 5, 2, 'LA', 'palabras'),
(413, 'atencion', 1, 3, '11', 'secuencia4'),
(414, 'matematicas', 1, 2, '7', '(9 / 3) + 4 = '),
(415, 'matematicas', 1, 2, '22', '(5 x 3) + 7 = '),
(416, 'matematicas', 1, 2, '64', '(15 - 7) x 8 =              '),
(417, 'matematicas', 1, 2, '9', '(10 + 8) / 2 =                   '),
(418, 'matematicas', 1, 2, '3', '(3 + 6) - 6 ='),
(419, 'matematicas', 1, 2, '7', '(17 - 3) / 2 ='),
(420, 'matematicas', 1, 2, '5', '50 - (15 x 3) ='),
(421, 'matematicas', 1, 2, '52', '(18 - 5 ) x 4 ='),
(422, 'matematicas', 1, 2, '29', '(28 + 10) - 9 ='),
(423, 'matematicas', 1, 2, '5', '(10 / 5) + 3 ='),
(424, 'matematicas', 1, 2, '60', '(56 + 34) - 30 ='),
(425, 'matematicas', 1, 2, '9', '(98 - 71) / 3 ='),
(426, 'matematicas', 1, 2, '39', '(68 / 2) + 5 ='),
(427, 'matematicas', 1, 2, '44', '(22 + 30) - 8 ='),
(428, 'matematicas', 1, 2, '82', '(80 + 32) - 30 ='),
(429, 'matematicas', 1, 2, '22', '(40 / 4) + 12 ='),
(430, 'matematicas', 1, 2, '30', '83 - (33 + 20) ='),
(431, 'matematicas', 1, 2, '21', '17 + (44 - 40) ='),
(432, 'matematicas', 1, 2, '28', '17 + (41 - 30) ='),
(433, 'matematicas', 1, 2, '28', '(36 + 14) - 22 ='),
(434, 'matematicas', 2, 2, '100', '8  + 92  ='),
(435, 'matematicas', 2, 2, '81', '3  x  27 ='),
(436, 'matematicas', 2, 2, '16', '(12 /  3) + 12 ='),
(437, 'matematicas', 2, 2, '129', '127 + 2 ='),
(438, 'matematicas', 2, 2, '88', '111 - 23 ='),
(439, 'matematicas', 2, 2, '380', '76 x 5 ='),
(440, 'matematicas', 2, 2, '414', '69 x 6 ='),
(441, 'matematicas', 2, 2, '32', '(24 / 6) x 8 ='),
(442, 'matematicas', 2, 2, '12', '(32 / 8) x 3 ='),
(443, 'matematicas', 2, 2, '38', '(19 + 28)  - 9 =                                 '),
(444, 'matematicas', 2, 2, '9', '(11 - 6) + 4 ='),
(445, 'matematicas', 2, 2, '850', '(400 + 600) - 150 ='),
(446, 'matematicas', 2, 2, '24', '4 x (12 / 2) ='),
(447, 'matematicas', 2, 2, '40', '(30 x 3) - 50 ='),
(448, 'matematicas', 2, 2, '25', '(13 + 22) - 10 ='),
(449, 'matematicas', 2, 2, '35', '(4 + 3) x 5 ='),
(450, 'matematicas', 2, 2, '26', '20 + (13 - 7) ='),
(451, 'matematicas', 2, 2, '62', '(15 + 16) x 2 ='),
(452, 'matematicas', 2, 2, '10', '(4 - 3) x 10 ='),
(453, 'matematicas', 2, 2, '8', '(34 + 6) / 5 ='),
(454, 'matematicas', 3, 2, '61', '(7 - 2) + (8 x 7) ='),
(455, 'matematicas', 3, 2, '10', '(2 + 3) x (5 - 3) ='),
(456, 'matematicas', 3, 2, '2', '24 / 12 ='),
(457, 'matematicas', 3, 2, '197', '(62 x 3) + 11 ='),
(458, 'matematicas', 3, 2, '77', '50 + (3 x 9) ='),
(459, 'matematicas', 3, 2, '19', '(6 + 4) + (6 + 3) ='),
(460, 'matematicas', 3, 2, '15', '8 + (13 - 6) ='),
(461, 'matematicas', 3, 2, '2', '(20 -  4) - (28 / 2) ='),
(462, 'matematicas', 3, 2, '27', '(18 / 2) + 18 ='),
(463, 'matematicas', 3, 2, '300', '(20 x 10) + 100 ='),
(464, 'matematicas', 3, 2, '14', '(15 + 15) - 16 ='),
(465, 'matematicas', 3, 2, '61', '90 - (4 + 25) ='),
(466, 'matematicas', 3, 2, '20', '(3 x 4) + 8 ='),
(467, 'matematicas', 3, 2, '145', '29 x (10 / 2) ='),
(468, 'matematicas', 3, 2, '12', '(12 + 50) - 50 ='),
(469, 'matematicas', 3, 2, '320', '4 x 80 ='),
(470, 'matematicas', 3, 2, '15', '(65 - 30) - 20 ='),
(471, 'matematicas', 3, 2, '33', '(7 x 9) - 30 ='),
(472, 'matematicas', 3, 2, '117', '29 + 88 ='),
(473, 'matematicas', 3, 2, '12', '(12 / 3) x (6 / 2) ='),
(474, 'matematicas', 1, 3, '28', '(5 + 6) + (20 - 3) ='),
(475, 'matematicas', 1, 3, '13', '(7 -  4) + 10 ='),
(476, 'matematicas', 1, 3, '46', '2 x (20 + 3) ='),
(477, 'matematicas', 1, 3, '7', '(80 / 8) - 3='),
(478, 'matematicas', 1, 3, '97', '(9 x 4) + 61='),
(479, 'matematicas', 1, 3, '48', '(50 + 44) - 46 ='),
(480, 'matematicas', 1, 3, '60', '75 - (30 - 15) ='),
(481, 'matematicas', 1, 3, '180', '(140 - 50) x 2 ='),
(482, 'matematicas', 1, 3, '51', '(29 + 30) - 8 ='),
(483, 'matematicas', 1, 3, '24', '(12 / 3) x 6 ='),
(484, 'matematicas', 1, 3, '34', '(78 - 35) - (6 + 3) ='),
(485, 'matematicas', 1, 3, '27', '(18 / 2) + 18 ='),
(486, 'matematicas', 1, 3, '61', '(9 x 4) + 25 ='),
(487, 'matematicas', 1, 3, '22', '(12 + 30) - 20 ='),
(488, 'matematicas', 1, 3, '121', '(29 x 4) + (10 / 2) ='),
(489, 'matematicas', 1, 3, '16', '(9 - 7) x 8 ='),
(490, 'matematicas', 1, 3, '141', '86 + (70 -15) ='),
(491, 'matematicas', 1, 3, '71', '(7 x 3) + 50 ='),
(492, 'matematicas', 1, 3, '20', '(80 / 8) x 2 ='),
(493, 'matematicas', 1, 3, '182', '(6 x 22) + 50 ='),
(494, 'matematicas', 2, 3, '100', '66 + (50 - 16) ='),
(495, 'matematicas', 2, 3, '22', '92 - (2 x 35) ='),
(496, 'matematicas', 2, 3, '175', '35 x (14 - 9) ='),
(497, 'matematicas', 2, 3, '51', '(73 x 2) - 95 ='),
(498, 'matematicas', 2, 3, '86', '46 + (60 - 20) ='),
(499, 'matematicas', 2, 3, '40', '(77 + 50) - 87 ='),
(500, 'matematicas', 2, 3, '46', '(23 x 4) / 2 ='),
(501, 'matematicas', 2, 3, '124', '(31 x 8) - 124 ='),
(502, 'matematicas', 2, 3, '2', '46 / (14 + 9) ='),
(503, 'matematicas', 2, 3, '141', '(24 + 23) x 3 ='),
(504, 'matematicas', 2, 3, '31', '82 - (36 + 15) ='),
(505, 'matematicas', 2, 3, '116', '(8 / 2) x 29 ='),
(506, 'matematicas', 2, 3, '99', '9 x (26 - 15) ='),
(507, 'matematicas', 2, 3, '140', '28 x (30 / 6) ='),
(508, 'matematicas', 2, 3, '89', '(36 x 2) + 17 ='),
(509, 'matematicas', 2, 3, '315', '21 x (78 - 63) ='),
(510, 'matematicas', 2, 3, '143', '(31 x 4) + 19 ='),
(511, 'matematicas', 2, 3, '63', '3 x (12 + 9) ='),
(512, 'matematicas', 2, 3, '147', '(63 / 3) x 7 ='),
(513, 'matematicas', 2, 3, '27', '156 - (87 +  42) ='),
(514, 'matematicas', 4, 3, '10', '(8 + 3) - (2 - 1) ='),
(515, 'matematicas', 4, 3, '154', '(14 x 6) + 70 ='),
(516, 'matematicas', 4, 3, '54', '(20 x 5) - 46 ='),
(517, 'matematicas', 4, 3, '1', '(14 / 2) - 6='),
(518, 'matematicas', 4, 3, '165', '94 + 71 ='),
(519, 'matematicas', 4, 3, '29', '(88 + 4) - 63 ='),
(520, 'matematicas', 4, 3, '25', '(30 - 25) x 5 ='),
(521, 'matematicas', 4, 3, '316', '(97 - 18) x 4 ='),
(522, 'matematicas', 4, 3, '1', '(6 + 3) - 8 ='),
(523, 'matematicas', 4, 3, '24', '(12 / 3) x 6 ='),
(524, 'matematicas', 4, 3, '75', '5 x (4 + 11) ='),
(525, 'matematicas', 4, 3, '21', '(21 / 7) + 18 ='),
(526, 'matematicas', 4, 3, '18', '97 - 79 ='),
(527, 'matematicas', 4, 3, '81', '3 x 27 ='),
(528, 'matematicas', 4, 3, '33', '65 - (8 x 4) ='),
(529, 'matematicas', 4, 3, '50', '(2 + 17) + 31 ='),
(530, 'matematicas', 4, 3, '27', '9 + (3 x 6) ='),
(531, 'matematicas', 4, 3, '48', '(16 / 8) x 24 = '),
(532, 'matematicas', 4, 3, '120', '(8 - 4) x (90 / 3) ='),
(533, 'matematicas', 4, 3, '90', '(74 - 12) + 28 = '),
(534, 'matematicas', 5, 3, '13', '19 - (3 x 2) ='),
(535, 'matematicas', 5, 3, '35', '(20 / 2) + 25 ='),
(536, 'matematicas', 5, 3, '34', '(7 x 7) - 15 ='),
(537, 'matematicas', 5, 3, '36', '84 - (24 x 2) ='),
(538, 'matematicas', 5, 3, '76', '47 + 29 ='),
(539, 'matematicas', 5, 3, '319', '(271 - 13) + 61 ='),
(540, 'matematicas', 5, 3, '405', '45 x 9 ='),
(541, 'matematicas', 5, 3, '147', '27 + (40 x 3) ='),
(542, 'matematicas', 5, 3, '21', '(75 - 33) / 2 ='),
(543, 'matematicas', 5, 3, '38', '12 + (130 / 5) ='),
(544, 'matematicas', 5, 3, '163', '91 + 72 ='),
(545, 'matematicas', 5, 3, '98', '85 + (17 - 4) ='),
(546, 'matematicas', 5, 3, '65', '(43 + 48) - 26 ='),
(547, 'matematicas', 5, 3, '183', '(97 - 36) x 3 ='),
(548, 'matematicas', 5, 3, '11', '62 - (17 x 3) ='),
(549, 'matematicas', 5, 3, '13', '49 - (27 + 9) ='),
(550, 'matematicas', 5, 3, '50', '(100 / 4) x 2 ='),
(551, 'matematicas', 5, 3, '3', '(7 x 6) - 39 ='),
(552, 'matematicas', 5, 3, '192', '(45 - 21) x 8 ='),
(553, 'matematicas', 5, 3, '276', '92 x 3 ='),
(554, 'matematicas', 1, 4, '50', '(15 - 7) + 42 ='),
(555, 'matematicas', 1, 4, '300', '(20 x 20)  - 100 ='),
(556, 'matematicas', 1, 4, '164', '60 + (100 + 4) ='),
(557, 'matematicas', 1, 4, '79', '(9 + 35) + (40 - 5) ='),
(558, 'matematicas', 1, 4, '330', '(60 x 6) - (40 - 10) ='),
(559, 'matematicas', 1, 4, '75', '(32 - 17) x 5 ='),
(560, 'matematicas', 1, 4, '19', '(7 + 24) - (9 + 3) ='),
(561, 'matematicas', 1, 4, '10', '45 - (24 + 11) ='),
(562, 'matematicas', 1, 4, '21', '(56 - 23) - 12 = '),
(563, 'matematicas', 1, 4, '118', '90 + (30 - 2) ='),
(564, 'matematicas', 1, 4, '21', '(27 + 15) / 2 ='),
(565, 'matematicas', 1, 4, '65', '(68 + 18) - (13 + 8) ='),
(566, 'matematicas', 1, 4, '17', '(36 - 27) + 8 ='),
(567, 'matematicas', 1, 4, '76', '(16 x 6) - 20 ='),
(568, 'matematicas', 1, 4, '20', '(25 + 45) - 50 ='),
(569, 'matematicas', 1, 4, '80', '(60 / 3) x 4 = '),
(570, 'matematicas', 1, 4, '93', '69 + (34 - 10) ='),
(571, 'matematicas', 1, 4, '84', '7 x (6 x 2) ='),
(572, 'matematicas', 1, 4, '31', '(37 + 20) - (22 + 4) ='),
(573, 'matematicas', 1, 4, '60', '(30 / 3) x 6 ='),
(574, 'matematicas', 2, 4, '172', '(81 x 2) + 10 ='),
(575, 'matematicas', 2, 4, '25', '2 + (27 - 4) ='),
(576, 'matematicas', 2, 4, '60', '(32 + 35) - 7 ='),
(577, 'matematicas', 2, 4, '300', '(78 x 4) - 12 ='),
(578, 'matematicas', 2, 4, '60', '5 x (25 - 13) ='),
(579, 'matematicas', 2, 4, '91', '(89 - 28) + 30 ='),
(580, 'matematicas', 2, 4, '2', '(77 / 7) - 8 ='),
(581, 'matematicas', 2, 4, '153', '9 x (24 - 7) ='),
(582, 'matematicas', 2, 4, '240', '(72 x 4) - (6 x 8) ='),
(583, 'matematicas', 2, 4, '70', '(12 / 4) + 67 ='),
(584, 'matematicas', 2, 4, '37', '45 - (24 / 3) ='),
(585, 'matematicas', 2, 4, '52', '(92 + 12) / 2 ='),
(586, 'matematicas', 2, 4, '521', '(64 x 8) + 9 ='),
(587, 'matematicas', 2, 4, '18', '(56 - 21) - (32 - 15) ='),
(588, 'matematicas', 2, 4, '46', '(77 - 52) + 21 ='),
(589, 'matematicas', 2, 4, '6', '(81 / 9) - 3 ='),
(590, 'matematicas', 2, 4, '31', '(42 + 13) - 24 = '),
(591, 'matematicas', 2, 4, '46', '(63 - 49) + 32 ='),
(592, 'matematicas', 2, 4, '36', '(13 - 7) x 6 ='),
(593, 'matematicas', 2, 4, '0', '(72 / 9) - 8 ='),
(594, 'matematicas', 3, 4, '10', '(8 + 5) - 3 ='),
(595, 'matematicas', 3, 4, '189', '(14 / 2) x 27 ='),
(596, 'matematicas', 3, 4, '924', ' 132 x 7 ='),
(597, 'matematicas', 3, 4, '3', '(56 + 12) - 65 ='),
(598, 'matematicas', 3, 4, '58', '89 - (16 + 15) ='),
(599, 'matematicas', 3, 4, '133', '98 + 35 ='),
(600, 'matematicas', 3, 4, '58', '(116 / 4) x 2='),
(601, 'matematicas', 3, 4, '228', '76 x 3 ='),
(602, 'matematicas', 3, 4, '96', '(8 + 8) x 6 ='),
(603, 'matematicas', 3, 4, '148', '126 + 22 ='),
(604, 'matematicas', 3, 4, '52', '(9 + 17) x 2 ='),
(605, 'matematicas', 3, 4, '100', '98 + (120 - 118) ='),
(606, 'matematicas', 3, 4, '1222', '611 x 2 ='),
(607, 'matematicas', 3, 4, '28', '(80 / 5) + 12 ='),
(608, 'matematicas', 3, 4, '246', '123 x 2 ='),
(609, 'matematicas', 3, 4, '97', '(150 + 170) - 223 ='),
(610, 'matematicas', 3, 4, '17', '(30 + 76) - 89 ='),
(611, 'matematicas', 3, 4, '265', '5 x (5 + 48) ='),
(612, 'matematicas', 3, 4, '95', '(59 + 74) - 38='),
(613, 'matematicas', 3, 4, '124', '62 x 2 ='),
(614, 'matematicas', 4, 4, '48', '(9 + 3) x 4 ='),
(615, 'matematicas', 4, 4, '46', '(36 / 2) + 28 ='),
(616, 'matematicas', 4, 4, '46', '(78 x 7) - 500 ='),
(617, 'matematicas', 4, 4, '58', '56 + (12 / 6) ='),
(618, 'matematicas', 4, 4, '206', '16 + 190 ='),
(619, 'matematicas', 4, 4, '3', '(98 + 30) - 125 ='),
(620, 'matematicas', 4, 4, '81', '(45 / 5) x 9 ='),
(621, 'matematicas', 4, 4, '297', '99 x 3='),
(622, 'matematicas', 4, 4, '32', '(56 + 8) / 2 ='),
(623, 'matematicas', 4, 4, '354', '126 + 228='),
(624, 'matematicas', 4, 4, '83', '69 + (7 x 2) ='),
(625, 'matematicas', 4, 4, '277', '98 + 179 = '),
(626, 'matematicas', 4, 4, '46', '(58 x 2) - 70 = '),
(627, 'matematicas', 4, 4, '61', '(62 / 2) + 30 = '),
(628, 'matematicas', 4, 4, '240', '(3 x 2) x (20 x 2) ='),
(629, 'matematicas', 4, 4, '204', '34 + 170 = '),
(630, 'matematicas', 4, 4, '54', '(76 + 32) / 2 ='),
(631, 'matematicas', 4, 4, '18', '(5 x 9) - 27 ='),
(632, 'matematicas', 4, 4, '109', '(145 + 4) - 40 ='),
(633, 'matematicas', 4, 4, '464', '58 x 8 = '),
(634, 'matematicas', 5, 4, '27', '(4 x 12) - 21 ='),
(635, 'matematicas', 5, 4, '46', '(7 x 2) + 32 ='),
(636, 'matematicas', 5, 4, '33', '(8 x 3) + 9 ='),
(637, 'matematicas', 5, 4, '7', '(9  - 4) + (12 / 6) ='),
(638, 'matematicas', 5, 4, '27', '3 x (75 - 66) ='),
(639, 'matematicas', 5, 4, '35', '(5 x 6) + (25 / 5) ='),
(640, 'matematicas', 5, 4, '7', '(6 x 7) - 35='),
(641, 'matematicas', 5, 4, '133', '78 + 55 ='),
(642, 'matematicas', 5, 4, '208', '(65 - 13) x 4 ='),
(643, 'matematicas', 5, 4, '109', '(8 x 10) + (95 - 66) ='),
(644, 'matematicas', 5, 4, '48', '(9 x 2) + 30 ='),
(645, 'matematicas', 5, 4, '191', '(187 + 47) - 43 ='),
(646, 'matematicas', 5, 4, '71', '(13 x 6) - 7 ='),
(647, 'matematicas', 5, 4, '11', '(15 + 7) / 2 ='),
(648, 'matematicas', 5, 4, '127', '(15 x 7) + (59 - 37) ='),
(649, 'matematicas', 5, 4, '42', '18 + 24 ='),
(650, 'matematicas', 5, 4, '18', '(9 x 8) - (9 x 6) ='),
(651, 'matematicas', 5, 4, '230', '(20 x 10) + 30 ='),
(652, 'matematicas', 5, 4, '158', '(16 x 8) + 30 ='),
(653, 'matematicas', 5, 4, '57', '(17 - 8) + 48 =');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE IF NOT EXISTS `control` (
  `id` int(10) unsigned NOT NULL,
  `dia_usuario` int(10) unsigned NOT NULL,
  `semana_usuario` int(10) unsigned NOT NULL,
  `contador_actividad` int(10) unsigned NOT NULL,
  `users_email` varchar(70) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`id`, `dia_usuario`, `semana_usuario`, `contador_actividad`, `users_email`, `fecha`) VALUES
(1, 0, 0, 0, 'neurocartilla@gmail.com', '2016-01-30'),
(11, 1, 1, 0, 'bc@gmail.com', '2016-01-05'),
(23, 5, 1, 0, 'b@gmail.com', '2016-01-28'),
(26, 1, 1, 0, 'e@gmail.com', '0000-00-00'),
(27, 1, 1, 0, 'e@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
  `tipo` varchar(70) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `num_actividades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`tipo`, `puntaje`, `num_actividades`) VALUES
('atencion', 1, 2),
('matematicas', 3, 20),
('memoria', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE IF NOT EXISTS `resultado` (
  `id` int(11) NOT NULL,
  `usuario_correo` varchar(70) NOT NULL,
  `prueba_tipo` varchar(70) NOT NULL,
  `tiempo` varchar(10) NOT NULL,
  `puntaje_usuario` float NOT NULL,
  `respuesta_usuario` varchar(45) NOT NULL,
  `dia` int(11) NOT NULL,
  `semana` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=323 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultado`
--

INSERT INTO `resultado` (`id`, `usuario_correo`, `prueba_tipo`, `tiempo`, `puntaje_usuario`, `respuesta_usuario`, `dia`, `semana`) VALUES
(302, 'b@gmail.com', 'atencion', '1 : 6', 1, '', 1, 1),
(303, 'b@gmail.com', 'matematicas', '0 : 32', 1.5, '', 1, 1),
(304, 'b@gmail.com', 'memoria', '0 : 39', 0.75, '', 1, 1),
(305, 'b@gmail.com', 'atencion', '0 : 7', 1, '', 2, 1),
(306, 'b@gmail.com', 'matematicas', '0 : 23', 1.5, '', 2, 1),
(307, 'b@gmail.com', 'memoria', '0 : 29', 1, '', 2, 1),
(317, 'b@gmail.com', 'atencion', '1 : 45', 1, '', 3, 1),
(318, 'b@gmail.com', 'matematicas', '1 : 31', 2.25, '', 3, 1),
(319, 'b@gmail.com', 'memoria', '0 : 46', 1, '', 3, 1),
(320, 'b@gmail.com', 'atencion', '5 : 24', 1, '', 4, 1),
(321, 'b@gmail.com', 'matematicas', '1 : 6', 1.5, '', 4, 1),
(322, 'b@gmail.com', 'memoria', '0 : 56', 1, '', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `edad` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `grado` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `roll` int(10) unsigned NOT NULL,
  `active` int(2) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`email`, `nombre`, `apellido`, `genero`, `edad`, `grado`, `password`, `roll`, `active`) VALUES
('admin3@gmail.com', 'Diego Andres', 'Carranza Rivera', 'M', '21', '', '123', 2, 1),
('b@gmail.com', 'Bernardo ', 'Bermudez', 'M', '12', 'sexto', '123', 3, 1),
('bc@gmail.com', 'Bernardo C', 'Delgado', 'F', '13', 'septimo', '123', 3, 1),
('e@gmail.com', 'elena maria', 'enao', 'F', '11', 'sexto', '123', 3, 1),
('neurocartilla@gmail.com', 'admin', 'administrador', 'M', '40', '6', '123', 1, 1),
('yandrey.yg@gmail.com', 'Yeison Andrey', 'Gomez', 'M', '23', '', '123', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activacion`
--
ALTER TABLE `activacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`tipo`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activacion`
--
ALTER TABLE `activacion`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=323;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
