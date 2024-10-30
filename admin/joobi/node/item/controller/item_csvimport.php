<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_csvimport_controller extends WController {
function csvimport() {
	$fileA = $this->secureFileUpload( 'csv', 'importfile' );
	if ( empty($fileA) ) {
		$this->setView( 'item_csv_import' );
		return true;
	}	
	$fileLocation = $fileA['location'];
	$productType = WGlobals::get( 'itemtype', '' );
		if ( empty($productType) ) {
		$myClassName = get_class( $this );
		$myClassNameA = explode( '_', $myClassName );
		$productType = strtolower( $myClassNameA[0] );
	}	
	$trkLocation = WGlobals::get( JOOBI_VAR_DATA );
	$downloadFileLocation = WGlobals::get( 'downloadfilepath' );
	$previewFileLocation = WGlobals::get( 'previewfilepath' );
	$imageFileLocation = WGlobals::get( 'imagefilepath' );
	$allowupdate = WGlobals::get( 'allowupdate' );
	$fileClass = WGet::file();		
	$filecontent = $fileClass->read( $fileLocation );
	if ( empty($filecontent) ) {
		$this->userE('1308652443MBNQ');
		$this->setView( 'item_csv_import' );
		$this->_removeFile( $fileLocation );
		return true;
	}
	$params = new stdClass;
	$params->fileLocation = $fileLocation;
	$params->csvFile = $fileA['name'];
	$params->error = 0;
	$params->filetype = $fileA['type'];
	$params->downloadFileLocation = $downloadFileLocation;
	$params->previewFileLocation = $previewFileLocation;
	$params->imageFileLocation = $imageFileLocation;
	$params->allowupdate = $allowupdate;
	if ( !empty($productType) ) $params->itemType = $productType;
	$importC = WClass::get( 'item.import' );
	$import = $importC->processItemImport( $params, $filecontent );
	if (!$import) {
		$this->userE('1308652443MBNR');
		$this->setView( 'item_csv_import');
	} else {
		$this->userS('1341596554FRRD');
	}
	$this->_removeFile( $fileLocation );
		$message = WMessage::get();
	$message->userB( 'finish' );
	return true;
}
	private function _removeFile($path='') {
		$fileC = WGet::file();
		if ( !empty($path) ) return $fileC->delete( $path );
		return false;
	}	
}