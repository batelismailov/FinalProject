
CREATE TABLE IF NOT EXISTS `experience` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `blueTitle` varchar(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `date` date NOT NULL, 
  `paragraph` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


