/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50529
Source Host           : localhost:3306
Source Database       : mydb

Target Server Type    : MYSQL
Target Server Version : 50529
File Encoding         : 65001

Date: 2019-06-17 16:44:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `board`
-- ----------------------------
DROP TABLE IF EXISTS `board`;
CREATE TABLE `board` (
  `message` varchar(100) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`message`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of board
-- ----------------------------
INSERT INTO `board` VALUES ('到此一游', '2019-06-01 10:59:27');
INSERT INTO `board` VALUES ('加油！', '2019-06-09 10:59:49');
INSERT INTO `board` VALUES ('希望不断完善', '2019-06-09 10:59:07');
INSERT INTO `board` VALUES ('希望能够做得更好', '2019-06-09 10:58:17');
INSERT INTO `board` VALUES ('继续努力！', '2019-06-09 10:58:40');

-- ----------------------------
-- Table structure for `book`
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `uploadtime` datetime NOT NULL,
  `type` varchar(10) NOT NULL,
  `total` int(50) DEFAULT NULL,
  `local` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1102 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES ('1005', '《PHP全解》', '42.80', '2019-05-12 15:47:24', '高级语言编程', '100', '二楼左边第四排');
INSERT INTO `book` VALUES ('1007', '《Java全栈工程师》', '105.90', '2019-05-12 16:56:36', '高级语言编程', '179', '二楼左边第四排');
INSERT INTO `book` VALUES ('1058', '《网络编程》', '78.50', '2019-05-12 20:15:40', '高级语言编程', '100', '二楼左边第四排');
INSERT INTO `book` VALUES ('1057', '《计算机组成原理》', '28.40', '2019-05-12 20:18:08', '计算机科学', '79', '二楼右边第八排');
INSERT INTO `book` VALUES ('1001', '《伊索寓言》', '30.00', '2019-06-08 15:29:48', '寓言故事', '100', '一楼左边第五排');
INSERT INTO `book` VALUES ('1070', '《IQ84》', '105.00', '2019-06-08 11:04:37', '小说', '45', '三楼右边第六排');
INSERT INTO `book` VALUES ('1002', '《计算机导论》', '46.00', '2019-06-08 15:30:28', '计算机科学', '23', '二楼右边第八排');
INSERT INTO `book` VALUES ('1003', '《狂人日记》', '60.00', '2019-06-08 15:31:56', '小说', '78', '三楼右边第七排');
INSERT INTO `book` VALUES ('1015', '《繁星春水》', '68.00', '2019-06-08 15:32:42', '小说', '100', '三楼右边第七排');
INSERT INTO `book` VALUES ('1101', '《Python教材》', '78.00', '2019-06-08 15:56:21', '高级语言编程', '102', '二楼左边第四排');

-- ----------------------------

-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('jerry', '131313', null, null, null);

-- ----------------------------
