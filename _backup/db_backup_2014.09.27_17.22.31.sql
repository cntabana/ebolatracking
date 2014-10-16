-- -------------------------------------------
SET AUTOCOMMIT=0;
START TRANSACTION;
SET SQL_QUOTE_SHOW_CREATE = 1;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- -------------------------------------------
-- -------------------------------------------
-- START BACKUP
-- -------------------------------------------
-- -------------------------------------------
-- TABLE `departments`
-- -------------------------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `position`
-- -------------------------------------------
DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddepertment` int(11) NOT NULL,
  `jobTitle` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iddepertment` (`iddepertment`),
  CONSTRAINT `position_ibfk_2` FOREIGN KEY (`iddepertment`) REFERENCES `departments` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `request`
-- -------------------------------------------
DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request` text NOT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `requestdate` date NOT NULL,
  `responsedate` date DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `response`
-- -------------------------------------------
DROP TABLE IF EXISTS `response`;
CREATE TABLE IF NOT EXISTS `response` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idrequest` int(11) NOT NULL,
  `response` text NOT NULL,
  `response_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idrequest` (`idrequest`),
  CONSTRAINT `response_ibfk_1` FOREIGN KEY (`idrequest`) REFERENCES `request` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `user`
-- -------------------------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `idposition` int(11) NOT NULL,
  `salt` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idposition` (`idposition`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idposition`) REFERENCES `position` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `user_requests`
-- -------------------------------------------
DROP TABLE IF EXISTS `user_requests`;
CREATE TABLE IF NOT EXISTS `user_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idrequest` int(11) NOT NULL,
  `receiveddate` date NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`,`idrequest`),
  KEY `idrequest` (`idrequest`),
  CONSTRAINT `user_requests_ibfk_3` FOREIGN KEY (`idrequest`) REFERENCES `request` (`id`),
  CONSTRAINT `user_requests_ibfk_4` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE DATA departments
-- -------------------------------------------
INSERT INTO `departments` (`id`,`department`) VALUES
('1','Imisoro');



-- -------------------------------------------
-- TABLE DATA position
-- -------------------------------------------
INSERT INTO `position` (`id`,`iddepertment`,`jobTitle`) VALUES
('1','1','Director Manager');
INSERT INTO `position` (`id`,`iddepertment`,`jobTitle`) VALUES
('2','1','Analyst');



-- -------------------------------------------
-- TABLE DATA request
-- -------------------------------------------
INSERT INTO `request` (`id`,`request`,`phonenumber`,`email`,`requestdate`,`responsedate`,`status`) VALUES
('1','ndifuza kumenya iby imisoro','0788543310','ntabanacoco@gmail.com','2014-09-23','2014-09-26','3');
INSERT INTO `request` (`id`,`request`,`phonenumber`,`email`,`requestdate`,`responsedate`,`status`) VALUES
('2','Ndibaza ikibazo kijyanye n imisoro n amahoro.murakoze','0788598432','ntabanacoco@gmail.com','2014-09-24','2014-09-26','2');
INSERT INTO `request` (`id`,`request`,`phonenumber`,`email`,`requestdate`,`responsedate`,`status`) VALUES
('3','Ndifuza kumenya uko amahoro ameze','0788654321','ntabanacoco@gmail.com','2014-09-24','2014-09-26','3');
INSERT INTO `request` (`id`,`request`,`phonenumber`,`email`,`requestdate`,`responsedate`,`status`) VALUES
('4','request request request request request ','0788543321','ntabanacoco@gmail.com','2014-09-25','2014-09-27','3');
INSERT INTO `request` (`id`,`request`,`phonenumber`,`email`,`requestdate`,`responsedate`,`status`) VALUES
('12','ndifuza kumenya amazina yanjye','078865432','ntabanacoco@gmail.com','2014-09-25','2014-09-27','3');
INSERT INTO `request` (`id`,`request`,`phonenumber`,`email`,`requestdate`,`responsedate`,`status`) VALUES
('13','ndifuza kumenya amazina yanjye','078865432','ntabanacoco@gmail.com','2014-09-25','2014-09-26','1');
INSERT INTO `request` (`id`,`request`,`phonenumber`,`email`,`requestdate`,`responsedate`,`status`) VALUES
('14','ndifuza kumenya amazina yanjye','','cntabana@yahoo.fr','2014-09-27','2014-09-27','3');



-- -------------------------------------------
-- TABLE DATA response
-- -------------------------------------------
INSERT INTO `response` (`id`,`idrequest`,`response`,`response_date`) VALUES
('39','12','<p>bimeze gute?birimo biraza byo</p>','2014-09-27');
INSERT INTO `response` (`id`,`idrequest`,`response`,`response_date`) VALUES
('40','14','Yii doesn\'t do this stuff by itself, so check your code.First place to look for is your model (validation rules and beforeSave) ','2014-09-27');



-- -------------------------------------------
-- TABLE DATA user
-- -------------------------------------------
INSERT INTO `user` (`id`,`group`,`status`,`username`,`password`,`firstname`,`lastname`,`idposition`,`salt`) VALUES
('5','2','0','ntabana','6235b053350cdf3691f66b5c8bcc39df','Ntabana','Aloys','1','5421bfa6367658.62983902');
INSERT INTO `user` (`id`,`group`,`status`,`username`,`password`,`firstname`,`lastname`,`idposition`,`salt`) VALUES
('6','0','0','komeza','6ecafb0fec609047eeefd440903fa576','Komeza','Olivier','1','5421c3c6ea1430.40612653');
INSERT INTO `user` (`id`,`group`,`status`,`username`,`password`,`firstname`,`lastname`,`idposition`,`salt`) VALUES
('7','1','0','denyse','7358e99ec691c509e2a5ea2add779911','Uwamahoro','Denyse','2','5421f57bef9cb3.73553036');
INSERT INTO `user` (`id`,`group`,`status`,`username`,`password`,`firstname`,`lastname`,`idposition`,`salt`) VALUES
('8','1','0','cyusa','cc05a8cbd1f96059e9a467a51904b4c3','Mucyowiraba','Leandre','1','54228c8fde9c75.67291711');



-- -------------------------------------------
-- TABLE DATA user_requests
-- -------------------------------------------
INSERT INTO `user_requests` (`id`,`iduser`,`idrequest`,`receiveddate`,`status`) VALUES
('12','5','1','2014-09-26','3');
INSERT INTO `user_requests` (`id`,`iduser`,`idrequest`,`receiveddate`,`status`) VALUES
('13','7','1','2014-09-24','3');
INSERT INTO `user_requests` (`id`,`iduser`,`idrequest`,`receiveddate`,`status`) VALUES
('14','7','1','2014-09-24','3');
INSERT INTO `user_requests` (`id`,`iduser`,`idrequest`,`receiveddate`,`status`) VALUES
('15','7','3','2014-09-24','3');
INSERT INTO `user_requests` (`id`,`iduser`,`idrequest`,`receiveddate`,`status`) VALUES
('16','6','2','2014-09-26','1');
INSERT INTO `user_requests` (`id`,`iduser`,`idrequest`,`receiveddate`,`status`) VALUES
('17','7','4','2014-09-26','3');
INSERT INTO `user_requests` (`id`,`iduser`,`idrequest`,`receiveddate`,`status`) VALUES
('18','7','12','2014-09-27','3');
INSERT INTO `user_requests` (`id`,`iduser`,`idrequest`,`receiveddate`,`status`) VALUES
('19','7','14','2014-09-27','3');



-- -------------------------------------------
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
COMMIT;
-- -------------------------------------------
-- -------------------------------------------
-- END BACKUP
-- -------------------------------------------
