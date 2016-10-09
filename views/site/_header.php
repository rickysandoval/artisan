<div id="topbar" class="row-fluid header">
	<div class="span9">
		<div class="header__logo">
			<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl._xls_get_conf('HEADER_IMAGE')), Yii::app()->baseUrl."/"); ?>
		</div>
	</div>
	<div class="span3">
		<div id="login" class="login">
			<?php if(Yii::app()->user->isGuest): ?>
				<?php echo CHtml::ajaxLink(Yii::t('global','Login'),array('site/login'),
					array('onClick'=>'js:jQuery($("#LoginForm")).dialog("open")'),
					array('id'=>'btnLogin')); ?>
				&nbsp;/&nbsp;
				<a href="<?= _xls_site_url('myaccount/edit'); ?>"><?php echo Yii::t('global', 'Register'); ?></a>
			<?php else: ?>
				<?php echo CHtml::link('<span class="fa fa-user"></span>'.Yii::app()->user->firstname, array('/myaccount')); ?>
				&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo CHtml::link(Yii::t('global', 'Logout'), array("site/logout")); ?>
				<?php endif; ?>
		</div>
	</div>
</div>