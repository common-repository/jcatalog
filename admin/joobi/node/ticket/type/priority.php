<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Priority_type extends WTypes {
var $priority = array(
		'0'=>'Undefined',
		'10'=>'Low',
		'20'=>'Medium',
		'30'=>'High',
		'40'=>'Top',
						'101'=>'Basic - Low',
			'102'=>'Basic - Medium',
			'103'=>'Basic - High',
			'104'=>'Basic - Top',
			'111'=>'Standard - Low',
			'112'=>'Standard - Medium',
			'113'=>'Standard - High',
			'114'=>'Standard - Top',
			'121'=>'Premium - Low',
			'122'=>'Premium - Medium',
			'123'=>'Premium - High',
			'124'=>'Premium - Top',
			'131'=>'Ultimate - Low',
			'132'=>'Ultimate - Medium',
			'133'=>'Ultimate - High',
			'134'=>'Ultimate - Top',
						'201'=>'Basic - Low',
			'202'=>'Basic - Medium',
			'203'=>'Basic - High',
			'204'=>'Basic - Top',
			'211'=>'Standard - Low',
			'212'=>'Standard - Medium',
			'213'=>'Standard - High',
			'214'=>'Standard - Top',
			'221'=>'Premium - Low',
			'222'=>'Premium - Medium',
			'223'=>'Premium - High',
			'224'=>'Premium - Top',
			'231'=>'Ultimate - Low',
			'232'=>'Ultimate - Medium',
			'233'=>'Ultimate - High',
			'234'=>'Ultimate - Top'
		);
	protected function translatedType() {
		$typeA = array(
		0 => ' - ' . WText::t('1391713549PJNT') . ' - ',
		10 => WText::t('1227581114PJBW'),
		20 => WText::t('1227581114PJBX'),
		30 => WText::t('1227581114PJBY'),
		40 => WText::t('1206732429GMSU')
		);
		$licenseExist = WExtension::exist( 'license.node' );
		if ( WRoles::isAdmin( 'supportagent' ) && $licenseExist ) {
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
		}
		return $typeA;
	}
}