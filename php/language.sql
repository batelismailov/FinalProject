
CREATE TABLE IF NOT EXISTS `language` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `languageName` varchar(20) NOT NULL,
  `languageValue` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
