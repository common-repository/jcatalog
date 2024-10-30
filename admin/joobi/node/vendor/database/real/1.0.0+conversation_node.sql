CREATE TABLE IF NOT EXISTS `#__conversation_node` (
 `mcid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `title` varchar(255) NOT NULL,
 `content` text NOT NULL,
 `top` int(10) unsigned NOT NULL DEFAULT '0',
 `parent` int(10) unsigned NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `receiveruid` int(10) unsigned NOT NULL DEFAULT '0',
 `contentextra` text NOT NULL,
 PRIMARY KEY (`mcid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;