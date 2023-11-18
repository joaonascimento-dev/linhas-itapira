/*
 Navicat Premium Data Transfer

 Source Server         : localhost 3388
 Source Server Type    : MySQL
 Source Server Version : 50735
 Source Host           : localhost:3388
 Source Schema         : linhas-itapira

 Target Server Type    : MySQL
 Target Server Version : 50735
 File Encoding         : 65001

 Date: 18/11/2023 08:48:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for horarios
-- ----------------------------
DROP TABLE IF EXISTS `horarios`;
CREATE TABLE `horarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inicio` time(0) NULL DEFAULT NULL,
  `fim` time(0) NULL DEFAULT NULL,
  `funcionamento` int(11) NULL DEFAULT NULL,
  `linha_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 137 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of horarios
-- ----------------------------
INSERT INTO `horarios` VALUES (1, '06:40:00', '07:20:00', 0, 1);
INSERT INTO `horarios` VALUES (2, '08:40:00', '09:20:00', 0, 1);
INSERT INTO `horarios` VALUES (3, '10:00:00', '10:40:00', 0, 1);
INSERT INTO `horarios` VALUES (4, '14:40:00', '15:20:00', 0, 1);
INSERT INTO `horarios` VALUES (5, '17:20:00', '17:50:00', 0, 1);
INSERT INTO `horarios` VALUES (6, '18:30:00', '19:10:00', 0, 1);
INSERT INTO `horarios` VALUES (38, '04:50:00', '05:20:00', 0, 2);
INSERT INTO `horarios` VALUES (39, '06:00:00', '06:40:00', 0, 2);
INSERT INTO `horarios` VALUES (40, '07:20:00', '08:00:00', 0, 2);
INSERT INTO `horarios` VALUES (41, '11:20:00', '12:00:00', 0, 2);
INSERT INTO `horarios` VALUES (42, '12:40:00', '13:20:00', 0, 2);
INSERT INTO `horarios` VALUES (43, '14:00:00', '14:40:00', 0, 2);
INSERT INTO `horarios` VALUES (44, '15:20:00', '16:00:00', 0, 2);
INSERT INTO `horarios` VALUES (45, '16:40:00', '17:20:00', 0, 2);
INSERT INTO `horarios` VALUES (46, '18:00:00', '18:40:00', 0, 2);
INSERT INTO `horarios` VALUES (47, '07:00:00', '07:15:00', 0, 3);
INSERT INTO `horarios` VALUES (48, '08:00:00', '08:15:00', 0, 3);
INSERT INTO `horarios` VALUES (49, '11:00:00', '11:15:00', 0, 3);
INSERT INTO `horarios` VALUES (50, '12:00:00', '12:15:00', 0, 3);
INSERT INTO `horarios` VALUES (51, '15:00:00', '15:15:00', 0, 3);
INSERT INTO `horarios` VALUES (52, '16:00:00', '16:15:00', 0, 3);
INSERT INTO `horarios` VALUES (53, '17:00:00', '17:15:00', 0, 3);
INSERT INTO `horarios` VALUES (54, '05:00:00', '05:20:00', 0, 4);
INSERT INTO `horarios` VALUES (55, '06:00:00', '06:20:00', 0, 4);
INSERT INTO `horarios` VALUES (56, '07:00:00', '07:20:00', 0, 4);
INSERT INTO `horarios` VALUES (57, '08:00:00', '08:20:00', 0, 4);
INSERT INTO `horarios` VALUES (58, '10:00:00', '10:20:00', 0, 4);
INSERT INTO `horarios` VALUES (59, '12:00:00', '12:20:00', 0, 4);
INSERT INTO `horarios` VALUES (60, '14:00:00', '14:20:00', 0, 4);
INSERT INTO `horarios` VALUES (61, '16:00:00', '16:20:00', 0, 4);
INSERT INTO `horarios` VALUES (62, '17:00:00', '17:20:00', 0, 4);
INSERT INTO `horarios` VALUES (63, '18:20:00', '18:40:00', 0, 4);
INSERT INTO `horarios` VALUES (64, '05:00:00', '05:30:00', 0, 5);
INSERT INTO `horarios` VALUES (65, '06:00:00', '06:30:00', 0, 5);
INSERT INTO `horarios` VALUES (66, '07:00:00', '07:30:00', 0, 5);
INSERT INTO `horarios` VALUES (67, '09:00:00', '09:30:00', 0, 5);
INSERT INTO `horarios` VALUES (68, '11:00:00', '11:30:00', 0, 5);
INSERT INTO `horarios` VALUES (69, '12:00:00', '12:30:00', 0, 5);
INSERT INTO `horarios` VALUES (70, '13:00:00', '13:30:00', 0, 5);
INSERT INTO `horarios` VALUES (71, '14:00:00', '14:30:00', 0, 5);
INSERT INTO `horarios` VALUES (72, '16:00:00', '16:30:00', 0, 5);
INSERT INTO `horarios` VALUES (73, '17:00:00', '17:30:00', 0, 5);
INSERT INTO `horarios` VALUES (74, '18:20:00', '18:50:00', 0, 5);
INSERT INTO `horarios` VALUES (75, '05:10:00', '05:40:00', 0, 6);
INSERT INTO `horarios` VALUES (76, '06:30:00', '07:10:00', 0, 6);
INSERT INTO `horarios` VALUES (77, '06:30:00', '07:25:00', 0, 6);
INSERT INTO `horarios` VALUES (78, '08:30:00', '09:10:00', 0, 6);
INSERT INTO `horarios` VALUES (79, '10:00:00', '10:55:00', 0, 6);
INSERT INTO `horarios` VALUES (80, '11:50:00', '12:45:00', 0, 6);
INSERT INTO `horarios` VALUES (81, '13:40:00', '14:20:00', 0, 6);
INSERT INTO `horarios` VALUES (82, '15:10:00', '16:05:00', 0, 6);
INSERT INTO `horarios` VALUES (83, '17:00:00', '17:50:00', 0, 6);
INSERT INTO `horarios` VALUES (84, '17:30:00', '18:20:00', 0, 6);
INSERT INTO `horarios` VALUES (85, '18:30:00', '19:10:00', 0, 6);
INSERT INTO `horarios` VALUES (86, '07:00:00', '07:40:00', 0, 7);
INSERT INTO `horarios` VALUES (87, '11:50:00', '12:40:00', 0, 7);
INSERT INTO `horarios` VALUES (88, '15:40:00', '16:30:00', 0, 7);
INSERT INTO `horarios` VALUES (89, '17:40:00', '18:20:00', 0, 7);
INSERT INTO `horarios` VALUES (90, '06:45:00', '07:10:00', 0, 8);
INSERT INTO `horarios` VALUES (91, '17:40:00', '18:05:00', 0, 8);
INSERT INTO `horarios` VALUES (92, '08:00:00', '08:30:00', 0, 9);
INSERT INTO `horarios` VALUES (93, '15:00:00', '15:30:00', 0, 9);
INSERT INTO `horarios` VALUES (94, '06:00:00', '06:20:00', 0, 10);
INSERT INTO `horarios` VALUES (95, '17:00:00', '17:20:00', 0, 10);
INSERT INTO `horarios` VALUES (96, '06:25:00', '05:50:00', 0, 11);
INSERT INTO `horarios` VALUES (97, '07:00:00', NULL, 0, 11);
INSERT INTO `horarios` VALUES (98, '04:50:00', '05:20:00', 1, 2);
INSERT INTO `horarios` VALUES (99, '06:00:00', '06:40:00', 1, 2);
INSERT INTO `horarios` VALUES (100, '07:20:00', '08:00:00', 1, 2);
INSERT INTO `horarios` VALUES (101, '08:40:00', '09:20:00', 1, 2);
INSERT INTO `horarios` VALUES (102, '11:20:00', '12:00:00', 1, 2);
INSERT INTO `horarios` VALUES (103, '13:30:00', '14:00:00', 1, 2);
INSERT INTO `horarios` VALUES (104, '17:00:00', '17:30:00', 1, 2);
INSERT INTO `horarios` VALUES (105, '05:00:00', '05:20:00', 1, 4);
INSERT INTO `horarios` VALUES (106, '06:00:00', '06:20:00', 1, 4);
INSERT INTO `horarios` VALUES (107, '08:00:00', '08:20:00', 1, 4);
INSERT INTO `horarios` VALUES (108, '09:30:00', '09:50:00', 1, 4);
INSERT INTO `horarios` VALUES (109, '13:20:00', '13:30:00', 1, 4);
INSERT INTO `horarios` VALUES (110, '17:00:00', '17:20:00', 1, 4);
INSERT INTO `horarios` VALUES (111, '06:00:00', '06:30:00', 1, 5);
INSERT INTO `horarios` VALUES (112, '07:30:00', '08:00:00', 1, 5);
INSERT INTO `horarios` VALUES (113, '08:30:00', '09:00:00', 1, 5);
INSERT INTO `horarios` VALUES (114, '10:00:00', '10:30:00', 1, 5);
INSERT INTO `horarios` VALUES (115, '13:00:00', '13:30:00', 1, 5);
INSERT INTO `horarios` VALUES (116, '14:00:00', '14:30:00', 1, 5);
INSERT INTO `horarios` VALUES (117, '17:00:00', '17:30:00', 1, 5);
INSERT INTO `horarios` VALUES (118, '05:10:00', '05:40:00', 1, 6);
INSERT INTO `horarios` VALUES (119, '06:30:00', '07:10:00', 1, 6);
INSERT INTO `horarios` VALUES (120, '10:00:00', '10:55:00', 1, 6);
INSERT INTO `horarios` VALUES (121, '11:50:00', '12:45:00', 1, 6);
INSERT INTO `horarios` VALUES (122, '13:40:00', '14:20:00', 1, 6);
INSERT INTO `horarios` VALUES (123, '15:10:00', '16:05:00', 1, 6);
INSERT INTO `horarios` VALUES (124, '17:00:00', '17:50:00', 1, 6);
INSERT INTO `horarios` VALUES (125, '18:30:00', '19:10:00', 1, 6);
INSERT INTO `horarios` VALUES (126, '07:00:00', '07:40:00', 1, 7);
INSERT INTO `horarios` VALUES (127, '12:00:00', '12:50:00', 1, 7);
INSERT INTO `horarios` VALUES (128, '04:50:00', '05:20:00', 2, 2);
INSERT INTO `horarios` VALUES (129, '11:00:00', '11:30:00', 2, 2);
INSERT INTO `horarios` VALUES (130, '06:00:00', '06:20:00', 2, 4);
INSERT INTO `horarios` VALUES (131, '12:00:00', '13:20:00', 2, 4);
INSERT INTO `horarios` VALUES (132, '06:00:00', '06:20:00', 2, 5);
INSERT INTO `horarios` VALUES (133, '13:00:00', '13:20:00', 2, 5);
INSERT INTO `horarios` VALUES (134, '05:10:00', '05:40:00', 2, 6);
INSERT INTO `horarios` VALUES (135, '10:00:00', '10:55:00', 2, 6);
INSERT INTO `horarios` VALUES (136, '18:30:00', '19:00:00', 2, 6);

-- ----------------------------
-- Table structure for linha
-- ----------------------------
DROP TABLE IF EXISTS `linha`;
CREATE TABLE `linha`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of linha
-- ----------------------------
INSERT INTO `linha` VALUES (1, 'RODOVIARIA - PRADOS');
INSERT INTO `linha` VALUES (2, 'RODOVIARIA - RECREATIVA');
INSERT INTO `linha` VALUES (3, 'RODOVIARIA - FIGUEIREDO');
INSERT INTO `linha` VALUES (4, 'RODOVIARIA - CUBATAO (VIA FIGUEIREDO)');
INSERT INTO `linha` VALUES (5, 'RODOVIARIA - CUBATAO');
INSERT INTO `linha` VALUES (6, 'RODOVIARIA - SANTA CRUZ');
INSERT INTO `linha` VALUES (7, 'RODOVIARIA - PONTE NOVA');
INSERT INTO `linha` VALUES (8, 'RODOVIARIA - ITAPIRINHA');
INSERT INTO `linha` VALUES (9, 'RODOVIARIA - BRUMADO');
INSERT INTO `linha` VALUES (10, 'RODOVIARIA - TANQUINHO');
INSERT INTO `linha` VALUES (11, 'RODOVIARIA - JUVENAL LEITE');

-- ----------------------------
-- Table structure for parada
-- ----------------------------
DROP TABLE IF EXISTS `parada`;
CREATE TABLE `parada`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `linhaId` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `linhaId`(`linhaId`) USING BTREE,
  CONSTRAINT `linhaId` FOREIGN KEY (`linhaId`) REFERENCES `linha` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of parada
-- ----------------------------
INSERT INTO `parada` VALUES (1, 'Centro', '-22.4366529', '-46.822313', 1);
INSERT INTO `parada` VALUES (2, 'Rodoviaria', '-22.4294292', '-46.8230301', 1);
INSERT INTO `parada` VALUES (3, 'Prados', '-22.448141802487566', '-46.81149829431125', 1);

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `senhaConfirmar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'joao', '123456', '459.691.638-13', 'joao@gmail.com', '123456');
INSERT INTO `usuario` VALUES (2, 'Lucas Rogatto', '12345', '123.123.123-12', 'rogas@mail.com', '12345');
INSERT INTO `usuario` VALUES (3, 'Leonardo', '123', '123.123.123-09', 'leonardo@gmail.com', '123');

SET FOREIGN_KEY_CHECKS = 1;
