<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'checkout',
		'enableClientValidation' => true,
		'enableAjaxValidation' => true,
		'htmlOptions' => array('onsubmit' => '$("#submitSpinner").show()')
	));

?>

<h1><?= Yii::t('global', 'Checkout') ?></h1>

<?php if(Yii::app()->user->isGuest): ?>
	<div id="customercontact">
		<div id="CustomerContactBillingInfo">

			<fieldset class="span10">
				<legend><?php echo Yii::t('checkout', 'Customer Contact'); ?></legend>

				<div class="row-fluid">
					<div class="span6">
						<?php
							echo $form->labelEx($model, 'contactFirstName');
							echo $form->textField(
								$model,
								'contactFirstName',
								array(
									'onChange' => sprintf(
										'js:if(!$("#%s").val()) $("#%s").val(this.value)',
										CHtml::activeId($model, 'shippingFirstName'),
										CHtml::activeId($model, 'shippingFirstName')
									)
								)
							);
							echo $form->error($model, 'contactFirstName');
						?>
					</div>
					<div class="span6">
						<?php
							echo $form->labelEx($model, 'contactLastName');
							echo $form->textField(
								$model,
								'contactLastName',
								array(
									'onChange' => sprintf(
										'js:if(!$("#%s").val()) $("#%s").val(this.value)',
										CHtml::activeId($model, 'shippingLastName'),
										CHtml::activeId($model, 'shippingLastName')
									)
								)
							);
							echo $form->error($model, 'contactLastName');
						?>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span6">
						<?php echo $form->labelEx($model, 'contactCompany'); ?>
						<?php echo $form->textField($model, 'contactCompany'); ?>
						<?php echo $form->error($model, 'contactCompany'); ?>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span6">
						<?php echo $form->labelEx($model, 'contactPhone'); ?>
						<?php echo $form->textField($model, 'contactPhone'); ?>
						<?php echo $form->error($model, 'contactPhone'); ?>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span6">
						<?php echo $form->labelEx($model, 'contactEmail'); ?>
						<?php echo $form->textField($model, 'contactEmail'); ?>
						<?php echo $form->error($model, 'contactEmail'); ?>
					</div>

					<?php if(Yii::app()->user->isGuest): ?>
						<div class="span6">
							<?php echo $form->labelEx($model, 'contactEmail_repeat'); ?>
							<?php echo $form->textField($model, 'contactEmail_repeat'); ?>
							<?php echo $form->error($model, 'contactEmail_repeat'); ?>
						</div>
					<?php endif; ?>
				</div>

			</fieldset>

		</div>
	</div>

	<div id="createaccount">
		<fieldset class="span10">
			<legend><?php echo Yii::t('checkout', 'Create a Free Account!'); ?></legend>
			<div class="row-fluid spaceafter">
				<?php
					if (_xls_get_conf('REQUIRE_ACCOUNT', 0))
					{
						echo Yii::t('checkout', 'Enter a password to create your account.');
					} else {
						echo Yii::t(
							'checkout',
							'To save your information, enter a password here to create an '.
							'account, or leave blank to check out as a guest.'
						);
					}
				?>
			</div>
			<div class="row-fluid spaceafter">
				<div class="span6">
					<?php
						echo $form->labelEx($model, 'createPassword');
						echo $form->passwordField(
							$model,
							'createPassword',
							array(
								'placeholder' => '',
								'autocomplete' => "off"
							)
						);
						echo $form->error($model, 'createPassword');
					?>
				</div>
				<div class="span6">
					<?php
						echo $form->labelEx($model, 'createPassword_repeat');
						echo $form->passwordField(
							$model,
							'createPassword_repeat',
							array(
								'placeholder' => '',
								'autocomplete' => 'off'
							)
						);
						echo $form->error($model, 'createPassword_repeat');
					?>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span12">
					<?php echo $form->checkBox($model, 'receiveNewsletter'); ?>
					<?php echo $form->label($model, 'receiveNewsletter'); ?>
					<?php echo $form->error($model, 'receiveNewsletter'); ?>
				</div>
			</div>

		</fieldset>
	</div>
<?php endif; ?>

<div id="shippingaddress">
	<?php
		// If we have addresses from the address book, display for the user
		// to choose, plus an option to add a new one.
		if (count($model->objAddresses) > 0):
	?>
		<div class="row-fluid">
			<fieldset class="span10">
				<legend><?php echo Yii::t('checkout', 'Choose your shipping address'); ?></legend>
				<?php foreach ($model->objAddresses as $objAddress): ?>
					<div class="span3 myaddress spaceafter">
						<?php
							echo $form->radioButton(
								$model,
								'intShippingAddress',
								array(
									'value' => $objAddress->id,
									'uncheckValue' => null,
									'onclick' => 'js:
										$("#CustomerContactShippingAddress").hide();
										$("#btnCalculate").click();
									'
								)
							);
						?>
						<div class="addresslabel"><?= $objAddress->address_label ?></div>
						<?= $objAddress->formattedblock ?>
					</div>
				<?php endforeach; ?>
				<div class="clearfix"></div>
				<?php
					echo $form->radioButton(
						$model,
						'intShippingAddress',
						array(
							'value' => 0,
							'uncheckValue' => null,
							'onclick' => 'js:
								$("#CustomerContactShippingAddress").show();
								singlePageCheckout.updateShippingAuto();
							'
						)
					);
				?>
				<div class="addresslabel"><?= Yii::t('checkout', 'Or enter a new address'); ?></div>
			</fieldset>
		</div>
	<?php else: ?>
		<div class="row-fluid">
			<div style="display: none">
				<?php
					echo $form->radioButton(
						$model,
						'intShippingAddress',
						array(
							'value' => 0,
							'uncheckValue' => null,
							'onclick' => 'js:$("#CustomerContactShippingAddress").show();'
						)
					);
				?>
			</div>
		</div>
	<?php endif; ?>

	<div class="row-fluid">
		<fieldset class="span10">
			<div id="CustomerContactShippingAddress">
				<legend><?php echo Yii::t('checkout', 'Shipping Address'); ?></legend>
				<div class="row-fluid">
					<div class="span6">
						<?php echo $form->labelEx($model, 'shippingLabel'); ?>
						<?php echo $form->textField($model, 'shippingLabel'); ?>
						<?php echo $form->error($model, 'shippingLabel'); ?>
					</div>
				</div>

				<div class="row-fluid">
					<div id="shippingFirstName" class="span4">
						<?php echo $form->labelEx($model, 'shippingFirstName'); ?>
						<?php echo $form->textField($model, 'shippingFirstName'); ?>
						<?php echo $form->error($model, 'shippingFirstName'); ?>
					</div>
					<div id="shippingLastName" class="span4">
						<?php echo $form->labelEx($model, 'shippingLastName'); ?>
						<?php echo $form->textField($model, 'shippingLastName'); ?>
						<?php echo $form->error($model, 'shippingLastName'); ?>
					</div>
				</div>

				<div class="row-fluid">
					<div id="shippingAddress1" class="span4">
						<?php echo $form->labelEx($model, 'shippingAddress1'); ?>
						<?php echo $form->textField($model, 'shippingAddress1'); ?>
						<?php echo $form->error($model, 'shippingAddress1'); ?>
					</div>
					<div id="shippingAddress2" class="span4">
						<?php echo $form->labelEx($model, 'shippingAddress2'); ?>
						<?php echo $form->textField($model, 'shippingAddress2'); ?>
						<?php echo $form->error($model, 'shippingAddress2'); ?>
					</div>
				</div>

				<div class="row-fluid">
					<div id="shippingCity" class="span4">
						<?php echo $form->labelEx($model, 'shippingCity'); ?>
						<?php echo $form->textField($model, 'shippingCity'); ?>
						<?php echo $form->error($model, 'shippingCity'); ?>
					</div>
					<div id="shippingCountry" class="span4">
						<?php
							echo $form->labelEx($model, 'shippingCountry');
							echo $form->dropDownList(
								$model,
								'shippingCountry',
								$model->getCountries(),
								array(
									'onchange' => 'js:singlePageCheckout.updateShippingStates()'
								)
							);
							echo $form->error($model, 'shippingCountry');
						?>
					</div>
					<div id="shippingState" class="span2">
						<?php
							echo $form->labelEx($model, 'shippingState');
							echo $form->dropDownList(
								$model,
								'shippingState',
								$model->getStates('shipping'),
								array(
									'prompt' => '--',
									'onchange' => 'js:singlePageCheckout.setTaxCode()'
								)
							);
							echo $form->error($model, 'shippingState');
						?>
					</div>
					<div id="shippingPostal" class="span2">
						<?php
							echo $form->labelEx($model, 'shippingPostal');
							echo $form->textField(
								$model,
								'shippingPostal',
								array(
									'onchange' => 'js:singlePageCheckout.setTaxCode()'
								)
							);
							echo $form->error($model, 'shippingPostal');
						?>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span9">
						<div class="rememberMe">
							<?php echo $form->checkBox($model, 'shippingResidential'); ?>
							<?php echo $form->label($model, 'shippingResidential'); ?>
							<?php echo $form->error($model, 'shippingResidential'); ?>
						</div>
					</div>
				</div>
			</div> <!-- End shipping address -->

			<?php // We keep this outside the shipping address block because the rest may be hidden. ?>
			<div class="row-fluid">
				<div class="span9">
					<div class="rememberMe">
						<?php
							echo $form->checkBox(
								$model,
								'billingSameAsShipping',
								array(
									'onclick' => 'js:
										jQuery($("#CustomerContactBillingAddress")).toggle()
									',
									'disabled' => Yii::app()->params['SHIP_SAME_BILLSHIP']
								)
							);
							echo $form->label($model, 'billingSameAsShipping');
							echo $form->error($model, 'billingSameAsShipping');
						?>
					</div>
				</div>
			</div>
		</fieldset>
	</div>
</div> <!-- End shipping address options. -->

<div id="billingaddress">
	<div id="CustomerContactBillingAddress">
		<fieldset class="span10">
			<?php
			//If we have addresses from the address book, display for the user to choose, plus an option to add a new one
			if(count($model->objAddresses) > 0): ?>
				<div class="row-fluid">
					<div class="span12">
						<legend><?php echo Yii::t('checkout', 'Choose your billing address'); ?></legend>
						<?php foreach ($model->objAddresses as $objAddress): ?>
							<div class="span3 myaddress spaceafter">
								<?php
									echo $form->radioButton(
										$model,
										'intBillingAddress',
										array(
											'value' => $objAddress->id,'uncheckValue' => null,
											'onclick' => 'js:$("#CustomerContactBillingAddressAdd").hide();'
										)
									);
								?>
								<div class="addresslabel"><?= $objAddress->address_label ?></div>
								<?= $objAddress->formattedblock ?>
							</div>
						<?php endforeach; ?>
						<div class="clearfix"></div>
							<?php
								echo $form->radioButton(
									$model,
									'intBillingAddress',
									array(
										'value' => 0,
										'uncheckValue' => null,
										'onclick' => 'js:$("#CustomerContactBillingAddressAdd").show();'
									)
								);
							?>
						<div class="addresslabel"><?= Yii::t('checkout', 'Or enter a new address'); ?></div>
					</div>
				</div>
			<?php else: ?>
				<div class="row-fluid">
					<div style="display: none">
						<?php
							echo $form->radioButton(
								$model,
								'intBillingAddress',
								array(
									'value' => 0,
									'uncheckValue' => null,
									'onclick' => 'js:$("#CustomerContactBillingAddressAdd").show();'
								)
							);
						?>
					</div>
				</div>
			<?php endif; ?>
			<div id="CustomerContactBillingAddressAdd">
				<legend><?php echo Yii::t('checkout', 'Billing Address'); ?></legend>
				<div class="row-fluid">
					<div class="span6">
						<?php echo $form->labelEx($model, 'billingLabel'); ?>
						<?php echo $form->textField($model, 'billingLabel'); ?>
						<?php echo $form->error($model, 'billingLabel'); ?>
					</div>
				</div>

				<div class="row-fluid">
					<div id="billingAddress1" class="span4">
						<?php echo $form->labelEx($model, 'billingAddress1'); ?>
						<?php echo $form->textField($model, 'billingAddress1'); ?>
						<?php echo $form->error($model, 'billingAddress1'); ?>
					</div>
					<div id="billingAddress2" class="span4">
						<?php echo $form->labelEx($model, 'billingAddress2'); ?>
						<?php echo $form->textField($model, 'billingAddress2'); ?>
						<?php echo $form->error($model, 'billingAddress2'); ?>
					</div>
				</div>

				<div class="row-fluid">
					<div id="billingCity" class="span4">
						<?php echo $form->labelEx($model, 'billingCity'); ?>
						<?php echo $form->textField($model, 'billingCity'); ?>
						<?php echo $form->error($model, 'billingCity'); ?>
					</div>

					<div id="billingCountry" class="span4">
						<?php
							echo $form->labelEx($model, 'billingCountry');
							echo $form->dropDownList(
								$model,
								'billingCountry',
								$model->getCountries(),
								array(
									'ajax' => array(
										'type' => 'POST',
										'url' => CController::createUrl('cart/getdestinationstates'), //url to call
										'update' => '#' . CHtml::activeId($model, 'billingState'), //selector to update
										'data' => sprintf(
											'js:{"country_id": $("#%s option:selected").val()}',
											CHtml::activeId($model, 'billingCountry')
										)
									)
								)
							);
							echo $form->error($model, 'billingCountry');
						?>
					</div>

					<div id="billingState" class="span2">
						<?php
							echo $form->labelEx($model, 'billingState');
							echo $form->dropDownList(
								$model,
								'billingState',
								$model->getStates('billing'),
								array('prompt' => '--')
							);
							echo $form->error($model, 'billingState');
						?>
					</div>
					<div id="billingPostal" class="span2">
						<?php echo $form->labelEx($model, 'billingPostal'); ?>
						<?php echo $form->textField($model, 'billingPostal'); ?>
						<?php echo $form->error($model, 'billingPostal'); ?>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span9">
						<div class="rememberMe">
							<?php echo $form->checkBox($model, 'billingResidential'); ?>
							<?php echo $form->label($model, 'billingResidential'); ?>
							<?php echo $form->error($model, 'billingResidential'); ?>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
	</div>
</div> <!-- End billing address options. -->

<div id="promocode">
	<fieldset class="span10">
		<legend><?php echo Yii::t('checkout', 'Promo Code'); ?></legend>
		<div class="row-fluid">
			<?php echo Yii::t('checkout', 'Enter a Promotional Code here to receive a discount.'); ?>
		</div>
		<div class="row-fluid">
			<div class="span4" >
				<?php echo $form->textField($model, 'promoCode'); ?>
			</div>
			<div class="offset4 span3" >
				<?php
					echo CHtml::ajaxButton(
						Yii::t('checkout', 'Apply Promo Code'),
						array('cart/applypromocode'),
						array('type' => "POST",
							'dataType' => 'json',
							'data' => 'js:jQuery($("#' . CHtml::activeId($model, 'promoCode') .'")).serialize()',
							'success' => 'js:function(data){
								if (data.action=="alert") {
								alert(data.errormsg);
								} else if (data.action=="error") {
									alert(data.errormsg);
									$("#' . CHtml::activeId($model, 'promoCode') .'_em_").html(data.errormsg).show();
								} else if (data.action=="triggerCalc") {
									$("#btnCalculate").click();
									alert(data.errormsg);
								} else if (data.action=="success") {
									$("#cartItems").html(data.cartitems);
									savedCartScenarios = data.cartitems;
									$("#' . CHtml::activeId($model, 'promoCode') .'_em_").html(data.errormsg).show();
									alert(data.errormsg);
									singlePageCheckout.updateShippingAuto();
								}
							}'),
						array('id' => 'CheckoutForm_btnPromoCode')
					);
				?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6" >
				<?php echo $form->error($model, 'promoCode'); ?>
			</div>
		</div>
	</fieldset>
</div>

<div id="shipping">
	<fieldset class="span10">
		<legend><?php echo Yii::t('checkout', 'Shipping'); ?></legend>
		<div class="span3">
			<?php echo $form->labelEx($model, 'shippingProvider'); ?>
			<div id="shippingProviderRadio">
				<?php
					echo $form->radioButtonList(
						$model,
						'shippingProvider',
						$model->getProviders(),
						array(
							'onclick' => 'singlePageCheckout.pickShippingProvider(this.value)',
							'separator' => ''
						)
					);
				?>
			</div>

			<?php
					echo $form->error(
						$model,
						'shippingProvider',
						null,
						false,
						false
					);
			?>

			<div id="shippingSpinner" style="display:none">
				<?php echo CHtml::image(Yii::app()->getBaseUrl(true).'/images/wait_animated.gif')?></div>
			</div>

			<div class="span5">
				<?php echo $form->labelEx($model, 'shippingPriority'); ?>
				<div id='shippingPriorityRadio'>
					<?php
						echo $form->radioButtonList(
							$model,
							'shippingPriority',
							$model->getPriorities($model->shippingProvider),
							array(
								'onclick' => 'singlePageCheckout.updateCart(this.value)',
								'separator' => ''
							)
						);
					?>
				</div>
				<?php echo $form->error($model, 'shippingPriority', null, false, false); ?>
			</div>

		<div class="span3 btncalc" >
			<input type="button" id="btnCalculate" value="<?= CHtml::encode(Yii::t('checkout', 'Calculate Shipping')); ?>">
			<?php
				Yii::app()->clientScript->registerScript(
					'btnCalculate-script',
					'$("#btnCalculate").click(singlePageCheckout.calculateShipping.bind(singlePageCheckout))',
					CClientScript::POS_LOAD
				);
			?>
		</div>
	</fieldset>
</div>

<?php //The contents of the div id=cartItems are refreshed through various AJAX actions such as taxes and shipping ?>
<div id="checkoutShoppingCart">
	<fieldset class="span10">
		<legend><?php echo Yii::t('checkout', 'Shopping Cart'); ?></legend>
		<div id="cartItems"><?php $this->renderPartial('/cart/_cartitems'); ?></div>
	</fieldset>
</div>

<div id="payment">
	<fieldset class="span10">
		<legend><?= Yii::t('checkout', 'Payment'); ?></legend>

		<div class="span9">
			<?php
				echo $form->labelEx($model, 'paymentProvider');
				echo $form->dropDownList(
					$model,
					'paymentProvider',
					$model->getPaymentMethods(),
					array('onchange' => 'singlePageCheckout.changePayment(this.value)')
				);
				echo $form->error($model, 'paymentProvider');
			?>
		</div>

		<?php /* If we have payment modules with custom forms, they are rendered here */ ?>
		<div id="Payforms" class="row-fluid">
			<?php
					foreach($paymentForms as $moduleName => $paymentForm)
					{
						echo $this->renderPartial(
							'/cart/_paymentform',
							array(
								'moduleName' => $moduleName,
								'form' => $paymentForm,
								'model' => $model
							),
							true
						);
					}
			?>
		</div>

		<?php /* The credit card form renders hidden and will display if a payment module needs it */ ?>
		<div id="CreditCardForm" style="display: none" class="span10">
			<div class="row-fluid">
				<div class="span6 card-type">
					<?php echo $form->labelEx($model, 'cardType'); ?>
					<?php echo $form->dropDownList($model, 'cardType', $model->getCardTypes()); ?>
					<?php echo $form->error($model, 'cardType'); ?>
				</div>
			</div>

			<div class="row-fluid">
				<div id="cardNumber" class="span5">
					<?php echo $form->labelEx($model, 'cardNumber'); ?>
					<?php echo $form->textField($model, 'cardNumber', array('autocomplete' => 'off')); ?>
					<?php echo $form->error($model, 'cardNumber'); ?>
				</div>

				<div id="cardCVV" class="span2">
					<?php echo $form->labelEx($model, 'cardCVV'); ?>
					<?php echo $form->textField($model, 'cardCVV', array('autocomplete' => 'off')); ?>
					<?php echo $form->error($model, 'cardCVV'); ?>
				</div>

				<div id="cardExpiryMonth" class="span2">
					<?php echo $form->labelEx($model, 'cardExpiryMonth'); ?>
					<?php echo $form->dropDownList($model, 'cardExpiryMonth', $model->getCardMonths(), array('prompt' => '--')); ?>
					<?php echo $form->error($model, 'cardExpiryMonth'); ?>
				</div>

				<div id="cardExpiryYear" class="span2">
					<?php echo $form->labelEx($model, 'cardExpiryYear'); ?>
					<?php echo $form->dropDownList($model, 'cardExpiryYear', $model->getCardYears(), array('prompt' => '--')); ?>
					<?php echo $form->error($model, 'cardExpiryYear'); ?>
				</div>
			</div>

			<div class="row-fluid">
				<div id="cardNameOnCard" class="span6">
					<?php echo $form->labelEx($model, 'cardNameOnCard'); ?>
					<?php echo $form->textField($model, 'cardNameOnCard'); ?>
					<?php echo $form->error($model, 'cardNameOnCard'); ?>
				</div>
			</div>
		</div>
	</fieldset>
</div>

<div id="checkoutSubmit">
	<fieldset class="span10">
		<legend>
			<?=
				Yii::t(
					'checkout',
					'Submit your order'
				);
			?>
		</legend>

		<div class="span9">
			<?=
				$form->labelEx($model, 'orderNotes') .
				$form->textArea(
					$model,
					'orderNotes',
					array(
						'rows' => 4,
						'cols' => 90
					)
				) .
				$form->error($model, 'orderNotes');
			?>
		</div>

		<div class="rememberMe">
			<div class="span9">
				<?=
					$form->checkBox($model, 'acceptTerms') .
					Yii::t(
						'checkout',
						'I hereby agree to the {terms} of shopping with {storename}',
						array(
							'{storename}' => _xls_get_conf('STORE_NAME'),
							'{terms}' => CHtml::link(
								Yii::t(
									'global',
									'Terms and Conditions'
								),
								$this->createUrl('/terms-and-conditions')
							)
						)
					) .
					$form->error(
						$model,
						'acceptTerms'
					);
				?>
			</div>
		</div>
	</fieldset>
</div>

<div class="clearfix"></div>

<div id="submitblock">
	<div class="row-fluid">
		<div id="submitSpinner" style="display:none">
			<?=
				CHtml::image(
					Yii::app()->getBaseUrl(true) . '/images/wait_animated.gif'
				)
			?>
		</div>
		<?=
			CHtml::submitButton(
				Yii::t(
					'forms',
					'Submit'
				),
				array(
					'id' => 'checkoutSubmitButton'
				)
			);
		?>
	</div>
</div>

<?php
	$this->endWidget();

	$this->renderPartial(
		'ext.wssinglepagecheckout.views.instantiate',
		array(
			'model' => $model
		)
	);
