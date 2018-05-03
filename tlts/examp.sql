
create database `wbs`;
use `wbs`;
DROP TABLE IF EXISTS `approvedlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `approvedlist` (
  `BN` varchar(45) NOT NULL,
  `rn` int(11) NOT NULL,
  `NS` varchar(45) NOT NULL,
  `PP` varchar(45) NOT NULL,
  `SD` varchar(45) NOT NULL,
  `ST` varchar(45) NOT NULL,
  `ED` varchar(45) NOT NULL,
  `ET` varchar(45) NOT NULL,
  PRIMARY KEY (`rn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `approvedlist`
--

LOCK TABLES `approvedlist` WRITE;
/*!40000 ALTER TABLE `approvedlist` DISABLE KEYS */;
INSERT INTO `approvedlist` VALUES ('John Mark Tomontong',1111,'Academic','Naughty America','08/01/2017','7:30','08/02/2010','23:00'),('Johnny rinon',1234,'Academic','Tushy','03/11/2017','6:30','04/01/2012','4:30'),('Boji Astilla',12344,'Nonacademic','Brazzers','01/02/2017','8:30','02/03/2017','26:30');
/*!40000 ALTER TABLE `approvedlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` varchar(250) NOT NULL,
  `comment_status` int(1) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1213134342 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'dawd','wadawd',1),(44,'qwewq','qwe',0),(56,'ASD','ASD',1),(99,'fd','fd',1),(123,'2adaw','dawd',1),(1526,'dadad','dawd',1),(314142,'dasdfdawdad','wdawdwad',1),(1232123,'awdaw','dawd',1),(2423236,'ddasca','scssf',1),(12321233,'awdaw','dawd',1),(1213134341,'2131ewaca','2evfdbsd sdb',1);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment` (
  `eqid` varchar(25) NOT NULL,
  `eqdesc` varchar(225) NOT NULL,
  `eqtype` varchar(35) NOT NULL,
  `eqstatus` varchar(45) NOT NULL,
  `eqqty` varchar(45) DEFAULT NULL,
  `eq_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`eqid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
INSERT INTO `equipment` VALUES ('123','asd','asd','','20',NULL),('12333','DVD','LAPTOP','Borrowed','2',NULL),('ac01','CD-R King','Audio Cord','Available','20','equipment/audio cord.jpg'),('cdc01','Philips','CD Cassette','Available','10','equipment/CD Cassette Player.jpeg'),('dc01','Canon','Digital Camera','Available','10','equipment/Digital Camera Still.jpg'),('dc02','Miniso','Document Camera','Available','10','equipment/Document Camera.jpg'),('dvc01','Canon 2.0','Digital Video Camera','Available','10','equipment/Digital Video Camera.jpg'),('dvdp01','Sony','DVD Player','Available','10','equipment/DVD Player.jpg'),('ext01','CDR KING','Extension','Available','20','equipment/extension.jpg'),('hdmi01','CD-R King','HDMI Cord','Available','20','equipment/hdmi.jpg'),('k01','Karaoke','Karaoke','Available','10','equipment/Karaoke.jpg'),('lap01','Acer Predator','Laptop','Available','10','equipment/Laptop.jpg'),('lcd01','HP 5000','LCD Projector','Available','10','equipment/LCD.jpg'),('mic01','Seinheiser','Microphone','Available','10','equipment/Microphone.jpg'),('op01','CD-R King','Overhead Projector','Available','10','equipment/Overhead Project.jpg'),('pas01','Human','Personal Assistant Services','Available','10','equipment/PAS.jpg'),('sp01','Ximiso','Slide Projector','Available','10','equipment/Slide Projector.jpg'),('vcdp01','Philips','VCD Player','Available','10','equipment/vcd.jpg'),('vgac01','Sony','VGA Cord','Available','20','equipment/vga.jpg'),('vhs01','Philips','VHS Projector','Available','10','equipment/VHS Player.jpg');
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `myhistory`
--

DROP TABLE IF EXISTS `myhistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `myhistory` (
  `dor` varchar(45) NOT NULL,
  `rn` int(11) NOT NULL,
  `rs` varchar(45) NOT NULL,
  PRIMARY KEY (`rn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `myhistory`
--

LOCK TABLES `myhistory` WRITE;
/*!40000 ALTER TABLE `myhistory` DISABLE KEYS */;
INSERT INTO `myhistory` VALUES ('08/208/2018',231321,'dasd');
/*!40000 ALTER TABLE `myhistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `myreservation`
--

DROP TABLE IF EXISTS `myreservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `myreservation` (
  `dor` varchar(45) NOT NULL,
  `sdt` varchar(45) NOT NULL,
  `rn` varchar(45) NOT NULL,
  `rs` varchar(45) NOT NULL,
  PRIMARY KEY (`rn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `myreservation`
--

LOCK TABLES `myreservation` WRITE;
/*!40000 ALTER TABLE `myreservation` DISABLE KEYS */;
INSERT INTO `myreservation` VALUES ('08/02/2017','07/210','124','adsda');
/*!40000 ALTER TABLE `myreservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `overduelist`
--

DROP TABLE IF EXISTS `overduelist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `overduelist` (
  `Bn` varchar(45) NOT NULL,
  `rn` int(11) NOT NULL,
  `ED` varchar(45) NOT NULL,
  `ET` varchar(45) NOT NULL,
  `Fine` varchar(45) NOT NULL,
  PRIMARY KEY (`rn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overduelist`
--

LOCK TABLES `overduelist` WRITE;
/*!40000 ALTER TABLE `overduelist` DISABLE KEYS */;
INSERT INTO `overduelist` VALUES ('Joshua Austria',1123,'08/01/2017','7:45','100php'),('raqib salsalani',2222,'05/06/2017','15:30','100php'),('liza soberano',12324,'04/01/2017','4:30','100php');
/*!40000 ALTER TABLE `overduelist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recordlist`
--

DROP TABLE IF EXISTS `recordlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recordlist` (
  `e_num` int(11) NOT NULL,
  `ename` varchar(45) NOT NULL,
  `etype` varchar(45) NOT NULL,
  `estatus` varchar(45) NOT NULL,
  PRIMARY KEY (`e_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recordlist`
--

LOCK TABLES `recordlist` WRITE;
/*!40000 ALTER TABLE `recordlist` DISABLE KEYS */;
INSERT INTO `recordlist` VALUES (5,'Ewan','Keyboard','Available'),(1234,'joshua','wewe','08/08/2017');
/*!40000 ALTER TABLE `recordlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) NOT NULL,
  `admin_id` varchar(11) DEFAULT NULL,
  `equipment_id` varchar(25) NOT NULL,
  `nos` varchar(60) NOT NULL,
  `purpose` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `num_stud` varchar(60) NOT NULL,
  `dates` varchar(60) NOT NULL,
  `start_time` varchar(60) NOT NULL,
  `end_time` varchar(60) NOT NULL,
  `venue` varchar(45) NOT NULL,
  `campus` varchar(45) NOT NULL,
  `room` varchar(45) NOT NULL,
  `others` varchar(60) DEFAULT NULL,
  `status` varchar(60) NOT NULL,
  `received_date-time` varchar(45) DEFAULT NULL,
  `fine` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=411 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (407,'123','15-25254','lap01','Co-curricular/Extra-curricular','Senior/Meeting/Orientation','senior high school','1-99','02/19/2018','12:05','14:14','sacgp','asdasd','asdasd','CD ni Pakyaw','pending',NULL,''),(408,'123','15-25254','lap01','Co-curricular/Extra-curricular','Senior/Meeting/Orientation','senior high school','1-99','02/20/2018','12:05','14:14','sacgp','asdasd','asdasd','CD ni Pakyaw','pending',NULL,''),(409,'123','15-25254','lap01','Co-curricular/Extra-curricular','Senior/Meeting/Orientation','psychology','100-199','02/19/2018','13:30','14:30','sacgp','asdasd','asdasd','CD ni Pakyaw','pending',NULL,''),(410,'123','15-25254','lap01','Co-curricular/Extra-curricular','Senior/Meeting/Orientation','psychology','100-199','02/20/2018','13:30','14:30','sacgp','asdasd','asdasd','CD ni Pakyaw','pending',NULL,'');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservationlist`
--

DROP TABLE IF EXISTS `reservationlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservationlist` (
  `Bn` varchar(45) NOT NULL,
  `DOr` varchar(45) NOT NULL,
  `rn` int(11) NOT NULL,
  `NS` varchar(45) NOT NULL,
  PRIMARY KEY (`rn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservationlist`
--

LOCK TABLES `reservationlist` WRITE;
/*!40000 ALTER TABLE `reservationlist` DISABLE KEYS */;
INSERT INTO `reservationlist` VALUES ('Alinea Asonto','02/02/2016',222,'Academic'),('Andrea ramirez','08/07/2017',1234,'Academic'),('Szarina Ostrea','05/04/2017',2323,'Nonacademic'),('John Mark Tomontong','02/04/2017',42424,'Mahal nila ako');
/*!40000 ALTER TABLE `reservationlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` varchar(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(45) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('','','','awdwad@gmail.com','','','',0,'Inactive',NULL),('000','wad','wadaw','wadawd@gmail.com','user','$2y$10$jIjr16ytLU40LkbOUAzK7OVvDWmaz.N2P6pkM2g24sOU57NVKUJ1y','013d407166ec4fa56eb1e1f8cbe183b9',0,'Active',NULL),('09876','dwdaw','awdawd','awdawd@gmail.com','staff','$2y$10$WJV1yyrCbVNnmYOv7j9UseEbcUU8tTgQyLH9pgdjZoDqK8Nk51DVm','2a9d121cd9c3a1832bb6d2cc6bd7a8a7',0,'Active',NULL),('1','asd','asd','asd','asd','$2y$10$gi3F6cWOVnLZX0bSSURapOvKM76qX29xAwkIsPbiWF0zJ8qVEVCAy','a9a1d5317a33ae8cef33961c34144f84',0,'active',NULL),('111','Raqwc','ad','dwad@gmail.com','','$2y$10$Z.IoFfR4ebnahe1aUgYbjeju3akJ/p4ZT/o3IN6hqubr8.1QKziXi','285e19f20beded7d215102b49d5c09a0',0,'Active',NULL),('111111','do','you','knodeway@gmail.com','staff','$2y$10$KufKDutvLldaJNAhe1ajLuOB2ClPRWlUDXRhgmRdl5XhjHXl1G4/u','cfbce4c1d7c425baf21d6b6f2babe6be',0,'Active',NULL),('12121','weqwe','eqweqwe','raq@gmail.com','','$2y$10$eIJIPaWfLKvnBj2ifgraMOIDVbK4ddxeiWzybI2KqglLMuZb.RJo.','757b505cfd34c64c85ca5b5690ee5293',0,'Active',NULL),('123','ShitHead','Idrisdawda','raqibidris@gmail.com','admin','$2y$10$ToKAo0SmlYivogfhQr4T7OtABlVpOrZjrRFf71yl.A3QgiYP31zGC','beed13602b9b0e6ecb5b568ff5058f07',0,'Active',NULL),('1234','fawdaw','awdwad','dawdwad@gmail.comn','user','$2y$10$pAazFnELNV4J2PooD/pXhuGGSCubOwPoZhHKsU3jnktLbGVs6B1WK','3dd48ab31d016ffcbf3314df2b3cb9ce',0,'Active',NULL),('12345','FF','GG','TT@GMAIL.COM','user','$2y$10$dOoUtaFlE6jMJZ4IymIvvu017kEG9KldT9gnfFD2XfnZeZ4X1cJ/y','90794e3b050f815354e3e29e977a88ab',0,'Active',NULL),('1234567','Buji','Astillia','ga@gmail.com','user','$2y$10$S8E5n2RoHCnVtMfNnsasWuhwZ4ee4fXlry2cv.QTNYmQZ3CO3EDTS','045117b0e0a11a242b9765e79cbf113f',0,'Active',NULL),('123456789','YY','YY','RR@GMCAIL.OM','user','$2y$10$v3LzdMX6ZXuFQbkVutULd.29KwRqxhMDYjXCf19TFR8lZEuURMa1q','70efdf2ec9b086079795c442636b55fb',0,'Active',NULL),('124','Aywan','Koh','ggloot@gmail.com','user','$2y$10$m1ABcRl5Htxn/yKwRsVGgO0hlQkdtn.nlGHnFNajsYBQsIEvFbJP.','860320be12a1c050cd7731794e231bd3',0,'Active',NULL),('125','HH','QQ','QQ@gmail.com','user','$2y$10$aSey7JgHj47v7FXP9ufKwO1TD1sFXh5d1Rrw5/ZzBHYyA5krVnEiq','352407221afb776e3143e8a1a0577885',0,'Active',NULL),('15-25270','Rhenj Gabriel','Reid','rgbaldoza@gmail.com','user','$2y$10$J6hnffcJmxUEV.Fo5NaTTe5rHzTbZhxguKYJTa1PN8tIWJb1bHz0.','f4f6dce2f3a0f9dada0c2b5b66452017',0,'Active',NULL),('155','Raqib','Idriss','aywan@gmail.com','staff','$2y$10$4eJ05m4jRrJjU4ZjZc0v6.hVuNnd0UluOLVgQXQk8TfzpYYaq6wlm','ff4d5fbbafdf976cfdc032e3bde78de5',0,'Inactive',NULL),('2','aira','astilla','bojiastilla11@gmail.com','admin','$2y$10$BzuTUEQNwFUMo/XldEiq2.TEDwoJZvUffP9gbd9KropGT.8uocjxq','07cdfd23373b17c6b337251c22b7ea57',0,'Active',NULL),('213','23123','23123','213123@gmail.com','staff','$2y$10$Sxps.pPURgglDoCN9ZKBVe70SdDh.E1JmrexPwUUYUlWAPzokPdDS','7f1171a78ce0780a2142a6eb7bc4f3c8',0,'Active',NULL),('23','asd','asd','boji@domain.com','staff','$2y$10$ia/bizjgC8Ukw5rhGuOWR.mMH5DYXsDilWfOf.oFqnmiSpuiCCDT6','54229abfcfa5649e7003b83dd4755294',0,'Active',NULL),('3123213','231231','2131231','21312321@gmail.com','staff','$2y$10$pl0tZ3cjWTDRYh34UUKBDOO42fT5tZunrxQ8QtLF97wJLnco38gC.','53fde96fcc4b4ce72d7739202324cd49',0,'Inactive',NULL),('444','Barack','Obama','pres@gmail.com','staff','$2y$10$HnIvZJWnFSNxT50R/9ofqudB8B3SQyxGkdLyJEfAj7kDc6sssMa8a','07a96b1f61097ccb54be14d6a47439b0',0,'Active',NULL),('555','George','Bush','grass@gmail.com','user','$2y$10$CLgZbCV53IWJFsMIvTt4TOeVYy64a9RhU6atNgwrwV3WzhRngABFq','4c56ff4ce4aaf9573aa5dff913df997a',0,'Active',NULL),('666','devil','lol','ewan@gmail.com','staff','$2y$10$GpJLtUgqQAIJ8EgZnOpCF.uvBOuHKhtbyjAKzKGxO/RXQiwjy6PXe','beed13602b9b0e6ecb5b568ff5058f07',0,'Active',NULL),('6666','kno','de','way@gmail.com','staff','$2y$10$NjPkQS8l7wKMtMrWrfV7MOXR8qr.NpgbDYU6PkddVOVJvgtEnhN2y','9b8619251a19057cff70779273e95aa6',0,'Active',NULL),('777','dawd','awdawd','awdawd@gmail.com','user','$2y$10$gi3F6cWOVnLZX0bSSURapOvKM76qX29xAwkIsPbiWF0zJ8qVEVCAy','a9a1d5317a33ae8cef33961c34144f84',0,'Inactive',NULL),('9','Donald','Duck','d@g.com','user','$2y$10$3hwXycxzNRtTT8CSLQx65OV7h5CNGjt7m1RawlZuwIAHsZ/00soD6','72b32a1f754ba1c09b3695e0cb6cde7f',0,'Active',NULL),('9999','aira','astilla','rodriguezjc04@gmail.com','user','$2y$10$sG4e.vOVhHSGyxJbSyjyWe/MtT0CDbF88Mf5V9i7X7g0T4Ld2GjMm','884d247c6f65a96a7da4d1105d584ddd',0,'Active',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-18 11:41:36
