-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 03:24:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lecturaleza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultores`
--

CREATE TABLE `agricultores` (
  `id_agricultor` int(10) NOT NULL,
  `cedula` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agricultores`
--

INSERT INTO `agricultores` (`id_agricultor`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(1, '1033', 'sebas', 'pedro', 'gertg', '234234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultor_producto`
--

CREATE TABLE `agricultor_producto` (
  `id_agricultor` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agricultor_producto`
--

INSERT INTO `agricultor_producto` (`id_agricultor`, `id_producto`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_factura` int(10) DEFAULT NULL,
  `id_pedido` int(10) DEFAULT NULL,
  `dinero_recibido` int(30) DEFAULT NULL,
  `cambio` int(30) DEFAULT NULL,
  `estado_pago` enum('PAGADO','NO PAGADO','PENDIENTE') DEFAULT NULL,
  `total` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`id_factura`, `id_pedido`, `dinero_recibido`, `cambio`, `estado_pago`, `total`) VALUES
(100, 2, 3000, 1000, 'PAGADO', 6000),
(100, 2, 3000, 1000, 'NO PAGADO', 6000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id_envio` int(10) NOT NULL,
  `id_factura` int(10) DEFAULT NULL,
  `fecha_entrega` date NOT NULL DEFAULT curdate(),
  `estado_entrega` enum('ENTREGADO','NO ENTREGADO','EN CAMINO') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`id_envio`, `id_factura`, `fecha_entrega`, `estado_entrega`) VALUES
(1000, 100, '2023-10-30', 'NO ENTREGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(10) NOT NULL,
  `id_usuario` int(20) DEFAULT NULL,
  `fecha` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `id_usuario`, `fecha`) VALUES
(100, 1, '2023-10-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion_agrecultores`
--

CREATE TABLE `liquidacion_agrecultores` (
  `id_agricultor` int(10) DEFAULT NULL,
  `total_pago` int(50) DEFAULT NULL,
  `estado_pago` enum('FINIQUITO','EN PROCESO') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `liquidacion_agrecultores`
--

INSERT INTO `liquidacion_agrecultores` (`id_agricultor`, `total_pago`, `estado_pago`) VALUES
(1, 3000, 'EN PROCESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  `fecha` date NOT NULL DEFAULT curdate(),
  `estado` enum('COMPRADO','EN PROCESO') DEFAULT NULL,
  `nombre_recibe` varchar(100) DEFAULT NULL,
  `cantidad_compra` int(50) DEFAULT NULL,
  `total_unitario` int(50) DEFAULT NULL,
  `estado_pago` enum('FINIQUITO','EN PROCESO') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_producto`, `id_usuario`, `fecha`, `estado`, `nombre_recibe`, `cantidad_compra`, `total_unitario`, `estado_pago`) VALUES
(2, 1, 1, '2023-10-30', 'COMPRADO', 'ert46', 3, 2000, 'FINIQUITO'),
(2, 2, 1, '2023-10-29', 'COMPRADO', 'frre', 3, 33, 'EN PROCESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) NOT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `precio_venta` int(100) DEFAULT NULL,
  `cantidad_disponible` int(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `tipo` enum('Fruta','Verdura','Salsa','Granos','Lacteos') DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `precio_venta`, `cantidad_disponible`, `descripcion`, `fecha_vencimiento`, `tipo`, `img`) VALUES
(1, 'papa', 2000, 20, 'gdfhr', '2023-10-30', 'Verdura', NULL),
(2, 'cebolla', 1111, 11, 'wrefgw', '2023-10-17', 'Fruta', NULL),
(4, 'fresas', 500, 4, 'skasas', '2023-11-15', 'Fruta', '/assets/distCliente/img/product/fresas.jpg'),
(5, 'limon', 500, 4, 'dsadsa', '2023-11-13', 'Fruta', '/assets/distCliente/img/product/limon.jpg'),
(6, 'salsa de tomate', 2000, 10, 'muy buena', '2023-11-21', 'Salsa', NULL),
(7, 'Leche', 5000, 10, 'de burro', '2023-11-22', 'Lacteos', NULL),
(8, 'papa amarilla', 3000, 5, 'amarilla', '2023-11-21', 'Verdura', '/assets/distCliente/img/product/papa.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(20) NOT NULL,
  `documento` char(15) DEFAULT NULL,
  `nombres` varchar(55) DEFAULT NULL,
  `apellidos` varchar(55) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tipo` enum('ADMIN','CLIENTE') DEFAULT NULL,
  `estado` enum('ACTIVO','INACTIVO') NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `documento`, `nombres`, `apellidos`, `email`, `password`, `tipo`, `estado`, `direccion`, `telefono`) VALUES
(1, '1002', 'MATTAR', 'MORALES', 'mattar@gmail.com', '12345', 'ADMIN', 'ACTIVO', 'ioefhaeilrgjbaerjkl', 234234),
(2, '2232', 'carlos', 'sasa', 'ju@ho', '123', 'CLIENTE', 'ACTIVO', 'dadasda', 232);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agricultores`
--
ALTER TABLE `agricultores`
  ADD PRIMARY KEY (`id_agricultor`);

--
-- Indices de la tabla `agricultor_producto`
--
ALTER TABLE `agricultor_producto`
  ADD PRIMARY KEY (`id_agricultor`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD KEY `id_factura` (`id_factura`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id_envio`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `liquidacion_agrecultores`
--
ALTER TABLE `liquidacion_agrecultores`
  ADD KEY `id_agricultor` (`id_agricultor`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agricultores`
--
ALTER TABLE `agricultores`
  MODIFY `id_agricultor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id_envio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agricultor_producto`
--
ALTER TABLE `agricultor_producto`
  ADD CONSTRAINT `agricultor_producto_ibfk_1` FOREIGN KEY (`id_agricultor`) REFERENCES `agricultores` (`id_agricultor`),
  ADD CONSTRAINT `agricultor_producto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id_factura`),
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);

--
-- Filtros para la tabla `envios`
--
ALTER TABLE `envios`
  ADD CONSTRAINT `envios_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id_factura`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `detalle_factura` (`id_factura`);

--
-- Filtros para la tabla `liquidacion_agrecultores`
--
ALTER TABLE `liquidacion_agrecultores`
  ADD CONSTRAINT `liquidacion_agrecultores_ibfk_1` FOREIGN KEY (`id_agricultor`) REFERENCES `agricultores` (`id_agricultor`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
