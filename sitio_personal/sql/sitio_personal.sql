-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2026 a las 03:24:21
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
-- Base de datos: `sitio_personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atestados`
--

CREATE TABLE `atestados` (
  `id` int(11) NOT NULL,
  `nombre_titulo` varchar(150) DEFAULT NULL,
  `institucion` varchar(100) DEFAULT NULL,
  `anio` varchar(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `atestados`
--

INSERT INTO `atestados` (`id`, `nombre_titulo`, `institucion`, `anio`, `descripcion`, `imagen`) VALUES
(1, 'IT Essentials: PC Hardware and Software', 'Cisco Networking Academy', '2019', 'Curso completado el 09 Oct 2019.', 'assets/img/atestados/cisco_it_essentials.png'),
(2, 'IT- Essentials Mantenimiento de PC', 'Instituto Nacional de Aprendizaje (INA)', '2019', 'Módulo de capacitación de 80 horas en Pérez Zeledón.', 'assets/img/atestados/ina_mantenimiento_pc.png'),
(3, 'Operador(a) de Tecnologías de Información y Comunicación', 'Instituto Nacional de Aprendizaje (INA)', '2020', 'Programa de formación de 260 horas como Trabajador Calificado.', 'assets/img/atestados/ina_operador_tic.png'),
(4, 'Inglés Básico I', 'Instituto Americano de Inglés Costa Rica', '2012', 'Curso de 48 horas con énfasis en conversación en Pérez Zeledón.', 'assets/img/atestados/ingles_instituto_americano.png'),
(5, 'Servicio al Cliente', 'Instituto Nacional de Aprendizaje (INA)', '2024', 'Programa de formación de 20 horas impartido en San José.', 'assets/img/atestados/ina_servicio_cliente.png'),
(6, 'Inglés Conversacional Nivel 3', 'Idiomas.cr', '2026', 'Modalidad virtual con duración de 40 horas y nota final de 95.', 'assets/img/atestados/idiomas_ingles_3.png'),
(7, 'Introducción a la Ciencia de Datos', 'MICITT-CECI / Cisco', '2026', 'Completado con éxito el 10 Jun 2026.', 'assets/img/atestados/cisco_ciencia_datos.png'),
(8, 'Fundamentos de Análisis de Datos', 'MICITT-CECI / Cisco', '2026', 'Completado con éxito el 26 Jul 2026.', 'assets/img/atestados/cisco_analisis_datos.png'),
(9, 'Data Analytics Essentials', 'MICITT-CECI', '2026', 'Programa de Centros Comunitarios Inteligentes de 40 horas.', 'assets/img/atestados/micitt_data_analytics.png'),
(10, 'Introducción a Cisco Packet Tracer', 'Cisco Networking Academy', '2026', 'Completado con éxito el 24 Sep 2026.', 'assets/img/atestados/cisco_packet_tracer.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `redes_sociales` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `correo`, `telefono`, `redes_sociales`) VALUES
(1, 'calderonsebastian352@gmail.com', '+506 8940-7132', 'github.com/sebastian');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) DEFAULT NULL,
  `descripcion_corta` text DEFAULT NULL,
  `descripcion_larga` text DEFAULT NULL,
  `intereses` text DEFAULT NULL,
  `habilidades` text DEFAULT NULL,
  `experiencia` text DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nombre_completo`, `descripcion_corta`, `descripcion_larga`, `intereses`, `habilidades`, `experiencia`, `foto_perfil`) VALUES
(1, 'Sebastián Calderón Hernández', 'Estudiante avanzado de Ingeniería en Sistemas, Fundador y Dueño de SCH Tech Solutions.', 'Apasionado por la tecnología, el desarrollo de software y la resolución de problemas técnicos. Fundador de SCH Tech Solutions, ofreciendo servicios profesionales de soporte técnico y desarrollo. Con sólida formación técnica del INA y Cisco, y experiencia laboral en diversos roles orientados al servicio y la tecnología.', 'Análisis de datos, inteligencia de negocios (BI), optimización de bases de datos, desarrollo de software y automatización de procesos tecnológicos.', 'HTML, CSS, PHP, MySQL, Oracle, SQL, C++, C#, .NET, Java, Python, Ensamblador, Fortran, JavaScript, Git, Paquetes de Office', 'Fundador y Propietario de SCH Tech Solutions, experiencia en soporte técnico, desarrollo de software y atención al cliente.', 'assets/img/perfil.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atestados`
--
ALTER TABLE `atestados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atestados`
--
ALTER TABLE `atestados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
