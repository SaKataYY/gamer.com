-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.7.14 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出  表 mydb.texts 结构
DROP TABLE IF EXISTS `texts`;
CREATE TABLE IF NOT EXISTS `texts` (
  `title` varchar(50) NOT NULL,
  `text1` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 正在导出表  mydb.texts 的数据：3 rows
/*!40000 ALTER TABLE `texts` DISABLE KEYS */;
INSERT INTO `texts` (`title`, `text1`) VALUES
	('ã€Šè’é‡Žå¤§é•–å®¢2ã€‹', 'ä¸€ä¸ªä¸é æƒ¯æ€§è¯±å¯¼çŽ©å®¶æ¶ˆè´¹çš„æ¸¸æˆï¼Œå¾€å¾€æ›´åŠ éš¾èƒ½å¯è´µã€‚è€Œã€Šè’é‡Žå¤§é•–å®¢2ã€‹åœ¨æ»¡åˆ†è¯„ä»·çš„åŒæ—¶å¯ä»¥èŽ·å¾—çŽ©å®¶é«˜åˆ†å£ç¢‘ï¼Œè¶³ä»¥è¯´æ˜ŽRæ˜Ÿè¿™å…«å¹´å¹²çš„å¾ˆå€¼ã€‚å¯¹äºŽ8äº¿ç¾Žé‡‘çš„æŠ•èµ„æ¥è¯´ï¼Œå¼€å–ä¸‰å¤©æ‹¿ä¸‹7.5äº¿ç¾Žå…ƒæ”¶å…¥ï¼Œè¯´æ˜Žå®ƒå·²ç»å¯ä»¥ç¡®ä¿ç¨³èµšä¸èµ”äº†ã€‚è€Œå¦‚æžœè®©æˆ‘ç»™è¿™æ¬¾æ¸¸æˆåšä¸€ä¸ªè¯„ä»·ï¼Œæˆ‘ä¼šè¯´ï¼šâ€œå®ƒæ˜¯æ´»çš„â€ã€‚'),
	('æˆ‘è®¤ä¸º 8.0  æ³•å¸ˆä¸è¯¥å‰Šå¼±', 'çŽ°åœ¨æ³•å¸ˆæ²¦ä¸ºå¼€é—¨ ,åšé¢åŒ…çš„èŒä¸š,å‰¯æœ¬çš„åœ°ä½ä¸‹é™äº†ä¸è¡Œäº†,å¾ˆå¤šæ³•å¸ˆéƒ½æ— æ³•å°±ä¸š'),
	('PHPæ˜¯æœ€å¥½çš„è¯­è¨€', 'æˆ‘è§‰å¾—ä½ è¯´çš„å¾ˆå¯¹å•Š');
/*!40000 ALTER TABLE `texts` ENABLE KEYS */;

-- 导出  表 mydb.xx 结构
DROP TABLE IF EXISTS `xx`;
CREATE TABLE IF NOT EXISTS `xx` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 正在导出表  mydb.xx 的数据：8 rows
/*!40000 ALTER TABLE `xx` DISABLE KEYS */;
INSERT INTO `xx` (`username`, `password`) VALUES
	('lcy', '123'),
	('qqai', '123'),
	('lcy', '741841941'),
	('lcy', '741841941'),
	('lcy', '1234'),
	('zad', '123'),
	('ccc', '123'),
	('rourou', '123');
/*!40000 ALTER TABLE `xx` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
