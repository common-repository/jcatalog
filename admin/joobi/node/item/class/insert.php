<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Insert_class extends WClasses {
	var $items = array();
	private $_allowSameNamekey = false;
			function insertItem($item,$useAsSample=false,$from='sample',$type='item',$allowUpdate=false,$migId=1,$vendid=0) {
		if ( empty( $item->namekey ) && empty( $item->name ) ) return false;
								$allowedItemTypeA = array( 'item', 'product', 'auction', 'subscription', 'download' );
						if ( !in_array( $type, $allowedItemTypeA ) ) return 0;
		$model = $type;
		$trans = $type . 'trans';
		$itemImage = $type . '.images';
		$itemM = WModel::get( $model );
		$key2Use = ( !empty( $item->namekey ) ? $item->namekey : WGlobals::filter( $item->name, 'namekey' ) );
				$this->items[$key2Use] = $item;
		foreach( $item as $key => $value ) {
			if ( in_array( $key, array('vendor', 'priceType', 'previewFile', 'imageFile', 'itemFile', 'relkeys', 'category', 'product_id', 'availabledate', 'availability', 'parent', 'currency', 'file_extension', 'type', 'downloadFileLocation', 'previewFileLocation', 'imageFileLocation', 'itemType') ) ) {
				continue;
			}
			if ( in_array( $key, array( 'name', 'description', 'introduction', 'lgid') ) ) {
				$itemM->setChild( $trans, $key, $value );
				continue;
			}
			if ( $type == 'subscription' ) {
				if ( in_array($key, array('credits', 'period', 'value', 'credittype', 'recurring', 'createlist') ) ) {
					$itemM->setChild( 'subscription.infos', $key, $value );
					$itemM->setChild( 'subscription.infos', 'rolid', 2 );
					continue;
				}			}
			if ( $type == 'auction' ) {
				if ( in_array($key, array( 'biddingstart', 'biddingend', 'startingbid', 'reservebid', 'private', 'auto') ) ) {
					$itemM->setChild( 'auction.infos', $key, $value );
					$itemM->setChild( 'auction.bids', $key, $value );
					$itemM->setChild( 'auction.bids', 'publish', 1 );
					continue;
				}			}
			$itemM->$key = $value;
		}
				if ( empty($item->namekey) ) {
			$itemM->namekey = $itemM->genNamekey();
		} else {
			$pid = $this->getItemId( $item->namekey, $allowUpdate );
						if ( ! $this->_allowSameNamekey && false === $pid ) return 0;
						if ( $allowUpdate ) {
				if ( !empty($pid) ) {
					$existingItemM = WModel::get( 'item' );
					$existingItemM->whereE( 'pid', $pid );
					$pidO = $existingItemM->load( 'o' );
					foreach( $pidO as $kP => $vP ) {
						if ( empty( $itemM->$kP ) ) $itemM->$kP = $vP;
					}				}			} else {
												if ( !empty($pid) ) return 0; 							}		}
				if ( empty($itemM->pid) ) {
			if ( empty($item->uid) ) $itemM->uid = $this->setUid();
						if ( empty($item->description) && !empty($item->name) ) $item->description = $item->name;
			if ( empty($item->lgid) ) $item->lgid = 1;
			if ( empty($item->author) ) $itemM->author = $this->setUid();
			if ( $type =='product' || $type=='subscription' || $type=='auction' ) {	
				if ( empty($item->curid) ) {
					if ( !empty($item->currency) ) {
						static $currencyHelperC = null;
						if (!isset($currencyHelperC)) $currencyHelperC = WClass::get( 'currency.helper' );
						$itemM->curid = $currencyHelperC->getCurrencyID( $item->currency );
					}
										if ( empty($itemM->curid) ) {
						if (!isset($productC) ) $productC = WClass::get('product.insert');
						$itemM->curid = $productC->getDefaultCur();
					}				}			}
						if ( !isset($item->electronic) ) {
				if ( !empty( $item->weight ) && $item->weight > 0 ) {
					$itemM->electronic = 2;
				} else {
					$itemM->electronic = 0;
				}			} else {
				$itemM->electronic = $item->electronic;
			}
			if ( empty($item->target) ) $itemM->target = 0;
			if ( empty($item->targettotal) ) $itemM->targettotal = 0;
			if ( empty($item->alias) && !empty($item->name) ) $itemM->alias = $item->name;
			if ( empty($item->stock) ) $itemM->stock = -1;
			if ( $type == 'subscription' ) $itemM->prodtypid = $this->getProdTypeId('subscription');
			elseif ($type == 'auction' ) $itemM->prodtypid = $this->getProdTypeId('auction');
			elseif ($type == 'download' ) $itemM->prodtypid = $this->getProdTypeId('download');
			elseif ($type == 'product' ) $itemM->prodtypid = $this->getProdTypeId('product');
			else $itemM->prodtypid = $this->getProdTypeId('item');
						if ( !empty($vendid) ) $item->vendor = $vendid;
			if ( empty($item->vendor) ) $item->vendor = '';
			if ( !is_numeric($item->vendor) ) {
					$vendorsC = WClass::get( 'vendor.helper', null, 'class', false );
					if ( !empty($vendorsC) ) $itemM->vendid = $vendorsC->getVendorIDfromNamekey( $item->vendor );
			} else $itemM->vendid = $item->vendor;
			if ($type == 'product' || $type == 'subscription' || $type == 'auction') {
				if ( empty($item->priceType) ) $item->priceType = 'standard';
				if ( empty($item->priceid) ) {
					if (!isset($productC) ) $productC = WClass::get('product.insert');
					$itemM->priceid = $productC->getPriceId( $item->priceType );
				}			}
		}
				$itemM->migid = $migId;
		if ( !empty($item->migrefid) ) $itemM->migrefid = $item->migrefid;
		if ( $useAsSample ) {
						if ( empty($item->hits) ) $itemM->hits = rand(50,5000);
			if ( empty($item->nbsold) ) $itemM->nbsold = rand(50,5000);
			$randnum = rand(35, 50);
			$rate = $randnum/10;
			$vote = rand(0, 1000);
			$score = round($rate * $vote, 0);
			if (empty($item->votes)) $itemM->votes = $vote;
			if (empty($item->score)) $itemM->score = $score;
			if (empty($item->nbreviews)) $itemM->nbreviews = rand( 0, 10 );
		}
		if ( $from != 'virtuemart' ) {
						$vendorHelperC = WClass::get( 'vendor.helper' );
			$loggedVendid = $vendorHelperC->getVendorID( WUser::get( 'uid' ) );
			$storeManager = $vendorHelperC->getDefault();
			if ( $storeManager != $loggedVendid ) {	
				if ( WPref::load( 'PVENDORS_NODE_PRODNOBLOCK' ) ) {
					$itemM->blocked = WPref::load( 'PVENDORS_NODE_PUBLISHAPPROVE' );
				} else {
					$itemM->blocked = 1;
				}
				if ( empty($item->publish) ) $itemM->publish = 1;
				if ( !empty( $vendid ) ) {
					$itemM->vendid = $vendid;
				} else {
					$itemM->vendid = $loggedVendid;
				}				
			}			
		}
		$itemM->returnId();
			$itemM->setIgnore();
			$itemM->save();	
				if ( !empty( $item->previewFile ) ) {
			$previewFile = explode('.', $item->previewFile );
			$file = array_reverse($previewFile);
			$item->previewFileType = $file[0];
			if ( empty($itemM->pid) ) {
				$itemM->setIgnore();
				$itemM->save();				}			$itemPreviewM = WModel::get( $model );
			if ( !empty( $itemM->pid ) ) $itemPreviewM->pid = $itemM->pid;
			if ( $item->previewFileType == 'youtube' ) {
				$fileM = WModel::get( 'files' );
				$name = explode('.youtube', $item->previewFile);
				$fileM->name = $name[0];
				$fileM->type = $item->previewFileType;
				$fileM->insertIgnore();
				$filid = $fileM->filid;
				$productFileM = WModel::get( $model );
				$productFileM->setVal( 'previewid', $filid );
				$productFileM->whereE( 'pid', $itemM->pid );
				$productFileM->update();
			} else {
				if ( $from == 'csv' ) {
					$location = JOOBI_DS_USER . $this->_makeProperPath( $item->previewFileLocation );
				} else {					$location = JOOBI_DS_TEMP .'productsamples' . '/image/' . $model . '/preview';
				}				$itemPreviewM->saveItemMoveFile( $location. '/' . $item->previewFile, '', false, 'previewid' );
			}		}
				if ( !empty( $item->imageFile ) ) {
			if ( empty($itemM->pid) ) {
				$itemM->setIgnore();
				$itemM->save();				}
			if ( is_array($item->imageFile) ) {
				$flag = 1; 				foreach( $item->imageFile as $file ) {
					if ( $flag == 1 ) $premium = 1;
					else $premium = 0;
					$flag++;
					$this->_insertImage( $item, $file, $itemM->pid, $premium, $from, $type, $itemImage, $itemM->vendid );
				}				
			} else {
				$this->_insertImage( $item, $item->imageFile, $itemM->pid, 1, $from, $type, $itemImage, $itemM->vendid );
			}		}
						return $itemM->pid;
	}
	private function _insertImage($item,$imageName,$pid,$premium,$from,$type,$itemImage,$vendid) {
		if ( substr( $imageName, 0, 4 ) == 'http' ) {
			$fileHelperC = WClass::get( 'files.helper' );
			$filid = $fileHelperC->saveURLFile( $imageName, 0, $vendid );
			if ( !empty( $filid ) ) {
				$itemImageM = WModel::get( $itemImage );
				$itemImageM->pid = $pid;
				$itemImageM->premium = $premium;
				$itemImageM->filid = $filid;
				$itemImageM->save();
			}			
		} else {
			if ( $from == 'virtuemart' ) {
				$fileLocation = JOOBI_DS_TEMP . 'tempvirtuemart/product';
			}elseif ( $from == 'csv' ) {
				$fileLocation = JOOBI_DS_USER . $this->_makeProperPath( $item->imageFileLocation );
			} elseif ( $type == 'download' ) { 				$fileLocation = JOOBI_DS_NODE .'download/temp/files/images';
			} else { 				$fileLocation = JOOBI_DS_TEMP .'productsamples' . '/image/' . $type; 				}				
			$fileSystem = WGet::file();
			if ( $fileSystem->exist( $fileLocation . '/' . $imageName ) ) {
				$itemImageM = WModel::get( $itemImage );
				$itemImageM->pid = $pid;
				$itemImageM->premium = $premium;
				$itemImageM->saveItemMoveFile( $fileLocation . '/' . $imageName );
			} else {
				$IMAGEPATH = $fileLocation . '/' . $imageName;
				$this->userW('1439993716DQGS',array('$IMAGEPATH'=>$IMAGEPATH));
			}					
		}				
	}	
	public function getItemId($namekey,$allowUpdate=false) {
		static $itemM = null;
		if ( empty($namekey) ) return false;
		if ( isset( $itemid[$namekey] ) ) return $itemid[$namekey];
		if ( !isset($itemM) ) $itemM = WModel::get('item');
		$itemM->whereE( 'namekey', $namekey );
		$itemO = $itemM->load( 'o', array( 'pid', 'vendid' ) );
		if ( empty($itemO) ) $itemid[$namekey] = 0;
		else {
			$vendorHelperC = WClass::get( 'vendor.helper' );
			$vendid = $vendorHelperC->getVendorID( WUser::get( 'uid' ) );
			if ( $vendid != $itemO->vendid ) {
				$itemid[$namekey] = false;
				if ( ! $this->_allowSameNamekey ) {
					$ITEMNAMEKEY = $namekey;
					$this->userW('1440442155JTXZ',array('$ITEMNAMEKEY'=>$ITEMNAMEKEY));
				}			} else {
				$itemid[$namekey] = $itemO->pid;
			}			
		}		
		return $itemid[$namekey];
	}
	public function setUid($vendid=0) {
		if ( empty( $vendid ) ) {
			$uid = WUser::get('uid');
			return $uid;
		} else {
			$vendorHelperC = WClass::get( 'vendor.helper' );
			return $vendorHelperC->getVendor( $vendid, array( 'uid' ) );
		}	}
	public function getProdTypeId($type,$core=true) {
		static $prodTypeM = null;
		static $prodTypeId = array();
		if ( empty($type) ) return false;
		$key = $type . '-' . (string)$core;
		if ( isset($prodTypeId[$key]) ) return $prodTypeId[$key];
		if ( !isset($prodTypeM) ) $prodTypeM = WModel::get( 'item.type' );
		$prodTypeM->select('prodtypid');
		$prodTypeM->whereE('namekey', $type );
		if ( $core ) $prodTypeM->whereE( 'core', 1 );
		if ( $type == 'product' ) $prodTypeM->whereE( 'type', 1, 0, null, 0, 0, 1 ); 
		if ( $core ) {
			$prodTypeId[$key] = $prodTypeM->load( 'lr' );
		} else {
			$prodTypeId[$key] = $prodTypeM->load( 'lra' );
		}
		return $prodTypeId[$key];
	}
	public function insertCategoryItems($category,$prodkey,$default=0) {
		$categoryC = WClass::get( 'item.category' );
		$itemC = WClass::get('item.insert');
		$pid = $itemC->getItemId( $prodkey );
		if ( empty($category) || empty($prodkey) ) return false;
		if ( empty($pid) ) return false;
		$categoryProductM = WModel::get('item.categoryitem' );
		$categoryProductM->pid = $pid;
		if ( is_array($category) ) {
			foreach( $category as $catkey) {
				$catid = $categoryC->getCatId($catkey);
				if (empty($catid)) continue;
				$categoryProductM->catid = $catid;
				$categoryProductM->save();
								$this->incrementItemNum( $pid, 'numcat' );
				$categoryC->updateNumberItems( $catid );
			}		} else {
			$catid = $categoryC->getCatId($category);
			if (empty($catid)) return false;
			$categoryProductM->catid = $catid;
			if ($default)$categoryProductM->premium = 1;
			$categoryProductM->save();
			$this->incrementItemNum( $pid, 'numcat' );
			$categoryC->updateNumberItems( $catid );
		}
		return true;
	}
	public function incrementItemNum($pid,$column='relnum') {
		if (empty($pid)) return false;
		$productM = WModel::get('item');
				$productM->select($column);
		$productM->whereE('pid', $pid);
		$num = $productM->load('lr');
				$productM->setVal($column, $num+1);
		$productM->whereE('pid', $pid);
		$productM->update();
		return true;
	}
	function insertRelatedItems($relkeys,$namekey){
		$pid = $this->getItemId($namekey);
		$relatedProductM = WModel::get('item.related');
		foreach( $relkeys as $relkey){
			$relatedProductM->pid = $pid;
			$relid = $this->getItemId($relkey);
			if (empty($relid)) continue;
			$relatedProductM->relpid = $relid;
			$relatedProductM->setIgnore();
			$relatedProductM->save();
						$this->incrementItemNum( $pid, 'relnum' );
		}
		return true;
	}
	private function _makeProperPath($path) {
		return trim( $path, '/' );
	}
}