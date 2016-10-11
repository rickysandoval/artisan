<div id="footer">
	<div class="full-width">
		<div class="container-fluid" id="container">
			<div class="footer-top row-fluid">
				<div>
					<div id="cbinfo" class="span5">
						<div class="footer__owner">Jeff Deutsch</div>
						<div>311 Elk Ave </div>
						<div>Crested Butte, CO 81224</div>
						<div>(970) 349-0016</div>
						<div>jeff@artisanruggallery.com</div>
					
					</div>
					<div class="footer-middle span2">
						<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl.'/css/images/logo-footer.jpg'), Yii::app()->baseUrl."/"); ?>
					</div>
					<div id="denverinfo" class="span5">
						<div class="footer__owner">Kathy Discoe</div>
						<div>Shops at 9th 899 N Broaday </div>
						<div>Denver, CO 80203 </div>
						<div>(303) 825-0064</div>
						<div>kathy@artisanruggallery.com</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width">
		<div class="container-fluid" id="container">
			<div class="row-fluid footer-bottom">
				<div class="bottomtabs span4">
					<?php
						foreach (CustomPage::model()->bottomtabs()->findAll() as $arrTab)
							echo CHtml::link(Yii::t('global',$arrTab->title),$arrTab->Link).' / ';
					echo CHtml::link(Yii::t('global','Sitemap'),$this->createUrl('site/map'));
					?>
				</div>
				<div class="copyright span4">
					&copy; <?= Yii::t('global', 'Copyright') ?> <?= date("Y"); ?> <?= _xls_get_conf('STORE_NAME') ?>. <?= Yii::t('global', 'All Rights Reserved'); ?>.
				</div>
				<div class="social span4">
					<span><a href="https://www.facebook.com/artisanrugscb" target="_blank"><span class="fa fa-facebook"></span></a></span>
					<span><a href="https://twitter.com/artisanrug" target="_blank"><span class="fa fa-twitter"></span></a></span>
					<span><a href="https://www.instagram.com/artisanruggallery/" target="_blank"><span class="fa fa-instagram"></span></a></span>
				</div>
			</div>
		</div>
	</div>
</div>

