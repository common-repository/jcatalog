<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Advsearch_class extends WClasses {
	private $_parentFieldsStandard = 0;
	private $_parentFieldsCustom = 0;
	private $_parentFieldsAttributes = 0;
	private $_parentFieldsVendors = 0;
	private $_parentFieldsVendorsCustom = 0;
	private $_defautlValuesA = array();
	public function getAllModulDefault() {
		return $this->_defautlValuesA;
	}
	public function setProp($prop,$value) {
		$this->$prop = $value;
	}
	public function getAllAdvSearch($addName=false) {
		if ( $addName ) {
						$fieldname = 'name';
			$NAME = WText::t('1206732392OZVB');
						$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard' );
		}
				$fieldname = 'type';
		$NAME = WText::t('1206732392OZVD');
				$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard', 'output.select' );
				$fieldname = 'country';
		$NAME = WText::t('1206961922ESPA');
				$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard', 'output.select' );
				$fieldname = 'category';
		$NAME = WText::t('1206732411EGQO');
				$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard', 'output.select' );
		if ( WExtension::exist( 'vendors.node' ) ) {
						$fieldname = 'vendors';
			$NAME = WText::t('1220793715LTKS');
						$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard', 'output.select' );
		}		
				$fieldname = 'price';
		$NAME = WText::t('1206961911NYAN');
				$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard' );
		$fieldname = 'stock';
		$NAME = WText::t('1206961996STAE');
				$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard' );
		$useDimension = WPref::load( 'PPRODUCT_NODE_USEDIMENSION' );
		$shipping = WExtension::get( 'shipping.node' );
		if ( !empty($useDimension) && !empty($shipping) ) {
			$fieldname = 'unit';
			$NAME = WText::t('1404917846GHCT');
						$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard' );
			$fieldname = 'length';
			$NAME = WText::t('1404917846GHCU');
						$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard' );
			$fieldname = 'width';
			$NAME = WText::t('1206961870KLAD');
						$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard' );
			$fieldname = 'height';
			$NAME = WText::t('1206961870KLAF');
						$this->_addElement( $fieldname, $NAME, $this->_parentFieldsStandard, 'standard' );
		}
				$this->_addCustomFields();
				$this->_addAttributesFields();
				if ( WExtension::exist( 'vendors.node' ) ) {
						$fieldname = 'vendors_badge';
			$NAME = WText::t('1228709711HLFW');
						$this->_addElement( $fieldname, $NAME, $this->_parentFieldsVendors, 'vendors' );
			$fieldname = 'vendors_name';
			$NAME = WText::t('1298507271ARKT');
						$this->_addElement( $fieldname, $NAME, $this->_parentFieldsVendors, 'vendors' );
						$this->_addCustomFields( true );
		}
		return $this->elements;
	}
	private function _addAttributesFields() {
						$designViewfieldsM = WModel::get( 'product.option' );
		$designViewfieldsM->makeLJ( 'product.optiontrans', 'opid' );
		$designViewfieldsM->whereLanguage();
		$designViewfieldsM->whereE( 'publish', 1 );
		$designViewfieldsM->where( 'namekey', 'NOT LIKE', 'sshipx_pidz_%' );
		$designViewfieldsM->select( 'opid', 0, 'column' );
		$designViewfieldsM->select( 'name', 1 );
		$designViewfieldsM->orderBy( 'ordering', 'ASC' );
		$allFieldsA = $designViewfieldsM->load( 'ol' );
		if ( !empty( $allFieldsA ) ) {
			foreach( $allFieldsA as $oneField ) {
				$this->_addElement( 'attrib_' . $oneField->column, $oneField->name, $this->_parentFieldsAttributes, 'attribute' );
			}		}
	}
	private function _addCustomFields($vendors=false) {
		if ( $vendors ) {
			$dbtid = WModel::get( 'vendors', 'dbtid' );
			$type = 'vendors';
			$parent = $this->_parentFieldsVendorsCustom;
		} else {
			$dbtid = WModel::get( 'item', 'dbtid' );
			$type = 'custom';
			$parent = $this->_parentFieldsCustom;
		}
						$designViewfieldsM = WModel::get( 'design.modelfields' );
		$designViewfieldsM->makeLJ( 'library.model', 'sid', 'sid', 0, 1 );
		$designViewfieldsM->makeLJ( 'library.table', 'dbtid', 'dbtid', 1, 2 );
		$designViewfieldsM->whereE( 'advsearchable', 1, 0 );
		$designViewfieldsM->whereE( 'publish', 1, 0 );
		$designViewfieldsM->whereE( 'dbtid', $dbtid, 2 );
		$designViewfieldsM->makeLJ( 'design.modelfieldstrans', 'fdid', 'fdid', 0, 3 );
		$designViewfieldsM->whereLanguage( 3 );
		$designViewfieldsM->select( array( 'column', 'fieldid' ), 0 );
		$designViewfieldsM->select( 'name', 3 );
		$allFieldsA = $designViewfieldsM->load( 'ol' );
		if ( !empty( $allFieldsA ) ) {
			foreach( $allFieldsA as $oneField ) {
				$fieldType = WModel::getElementData( 'design.fields', $oneField->fieldid, 'namekey' );
				$this->_addElement( $oneField->column, $oneField->name, $parent, $type, $fieldType );
			}		}
	}
	private function _addElement($fieldname,$NAME,$parent=0,$source='standard',$fieldType=null) {
		static $count = 0;
		static $initialValue = 0;
		$count++;
		$elementO = new stdClass;
		$elementO->name = $NAME;
		$elementO->description = str_replace(array('$NAME'), array($NAME),WText::t('1382068739BXVL'));
		$elementO->fid = 10000000 + $count;
		$map = 'search_' . $fieldname;
		$elementO->map = 'p[' . $map . ']';
		$elementO->namekey = 'catalog_advancesearch_module_' . $map;
		$elementO->type = 'output.yesno';
		$elementO->rolid = 1;
		$elementO->sid = WModel::get( 'main.widget', 'sid' );
		$elementO->parent = $parent;
		$elementO->area = '';
		$elementO->frame = 0;
		$elementO->ref_yid = 0;
		$elementO->readonly = 0;
		$elementO->hidden = 0;
		$elementO->required = 0;
		$elementO->private = 0;
		$elementO->params = 0;
		$elementO->level = 0;
		$elementO->initial = '';
		$elementO->checktype = 0;
		$elementO->fdid = 0;
		$elementO->typeNode = 'output';
		$elementO->typeName = 'yesno';
		$this->elements[] = $elementO;
		$count++;
		$elementO = new stdClass;
		$elementO->name = str_replace(array('$NAME'), array($NAME),WText::t('1382068739BXVM'));
		$elementO->description = WText::t('1382068739BXVN');
		$elementO->fid = 10000000 + $count;
		$map = 'ordering_' . $fieldname;
		$elementO->map = 'p[' . $map . ']';
		$elementO->namekey = 'catalog_advancesearch_module_' . $map;
		$elementO->type = 'output.text';
		$elementO->rolid = 1;
		$elementO->sid = WModel::get( 'main.widget', 'sid' );
		$elementO->parent = $parent;
		$elementO->area = '';
		$elementO->frame = 0;
		$elementO->ref_yid = 0;
		$elementO->readonly = 0;
		$elementO->hidden = 0;
		$elementO->required = 0;
		$elementO->private = 0;
		$elementO->params = 'width=3';
		$elementO->level = 0;
		$elementO->initial = '';
		$elementO->checktype = 0;
		$elementO->fdid = 0;
		$elementO->typeNode = 'output';
		$elementO->typeName = 'text';
				$initialValue++;
		if ( empty($this->_defautlValuesA[$map]) ) {
			$this->_defautlValuesA[$map] = $initialValue;
		}		
		$this->elements[] = $elementO;
		$initial = $source;
		$count++;
		$elementO = new stdClass;
		$elementO->name = $NAME;
		$elementO->description = '';
		$elementO->fid = 10000000 + $count;
		$map = 'source_' . $fieldname;
		$elementO->map = 'p[' . $map . ']';
		$elementO->namekey = 'catalog_advancesearch_module_' . $map;
		$elementO->type = 'output.text';
		$elementO->rolid = 1;
		$elementO->sid = WModel::get( 'main.widget', 'sid' );
		$elementO->parent = $parent;
		$elementO->area = '';
		$elementO->frame = 0;
		$elementO->ref_yid = 0;
		$elementO->readonly = 0;
		$elementO->hidden = 1;
		$elementO->required = 0;
		$elementO->private = 0;
		$elementO->params = '';
		$elementO->level = 0;
		$elementO->initial = $initial;
		$elementO->checktype = 0;
		$elementO->fdid = 0;
		$elementO->typeNode = 'output';
		$elementO->typeName = 'text';
				if ( empty($this->_defautlValuesA[$map]) ) $this->_defautlValuesA[$map] = $source;
		$this->elements[] = $elementO;
		if ( 'attribute' == $source || 'output.select' == $fieldType || 'output.selectone' == $fieldType ) {
			$count++;
			$elementO = new stdClass;
			$elementO->name = WText::t('1446343020STHA');
			$elementO->description = WText::t('1446343020STHB');
			$elementO->fid = 10000000 + $count;
			$map = 'picklist_' . $fieldname;
			$elementO->map = 'p[' . $map . ']';
			$elementO->namekey = 'catalog_advancesearch_module_' . $map;
			$elementO->type = 'output.select';
			$elementO->did = WView::picklist( 'catalog_picklist_style', null, null, 'did' );
			$elementO->rolid = 1;
			$elementO->sid = WModel::get( 'main.widget', 'sid' );
			$elementO->parent = $parent;
			$elementO->area = '';
			$elementO->frame = 0;
			$elementO->ref_yid = 0;
			$elementO->readonly = 0;
			$elementO->hidden = 0;
			$elementO->required = 0;
			$elementO->private = 0;
			$elementO->level = 0;
			$elementO->initial = 'link';
			$elementO->checktype = 0;
			$elementO->fdid = 0;
			$elementO->typeNode = 'output';
			$elementO->typeName = 'select';
			$this->elements[] = $elementO;
		}		
	}
	public function createFilterElement($oneField,$element,$customFieldInfoA=array(),$vendorsFieldInfoA=array()) {
		static $id = 0;
		if ( empty($element->source) ) $element->source = 'standard';
		$id++;
		$newElementO = new stdClass;
		$newElementO->lid = 'catalog_advancesearch_module_' . $id;
		switch( $element->source ) {
			case 'custom':
				if ( !empty($customFieldInfoA[$oneField]) ) {
					$newElementO->name = $customFieldInfoA[$oneField]->name;
					$newElementO->type = $customFieldInfoA[$oneField]->listing;
					$typeExplodedA = explode( '.', $newElementO->type );
					$newElementO->typeNode = $typeExplodedA[0];
					$newElementO->typeName = $typeExplodedA[1];
					$newElementO->modelID = WModel::get( 'item', 'sid' );
					$newElementO->column = $oneField;						$newElementO->map = 'itmsrch[' . $oneField . ']';						$newElementO->params = $customFieldInfoA[$oneField]->params;
					if ( !empty($newElementO->params) ) WTools::getParams( $newElementO );
				}			case 'vendors':
				if ( !empty($vendorsFieldInfoA[$oneField]) ) {
					$defautlVendorFieldsA = array( 'vendors_name', 'vendors_badge' );
					if ( in_array( $oneField, $defautlVendorFieldsA ) ) {
						if ( $oneField == 'vendors_name' ) {
							$newElementO->modelID = WModel::get( 'vendortrans', 'sid' );
						} else {
							$newElementO->modelID = WModel::get( 'vendor', 'sid' );
						}						$newElementO->column = substr( $oneField, 8 );						} else {
						$newElementO->modelID = WModel::get( 'vendor', 'sid' );
						$newElementO->column = $oneField;						}	
					$newElementO->name = $vendorsFieldInfoA[$oneField]->name;
					$newElementO->type = $vendorsFieldInfoA[$oneField]->listing;
					$typeExplodedA = explode( '.', $newElementO->type );
					$newElementO->typeNode = $typeExplodedA[0];
					$newElementO->typeName = $typeExplodedA[1];
					$newElementO->map = 'itmsrch[' . $oneField . ']';						$newElementO->params = $vendorsFieldInfoA[$oneField]->params;
					if ( !empty($newElementO->params) ) WTools::getParams( $newElementO );
				}	
								break;
			case 'attribute':
				$explodeOPIDA = explode( '_', $oneField );
				$productOptionM = WModel::get( 'product.option' );
				$optionO = $productOptionM->loadMemory( $explodeOPIDA[1] );
				$newElementO->name = ( !empty($optionO->name) ? $optionO->name : $optionO->namekey );
				$newElementO->type = 'product.option';
				$newElementO->typeNode = 'product';
				$newElementO->typeName = 'option';
				$newElementO->modelID = WModel::get( 'product.optionvalues', 'sid' );
				$newElementO->column = $oneField;					$newElementO->map = 'optionsrch[' . $oneField . ']';					break;
			case 'standard':
			default:
				switch( $oneField ) {
					case 'name':
						$newElementO->name = WText::t('1206732392OZVB');
						$newElementO->typeName = 'text';
						$newElementO->typeNode = 'output';
						$newElementO->type = 'ouput.text';
						$newElementO->modelID = WModel::get( 'itemtrans', 'sid' );
						$newElementO->column = 'name';
						break;
					case 'introduction':
						$newElementO->name = WText::t('1206732392OZVB');
						$newElementO->typeName = 'text';
						$newElementO->typeNode = 'output';
						$newElementO->type = 'ouput.text';
						$newElementO->modelID = WModel::get( 'itemtrans', 'sid' );
						$newElementO->column = 'introduction';
						$newElementO->combined = 'name';
												break;
					case 'description':
						$newElementO->name = WText::t('1206732392OZVB');
						$newElementO->typeName = 'text';
						$newElementO->typeNode = 'output';
						$newElementO->type = 'ouput.text';
						$newElementO->modelID = WModel::get( 'itemtrans', 'sid' );
						$newElementO->column = 'description';
						$newElementO->combined = 'name';
												break;
					case 'country':
						$newElementO->name = WText::t('1206961922ESPA');
						$newElementO->typeName = 'select';
						$newElementO->typeNode = 'output';
						$newElementO->type = 'ouput.select';
						$newElementO->modelID = WModel::get( 'vendors', 'sid' );
						$newElementO->column = 'originctyid';
						$newElementO->map = 'originctyid';
						$newElementO->selectdid = WView::picklist( 'countries_list_no_select', '', null, 'did' );							
												break;
					case 'price':
						$newElementO->name = WText::t('1206961911NYAN');
						$newElementO->typeName = 'moneycurrency';
						$newElementO->typeNode = 'main';
						$newElementO->type = 'main.moneycurrency';
						$newElementO->modelID = WModel::get( 'item', 'sid' );
						$newElementO->column = 'price';
						break;
					case 'type':
						$newElementO->name = WText::t('1206732392OZVD');
						$newElementO->typeName = 'select';
						$newElementO->typeNode = 'output';
						$newElementO->type = 'output.select';
						$newElementO->modelID = WModel::get( 'item', 'sid' );
						$newElementO->column = 'prodtypid';
						$newElementO->map = 'prodtypid';
						$newElementO->selectdid = WView::picklist( 'catalog_advance_type', '', null, 'did' );
						break;
					case 'category':
						$newElementO->name = WText::t('1206732411EGQO');
						$newElementO->typeName = 'select';
						$newElementO->typeNode = 'output';
						$newElementO->type = 'output.select';
						$newElementO->modelID = WModel::get( 'item.categoryitem', 'sid' );
						$newElementO->column = 'catid';
						$newElementO->map = 'catid';
						$newElementO->selectdid = WView::picklist( 'catalog_advance_category', '', null, 'did' );
						break;
					case 'vendors':
						$newElementO->name = WText::t('1221228435BYUA');
						$newElementO->typeName = 'select';
						$newElementO->typeNode = 'output';
						$newElementO->type = 'output.select';
						$newElementO->modelID = WModel::get( 'item', 'sid' );
						$newElementO->column = 'vendid';
						$newElementO->map = 'vendid';
						$newElementO->selectdid = WView::picklist( 'vendors_advance_vendid', '', null, 'did' );
						break;
					case 'unit':
						$newElementO->name = WText::t('1404917848OWCY');
						$newElementO->typeName = 'unit';
						$newElementO->typeNode = 'shipping';
						$newElementO->type = 'shipping.unit';
						$newElementO->modelID = 0;
						$newElementO->column = $oneField;
						$newElementO->did = 'shipping_dimension_unit';
						$newElementO->map = 'unit';
						$newElementO->task = 'home';
						break;
					case 'length':
						$newElementO->name = WText::t('1404917846GHCU');
						$newElementO->typeName = 'dimension';
						$newElementO->typeNode = 'shipping';
						$newElementO->type = 'shipping.dimension';
						$newElementO->modelID = WModel::get( 'item', 'sid' );
						$newElementO->column = $oneField;
						break;
					case 'width':
						$newElementO->name = WText::t('1206961870KLAD');
						$newElementO->typeName = 'dimension';
						$newElementO->typeNode = 'shipping';
						$newElementO->type = 'shipping.dimension';
						$newElementO->modelID = WModel::get( 'item', 'sid' );
						$newElementO->column = $oneField;
						break;
					case 'height':
						$newElementO->name = WText::t('1206961870KLAF');
						$newElementO->typeName = 'dimension';
						$newElementO->typeNode = 'shipping';
						$newElementO->type = 'shipping.dimension';
						$newElementO->modelID = WModel::get( 'item', 'sid' );
						$newElementO->column = $oneField;
						break;
					default:
						return false;
						break;
				}				break;
		}	
		return $newElementO;
	}	
}