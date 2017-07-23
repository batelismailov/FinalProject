
CREATE TABLE IF NOT EXISTS `hobbies` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `photo` varchar(20) NOT NULL,
  `topic` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


