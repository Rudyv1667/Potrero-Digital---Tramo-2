-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2024 a las 08:16:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos_rojela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `Precio` float NOT NULL,
  `Stock` int(11) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Marca`, `Producto`, `Precio`, `Stock`, `Descripcion`) VALUES
(1, 'Men\'s Wear', 'Soquetes Unisex', 5000, 20, 'Confeccionadas en materiales suaves y elásticos, se adaptan a cualquier ocasión.'),
(18, 'Adidas', 'Medias de Hombre', 8000, 20, 'Eleva tu estilo con nuestras medias de vestir para hombres, la fusión perfecta entre comodidad y elegancia. Fabricadas con materiales de alta calidad, estas medias ofrecen un ajuste cómodo y duradero. Su diseño clásico y discreto las convierte en la elección ideal para cualquier ocasión, desde reuniones de negocios hasta eventos formales.'),
(19, 'Dolce Gabbana', 'Reloj', 100000, 2, 'Añade un toque de lujo a tu estilo con nuestro reloj Dolce & Gabbana. Este exquisito accesorio combina diseño italiano y precisión suiza, ofreciendo elegancia y funcionalidad. '),
(20, 'C.K.', 'Conjuntos Algodón', 7000, 30, 'Descubre la elegancia atemporal con nuestro conjunto Calvin Klein. Confeccionado con materiales de alta calidad, este conjunto combina comodidad y estilo minimalista. Ideal para cualquier ocasión, ofrece un ajuste impecable y un diseño sofisticado'),
(21, 'Vicenzo', 'Medias de Vestir ', 30000, 40, 'Eleva tu estilo con nuestras medias de vestir para cualquier ocasión. Confeccionadas con tejidos finos y resistentes, estas medias proporcionan un toque elegante y confort duradero. '),
(22, 'Higan', 'Conjunto de Tela', 13000, 10, 'Descubre la sensualidad y la comodidad con nuestro último ingreso de colales. Diseñados para resaltar tu feminidad, estos colales están confeccionados con telas suaves y detalles encantadores. '),
(23, 'Victoria\'s Secret', 'Bombachas finas', 30000, 40, '¡Renueva tu colección de ropa interior con nuestro último ingreso de bombachas! Diseñadas para realzar tu comodidad y estilo, estas bombachas destacan por su confección con telas de alta calidad y detalles encantadores. ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
