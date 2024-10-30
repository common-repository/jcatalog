<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class WRender_Form_class extends Theme_Render_class {
	public static $formDirection = null;
	public static $formTipStyle = null;
	public function render() {
		if ( !isset(self::$formDirection) ) {
			self::$formDirection = $this->value( 'form.direction' );
			self::$formTipStyle = $this->value( 'form.tooltip' );
		}
		return self::$formDirection;
	}
}
class WForms_default extends WForms_standard {
	function preCreate() {
		if ( in_array( WView::$directionForm[$this->yid], array( 'form-horizontal', 'form-inline' ) ) ) {
			if ( isset( $this->element->classes ) ) {
				$this->element->classes = 'form-control ' . $this->element->classes;
			} else {
				if ( empty( $this->element->spantit ) ) {
					$this->element->classes = 'form-control';
				}
			}
		}
		return true;
	}
	function preShow() {
		if ( in_array( WView::$directionForm[$this->yid], array( 'form-horizontal', 'form-inline' ) ) ) {
			if ( isset( $this->element->classes ) ) {
				$this->element->classes = $this->element->classes;
			} else {
				$this->element->classes = '';
			}
		}
		return true;
	}
	protected function wrapperCreate() {
		if ( in_array( WView::$directionForm[$this->yid], array( 'form-horizontal', 'form-inline' ) ) ) {
			$bootstrapClass = ( 17 == $this->subtype ? '' : 'col-sm-9' );
		switch( $this->element->type ) {
			case 'output.select':
				$this->content = '<div class="' . $bootstrapClass . ' pickList">' . $this->content . '</div>';
				break;
			case 'main.trans':
			case 'main.transarea':
				$ct = $this->content;
				$this->content = '<div';
				if ( !empty($bootstrapClass) ) $this->content .= ' class="' . $bootstrapClass . '"';
				$this->content .= '><div class="input-append">' . $ct . '</div></div>';
				break;
			default:
				if ( empty( $this->element->spantit ) ) {
					$content = '<div';
					if ( !empty($bootstrapClass) ) $content .= ' class="' . $bootstrapClass . '"';
					$this->content = $content . '>' . $this->content . '</div>';
				} else {
					$this->content = '<div>' . $this->content . '</div>';
				}
				break;
		}
		}
	}
	protected function wrapperShow() {
		switch( $this->element->type ) {
			default:
				if ( empty( $this->element->spantit ) ) {
					$bootstrapClass = ( 17 == $this->subtype ? '' : 'col-sm-10' );
					$content = '<div';
					if ( !empty($bootstrapClass) ) $content .= ' class="' . $bootstrapClass . '"';
					$this->content = $content . '>' . $this->content . '</div>';
				} else {
					$this->content = '<div>' . $this->content . '</div>';
				}
				break;
		}
	}
}