<div id="shoppingcart">
	<div class="sidecart-top">
        <a class="cart-icon" href="/cart/index"><span class="fa fa-shopping-cart fa-2x"></span></a></span><span class="title"><?php echo CHtml::link(Yii::t('checkout','Shopping Cart'),array('cart/index')) ?></span>

		<?php if(!empty(Yii::app()->shoppingcart)):
			foreach (Yii::app()->shoppingcart->cartItems as $item): ?>

				<div id="cartline<?=$item->id?>" class="minicart_item row">
						<span class="span8 minicart_desc">
							<a href="<?=$item['link']?>"><?=$item['description']?>
								<br>
								<span class="minicart_qty">
									<?php echo Yii::t('cart','Qty'); ?>: <span id="qty<?=$item['id']?>"><?=$item['qty']?></span>
                                </span>
							</a>
						</span>
						<span class="span4 minicart_price">
							<span id="sell_total<?=$item['id']?>"><?=_xls_currency($item['sell_total'])?></span>
						</span>
				</div>

			<?php endforeach; ?>
		<?php endif; ?>

		<div id="cartline0" class="minicart_item hidden">
                <span class="minicart_image">
							<a href="">
								<img id="product_img0" src="" />
							</a>
						</span>
						<span class="span6 minicart_desc">
							<a id="product_link0" href=""><span id="product_title0"></span>
								<br>
								<span class="minicart_qty"><?php echo Yii::t('cart','Qty'); ?>: <span id="qty0"></span> &nbsp;&nbsp;
                                </span>
							</a>
						</span>
						<span class="span3 minicart_price">
							<span id="sell_total0"></span>
						</span>

		</div>

		<?php if(empty(Yii::app()->shoppingcart)): ?>
			<div id="cartempty">
				<div class="emptymessage"><?php echo Yii::t('cart','Your cart is empty'); ?></div>
			</div>
		<?php endif; ?>


	</div>

	<div id="shoppingcartbottom">
		<div class="cart_label span7"><span class="subtotallabel"><?php echo Yii::t('cart','SubTotal'); ?></span></div>
		<?php
			$numItems = sizeOf(Yii::app()->shoppingcart->cartItems);
			if ($numItems > 0) {

		?>
		<div class="cart_quantity"><?php 
			echo $numItems;
			if ($numItems == 1) {
				echo ' Item';
			} else {
				echo ' Items';
			}
		?>
		for</div>
		<div class="cart_price span5"><span id="subtotal"><?= _xls_currency(Yii::app()->shoppingcart->subtotal) ?></span>&nbsp;&nbsp;</div>
		<?php
			} else {
			?>
			<span class="cart-empty-message">Your cart is empty</span>
		<?php }?>
	</div>




</div>
