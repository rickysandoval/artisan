<div id="shoppingcart">
	<div class="sidecart-top">
		<div class="shopping-cart__header">
			<span class="sidecart-icon"><?php echo CHtml::link(Yii::t('checkout','<span class="fa fa-shopping-cart fa-2x"></span>'),array('cart/index')) ?>
			</span>
			<span class="title"><?php echo CHtml::link(Yii::t('checkout','Shopping Cart'),array('cart/')) ?></span>
			<?php
				$numItems = sizeOf(Yii::app()->shoppingcart->cartItems);
				if ($numItems > 0) {

			?>
			<div class="minicart__preview">
				<div class="cart_quantity"><?php 
					echo $numItems;
					if ($numItems == 1) {
						echo ' Item';
					} else {
						echo ' Items';
					}
				?>
				for</div>
				<div class="cart_price"><span id="subtotal"><?= _xls_currency(Yii::app()->shoppingcart->subtotal) ?></span></div>
			</div>
				<?php
				} else {
				?>
			<div class="minicart__preview"><span class="cart-empty-message">Your cart is empty</span></div>
			<?php }?>
		</div>

		<?php if(!empty(Yii::app()->shoppingcart)): ?>
		<div><?php
			foreach (Yii::app()->shoppingcart->cartItems as $item): ?>

				<div id="cartline<?=$item->id?>" class="minicart_item row">
						<span class="minicart_image span2">
							<a href="<?=$item['link']?>">
								<img src="<?=$item->product->MiniImage?>"  />
							</a>
						</span>
						<span class="span7 minicart_desc">
							<a href="<?=$item['link']?>"><?=$item['description']?>
								<br>
								<span class="minicart_qty">
									<?php echo Yii::t('cart','Qty'); ?>: <span id="qty<?=$item['id']?>"><?=$item['qty']?></span>
                                </span>
							</a>
						</span>
						<span class="span3 minicart_price">
							<span id="sell_total<?=$item['id']?>"><?=_xls_currency($item['sell_total'])?></span>
						</span>
				</div>

			<?php endforeach; ?>
		</div>
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

	<div id="shoppingcartbottom" class="cf">
		<div class="cart_label span7"><span class="subtotallabel"><?php echo Yii::t('cart','SubTotal'); ?></span></div>
		
		<div class="cart_price span5"><span id="subtotal"><?= _xls_currency(Yii::app()->shoppingcart->subtotal) ?></span>&nbsp;&nbsp;</div>
	</div>


</div>
