<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreLicense_listing extends WListings_default {
	function create() {
		if ( empty($this->value) ) return $this->_noWebsite();
		$licenseM = WModel::get( 'license' );
		$licenseM->makeLJ( 'license.sites', 'lcid' );
		$licenseM->whereE( 'uid', $this->getValue( 'uid' ) );
		$licenseM->operator( 'OR' );
		$licenseM->openBracket();
		$licenseM->whereE( 'stid', $this->value, 1 );
		$licenseM->whereE( 'premium', 1, 1 );
		$licenseM->closeBracket();
		$licenseM->select( '*', 0 );
		$licenseM->orderBy( 'created', 'DESC' );
		$licenseA = $licenseM->load( 'ol' );
		if ( empty($licenseA) ) {
			$this->content = '<span class="label label-warning">' . WText::t('1448395985BIFR') . '</span>';
			return true;
		}		
		$licenseO = null;
		foreach( $licenseA as $lic ) {
			if ( strtotime($lic->maintenance) > time() ) {
								$licenseO = $lic;
				break;
			}		}		
		if ( empty($licenseO) ) {
			$licenseO = $licenseA[0];
		}
		$color = ( strtotime($licenseO->maintenance) < time() ? 'danger' : 'success' );
		$clubsubtypeT = WType::get( 'license.clubsubtype' );
		$this->content = '<span style="font-weight:bold;">';
		$this->content .= WText::t('1389879775LPOL') . ': ';
		$this->content .= $clubsubtypeT->getName( $licenseO->subtype );
		$this->content .= '</span>';
		$this->content .= '<br /><span class="label label-' . $color . '">';
		$this->content .= '' . WText::t('1231158811CQTV') . ': ';
		$this->content .= WApplication::date( WTools::dateFormat( 'date' ), $licenseO->maintenance );
		$this->content .= '</span>';
		$this->content .= '<br />' . WText::t('1391514079NAKA') . ': ';
		$this->content .= WPage::createPopUpLink( WPage::link( 'controller=license&task=listing&search=' . $licenseO->token ), $licenseO->token, '90%', '90%' );
		return true;
	}
	private function _noWebsite() {
		if ( ! WModel::modelExist( 'license' ) ) return false;
				$licenseM = WModel::get( 'license' );
		$licenseM->whereE( 'uid', $this->getValue( 'uid' ) );
		$licenseM->orderBy( 'created', 'DESC' );
		$licenseA = $licenseM->load( 'ol' );
		if ( empty($licenseA) ) {
			$this->content = '<span class="label label-warning">' . WText::t('1448395985BIFR') . '</span>';
			return true;
		}		
		$html = '';
		foreach( $licenseA as $lic ) {
			if ( !empty($html) ) $html .= '<br>';
			$color = ( strtotime($lic->maintenance) < time() ? 'danger' : 'success' );
			$html .= '<span class="label label-' . $color . '">';
			$html .= $lic->token;
			$html .= ' - ' . WText::t('1206961850KLRD') . ': ' . $lic->maintenance;
			$html .= '</span>';
		}		
		$this->content = $html;
		return true;
	}	
}