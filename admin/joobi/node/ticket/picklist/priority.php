<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Priority_picklist extends WPicklist {
	function create() {
		$this->addElement( 0, ' - ' . WText::t('1391713549PJNT') . ' - ' );
		$licenseExist = WExtension::exist( 'license.node' );
		if ( ! $licenseExist ) {
			$this->addElement( 10, WText::t('1227581114PJBW') );				$this->addElement( 20, WText::t('1227581114PJBX') );				$this->addElement( 30, WText::t('1227581114PJBY') );				$this->addElement( 40, WText::t('1206732429GMSU') );							
		} else {
			$disbleO = new stdClass;
			$disbleO->disabled = true;	
						$ticketPlanC = WClass::get( 'license.plan' );
			$subType = $ticketPlanC->getPriorityBasedOnUser();
			$this->addElement( 10, WText::t('1227581114PJBW') );				if ( $subType >= 20 ) $this->addElement( 20, WText::t('1227581114PJBX') );				else $this->addElement( 20, WText::t('1227581114PJBX'), $disbleO );
			if ( $subType >= 30 ) $this->addElement( 30, WText::t('1227581114PJBY') );				else $this->addElement( 30, WText::t('1227581114PJBY'), $disbleO );
			if ( $subType >= 40 ) $this->addElement( 40, WText::t('1206732429GMSU') );					else $this->addElement( 40, WText::t('1206732429GMSU'), $disbleO );
		}
		if ( WRoles::isAdmin( 'supportagent' ) && $licenseExist ) {
			$typeA = array();
			$typeA[101] = WText::t('1391514073SJUO');
			$typeA[102] = WText::t('1391514073SJUP');
			$typeA[103] = WText::t('1391514073SJUQ');
			$typeA[104] = WText::t('1391514073SJUR');
			$typeA[111] = WText::t('1391514073SJUS');
			$typeA[112] = WText::t('1391514073SJUT');
			$typeA[113] = WText::t('1391514073SJUU');
			$typeA[114] = WText::t('1391514073SJUV');
			$typeA[121] = WText::t('1391514073SJUW');
			$typeA[122] = WText::t('1391514073SJUX');
			$typeA[123] = WText::t('1391514073SJUY');
			$typeA[124] = WText::t('1391514073SJUZ');
			$typeA[131] = WText::t('1391514073SJVA');
			$typeA[132] = WText::t('1391514073SJVB');
			$typeA[133] = WText::t('1391514073SJVC');
			$typeA[134] = WText::t('1391514073SJVD');
			$typeA[201] = WText::t('1391514073SJUO');
			$typeA[202] = WText::t('1391514073SJUP');
			$typeA[203] = WText::t('1391514073SJUQ');
			$typeA[204] = WText::t('1391514073SJUR');
			$typeA[211] = WText::t('1391514073SJUS');
			$typeA[212] = WText::t('1391514073SJUT');
			$typeA[213] = WText::t('1391514073SJUU');
			$typeA[214] = WText::t('1391514073SJUV');
			$typeA[221] = WText::t('1391514073SJUW');
			$typeA[222] = WText::t('1391514073SJUX');
			$typeA[223] = WText::t('1391514073SJUY');
			$typeA[224] = WText::t('1391514073SJUZ');
			$typeA[231] = WText::t('1391514073SJVA');
			$typeA[232] = WText::t('1391514073SJVB');
			$typeA[233] = WText::t('1391514073SJVC');
			$typeA[234] = WText::t('1391514073SJVD');
			foreach( $typeA as $k => $v ) {
				$this->addElement( $k, $v, $disbleO );
			}			
		}
		return true;
	}
}