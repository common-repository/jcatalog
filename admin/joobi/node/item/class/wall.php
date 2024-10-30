<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Wall_class extends WClasses {
	private $instance = null;
	private $installed = false;
	private $_facebook = null;
	private $_twitter = null;
	private $_availableAPI = array( 'facebook', 'twitter' );
	function __construct() {
		$social = WPref::load( 'PCATALOG_NODE_SOCIALECOMMERCE' );
		if ( !empty($social) ) {
						$this->instance = WClass::get( $social . 'wall', null, 'class', false );
						if ( !empty( $this->instance ) ) $this->installed = $this->instance->checkInstalled();
		}
		foreach( $this->_availableAPI as $api ) {
			$property = '_' . $api;
			$pref = 'PCATALOG_NODE_SOCIAL' . strtoupper( $api );
			$this->$property = WPref::load( $pref );
			if ( $this->$property ) {
				$this->installed = true;
			}				
		}		
	}
	public function available() {
		return $this->installed;
	}
	public function postWall($post=null) {
		if ( ! $this->installed ) return false;
		if ( ! empty($this->instance) ) {
						if ( !empty($post->callingFunction) ) {
								$pref = 'PCATALOG_NODE_' . strtoupper( $post->callingFunction );
				$val = WPref::load( $pref );
				if ( !empty($val) ) $this->instance->postWall( $post );
			}				
		}		
		$callingFunction = $post->callingFunction;
		$mainCredentialsC = WClass::get( 'main.credentials' );
		foreach( $this->_availableAPI as $api ) {
			$property = '_' . $api;
			if ( ! $this->$property ) continue;
			$crednetialO = $mainCredentialsC->loadFromType( $api );
						if ( empty( $crednetialO->$callingFunction ) ) continue;
						$mainAPIC = WClass::get( 'main.' . $api, null, 'class', false );
			if ( empty( $mainAPIC ) ) continue;
			$mainAPIC->postWall( $post, $crednetialO );
		}		
	}
}