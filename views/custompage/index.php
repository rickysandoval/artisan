<?php
	$this->layout='/layouts/customlayout';
?>


<script>
$(document).ready(function(){
	if( $('#FAQ_page').length){

		$('#FAQ_list ul li.question').css({ cursor: 'pointer' });
		$('#FAQ_list ul li.answer').css({ height: 0, overflow: 'hidden', 'margin-bottom': '5px' });

		$('#FAQ_list ul li.question').each(function() {
			var tis = $(this), state= false, answer = tis.next('li').hide().css('height', 'auto').slideUp();
			tis.click(function() {
				state = !state;
				answer.slideToggle(state);
				tis.toggleClass('active', 'state');
			});
		});

	}
});

</script>

<div id="custom_content" class="span12">
	<?php echo $model->page; ?>
</div>

<div class="span12 clearfix custom_carousel">
	<?php
		$this->widget('ext.JCarousel.JCarousel', array(
			'dataProvider' => $model->taggedProducts(),
			'thumbUrl' => '$data->SliderImage',
			'imageUrl' => '$data->Link',
			'emptyText'=>'',
			'titleText' => '$data->Title',
			'captionText' => '$data->Title."<br>"._xls_currency($data->Price)',
			'target' => 'do-not-delete-this',
			'wrap' => 'circular',
			'visible' => true,
			'skin' => 'slider',
			'clickCallback'=>'window.location.href=itemSrc;'
		)); ?>
</div>
