<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
 class Item_Loadcategory_class extends WClasses {
	private static $categoryM = null;
 	private $_myNewImageO = null;
	function get(&$pO) {
		if ( empty( $pO->layout ) ) $pO->layout = 'badgemini';
				if ( empty( $pO ) ) return false;
		if ( empty( self::$categoryM ) ) self::$categoryM = WModel::get( 'item.category' );
		if ( !empty($pO->countOnly) ) {
			$pO->totalCount = (string)$this->_countItems( $pO );
			return array();
		}
				if ( !empty( $pO->pagination ) && empty( $pO->getChildren ) ) {
			if ( empty( $pO->yid ) ) {
				$limit = ( !empty( $pO->nb ) ? $pO->nb : 0 );
				$limitstart = 0;
			} else {
				$yid = $pO->widgetSlugID;					
				$maxLimit = ( !empty($pO->nb) ? $pO->nb : 10 );
				$limit = $maxLimit;
				$pageNumber = WGlobals::get( 'pagenb' . $yid, 0 );
				if ( !empty($pageNumber) ) {
					$maxItems = WGlobals::get( 'total' . $yid, 0 );
					if ( $maxItems > $pageNumber * $limit ) {
						$limitstart = ($pageNumber-1) * $limit;
					}				}
				if ( empty($limitstart) ) $limitstart = WGlobals::getUserState( "wiev-$yid-limitstart", 'limitstart'.$yid, 0, 'int' );
								$previousTOtal = WGlobals::getUserState( "wiev-$yid-total", 'total'.$yid, 0, 'int' );
				if ( $previousTOtal < 1 ) {
									$pO->totalCount = $this->_countItems( $pO );
					WGlobals::set( "wiev-$yid-total", $pO->totalCount, 'session' );
				} else {
					$pO->totalCount = $previousTOtal;
				}
			}
		} else {
			$limit = !empty( $pO->nb ) ? $pO->nb : 0;
			$limitstart = 0;
		}
				if ( !is_numeric($limit) ) $limit = 10;
		if ( $limit > 500 ) $limit = 50;
		if ( empty($pO->nb) ) $pO->nb = $limit;
				if ( !empty($pO->display) && $pO->display =='carrousel' ) $pO->showNoImage = false;
		$categoryM = self::$categoryM;
		$categoryM->select( array('catid', 'namekey', 'parent') );
		if ( !isset($pO->showNoItem) || ! $pO->showNoItem ) $categoryM->select( 'numpid', 0, 'nbItems' );
		if ( WPref::load( 'PITEM_NODE_CATSUBCOUNT' ) && ( !isset($pO->showNoItemSub) || ! $pO->showNoItemSub ) ) $categoryM->select( 'numpidsub', 0, 'nbItemSub' );
		$categoryM->makeLJ( 'item.categorytrans', 'catid', 'catid', 0, 1 );						$asIDCategory = 1;
		if ( empty($pO->showNoName) ) $categoryM->select( 'name', 1 );																if ( !empty( $pO->showDesc ) ) $categoryM->select( 'description', 1 );														$myLGID = ( !empty($pO->lgid) ) ? $pO->lgid : null;
		$categoryM->whereLanguage( 1, $myLGID );						
		if ( empty($pO->showNoImage) ) {
			$categoryM->select( 'filid', 0, 'imageFilid' );
			$asIDCategory++;
			$categoryM->makeLJ( 'files', 'filid', 'filid', 0, $asIDCategory );
			$categoryM->select( 'thumbnail', $asIDCategory );					$categoryM->select( 'name', $asIDCategory, 'imageName' );
			$categoryM->select( 'type', $asIDCategory, 'imageType' );
			$categoryM->select( 'folder', $asIDCategory, 'imageFolder' );
			$categoryM->select( 'path', $asIDCategory, 'imagePath' );
			$categoryM->select( 'storage', $asIDCategory, 'imageStorage' );
			$categoryM->select( 'filid', $asIDCategory, 'imageFileID' );
			$categoryM->select( 'width', $asIDCategory, 'originWidth' );
			$categoryM->select( 'height', $asIDCategory, 'originHeight' );
			$categoryM->select( 'twidth', $asIDCategory, 'thumbWidth' );
			$categoryM->select( 'theight', $asIDCategory, 'thumbHeight' );
		}
				if ( ! WPref::load( 'ITEM_NODE_CATEGORYSHOWEMPTY' ) ) {				if ( ! WPref::load( 'PITEM_NODE_CATSUBCOUNT' ) ) $categoryM->where( 'numpid', '>', 0 );
			else $categoryM->where( 'numpidsub', '>', 0 );
		}		
		if ( !empty($pO->id) ) {
			if ( strpos( $pO->id, ',' ) > 0 ) {
				$pO->id = str_replace( ' ', '', $pO->id );
				$arrayID = explode( ',', $pO->id );
				if ( !empty($arrayID) ) {
										$whereInIDs = array();
					$whereNOTInIDs = array();
					$whereInNamekeys = array();
					$whereNOTInNamekeys = array();
					foreach( $arrayID as $oneID ) {
						if ( is_numeric($oneID) ) {
							if ( $oneID >= 0 ) {
								$whereInIDs[] = $oneID;
							} else {
								$whereNOTInIDs[] = $oneID;
							}						} else {
							if ( substr( $oneID, 0, 1) == '-' ) {
																$whereNOTInNamekeys[] = substr( $oneID, 1 );
							} else {
								$whereInNamekeys[] = $oneID;
							}						}					}
					$asIDCategory++;
					if ( !empty($whereInIDs) ) {
						if ( empty($whereInNamekeys) ) $categoryM->whereIn( 'catid', $whereInIDs, 1 );
						else {
														$categoryM->whereIn( 'catid', $whereInIDs, 1, false, 1, 0, 0 );
							$categoryM->whereIn( 'namekey', $whereInNamekeys, 1, false, 0, 1, 1 );
						}					} elseif ( !empty($whereInNamekeys) ) $categoryM->whereIn( 'namekey', $whereInNamekeys, 1 );
					if ( !empty($whereNOTInIDs) || !empty($whereNOTInNamekeys) ) {
						$categoryM->operator( 'AND' );
						$categoryM->openBracket();					
						if ( !empty($whereNOTInIDs) ) {
							if ( empty($whereNOTInNamekeys) ) $categoryM->whereNotIn( 'catid', $whereNOTInIDs, 1 );
							else {
																$categoryM->whereNotIn( 'catid', $whereNOTInIDs, 1 );									$categoryM->whereNotIn( 'namekey', $whereNOTInNamekeys, 1 );		
							}						} elseif ( !empty($whereNOTInNamekeys) ) $categoryM->whereNotIn( 'namekey', $whereNOTInNamekeys, 1 );
						$categoryM->closeBracket();
					}					
					$limitCount = count($whereInIDs) + count($whereInNamekeys);
					if ( empty($limitCount) ) $limitCount = $pO->nb;
					$categoryM->setLimit( $limitCount, $limitstart );
					$pO->nb = $limitCount;
				}
			} else {
				if ( is_numeric($pO->id) ) {
					if ( $pO->id < 0 ) {
						$categoryM->where( 'catid', '!=', (-1 * $pO->id) );
					} else {
						$categoryM->whereE( 'catid', $pO->id );
						$pO->nb = 1;
						$limitstart=0;
					}								
				} else {
					if ( substr( $pO->id, 0, 1) == '-' ) {
												$productM->where( 'namekey', '!=', substr( $pO->id, 1 ) );
					} else {
						$productM->whereE( 'namekey', $pO->id );
						$pO->nb = 1;
						$limitstart=0;
					}								
					$categoryM->whereE( 'namekey', $pO->id );
				}				$categoryM->setLimit( $pO->nb, $limitstart );
			}			
		} else {
			if ( empty($limit) || $limit < 1 ) $limit = 5000;
			$categoryM->setLimit( $limit, $limitstart );
		}
		if ( empty($pO->parent) ) $pO->parent = 1;
				if ( !is_numeric($pO->parent) && !is_array($pO->parent) ) {
						$catM = WModel::get( 'item.category' );
			$catM->whereE( 'namekey', $pO->parent );
			$catid = $catM->load( 'lr', 'catid' );
			if ( empty($catid) ) {
				$message =WMessage::get();
				$message->userE('1304526871LLYL');
				return false;
			}			$pO->parent = $catid;
		}
				$multipleParent = 0;
		if ( !empty($pO->level) &&  $pO->level > 1 && !empty( $pO->getChildren ) ) {
						if ( is_numeric($pO->parent) ) {
				$categoryM->whereE( 'parent', $pO->parent );
			} elseif ( is_array($pO->parent) ) {
				$categoryM->whereIn( 'parent', $pO->parent );
			}			$pO->organizeTree = true;
		} else {
						$multipleParent = WPref::load( 'PITEM_NODE_MULTIPLEPARENT' );
			if ( $multipleParent ) {
				$asIDCategory++;
				$categoryM->openBracket();
				$categoryM->whereE( 'parent', $pO->parent );
				$categoryM->operator( 'OR' );
				$categoryM->makeLJ( 'item.categoryparent', 'catid', 'catid', 0, $asIDCategory );
				$categoryM->whereE( 'catidparent', $pO->parent, $asIDCategory );
				$categoryM->closeBracket();
			} else {
				$categoryM->whereE( 'parent', $pO->parent );
			}
		}
		$categoryM->select( 'depth' );
				if ( !empty($pO->vendor) ) {
			$categoryM->whereE( 'vendid', $pO->vendor );
		}
				$categoryM->where( 'publishstart', '<=', time() );
		$categoryM->where( 'publishend', '=', 0, 0, null, 1, 0, 0  );
		$categoryM->where( 'publishend', '>=', time(), 0, null, 0, 1, 1 );
		$categoryM->whereE( 'publish', 1 );
		$categoryM->whereE( 'blocked', 0 );
		if ( !empty($pO->hasItems) ) {
			$categoryM->where( 'numpid', '>', 0 );
		}
		if ( !empty($pO->prodtypid) ) {
			$productTypeA = array();
			if ( !is_numeric($pO->prodtypid) ) {
								if ( !isset($itemTypeC) ) $itemTypeC = WClass::get('item.type');
				$typeA = $itemTypeC->loadAllTypesFromDesignation( $pO->prodtypid );
				if ( !empty($typeA) ) $productTypeA = array_merge( $productTypeA, $typeA );
			} else {
				$productTypeA[] = $pO->prodtypid;
			}
			if ( !empty($productTypeA) ) {
				$categoryM->whereE( 'prodtypid', 0, 0, null, 1, 0, 0  );				$categoryM->whereIn( 'prodtypid', $productTypeA, 0, null, 0, 1, 1  );
			}
		} elseif ( !empty($pO->type) ) {
			$productTypeA = array();
			if ( !is_numeric($pO->type) ) {
								if ( !isset($itemTypeC) ) $itemTypeC = WClass::get('item.type');
				$typeA = $itemTypeC->loadAllTypesFromDesignation( $pO->prodtypid );
				if ( !empty($typeA) ) $productTypeA = array_merge( $productTypeA, $typeA );
			} else {
				$productTypeA[] = $pO->type;
			}
			if ( !empty($productTypeA) ) {
				$asIDCategory++;
				$categoryM->makeLJ( 'item.type', 'prodtypid', 'prodtypid', 0, $asIDCategory );
				$categoryM->whereE( 'prodtypid', 1, 0, null, 1, 0, 0  );				$categoryM->whereIn( 'prodtypid', $productTypeA, $asIDCategory, null, 0, 1, 1 );
			}
		}
		$categoryM->groupBy( 'catid' );
		$categoryM->checkAccess( 0 );
		if ( !isset($pO->sorting) ) $pO->sorting = '';
		switch( $pO->sorting ) {
			case 'alphabetic' :
								$categoryM->orderBy( 'name', 'asc', 1 );
				$categoryM->orderBy( 'ordering', 'asc' );
				break;
			case 'reversealphabetic' :
								$categoryM->orderBy( 'name', 'desc', 1 );
				$categoryM->orderBy( 'ordering', 'asc' );
				break;
			case 'oldest':
								$categoryM->orderBy( 'created', 'asc' );
				break;
			case 'recentlyupdated':
								$categoryM->orderBy( 'modified', 'desc' );
				break;
			case 'latest': 			case 'recent':
			case 'newest':
								$categoryM->orderBy( 'created', 'desc' );
				break;
			case 'random':
				$categoryM->orderBy( 'random', 'RAND' );
				break;
			case 'ordering':
			default :					$categoryM->orderBy( 'ordering', 'asc' );
				break;
		}
		$result = $categoryM->load( 'ol' );
		if ( empty($result) ) return $result;
				if ( !empty($pO->level) &&  $pO->level > 1 && empty( $pO->getChildren ) ) {
			$newpO = $pO;
			$originalNB = $pO->nb;
			$newpO->getChildren = true;
			$newpO->parent = $this->_getParentIDs( $result );
			$hasChild = false;
			for ( $i = 1; $i < $pO->level; $i++ ) {
				$subLevelsA = $this->get( $newpO );
				if ( !empty($subLevelsA) ) {
					$newpO->parent = $this->_getParentIDs( $subLevelsA );
															$parentSortedA = array();
					foreach( $subLevelsA as $oneSubLevel ) {
						$parentSortedA[$oneSubLevel->parent][] = $oneSubLevel;
					}
					$newResultStillSortedA = array();
					foreach( $result as $oneResult ) {
						$newResultStillSortedA[] = $oneResult;
						if ( !empty($parentSortedA[$oneResult->catid]) ) {
														foreach( $parentSortedA[$oneResult->catid] as $oneSubLevelSorted ) {
								$newResultStillSortedA[] = $oneSubLevelSorted;
							}						}
					}
					$result = $newResultStillSortedA;
					$hasChild = true;
				} else {
					break;
				}
			}
			$pO->nb = $originalNB;
			if ( !$hasChild ) {
				$pO->organizeTree = false;
				$pO->level = 1;
			}
		} else {
						if ( !empty($pO->nbItems) ) {
								$itemCategoryItemM = WModel::get( 'item.categoryitem' );
				foreach( $result as $oneResult ) {
					$itemCategoryItemM->whereE( 'catid', $oneResult->catid );
					$itemCategoryItemM->makeLJ( 'item', 'pid' );
					$itemCategoryItemM->makeLJ( 'itemtrans', 'pid', 'pid', 1, 2 );
					$itemCategoryItemM->whereLanguage( 2 );
					$itemCategoryItemM->select( 'pid' );
					$itemCategoryItemM->select( 'name', 2 );
					if ( !empty($pO->itemImage) ) {
						$itemCategoryItemM->makeLJ( 'item.images', 'pid', 'pid', 1, 3 );
						$itemCategoryItemM->select( 'filid', 1, 'imageFilid' );
						$itemCategoryItemM->makeLJ( 'files', 'filid', 'filid', 3, 4 );
						$itemCategoryItemM->whereOn( 'premium', '=', '1', 3 );
						$itemCategoryItemM->select( 'thumbnail', 4 );								$itemCategoryItemM->select( 'name', 4, 'imageName' );
						$itemCategoryItemM->select( 'type', 4, 'imageType' );
						$itemCategoryItemM->select( 'folder', 4, 'imageFolder' );
						$itemCategoryItemM->select( 'path', 4, 'imagePath' );
						$itemCategoryItemM->select( 'storage', 4, 'imageStorage' );
						$itemCategoryItemM->select( 'filid', 4, 'imageFileID' );
						$itemCategoryItemM->select( 'width', 4, 'originWidth' );
						$itemCategoryItemM->select( 'height', 4, 'originHeight' );
						$itemCategoryItemM->select( 'twidth', 4, 'thumbWidth' );
						$itemCategoryItemM->select( 'theight', 4, 'thumbHeight' );
					}					$itemCategoryItemM->orderBy( 'premium', 'DESC' );
					$itemCategoryItemM->orderBy( 'ordering', 'ASC' );
										if ( $pO->nbItems < 1 ) $pO->nbItems = 4;
					$itemCategoryItemM->setLimit( $pO->nbItems );
					$ItemListRA = $itemCategoryItemM->load( 'ol' );
										if ( !empty($ItemListRA) ) {
						foreach( $ItemListRA as $Item ) {
							$myLink = WPages::linkHome( 'controller=catalog&task=show&eid=' . $Item->pid, WPage::getPageId( 'catalog' ) );
							$Item->linkName = '<a href="'. $myLink .'">'.$Item->name.'</a>';
														if ( !empty($Item->imageFileID) && !empty( $pO->itemImage ) ) {
								$filePath = ( !empty( $Item->imagePath ) ) ? $Item->imagePath : 'images/products';
								if ( !isset($this->_myNewImageO) ) $this->_myNewImageO = WObject::get( 'files.file' );
								$this->_myNewImageO->name = $Item->imageName;
								$this->_myNewImageO->type = $Item->imageType;
								$this->_myNewImageO->basePath = JOOBI_URL_MEDIA;
								$this->_myNewImageO->folder = ( empty($Item->imageFolder) ? 'media' : $Item->imageFolder );
								$this->_myNewImageO->path = $filePath;
								$this->_myNewImageO->fileID = $Item->imageFileID;
								$this->_myNewImageO->thumbnail = false;
								$this->_myNewImageO->storage = $Item->imageStorage;
								$Item->imagePath = $this->_myNewImageO->fileURL();
								$this->_myNewImageO->thumbnail = true;
								$Item->ItemThumbnailPath = $this->_myNewImageO->fileURL( true );
							}
						}
						$oneResult->ItemListA = $ItemListRA;
					}
				}
			}
		}
				if ( $pO->sorting == 'ordering' && !empty($arrayID) && !empty($result) ) {
			$newResultsA = array();
			$namekeyResultA = array();
			foreach( $result as $oneResult ) {
				$newResultsA[$oneResult->catid] = $oneResult;
				$namekeyResultA[$oneResult->namekey] = $oneResult->catid;
			}
			$result = array();
			$i=0;
			foreach( $arrayID as $eachID ) {
				$eachID = trim($eachID);
				if ( !empty($newResultsA[$eachID]) ) {
					$i++;
					$result[] = $newResultsA[$eachID];
				} elseif ( !empty($namekeyResultA[$eachID]) ) {
					$i++;
					$result[] = $newResultsA[$namekeyResultA[$eachID]];
				}
				if ( !empty($limit) && $limit == $i ) break;				}		}
		return $result;
	}
	public function convertParams($object,$returnString=false) {
		$tag = '';
		if ( !empty( $object->type ) ) $tag .= '|type=' . $object->type;
		else {
			$isPage = WGlobals::get( 'pageHasWidgets', false, 'global' );
			if ( $isPage ) {
				$urlType = WGlobals::get( 'type' );
				if ( !empty($urlType) ) {
										$tag .= '|type=' . $urlType;
				}			}		}		
		if ( !empty( $object->megamenu ) ) {
			$tag .= '|megaMenu=1';
			if ( !empty( $object->menuexpand ) ) $tag .= '|menuExpand=1';
			if ( !empty( $object->layoutcol ) ) {
				$tag .= '|megaMenuColumn=' . $object->layoutcol;
				$object->layoutcol = 0;
			}		}		
		if ( !empty( $object->sorting ) ) $tag .= '|sorting=' . $object->sorting;
		if ( !empty( $object->ids ) ) {
			$object->ids = str_replace( ' ', '', $object->ids );
			$tag .= '|id=' . $object->ids;
		}		
		if ( !empty( $object->search ) ) $tag .= '|search=' . $object->search;
		if ( !empty( $object->carrouselarrow ) ) $tag .= '|carrouselArrow=' . $object->carrouselarrow;
				if ( empty($object->showname) && !empty( $object->sorting ) ) $tag .= '|showNoName=1';
		if ( !empty( $object->showcolumn ) ) $tag .= '|showHeader=1';
		if ( !empty( $object->numdisplay ) ) $tag .= '|nb=' . $object->numdisplay;
		if ( empty($object->showimage) ) $tag .= '|showNoImage=1';
		if ( !empty( $object->showdesc ) ) $tag .= '|showDesc='.$object->showdesc;
				if ( !empty($object->auto) ) {
			$catid = WGlobals::get( 'catid' );
			if ( empty($catid) ) {
				$controller = WGlobals::get( 'controller');
				$task = WGlobals::get( 'task');
				if ( $controller=='catalog' && $task=='category' ) {
					$catid = WGlobals::get( 'eid' );
				}			}			if ( !empty( $catid ) ) $tag .= '|parent='.$catid;
			elseif ( !empty( $object->parent ) ) $tag .= '|parent='.$object->parent;
		} else {
			if ( !empty( $object->parent ) ) $tag .= '|parent='.$object->parent;
		}		
				if ( !empty( $object->bordershow ) ) $tag .= '|borderShow=1';
		if ( !empty( $object->bordercolor ) ) $tag .= '|borderColor=' . $object->bordercolor;
		if ( !empty( $object->imagewidth ) ) $tag .= '|imageWidth=' . $object->imagewidth;
		if ( !empty( $object->imageheight ) ) $tag .= '|imageHeight=' . $object->imageheight;
		$layout = ( !empty($object->layoutname) ? $object->layoutname : ( !empty($object->layout) ? $object->layout : '') ) ;
		if ( !empty( $layout ) ) $tag .= '|layout=' . trim($layout);
		else $tag .= '|layout=badgemini';
		if ( !empty( $object->layoutcol ) ) $tag .= '|layoutNbColumn=' . $object->layoutcol;
		if ( !empty( $object->layoutnbrow ) ) $tag .= '|layoutNbRow=' . $object->layoutnbrow;
		if ( !empty( $object->subcatpopover ) ) $tag .= '|subCatStyle=' . $object->subcatpopover;
		if ( !empty( $object->level ) ) $tag .= '|level=' . $object->level;
		if ( !empty( $object->display ) ) $tag .= '|display=' . $object->display;
		if ( !empty( $object->prodtypid ) ) $tag .= '|prodtypid=' . $object->prodtypid;
		if ( !empty( $object->hasitems ) ) $tag .= '|hasItems=' . $object->hasitems;
		if ( !empty( $object->climit ) ) $tag .= '|climit=' . $object->climit;
		if ( !empty( $object->moduleclass_sfx ) ) $tag .= '|classSuffix=' . $object->moduleclass_sfx;
		$tag .= '|themeType=node';
		if ( !empty( $object->showall ) ) $tag .= '|showAll=' . $object->showall;
				if ( !empty( $object->pageid ) ) $tag .= '|pageID=' . $object->pageid;
		else {
						if ( empty( $object->pagetype ) ) {
								$pageID = WPage::getPageId( 'catalog' );
				if ( !empty($pageID) ) $tag .= '|pageID=' . $pageID;
			} else {								}		}		
				if ( !empty($object->module->id) ) $tag .= '|widgetID=' . $object->module->id;
		elseif ( !empty($object->widgetID) ) $tag .= '|widgetID=' . $object->widgetID;
		if ( !empty($object->module->module) ) $tag .= '|widgetSlug=' . $object->module->module;
		elseif ( !empty($object->widgetSlug) ) $tag .= '|widgetSlug=' . $object->widgetSlug;
				if ( !empty( $object->remoteurl ) ) $tag .= '|remoteURL=' . $object->remoteurl;
		if ( !empty( $object->affid ) ) $tag .= '|affilateID=' . $object->affid;
		if ( empty( $object->totalitems ) ) $tag .= '|showNoItem=1';
		if ( ! WPref::load( 'PITEM_NODE_CATSUBCOUNT' ) || empty( $object->totalitemsub ) ) $tag .= '|showNoItemSub=1';
		if ( !empty( $object->nbitems ) ) $tag .= '|nbItems=' . $object->nbitems;
		if ( empty( $object->itemimage ) ) $tag .= '|itemImage=1';	
		if ( $returnString ) return $tag;
		$explodeA = explode( '|', $tag );
		foreach( $explodeA as $line ) {
			if ( empty($line) ) continue;
			$exLineA = explode( '=', $line );
			if ( count( $exLineA ) != 2 ) continue;
			if ( !empty($exLineA[0]) ) {
				$prp = $exLineA[0];
				$object->$prp = $exLineA[1];
			}	
		}	
		return $object;
	}	
	public function extraProcess(&$categoryA,$extraObj,$nb=5) {
				if ( empty( $extraObj ) || empty( $categoryA ) ) return false;
				WPage::addCSSFile( 'node/catalog/css/style.css' );
		if ( !empty($extraObj->mouseOver) ) {
			$putputThemeC = WClass::get( 'output.theme' );				$putputThemeC->mouseOverParams( $extraObj );
		}
				$pageID = ( !empty( $extraObj->pageID ) ? $extraObj->pageID : WPage::getPageId( 'catalog' ) );
		foreach( $categoryA as $category ) {
			$category->pageLink = WPage::linkHome( 'controller=catalog&task=category&eid=' . $category->catid, $pageID );
						if ( !empty($category->imageFilid) && !empty( $category->imageName ) ) {
												$useThumnailsPath = false;
				if ( !empty($extraObj->nb) && $extraObj->nb > 1 && $category->thumbnail ) {
					if ( !empty($extraObj->imageWidth) && !empty($extraObj->imageHeight) && ( $extraObj->imageWidth > $category->thumbWidth ||
					$extraObj->imageHeight > $category->thumbHeight ) ) {
						$useThumnailsPath = false;
					} else {
						$useThumnailsPath = true;
					}				}
								$filePath = ( !empty( $category->imagePath ) ) ? $category->imagePath : 'images/products/categories';
				if ( !isset($this->_myNewImageO) ) $this->_myNewImageO = WObject::get( 'files.file' );
				$this->_myNewImageO->name = $category->imageName;
				$this->_myNewImageO->type = $category->imageType;
				$this->_myNewImageO->basePath = JOOBI_URL_MEDIA;
				$this->_myNewImageO->folder = ( empty($category->imageFolder) ? 'media' : $category->imageFolder );
				$this->_myNewImageO->path = $filePath;
				$this->_myNewImageO->fileID = $category->imageFileID;
				$this->_myNewImageO->thumbnail = false;
				$this->_myNewImageO->storage = $category->imageStorage;
				$category->imagePath = $this->_myNewImageO->fileURL();
				$this->_myNewImageO->thumbnail = $useThumnailsPath;
				$category->thumbnailPath = $this->_myNewImageO->fileURL( true );
			} elseif ( empty($extraObj->showNoImage) ) {	
				static $defaultImage = null;
				if ( empty( $defaultImage ) ) {
										$imageM = WModel::get('files');
					$imageM->remember( 'categoryx', true, 'Model_files_node' );
					$imageM->whereE( 'name', 'categoryx' );
					$defaultImage = $imageM->load( 'o', array('path', 'type', 'name', 'width', 'height','thumbnail') );
				}
				$thumbnailPath = 'thumbnails/';
								$fileName = !empty( $defaultImage->name ) ? $defaultImage->name : 'categoryx';				$fileType = !empty( $defaultImage->type ) ? $defaultImage->type : 'png';
				$filePath = ( !empty( $defaultImage->path ) && !empty( $defaultImage->path ) ) ? implode( '/', explode( '|', $defaultImage->path ) ) : 'images/products/categories';
				$category->thumbnailPath = JOOBI_URL_MEDIA . $filePath .'/'. $thumbnailPath . $fileName .'.'. $fileType;
				$category->imagePath = JOOBI_URL_MEDIA . $filePath .'/' . $fileName .'.'. $fileType;
			}
						$category->imageLinked = true;
			$this->_processItemInformation( $category, $extraObj );
		}
				if ( !empty($extraObj->showAll) ) {
			$text = WText::t('1309235236KZXI');
			$extraParams = '';
			if ( !empty($extraObj->sorting) ) $extraParams = '&choicesorting='.$extraObj->sorting;
			$link = WPage::linkHome( 'controller=catalog&task=category&eid=1' . $extraParams, WPage::getPageId( 'catalog' ) );
			$objButtonO = WPage::newBluePrint( 'prefcatalog' );
			$objButtonO->type = 'buttonViewAllInCatalogPage'; 				$objButtonO->link = $link;
			$objButtonO->text = $text;
			$extraObj->showAllLink = WPage::renderBluePrint( 'prefcatalog', $objButtonO );
		}
	}
	private function _processItemInformation(&$category,$tagParams) {
		if ( !empty($category->description) && !empty($tagParams->climit ) && is_numeric($tagParams->climit) ) {
			$newLimit = $tagParams->climit - 3; 
			if ( $newLimit > 0 && strlen($category->description) > $newLimit ) {
				$emailHelperC = WClass::get( 'email.conversion' );
				$category->description = $emailHelperC->smartHTMLSize( $category->description, $newLimit, true, false, false );
			}
		}
				if ( empty($tagParams->showNoName) ) $category->linkName = '<a href="'. $category->pageLink .'">'.$category->name.'</a>';
		if ( !empty($tagParams->borderShow) ) $category->borderShow = true;
		$category->borderColor = ( !empty($tagParams->borderColor) ? $tagParams->borderColor : 'default' );
	}
	function setHeader() {
		$header = new stdClass;
		$header->name = WText::t('1206732392OZVB');
		$header->photo = WText::t('1303968056PMZJ');
		$header->description = WText::t('1206732392OZVG');
		return $header;
	}
	private function _getParentIDs($result) {
		if ( empty($result) ) return 0;
		$parentIDA = array();
		foreach( $result as $one ) {
			$parentIDA[] = $one->catid;
		}		return $parentIDA;
	}
	private function _countItems($pO) {
		$categoryM = self::$categoryM;
		if ( !empty($pO->id) ) {
			if ( strpos( $pO->id, ',' ) > 0 ) {
				$pO->id = str_replace( ' ', '', $pO->id );
				$arrayID = explode( ',', $pO->id );
				return count( $arrayID );
			} else {
				return 1;
			}
		}
				if ( empty($pO->parent) ) $pO->parent = 1;
		if ( !is_numeric($pO->parent) ) {
						$catM = WModel::get( 'item.category' );
			$catM->whereE( 'namekey', $pO->parent );
			$catid = $catM->load( 'lr', 'catid' );
			if ( empty($catid) ) {
				$message =WMessage::get();
				$message->userE('1304526871LLYL');
				return false;
			}			$pO->parent = $catid;
		}
				$multipleParent = WPref::load( 'PITEM_NODE_MULTIPLEPARENT' );
		if ( $multipleParent ) {
			$categoryM->openBracket();
			$categoryM->whereE( 'parent', $pO->parent );
			$categoryM->operator( 'OR' );
			$categoryM->makeLJ( 'item.categoryparent', 'catid', 'catid', 0, 1 );
			$categoryM->whereE( 'catidparent', $pO->parent, 1 );
			$categoryM->closeBracket();
		} else {
			$categoryM->whereE( 'parent', $pO->parent );
		}
				if ( !empty($pO->vendor) ) {
			$categoryM->whereE( 'vendid', $pO->vendor );
		}
				$categoryM->where( 'publishstart', '<=', time() );
		$categoryM->where( 'publishend', '=', 0, 0, null, 1, 0, 0  );
		$categoryM->where( 'publishend', '>=', time(), 0, null, 0, 1, 1  );
		$categoryM->whereE( 'publish', 1 );
		$categoryM->whereE( 'blocked', 0 );
		$categoryM->checkAccess( 0 );
		$categoryM->groupBy( 'catid' );
			$categoryM->select( 'catid' );
			$categoryM->setLimit( 50000 );			$loadResultCount = $categoryM->load( 'lra' );
			$coutnTotal = count($loadResultCount);
		return $coutnTotal;
	}
}