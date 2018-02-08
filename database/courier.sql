/*
SQLyog - Free MySQL GUI v5.17
Host - 5.5.8-log : Database - courier
*********************************************************************
Server version : 5.5.8-log
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `courier`;

USE `courier`;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `city` */

insert into `city` (`cid`,`cname`) values (1,'Indore');
insert into `city` (`cid`,`cname`) values (2,'dewas');
insert into `city` (`cid`,`cname`) values (3,'bhopal');
insert into `city` (`cid`,`cname`) values (4,'Indore');
insert into `city` (`cid`,`cname`) values (5,'xdtgxdgxdghxh');
insert into `city` (`cid`,`cname`) values (6,'hggh');
insert into `city` (`cid`,`cname`) values (7,'ydyyr');
insert into `city` (`cid`,`cname`) values (8,'eaeaee');
insert into `city` (`cid`,`cname`) values (9,'dsfsf');

/*Table structure for table `complain` */

DROP TABLE IF EXISTS `complain`;

CREATE TABLE `complain` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `complain` */

insert into `complain` (`com_id`,`title`,`description`,`name`,`contact`,`email`,`date`) values (1,'late service','gyugujhv uv gucv u','Vini',12,'a@gmail.com','28/09/14');
insert into `complain` (`com_id`,`title`,`description`,`name`,`contact`,`email`,`date`) values (2,'late service','gyugujhv uv gucv u','Vini',12,'r@gmil.com','28/09/14');

/*Table structure for table `courier` */

DROP TABLE IF EXISTS `courier`;

CREATE TABLE `courier` (
  `c_id` varchar(255) NOT NULL,
  `from_name` varchar(255) NOT NULL,
  `to_name` varchar(255) NOT NULL,
  `from_contact` int(11) NOT NULL,
  `to_contact` int(11) NOT NULL,
  `from_address` varchar(255) NOT NULL,
  `to_address` varchar(255) NOT NULL,
  `from_city` varchar(255) NOT NULL,
  `to_city` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `subadmin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `city_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `courier` */

insert into `courier` (`c_id`,`from_name`,`to_name`,`from_contact`,`to_contact`,`from_address`,`to_address`,`from_city`,`to_city`,`post_date`,`subadmin`,`status`,`city_status`) values ('123','nikunj','rupendra',789456,346798798,'sukhlia','palasia','jaipur','ajmer','2014-09-29','bharat','Dispatch','pune');
insert into `courier` (`c_id`,`from_name`,`to_name`,`from_contact`,`to_contact`,`from_address`,`to_address`,`from_city`,`to_city`,`post_date`,`subadmin`,`status`,`city_status`) values ('5146','rahul','aarchi',56456,5646,'aazad nagar','sadar bzar','raipur','khargone','29/09/2014','bharat','Dispatch','pune');
insert into `courier` (`c_id`,`from_name`,`to_name`,`from_contact`,`to_contact`,`from_address`,`to_address`,`from_city`,`to_city`,`post_date`,`subadmin`,`status`,`city_status`) values ('dhdhdfh','dfhdfhhh','dfhdhdh',43433,0,'hdhhhd','dfhdfhh','dhdhh','dfhdhdh','2014-10-07','bharat','Pending','dfhdhdh');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `ofc_address` varchar(255) NOT NULL,
  `reg_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert into `user` (`username`,`password`,`type`,`email`,`name`,`city`,`p_address`,`ofc_address`,`reg_date`,`status`,`contact`,`id`) values ('aarchi','5146','admin','','','','','','','',0,1);
insert into `user` (`username`,`password`,`type`,`email`,`name`,`city`,`p_address`,`ofc_address`,`reg_date`,`status`,`contact`,`id`) values ('bharat','123','subadmin','b@gmail.com','bharat','Indore','sudama nagar','New palasia','29/09/2014','pending',456123,5);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
