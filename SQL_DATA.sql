/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.1.53-community-log : Database - elearning
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`elearning` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `elearning`;

/*Table structure for table `admin_info` */

DROP TABLE IF EXISTS `admin_info`;

CREATE TABLE `admin_info` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_uname` varchar(11) DEFAULT NULL,
  `a_pswd` varchar(11) DEFAULT NULL,
  `u_type` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin_info` */

insert  into `admin_info`(`a_id`,`a_uname`,`a_pswd`,`u_type`) values 
(1,'shant','shant','admin');

/*Table structure for table `bcourse` */

DROP TABLE IF EXISTS `bcourse`;

CREATE TABLE `bcourse` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `cdes` varchar(20) DEFAULT NULL,
  `cprice` int(11) DEFAULT NULL,
  `date_enroll` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_comp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`b_id`),
  KEY `u_id` (`u_id`),
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `bcourse` */

insert  into `bcourse`(`b_id`,`u_id`,`c_id`,`cname`,`cdes`,`cprice`,`date_enroll`,`date_comp`,`status`) values 
(1,NULL,4,'PHP','PHP is a general-pur',999,'2021-10-15 20:22:39','0000-00-00 00:00:00','Registered');

/*Table structure for table `courseinfo` */

DROP TABLE IF EXISTS `courseinfo`;

CREATE TABLE `courseinfo` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) DEFAULT NULL,
  `c_des` varchar(50) DEFAULT NULL,
  `c_thum` varchar(22) DEFAULT NULL,
  `c_price` int(20) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `courseinfo` */

insert  into `courseinfo`(`c_id`,`c_name`,`c_des`,`c_thum`,`c_price`) values 
(4,'PHP','PHP is a general-purpose scripting languag','php.png',999),
(5,'Java','Java is a high-level, class-based, object-oriented','java.png',999);

/*Table structure for table `userfeed` */

DROP TABLE IF EXISTS `userfeed`;

CREATE TABLE `userfeed` (
  `fd_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `remark` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`fd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `userfeed` */

insert  into `userfeed`(`fd_id`,`fname`,`email`,`remark`) values 
(1,'Shant Kumar','kr.shant123@gmail.co','Good'),
(2,'Santosh Kumar','s@gmail.com','Good');

/*Table structure for table `usersinfo` */

DROP TABLE IF EXISTS `usersinfo`;

CREATE TABLE `usersinfo` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_uname` varchar(20) DEFAULT NULL,
  `u_fname` varchar(20) DEFAULT NULL,
  `u_email` varchar(20) DEFAULT NULL,
  `u_pswd` varchar(20) DEFAULT NULL,
  `u_type` varchar(20) DEFAULT NULL,
  `photo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `usersinfo` */

insert  into `usersinfo`(`u_id`,`u_uname`,`u_fname`,`u_email`,`u_pswd`,`u_type`,`photo`) values 
(1,'shant','Shant Kumar','sk@gmail.com','12345','user','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
