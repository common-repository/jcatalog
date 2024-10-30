<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WLoadFile( 'category.model.node' ,JOOBI_DS_NODE );
class Item_Category_model extends Category_Node_model {
	protected $_parentIdentifier = 'default';
	protected $_dontExportA = array( 'lft', 'rgt', 'numpid', 'numpidsub' );
function __construct() {
	$filid = new stdClass;
	$filid->fileType = 'images';
	$filid->folder = 'media';
	$filid->path = 'images/products/categories';
	$filid->secure = false;
	$filid->format = array('jpg','png','gif','jpeg');
	$valuePref = WPref::load( 'PITEM_NODE_CATFORMAT' );
	if ( !empty( $valuePref ) ) $imgFormat = explode( ',', $valuePref );
	$filid->format = ( !empty($imgFormat) ) ? $imgFormat : array( 'jpg', 'png', 'gif', 'jpeg');
	$filid->maxSize = WPref::load( 'PITEM_NODE_CATMAXSIZE' ) * 1028;
		$filid->thumbnail = 1;		$filid->maxHeight = WPref::load( 'PITEM_NODE_CATMAXH' );					$filid->maxWidth = WPref::load( 'PITEM_NODE_CATMAXW' );
	$filid->maxTHeight = array( WPref::load( 'PITEM_NODE_TCATH' ) );					$filid->maxTWidth = array( WPref::load( 'PITEM_NODE_TCATW' ) );
	$filid->watermark = WPref::load( 'PITEM_NODE_WATERMARKCATEGORY' );
	$filid->storage = WPref::load( 'PITEM_NODE_FILES_METHOD_PHOTOS' );
	$this->_fileInfo['filid'] = $filid;
		parent::__construct();	
}
function addValidate() {
	if ( !empty( $this->namekey ) ) {
		$results = $this->_getCateogyInfo( $this->namekey );
		if ( !empty ($results) ) {
			if (!isset($this->catid) || $results->catid != $this->catid) {
				$old = $this->namekey;
				$this->namekey = $this->namekey . rand( 0, 100000 );
				$message = WMessage::get();
				$new = $this->namekey;
				$message->userW('1317983130NHRL',array('$old'=>$old,'$new'=>$new));
			}		}	}		if ( WRoles::isAdmin( 'storemanager' ) ) {
		$uid = 0;
	} else {
		$uid = WUser::get('uid');
	}
		$vendorHelperC = WClass::get('vendor.helper',null,'class',false);
	if ( empty($this->vendid ) ) $this->vendid = $vendorHelperC->getVendorID( $uid, true );
	parent::addValidate();
	if ( WRoles::isNotAdmin( 'storemanager' ) ) {
				$catnoBlock = WPref::load( 'PVENDORS_NODE_CATNOBLOCK' );
		if ( ! $catnoBlock ) {
			$this->blocked = 1;
			$this->publish = 0;
		} else {
			$this->blocked = 0;
			$this->publish = 1;
		}
	}	
	if ( empty($this->alias) ) $this->alias = $this->getChild( 'item.categorytrans', 'name' );
	return true;
}
function editValidate() {
	$status = parent::editValidate();
		if ( empty($this->filid) ) {
		unset($this->filid);
		return true; 	}
	return $status;
}
function deleteValidate($catid=0) {
	static $doItOnluOnce = false;
	if ( empty($catid) ) return false;
	if ( !$doItOnluOnce ) {
		$doItOnluOnce = true;
				$categoryM = WModel::get( 'item' );
		$categoryM->makeLJ( 'item.categoryitem', 'pid' );
		$categoryM->whereE( 'catid', $catid, 1 );
		$categoryM->updatePlus( 'numcat', -1 );
		$categoryM->update();
	}
	return parent::deleteValidate( $catid );
}
	function deleteExtra($eid=0) {
		if ( 9 == WPref::load( 'PMAIN_NODE_SEFTYPE' ) && !empty($eid) ) {
			$mainSEFM = WModel::get( 'main.sef' );
			$mainSEFM->whereE( 'eid', $eid );
			$mainSEFM->whereE( 'controller', 'catalog' );
			$mainSEFM->whereE( 'task', 'category' );
			$mainSEFM->delete();
		}	
		return true;
	}
	function validate() {
				$this->validateDate( 'publishstart' );
		$this->validateDate( 'publishend', true );
						$namekey = ( isset( $this->namekey ) ? $this->namekey : null );
		if ( empty($this->uid) && ( ( $namekey != 'all_products' ) && ( $namekey != 'other_vendors' ) ) ) {
			$this->uid = WUser::get( 'uid' );
		}	
				if ( !empty($this->parent) && !empty($this->type) ) {
			$parentCatO = $this->_getCateogyInfo( $this->parent );
			if ( !empty($parentCatO) ) {
				$namekeyParent = $parentCatO->namekey; 						
				if ( 'root' != $namekeyParent ) {
					$typeParent = $parentCatO->type; 							
					if ( !empty( $typeParent ) && $typeParent != $this->type ) {
						$this->type = $typeParent;
						$this->userN('1432691648GNBM');
					}						
				}				
			}				
		}	
		return parent::validate();
	}
	public function addExtra() {
		$catnoBlock = WPref::load( 'PVENDORS_NODE_CATNOBLOCK' );
		if ( WRoles::isNotAdmin( 'storemanager' ) && ! $catnoBlock ) {
			$uid = WUser::get( 'uid' );
			$link = WPage::linkAdmin( 'controller=item-category-vendor&task=verification&eid='. $this->catid .'&id='. $uid );
			$htmlLink = '<a href="'. $link .'">'. WText::t('1298350849IBYC') .'</a>';
			$link = WPage::linkAdmin( 'controller=item-category&task=listing&search='. $this->catid );
			$showLink = '<a href="'. $link .'">'. WText::t('1340850149PUGR') .'</a>';
			$vendorHelperC = WClass::get( 'vendor.helper' );
			$vendorName = $vendorHelperC->getVendor( $this->vendid, 'name' );
						$param = new stdClass;
			$param->vendorName = $vendorName;
			$param->email = WUser::get( 'email' );
			$param->categoryName = $this->getChild( 'item.categorytrans', 'name' );
			if ( empty($param->categoryName) ) $param->categoryName = $vendorName;
			$param->description = $this->getChild( 'item.categorytrans', 'description' );
			if ( empty($param->description) ) $param->description = '...';
			$param->datecreated = WApplication::date( WTools::dateFormat( 'day-date-time' ), time() );
			$param->showLink = $showLink;
			$param->verifyLink = $htmlLink;
						$vendorsEmailC = WClass::get( 'vendor.email' );
			$uidStoreManager = $vendorsEmailC->getStoreMangerContact();
			$mail = WMail::get();
			$mail->setParameters( $param );
			$mail->sendNow( $uidStoreManager, 'vendor_item_category_verification', false );
						$message = WMessage::get();
			$message->userS('1329254268GSEW');
		}
		return parent::addExtra();
	}
	public function extra() {
		$status = parent::extra();
		if ( !$status ) return false;
						$itemWallC = WClass::get( 'item.wall' );
		if ( $itemWallC->available() ) {
			$extraLink = '';
			if ( WExtension::exist( 'affiliate.node') ) {
				$affiliateHelperC = WClass::get( 'affiliate.helper', null, 'class', false );
				$extraLink = $affiliateHelperC->addAffilateToLink();
			}
			$post = new stdClass;
			$pageID = WPage::getPageId();
			$link = WPage::linkHome('controller=catalog&task=category&eid='.$this->catid . $extraLink, WPage::getPageId( 'catalog' ) );
			$CATEGORY_NAME = '<a href="'. $link .'">'.$this->getChild( 'item.categorytrans', 'name' ).'</a>';
			if ( $this->_new ) {
				$post->title = str_replace(array('$CATEGORY_NAME'), array($CATEGORY_NAME),WText::t('1338591625AZEE'));
				$post->titleTR = WText::translateNone( '{tag:actor} created a new category '.$CATEGORY_NAME.'.' );
				$post->titleVAR = '$CATEGORY_NAME';
				$post->callingFunction = 'wallcategorynew';
			} else {
				$post->title = str_replace(array('$CATEGORY_NAME'), array($CATEGORY_NAME),WText::t('1338591625AZEF'));
				$post->titleTR = WText::translateNone( '{tag:actor} updated category '.$CATEGORY_NAME.'{multiple} {count} times{/multiple}.' );
				$post->titleVAR = '$CATEGORY_NAME';
				$post->callingFunction = 'wallcategoryedit';
			}
			$content = '';
									$itemCategoryM = WModel::get( 'item.category' );
			$itemCategoryM->whereE( 'catid', $this->catid );
			$imageFile = $itemCategoryM->load( 'lr', 'filid' );
			if ( !empty($imageFile) ) {
				$this->element = new stdClass;
				$this->element->imageWidth = 90;
				$this->element->imageHeight = 90;
								$filesMediaC = WClass::get( 'files.media' );
				$content .= $filesMediaC->renderHTML( $imageFile, $this->element );
			}
			$description = $this->getChild( 'item.categorytrans' ,'description' );
			if ( !empty($description) ) {
				$emailHelperC = WClass::get( 'email.conversion' );
				$content .= $emailHelperC->smartHTMLSize( $description, 150, false, false, false, true );
			}			$post->eid = $this->catid;
			$post->content = $content;
			$post->model = 'item.category';
			$post->node = 'item.node';
			$post->link = $link;
			$itemWallC->postWall( $post );
		}
		return parent::extra();
	}
	public function defaultSorting() {
		$sort = WPref::load( 'PITEM_NODE_CATEGORYDEFAULT' );
		switch( $sort ) {
			case 'alphabetic':
				$sidTrans = WModel::getID( 'item.categorytrans' );
				if ( isset( $this->_as_cd[$sidTrans] ) ) {
					$this->orderBy( 'name', 'ASC', $this->_as_cd[$sidTrans] );
				} else {
				}				break;
			case 'recentlyupdated':
				$this->orderBy( 'modified', 'DESC' );
				break;
			case 'newest':
				$this->orderBy( 'created', 'DESC' );
				break;
			case 'oldest':
				$this->orderBy( 'created', 'ASC' );
				break;
			case 'ordering':
			default:
				$this->orderBy( 'ordering', 'ASC' );
				break;
		}		
	}	
	public function defaultLimit() {
		$limit = WPref::load( 'PITEM_NODE_CATEGORYMAXLIMIT' );
		if ( $limit < 100 ) $limit = 100;
		$this->_checkMaxElements = $limit;
		if ( !empty($limit) ) $this->setLimit( $limit );
	}
	public function isOwner() {
		$pKey = $this->getPK();
		$eid = $this->$pKey;
		if ( empty($eid) ) return false;
		$roleHelper = WRole::get();
		$storeManagerRole = WRole::hasRole( 'storemanager' );
		if ( !empty( $storeManagerRole ) ) return true;
		$vendorHelperC = WClass::get( 'vendor.helper' );
		$vendid = $vendorHelperC->getVendorID();
		$itemM = WModel::get( $this->getModelID() );
		if ( is_array($eid) ) $itemM->whereIn( $this->getPK(), $eid );
		else $itemM->whereE( $this->getPK(), $eid );
		$itemM->whereE( 'vendid', $vendid );
		return $itemM->exist();
	}
  	public function getItemDefaultCategory($eid) {
  		if ( empty($eid) ) return 0;
  		$categoryProduct = WModel::get( 'item.categoryitem' );
  		$categoryProduct->whereE( 'pid', $eid );
  		$categoryProduct->orderBy( 'premium', 'DESC' );
  		$categoryProduct->orderBy( 'ordering' );
  		return $categoryProduct->load( 'lr', 'catid' );
  	}
	public function secureTranslation($sid,$eid) {
		$translationC = WClass::get( 'item.translation', null, 'class', false );
		if ( empty($translationC) ) return false;
				if ( !$translationC->secureTranslation( $this, $sid, $eid ) ) return false;
		return true;
	}	
	private function _getCateogyInfo($catid) {
		$itemCategoryM = WModel::get( 'item.category' );
		if ( is_numeric($catid) ) {
			$itemCategoryM->whereE( 'catid', $catid );
		} else {
			$itemCategoryM->whereE( 'namekey', $catid );
		}		$results = $itemCategoryM->load( 'o' );
		return $results;
	}	
}