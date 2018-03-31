<section class="section--projects">
	<div class="container">

		<h2 class="projects__title text-center"><?php echo get_theme_mod('project_slider_title','tons of cool shortcodes'); ?></h2>
		<div class="projects__description text-center"><?php echo get_theme_mod('project_slider_description','Elated Themes provide a large collection of elements and shortcodes.Create any layout combination you can imagine.');?></div>

		<div class="owl-carousel owl-theme projects-slide" id="projects-slide">
			<?php
			$number_slide = get_theme_mod('project_slider_number',4);

			$query2 = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => $number_slide,
			) );
			if ( ! $query2->have_posts() ) {
				return;
			}

			?>
			<?php
			while ( $query2->have_posts() ) :
				$query2->the_post();
				?>
				<div class="project">
					<a href="" class="project__image">
						<?php the_post_thumbnail();?>
					</a>
					<h3>
						<a href="" class="project__name"><?php the_title(); ?></a>
					</h3>
					<div class="project__text"><?php the_content();?></div>
				</div>
				<?php
			endwhile
			?>
		</div>
	</div>
</section><!-- .section-projects -->