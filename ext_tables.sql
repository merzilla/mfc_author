#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	tx_weauthor_domain_model_author varchar(100) DEFAULT '' NOT NULL
);

#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
	tx_weauthor_domain_model_author  int(4) unsigned NOT NULL DEFAULT '0'
);

#
# Table structure for table 'tx_weauthor_domain_model_author'
#
CREATE TABLE tx_weauthor_domain_model_author (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	firstname tinytext NOT NULL,
	name tinytext NOT NULL,
	email tinytext NOT NULL,
	profil_link text NOT NULL,
	we_author_image text,
	description text,
	twitter text,
	xing text,
	facebook text,

	PRIMARY KEY (uid),
	KEY parent (pid)
);
