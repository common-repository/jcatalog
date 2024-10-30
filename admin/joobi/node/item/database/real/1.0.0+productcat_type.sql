CREATE TABLE IF NOT EXISTS `#__productcat_type` (
 `catid` int(10) unsigned NOT NULL,
 `prodtypid` int(10) unsigned NOT NULL,
 PRIMARY KEY (`catid`,`prodtypid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;