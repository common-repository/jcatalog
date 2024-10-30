<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Mailbox_preferences_view extends Output_Forms_class {
function prepareView() {
if ( WExtension::get( 'mailing.node' ) ) {
	$this->removeElements( 'mailbox_preferences_hardusersubscribejnews' );
} else {
	$this->removeElements( 'mailbox_preferences_hardusersubscribe' );
}
return true;
}}