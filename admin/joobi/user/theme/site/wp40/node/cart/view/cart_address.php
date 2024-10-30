<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....'); ?>
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
	<div class="row addresList">
		<?php if ( $billingAddress = $this->getValue( 'billingAddressContent' ) ) : ?>
		<div class="col-xs-6 alignLeft bilingAddress">
			<h3 class="panel-title"><?php echo $this->getValue( 'billingAddressTitle' ); ?></h3>
			<?php echo $billingAddress; ?>
		</div>
		<?php endif; ?>
		<?php if ( $shippingAddress = $this->getValue( 'shippingAddressContent' ) ) : ?>
		<div class="col-xs-6 alignLeft shippingAddress">
			<h3 class="panel-title"><?php echo $this->getValue( 'shippingAddressTitle' ); ?></h3>
			<?php echo $shippingAddress; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
