
CREATE TABLE IF NOT EXISTS `perskills` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `skillname` varchar(20) NOT NULL,
  `skillvalue` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


