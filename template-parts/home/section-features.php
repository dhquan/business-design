<?php
$feature_text_default = 'This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel veliactor aliquenean sollicitu. This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel veliau ctor aliquenean sollicitu nostrud.';
?>
<section class="section--features">
	<?php
		for( $i = 1; $i <= 3; $i++){
	?>
		<div class="feature">
			<span class="pe-7s-rocket"></span>
			<h3><?php echo get_theme_mod('feature_title_'.$i,'fully responsive'); ?></h3>
			<p><?php echo get_theme_mod('feature_text_'.$i,$feature_text_default); ?></p>
		</div>
	<?php
		}
	?>
</section><!-- .section-features -->