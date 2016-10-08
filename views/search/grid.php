<?php
	$this->layout='/layouts/column2';
?>

<div id="gridheader">
	    <h1><?php echo $this->pageHeader; ?></h1>

	    <div class="subcategories">
			<?php  if(isset($this->subcategories) && (count($this->subcategories) > 0)): ?>

			<?php echo _sp("Subcategories"); ?>:
			<?php foreach ($this->subcategories as $item)
					echo CHtml::link(trim($item['label']), $item['link']); ?>
			<?php endif; ?>
	    </div>

		<?php if(isset($this->custom_page_content)): ?>
		    <div id="custom_content">
				<?php echo $this->custom_page_content; ?>
		    </div>
		<?php endif; ?>


	</div>


<?php if (count($model) > 0): ?>


		<?php
		$ct=-1;
		if(strcasecmp($this->pageHeader, "tufenkian") === 0){
			usort($model, function($a, $b)
			{
				return strcmp($a->attributes["title"], $b->attributes["title"]);
			});
		}

	
		$rowCounter = 0;
		foreach($model as $objProduct):



			if ($rowCounter===0)
				echo '<div class="row-fluid">';

			$rowCounter += 1;

			//Our product cell is a nested div, containing the graphic and text label with clickable javascript


			if(strcasecmp($this->pageHeader, "tufenkian") === 0){
				echo CHtml::tag('div',array(
		        'class'=>'product_cell span'.(12/$this->gridProductsPerRow)),

					CHtml::tag('div',array(
				    'class'=>'product_cell_graphic',
				    'onClick'=>'js:window.location.href="'.$objProduct->Link.'"'),
			        CHtml::link(CHtml::image($objProduct->ListingImage), $objProduct->Link)).

					CHtml::tag('div',array(
					    'class'=>'product_cell_label only_name_label',
					    'onClick'=>'js:window.location.href="'.$objProduct->Link.'"'
				        ),
				        CHtml::link(_xls_truncate($objProduct->Title , 50), $objProduct->Link)
		            )
				);

			}elseif($objProduct->attributes["code"] >= 6451 && $objProduct->attributes["code"] <=6543 && ($objProduct->attributes["code"] > 6508 || $objProduct->attributes["code"] < 6478)){
				echo CHtml::tag('div',array(
		        'class'=>'product_cell span'.(12/$this->gridProductsPerRow)),

					CHtml::tag('div',array(
				    'class'=>'product_cell_graphic',
				    'onClick'=>'js:window.location.href="'.$objProduct->Link.'"'),
			        CHtml::link(CHtml::image($objProduct->ListingImage), $objProduct->Link)).

					CHtml::tag('div',array(
					    'class'=>'product_cell_label product_cell_tufenkian',
					    'onClick'=>'js:window.location.href="'.$objProduct->Link.'"'
				        ),
				        CHtml::link(_xls_truncate($objProduct->Title , 50), $objProduct->Link).
				        	CHtml::tag('span',array('class'=>'lower'), "Priced by Size")
		            )
				);


			}
			else {

			echo CHtml::tag('div',array(
		        'class'=>'product_cell span'.(12/$this->gridProductsPerRow)),

					CHtml::tag('div',array(
				    'class'=>'product_cell_graphic',
				    'onClick'=>'js:window.location.href="'.$objProduct->Link.'"'),
			        CHtml::link(CHtml::image($objProduct->ListingImage), $objProduct->Link)).

					CHtml::tag('div',array(
					    'class'=>'product_cell_label',
					    'onClick'=>'js:window.location.href="'.$objProduct->Link.'"'
				        ),
				        CHtml::link(_xls_truncate($objProduct->Title , 50), $objProduct->Link).
					        CHtml::tag('span',array('class'=>'product_cell_price_slash'),$objProduct->SlashedPrice).
					        CHtml::tag('span',array('class'=>'product_cell_price'),$objProduct->Price).
					        CHtml::tag('span',array('class'=>'product_cell_size'), "Size: <span class='lower'>".$objProduct->attributes["product_size"]."</span")
		            )
				);
			}

			if ($rowCounter === 3){
				$rowCounter = 0;
				echo '</div>';
			}

		endforeach; 
		if($rowCounter !== 0)
			echo '</div>'; ?>

		<div class="clearfix"></div>

		<div id="paginator" class="span12">
			<?php $this->widget('CLinkPager', array(
				'id'=>'pagination',
				'currentPage'=>$pages->getCurrentPage(),
				'itemCount'=>$item_count,
				'pageSize'=>_xls_get_conf('PRODUCTS_PER_PAGE'),
				'maxButtonCount'=>5,
				'firstPageLabel'=> '<< '.Yii::t('global','First'),
				'lastPageLabel'=> Yii::t('global','Last').' >>',
				'prevPageLabel'=> '< '.Yii::t('global','Previous'),
				'nextPageLabel'=> Yii::t('global','Next').' >',
				'header'=>'',
				'htmlOptions'=>array('class'=>'pagination'),
				)); ?>
        </div>


<?php endif;

