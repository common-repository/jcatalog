<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
$imagePath = $this->getContent('imagePath');
$colVal = ( !empty( $imagePath ) ? 'col-sm-6' : 'col-xs-12' );
$elementParams = $this->getContent( 'elementParams' );
$id = $this->getContent( 'htmlID' );
$itemA = $this->getContent( 'ItemListA' );
if ( !empty($id) ) $idHTML = 'id="' . $id . '" ';
else $idHTML = '';
$htmlChild = $this->getContent( 'htmlChild' );
$subCatStyle = $this->getContent( 'subCategoryStyle' );
$isSubCat = $this->getContent( 'isSubCategory' );
$addSpan = $this->getContent( 'addSpanIcon' );$SubClass = $this->getContent( 'subClass' ); $SubCollapse = $this->getContent( 'subCollapse' ); $AnotherClass = $this->getContent( 'addAnotherClass' );$addSpanList = $this->getContent( 'addSpanforList' );$addSpanSubGridList = $this->getContent( 'addSpanforSubList' );
$symb = '>';
$plus = '+';
?>
<div <?php echo $idHTML; ?>class="<?php echo $this->getContent('containerClass'); ?> <?php if (!empty( $AnotherClass )) echo 'Flop'; ?> <?php if ( !empty( $SubCollapse )) echo 'collapseCat'; ?> catalogCat categoryBig<?php echo $this->getContent('classSuffix'); ?>">
	<?php if ( !empty( $elementParams->borderShow ) ): ?>
	<div class="panel panel-<?php echo $this->getContent( 'borderColor', 'default' ); ?>">
		<div class="panel-body">
<?php endif; ?>
	<div class="imageAndName <?php if (!empty($addSpan)) echo 'open'?><?php if (!empty($SubCollapse)) echo 'open'?>">
		<?php if ( !empty( $isSubCat )) echo '<span class="treeSymb">' . $symb . '</span>'; ?>
		<?php if ( !empty($addSpanList)) echo '<span class="treeSymb">' . $symb . '</span>'; ?>
		<?php if ( $imagePath ) : ?>
		<div class="catsiteImage listSiteImage">
		<?php 			$imageWidth = $this->getContent('imageWidth');
			$imageHeight = $this->getContent('imageHeight');
			if ( !empty( $imageWidth) && !empty($imageHeight) ) $imageSize = ' width="'.$imageWidth.'" height="'.$imageHeight.'"';
			else $imageSize = '';
			if ( $this->getContent('imageLinked') ) {
				echo '<a href="'.$this->getContent('pageLink').'"><img alt="' . WGlobals::filter( $this->getContent('name'), 'string' ) . '" border="0" src="'. $imagePath . '"'.$imageSize.' /></a>';
			} else {
				echo WPage::createPopUpLink( $this->getContent('imagePath'), '<img alt="' . WGlobals::filter( $this->getContent('name'), 'string' ) . '" border="0" src="'. $imagePath . '"'.$imageSize.' />', ($this->getContent('originWidth')*1.15), ($this->getContent('originHeight')*1.15) );
			}			?>
		</div>
		<?php endif; ?>
		<h4 class="siteName listSiteName"><?php if ( $name = $this->getContent('linkName') ) : echo $name; endif; ?>
		<?php if ( $nbItems = $this->getContent('nbItems') )  echo ' <span class="badge">' . $nbItems . '</span>'; ?>
		<?php if ( $nbItemsSub = $this->getContent('nbItemSub') )  echo ' <span class="badge">' . $nbItemsSub . '</span>'; ?>
		</h4>
		<?php if ( !empty( $addSpan )) echo '<em class="fa fa-plus-circle icon-plus em-icon"></em>'; ?>
		<?php if ( !empty( $SubCollapse )) echo '<em class="fa fa-plus-circle icon-plus em-icon"></em>'; ?>
		<?php
		if ( $desc = $this->getContent('description') ) : echo '<div class="siteDesc">' . $desc . '</div>'; endif;
		?>
	</div>
	<?php if ( $itemA ) : ?>
	<div class="clearfix">
		<ul class="catItemList">
		<?php foreach( $itemA as $catItem ) :
			if ( !empty( $catItem->ItemThumbnailPath ) ) {
				?>
				<li style="list-style-type: none;">
				<h6 style="margin-left:-19px;" class="siteName"><img border="0" src="<?php echo $catItem->ItemThumbnailPath; ?>" width="'15" height="15" />
				<?php echo $catItem->linkName; ?></h6>
				</li>
				<?php
			} else {
				?>
				<li><h6 class="siteName"><?php echo $catItem->linkName; ?></h6></li>
				<?php
			}			endforeach; ?>
		</ul>
	</div>
	<?php endif; ?>
		<?php if ( !empty($htmlChild) && $subCatStyle === 'catCollapse' ) :?>
		<div class="<?php echo 'collapseCat'; ?> hide">
			<?php echo $htmlChild; ?>
		</div>
	<?php endif; ?>
<?php if ( !empty( $elementParams->borderShow ) ): ?>
	</div>
</div>
<?php endif; ?>
<?php if ( !empty($htmlChild) && $subCatStyle === 'catTree' ) : echo $htmlChild;
endif; ?>
<?php if ( !empty($htmlChild) && $subCatStyle === 'catGrid' ) : echo $htmlChild;
endif; ?>
<?php if ( !empty($htmlChild) && $subCatStyle === 'catPopover' ) :?>
	<div class="<?php if ( !empty($SubClass) ) echo 'popoverCat'; ?>">
	<?php echo $htmlChild; ?>
	</div>
<?php endif; ?>
</div>