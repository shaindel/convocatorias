# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.16)
# Database: convocatorias
# Generation Time: 2017-02-27 17:48:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table convocatorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `convocatorias`;

CREATE TABLE `convocatorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inscritos` int(11) NOT NULL,
  `imagen` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problema` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solucion` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impacto` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turno` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `aplicaciones` int(11) NOT NULL,
  `comentarios` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `convocatorias` WRITE;
/*!40000 ALTER TABLE `convocatorias` DISABLE KEYS */;

INSERT INTO `convocatorias` (`id`, `titulo`, `fecha`, `intro`, `inscritos`, `imagen`, `descripcion`, `problema`, `fecha_inicio`, `direccion`, `solucion`, `impacto`, `area`, `turno`, `aplicaciones`, `comentarios`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'Eco Fest','25 y 26 de marzo','Únete al EcoFest,  el festival sustentable sin costo más importante de Latinoamérica.',0,'ecofest.jpg','EcoFest es el festival sustentable sin costo más importante de Latinoamérica. Las Páginas Verdes, creó este evento con el objetivo de acercar al visitante con la oferta verde, motivado por una experiencia memorable con talleres, actividades culturales, deportivas y conferencias.\n\nEs así que, bajo el marco de este festival a favor de las compras verdes, se reúne a productores sustentables, marcas que llevan a cabo actividades de responsabilidad social y ambiental, personalidades y diversas atracciones, para ofrecer un evento que pueda disfrutar toda la familia.\n\nEcoFest, como festival de consumo sustentable, cuenta con expositores que muestran su oferta de este tipo.\nSin embargo, Las Páginas Verdes no sólo fomenta que se adquieran productos y servicios verdes si no también que el consumidor comprenda verdaderamente el porqué de la sustentabilidad, se involucre con ésta y la viva en experiencia propia.\n\n2017 será el año en que cumplimos 5 años consecutivos trabajando de la mano con Las Páginas Verdes, gestionando el grupo de voluntarios. Muchas historias tenemos que contar ya de nuestro paso por este gran evento, que han reforzado los lazos que tenemos ya con nuestros grandes amigos de Ecofest.\n\nVen y vive la experiencia de ser voluntario en este que es ya de los eventos consentidos de Voluntarios México.','Ecofest, al ser el festival más grande en América Latina, requiere un gran número de gente que ayude a que año con año, se logre el éxito. Es por eso que Voluntarios México participa con más de 200 voluntarios que con la donación de su talento serán pieza fundamental en el desarrollo del evento y logro de los objetivos trazados para este año.\n\nEl festival, en esta ocasión repite sede, y estaremos el sábado 25 y domingo 26 de marzo en el corredor cultural Álvaro Obregón y jardín Pushkin, en al colonia Roma norte.','2017-02-23','Corredor cultural Álvaro Obregón y jardín Pushkin, en al colonia Roma norte | Sábado 25 y domingo 26','Los voluntarios, somos parte de la solución, ven y vive esta gran experiencia y apóyanos siendo un Héroe Verde!\n\nEl compromiso de los voluntarios es participar el 25, el 26, o bien ambos días en turnos de 7 horas, recibiendo a cambio, además de todo el conocimiento que el Ecofest brinda, un diploma de participación, comida, hidratación, playera de voluntario, y claro, la oportunidad de ser parte de esta gran familia de Voluntarios.','En el Ecofest, los voluntarios somos muy visibles, logrando con esto contagiar a los asistentes sobre llevar una vida sustentable, de respeto al medio ambiente, y del voluntariado.\n\nSer voluntario, es una de las tareas más satisfactorias que se pueden hacer, el trabajar en equipo, conocer gente, aprender, y sobre todo enseñar todo lo que sabes. Ayuda mientras disfrutas :D',' Policía Ecológica  \n- Enseña a los asistentes sobre la separación de residuos\n\n Héroe Informativo \n- Orientar a los visitantes\n\n Héroe Performance \n- Apoyar a los artistas en los escenarios\n\n Héroe de le educación \n- Apoyar los talleres y conferencias\n\n Héroe productor \n- Asegurarse de que todo está en el momento correcto, en el lugar correcto\n\n Héroe de investigación \n- Preguntar y preguntar! Levantamiento de encuestas\n\n Héroe de paginoverdoso \n- Apoyo en el stand de Las Páginas Verdes\n\n Héroe de Control\n- Apoyo en la coordinación de voluntarios general\n\n Héroe Memorable \n- Tomar fotografías y videos para uso en la memoria del Ecofest 2017\n\n Héroe Senior\n- Apoyo directamente en la coordinación de voluntarios en un área en específica\n',' Madrugador\n- 7:00 a 10:00am\n\n Matutino\n- 8:00am a 14:00pm\n\n Vespertino\n- 13:00pm a19:00pm',0,'',0,NULL,'2017-02-27 11:24:02'),
	(2,'Vive latino','18 y 19 de marzo','Ven y vive la experiencia de ser voluntario además de disfrutar la música y actividades de este gran Festival con Pronatura',0,'vivelatino.jpg','Pronatura México es una organización ambiental con larga y reconocida trayectoria en el país, cuya misión es conservar la flora, la fauna y los ecosistemas prioritarios, promoviendo el desarrollo de la sociedad en armonía con la naturaleza.\n\nDesde su creación, en 1981, por un grupo de empresarios y académicos mexicanos, ha impulsado cambios de comportamiento en la sociedad para lograr mejores modelos de uso y manejo de recursos naturales, los cuales han permitido enfrentar problemas como el desempleo, la migración, la pobreza y otros desafíos que amenazan a las comunidades dueñas de los terrenos prioritarios para la conservación de la biodiversidad.\n\nPronatura México forma parte del Sistema Pronatura conformado por seis asociaciones civiles con programas en todo el territorio nacional.\n\nEste año, por segunda vez colaboraremos con ellos haciendo un Festival Vive Latino neutro en emisión de CO2. Los días 18 y 19 de marzo, en el Foro Sol, apoyaremos la distribución de pulseras que además de hacer conciencia, se realizarán actividades posteriormente para la reforestación de atención de distintas reservas naturales del país.\n\nVen y vive la experiencia de ser voluntario además de disfrutar la música y actividades de este gran Festival.','El Vive Latino, es uno de los festivales más importantes de América Latina, esto hace que la cantidad de visitantes, grupos, equipo de producción, stands, etc sea masiva generando una gran cantidad de emisiones de CO2. Con nuestra colaboración podremos hacer contrarestar esto, y hacer un festival neutro en emisiones.','2017-02-25','Vive Latino | 18 y 19 de marzo','Los voluntarios, somos parte de la solución, ven y vive esta gran experiencia y apóyanos siendo un Héroe del Vive Latino!\n\nEl compromiso de los voluntarios es participar el 18 o 19, en turnos de 7 horas, recibiendo a cambio un diploma de participación, comida, hidratación, playera de voluntario, disfrutar los conciertos después de tu turno y claro, la oportunidad de ser parte de esta gran familia de Voluntarios.','Ser voluntario, es una de las tareas más satisfactorias que se pueden hacer, el trabajar en equipo, conocer gente, aprender, y sobre todo enseñar todo lo que sabes. Ayuda mientras disfrutas :D','Única - General','Único: 11 a 18 horas.',0,'',0,NULL,'2017-02-27 11:24:08'),
	(3,'Disney México','5 de marzo','Clorets, Disney México y Voluntarios México, se unen para llevar alegría y compañía a los adultos mayores',0,'cloretsdisney.jpg','Clorets, Disney México y Voluntarios México, se unen para llevar alegría y compañía a los adultos mayores de la Fundación Matías Romero, como parte de la campaña “Tu aliento nos mueve”.\n\nCon la finalidad de acompañar el sábado a los adultos mayores, y darles aliento de felicidad, se les pedirá a los voluntarios escribir una carta para estos adultos, así como participar en las actividades que los organizadores han preparado para ese día.\n\nVen y vive la experiencia de ser voluntario además de disfrutar la compañía, actividades y visita de un influencer sorpresa :D','Los adultos mayores, en ocasiones se sientes melancólicos y solos, vamos a dibujarles una sonrisa en la cara y darles un aliento de felicidad!','2017-02-26','Fundación Matías Romero | 5 de marzo','Los voluntarios, somos parte de la solución, ven y vive esta gran experiencia y apóyanos. El compromiso de los voluntarios es participar el sábado 4 de marzo de 9:30 a 13:30, participando en las actividades, recibiendo un diploma de participación, hidratación, snack, disfrutar esta linda experiencia, y tener la oportunidad de ser parte de esta gran familia de Voluntarios.','Ser voluntario, es una de las tareas más satisfactorias que se pueden hacer, el trabajar en equipo, conocer gente, aprender, y sobre todo enseñar todo lo que sabes. Ayuda mientras disfrutas :D','Única - General','Único: 9:30 a 13:30',0,'',0,NULL,'2017-02-27 11:24:13');

/*!40000 ALTER TABLE `convocatorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(125,'2014_10_12_000000_create_users_table',1),
	(126,'2014_10_12_100000_create_password_resets_table',1),
	(127,'2017_02_18_222639_create_convocatorias_table',1),
	(128,'2017_02_21_040542_create_registros_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;

INSERT INTO `password_resets` (`email`, `token`, `created_at`)
VALUES
	('shaindel@outlook.com','$2y$10$lVrQI1E0vK/5fYIu3ONr8.ETlMpHJ3cNji71uBFCsSdgIVT3KawY2','2017-02-27 00:06:35');

/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table registros
# ------------------------------------------------------------

DROP TABLE IF EXISTS `registros`;

CREATE TABLE `registros` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `convocatoria_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `comentarios` varchar(255) DEFAULT NULL,
  `diploma` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `turno` varchar(255) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `birthday` date DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `habilidades` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `talla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `apellidos`, `email`, `password`, `birthday`, `celular`, `genero`, `pais`, `estado`, `ciudad`, `foto`, `facebook`, `twitter`, `profesion`, `areas`, `habilidades`, `talla`, `bio`, `created_at`, `updated_at`, `remember_token`)
VALUES
	(23,'alex',NULL,'carnalo@outlook.com','$2y$10$FvLHrmFTioXuz22GA6yJSuZl2Xnt3uVddoR.MGpuB9Ad3wTy5sRWa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,'2017-02-27 17:43:22','2017-02-27 17:43:22',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
