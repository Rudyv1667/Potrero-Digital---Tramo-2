-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2024 a las 19:17:05
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
(2, 'Men Socks', 'Medias de Vestir', 7000, 20, 'Confeccionadas con suave tejido que abraza tus piernas, estas medias ofrecen un ajuste perfecto y una sensación sedosa.'),
(3, 'Adidas', 'Medias de Hombre', 3000, 20, 'Su diseño clásico y discreto las convierte en la elección ideal para cualquier ocasión, desde reuniones de negocios hasta eventos formales.'),
(4, 'C.K.', 'Conjuntos Algodón', 8000, 20, 'El tejido suave al tacto abraza tu piel, proporcionando una sensación de confort inigualable.'),
(5, 'Love Secret', 'Conjunto de Mujer', 10000, 30, 'Este conjunto es la elección ideal para mantener un equilibrio perfecto entre comodidad y estilo en tu día a día.'),
(6, 'Higan', 'Conjunto de Tela', 13000, 20, 'Para una salida con amigos o para disfrutar de un fin de semana en casa, este conjunto ofrece un equilibrio perfecto entre elegancia y relajación.');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
