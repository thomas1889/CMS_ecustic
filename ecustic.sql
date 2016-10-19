-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2015 a las 00:03:58
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ecustic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `usuario`, `contrasena`) VALUES
(1, 'developer', 'developer', '040b7cf4a55014e185813e0644502ea9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
`id_imagen` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `nombre`, `ubicacion`) VALUES
(1, 'inicio1', 'Assets/Img/pag/home1.png'),
(2, 'inicio2', 'Assets/Img/pag/home2.png'),
(3, 'inicio3', 'Assets/Img/pag/home3.png'),
(4, 'inicio4', 'Assets/Img/pag/home4.png'),
(5, 'inicio5', 'Assets/Img/resources/logo-ecustic.png'),
(6, 'inicio6', 'Assets/Img/pag/Acustica_Arq.png'),
(7, 'inicio7', 'Assets/Img/pag/Acustica_Am.png'),
(8, 'inicio8', 'Assets/Img/pag/Acustica_Ind.png'),
(9, 'cliente1', 'Assets/Img/clientes/postobon.png'),
(10, 'cliente2', 'Assets/Img/clientes/taborda.png'),
(11, 'cliente3', 'Assets/Img/clientes/segurosbolivar.png'),
(12, 'cliente4', 'Assets/Img/clientes/cinepolis.png'),
(13, 'cliente5', 'Assets/Img/clientes/ladevi.png'),
(14, 'cliente6', 'Assets/Img/clientes/Galias.png'),
(15, 'cliente7', 'Assets/Img/clientes/Estelar.png'),
(16, 'cliente8', 'Assets/Img/clientes/isarco.png'),
(17, 'cliente9', 'Assets/Img/clientes/Alqueria.png'),
(18, 'cliente10', 'Assets/Img/clientes/fiholl.png'),
(19, 'cliente11', 'Assets/Img/clientes/palmacesar.png'),
(20, 'cliente12', 'Assets/Img/clientes/udefaca.png'),
(21, 'cliente13', 'Assets/Img/clientes/masivo.png'),
(22, 'cliente14', 'Assets/Img/clientes/buenaventura.png'),
(23, 'cliente15', 'Assets/Img/clientes/corpacero.png'),
(24, 'cliente16', 'Assets/Img/clientes/bazaar.png'),
(25, 'cliente17', 'Assets/Img/clientes/arboleda.png'),
(26, 'cliente18', 'Assets/Img/clientes/palmasdelcesar.png'),
(27, 'acustica2', 'Assets/Img/pag/Arquitectonica.png'),
(28, 'empresa', 'Assets/Img/pag/Empresa.png'),
(29, 'ambiental', 'Assets/Img/pag/Ambiental.png'),
(30, 'arquitectonico', 'Assets/Img/pag/Arquitectonica.png'),
(31, 'espuma1', 'Assets/Img/pag/espuma_dados.png'),
(32, 'espuma2', 'Assets/Img/pag/espuma_dts.png'),
(33, 'espuma3', 'Assets/Img/pag/espuma_piramides.png'),
(34, 'espuma4', 'Assets/Img/pag/espuma_waves.png'),
(35, 'panel1', 'Assets/Img/pag/panel_3.png'),
(36, 'panel2', 'Assets/Img/pag/panel_1.png'),
(37, 'panel3', 'Assets/Img/pag/panel_2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_imagen` int(11) DEFAULT NULL,
  `id_texto` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id`, `nombre`, `id_imagen`, `id_texto`) VALUES
(1, 'inicio', 1, 1),
(2, 'inicio', 5, 4),
(3, 'inicio', 2, 2),
(4, 'inicio', 3, 2),
(5, 'inicio', 4, 3),
(6, 'inicio', 7, 6),
(7, 'inicio', 6, 5),
(8, 'inicio', 8, NULL),
(9, 'inicio', 9, NULL),
(10, 'inicio', 18, NULL),
(11, 'inicio', 19, NULL),
(12, 'inicio', 17, NULL),
(13, 'inicio', 20, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE IF NOT EXISTS `registros` (
`id` bigint(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `celular` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `mensaje` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'developer'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE IF NOT EXISTS `texto` (
`id_texto` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `contenido` text
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`id_texto`, `titulo`, `tipo`, `contenido`) VALUES
(1, 'quienes somos', 'texto', 'Somos una empresa Colombiana jóven dedicada al desarrollo de proyectos de Ingeniería acústica, con amplia experiencia en soluciones de ruído ambiental, ruído industrial y acústica aquitectónica.'),
(2, 'inicio1', 'texto', 'Acústica Arquitectónica: Los Objetivos de los estudios de la acústica arquitectónica son el aislamiento de ruido y la calidad sonora al initerior de los espacios. El aislamiento sonoro consite en...'),
(3, 'inicio2', 'texto', 'Los estudios de ruido ambiental permiten evaluar y diagnosticar los niveles de ruido emitidos por diversas fuentes y espacios, los cuales en muchas ocasiones pueden afectar zonas sensibles. En tales casos también se estudia...'),
(4, 'inicio3', 'texto', 'Los objetivos de los estudios de acústica arquitectónica son el aislamiento de ruido y la calidad sonora al interior de los espacios.'),
(5, 'inicio1', 'titulo', 'Acústica Arquitectónica'),
(6, 'inicio2', 'titulo', 'Acústica Ambiental'),
(7, 'inicio3', 'titulo', 'Acústica Industrial'),
(8, 'empresa1', 'texto', 'Somos una empresa colombiana joven dedicada al desarrollo de proyectos de ingeniería acústica con amplia experiencia en soluciones de ruido ambiental, ruido industrial y acústica arquitectónica.'),
(9, 'empresa2', 'texto', 'Desarrollamos proyectos relacionados con el ruido y la calidad sonora. La empresa se desenvuelve principalmente en los campos del ruido ambiental, del ruido industrial y de la acústica para edificaciones. Nuestros proyectos buscan diagnosticar, caracterizar y proponer soluciones que se adapten a las necesidades y características de cada caso.'),
(10, 'empresa3', 'texto', 'La empresa busca dar un considerable valor agregado a cada proyecto, buscamos relaciones dinámicas con nuestros clientes, de forma que los proyectos se realicen paso a paso, en conjunto, y se cumpla con todas las expectativas.'),
(11, 'empresa4', 'texto', 'Nos encontramos ubicados en la ciudad de Bogotá y realizamos proyectos en todo el país, prestando servicios para un amplio rango de clientes ya que la contaminación acústica es inherente a muchas actividades humanas.'),
(12, 'empresa5', 'texto', 'Nuestros principales clientes son industrias, empresas de la construcción, compañías de servicios públicos y transporte, instituciones educativas y establecimientos comerciales; también prestamos servicios para espacios en los que se requiera tener una mejor calidad sonora tales como salones comunales, salones de eventos, auditorios, centros religiosos, emisoras y salas de práctica musical.'),
(13, 'arquitectonica1', 'texto', 'Los estudios de acústica arquitectónica permiten el correcto aislamiento de ruido y la calidad sonora en proyectos de construcción y espacios ya construidos.'),
(14, 'arquitectonica2', 'texto', 'Los estudios de acústica arquitectónica garantizan el aislamiento de ruido entre espacios y la calidad sonora al interior de éstos. El aislamiento sonoro consiste en disminuir la transmisión de sonido entre dos o más espacio, mientras que la calidad sonora hace referencia al modo en que el sonido se comporta dentro de un espacio y las medidas necesarias para que sus características sean apropiadas según el uso del lugar.'),
(15, 'arquitectonica3', 'texto', 'Los siguientes son ejemplos de nuestros servicios:'),
(16, 'arquitectonica4', 'texto', '- Consultorías de diseño acústico para proyectos de construcción y edificaciones existentes, considerando aislamiento de ruido aéreo, ruido de impacto, vibraciones y tiempo de reverberación.'),
(17, 'arquitectonica5', 'texto', '- Recomendaciones acústicas sobre planos arquitectónicos, mecánicos y estructurales.'),
(18, 'arquitectonica6', 'texto', '- Revisión y pruebas acústicas de equipos mecánicos.'),
(19, 'arquitectonica7', 'texto', '- Modelación acústica por computador.'),
(20, 'arquitectonica8', 'texto', '- Diseño y optimización de auditorios, salones sociales, salas de reuniones, oficinas, salas de práctica musical, centros de atención al cliente, etc.'),
(21, 'ambiental1', 'texto', 'Los estudios de ruido ambiental permiten diagnosticar las emisiones de ruido de diversas fuentes en áreas urbanas y rurales, evaluar su impacto en la comunidad y desarrollar estrategias correctivas para el cumplimiento de la normatividad.'),
(22, 'ambientel2', 'texto', 'Estos estudios cumplen un papel fundamental en la planeación de todo tipo de proyectos urbanos y de infraestructura, incluyen la construcción de vías de transporte, aeropuertos, exploraciones petroleras, diseños de áreas urbanas, estudios de factibilidad ambiental, etc. La implementación de estos estudios permite minimizar el impacto de ruido en la comunidad y llevar a cabo medidas preventivas de mitigación de polución ambiental.'),
(23, 'ambiental3', 'texto', 'Todos los análisis se desarrollan bajo la normatividad de ruido ambiental para Colombia (Resolución 0627 de 2006) y, en caso de ser necesario, bajo estándares nacionales e internacionales como ISO, NTC, ASTM y ANSI.'),
(24, 'ambiental4', 'texto', 'Los siguientes son ejemplos de nuestros servicios:'),
(25, 'ambiental5', 'texto', '- Estudios de impacto ambiental en áreas urbanas y rurales.'),
(26, 'ambiental6', 'texto', '- Mediciones de ruido bajo normativa a corto y largo plazo.'),
(27, 'ambiental7', 'texto', '- Evaluación de cumplimiento de normatividad de ruido ambiental.'),
(28, 'ambiental8', 'texto', '- Elaboración de mapas de ruido y modelación predictiva por ordenador.'),
(29, 'industrial1', 'texto', 'Los estudios de ruido industrial buscan la evaluación de fuentes de ruido en industrias y el desarrollo de sistemas de mitigación, garantizando el cumplimiento de la normatividad, el bienestar de la comunidad y la salud auditiva de los trabajadores.'),
(30, 'industrial2', 'texto', 'Las industrias y sus alrededores son lugares en los que pueden presentarse niveles de ruido muy altos generados por todo tipo de maquinaria. Las fuentes más comunes de ruido equipos de alta potencia como compresores, plantas eléctricas y sistemas hidráulicos, equipos de ventilación y refrigeración y fuentes impulsivas como equipos de metalurgia. Los estudios de ruido industrial buscan minimizar la exposición al ruido de los trabajadores y disminuir las emisiones de ruido hacia las zonas externas que puedan ser afectadas.'),
(31, 'industrial3', 'texto', 'Los servicios que ofrecemos se ajustan a las necesidades de cada cliente. Éstas pueden ir desde mediciones de máquinas específicas, estudios completos de industrias, dosimetrías de personal y monitores de ruido ambiental.'),
(32, 'industrial4', 'texto', 'Ejemplos de nuestros servicios son:'),
(33, 'industrial5', 'texto', '- Evaluación de ruido.'),
(34, 'industrial6', 'texto', '- Evaluación de ruido de equipos individuales.'),
(35, 'industrial7', 'texto', '- Estudios de cumplimiento de normatividad ambiental.'),
(36, 'industrial8', 'texto', '- Estudios de exposición al ruido de trabajadores (ruido ocupacional).'),
(37, 'industrial9', 'texto', '- Modelación por computador de ruido industrial.'),
(38, 'industrial10', 'texto', '- Desarrollo de sistemas acústicos de mitigación de ruido.'),
(39, 'industrial11', 'texto', '- Desarrollo de planes de mitigación de ruido.'),
(40, 'industrial12', 'texto', '- Mejoramiento de la calidad acústica en espacios cerrados.'),
(41, 'panelesa1', 'titulo', 'PANELES ACÚSTICOS'),
(42, 'panelesa2', 'texto', 'Descripción:'),
(43, 'panelesa3', 'texto', 'Paneles acústicos para colgar en muros con acabado en paño escorial en color a elección. Disponible en tamaños estándar de 61 x 61 cm, 122 x 61 cm, 122 x 122 cm y 244 x 122 cm con espesor de 1’’. También pueden fabricarse con dimensiones personalizadas y espesores de 1½’’ y 2’’. NRC (Coeficiente de reducción de ruido): 0.7.'),
(44, 'panelesa4', 'texto', 'Este producto puede instalarse en todo tipo de espacios que requieran un comportamiento acústico adecuado como auditorios, estudios de grabación y radiodifusión, teatros en casa e iglesias.'),
(45, 'panelesa5', 'texto', 'Uso:'),
(46, 'panelesa6', 'texto', 'Este producto puede instalarse en todo tipo de espacios que requieran un comportamiento acústico adecuado como auditorios, estudios de grabación y radiodifusión, teatros en casa e iglesias.'),
(47, 'espumas1', 'titulo', 'ESPUMAS ACÚSTICAS'),
(48, 'espumas2', 'texto', 'Descripción:'),
(49, 'espumas3', 'texto', 'Es un material con altos valores de absorción sonora que al ser implementado en algún recinto logra modificar su tiempo de reverberación, mejorando la inteligibilidad de la palabra y la calidad acústica.'),
(50, 'espumas4', 'texto', 'El mecanismo de funcionamiento de este material se basa en la resistencia que ofrece al flujo de aire, reduciendo la amplitud de la onda y transformando la energía en calor. Presentan diferentes formas geométricas que sirven para aumentar la superficie de absorción aparente sin aumentar la superficie real ocupada.'),
(51, 'espumas5', 'texto', 'Coeficientes de absorción:'),
(52, 'espumas6', 'texto', 'Las propiedades absorbentes de las espumas acústicas varían dependiendo de la frecuencia como se muestra a continuación:'),
(53, 'espumas7', 'texto', 'Es importante tener en cuenta que para lograr características acústicas especiales en las salas donde se instalen espumas acústicas, es necesario hacer un análisis con el fin de determinar la cantidad y posicionamiento ideal del material al interior.'),
(54, 'espumas8', 'texto', 'Ventajas:'),
(55, 'espumas9', 'texto', 'Fácil instalación, se adhieren a cualquier superficie adaptándose a las características arquitectónicas de los recintos.'),
(56, 'espumas10', 'texto', 'Variedad de colores y formas con el fin de dar la solución más adecuada para cada caso. Cuentan con propiedades de resistencia al fuego ya que no producen llama y retrasan su propagación.'),
(57, 'galeria1', 'texto', 'Ambiental'),
(58, 'galeria2', 'texto', 'Arquitectonica'),
(59, 'galeria3', 'texto', 'Industrial'),
(60, 'articulo1', 'titulo', 'EDITORIAL LADEVI: Acondicionamiento Acústico para oficinas'),
(61, 'articulo2', 'fecha', 'Febrero 12 del 2015'),
(62, 'articulo3', 'texto', 'Las oficinas de planta abierta requieren niveles adecuados de tiempo de reverberación, inteligibilidad y privacidad para que sus ocupantes puedan realizar sus actividades'),
(63, 'articulo4', 'titulo', 'DISEÑO ACÚSTICO DE “I.E.D REPÚBLICA DE COSTA RICA”.'),
(64, 'articulo5', 'fecha', 'Febrero 12 del 2015'),
(65, 'articulo6', 'texto', 'Debido a que el ruido procedente de aviones y carros es uno de los problemas que más afectan el desarrollo de las actividades académicas dentro de las aulas de clase.'),
(66, 'clientes', 'texto', 'Nuestros principales clientes son industrias, empresas de la construcción, compañías de servicios públicos y transporte, instituciones educativas y establecimientos comerciales; también prestamos servicios para espacios en los que se requiera tener una mejor calidad sonora tales como salones comunales, salones de eventos, auditorios, centros religiosos, emisoras y salas de práctica musical.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
 ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_paginas_imagen` (`id_imagen`), ADD KEY `FK_paginas_texto` (`id_texto`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `texto`
--
ALTER TABLE `texto`
 ADD PRIMARY KEY (`id_texto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `paginas`
--
ALTER TABLE `paginas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `texto`
--
ALTER TABLE `texto`
MODIFY `id_texto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `paginas`
--
ALTER TABLE `paginas`
ADD CONSTRAINT `FK_paginas_imagen` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id_imagen`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_paginas_texto` FOREIGN KEY (`id_texto`) REFERENCES `texto` (`id_texto`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
