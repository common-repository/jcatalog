<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....'); ?>
<div id="checkOutGrandTotal">
	<?php if ( $creditCard = $this->getValue( 'creditCardContent' ) ) : ?>
	<div id="processCreditCard" class="row">
		<div class="col-xs-12 alignLeft">
			<h3 class="panel-title"><?php echo $this->getValue( 'creditCardTitle' ); ?></h3>
			<?php echo $creditCard; ?>
		</div>
	</div>
	<?php endif; ?>
	<div id="checkOutTotal" class="clearfix">
		<div class="row">
		<div id="leftTotalBox" class="col-md-6">
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
				<?php if ( $name = $this->getValue( 'userName' ) ) : ?>
				<div class="row">
					<div class="col-xs-2"><h3 class="panel-title"><?php echo $this->getValue( 'userNameText' ); ?></h3></div>
					<div class="col-xs-10"><?php echo $name; ?></div>
				</div>
				<?php endif; ?>
				<?php if ( $email = $this->getValue( 'userEmail' ) ) : ?>
				<div class="row">
					<div class="col-xs-2"><h3 class="panel-title"><?php echo $this->getValue( 'userEmailText' ); ?></h3></div>
					<div class="col-xs-10"><?php echo $email; ?></div>
				</div>
				<?php endif; ?>
				<?php if ( $this->getValue( 'showSubTotal' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getValue( 'subTotalText' ); ?></div>
						<div class="col-xs-6 cartTotal"><?php echo $this->getValue( 'subtotal' ); ?></div>
					</div>
					<div class="row">
						<div class="col-xs-6">&nbsp;</div>
						<div class="col-xs-6"><div class="underlineSpace">&nbsp;</div></div>
					</div>
				<?php endif; ?>
				<?php if ( $shippingRate = $this->getValue( 'shippingRate' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getValue( 'shippingRateText' ) ?>
						<?php if ( $shippingCarrier = $this->getValue( 'shippingCarrier' ) ) : ?>
						<div class="carrierName"><?php echo $shippingCarrier; ?> </div>
						<?php endif; ?>
						</div>
						<div class="col-xs-6 cartTotal"><?php echo $shippingRate; ?></div>
					</div>
					<?php if ( $shippingTax = $this->getValue( 'shippingTax' ) ) : ?>
						<div class="row">
							<div class="col-xs-6"><?php echo $this->getValue( 'shippingTaxText' ); ?></div>
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
							<div class="col-xs-6"><?php echo $this->getValue( 'paymentFeeTaxText' ); ?></div>
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
						<div class="col-xs-6"><?php echo $this->getValue( 'itemDiscountText' ); ?></div>
						<div class="col-xs-6 cartTotal"><?php echo $itemDiscount; ?></div>
					</div>
				<?php endif; ?>
				<?php if ( $discount = $this->getValue( 'totalDiscount' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getValue( 'totalDiscountText' ); ?></div>
						<div class="col-xs-6 cartTotal"><?php echo $discount; ?></div>
					</div>
				<?php endif; ?>
				<?php if ( $rebate = $this->getValue( 'totalRebate' ) ) : ?>
					<div class="row">
						<div class="col-xs-6"><?php echo $this->getValue( 'totalRebateText' ); ?></div>
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