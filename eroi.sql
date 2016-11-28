/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50615
Source Host           : 127.0.0.1:3306
Source Database       : eroi

Target Server Type    : MYSQL
Target Server Version : 50615
File Encoding         : 65001

Date: 2016-11-22 19:37:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `eroi`
-- ----------------------------
DROP TABLE IF EXISTS `eroi`;
CREATE TABLE `eroi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eroi
-- ----------------------------
INSERT INTO `eroi` VALUES ('1', 'casa');
