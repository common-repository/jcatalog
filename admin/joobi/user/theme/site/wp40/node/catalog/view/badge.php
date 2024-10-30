<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
	$elementParams = $this->getContent( 'elementParams' );
	if ( !empty($elementParams->mouseOver) ) {
		$IdOverlay = 'overlay' . $elementParams->uniqueID;
		$idMain = 'main' . $elementParams->uniqueID;
		$mouseOverOuterImg = 'onmouseover="displayVignette(\''.$IdOverlay.'\');"';
		if ( !empty($elementParams->mouseOver->secondimage) ) {
			$secondImage = $this->getContent( 'secondImage' );
		}	} else {
		$mouseOverOuterImg = '';
	}	if ( !empty($elementParams->mouseOver->imagezoomeffect) ) unset($elementParams->mouseOver->imagezoomeffect);
	if ( !empty($elementParams->mouseOver->secondimage) ) unset($elementParams->mouseOver->secondimage);
	if ( !empty($elementParams->mouseOver) && ! get_object_vars($elementParams->mouseOver) ) {
		unset( $elementParams->mouseOver );
	}	
	$borberColor = $this->getContent( 'borderColor', 'default' );
	$style = $this->getContent( 'style' );
	if ( !empty( $style ) ) $style = ' style="' . $style . '"';
?>
<div class="<?php echo $this->getContent('containerClass'); ?> catalogItem itemStandard<?php echo $this->getContent('classSuffix'); ?>">
	<?php 
	if ( $badgeA = $this->getContent( 'badgesA' ) ) {
		foreach( $badgeA as $uBadge ) {
			echo $uBadge;
		}	}	?>
	<?php if ( !empty( $elementParams->borderShow ) ): ?>
		<div class="panel panel-<?php echo $borberColor; ?>">
			<div class="panel-body"<?php echo $style; ?>>
				<?php else: ?>
				<div class="itemDefault"<?php echo $style; ?>>
					<?php endif; ?>
				<?php if ( !empty($elementParams->mouseOver) ) : ?>
					<div id="<?php echo $IdOverlay; ?>" class="badgeVignette">
						<div class="curveTopLeft">
							<div class="curveTopRight">
								<div class="curveTopCenter"></div>
							</div>
						</div>
						<div class="curveMidLeft">
							<div class="curveMidRight">
								<div class="curveMidCenter">
									<div class="siteRightInfo socialOverlay">
										<?php
											if ( !empty($elementParams->mouseOver->itmmouseover) && $name = $this->getContent('linkName') ) : echo '<h4 class="linkName">' . $name . '</h4>'; endif;
											if ( !empty($elementParams->mouseOver->rating) && $rating = $this->getContent('rating') ) : echo '<div class="siteRating">' . $rating . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->review) && $reviews = $this->getContent('nbReviews') ) : echo '<div class="siteReview">' . $reviews . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->social) && $this->getContent('share') ) :
												echo '<div class="badgeShare">';
												if ( WPage::renderBluePrint( 'socialicons', 'container' ) ) echo '<div class="btn-group">';
												if ( $linkFavorite = $this->getContent('linkFavorite') ) : echo $linkFavorite; endif;
												if ( $linkWish = $this->getContent('linkWish') ) : echo $linkWish; endif;
												if ( $linkWatch = $this->getContent('linkWatch') ) : echo $linkWatch; endif;
												if ( $linkLike = $this->getContent('linkLike') ) : echo $linkLike; endif;
												if ( $linkViews = $this->getContent('linkViews') ) : echo $linkViews; endif;
												if ( $linkShare = $this->getContent('linkShare') ) : echo $linkShare; endif;
												if ( WPage::renderBluePrint( 'socialicons', 'container' ) ) echo '</div>';
												echo '</div>';
												echo '<div class="badgeShareOnline">';
												if ( WPage::renderBluePrint( 'socialicons', 'container' ) ) echo '<div class="btn-group">';
												if ( $linkFacebook = $this->getContent('linkFacebook') ) : echo $linkFacebook; endif;
												if ( $linkTwitter = $this->getContent('linkTwitter') ) : echo $linkTwitter; endif;
												if ( $googlePlus1 = $this->getContent('linkGoogle') ) : echo $googlePlus1; endif;
												if ( $linkShare = $this->getContent('linkShare') ) : echo $linkShare; endif;
												if ( WPage::renderBluePrint( 'socialicons', 'container' ) ) echo '</div>';
												echo '</div>';
												endif;
											if ( !empty($elementParams->mouseOver->bid) && $highestBid = $this->getContent('highestBid') ) : echo '<div class="siteBid">' . $highestBid . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->price) && $convertedPrice = $this->getContent('convertedPrice') ) : echo '<div class="sitePrice">' . $convertedPrice . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->vendor) && $vendor = $this->getContent('vendorName') ) : echo '<div class="siteVendor">'.$this->getContent('vendorBy').': <a href="'.$this->getContent('vendorLink').'">' . $vendor . '</a>' . $this->getContent('syndicateVendorName') . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->introduction) && $intro = $this->getContent('introduction') ) : echo '<div class="siteIntro">' . $intro . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->description) && $desc = $this->getContent('description') ) : echo '<div class="siteDesc">' . $desc . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->askquestion) && $question = $this->getContent('askQuestionLink') ) : echo '<div class="siteQuestion">'.$question . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->addcart) && $cart = $this->getContent('cart') ) : echo '<div class="siteCart">' . $cart . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->readmore) && $readMore = $this->getContent('readMoreLink') ) : echo '<div class="siteReadMore">' . $readMore . '</div>'; endif;
											if ( !empty($elementParams->mouseOver->preview) && $preview = $this->getContent('preview') ) :
												echo '<div class="sitePreview' . $this->getContent('previewType') .'">' . $preview . '</div>';
												endif;
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="curveBotLeft">
							<div class="curveBotRight">
								<div class="curveBotCenter"></div>
							</div>
						</div>
						<div id="o_info_<?php echo $IdOverlay; ?>" style="display:none" name="<?php echo $this->getContent('mediaID').'/'.$this->getContent('playerType'); ?>"></div>
						<div id="o_1_<?php echo $IdOverlay; ?>" onmouseout="hideVignette('<?php echo $IdOverlay; ?>','<?php echo $this->getContent('mediaID'); ?>','<?php echo $this->getContent('playerType'); ?>');" style='width:0px;height:5px;position:absolute;top:0;letf:0;z-index:999999;display:none;'></div>
						<div id="o_2_<?php echo $IdOverlay; ?>" onmouseout="hideVignette('<?php echo $IdOverlay; ?>','<?php echo $this->getContent('mediaID'); ?>','<?php echo $this->getContent('playerType'); ?>');" style='width:0px;height:5px;position:absolute;top:0;letf:0;z-index:999999;display:none;'></div>
						<div id="o_3_<?php echo $IdOverlay; ?>" onmouseout="hideVignette('<?php echo $IdOverlay; ?>','<?php echo $this->getContent('mediaID'); ?>','<?php echo $this->getContent('playerType'); ?>');" style='width:5px;height:0px;position:absolute;top:0;letf:0;z-index:999999;display:none;'></div>
						<div id="o_4_<?php echo $IdOverlay; ?>" onmouseout="hideVignette('<?php echo $IdOverlay; ?>','<?php echo $this->getContent('mediaID'); ?>','<?php echo $this->getContent('playerType'); ?>');" style='width:5px;height:0px;position:absolute;top:0;letf:0;z-index:999999;display:none;'></div>
					</div>
					<?php endif; ?>
				<?php if ( $imagePath = $this->getContent('thumbnailPath') ) : ?>
					<div class="siteImage vertiMrgn">
						<?php
							$imageWidth = $this->getContent('imageWidth');
							$imageHeight = $this->getContent('imageHeight');
							if ( !empty( $imageWidth) && !empty($imageHeight) ) $imageSize = ' width="'.$imageWidth.'" height="'.$imageHeight.'"';
							else $imageSize = '';
							$useGallery = $this->getContent('galleryLink');
							if ( !empty($secondImage->thumbnailPath) ) {
								if ( $useGallery ) {
									echo '<a rel="prettyPhoto[gallery]' . $useGallery . '" href="' . $imagePath . '"><img alt="' . WGlobals::filter( $this->getContent('name'), 'string' ) . '" border="0" src="'. $imagePath . '"'.$imageSize.' onmouseover="displayVignette(\''.$IdOverlay.'\',this,\''.$secondImage->thumbnailPath.'\')" onmouseout="this.src=\'' . $imagePath . '\'"/></a>';
									$galleryHTML = $this->getContent('galleryHTML');
									if ( !empty($galleryHTML) ) echo '<div style="display:none;">' . $galleryHTML . '</div>';
								} else {
									echo '<a href="' . $this->getContent('pageLink') . '"><img alt="' . WGlobals::filter( $this->getContent('name'), 'string' ) . '" border="0" src="'. $imagePath . '"'.$imageSize.' onmouseover="displayVignette(\''.$IdOverlay.'\',this,\''.$secondImage->thumbnailPath.'\')" onmouseout="this.src=\'' . $imagePath . '\'"/></a>';
								}							} else {
								if ( $useGallery ) {
									echo '<a rel="prettyPhoto[gallery]' . $useGallery . '" href="' . $imagePath . '"><img ' . $mouseOverOuterImg . ' alt="' . WGlobals::filter( $this->getContent('name'), 'string' ) . '" border="0" src="'. $imagePath . '"'.$imageSize.' /></a>';
									$galleryHTML = $this->getContent('galleryHTML');
									if ( !empty($galleryHTML) ) echo '<div style="display:none;">' . $galleryHTML . '</div>';
								} else {
									echo '<a href="' . $this->getContent('pageLink') . '"><img ' . $mouseOverOuterImg . ' alt="' . WGlobals::filter( $this->getContent('name'), 'string' ) . '" border="0" src="'. $imagePath . '"'.$imageSize.' /></a>';
								}							}						?>
					</div>
					<?php endif; ?>
				<?php if ( empty($elementParams->mouseOver->itmmouseover) && $name = $this->getContent('linkName') ) : echo '<h4 class="siteName">' . $name . '</h4>'; endif; ?>
				<?php
					if ( empty($elementParams->mouseOver->introduction) && $intro = $this->getContent('introduction') ) : echo '<div class="siteIntro vertiMrgn">' . $intro . '</div>'; endif;
					if ( empty($elementParams->mouseOver->readmore) && $readMore = $this->getContent('readMoreLink') ) : echo '<div class="siteReadMore vertiMrgn">' . $readMore . '</div>'; endif;
					if ( empty($elementParams->mouseOver->description) && $desc = $this->getContent('description') ) : echo '<div class="siteDesc vertiMrgn">' . $desc . '</div>'; endif;
				?>
				<div class="siteRightInfo">
					<?php
						if ( empty($elementParams->mouseOver->rating) && $rating = $this->getContent('rating') ) : echo '<div class="siteRating">' . $rating . '</div>'; endif;
						if ( empty($elementParams->mouseOver->review) && $reviews = $this->getContent('nbReviews') ) : echo '<div class="siteReview">' . $reviews . '</div>'; endif;
						if ( empty($elementParams->mouseOver->social) && $this->getContent('share') ) :
							$linkFavorite = $this->getContent('linkFavorite');
							$linkWish = $this->getContent('linkWish');
							$linkWatch = $this->getContent('linkWatch');
							$linkLike = $this->getContent('linkLike');
							$linkViews = $this->getContent('linkViews');
							$linkFacebook = $this->getContent('linkFacebook');
							$linkTwitter = $this->getContent('linkTwitter');
							$googlePlus1 = $this->getContent('linkGoogle');
							$linkShare = $this->getContent('linkShare');
							if ( $linkFavorite || $linkWish || $linkWatch || $linkLike || $linkViews ) :
								echo '<div class="badgeShare vertiMrgn">';
								if ( WPage::renderBluePrint( 'socialicons', 'container' ) ) echo '<div class="btn-group">';
								if ( $linkFavorite ) : echo $linkFavorite; endif;
								if ( $linkWish ) : echo $linkWish; endif;
								if ( $linkWatch ) : echo $linkWatch; endif;
								if ( $linkLike ) : echo $linkLike; endif;
								if ( $linkViews ) : echo $linkViews; endif;
								if ( WPage::renderBluePrint( 'socialicons', 'container' ) ) echo '</div>';
								echo '</div>';
								endif;
							if ( $linkFacebook || $linkTwitter || $googlePlus1 || $linkShare ) :
								echo '<div class="badgeShareOnline vertiMrgn">';
								if ( WPage::renderBluePrint( 'socialicons', 'container' ) ) echo '<div class="btn-group">';
								if ( $linkFacebook ) : echo $linkFacebook; endif;
								if ( $linkTwitter ) : echo $linkTwitter; endif;
								if ( $googlePlus1 ) : echo $googlePlus1; endif;
								if ( $linkShare ) : echo $linkShare; endif;
								if ( WPage::renderBluePrint( 'socialicons', 'container' ) ) echo '</div>';
								echo '</div>';
								endif;
							endif;
						if ( $unpublishDate = $this->getContent('unpublishDate') ) : echo '<div class="unpublishDate vertiMrgn">' . $unpublishDate . '</div>'; endif;
						if ( $discountExpire = $this->getContent('discountExpireDate') ) : echo '<div class="catalogDiscountCount vertiMrgn">' . $discountExpire . '</div>'; endif;
						if ( $highestBid = $this->getContent('highestBid') ) : echo '<div class="siteBid vertiMrgn">' . $highestBid . '</div>'; endif;
						if ( $countDown = $this->getContent('countDown') ) : echo '<div class="siteCountDown vertiMrgn">' . $countDown . '</div>'; endif;
						if ( empty($elementParams->mouseOver->price) && $convertedPrice = $this->getContent('convertedPrice') ) : echo '<div class="sitePrice vertiMrgn">' . $convertedPrice . '</div>'; endif;
						if ( $categoryName = $this->getContent('categoryName') ) : echo '<div class="siteCategory vertiMrgn">' . $this->getContent('categoryLabel') . ': <a href="' . $this->getContent('categoryLink') . '">' . $categoryName . '</a>' . '</div>'; endif;
						if ( $vendor = $this->getContent('vendorName') ) : echo '<div class="siteVendor vertiMrgn">'.$this->getContent('vendorBy').': <a href="' . $this->getContent('vendorLink') . '">' . $vendor . '</a>' . $this->getContent('syndicateVendorName') . '</div>'; endif;
						if ( empty($elementParams->mouseOver->askquestion) && $question = $this->getContent('askQuestionLink') ) : echo '<div class="siteQuestion vertiMrgn">'.$question . '</div>'; endif;
						if ( $manufacturer = $this->getContent('manufacturerName') ) : echo '<div class="siteVendor vertiMrgn">' . $this->getContent('manufacturerBy') . ': ' . ( ( $this->getContent('manufacturerLink') ) ? '<a href="' . $this->getContent('manufacturerLink') . '">' . $manufacturer . '</a>' : $manufacturer ) . '</div>'; endif;
						if ( $quantity = $this->getContent('quantity') ) : echo '<div class="siteQuantity vertiMrgn">' . $quantity . '</div>';
						elseif ( empty($elementParams->mouseOver->addcart) && $cart = $this->getContent('cart') ) : echo '<div class="siteCart vertiMrgn">' . $cart . '</div>'; endif;
					?>
				</div>
				<?php if ( empty($elementParams->mouseOver->preview) && $preview = $this->getContent('preview') ) : ?>
					<div class="sitePreview<?php echo $this->getContent('previewType'); ?>">
						<?php echo $preview; ?>
					</div>
				<?php endif; ?>
				<?php if ( !empty( $elementParams->borderShow ) ): ?>
				</div>
			</div>
			<?php else: ?>
		</div>
		<?php endif; ?>
</div>
