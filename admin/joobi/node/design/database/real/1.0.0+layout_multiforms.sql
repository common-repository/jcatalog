CREATE TABLE IF NOT EXISTS `#__layout_multiforms` (
 `fid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 `yid` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `namekey` varchar(100) NOT NULL,
 `sid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `map` varchar(100) NOT NULL,
 `publish` tinyint(4) NOT NULL DEFAULT '0',
 `core` tinyint(4) NOT NULL DEFAULT '1',
 `type` varchar(100) NOT NULL,
 `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `ordering` smallint(5) unsigned NOT NULL DEFAULT '99',
 `initial` varchar(255) NOT NULL,
 `readonly` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `hidden` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `required` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `level` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `params` text NOT NULL,
 `did` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `area` varchar(20) NOT NULL,
 `ref_yid` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `frame` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `private` tinyint(4) NOT NULL DEFAULT '0',
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `fdid` int(10) unsigned NOT NULL DEFAULT '0',
 `parentdft` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `checktype` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `xsvisible` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `xshidden` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `devicevisible` varchar(100) NOT NULL,
 `devicehidden` varchar(100) NOT NULL,
 PRIMARY KEY (`fid`),
 UNIQUE KEY `UK_layout_forms_namekey` (`namekey`),
 KEY `IX_layout_multiform_yid_publish_level_rolid_ordering` (`level`,`publish`,`yid`,`ordering`,`rolid`),
 KEY `IX_layout_multiform_map` (`map`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;