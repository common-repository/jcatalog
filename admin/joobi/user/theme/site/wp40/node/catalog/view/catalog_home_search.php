<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....'); ?>
<div id="catalogHomeSearch">
	<?php
		$search = $this->getContent( 'search' );
		$rss = $this->getValue( 'rss' );
		$data = WPage::newBluePrint( 'widgetbox' );
		$data->content = $search;
		if ( !empty($rss) ) $data->headerRightA[] = $rss;
	?>
	<div class="catalog-search clearfix">
	<section>
	<?php echo WPage::renderBluePrint( 'widgetbox', $data ); ?>
	</section>
	</div>
	<?php if ( WPref::load( 'PCATALOG_NODE_SEARCHSHOWMAP' ) && $itemsMap = $this->getValue('itemsmap') ) :
	$showItemsMapTitle = WPref::load( 'PCATALOG_NODE_ITMAPTITLE' );
	$data = WPage::newBluePrint( 'widgetbox' );
	$data->content = $itemsMap;
	if ( $showItemsMapTitle ) $data->title = $this->getValue( 'itemsMapTitle' );
	?>
	<div class="siteItemsMap hidden-xs clearfix">
		<section>
		<?php echo WPage::renderBluePrint( 'widgetbox', $data ); ?>
		</section>
	</div>
	<?php endif; ?>
	<?php if ( $items = $this->getValue('items') ) :
	$showItemsTitle = WPref::load( 'PCATALOG_NODE_ITMTITLE' );
	$data = WPage::newBluePrint( 'widgetbox' );
	$data->content = $items;
	if ( $showItemsTitle ) $data->title = $this->getValue( 'itemTitle' );
	$data->headerRightA[] = $this->getValue( 'itemsPicklist' );
	$itemsPagi = $this->getValue( 'itemsPagination' );
	if ( !empty($itemsPagi) ) {
		$data->headerCenterA[] = $itemsPagi;
		$data->bottomCenterA[] = $itemsPagi;
	}
	?>
	<div class="siteItems clearfix">
		<section>
		<?php echo WPage::renderBluePrint( 'widgetbox', $data ); ?>
		</section>
	</div>
	<?php endif; ?>
</div>