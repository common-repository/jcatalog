CREATE TABLE IF NOT EXISTS `#__mailbox_node` (
 `inbid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
 `password` varchar(250) NOT NULL,
 `server` varchar(250) NOT NULL,
 `username` varchar(255) NOT NULL,
 `addon` varchar(255) NOT NULL,
 `description` text NOT NULL,
 `name` varchar(250) NOT NULL,
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `params` text,
 `ordering` smallint(5) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`inbid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;