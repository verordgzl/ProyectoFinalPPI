-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2017 at 07:23 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `idcarrito` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carrito`
--

INSERT INTO `carrito` (`idcarrito`, `usuario`, `producto`, `cantidad`) VALUES
(7, 0, 0, 1),
(8, 0, 0, 1),
(9, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'mujer'),
(2, 'hombre'),
(3, 'nino');

-- --------------------------------------------------------

--
-- Table structure for table `fabricante`
--

CREATE TABLE `fabricante` (
  `idfabricante` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fabricante`
--

INSERT INTO `fabricante` (`idfabricante`, `nombre`, `telefono`) VALUES
(1, 'Clobee', '56981203'),
(2, 'Jun Chang', '90237410'),
(3, 'Flexi', '43578398'),
(4, 'Ark & Co', '09832475'),
(5, 'Santa Simona', '83720527'),
(6, 'Juli Cohn', '85783467'),
(7, 'Calvin Klein', '78346592'),
(8, 'Charlotte', '23576902'),
(9, 'Ramaty', '32859832'),
(10, 'Adidas', '91701642'),
(11, 'Ambulante', '20984362'),
(12, 'Levi\'s', '90637124'),
(13, 'Sheba', '23927520'),
(14, 'Swing', '70251346'),
(15, 'Ay Guey!', '55782150');

-- --------------------------------------------------------

--
-- Table structure for table `historial`
--

CREATE TABLE `historial` (
  `idhistorial` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historial`
--

INSERT INTO `historial` (`idhistorial`, `idusuario`, `idproducto`, `total`) VALUES
(1, 3, 7, 1279),
(2, 3, 7, 2028);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `tipo` varchar(4) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `idfab` int(11) DEFAULT NULL,
  `origen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`idproducto`, `nombre`, `idcategoria`, `tipo`, `descripcion`, `foto`, `precio`, `stock`, `idfab`, `origen`) VALUES
(1, 'Chaleco Pelaje', 1, 'ARRI', 'Chaleco largo de pelaje falso, cuello en V - Talla CH', 'mujer1.jpg', 450, 2, 1, 'China'),
(2, 'Chaleco Pelaje', 1, 'ARRI', 'Chaleco largo de pelaje falso, cuello en V - Talla M', 'mujer1.jpg', 450, 3, 1, 'China'),
(4, 'Bota con Detalle en Costado', 1, 'ZAPA', 'Botas realizadas con forro de piel de color negro. Diseño con aplicación en costado. Talla - 24 cm', 'mujer3.jpg', 749, 3, 3, 'México'),
(5, 'Bota con Detalle en Costado', 1, 'ZAPA', 'Botas realizadas con forro de piel de color negro. Diseño con aplicación en costado. Talla - 24.5 cm', 'mujer3.jpg', 749, 3, 3, 'México'),
(6, 'Falda con Bordado de Plumas', 1, 'ABAJ', 'Falda de color negro y fucsia, tejido plano, diseño con bordado de plumas en contraste. Talla - CH', 'mujer4.jpg', 1279, 4, 4, 'Estados Unidos'),
(7, 'Falda con Bordado de Plumas', 1, 'ABAJ', 'Falda de color negro y fucsia, tejido plano, diseño con bordado de plumas en contraste. Talla - M', 'mujer4.jpg', 1279, 0, 4, 'Estados Unidos'),
(8, 'Falda con Bordado de Plumas', 1, 'ABAJ', 'Falda de color negro y fucsia, tejido plano, diseño con bordado de plumas en contraste. Talla - G', 'mujer4.jpg', 1279, 2, 4, 'Estados Unidos'),
(9, 'Blusa Campirana con Bordado', 1, 'ARRI', 'Blusa de color azul marino, tejido texturizado con bordado superior en contraste. Escote elastizado. Talla - M', 'mujer5.jpg', 549, 5, 5, 'España'),
(10, 'Blusa Campirana con Bordado', 1, 'ARRI', 'Blusa de color azul marino, tejido texturizado con bordado superior en contraste. Escote elastizado. Talla - XL', 'mujer5.jpg', 549, 4, 5, 'España'),
(11, 'Blusa con Escote Barco y Elástico en Hombros', 1, 'ARRI', 'Blusa de color negro, maga corta, corte amplio. Talla - CH', 'mujer6.jpg', 599, 4, 5, 'España'),
(12, 'Blusa con Escote Barco y Elástico en Hombros', 1, 'ARRI', 'Blusa de color negro, maga corta, corte amplio. Talla - M', 'mujer6.jpg', 599, 3, 5, 'España'),
(13, 'Blusa con Escote Barco y Elástico en Hombros', 1, 'ARRI', 'Blusa de color negro, maga corta, corte amplio. Talla - G', 'mujer6.jpg', 599, 4, 5, 'España'),
(14, 'Short con Pretina de Cárdigan', 1, 'ABAJ', 'Short de color azul marino, tejido plano. Cierre mediante pretina elástica y tira anudable en cintura. Talla - 2', 'mujer7.jpg', 99, 6, 6, 'Perú'),
(15, 'Short con Pretina de Cárdigan', 1, 'ABAJ', '\r\nShort de color azul marino, tejido plano. Cierre mediante pretina elástica y tira anudable en cintura. Talla - 6', 'mujer7.jpg', 99, 4, 6, 'Perú'),
(16, 'Short con Pretina de Cárdigan', 1, 'ABAJ', 'Short de color azul marino, tejido plano. Cierre mediante pretina elástica y tira anudable en cintura. Talla - 8', 'mujer7.jpg', 99, 5, 6, 'Perú'),
(17, 'Short con Pretina de Cárdigan', 1, 'ABAJ', 'Short de color azul marino, tejido plano. Cierre mediante pretina elástica y tira anudable en cintura. Talla - 12', 'mujer7.jpg', 99, 3, 6, 'Perú'),
(18, 'Leggings Lisos Negros', 1, 'ABAJ', 'Leggings de color negro, diseño con cortes diagonales, cierre mediante elástico. Talla - ECH', 'mujer8.jpg', 799, 3, 7, 'Estados Unidos'),
(19, 'Leggings Lisos Negros', 1, 'ABAJ', 'Leggings de color negro, diseño con cortes diagonales, cierre mediante elástico. Talla - M', 'mujer8.jpg', 799, 6, 7, 'Estados Unidos'),
(20, 'Leggings Lisos Negros', 1, 'ABAJ', 'Leggings de color negro, diseño con cortes diagonales, cierre mediante elástico. Talla - G', 'mujer8.jpg', 799, 2, 7, 'Estados Unidos'),
(21, 'Flats Rojos con Acabado Estilo Reptil ', 1, 'ZAPA', 'Flats de color Rojo, acabado semi brillante, punta fina. Talla 23 cm', 'mujer9.jpg', 529, 3, 8, 'Mexico'),
(22, 'Flats Rojos con Acabado Estilo Reptil ', 1, 'ZAPA', 'Flats de color Rojo, acabado semi brillante, punta fina. Talla 24.5 cm', 'mujer9.jpg', 529, 4, 8, 'Mexico'),
(23, 'Flats Rojos con Acabado Estilo Reptil ', 1, 'ZAPA', 'Flats de color Rojo, acabado semi brillante, punta fina. Talla 25 cm', 'mujer9.jpg', 529, 2, 8, 'Mexico'),
(24, 'Flats Negros con Acabado Texturizado', 1, 'ZAPA', 'Flats de color Negro, realidada en piel, diseño con acabado mate en punta y brillante atrás. Talla 23.5 cm', 'mujer10.jpg', 629, 2, 8, 'Mexico'),
(25, 'Flats Negros con Acabado Texturizado', 1, 'ZAPA', 'Flats de color Negro, realidada en piel, diseño con acabado mate en punta y brillante atrás. Talla 25.5 cm', 'mujer10.jpg', 629, 3, 8, 'Mexico'),
(26, 'Camisa Azul Claro con Acabado Texturizado ', 2, 'ARRI', 'Cuello camisero, cierre mediante botones de pasta, manga larga, corte regular. Talla - M', 'hombre1.jpg', 239, 4, 9, 'Mexico'),
(27, 'Camisa Azul Claro con Acabado Texturizado ', 2, 'ARRI', 'Cuello camisero, cierre mediante botones de pasta, manga larga, corte regular. Talla - G', 'hombre1.jpg', 239, 3, 9, 'Mexico'),
(28, 'Camisa Azul Claro con Acabado Texturizado ', 2, 'ARRI', 'Cuello camisero, cierre mediante botones de pasta, manga larga, corte regular. Talla - XGDE', 'hombre1.jpg', 239, 3, 9, 'Mexico'),
(29, 'Adidas Polo Con Franjas en Hombro Amarillo', 2, 'ARRI', 'Polo de color amarillo, tejido deportivo, diseño con acabado liso de color amarillo, detalle de franjas en hombro de color blanco. Talla - CH', 'hombre2.jpg', 479, 3, 10, 'Estados Unidos'),
(30, 'Adidas Polo Con Franjas en Hombro Amarillo', 2, 'ARRI', 'Polo de color amarillo, tejido deportivo, diseño con acabado liso de color amarillo, detalle de franjas en hombro de color blanco. Talla - G', 'hombre2.jpg', 479, 4, 10, 'Estados Unidos'),
(52, 'Playera con Estampado Constelación Azul', 2, 'ARRI', 'Playera de color azul marino, tejido stretch. Talla - CH', 'hombre3.jpg', 140, 4, 11, 'Mexico'),
(53, 'Playera con Estampado Constelación Azul', 2, 'ARRI', 'Playera de color azul marino, tejido stretch. Talla - M', 'hombre3.jpg', 140, 7, 11, 'Mexico'),
(54, 'Pantalón \"Cool Max\" Deslavado Azul Marino', 2, 'ABAJ', 'Cierre mediante zipper y botón, corte regular. Talla - 31x32', 'hombre4.jpg', 669, 3, 12, 'Estados Unidos'),
(55, 'Pantalón \"Cool Max\" Deslavado Azul Marino', 2, 'ABAJ', 'Cierre mediante zipper y botón, corte regular. Talla - 34x34', 'hombre4.jpg', 669, 4, 12, 'Estados Unidos'),
(56, 'Pantalón \"Thermo Lite\" a Tono Negro', 2, 'ABAJ', 'Diseño con botón y remaches metálicos a tono, cierre mediante zipper y botón, corte regular. Talla- 32x34', 'hombre5.jpg', 719, 2, 12, 'Estados Unidos'),
(57, 'Pantalón Manchas Desteñidas en Tono Blanco', 2, 'ABAJ', 'Pantalón de color azul cielo, detalle de apertura en rodilla, cierre mediante botón y zipper metálico. Talla - 28x32', 'hombre6.jpg', 619, 2, 12, 'Estados Unidos'),
(58, 'Pantalón Manchas Desteñidas en Tono Blanco', 2, 'ABAJ', 'Pantalón de color azul cielo, detalle de apertura en rodilla, cierre mediante botón y zipper metálico. Talla - 29x32', 'hombre6.jpg', 619, 4, 12, 'Estados Unidos'),
(59, 'Pantalón Manchas Desteñidas en Tono Blanco', 2, 'ABAJ', 'Pantalón de color azul cielo, detalle de apertura en rodilla, cierre mediante botón y zipper metálico. Talla - 34x32', 'hombre6.jpg', 619, 2, 12, 'Estados Unidos'),
(60, 'Zapato con Acabado Micro punteado Negro', 2, 'ZAPA', 'Zapato Realizado en piel de color negro, punta redonda, cierre mediante hebilla en empeine. Talla - 28.5 cm', 'hombre7.jpg', 1749, 3, 7, 'Estados Unidos'),
(61, 'Zapato con Acabado Micro punteado Negro', 2, 'ZAPA', 'Zapato Realizado en piel de color negro, punta redonda, cierre mediante hebilla en empeine. Talla - 29.5 cm', 'hombre7.jpg', 1749, 2, 7, 'Estados Unidos'),
(62, 'Zapato Slip-On con Pespuntes a Tono Negro', 2, 'ZAPA', 'Zapato de color negro, diseño casual. Talla - 28.5 cm', 'hombre8.jpg', 679, 5, 3, 'Mexico'),
(63, 'Tenis Gym Warrior .2 Azul Marino', 2, 'ZAPA', ' Tenis Realizado en corte sintético de color azul marino, diseño con bloque color negro en talón, detalle de suela blanca. Talla - 26 cm', 'hombre9.jpg', 1129, 3, 10, 'Estados Unidos'),
(64, 'Tenis Gym Warrior .2 Azul Marino', 2, 'ZAPA', ' Tenis Realizado en corte sintético de color azul marino, diseño con bloque color negro en talón, detalle de suela blanca. Talla - 27 cm', 'hombre9.jpg', 1129, 4, 10, 'Estados Unidos'),
(65, 'Blusa con Barbillas Café', 3, 'NINA', 'Blusa de color hueso y café, tejido de punto delgado stretch, diseño con barbillas y cadena en superior. Talla 8', 'nina1.jpg', 169, 4, 13, 'España'),
(66, 'Blusa con Barbillas Café', 3, 'NINA', 'Blusa de color hueso y café, tejido de punto delgado stretch, diseño con barbillas y cadena en superior. Talla 12', 'nina1.jpg', 169, 2, 13, 'España'),
(67, 'Blusa con Estampado de \"California US 66\" ', 3, 'NINA', 'Blusa de color negro y blanco, tejido de punto delgado stretch, diseño con estampado de \"california us 66\". Talla - 10', 'nina2.jpg', 159, 4, 13, 'España'),
(68, 'Alpargata con Acabado Liso Blanco', 3, 'NINA', 'Alpargata Realizada en textil de color blanco, diseño con acabado liso y pespuntes a tono. Talla - 16 cm', 'nina3.jpg', 259, 3, 14, 'Mexico'),
(69, 'Alpargata con Acabado Liso Blanco', 3, 'NINA', 'Alpargata Realizada en textil de color blanco, diseño con acabado liso y pespuntes a tono. Talla - 18 cm', 'nina3.jpg', 259, 2, 14, 'Mexico'),
(70, 'Playera \" NOPAL\"', 3, 'NINO', 'Playera de color negro, tejido de punto, diseño con glitter en el estampado. Talla - 6', 'nino1.jpg', 250, 3, 15, 'Mexico'),
(71, 'Playera \" NOPAL\"', 3, 'NINO', 'Playera de color negro, tejido de punto, diseño con glitter en el estampado. Talla - 8', 'nino1.jpg', 250, 4, 15, 'Mexico'),
(72, 'Playera \"Juanito\" con Estampado', 3, 'NINO', 'Playera de color blanco y gris, tejido de punto, diseño con estampado en contraste. Talla - 4', 'nino2.jpg', 200, 4, 15, 'Mexico'),
(73, 'Playera con Estampado de Jaguar y Pirámide', 3, 'NINO', 'Playera de color azul grisáceo, tejido de punto, diseño con estampado en contraste. Talla - 4', 'nino3.jpg', 200, 3, 15, 'Mexico'),
(74, 'Playera con Estampado de Jaguar y Pirámide', 3, 'NINO', 'Playera de color azul grisáceo, tejido de punto, diseño con estampado en contraste. Talla - 8', 'nino3.jpg', 200, 4, 15, 'Mexico');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `tarjeta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `correo`, `contrasena`, `calle`, `numero`, `colonia`, `cp`, `fecha`, `tarjeta`) VALUES
(1, 'vero', 'rdgz', 'vero@gmail.com', 'hola', 'askjbf', '234', 'askn', '234', '2017-05-18', '2354546'),
(2, 'Vero', 'Rdgz', 'verordgzl@gmail.com', 'hola', 'Himalaya', '23', 'Lomas Verdes', '53125', '1996-08-02', '1122334455'),
(3, 'Diego', 'Witker', 'witkerd@gmail.com', 'hola', 'adf', '24', 'asd', '233', '1996-02-14', '22354');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idcarrito`),
  ADD KEY `fk_usuario_idx` (`usuario`),
  ADD KEY `fk_producto_idx` (`producto`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`idfabricante`);

--
-- Indexes for table `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`idhistorial`),
  ADD KEY `fk_producto_idx` (`idproducto`),
  ADD KEY `fk_usuario_idx` (`idusuario`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `fkfabricante_idx` (`idfab`),
  ADD KEY `fk_categoria` (`idcategoria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `idcarrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `historial`
--
ALTER TABLE `historial`
  MODIFY `idhistorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fkcategoria` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fkfabricante` FOREIGN KEY (`idfab`) REFERENCES `fabricante` (`idfabricante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
