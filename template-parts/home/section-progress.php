<section class="section--progress">
	<div class="container">
		<div class="section--progress__left">
			<h2 class="progress-left__title"><?php echo get_theme_mod('progress_title','mexo design. Who we are & what we do');?></h2>
			<p class="progress-left__text"><?php echo get_theme_mod('progress_text','The team have invested considerable time in reviewing and providing feedback on your submission. If we feel that you have not');?></p>
			<?php
				for( $i = 1; $i <= 4; $i++){
			?>
				<div class="progress-left__content">
					<div class="progress-text">
						<p class="progress-text__name"><?php echo get_theme_mod('progress_text_name_'.$i,'lines of code');?></p>
						<p class="progress-text__percent"><?php echo get_theme_mod('progress_text_percent_'.$i,'85');?>%</p>
					</div>
					<div class="progress">
						<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" class="progress-bar" role="progressbar" style="width:<?php echo get_theme_mod('progress_text_percent_'.$i,'85');?>%">
						</div>
					</div>
				</div>
			<?php
				}
			?>
		</div>
		<div class="section--progress__right">
			<img class="progress-right-image" src="<?php echo get_theme_mod('progress_image'); ?>">
		</div>
	</div>
</section><!-- .section-progress -->