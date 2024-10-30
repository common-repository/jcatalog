<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_reply_saveedit_controller extends WController {
	function saveedit() {
		$trk=WGlobals::get( JOOBI_VAR_DATA, array(), '', 'array' );
		$replyid=WModel::get('ticket.reply','sid');
		$replytransid=WModel::get('ticket.replytrans','sid');
		$tkrid=$trk[$replyid]['tkrid'];
		$description=$trk[$replytransid]['description'];
		$myModel=WModel::get('ticket.reply');
		$myModel->whereE('tkrid',$tkrid);
		$reply=$myModel->load('o');
		$tkModel=WModel::get('ticket');
		$tkModel->whereE('tkid',$reply->tkid);
		$deadline=$tkModel->load( 'lr', 'deadline' );
		$status = true;
		$this->_model=WModel::get($replyid);
		$this->_model->publish='1';
		$this->_model->tkid=$reply->tkid;
		$this->_model->setChild('ticket.replytrans','description',$description);
		$this->_model->_x['status']=0;
		$this->_model->returnId();
		$response=$this->_model->save();
		if (!$response){
			$status = false;
		}
		$newTkrid=$this->_model->tkrid;
		$myModel->whereE( 'tkrid', $newTkrid );
		$myModel->setVal( 'authoruid', $reply->authoruid );
		$myModel->setVal( 'created', $reply->created );
		$myModel->setVal( 'timeresp', $reply->timeresp );
		$myModel->update();
		$myModel->whereE('tkrid',$tkrid);
		$myModel->setVal('publish','0');
		$myModel->update();
		$tkModel->whereE('tkid',$reply->tkid);
		$tkModel->setVal('deadline',$deadline);
		$tkModel->update();
		return true;
	}
}