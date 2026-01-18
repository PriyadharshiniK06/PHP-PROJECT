create database logistic_web;

use logistic_web;

CREATE TABLE `login` (
  `ID` int(255) NOT NULL auto_increment,
  `EMAIL` varchar(256) NOT NULL,
  `PASSWORD` varchar(256) NOT NULL,
  'reset_password' varchar(256) NOT NULL,
  PRIMARY KEY  (`ID`)
);