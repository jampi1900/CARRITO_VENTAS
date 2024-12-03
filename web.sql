-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2024 a las 14:13:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `PK_Categoria` int(13) NOT NULL,
  `Foto_Categoria` text DEFAULT NULL,
  `Nombre_Categoria` varchar(20) DEFAULT NULL,
  `Descripcion_Categoria` text DEFAULT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `FyH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`PK_Categoria`, `Foto_Categoria`, `Nombre_Categoria`, `Descripcion_Categoria`, `FK_Estado`, `FyH`) VALUES
(1, 'foto_polos.jpg', 'POLOS', 'Ropa para la parte superior del cuerpo, generalmente de algodón.', 1, NULL),
(2, 'foto_pantalones.jpg', 'PANTALON', 'Ropa para la parte inferior del cuerpo, como jeans o pantalones de tela.', 1, NULL),
(3, 'foto_camisas.jpg', 'CAMISA', 'Ropa de manga larga o corta para la parte superior del cuerpo.', 1, NULL),
(4, 'foto_casacas.jpg', 'CASACA', 'Chaquetas o abrigos ligeros para el abrigo.', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `PK_Cliente` int(13) NOT NULL,
  `Nombres_Cliente` varchar(60) DEFAULT NULL,
  `Apellidos_Cliente` varchar(60) DEFAULT NULL,
  `Correo_Cliente` varchar(100) DEFAULT NULL,
  `Telefono_Cliente` varchar(10) DEFAULT NULL,
  `Contrasena_Cliente` varchar(20) DEFAULT NULL,
  `DNI_Cliente` varchar(10) DEFAULT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `FyH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`PK_Cliente`, `Nombres_Cliente`, `Apellidos_Cliente`, `Correo_Cliente`, `Telefono_Cliente`, `Contrasena_Cliente`, `DNI_Cliente`, `FK_Estado`, `FyH`) VALUES
(1, NULL, NULL, 'admin@gmail.com', NULL, '1234', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `PK_Color` int(13) NOT NULL,
  `Nombre_Color` varchar(30) NOT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `FyH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`PK_Color`, `Nombre_Color`, `FK_Estado`, `FyH`) VALUES
(1, 'ROSADO', 1, '2024-09-27 12:59:43'),
(4, 'Azul', 1, '2024-09-27 12:59:43'),
(5, 'Blanco', 1, '2024-09-27 12:59:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_pedido`
--

CREATE TABLE `det_pedido` (
  `PK_Det_Pedido` int(13) NOT NULL,
  `Cantidad` int(13) DEFAULT NULL,
  `Precio` decimal(5,2) DEFAULT NULL,
  `Subtotal` decimal(5,2) DEFAULT NULL,
  `FK_Pedido` varchar(200) DEFAULT NULL,
  `FK_Det_Talla` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `det_pedido`
--

INSERT INTO `det_pedido` (`PK_Det_Pedido`, `Cantidad`, `Precio`, `Subtotal`, `FK_Pedido`, `FK_Det_Talla`) VALUES
(2, 1, 19.00, 19.00, '2024-11-03 15:16:4876926246', 2),
(3, 2, 19.00, 38.00, '2024-11-03 15:16:4876926246', 4),
(4, 2, 19.00, 38.00, '2024-11-22 13:38:3877112233', 4),
(5, 2, 19.00, 38.00, '2024-11-22 13:40:3077112232', 4),
(6, 2, 19.00, 38.00, '2024-11-22 13:47:0677112232', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_talla`
--

CREATE TABLE `det_talla` (
  `PK_Det_Talla` int(13) NOT NULL,
  `Stock` int(11) DEFAULT NULL,
  `FK_Talla` int(13) DEFAULT NULL,
  `FK_Producto` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `det_talla`
--

INSERT INTO `det_talla` (`PK_Det_Talla`, `Stock`, `FK_Talla`, `FK_Producto`) VALUES
(2, 2, 2, 9),
(3, 1, 3, 9),
(4, 4, 1, 10),
(5, 10, 4, 11),
(6, 11, 1, 13),
(7, 10, 3, 13),
(8, 10, 4, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `PK_Empleado` int(13) NOT NULL,
  `Nombres_Empleado` varchar(60) NOT NULL,
  `Apellidos_Empleado` varchar(60) NOT NULL,
  `Correo_Empleado` varchar(100) NOT NULL,
  `Contrasena_Empleado` varchar(20) NOT NULL,
  `Telefono_Empleado` varchar(10) NOT NULL,
  `Direccion_Empleado` text DEFAULT NULL,
  `DNI_Empleado` varchar(10) DEFAULT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `FK_Rol` int(13) DEFAULT NULL,
  `FyH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`PK_Empleado`, `Nombres_Empleado`, `Apellidos_Empleado`, `Correo_Empleado`, `Contrasena_Empleado`, `Telefono_Empleado`, `Direccion_Empleado`, `DNI_Empleado`, `FK_Estado`, `FK_Rol`, `FyH`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '1234', '987654321', 'Av. Siempre Viva 742', '75767473', 1, 1, '2024-09-27 12:59:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `PK_Estado` int(13) NOT NULL,
  `Nombre_Estado` varchar(50) DEFAULT NULL,
  `FyH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`PK_Estado`, `Nombre_Estado`, `FyH`) VALUES
(1, 'ACTIVO', '2024-09-27 12:59:43'),
(2, 'NO ACTIVO', '2024-09-27 12:59:43'),
(3, 'ELIMINADO', '2024-09-27 12:59:43'),
(4, 'IN PROCESO', '2024-09-27 12:59:43'),
(5, 'CONFIRMADO', '2024-09-27 12:59:43'),
(6, 'ENVIADO', '2024-09-27 12:59:43'),
(7, 'CANCELADO', '2024-09-27 12:59:43'),
(8, 'PUBLICADO', '2024-09-27 12:59:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas`
--

CREATE TABLE `etiquetas` (
  `PK_Etiqueta` int(13) NOT NULL,
  `Nombre_Etiqueta` varchar(30) NOT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `FyH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etiquetas`
--

INSERT INTO `etiquetas` (`PK_Etiqueta`, `Nombre_Etiqueta`, `FK_Estado`, `FyH`) VALUES
(1, 'Nuevos', 1, '2024-09-27 12:59:43'),
(2, 'Oferta', 1, '2024-09-27 12:59:43'),
(3, 'Populares', 1, '2024-09-27 12:59:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `PK_Imagen` int(13) NOT NULL,
  `Foto_Producto` text DEFAULT NULL,
  `FyH` datetime DEFAULT NULL,
  `FK_Producto` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`PK_Imagen`, `Foto_Producto`, `FyH`, `FK_Producto`) VALUES
(2, '2024-09-05-21-58-31__P1.png', '2024-09-05 21:58:31', 11),
(3, '2024-09-05-22-01-24__P2.png', '2024-09-05 22:01:24', 11),
(4, '2024-09-05-22-01-43__P3.png', '2024-09-05 22:01:43', 11),
(5, '2024-09-05-22-01-54__P4.png', '2024-09-05 22:01:54', 11),
(6, '2024-09-06-09-03-59__PRODUCTO_001.png', '2024-09-06 09:03:59', 9),
(7, '2024-09-06-09-04-05__PRODUCTO_012.png', '2024-09-06 09:04:05', 9),
(8, '2024-09-06-09-04-12__PRODUCTO_013.png', '2024-09-06 09:04:12', 9),
(9, '2024-09-06-09-04-19__PRODUCTO_014.png', '2024-09-06 09:04:19', 9),
(10, '2024-09-06-09-05-36__P1.png', '2024-09-06 09:05:36', 10),
(11, '2024-09-06-09-05-42__P2.png', '2024-09-06 09:05:42', 10),
(12, '2024-09-06-09-05-47__P3.png', '2024-09-06 09:05:47', 10),
(13, '2024-09-06-09-05-53__P4.png', '2024-09-06 09:05:53', 10),
(14, '2024-10-16-21-03-39__PRODUCTO_011.png', '2024-10-16 21:03:39', 13),
(15, '2024-10-16-21-03-45__PRODUCTO_008.png', '2024-10-16 21:03:45', 13),
(16, '2024-10-16-21-03-49__PRODUCTO_009.png', '2024-10-16 21:03:49', 13),
(17, '2024-10-16-21-03-56__PRODUCTO_002.png', '2024-10-16 21:03:56', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `PK_Marca` int(13) NOT NULL,
  `Nombre_Marca` varchar(30) NOT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `FyH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`PK_Marca`, `Nombre_Marca`, `FK_Estado`, `FyH`) VALUES
(1, 'BRONCO', 1, '2024-09-27 12:59:43'),
(2, 'LOIS', 1, '2024-09-27 12:59:43'),
(3, 'NAUTICA', 1, '2024-09-27 12:59:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `PK_Pedido` varchar(200) NOT NULL,
  `Destino` text DEFAULT NULL,
  `FyH_Pedido` datetime DEFAULT NULL,
  `FyH_Actualizacion` datetime DEFAULT NULL,
  `Codigo_Postal` varchar(10) DEFAULT NULL,
  `Total` decimal(5,2) DEFAULT NULL,
  `FK_Cliente` int(13) DEFAULT NULL,
  `Empresa` text DEFAULT NULL,
  `Precio_Envio` decimal(5,2) DEFAULT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `tracking` varchar(255) DEFAULT NULL,
  `Nombres_Cliente` varchar(60) DEFAULT NULL,
  `Apellidos_Cliente` varchar(60) DEFAULT NULL,
  `Correo_Cliente` varchar(100) DEFAULT NULL,
  `Telefono_Cliente` varchar(10) DEFAULT NULL,
  `DNI_Cliente` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`PK_Pedido`, `Destino`, `FyH_Pedido`, `FyH_Actualizacion`, `Codigo_Postal`, `Total`, `FK_Cliente`, `Empresa`, `Precio_Envio`, `FK_Estado`, `tracking`, `Nombres_Cliente`, `Apellidos_Cliente`, `Correo_Cliente`, `Telefono_Cliente`, `DNI_Cliente`) VALUES
('2024-11-03 15:16:4876926246', 'Asociación las Buganvillas MZ f LOT 1, 230101, 2301, 23', '2024-11-03 15:16:48', NULL, '23000', 82.00, NULL, NULL, 25.00, 5, NULL, 'Yampier Alexander', 'Quispe Quenaya', 'yamquis654@gmail.com', '931225581', '76926246'),
('2024-11-22 13:38:3877112233', 'LOMAS, 150110, 1501, 15', '2024-11-22 13:38:38', NULL, '23000', 63.00, NULL, NULL, 25.00, 5, NULL, 'JOSE', 'DEMO DEMO', 'Demo@gmail.com', '987654321', '77112233'),
('2024-11-22 13:40:3077112232', 'LOMAS, 150110, 1501, 15', '2024-11-22 13:40:30', NULL, '23000', 63.00, NULL, NULL, 25.00, 5, NULL, 'DEMOS', 'DEMOS', 'Demo2@gmail.com', '987654322', '77112232'),
('2024-11-22 13:47:0677112232', 'NUEVA DIRECCCION, 150110, 1501, 15', '2024-11-22 13:47:06', NULL, '23000', 63.00, NULL, NULL, 25.00, 4, NULL, 'ING', 'ING', 'Demo3@gmail.com', '987654322', '77112232');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `PK_Producto` int(13) NOT NULL,
  `SKU` varchar(200) DEFAULT NULL,
  `Nombre_Producto` varchar(200) DEFAULT NULL,
  `PORTADA` text DEFAULT NULL,
  `Precio_Producto` decimal(5,2) DEFAULT NULL,
  `Precio_Oferta` decimal(5,2) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `FyH` datetime DEFAULT NULL,
  `FK_Etiqueta` int(13) DEFAULT NULL,
  `FK_Color` int(13) DEFAULT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `FK_Categoria` int(13) DEFAULT NULL,
  `FK_Marca` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`PK_Producto`, `SKU`, `Nombre_Producto`, `PORTADA`, `Precio_Producto`, `Precio_Oferta`, `Descripcion`, `FyH`, `FK_Etiqueta`, `FK_Color`, `FK_Estado`, `FK_Categoria`, `FK_Marca`) VALUES
(9, '02P069195715BLA02', 'POLO HP24/OCEANO JERSEY', '2024-09-05-10-57-44__PRODUCTO_001.png', 49.00, 19.00, '<p>Cuiado&nbsp;</p><p>Agua Caliente&nbsp;</p><p>Sin planchar</p>', '2024-09-05 10:57:44', 1, 5, 8, 1, 1),
(10, '02P069194715NAV02', 'POLO HP24/OCEANO JERSEY', '2024-09-05-11-28-22__P1.png', 49.00, 19.00, '<p>DSGD</p><p>DGDS</p><p>DSFD</p>', '2024-09-05 11:28:22', 1, 4, 8, 1, 1),
(11, '02P0691957150PP02', 'POLO HP24/OCEANO JERSEY', '2024-09-05-11-29-59__P1.png', 49.00, 19.00, '<p>ERTWT</p><p>ERTERT</p><p>ERTRE</p><p>ERTRE</p><p><br></p><p>RT</p><p>RET</p><p><br></p>', '2024-09-05 11:29:59', 2, 5, 8, 1, 1),
(12, '123456789', 'Producto_Prueba', '2024-10-05-11-31-36__PRODUCTO_006.png', 11.00, 12.00, '<p>PRUEBA</p>', '2024-10-05 11:31:36', 2, 1, 1, 4, 3),
(13, '999999999', 'NUEVO_PRODUCTO', '2024-10-16-21-01-29__PRODUCTO_010.png', 100.00, 99.00, '<p>DSFDS KJKSJ</p>', '2024-10-16 21:01:29', 3, 5, 8, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `PK_Rol` int(13) NOT NULL,
  `Nombre_Rol` varchar(40) NOT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `FyH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`PK_Rol`, `Nombre_Rol`, `FK_Estado`, `FyH`) VALUES
(1, 'Admin', 1, '2024-09-27 12:59:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `PK_Talla` int(13) NOT NULL,
  `Nombre_Talla` varchar(20) DEFAULT NULL,
  `FK_Estado` int(13) DEFAULT NULL,
  `FyH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`PK_Talla`, `Nombre_Talla`, `FK_Estado`, `FyH`) VALUES
(1, 'XL', 1, '2024-09-27 12:59:43'),
(2, 'L', 1, '2024-09-27 12:59:43'),
(3, 'M', 1, '2024-09-27 12:59:43'),
(4, 'S', 1, '2024-09-27 12:59:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`PK_Categoria`),
  ADD KEY `FK_Estado` (`FK_Estado`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`PK_Cliente`),
  ADD KEY `FK_Estado` (`FK_Estado`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`PK_Color`),
  ADD KEY `FK_Estado` (`FK_Estado`);

--
-- Indices de la tabla `det_pedido`
--
ALTER TABLE `det_pedido`
  ADD PRIMARY KEY (`PK_Det_Pedido`),
  ADD KEY `FK_Pedido` (`FK_Pedido`),
  ADD KEY `FK_Det_Talla` (`FK_Det_Talla`);

--
-- Indices de la tabla `det_talla`
--
ALTER TABLE `det_talla`
  ADD PRIMARY KEY (`PK_Det_Talla`),
  ADD KEY `FK_Talla` (`FK_Talla`),
  ADD KEY `FK_Producto` (`FK_Producto`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`PK_Empleado`),
  ADD KEY `FK_Estado` (`FK_Estado`),
  ADD KEY `FK_Rol` (`FK_Rol`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`PK_Estado`);

--
-- Indices de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD PRIMARY KEY (`PK_Etiqueta`),
  ADD KEY `FK_Estado` (`FK_Estado`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`PK_Imagen`),
  ADD KEY `FK_Producto` (`FK_Producto`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`PK_Marca`),
  ADD KEY `FK_Estado` (`FK_Estado`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`PK_Pedido`),
  ADD KEY `FK_Cliente` (`FK_Cliente`),
  ADD KEY `FK_Estado` (`FK_Estado`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`PK_Producto`),
  ADD KEY `FK_Marca` (`FK_Marca`),
  ADD KEY `FK_Etiqueta` (`FK_Etiqueta`),
  ADD KEY `FK_Color` (`FK_Color`),
  ADD KEY `FK_Estado` (`FK_Estado`),
  ADD KEY `FK_Categoria` (`FK_Categoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`PK_Rol`),
  ADD KEY `FK_Estado` (`FK_Estado`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`PK_Talla`),
  ADD KEY `FK_Estado` (`FK_Estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `PK_Categoria` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `PK_Cliente` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `PK_Color` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `det_pedido`
--
ALTER TABLE `det_pedido`
  MODIFY `PK_Det_Pedido` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `det_talla`
--
ALTER TABLE `det_talla`
  MODIFY `PK_Det_Talla` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `PK_Empleado` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `PK_Estado` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `PK_Etiqueta` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `PK_Imagen` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `PK_Marca` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `PK_Producto` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `PK_Rol` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `PK_Talla` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`);

--
-- Filtros para la tabla `colores`
--
ALTER TABLE `colores`
  ADD CONSTRAINT `colores_ibfk_1` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`);

--
-- Filtros para la tabla `det_pedido`
--
ALTER TABLE `det_pedido`
  ADD CONSTRAINT `det_pedido_ibfk_2` FOREIGN KEY (`FK_Det_Talla`) REFERENCES `det_talla` (`PK_Det_Talla`);

--
-- Filtros para la tabla `det_talla`
--
ALTER TABLE `det_talla`
  ADD CONSTRAINT `det_talla_ibfk_1` FOREIGN KEY (`FK_Talla`) REFERENCES `tallas` (`PK_Talla`),
  ADD CONSTRAINT `det_talla_ibfk_2` FOREIGN KEY (`FK_Producto`) REFERENCES `productos` (`PK_Producto`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`FK_Rol`) REFERENCES `roles` (`PK_Rol`);

--
-- Filtros para la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD CONSTRAINT `etiquetas_ibfk_1` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`);

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`FK_Producto`) REFERENCES `productos` (`PK_Producto`);

--
-- Filtros para la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD CONSTRAINT `marcas_ibfk_1` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`FK_Cliente`) REFERENCES `clientes` (`PK_Cliente`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`FK_Marca`) REFERENCES `marcas` (`PK_Marca`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`FK_Etiqueta`) REFERENCES `etiquetas` (`PK_Etiqueta`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`FK_Color`) REFERENCES `colores` (`PK_Color`),
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`),
  ADD CONSTRAINT `productos_ibfk_5` FOREIGN KEY (`FK_Categoria`) REFERENCES `categorias` (`PK_Categoria`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`);

--
-- Filtros para la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD CONSTRAINT `tallas_ibfk_1` FOREIGN KEY (`FK_Estado`) REFERENCES `estados` (`PK_Estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
