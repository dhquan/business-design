<div class="owl-carousel owl-theme slider" id="slider">
	<?php
	$slide = new WP_Query( array(
		'post_type' => 'top_slide',
	) );
	?>
	<?php
	while ( $slide->have_posts() ) :
		$slide->the_post();
		$slide_image = get_field('slide_image');
		$description_1 = get_field('description_1');
		$description_2 = get_field('description_2');
		$button_text_1 = get_field('button-text-1');
		$link_button_text_1 = get_field('link_button_text_1');
		$button_text_2 = get_field('button-text-2');
		$link_button_text_2 = get_field('link_button_text_2');
		?>
		<div class="slide">
			<img class="slide__image" src="<?php echo $slide_image['url'];?>">
			<div class="container">
				<div class="slide__title">
					<h4><?php the_title(); ?></h4>
					<h3><?php echo $description_1;?></h3>
					<p><?php echo $description_2;?></p>
				</div>
				<div class="slide__buttons">
					<a href="<?php echo $link_button_text_1; ?>" class="slide-button"><?php echo $button_text_1;?></a>
					<a href="<?php echo $link_button_text_2; ?>" class="slide-button"><?php echo $button_text_2;?></a>
				</div>
			</div>
		</div>
		<?php
	endwhile
	?>


</div><!-- .slider -->
</div><!-- .header-wrapper -->