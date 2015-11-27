CREATE DATABASE mechamailer;

USE mechamailer;

CREATE TABLE mailingList (
  counter int(11) NOT NULL auto_increment,
  ClanName varchar(128) NOT NULL default '',
  Tag varchar(128) NOT NULL default '',
  Mail varchar(128) NOT NULL default '',
  sent tinyint(1) NOT NULL default 0,
  PRIMARY KEY  (Counter)
);

CREATE TABLE mailSignatures(
  counter int(11) NOT NULL auto_increment,
  name varchar(128) NOT NULL default '',
  signatur varchar(128) NOT NULL default '',
  mail_sign varchar(128) NOT NULL default '',
  PRIMARY KEY  (Counter)
);

