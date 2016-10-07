</div >
<div id="menubackground">
<div id="container" class="container-fluid text-center">


<div id="menubar" class="row-fluid menu hidden-xs">

	<div class="span2">
		<?php $this->widget('application.extensions.wsmenu.wsmenu', array(
			'categories'=> $this->MenuTree,
			'menuheader'=> Yii::t('global','All Rugs'),
			'showarrow'=>true,
		)); //products dropdown menu ?>
	</div>

	<div class="span7">
		<?php if (count(CustomPage::model()->toptabs()->findAll()))
			$this->widget('zii.widgets.CMenu', array(
			'id'=>'menutabs',
			'itemCssClass'=>'menutab menuunderline span'.round(12/count(CustomPage::model()->toptabs()->findAll())),
			'items'=>CustomPage::model()->toptabs()->findAll()
		)); ?>
	</div>


	<div id="searchentry" class="span3">
		<?php echo $this->renderPartial("/site/_search",array(),true); ?>
	</div>

</div><!-- menubar -->

<div id="menubar-xs" class="visible-xs">
	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<?= Yii::t('global','Menu'); ?>
	</a>
	<div class="nav-collapse collapse">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=> count(CustomPage::model()->toptabs()->findAll()) ? array_merge(CustomPage::model()->toptabs()->findAll(), $this->MenuTreeTop) : $this->MenuTreeTop,
			'htmlOptions'=>array('class'=>'nav'),
			'activeCssClass'=>'active',
		)); //products dropdown menu ?>
	</div>
</div><!-- mobile menubar -->

<div class="clearfix"></div>
</div>
</div>
<div id="container" class="container-fluid text-center">