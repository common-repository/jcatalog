CREATE TABLE IF NOT EXISTS `#__item_viewed` (
 `itvwid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `pid` int(10) unsigned NOT NULL DEFAULT '0',
 `cookieid` bigint(20) unsigned NOT NULL DEFAULT '0',
 `total` smallint(5) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`itvwid`),
 KEY `IX_item_viewed_uid_pid` (`uid`,`pid`),
 KEY `IX_item_viewed_cookieid_pid` (`cookieid`,`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;