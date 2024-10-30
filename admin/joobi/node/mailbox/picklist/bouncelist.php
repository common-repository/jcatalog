<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Bouncelist_picklist extends WPicklist {
	function create() {
		if ( WExtension::get( 'mailing.node' ) ) {
			$listM = WModel::get( 'list' );
			$listM->makeLJ( 'listtrans', 'lsid' );
			$listM->makeLJ( 'list.type', 'lstypeid' );
			$listM->select( 'lsid', 0, 'id' );
			$listM->select( 'name', 1 );
			$listM->where( 'namekey', '!=', 'root' );
			$listM->whereE( 'publish', 1 );
			$listM->whereIn( 'designation', array( 1 ), 2 );
			$resultsA = $listM->load( 'ol' );			
		} else {
			$jnewsExist = WApplication::isEnabled( 'jnews' );
			if ( $jnewsExist ) {
								$model = WModel::get( 'jnews.lists' );
								$model->whereE('list_type' , 1 );
				$model->select( 'id' );
				$model->select( 'list_name', 0, 'name' );
				$model->setLimit( 50 );
				$resultsA = $model->load( 'ol' );
			} else {
			}					
		}		
		$this->addElement( 0 , WText::t('1448507522RQGG') );	
		if ( !empty($resultsA) ) {
			foreach( $resultsA as $result ) {
				$this->addElement( $result->id , $result->name );
			}
		}
		return true;
	}
}