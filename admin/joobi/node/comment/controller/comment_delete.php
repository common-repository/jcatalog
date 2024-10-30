<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_delete_controller extends WController {
	function delete() {
		$id = WGlobals::getEID();				
		$score = WGlobals::get('score');			
		$realVal =WGlobals::get('returnid');			
		$etid = WGlobals::get('etid');				
		$commenttype = WApplication::getApp();
		$realVal = base64_decode($realVal);			
		$private = WGlobals::get('private');
		switch ($commenttype ) {
			case "jmarket":
			case "jstore":
				$commenttype = 10;
				break;
			case "japps":
			case "jcenter":
				$commenttype = 20;
				break;
			default:
				$commenttype = WGlobals::get('commenttype');
				break;
		}
		static $comNameC = null;
		if ( !empty($commenttype)) {
			if (!isset($comNameC )) $comNameC = WClass::get('comment.commenttype');
			$comName=$comNameC->commentType($commenttype);
		} else {
			$comName = null;
		}
		parent::delete();					
		if (!$private) {
			switch ($comName) {
				case 'product':
					if ($score > 1) {						
						$score=-($score);					
						$productM = WModel::get('product');
						$productM->whereE('pid',$etid);
						$productM->updatePlus('nbreviews',-1);
						$productM->updatePlus('votes',-1);
						$productM->updatePlus('score',$score);
						$productM->update();						
					}
					break;
				case 'content':
					if ( JOOBI_FRAMEWORK_TYPE == 'joomla' && $score > 1) {						
						$score=-($score);					
						$contentM = WModel::get('role.content');
						$contentM->whereE('id',$etid);
						$contentM->updatePlus('rating_num',-1);
						$contentM->updatePlus('rating_sum',$score);
					$contentM->update();						
					}
					break;
				default:
					break;
			}
		}
		if ( !empty($realVal) ) {
			WPages::redirect($realVal);						
		} else {
			WPages::redirect('controller=comment&task=listing');
		}
		return true;
	}
}