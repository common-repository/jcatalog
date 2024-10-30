<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....'); ?>
<div id="checkOutPage" class="clearfix">
	<div id="processTail" class="clearfix">
		<?php echo $this->getValue( 'processtail' ); ?>
	</div>
	<div class="checkOutList">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-condensed">
				<thead>
					<tr>
					<th class="cartName">
						<?php echo $this->getValue( 'tableHeaderName' ); ?>
					</th>
					<th class="cartUnitPrice">
						<?php echo $this->getValue( 'tableHeaderUnit' ); ?>
					</th>
					<th class="cartQuantity" style="text-align: center;">
						<?php echo $this->getValue( 'tableHeaderQty' ); ?>
					</th>
					<th class="cartSubTotal" style="text-align: center;">
						<?php echo $this->getValue( 'tableHeaderSubTotal' ); ?>
					</th>
					</tr>
				</thead>
				<tbody>	
					<?php 
					$boxProductsA = WGlobals::get( 'oneCartBoxProductsA', array(), 'global' );
					if ( !empty($boxProductsA) ) :
						foreach( $boxProductsA as $product ):
						?>
					<tr>
					<td>
					<?php
						if ( !empty($product->thumbnail) ) {
							$data = WPage::newBluePrint( 'image' );
							$data->location = $product->thumbnail;
							$data->id = 'product' . $product->pid;
							$data->text = $product->name;
							$data->align = 'left';
							$data->class = 'productImg';
							echo '<div class="clearfix">' . WPage::renderBluePrint( 'image', $data ) . '</div>';
						}						
						$link = WPages::linkHome( 'controller=catalog&task=show&eid=' . $product->pid, WPage::getPageId( 'catalog' ) );
						echo '<span class="productName"><a href="' . $link . '">' . $product->name . '</a></span>';
					?>							
					<?php
						if ( !empty($product->AttributesA) ) {
							echo '<ul class="productAttrib">';
							foreach( $product->AttributesA as $attrib ) {
								echo '<li class="attribName">' . $attrib->optname . ': ' . $attrib->optvaluename;
								if ( WPref::load( 'PCART_NODE_ATTRIBUTE_PRICE' ) && $attrib->price > 0 ) {
									echo ': ' . WTools::format( $attrib->price, 'currency', WCart::$currency );
								}								echo '</li>';
							}							echo '</ul>';
						}					?>							
					<?php
						if ( !empty($product->DiscountA) ) {
							echo '<ul class="productDiscount">';
							foreach( $product->DiscountA as $discount ) {
								if ( empty( $discount->name ) ) continue;
								echo '<li class="discountName">' . $discount->name;
								if ( !empty($discount->discount) && $discount->discount > 0 ) {
									echo ': ' . WTools::format( $discount->discount, 'currency', WCart::$currency );
									if ( !empty($discount->rate) && $discount->rate > 0 ) {
										echo ' (' . WTools::format( $discount->rate ) . '%)';
									}								} elseif ( !empty($discount->rate) && $discount->rate > 0 ) {
									echo ': ' . $discount->rate . '%';
								}								echo '</li>';
							}							echo '</ul>';
						}					?>							
					</td>
					<td>
					<?php
						if ( !empty($product->priceTaxMessage) ) {
							if ( $product->discountPrice <= 0 ) {
								echo '<div class="productPrice">' . WTools::format( $product->priceUnit - $product->taxPrice, 'currency', WCart::$currency ) . '</div>';
								echo '<div class="taxMessage">' . $product->priceTaxMessage . '</div>';
							} else {
								echo '<div class="productOnSaleNew">' . WTools::format( $product->priceUnit- $product->taxPrice, 'currency', WCart::$currency ) . '</div>';
								echo '<div class="taxMessage">' . $product->priceTaxMessage . '</div>';
								echo '<div class="productYouSave">' . $product->youSaveText . ': ' . WTools::format( $product->discountPrice, 'currency', WCart::$currency ) . ' ('  . $product->youSavePercent .  '%)' . '</div>';
							}							
						} else {
							if ( $product->discountPrice <= 0 ) {
								echo '<div class="productPrice">' . WTools::format( $product->priceUnit, 'currency', WCart::$currency ) . '</div>';
							} else {
								echo '<div class="productOnSaleNew">' . WTools::format( $product->priceUnit, 'currency', WCart::$currency ) . '</div>';
								echo '<div class="productYouSave">' . $product->youSaveText . ': ' . WTools::format( $product->discountPrice, 'currency', WCart::$currency ) . ' ('  . $product->youSavePercent .  '%)' . '</div>';
							}						}					?>
					</td>
					<td style="text-align: center;">
						<div class="cartQuanity">
					<?php 
					if ( $this->getValue( 'updateQuantity' ) ) {
						$cartAjax = WPref::load( 'PCART_NODE_AJAXCART' );
						$cpid = $product->cpid;
						$itemId = WPage::getPageId( 'cart' );
						$ACTION = WText::t('1206732372QTKL');
						$image = WView::getLegend( 'delete', $ACTION );
						if ( $cartAjax ) {
							$extra = 'onclick="' . WPage::jsAction( 'removeitem', null, array( 'cpid' => $cpid ) ) . '"';
							$link = '#';
						} else {
							$extra = 'onclick="return confirm(\'' . WText::t('1317297462SYCD') . '\')"';
							$link = WPage::routeURL( 'controller=cart&task=removeitem&cpid=' . $cpid, '', false, false, $itemId );
						}						
												$linkO = new WLink( $image );
						$linkO->extra = $extra;
						$deleteHTML =  $linkO->make( $link );
						$price = ( ( $product->designation == 11 ) ? 0 : $product->priceUnit );
												if ( $product->showQuantity && $price > 0 ) {
							$display = '<div class="pull-left deleteRefresh">' . $deleteHTML;
																					$form = WView::form();
														if ( false && $cartAjax ) {
								$string = WPage::jsAction( 'updatecart', null, array( 'cpid' => $cpid ) );
							} else {
								$string = 'return ' . WPage::actionJavaScript( 'updatecart', $form->name, array( 'controller' => 'cart' ) );
							}							
							$updtext = WText::t('1227580898LIDX');
							$image = WView::getLegend( 'refresh', $updtext );
							$display .= '  <a href="#" title="'. $updtext .'" onClick="return '. $string .'" style="text-decoration:none;">'. $image .'</a>';
							$display .= '</div>';
							$display .= '<div class="pull-left">';
														$inputBoxQty = '<input class="form-control" type=text name="cpid['. $cpid .']" value="'. WTools::format( $product->quantity ) .'" size="3" style="text-align:center;">';
							if ( $cartAjax ) {
								$onclick = WPage::jsAction( 'qtyincrement', null, array( 'cpid' => $cpid, 'quantity' => 1 ) );
																$buttonIncrement = '<a class="addQty qtyUp" onclick="' . $onclick . '" href="#"> + </a>';
							} else {
																$buttonIncrement = '<a class="addQty qtyUp" href="'. WPage::routeURL( 'controller=cart&task=qtyincrement&cpid='. $cpid .'&quantity=1', '', false, false, $itemId ) .'"> + </a>';
							}
														if ( $product->quantity > 1 ) {
								if ( $cartAjax ) {
									$onclick = WPage::jsAction( 'qtyincrement', null, array( 'cpid' => $cpid, 'quantity' => -1 ) );
																		$buttonDecrement = '<a class="addQty qtyDown" onclick="' . $onclick . '" href="#"> - </a>';
								} else {
																		$buttonDecrement = '<a class="addQty qtyDown" href="'. WPage::routeURL( 'controller=cart&task=qtyincrement&cpid='. $cpid .'&quantity=-1', '', false, false, $itemId ) .'"> - </a>';
								}								
							} else {
								$buttonDecrement = '<a class="addQty qtyDown"> - </a>';
							}							
														$display .= $inputBoxQty . $buttonIncrement . $buttonDecrement;
							$display .= '</div>';
							echo $display;
						} else {
							echo ' ' . $deleteHTML;
						}					} else {
						echo WTools::format( $product->quantity );
					}					?>
						</div>
					</td>
					<td>
					<?php
						if ( !empty($product->priceTotalTaxMessage) ) {
							if ( $product->discountPrice <= 0 ) {
								echo '<div class="productPrice cartSubTotal">' . WTools::format( $product->priceTaxTotal - ( $product->taxPrice * $product->quantity ), 'currency', WCart::$currency ) . '</div>';
							} else {
																echo '<div class="productPrice cartSubTotal">' . WTools::format( $product->priceTotal - ( $product->taxPrice * $product->quantity ), 'currency', WCart::$currency ) . '</div>';
							}							echo '<div class="taxMessage cartSubTotal clearfix">' . $product->priceTotalTaxMessage . '</div>';
						} else {
							if ( $product->discountPrice <= 0 ) {
								echo '<div class="productPrice cartSubTotal">' . WTools::format( $product->priceTaxTotal, 'currency', WCart::$currency ) . '</div>';
							} else {
																echo '<div class="productPrice cartSubTotal">' . WTools::format( $product->priceTotal, 'currency', WCart::$currency ) . '</div>';
							}						}					?>						
					</td>
					</tr>						
						<?php
						endforeach;
					endif;
					?>
				</tbody>
			</table>
		</div>	
	</div>
	<div class="checkOutTotal row clearfix">
		<div class="cartcouponBox col-md-7">
			<?php if ( $taxIDText = $this->getValue( 'taxIDText' ) ) :
				$updateCartButton = $this->getContent( 'updatecartbutton' );
			?>
				<div class="VATnbTitle">
					<label for="VATnbAction"> <?php echo $taxIDText; ?> </label>
				</div>
				<?php if ( $taxIDValid = $this->getValue( 'taxIDValid' ) ) : ?>
 					<div class="VATnbValid">
					<p class="text-success"><?php echo $taxIDValid; ?></p>
					</div>
				<?php endif; ?>
				<div class="input-group VATnbArea">
					<div>
						<input type="text" id="VATnbAction" name="vatnumber" value="<?php echo $this->getValue( 'taxid' ); ?>" class="form-control VATnbAdd" placeholder="<?php echo $this->getValue( 'taxIDPlaceholder' ); ?>">
 					</div>
 					<?php if ( $updateCartButton ) : ?>
 					<div class="input-group-btn">
					<?php echo $updateCartButton; ?>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if ( $wallet = $this->getValue( 'wallet' ) ) : ?>
				<div class="basketWallet">
					<strong> <?php echo $wallet; ?> </strong>
				</div>
			<?php endif; ?>
			<?php 
			if ( $this->getValue( 'showcoupon' ) ) :
				$couponButton = $this->getContent( $this->getValue( 'couponbutton' ) );
				$updateCartButton = $this->getContent( 'updatecartbutton' );
			?>
			<div class="cartCoupon">
				<div class="couponTitle">
					<label for="couponAction"> <?php echo $this->getTitle( $this->getValue( 'coupontext' ) ); ?> </label>
				</div>
				<div class="input-group couponArea">
					<?php 
					$couponCode = $this->getValue( 'couponCode' );
					if ( $couponCode ) {
						$couponID = $this->getValue( 'couponID' );
						echo '<input type="text" id="couponAction" name="couponcancel" value="' . $couponCode . '" class="form-control couponCancel" readonly />';
						echo '<input type="hidden" id="couponActionCode" name="coupid" value="' . $this->getValue( 'couponID' ) . '" />';
					} else {
						echo '<input type="text" id="couponAction" name="couponused" class="form-control couponAdd" placeholder="' . WText::t('1396394901SSJL'). '"/>';
					}					?>
					<?php if ( $couponButton ) : ?>
					<div class="input-group-btn">
					<?php echo $couponButton ?>
 					</div>
 					<?php endif; ?>
 					<?php if ( $updateCartButton ) : ?>
 					<div class="input-group-btn">
					<?php echo $updateCartButton; ?>
					</div>
					<?php endif; ?>
				</div>
				<?php if ( $couponName = $this->getValue( 'couponName' ) ) : ?>
				<div class="cartCoupon">
					<div class="couponName"><strong><?php echo $this->getValue( 'couponNameText' ); ?>: </strong><?php echo $couponName; ?></div>
					<div class="couponValue"><strong><?php echo $this->getValue( 'couponValueText' ); ?>: </strong><?php echo $this->getValue( 'couponValue' ); ?></div>
					<div class="couponInfo"><?php echo $this->getValue( 'couponInfo' ); ?></div>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
		<div class="col-md-5">
			<div id="checkOutCont" class="clearfix">
				<?php if ( $this->getValue( 'showSubTotal' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getTitle( 'subtotal' ); ?></div>
						<div class="col-xs-6 cartTotal"><?php echo $this->getValue( 'subtotal' ); ?></div>
					</div>
					<div class="row">
						<div class="col-xs-6">&nbsp;</div>
						<div class="col-xs-6"><div class="underlineSpace">&nbsp;</div></div>
					</div>
				<?php endif; ?>
				<?php if ( $shippingRate = $this->getValue( 'shippingRate' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getTitle( 'shippingrate' ) ?>
						<?php if ( $shippingCarrier = $this->getValue( 'shippingCarrier' ) ) : ?>
						<div class="carrierName"><?php echo $shippingCarrier; ?> </div>
						<?php endif; ?>
						</div>
						<div class="col-xs-6 cartTotal"><?php echo $shippingRate; ?></div>
					</div>
					<?php if ( $shippingTax = $this->getValue( 'shippingTax' ) ) : ?>
						<div class="row">
							<div class="col-xs-6"><?php echo $this->getTitle( 'shippingtax' ); ?></div>
							<div class="col-xs-6 cartTotal"><?php echo  $this->getValue( 'taxPlus' ) . ' ' . $shippingTax; ?></div>
						</div>
					<?php endif; ?>
					<div class="row">
						<div class="col-xs-6">&nbsp;</div>
						<div class="col-xs-6"><div class="underlineSpace">&nbsp;</div></div>
					</div>
				<?php endif; ?>
				<?php if ( $paymentFeeTotal = $this->getValue( 'paymentFeeTotal' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getValue( 'paymentFeeText' ); ?></div>
						<div class="col-xs-6 cartTotal">+ <?php echo $paymentFeeTotal; ?></div>
					</div>
					<?php if ( $paymentFeeTaxTotal = $this->getValue( 'paymentFeeTaxTotal' ) ) : ?>
						<div class="row">
							<div class="col-xs-6"><?php echo $this->getTitle( 'paymentfeetax' ); ?></div>
							<div class="col-xs-6 cartTotal"><?php echo  $this->getValue( 'taxPlus' ) . '+ ' . $paymentFeeTaxTotal; ?></div>
						</div>
					<?php endif; ?>
					<div class="row">
						<div class="col-xs-6">&nbsp;</div>
						<div class="col-xs-6"><div class="underlineSpace">&nbsp;</div></div>
					</div>
				<?php endif; ?>
				<?php if ( ( $totalTax = $this->getValue( 'taxTotal' ) ) || WPref::load( 'PCATALOG_NODE_SHOWZEROTAX' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getValue( 'taxText' ); ?></div>
						<div class="col-xs-6 cartTotal"><?php echo  $this->getValue( 'taxPlus' ) . ' ' .$totalTax; ?></div>
					</div>
					<div class="row">
						<div class="col-xs-6">&nbsp;</div>
						<div class="col-xs-6"><div class="underlineSpace">&nbsp;</div></div>
					</div>
				<?php endif; ?>
				<?php if ( $itemDiscount = $this->getValue( 'itemdiscount' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getTitle( 'itemdiscount' ); ?></div>
						<div class="col-xs-6 cartTotal"><?php echo $itemDiscount; ?></div>
					</div>
				<?php endif; ?>
				<?php if ( $discount = $this->getValue( 'totalDiscount' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getTitle( 'totaldiscount' ); ?></div>
						<div class="col-xs-6 cartTotal"><?php echo $discount; ?></div>
					</div>
				<?php endif; ?>
				<?php if ( $rebate = $this->getValue( 'totalRebate' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getTitle( 'totalrebate' ); ?></div>
						<div class="col-xs-6 cartTotal">- <?php echo $rebate; ?></div>
					</div>
				<?php endif; ?>
				<?php if ( $itemDiscount || $discount || $rebate ) : ?>
					<div class="row">
						<div class="col-xs-6">&nbsp;</div>
						<div class="col-xs-6"><div class="underlineSpace">&nbsp;</div></div>
					</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-xs-6 cartGrandTotal"><?php echo $this->getValue( 'grandTotalTitle' ); ?></div>
					<div class="col-xs-6 cartTotal cartGrandTotal"><?php echo $this->getValue( 'total' ); ?></div>
				</div>
			</div>
			<?php if ( $currencyMessage = $this->getValue( 'currencyMessage' ) ) : ?>
			<div class="clearfix">
				<span><?php echo $currencyMessage; ?></span>
			</div>
			<?php endif; ?>
			<?php
			$currencyDropdown = $this->getContent( 'storecurrencies' );
			if ( !empty($currencyDropdown) && '<div class="col-sm-10"></div>' != $currencyDropdown ) :
			?>
				<div>
					<strong> <?php echo $this->getTitle( 'storecurrencies' ); ?> </strong>
					<br/>
					<?php echo $currencyDropdown; ?>
				</div>
			<?php endif; ?>
			<?php if ( $this->getValue( 'showemailfield' ) ) : ?>
				<div id="checkOutEmail">
					<strong> <?php echo $this->getTitle( 'emailaddress' ); ?> </strong><small><span class="requieredText">( <?php echo $this->getContent( 'emailRequired' ); ?> )</span></small>
					<br/>
					<?php echo $this->getContent( 'emailaddress' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>