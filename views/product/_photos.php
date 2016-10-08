<div class="row">
	<legend></legend>
	<div class="targetArea span11">
	<?php 
	$photos = $model->ProductPhotos;
	// echo '<pre>';
	// print_r($photos[0]);
	// echo '</pre>';
	echo ('<a class="fancybox" rel="fancy_gall" href="' . $photos[0]["image_large"] . '" alt="' . $photos[0]["image_alt"].'"><img src="'.$photos[0]["image_large"].'"/></a>');

	?>
	</div>
	<div class="thumbs span11">
	<?php
		if(count($photos)>1){
			foreach($photos as $index => $photo ){
				if ($index >= 1) {
					echo('<a class="fancybox" rel="fancy_gall" href="' . $photo["image_large"] . '" alt="' . $photo["image_alt"].'"><img src="'.$photo["image_thumb"].'"/></a>');
				}
			}
		}
	?>
	</div>
</div>

<script>
		$(document).ready(function() {
			$('body').addClass('product-page');
			$("a.fancybox").fancybox();
		});
			
	</script>