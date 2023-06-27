/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - mov_34028791_groupchat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mov_34028791_groupchat` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `mov_34028791_groupchat`;

/*Table structure for table `mesages` */

DROP TABLE IF EXISTS `mesages`;

CREATE TABLE `mesages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_desc` longtext DEFAULT NULL,
  `muser_id` int(11) DEFAULT NULL,
  `msg_time` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `mesages` */

insert  into `mesages`(`message_id`,`message_desc`,`muser_id`,`msg_time`) values 
(2,'message',1,'1681313891'),
(3,'iam good',1,'1681314201'),
(4,'hi',5,'1681315751'),
(16,'hellow boys',2,'1681316051'),
(17,'hi boys',1,'1681316059'),
(18,'ahmed',1,'1681317609'),
(19,'hello peter',3,'1681320304'),
(20,'hello',2,'1681321954'),
(21,'hi',1,'1681321973'),
(22,'how are you',2,'1681322011'),
(23,'hi',4,'1681322318'),
(24,'how are you',1,'1681322333'),
(25,'hello boys',4,'1681322695'),
(26,'what',1,'1681322707'),
(27,'hi my boys',3,'1681322755'),
(28,'ggfhfghf',1,'1681322933'),
(29,'fghgfh',1,'1681322939'),
(30,'hi iam new heree',1,'1681324973'),
(31,'hi boys',1,'1681325822'),
(32,'hi mate',4,'1681325844'),
(33,'one  last ride',1,'1681326464'),
(34,'hi helllo',1,'1681326649');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passw` varchar(200) NOT NULL,
  `user_profile` varchar(30) DEFAULT NULL,
  `is_online` int(11) DEFAULT 0,
  `log_time` int(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`user_id`,`first_name`,`last_name`,`email`,`passw`,`user_profile`,`is_online`,`log_time`) values 
(1,'Arslan','nisar','ar@gmail.com','12345','5.jpg',0,NULL),
(2,'ahmed','ali','ah@gmail.com','12345','1.jpg',0,NULL),
(3,'asif','khan','ak@gmail.com','12345','3.jpg',0,NULL),
(4,'noman','ahmed','nm@gmail.com','12345','2.jpg',0,NULL),
(5,'sohaib','kaleem','sk@gmail.com','12345','4.jpg',0,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
