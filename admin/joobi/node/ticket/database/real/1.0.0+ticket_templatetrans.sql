CREATE TABLE IF NOT EXISTS `#__ticket_templatetrans` (
 `lgid` tinyint(4) unsigned NOT NULL DEFAULT '1',
 `tktid` int(10) unsigned NOT NULL,
 `name` varchar(250) NOT NULL,
 `description` text NOT NULL,
 `auto` tinyint(4) NOT NULL DEFAULT '1',
 `fromlgid` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`tktid`,`lgid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;