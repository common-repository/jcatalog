<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Featured_model extends WModel {
	function extra() {
		if ( !empty($this->location) ) {
			$itemFeaturedM = WModel::get( 'item.featureditem' );
			$columnExists = $itemFeaturedM->columnExists( $this->location );
			if ( empty($columnExists) ) {
				$designColumnsM = WModel::get( 'design.columns' );
				$designColumnsM->dbtid = WModel::get( 'item.featureditem', 'dbtid' );
				$designColumnsM->name = $this->location;
				$designColumnsM->type = 1;
				$designColumnsM->mandatory = 1;
				$designColumnsM->default = 0;
				$designColumnsM->attributes = 1; 
				$designColumnsM->checkval = true;
				$designColumnsM->core = false;
				$designColumnsM->pkey = false;
				$designColumnsM->extra = false;
				$designColumnsM->export = false;
				$designColumnsM->save();
				$cache = WCache::get();
				$cache->resetCache( 'Model' );
			}
		}
		return true;
	}}