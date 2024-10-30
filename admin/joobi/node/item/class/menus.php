<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Menus_class extends WClasses {
	public function availableType($designation) {
		$allTypesAOriginA = $this->_loadAllTypesA();
		if ( empty( $allTypesAOriginA ) ) return false;
		if ( is_string($designation) ) {
			$productTypeT = WType::get( 'item.designation' );
			$designation = $productTypeT->getValue( $designation, false );
		}		
		$hasType = false;
		foreach( $allTypesAOriginA as $oneOrig ) {
			if ( $oneOrig->type == $designation && 1 == $oneOrig->publish ) {
				return true;
			}		}		
		return false;
	}	
	public function removeNotUsedMenus($app) {
				$itemDesignationT = WType::get( 'item.designation' );
		$allTypesA = $itemDesignationT->getList( false );
				$typeOfMenuToRemoveA = array( '_new_item_menu_', '_listing_item_' );
		$roleC = WRole::get();
		$allTypesAOriginA = $this->_loadAllTypesA();
		if ( empty($allTypesAOriginA) ) return array();
		$newTypeRolesA = array();
		foreach( $allTypesAOriginA as $oneOrig ) {
						if ( empty($oneOrig->publish) ) continue;
			if ( empty($newTypeRolesA[$oneOrig->type]) ) {
								$newTypeRolesA[$oneOrig->type] = $oneOrig->rolid_edit;
			} else {
				if ( $roleC->compareRole( $oneOrig->rolid_edit, $newTypeRolesA[$oneOrig->type] ) ) {
					$newTypeRolesA[$oneOrig->type] = $oneOrig->rolid_edit;
				}			}		}
		$allMenus2RemoveA = array();
		$countType = 0;
		$roleHelper = WRole::get();
		foreach( $allTypesA as $typeID => $oneType ) {
			$exist = WExtension::exist( $oneType . '.node' );
			if ( !$exist ) {
								foreach( $typeOfMenuToRemoveA as $oneMenu ) {
					$allMenus2RemoveA[] = $app . $oneMenu . $oneType;
				}			} else {
								if ( isset($newTypeRolesA[$typeID]) ) {
					$roleid = $newTypeRolesA[$typeID];
					if ( !$roleHelper->hasRole( $roleid ) ) {
						foreach( $typeOfMenuToRemoveA as $oneMenu ) {
							$allMenus2RemoveA[] = $app . $oneMenu . $oneType;
						}					} else {
						$countType++;
					}				} else {
															foreach( $typeOfMenuToRemoveA as $oneMenu ) {
						$allMenus2RemoveA[] = $app . $oneMenu . $oneType;
					}				}
			}
		}
						if ( in_array( 'vendors_new_item_menu_auction', $allMenus2RemoveA ) ) $allMenus2RemoveA[] = 'vendors_horizontalmenu_fe_auction_bids';
		return $allMenus2RemoveA;
	}	
	private function _loadAllTypesA() {
		$itemtypeM = WModel::get( 'item.type' );
		$itemtypeM->rememberQuery( true );
		$itemtypeM->orderBy( 'publish', 'DESC' );
		$itemtypeM->orderBy( 'type', 'ASC' );
		$itemtypeM->orderBy( 'rolid', 'DESC' );
		$allTypesAOriginA = $itemtypeM->load( 'ol', array( 'type', 'publish', 'rolid_edit' ) );
		return $allTypesAOriginA;
	}
}