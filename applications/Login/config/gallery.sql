CREATE DATABASE gallery DEFAULT CHARACTER SET  utf8 COLLATE utf8_unicode_ci;

USE `gallery`;

CREATE TABLE User(
	id INT(11) NOT NULL auto_increment,	
	created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp NULL DEFAULT NULL,
	deleted INT(1) DEFAULT 0,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(32) NOT NULL,
	PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;