<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class WPane_list extends WPane {
	private $htmlContent = ''; 
	private $htmlCell = ''; 
	private $_params = null;
	function __construct($params=array()) {
		parent::__construct($params);
		$this->startPane( $params );
	}
	public function startPane($params) {
		$this->htmlContent = '';
	}
	public function endPane() {
		$this->htmlContent .= '';
	}
	public function startPage() {
			$this->htmlContent .= '<div class="form-group w100">';
	}
	private function endPage() {
		$this->htmlContent .= WGet::$rLine . '</div>' . WGet::$rLine;
	}
	function cell($content,$position='') {
		$this->htmlCell .= $content;
	}
	public function line($params=null) {
		if ( empty($this->_params) ) $this->_params = $params;
		$this->startPage();
		$this->htmlContent .= $this->htmlCell;
		$this->endPage();
		$this->htmlCell = '';
	}
	public function add($content) {
		$this->htmlContent .= $content;
	}
	public function body() {
		$this->endPane();
		$this->content = $this->htmlContent;
		$this->htmlContent = '';
	}
	public function miseEnPageTwo(&$params,$value) {
		$this->_params = $params;
		$name = $params->name;
		$title='';
		if ( 'edit' == WPref::load( 'PMAIN_NODE_DIRECT_MODIFY' ) ) {
			$outputDirectEditC = WClass::get( 'output.directedit' );
			$editButton = $outputDirectEditC->editView( 'form', $params->yid, $params->fid );
			if ( !empty($editButton) ) $this->cell( $editButton , 'edit' );
		} elseif ( 'translate' == WPref::load( 'PMAIN_NODE_DIRECT_MODIFY' ) ) {
			$outputDirectEditC = WClass::get( 'output.directedit' );
			$editButton = $outputDirectEditC->translateView( 'form', $params->yid, $params->fid, $name );
			if ( !empty($editButton) ) $this->cell( $editButton , 'edit' );
		}
		$tip = $params->description;
		$required = $params->required;
		$notitle = 0;
		if ( isset($params->notitle) ) $notitle = $params->notitle;
		if ( isset($params->flip) ) $flip=$params->flip;
		if ( isset($params->lbreak) ) $lbreak=$params->lbreak;
		$tipsType = ( !empty( $params->tipstyle ) ? $params->tipstyle : false );
		if ( empty($tipsType) && isset(WRender_Form_class::$formTipStyle) ) $tipsType = WRender_Form_class::$formTipStyle;
				if ( $notitle == 0 || $notitle == 5 ) {	
			$req = '<span class="star"> *</span>';
			if ( $required==1 && $params->editItem ) $titleNude = $name . $req;
			else $titleNude = $name;			
			if ( $tip && ! $tipsType ) {	
				$toolTipsO = WPage::newBluePrint( 'tooltips' );
				$toolTipsO->tooltips = $tip;
				$toolTipsO->title = $name;
				if ($required==1 && $params->editItem ) $toolTipsO->text = $name . $req;
				else $toolTipsO->text = $name;
				$toolTipsO->id = $params->idLabel;
				$toolTipsO->bubble = true;
				if ( empty($params->forceTitle) && in_array( WView::$titleDisplay[$params->yid], array( 'hide', 'placeHolder' ) ) ) {
					$Labelclass = ' class="sr-only"';
					$hidenTitle = WGet::$rLine . '<label' . $Labelclass . ' for="' . $params->idLabel . '">' . $titleNude . '</label>' . WGet::$rLine;
					$title .= $hidenTitle;
					$value = $hidenTitle . $value;				
				} else {
					if ( 'form-horizontal' == WView::$directionForm[$params->yid] ) {
						$toolTipsO->class = 'col-sm-2 control-label';
					} else {
						$toolTipsO->class = '';
					}
					$s = WPage::renderBluePrint( 'tooltips', $toolTipsO );
					$title .= $s;					
				}
			} else {
				$Labelclass = '';
				if ( empty($params->forceTitle) && in_array( WView::$titleDisplay[$params->yid], array( 'hide', 'placeHolder' ) ) ) {
					$Labelclass = ' class="sr-only"';
					$hidenTitle = WGet::$rLine . '<label' . $Labelclass . ' for="' . $params->idLabel . '">' . $titleNude . '</label>' . WGet::$rLine;
					$title .= $hidenTitle;
					$value = $hidenTitle . $value;
				} else {
					if ( 'form-horizontal' == WView::$directionForm[$params->yid] ) {
						$Labelclass = ' class="col-sm-2 control-label"';
					} else {
						$Labelclass = '';
					}
					$title .= WGet::$rLine . '<label' . $Labelclass . ' for="' . $params->idLabel . '">' . $titleNude . '</label>' . WGet::$rLine;
				}
			}
		} else {
			$title = '<div class="col-sm-2">&nbsp;</div>';
		}
		if ( $tipsType ) {
			if ( substr( $value, 0, 23 ) == '<div class="col-sm-10">' ) {
				switch( $tipsType ) {
					case 'abovefield':
						$value = '<div class="col-sm-10"><div class="text-muted tipsAbove">' . $tip . '</div>' . substr( $value, 23 );
						break;
					case 'belowfield':
						$value = substr( $value, 0, -6 ) . '<div class="text-muted tipsBelow">' . $tip . '</div></div>';
						break;
					default:
						break;
				}
			}
		}
		$this->td_c = 'key' . $params->spantit;
		if ( !empty($flip) ) {
			if (!$params->spantit){
				if ( !$params->spanval ) {
					$this->cell( $value, 'right' );
					$this->cell( $title, 'left' );
				} else {
					$this->cell( $title, 'left' );
				}
			}else {
				$this->cell( $value, 'right' );
			}
		} else {
			if ( !$params->spantit ) {
				if ( !$params->spanval ) {
					$this->cell( $title, 'left' );
					$this->cell( $value, 'right' );
				} else {
					$this->cell($title, 'left' );
				}
			}else {
				$this->cell( $value, 'right' );
			}
		}
		if ( isset($params->extracol) ) $this->cell( $tip, 'third' );
		return $this->line();
	}
}