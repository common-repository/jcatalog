CREATE TABLE IF NOT EXISTS `#__ticket_typetrans` (
 `tktypeid` smallint(5) unsigned NOT NULL,
 `lgid` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `auto` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `fromlgid` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `name` varchar(255) NOT NULL,
 `description` text NOT NULL,
 PRIMARY KEY (`tktypeid`,`lgid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;