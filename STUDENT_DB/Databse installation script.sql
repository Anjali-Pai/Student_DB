Create database if not exists student_info;
CREATE TABLE if not exists `adminlogin` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

insert into  adminlogin(Username,Password) values('admin','admin');

CREATE TABLE if not exists `info` (
  `roll_num` char(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `branch` char(8) NOT NULL,
  `mobile` char(10) NOT NULL,
  `photo` longblob,
  `year` int(4) NOT NULL,
  `cet`  int(4)  NOT NULL,
  `ssc`   int(4) NOT NULL,
  `hsc`    int(4) NOT NULL,
  `quota`   int(4)  NOT NULL,
  `rank`   int(4) NOT NULL,
  

  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE if not exists `info_people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(40) NOT NULL,
  `query` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `semester1` (

  `roll_num` char(8) NOT NULL,
  `physics` varchar(4) NOT NULL,
  `chemistry` varchar(4) NOT NULL,
  `maths1` varchar(4) not null,
  `eng_mech` varchar(4) not null,
  `workshop` varchar(4) not null,
  `cprog`  varchar(4) not null,
  `cproglab` varchar(4) not null,


  PRIMARY KEY (roll_num)
) ENGINE=innodb DEFAULT CHARSET=latin1;

