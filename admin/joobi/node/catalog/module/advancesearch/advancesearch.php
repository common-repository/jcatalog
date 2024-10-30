<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_CoreAdvancesearch_module extends WModule {
	private $_customFieldInfoA = array();
	private $_vendorsFieldInfoA = array();
	private $_smartfilter = false;
	function create() {
		$this->_smartfilter = ( !empty($this->smartfilter) ? $this->smartfilter : false );
		$autoHide = ( isset($this->autohide) ? $this->autohide : 'onlyhome' );
				WPage::addCSSFile( 'node/catalog/css/style.css' );
				if ( $autoHide && 'everywhere' != $autoHide ) {
			$controller = WGlobals::get( 'controller' );
			if ( 'catalog' != $controller && 'catalog-results' != $controller ) return false;
						if ( 'onlyhome' == $autoHide ) {
				$task = WGlobals::get( 'task' );
				if ( 'catalog' == $controller && 'home' != $task ) return false;
			}
			if ( 'category' == $autoHide ) {
				$task = WGlobals::get( 'task' );
				if ( 'catalog' == $controller && ( 'home' != $task && 'category' != $task ) ) return false;
			}
		}
		$operator = ( ( !empty($this->operator) && 1 == $this->operator ) ?  'AND' : 'OR' );			WGlobals::setSession( 'advCatalogOpr', 'operator', $operator );
		if ( !empty($this->autoreset) ) {
			$filesC = WGet::file();
			$previousController = $filesC->read( JOOBI_DS_TEMP . 'advCtlg_val.txt' );
			$currentController = WGlobals::get( 'controller', '', null, 'task' );
			if ( $previousController != $currentController ) {
								$myAdvCatalogO = WGlobals::getSession( 'advCatalog' );
				if ( !empty($myAdvCatalogO) ) {
					$resetAdvA = array();
					foreach( $myAdvCatalogO as $k => $v ) {
						WGlobals::setSession( 'advCtlg_val_' . $k, null, null );
					}				}				
			}			
			if ( empty($currentController) ) $currentController = 'none7None';
			$filesC = WGet::file();
			$filesC->write( JOOBI_DS_TEMP . 'advCtlg_val.txt', $currentController, 'overwrite' );
		}
				$useDimension = WPref::load( 'PPRODUCT_NODE_USEDIMENSION' );
		$shipping = WExtension::get( 'shipping.node' );
		if ( !empty($useDimension) && !empty($shipping) ) {
						$getDimUnit = WGlobals::getSession( 'dimensionUnit', 'unit' );
			if ( empty($getDimUnit) ) {
				$getDimUnit = WPref::load( 'PPRODUCT_NODE_DIMENSIONUNIT' );
				WGlobals::setSession( 'dimensionUnit', 'unit', $getDimUnit );
			}
		}
						$allFieldsA = array();
		foreach( $this as $oneKey => $oneParam ) {
			$expA = explode( '_', $oneKey );
			if ( count($expA) < 2 ) continue;
			$typeField = array_shift($expA);
			$nameField = implode( '_', $expA );
			if ( 'search' == $typeField ) {
				if ( !isset($allFieldsA[$nameField]) ) $allFieldsA[$nameField] = new stdClass;
				$allFieldsA[$nameField]->search = $oneParam;
			}			if ( 'source' == $typeField ) {
				if ( !isset($allFieldsA[$nameField]) ) $allFieldsA[$nameField] = new stdClass;
				$allFieldsA[$nameField]->source = $oneParam;
			}
			if ( 'ordering' == $typeField ) {
				if ( !isset($allFieldsA[$nameField]) ) $allFieldsA[$nameField] = new stdClass;
				$allFieldsA[$nameField]->ordering = $oneParam;
			}		}
		if ( empty($allFieldsA) ) return '';
		$newFieldsA = array();
				foreach( $allFieldsA as $nameField => $oneField ) {
			if ( empty($oneField->search) ) continue;
			if ( empty($oneField->ordering) ) $oneField->ordering = 9999;
			$newOrdering = $oneField->ordering * 1000;
			if ( !isset($newFieldsA[$newOrdering]) ) {
				$newFieldsA[$newOrdering] = $nameField;
			} else {
				$this->_checkExists( $newFieldsA, $newOrdering );
				$newFieldsA[$newOrdering] = $nameField;
			}
		}
		ksort( $newFieldsA );
				$elementToLoadA = $this->_loadFieldsInformation( $newFieldsA, $allFieldsA, 'custom' );
		$this->_loadCustomFieldsInformation( $elementToLoadA, false );
		if ( WExtension::exist( 'vendors.node' ) ) {
						$elementToLoadA = $this->_loadFieldsInformation( $newFieldsA, $allFieldsA, 'vendors' );
			$this->_loadCustomFieldsInformation( $elementToLoadA, true );
		}
		$HTML = '';
		WLoadFile( 'output.doc.document' );
				foreach( $newFieldsA as $oneField ) {
			$oneFilter = $this->_createFilterElement( $oneField, $allFieldsA[$oneField] );
			if ( empty($oneFilter->typeName) ) continue;
			$columnInstance = Output_Doc_Document::loadListingElement( $oneFilter );
			if ( empty($columnInstance) ) continue;
			$task = WGlobals::get( 'task' );
			if ( 'category' != $task ) $task = '';
			$picklistType = 'picklist_' . $oneField;
			$displayType = ( isset($this->$picklistType) ? $this->$picklistType : '' );
			$memory = 'advCatalog';
			$status = $columnInstance->advanceSearchLinks( $memory, 'advCtlg_val_', 'catalog', $task, $displayType );
			if ( empty($status) ) continue;
			if ( !empty($oneFilter->combined) ) continue;
			$content = $columnInstance->content;
			if ( empty($content) ) continue;
			if ( empty($this->vertical_horizontal) ) $HTML .= '<div class="clearfix">';
			else $HTML .= '<div class="advSearchHrz">';
			$HTML .= '<fieldset class="advSearchFilter ' . $oneField . '">';
			if ( empty($this->seeall) ) {
				$HTML .= '<h5>' . $oneFilter->name . '</h5>';
			} else {
				$linkText = WPage::createPopUpLink( WPages::linkPopUp('controller=catalog-filter'), WText::t('1412810070CKJS'), '80%', '80%' );
				$HTML .= '<div class="clearfix"><div style="float:left;"><h5>' . $oneFilter->name . '</h5></div>';
				$HTML .= '<div style="float:right;padding-top:10px;">' . $linkText . '</div></div>';
			}
			$HTML .= $content;
			$HTML .= '</fieldset>';
			$HTML .= '</div>';
		}
		$this->content = '<div class="advSearchFrame">';
		$this->content .= $HTML;
		$this->content .= '</div>';
	}
	private function _loadCustomFieldsInformation($elementToLoadA,$vendors=false) {
		if ( empty($elementToLoadA) ) return false;
		if ( $vendors ) {
			$dbtid = WModel::get( 'vendors', 'dbtid' );
			$PorpertyType = '_vendorsFieldInfoA';
			$variable = & $this->$PorpertyType;
			foreach( $elementToLoadA as $vkey => $oneVal ) {
				switch( $oneVal ) {
					case 'vendors_name':
						$oneField = new stdClass;
						$oneField->column = 'name';
						$oneField->name = WText::t('1418425899SRHO');
						$oneField->listing = 'output.text';
						$oneField->namekey = 'vendors_name';
						$oneField->params = '';
						$variable[$oneField->namekey] = $oneField;
						unset( $elementToLoadA[$vkey] );
						break;
					case 'vendors_badge':
						$oneField = new stdClass;
						$oneField->column = 'badge';
						$oneField->name = WText::t('1418425899SRHP');
						$oneField->listing = 'output.selectone';
						$oneField->namekey = 'vendors_badge';
						$oneField->params = 'selectdid=' . WView::picklist( 'vendors_badge', '', null, 'did' ) . '
selectype=3
selectstyle=21';
						$variable[$oneField->namekey] = $oneField;
						unset( $elementToLoadA[$vkey] );
						break;
					default:
						break;
				}
			}
			if ( empty($elementToLoadA) ) return false;
		} else {
			$dbtid = WModel::get( 'item', 'dbtid' );
			$PorpertyType = '_customFieldInfoA';
		}
		$designViewfieldsM = WModel::get( 'design.modelfields' );
		$designViewfieldsM->makeLJ( 'library.model', 'sid', 'sid', 0, 1 );
		$designViewfieldsM->makeLJ( 'library.table', 'dbtid', 'dbtid', 1, 2 );
		$designViewfieldsM->whereE( 'advsearchable', 1, 0 );
		$designViewfieldsM->whereE( 'publish', 1, 0 );
		$designViewfieldsM->whereIn( 'column', $elementToLoadA, 0 );
		$designViewfieldsM->whereE( 'dbtid', $dbtid, 2 );
		$designViewfieldsM->makeLJ( 'design.modelfieldstrans', 'fdid', 'fdid', 0, 3 );
		$designViewfieldsM->whereLanguage( 3 );
		$designViewfieldsM->makeLJ( 'design.fields', 'fieldid', 'fieldid', 0, 4 );
				if ( $this->_smartfilter && ! $vendors ) {
			$allCurrentTypesA = array();
						$type = WGlobals::get( 'type' );
			if ( empty($type) ) {
				$prodtypid = WGlobals::get( 'prodtypid' );
				if ( !empty($prodtypid) ) $allCurrentTypesA[] = $prodtypid;
			} else {
				if ( is_numeric($type) ) {
					$allCurrentTypesA[] = $type;
				} else {
					if ( strpos( $type, ',' ) ) {
						$allCurrentTypesA = explode( ', ', str_replace( ' ', '', $type ) );
					} else {
												$productTypeM = WModel::get( 'item.type' );
						$productTypeM->whereE( 'type', $type );
						$productTypeM->whereE( 'publish', 1 );
						$productTypeM->whereE( 'searchable', 1 );
						$productTypeM->checkAccess();
						$allCurrentTypesA = $productTypeM->load( 'lra', 'prodtypid' );
					}						
				}				
			}
			if ( !empty( $allCurrentTypesA ) ) {
				$designViewfieldsM->makeLJ( 'design.modelfieldstype', 'fdid', 'fdid', 0, 5 );
				$designViewfieldsM->whereIn( 'typeid', $allCurrentTypesA, 5 );
				$designViewfieldsM->groupBy( 'fdid' );
			}
			if ( WPref::load( 'PDESIGN_NODE_FIELDALLTYPE' ) ) {
				if ( !empty( $allCurrentTypesA ) ) {
					$designViewfieldsM->makeLJ( 'design.modelfieldstype', 'fdid', 'fdid', 0, 5 );
					$designViewfieldsM->whereIn( 'typeid', $allCurrentTypesA, 5 );
					$designViewfieldsM->groupBy( 'fdid' );
				}					
			} else {
								$validSIDA = array();
				$itemTypeC = WClass::get( 'item.type' );
				foreach( $allCurrentTypesA as $prodtypid ) {
					$designation = $itemTypeC->loadTypeData( $prodtypid, 'designation' );
					$mySID = WModel::get( $designation, 'sid' );
					if ( !empty($mySID) ) $validSIDA[] = $mySID;
				}			
				if ( !empty($validSIDA) ) $designViewfieldsM->whereIn( 'sid', $validSIDA );
			}			
		}
		$designViewfieldsM->select( array( 'column', 'namekey', 'params' ), 0 );
		$designViewfieldsM->select( 'name', 3 );
		$designViewfieldsM->select( 'listing', 4 );
		$customFieldInfoA = $designViewfieldsM->load( 'ol' );
		if ( empty($customFieldInfoA) ) return false;
		foreach( $customFieldInfoA as $oneField ) {
			$variable = & $this->$PorpertyType;
			$variable[$oneField->column] = $oneField;
		}
	}
	private function _loadFieldsInformation($newFieldsA,$allFieldsA,$typeSearched='custom') {
		$customElementsA = array();
		foreach( $newFieldsA as $oneField ) {
			$element = $allFieldsA[$oneField];
			if ( !empty($element->source) && $typeSearched == $element->source ) {
				$customElementsA[] = $oneField;
			}		}
		return $customElementsA;
	}
	private function _createFilterElement($oneField,$element) {
		$catalogAdvsearchC = WClass::get( 'catalog.advsearch' );
		return $catalogAdvsearchC->createFilterElement( $oneField, $element, $this->_customFieldInfoA, $this->_vendorsFieldInfoA );
	}
	private function _checkExists($newFieldsA,&$newOrdering) {
		$newOrdering++;
		if ( isset($newFieldsA[$newOrdering]) ) $this->_checkExists( $newFieldsA, $newOrdering );
		return $newOrdering;
	}
}