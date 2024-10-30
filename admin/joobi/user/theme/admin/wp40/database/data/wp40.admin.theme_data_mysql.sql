/*Export of the extension */

DELETE FROM `#__translation_en` WHERE `auto` = 1 AND `imac` IN ('1206732361LXFE','1206732365OQJI','1206732365OQJJ','1206732365OQJK','1206732366OVLY','1206732366OVLZ','1206732369EREW','1206732376KOVE','1213285196AFGY','1225790126CCSR','1228820287MBVC','1242282432ARKM','1298294169DGIW','1298350386KTQN','1299166217IYHU','1327712854HKDV','1338312640PTMH','1359740894RBVZ','1359740894RBWA','1369750048LRQB','1381500293NYJF','1381965412GYKW','1382068744SDQH','1395500509GSSS','1397594079OVQR','1397594080AKCS','1397594080AKCT','1397594081EDOY','1418159379KSUW' );
DELETE `#__translation_reference`.* FROM `#__extension_node` LEFT JOIN `#__translation_reference` ON `#__translation_reference`.`wid` = `#__extension_node`.`wid` WHERE `#__extension_node`.`namekey` IN ('wp40.admin.theme') ;
SET @pk_5_1926 = ( SELECT `wid` FROM `#__extension_node`  WHERE `namekey`='wp40.admin.theme' LIMIT 1 );
UPDATE `#__extension_node`  SET `publish`='1',`folder`='wp40',`wid`=@pk_5_1926,`params`='',`status`='1',`type`='101',`name`='WordPress 4.0 Admin Theme',`destination`='user|theme|admin',`parent`='0',`trans`='1',`certify`='1',`namekey`='wp40.admin.theme',`version`='369',`lversion`='369',`pref`='0',`install`='',`core`='1',`showconfig`='1',`framework`='10' WHERE  `namekey`='wp40.admin.theme';
INSERT IGNORE INTO `#__extension_node` (`publish`,`folder`,`wid`,`params`,`status`,`type`,`name`,`destination`,`parent`,`trans`,`certify`,`namekey`,`version`,`lversion`,`pref`,`install`,`core`,`showconfig`,`framework`) VALUES ('1','wp40',@pk_5_1926,'','1','101','WordPress 4.0 Admin Theme','user|theme|admin','0','1','1','wp40.admin.theme','369','369','0','','1','1','10');

INSERT IGNORE INTO `#__translation_en` (`text`,`auto`,`imac`) VALUES ('Edit','1','1206732361LXFE');
INSERT IGNORE INTO `#__translation_en` (`text`,`auto`,`imac`) VALUES ('Search','1','1206732365OQJI'),('Go','1','1206732365OQJJ'),('Reset','1','1206732365OQJK'),('Display','1','1206732366OVLY'),('Page','1','1206732366OVLZ'),('Icon Legend','1','1206732369EREW'),('Select Files','1','1206732376KOVE'),('Notice','1','1213285196AFGY'),('Remove','1','1225790126CCSR'),('Close','1','1228820287MBVC'),('Add file','1','1242282432ARKM'),('Advance','1','1298294169DGIW'),('Current Image','1','1298350386KTQN'),('Click here to view $MESSAGETYPE message.','1','1299166217IYHU'),('Attach Existing File','1','1327712854HKDV'),('Complete','1','1338312640PTMH'),('Start upload','1','1359740894RBVZ'),('Remove all','1','1359740894RBWA'),('Are you sure you want to remove?','1','1369750048LRQB'),('Edit Module Preferences','1','1381500293NYJF'),('Back to Standard Search','1','1381965412GYKW'),('Advance Search','1','1382068744SDQH'),('Loading','1','1395500509GSSS'),('Toggle navigation','1','1397594079OVQR'),('Search information','1','1397594080AKCS'),('Search in the columns:','1','1397594080AKCT'),('Advance Search in the columns:','1','1397594081EDOY'),('Drag files here or click \"Add files\" to choose','1','1418159379KSUW');
SET @wid_0 = ( SELECT `wid` FROM `#__extension_node`  WHERE `namekey`='wp40.admin.theme' LIMIT 1);
INSERT IGNORE INTO `#__translation_reference` (`wid`,`load`,`imac`) VALUES (@wid_0,'2','1206732361LXFE');
INSERT IGNORE INTO `#__translation_reference` (`wid`,`load`,`imac`) VALUES (@wid_0,'2','1206732365OQJI'),(@wid_0,'2','1206732365OQJJ'),(@wid_0,'2','1206732365OQJK'),(@wid_0,'2','1206732366OVLY'),(@wid_0,'2','1206732366OVLZ'),(@wid_0,'2','1206732369EREW'),(@wid_0,'1','1206732376KOVE'),(@wid_0,'2','1213285196AFGY'),(@wid_0,'1','1225790126CCSR'),(@wid_0,'1','1228820287MBVC'),(@wid_0,'1','1242282432ARKM'),(@wid_0,'2','1298294169DGIW'),(@wid_0,'1','1298350386KTQN'),(@wid_0,'1','1299166217IYHU'),(@wid_0,'1','1327712854HKDV'),(@wid_0,'1','1338312640PTMH'),(@wid_0,'1','1359740894RBVZ'),(@wid_0,'1','1359740894RBWA'),(@wid_0,'1','1369750048LRQB'),(@wid_0,'1','1381500293NYJF'),(@wid_0,'2','1381965412GYKW'),(@wid_0,'1','1382068744SDQH'),(@wid_0,'2','1395500509GSSS'),(@wid_0,'1','1397594079OVQR'),(@wid_0,'2','1397594080AKCS'),(@wid_0,'2','1397594080AKCT'),(@wid_0,'2','1397594081EDOY'),(@wid_0,'1','1418159379KSUW');