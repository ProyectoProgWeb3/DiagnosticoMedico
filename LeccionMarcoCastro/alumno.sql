CREATE TABLE `alumno` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `materia` varchar(45) DEFAULT NULL,
  `parcial1` double DEFAULT NULL,
  `parcial2` double DEFAULT NULL,
  PRIMARY KEY (`idalumno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;