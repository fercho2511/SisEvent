/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : dbeventos

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 28/06/2022 19:20:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente`  (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellidos` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `telefono` int NOT NULL,
  `ci` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `estado` smallint NOT NULL DEFAULT 1,
  `fechaRegistro` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `fechaActualizacion` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `usuario_idUsuario` int NOT NULL,
  PRIMARY KEY (`idCliente`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cliente
-- ----------------------------
INSERT INTO `cliente` VALUES (2, 'Fernando', 'Silva Leyton', 70745711, '87326422014', 'sdfsdfsdf@gasdasdasdas', 0, '2022-04-25 23:45:15', '2022-06-09 20:28:32', 9);
INSERT INTO `cliente` VALUES (3, 'fernando', 'silva leyton', 70392266, '0021455', 'sdfsdfsdf@gasdasdasdas', 1, '2022-04-25 23:48:34', '2022-04-28 15:40:33', 0);
INSERT INTO `cliente` VALUES (4, 'Fernando', 'Leyton', 70392277, '873264555', 'fercho11251989@gmail.com', 1, '2022-04-26 16:24:01', '2022-06-09 19:59:49', 4);
INSERT INTO `cliente` VALUES (5, 'jose', 'ferandez', 52454545, '526454188', 'asdsdas@dfasdfsdfsdfsdf', 0, '2022-04-26 16:24:54', '2022-04-30 21:47:06', 4);
INSERT INTO `cliente` VALUES (6, 'ximena', 'paredes mendes', 12154545, '20012451', 'dfsdf@xn--asdasdasasd-8db', 1, '2022-04-26 16:25:58', NULL, 4);
INSERT INTO `cliente` VALUES (7, 'dfsdfsd', 'fsdfsdf', 2147483647, '4545454', 'asdfsf@afsdfsdfsd', 1, '2022-04-26 16:26:42', NULL, 4);
INSERT INTO `cliente` VALUES (8, 'marcelo', 'perucho', 70745120, '52214512', 'martins@gmail.com', 1, '2022-04-26 17:55:23', '2022-04-30 21:46:03', 4);
INSERT INTO `cliente` VALUES (9, 'fernando', 'perucho', 79845200, '8744154', 'perucho@gmail.com', 1, '2022-04-26 17:56:39', '2022-04-30 18:47:36', 1);
INSERT INTO `cliente` VALUES (10, 'pedrito', 'perales', 70754896, '56122124', 'asasd@gmail.com', 1, '2022-04-27 18:33:53', NULL, 4);
INSERT INTO `cliente` VALUES (11, 'Alex', 'prado corrales', 70765986, '5663225', 'fercho@gmail.com', 1, '2022-04-27 18:35:55', '2022-06-09 22:31:13', 9);
INSERT INTO `cliente` VALUES (12, 'miakela', 'fuentes', 67411677, '6598000', 'dfsdf@gmail.vom', 1, '2022-04-27 18:39:10', '2022-04-27 23:57:04', 4);
INSERT INTO `cliente` VALUES (13, 'Paula', 'fernandes', 79864852, '63365221400', 'ferchoadas@gmail.com', 0, '2022-04-27 18:40:46', '2022-04-28 00:11:17', 4);
INSERT INTO `cliente` VALUES (20, 'alex', 'silva', 70352277, '8996545', '', 0, '2022-04-27 19:16:55', '2022-04-27 19:49:38', 4);
INSERT INTO `cliente` VALUES (21, 'victoria', 'torrico', 7856785, '5432567', '', 0, '2022-04-27 19:18:57', '2022-04-27 19:50:39', 4);
INSERT INTO `cliente` VALUES (22, 'Elizabeth', 'Mejia', 67411677, '8036118', 'eliza@gamil.com', 1, '2022-04-28 00:11:41', '2022-06-09 22:13:54', 9);
INSERT INTO `cliente` VALUES (23, 'jose', 'felisiano', 78452669, '85541221000', 'felisiano@gmail.com', 1, '2022-04-28 10:52:37', '2022-04-28 10:52:51', 4);
INSERT INTO `cliente` VALUES (24, 'timoteoq', 'perales monteto', 70569985, '8554554', 'sdfsdfsdf@gasdasdasdas', 1, '2022-04-28 16:29:57', NULL, 4);
INSERT INTO `cliente` VALUES (25, 'pepito', 'perales mendes', 70748514, '55321245', 'ferere@gmail.com', 1, '2022-04-28 17:06:20', NULL, 1);
INSERT INTO `cliente` VALUES (38, 'eleuterio', 'huanca', 70785698, '458774', 'felisiano@gmail.com', 1, '2022-04-28 19:19:51', NULL, 4);
INSERT INTO `cliente` VALUES (40, 'severina', 'palenque', 70736485, '8554114', 'severina@gmail.com', 1, '2022-04-28 21:06:46', NULL, 4);
INSERT INTO `cliente` VALUES (41, 'Antonieta', 'salvatierra', 70784957, '855411', 'salvatierra@gmail.com', 1, '2022-04-29 16:30:49', NULL, 4);
INSERT INTO `cliente` VALUES (42, 'Henrry ', 'Marquez PRado', 70845625, '5441225', 'marquez@gmail.com', 1, '2022-04-30 22:00:51', NULL, 4);
INSERT INTO `cliente` VALUES (43, 'ximena', 'huriarte', 70352277, '8732645', '', 1, '2022-04-30 22:02:02', NULL, 4);
INSERT INTO `cliente` VALUES (44, 'Ximena', 'Fernandes', 70392277, '855444488', 'felisiano@gmail.com', 1, '2022-04-30 22:23:44', '2022-06-09 22:07:06', 9);
INSERT INTO `cliente` VALUES (45, 'ximena', 'Guzman', 75487741, '988855445000', '', 0, '2022-06-09 20:21:28', '2022-06-09 20:48:44', 9);
INSERT INTO `cliente` VALUES (46, 'Fausto', 'delgadillo', 78452001, '6554411', '', 0, '2022-06-09 20:23:11', '2022-06-09 20:23:20', 9);
INSERT INTO `cliente` VALUES (47, '11', 'silverio', 70369988, 'asasas', '', 0, '2022-06-09 22:39:50', '2022-06-09 22:41:04', 9);
INSERT INTO `cliente` VALUES (48, 'Vicente', 'ferandez', 75487741, '0021455', 'eleuterio@gmail.com', 1, '2022-06-28 15:05:44', NULL, 0);
INSERT INTO `cliente` VALUES (49, 'Vicente', 'ferandez', 70734606, '0021455', 'felisiano@gmail.com', 1, '2022-06-28 15:37:15', NULL, 0);
INSERT INTO `cliente` VALUES (50, 'Vicente', 'ferandez', 2151211, '0021455', 'felisiano@gmail.com', 1, '2022-06-28 15:38:33', NULL, 0);

-- ----------------------------
-- Table structure for evento
-- ----------------------------
DROP TABLE IF EXISTS `evento`;
CREATE TABLE `evento`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `evento` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `lugar` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `fechaEvento` datetime(0) NULL DEFAULT '0000-00-00 00:00:00',
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `fechaRegistro` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of evento
-- ----------------------------

-- ----------------------------
-- Table structure for mapa
-- ----------------------------
DROP TABLE IF EXISTS `mapa`;
CREATE TABLE `mapa`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `silla` smallint NOT NULL DEFAULT 0,
  `mesa` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `zona` int NOT NULL DEFAULT 0,
  `estado` smallint NOT NULL DEFAULT 1 COMMENT '1=libre 0=vendida 2=reservada',
  `idCliente` int NULL DEFAULT NULL,
  `fechaventa` timestamp(0) NULL DEFAULT NULL,
  `fechaModificacion` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `idUsuarioAcciones` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_silla_categoria1_idx`(`zona`) USING BTREE,
  INDEX `fk_silla_cliente1_idx`(`idCliente`) USING BTREE,
  CONSTRAINT `fk_silla_categoria1` FOREIGN KEY (`zona`) REFERENCES `zona` (`idZona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_silla_cliente1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 251 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mapa
-- ----------------------------
INSERT INTO `mapa` VALUES (1, 1, '1', 1, 0, 49, '2022-06-28 15:37:15', '2022-06-28 15:37:15', 0);
INSERT INTO `mapa` VALUES (2, 2, '1', 1, 0, 49, '2022-06-28 15:37:15', '2022-06-28 15:37:15', 0);
INSERT INTO `mapa` VALUES (3, 3, '1', 1, 0, NULL, NULL, '2022-06-01 17:25:51', 0);
INSERT INTO `mapa` VALUES (4, 4, '1', 1, 0, NULL, NULL, '2022-06-01 17:25:53', 0);
INSERT INTO `mapa` VALUES (5, 5, '1', 1, 0, 49, '2022-06-28 15:37:15', '2022-06-28 15:37:15', 0);
INSERT INTO `mapa` VALUES (6, 6, '1', 1, 0, 49, '2022-06-28 15:37:15', '2022-06-28 15:37:15', 0);
INSERT INTO `mapa` VALUES (7, 7, '1', 1, 0, 49, '2022-06-28 15:37:15', '2022-06-28 15:37:15', 0);
INSERT INTO `mapa` VALUES (8, 8, '1', 1, 0, 50, '2022-06-28 15:38:33', '2022-06-28 15:38:33', 0);
INSERT INTO `mapa` VALUES (9, 9, '1', 1, 0, 50, '2022-06-28 15:38:33', '2022-06-28 15:38:33', 0);
INSERT INTO `mapa` VALUES (10, 10, '1', 1, 0, 50, '2022-06-28 15:38:33', '2022-06-28 15:38:33', 0);
INSERT INTO `mapa` VALUES (11, 1, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (12, 2, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (13, 3, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (14, 4, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (15, 5, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (16, 6, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (17, 7, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (18, 8, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (19, 9, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (20, 10, '2', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (21, 1, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (22, 2, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (23, 3, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (24, 4, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (25, 5, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (26, 6, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (27, 7, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (28, 8, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (29, 9, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (30, 10, '3', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (31, 1, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (32, 2, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (33, 3, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (34, 4, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (35, 5, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (36, 6, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (37, 7, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (38, 8, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (39, 9, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (40, 10, '4', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (41, 1, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (42, 2, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (43, 3, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (44, 4, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (45, 5, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (46, 6, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (47, 7, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (48, 8, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (49, 9, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (50, 10, '5', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (51, 1, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (52, 2, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (53, 3, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (54, 4, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (55, 5, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (56, 6, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (57, 7, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (58, 8, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (59, 9, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (60, 10, '6', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (61, 1, '7', 1, 0, 48, '2022-06-28 15:05:44', '2022-06-28 15:05:44', 0);
INSERT INTO `mapa` VALUES (62, 2, '7', 1, 0, 48, '2022-06-28 15:05:44', '2022-06-28 15:05:44', 0);
INSERT INTO `mapa` VALUES (63, 3, '7', 1, 0, 48, '2022-06-28 15:05:44', '2022-06-28 15:05:44', 0);
INSERT INTO `mapa` VALUES (64, 4, '7', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (65, 5, '7', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (66, 6, '7', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (67, 7, '7', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (68, 8, '7', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (69, 9, '7', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (70, 10, '7', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (71, 1, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (72, 2, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (73, 3, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (74, 4, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (75, 5, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (76, 6, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (77, 7, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (78, 8, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (79, 9, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (80, 10, '8', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (81, 1, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (82, 2, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (83, 3, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (84, 4, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (85, 5, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (86, 6, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (87, 7, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (88, 8, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (89, 9, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (90, 10, '9', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (91, 1, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (92, 2, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (93, 3, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (94, 4, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (95, 5, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (96, 6, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (97, 7, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (98, 8, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (99, 9, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (100, 10, '10', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (101, 1, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (102, 2, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (103, 3, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (104, 4, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (105, 5, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (106, 6, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (107, 7, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (108, 8, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (109, 9, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (110, 10, '11', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (111, 1, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (112, 2, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (113, 3, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (114, 4, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (115, 5, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (116, 6, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (117, 7, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (118, 8, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (119, 9, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (120, 10, '12', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (121, 1, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (122, 2, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (123, 3, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (124, 4, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (125, 5, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (126, 6, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (127, 7, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (128, 8, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (129, 9, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (130, 10, '13', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (131, 1, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (132, 2, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (133, 3, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (134, 4, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (135, 5, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (136, 6, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (137, 7, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (138, 8, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (139, 9, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (140, 10, '14', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (141, 1, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (142, 2, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (143, 3, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (144, 4, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (145, 5, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (146, 6, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (147, 7, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (148, 8, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (149, 9, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (150, 10, '15', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (151, 1, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (152, 2, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (153, 3, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (154, 4, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (155, 5, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (156, 6, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (157, 7, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (158, 8, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (159, 9, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (160, 10, '16', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (161, 1, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (162, 2, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (163, 3, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (164, 4, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (165, 5, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (166, 6, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (167, 7, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (168, 8, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (169, 9, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (170, 10, '17', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (171, 1, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (172, 2, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (173, 3, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (174, 4, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (175, 5, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (176, 6, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (177, 7, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (178, 8, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (179, 9, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (180, 10, '18', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (181, 1, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (182, 2, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (183, 3, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (184, 4, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (185, 5, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (186, 6, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (187, 7, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (188, 8, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (189, 9, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (190, 10, '19', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (191, 1, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (192, 2, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (193, 3, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (194, 4, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (195, 5, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (196, 6, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (197, 7, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (198, 8, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (199, 9, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (200, 10, '20', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (201, 1, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (202, 2, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (203, 3, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (204, 4, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (205, 5, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (206, 6, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (207, 7, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (208, 8, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (209, 9, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (210, 10, '21', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (211, 1, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (212, 2, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (213, 3, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (214, 4, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (215, 5, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (216, 6, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (217, 7, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (218, 8, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (219, 9, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (220, 10, '22', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (221, 1, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (222, 2, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (223, 3, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (224, 4, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (225, 5, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (226, 6, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (227, 7, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (228, 8, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (229, 9, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (230, 10, '23', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (231, 1, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (232, 2, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (233, 3, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (234, 4, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (235, 5, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (236, 6, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (237, 7, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (238, 8, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (239, 9, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (240, 10, '24', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (241, 1, '25', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (242, 2, '25', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (243, 3, '25', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (244, 4, '25', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (245, 5, '25', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (246, 6, '25', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (247, 7, '25', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (248, 8, '25', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (249, 9, '25', 1, 1, NULL, NULL, NULL, 0);
INSERT INTO `mapa` VALUES (250, 10, '25', 1, 1, NULL, NULL, NULL, 0);

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol`  (
  `idRol` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idRol`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES (1, 'administrador', 'privilegios generales');
INSERT INTO `rol` VALUES (2, 'admin', 'todos lso privilegios');
INSERT INTO `rol` VALUES (3, 'user', 'privilegiso restringidos ');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellido1` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellido2` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telefono` int NOT NULL,
  `ci` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `login` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fechaRegistro` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `estado` smallint NOT NULL DEFAULT 1,
  `idRol` int NOT NULL,
  `idUsuario_Acciones` int NULL DEFAULT 0,
  `fechaModificacion` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`idUsuario`) USING BTREE,
  UNIQUE INDEX `login_UNIQUE`(`login`) USING BTREE,
  UNIQUE INDEX `password_UNIQUE`(`password`) USING BTREE,
  INDEX `fk_usuario_rol1_idx`(`idRol`) USING BTREE,
  CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (4, 'Fernando', 'silva', 'Leyton', 70392277, '8732645', 'fercho11251989@gmail.com', 'FSL8732645', 'e1ecef25e74363f5b2a26947a25c8c9c', '2022-04-18 22:02:10', 1, 1, 0, '2022-06-09 20:01:29');
INSERT INTO `usuario` VALUES (8, 'marcelo', 'martins', 'perucho', 70745120, '52214512', 'martins@gmail.com', 'MMP52214512', '0d1a0a66090f65e2ea29dcf154e02dc7', '2022-04-30 18:16:52', 1, 2, 1, '2022-04-30 21:46:50');
INSERT INTO `usuario` VALUES (9, 'felix', 'Perlaes', 'perucho', 79845200, '8744154', 'perucho@gmail.com', 'FPP8744154', '365f7f9a7664d009a83e4a3f32c1acbf', '2022-04-30 18:40:35', 1, 3, 1, '2022-05-03 20:42:15');
INSERT INTO `usuario` VALUES (10, 'elizabeht', 'mejia', 'arenas', 75495551, '8036118', 'elizabeht@gmail.com', 'EMA8036118', '7892edaf31c91d79a52523a0689fa8fd', '2022-05-12 20:16:14', 1, 2, 4, NULL);

-- ----------------------------
-- Table structure for zona
-- ----------------------------
DROP TABLE IF EXISTS `zona`;
CREATE TABLE `zona`  (
  `idZona` int NOT NULL AUTO_INCREMENT,
  `zona` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `estado` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `precio` smallint NOT NULL,
  `descripcion` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idZona`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of zona
-- ----------------------------
INSERT INTO `zona` VALUES (1, 'vip', '1', 300, NULL);
INSERT INTO `zona` VALUES (2, '', '0', 0, NULL);
INSERT INTO `zona` VALUES (3, 'PLATINO', '0', 400, NULL);

SET FOREIGN_KEY_CHECKS = 1;
