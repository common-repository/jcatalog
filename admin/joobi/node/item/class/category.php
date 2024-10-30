<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Category_class extends WClasses {
	function insertCategory($category,$type='store',$from='sample') {
		$itemC = WClass::get('item.insert');
		$vendorsC = WClass::get( 'vendor.helper' );
		$catId = $this->getCatId( $category->namekey );
		if ( !empty( $catId ) ) return false; 		$itemCategoryM = WModel::get( 'item.category' );
				if ( empty($category->description) ) $category->description = $category->name;
		if ( empty($category->lgid) ) $category->lgid = 1;
		foreach( $category as $key => $value ) {
			if (in_array($key, array('vendor', 'imageFile', 'category_id', 'parentNamekey') )) continue;
			if ( in_array($key, array('name', 'description', 'lgid') ) ) {
				$itemCategoryM->setChild( 'item.categorytrans', $key, $value );
				continue;
			}			$itemCategoryM->$key = $value;
		}
		if ($category->parentNamekey == 'category_vm_0') $parent = 1;
		else $parent = $this->getCatId($category->parentNamekey);
		if ( empty( $parent ) || $parent < 0 ) $parent = 1;
				if ( empty($category->namekey) ) $itemCategoryM->namekey = $itemCategoryM->genNamekey();
		if ( empty($category->alias) ) $itemCategoryM->alias = $category->name;
		if ( empty($category->prodtypid) ) $itemCategoryM->prodtypid = $itemC->getProdTypeId( $type );
		if ( empty($category->uid) ) $itemCategoryM->uid = $itemC->setUid();
		if ( empty($category->author) ) $itemCategoryM->author = $itemC->setUid();
		if ( empty($category->vendid) ) $itemCategoryM->vendid = 1;
		$itemCategoryM->publish = 1;
		$itemCategoryM->parent = $parent;
		if (empty($category->params)) $itemCategoryM->params = $this->setParams();
		if (empty($category->vendor)) $category->vendor = '';
		if (empty($itemCategoryM->vendid)) $itemCategoryM->vendid = $vendorsC->getVendorIDfromNamekey( $category->vendor );
		$returnId = $itemCategoryM->returnId();
		if ( !empty( $category->imageFile ) ){
			if ($from == 'virtuemart')
				$itemCategoryM->saveItemMoveFile( JOOBI_DS_TEMP . 'tempvirtuemart/category/' . $category->imageFile );
			elseif ($from == 'sample')
				$itemCategoryM->saveItemMoveFile( JOOBI_DS_TEMP .'productsamples' . '/image/category' . '/' . $category->imageFile );
			else
				$itemCategoryM->saveItemMoveFile( JOOBI_DS_TEMP .'productsamples' . '/image/category' . '/' . $category->imageFile );
		} else {
			$itemCategoryM->setIgnore();
			$itemCategoryM->save();
		}
		return true;
	}
	function getCatId($namekey) {
		if ( empty($namekey) ) return false;
		static $productCatM = null;
		static $catid = array();
		if ( isset($catid[$namekey]) ) return $catid[$namekey];
		if ( !isset($productCatM) ) $productCatM = WModel::get( 'item.category' );
		$productCatM->select('catid');
		$productCatM->whereE('namekey', $namekey);
		$catid[$namekey] = $productCatM->load('lr');
		return $catid[$namekey];
	}
	function setParams(){
		$catParams = 'ctygeneral=1
categoryshowname=1
categoryshowdesc=1
categorycountitems=1
categoryshowimage=1
pagecatshowlike=1
pagecatshowtweet=1
pagecatshowbuzz=1
pagecatshowsharethis=1
pagecatshowfavorite=1
catcrslsorting=featured
catcrsldisplay=standard
ctysorting=ordering
ctydisplay=standard
itmitems=1
itmsorting=ordering
itmdisplay=standard
itmlayout=table
itmshowname=1
itmshowfree=1
itmshowprice=1
itmaddcart=1
itmshowrating=1
itmfeedback=1
itmshowimage=1
itmshowcolumn=1';
		return $catParams;
	}
	function insertCatItem($catItems) {
		if ( empty($catItems) ) return false;
		$categoryProductM = WModel::get( 'item.categoryitem' );
		$itemC = WClass::get('item.insert');
		foreach( $catItems as $oneCatItem ) {
			$categoryProductM->catid = $this->getCatId( 'category_vm_' . $oneCatItem->category_id );
			$categoryProductM->pid = $itemC->getItemId( 'product_vm_' . $oneCatItem->product_id );
			$categoryProductM->save();
			$this->updateNumberItems( $categoryProductM->catid );
			$this->updateNumberCategories( $categoryProductM->pid );
		}
		return true;
	}
	public function updateNumberItems($catidA,$quantity=1) {
		if ( empty( $catidA ) ) return false;
		if ( ! is_array($catidA) ) $catidA = array( $catidA );
				$alreadyDoneA = array();
		foreach( $catidA as $catid ) {
			if ( in_array( $catid, $alreadyDoneA) ) continue;
			$categoryM = WModel::get( 'item.category' );
			$categoryM->updatePlus( 'numpid', $quantity );
			$categoryM->whereE('catid', $catid );
			$categoryM->update();
			if ( WPref::load( 'PITEM_NODE_CATSUBCOUNT' ) ) {
				$parentA = $categoryM->getAllParents( $catid, true );
				$parentA[] = $catid;
								$parentA = array_diff( $parentA, $alreadyDoneA );
				$alreadyDoneA = array_merge( $alreadyDoneA, $parentA );
								$itemCategoryM = WModel::get( 'item.category' );
				$itemCategoryM->whereIn( 'catid', $parentA );
				$allCatA = $itemCategoryM->load( 'ol', array( 'catid', 'lft', 'rgt', 'numpid' ) );
				if ( !empty($allCatA) ) {
					foreach( $allCatA as $oneCat ) {
						if ( ( $oneCat->rgt - $oneCat->lft ) < 2 ) {
							$itemCategoryM->whereE( 'catid', $oneCat->catid );
							$itemCategoryM->setVal( 'numpidsub', $oneCat->numpid );								$itemCategoryM->update();
						} else {
							$itemCategoryM->makeLJ( 'item.categoryitem', 'catid' );
							$itemCategoryM->whereE( 'publish', 1 );
							$itemCategoryM->where( 'lft', '>=', $oneCat->lft );
							$itemCategoryM->where( 'rgt', '<=', $oneCat->rgt );
							$itemCategoryM->select( 'numpid' );
							$itemCategoryM->groupBy( 'catid', 1 );
							$countA = $itemCategoryM->load( 'lra' );
							$count = 0;
							if ( !empty($countA) ) {
								foreach( $countA as $c ) $count += $c;
							}							
							$itemCategoryM->whereE( 'catid', $oneCat->catid );
							$itemCategoryM->setVal( 'numpidsub', $count );								$itemCategoryM->update();
						}
					}
				}
			}
		}
		return true;
	}
	function updateNumberCategories($itemid) {
		if ( empty($itemid) ) return false;
		$itemM = WModel::get('item');
		$itemM->updatePlus( 'numcat', 1 );
		$itemM->whereE('pid', $itemid );
		$itemM->update();
		return true;
	}
}