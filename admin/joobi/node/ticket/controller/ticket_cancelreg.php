<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_cancelreg_controller extends WController {
function cancelreg(){
	WPages::redirect('controller=ticket');
	return true;
}
}