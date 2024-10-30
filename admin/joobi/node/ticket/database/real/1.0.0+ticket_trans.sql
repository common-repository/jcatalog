CREATE TABLE IF NOT EXISTS `#__ticket_trans` (
 `tkid` int(10) unsigned NOT NULL,
 `lgid` tinyint(4) unsigned NOT NULL DEFAULT '1',
 `name` varchar(250) NOT NULL,
 `description` text NOT NULL,
 `auto` tinyint(4) NOT NULL DEFAULT '1',
 `fromlgid` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`tkid`,`lgid`),
 FULLTEXT KEY `IX_ticket_trans_name` (`name`),
 FULLTEXT KEY `IX_ticket_trans_description` (`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;