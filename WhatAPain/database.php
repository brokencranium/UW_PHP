
---Create table user 
CREATE TABLE IF NOT EXISTS users (
  	 userid       int(4) NOT NULL AUTO_INCREMENT,
  	 username     varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  	 password     varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  	 email  	  varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  	 active  	  tinyint(1) NOT NULL DEFAULT '0',
  	 admin  	  tinyint(1) NOT NULL DEFAULT '0',
  	 banned  	  tinyint(1) NOT NULL DEFAULT '0',
  	 deleted 	  tinyint(1) NOT NULL DEFAULT '0',
  	 createdon    datetime   NOT NULL ,
  	 changedon    timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY ( userid )
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

---Create table content header 
CREATE TABLE IF NOT EXISTS  contentheader (
  	 headerid 		smallint    NOT NULL,
  	 headergroup  	varchar(40) NOT NULL,

  PRIMARY KEY ( headerid )
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

---Create table content item
CREATE TABLE IF NOT EXISTS  headeritems (
  	 headerid  		smallint      NOT NULL,
  	 itemid    		smallint      NOT NULL,
  	 itemgroup  	varchar(40) NOT NULL,

  PRIMARY KEY ( headerid , itemid ),

  FOREIGN KEY ( headerid )
  REFERENCES contentheader( headerid ) 
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

---Create table content
CREATE TABLE IF NOT EXISTS content  (
  	 contentid  	int(10)     NOT NULL AUTO_INCREMENT,
  	 headerid   	smallint      NOT NULL,
  	 itemid     	smallint      NOT NULL,
  	 createdon      datetime   NOT NULL,
  	 changedon      timestamp   NOT NULL DEFAULT CURRENT_TIMESTAMP
                                ON UPDATE CURRENT_TIMESTAMP,
     content        longtext    NOT NULL,

  PRIMARY KEY ( contentid ),
  INDEX ( headerid ,  itemid , changedon ),

  FOREIGN KEY ( headerid, itemid ) 
  REFERENCES   headeritems ( headerid, itemid )

) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

---Create table messages 
CREATE TABLE IF NOT EXISTS messages ( 
	 messageid      int(10)     NOT NULL AUTO_INCREMENT,
	 contentid      int(10)     NOT NULL,
	 userid         int(4)      NOT NULL,
	 createdon      datetime   NOT NULL,
  	 changedon      timestamp   NOT NULL DEFAULT CURRENT_TIMESTAMP
                                ON UPDATE CURRENT_TIMESTAMP,
     comments       longtext    NOT NULL,
     
   PRIMARY KEY ( messageid ),
   INDEX ( contentid, changedon ),
   
   FOREIGN KEY ( contentid ) 
   REFERENCES content( contentid ),
   
   FOREIGN KEY ( userid )
   REFERENCES users( userid )                           
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;