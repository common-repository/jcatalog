<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_add_controller extends WController {
	function add() {
		$project = WGlobals::get( 'project' );
		if ( !empty( $project ) ) {
			$project = trim( $project );
			$projectM = WModel::get('project');
			$projectM->whereE( 'namekey', $project );
			$pjid = $projectM->load( 'lr', 'pjid' );
			WGlobals::set( 'pjid', $pjid );
		}
		WGlobals::set( 'tickets', 'startwriting', time() );
		$uid = WUser::get('uid');
		if ( WUser::isRegistered() ) {
			$this->setView( 'ticket_form_fe' );
		} else {
			if ( WGlobals::checkCandy(50) && WPref::load( 'PTICKET_NODE_NOREGISTERED') ) {
								$this->setView( 'ticket_add_fe_not_registered' );
			} else {
				$this->userW('1237825578IRQC');
				$this->setView( 'ticket_frontend_public' );
			}
		}
		return true;
	}
}