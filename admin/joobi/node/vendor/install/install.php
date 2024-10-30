<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_Node_install extends WInstall {
	public function install(&$object) {
		if ( !empty( $this->newInstall ) || (property_exists($object, 'newInstall') && $object->newInstall) ) {
						$this->_defaultImage();
						$usersSyncroleC = WClass::get( 'users.syncrole' );
			$usersSyncroleC->updateThisRole( 'vendor', 'manager' );
			$usersSyncroleC->updateThisRole( 'storemanager', 'admin' );
			$usersSyncroleC->process();
						if ( WExtension::exist( 'contacts.node' ) ) {
								$vendorM = WModel::get( 'vendor' );
				$vendorM->makeLJ( 'vendortrans', 'vendid' );
								$vendorM->select( 'vendid' );
				$vendorM->select( 'name', 1 );
				$select = $vendorM->printQ( 'load' );
				$organizationM = WModel::get( 'organization.details', 'object' );
								$organizationM->setIgnore();
				$organizationM->insertSelect( array( 'vendid', 'organization' ), $select );
				$vendorM = WModel::get( 'vendor' );
								$vendorM->select( 'vendid' );
				$vendorM->select( 'uid', 1 );
				$select = $vendorM->printQ( 'load' );
				$organizationContactsM = WModel::get( 'organization.contacts', 'object' );
								$organizationContactsM->setIgnore();
				$organizationContactsM->insertSelect( array( 'vendid', 'uid' ), $select );
			}			
		}
		return true;
	}
	private function _defaultImage() {
		$imageM = WModel::get( 'files' );
		$imageM->whereE( 'name', 'vendorx' );
		$imageID = $imageM->load( 'lr', 'filid' );
		if ( empty($imageID) ) {
			$vendorM = WModel::get( 'vendor' );
			$status = $vendorM->saveItemMoveFile( JOOBI_DS_NODE .'vendor/install/image/vendorx.png', '', true, 'filid', false );
			if ( $status ) {
				$imageM->whereE( 'name', 'vendorx' );
				$imageM->setVal( 'core', 1 );
				$imageM->update();
			}		}
		return true;
	}
}