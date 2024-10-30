CREATE TABLE IF NOT EXISTS `#__item_syndication` (
 `pid` int(10) unsigned NOT NULL,
 `vendid` int(10) unsigned NOT NULL,
 `modifiedby` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `ownervendid` int(10) unsigned NOT NULL DEFAULT '0',
 `catid` int(10) unsigned NOT NULL DEFAULT '0',
 `approved` tinyint(4) NOT NULL DEFAULT '0',
 PRIMARY KEY (`pid`,`vendid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;