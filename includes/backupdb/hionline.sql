/*
Navicat MySQL Data Transfer

Source Server         : WEBServer
Source Server Version : 50555
Source Host           : 192.168.11.9:3306
Source Database       : hionline

Target Server Type    : MYSQL
Target Server Version : 50555
File Encoding         : 65001

Date: 2017-07-13 13:55:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for error
-- ----------------------------
DROP TABLE IF EXISTS `error`;
CREATE TABLE `error` (
  `err_code` varchar(10) NOT NULL DEFAULT '',
  `err_msg` varchar(255) DEFAULT '0',
  `err_msg_en` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`err_code`),
  UNIQUE KEY `err_code` (`err_code`),
  KEY `err_code_2` (`err_code`)
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_admin` varchar(15) CHARACTER SET tis620 DEFAULT NULL,
  `log_cid` varchar(13) CHARACTER SET tis620 DEFAULT NULL,
  `log_menu` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `log_action` varchar(250) CHARACTER SET tis620 DEFAULT NULL,
  `log_datetime` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `log_ipaddress` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2760 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tabeluser
-- ----------------------------
DROP TABLE IF EXISTS `tabeluser`;
CREATE TABLE `tabeluser` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `ADMIN` int(1) NOT NULL,
  `SERVICE` int(1) NOT NULL,
  `REPORT` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM AUTO_INCREMENT=11040 DEFAULT CHARSET=tis620;
