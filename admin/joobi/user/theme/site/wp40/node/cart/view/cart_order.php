<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....'); ?>
<div id="checkOutPage">
	<div id="processTail" class="clearfix">
		<?php echo $this->getValue( 'processtail' ); ?>
	</div>
	<div id="processAddress" class="clearfix">
		<?php if ( $name = $this->getValue( 'userName' ) ) : ?>
		<div class="row">
			<div class="col-xs-2"><h3 class="panel-title"><?php echo $this->getValue( 'userNameText' ); ?></h3></div>
			<div class="col-xs-10"><?php echo $name; ?></div>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-xs-2"><h3 class="panel-title"><?php echo $this->getValue( 'userEmailText' ); ?></h3></div>
			<div class="col-xs-10"><?php echo $this->getValue( 'userEmail' ); ?></div>
		</div>
		<div class="row">
			<?php if ( $billingAddress = $this->getValue( 'billingAddressContent' ) ) : ?>
			<div class="col-xs-6 alignLeft">
				<h3 class="panel-title"><?php echo $this->getValue( 'billingAddressTitle' ); ?></h3>
				<?php echo $billingAddress; ?>
			</div>
			<?php endif; ?>
			<?php if ( $shippingAddress = $this->getValue( 'shippingAddressContent' ) ) : ?>
			<div class="col-xs-6 alignLeft">
				<h3 class="panel-title"><?php echo $this->getValue( 'shippingAddressTitle' ); ?></h3>
				<?php echo $shippingAddress; ?>
			</div>
			<?php endif; ?>
		</div>
		<?php if ( $creditCard = $this->getValue( 'creditCardContent' ) ) : ?>
		<div id="processCreditCard" class="row">
			<div class="col-xs-12 alignLeft">
				<h3 class="panel-title"><?php echo $this->getValue( 'creditCardTitle' ); ?></h3>
				<?php echo $creditCard; ?>
			</div>
		</div>
		<?php endif; ?>
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
						}					?>							
						<span class="productName"><?php echo $product->name; ?></span>
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
						<?php echo WTools::format( $product->quantity ); ?>
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
	<div id="checkOutTotal" class="clearfix">
		<div class="row">
		<div id="leftTotalBox" class="col-md-6">
			<?php if ( $this->getValue( 'showcoupon' ) ) : ?>
			<div class="cartCoupon" class="clearfix">
				<?php if ( $couponName = $this->getValue( 'couponName' ) ) : ?>
				<div class="cartCoupon">
					<div class="couponName"><strong><?php echo $this->getValue( 'couponNameText' ); ?>: </strong><?php echo $couponName; ?></div>
					<div class="couponValue"><strong><?php echo $this->getValue( 'couponValueText' ); ?>: </strong><?php echo $this->getValue( 'couponValue' ); ?></div>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if ( WPref::load( 'PCART_NODE_SHOWNOTE' ) ) : ?>
			<div id="noteBox" class="clearfix">
				<textarea class="form-control" rows="3" cols="40" name="<?php echo JOOBI_VAR_DATA; ?>[x][comment]" id="x_note_comment" placeholder="<?php echo $this->getValue( 'notePlaceHolder' ); ?>"></textarea>
			</div>
			<?php endif; ?>
			<?php if ( WPref::load( 'PCART_NODE_ALLOWGIFT' ) ) : ?>
			<div id="giftBox" class="clearfix">
				<div id="giftPanel" class="panel panel-info">
					<div class="panel-heading"><?php echo $this->getValue( 'giftTitle' ); ?></div>
						<div class="panel-body">
						<div class="form-group">
						<input class="form-control" name="<?php echo JOOBI_VAR_DATA; ?>[x][giftrecname]" id="x_note_giftrecname" size="50" placeholder="<?php echo $this->getValue( 'giftrecname' ); ?>"/>
						</div>
						<div class="form-group">
						<input class="form-control" name="<?php echo JOOBI_VAR_DATA; ?>[x][giftrecemail]" id="x_note_giftrecemail" size="50" placeholder="<?php echo $this->getValue( 'giftrecemail' ); ?>"/>
						</div>
						</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div id="rightTotalBox" class="col-md-6">
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
							<div class="col-xs-6 cartTotal"><?php echo  $this->getValue( 'taxPlus' ) . ' ' .$shippingTax; ?></div>
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
			$currencyDropdown = $this->getValue( 'storeCurrencies' );
			if ( !empty($currencyDropdown) && '<div class="col-sm-10"></div>' != $currencyDropdown ) :
			?>
				<div id="currenciesChoice" class="clearfix">
					<div class="currenciesChoiceText"><?php echo $this->getValue( 'storeCurrenciesText' ); ?></div>
					<div class="currenciesChoiceValue"><?php echo $currencyDropdown; ?></div>
				</div>
			<?php endif; ?>
			<?php 
			if ( $termsDropdown = $this->getValue( 'termsAndCondition' ) ) :
			?>
				<div id="termsConditions" class="clearfix">
					<div class="termsConditionsText"><?php echo $this->getTitle( 'terms' ); ?></div>
					<div class="termsConditionsValue"><?php echo $termsDropdown; ?></div>
				</div>
			<?php endif; ?>
		</div>
		</div>
	</div>
</div>