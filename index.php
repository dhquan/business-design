

<?php get_header(); ?>

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

<section class="section--statistic">
	<div class="container">
		<div class="statistic__column">
			<span class="pe-7s-map statistic__icon"></span>
			<p class="statistic__number">9859</p>
			<p class="statistic__title">cups of coffee</p>
		</div>
		<div class="statistic__column">
			<span class="pe-7s-monitor statistic__icon"></span>
			<p class="statistic__number">4697</p>
			<p class="statistic__title">lines of code</p>
		</div>
		<div class="statistic__column">
			<span class="pe-7s-helm statistic__icon"></span>
			<p class="statistic__number">6874</p>
			<p class="statistic__title">awards won</p>
		</div>
		<div class="statistic__column">
			<span class="pe-7s-mail-open-file statistic__icon"></span>
			<p class="statistic__number">3175</p>
			<p class="statistic__title">themes published</p>
		</div>
	</div>
</section><!-- .section-statis -->

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

<section class="section--news">
	<div class="container">
		<article class="news">
			<p class="news__title">You Need</p>
			<h3 class="news__name">business solutions</h3>
			<p class="news__text">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip customer feedback commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
		</article>
		<article class="news">
			<p class="news__title">You Need</p>
			<h3 class="news__name">business solutions</h3>
			<p class="news__text">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip customer feedback commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
		</article>
		<article class="news">
			<p class="news__title">You Need</p>
			<h3 class="news__name">business solutions</h3>
			<p class="news__text">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip customer feedback commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
		</article>
	</div>
</section><!-- .section-news -->

<section class="section--images">
	<?php
		for( $i = 1; $i <= 4; $i ++){
	?>
		<img class="image" src="<?php echo get_theme_mod('image_'.$i); ?>" alt="anh1">
	<?php
		}
	?>
</section><!-- .section-images -->

<section class="section--contact">
	<h2>Manage Your Money With <br />More Confidence</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
	<a href="">contact us</a>
</section><!-- .section-contact -->

<section class="section--maps">
	<div class="section--maps__left">
		<div id="accordion">
			<h3>what we do</h3>
			<div>
				<p>Photoshop’s version  of Lorem Ipsum. Proin gravida nibh vel veliauctor aliquenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
			</div>
			<h3>what we do</h3>
			<div>
				<p>Photoshop’s version  of Lorem Ipsum. Proin gravida nibh vel veliauctor aliquenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
			</div>
			<h3>what we do</h3>
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
			</div>
			<h3>what we do</h3>
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
			</div>
		</div>
	</div>
	<div class="section--maps__right">
		<iframe frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBH0jNte4vbcGprHaYczAPPwzbwOI4GvBk&q=hanoi" allowfullscreen></iframe>
	</div>
</section><!-- .section-maps -->

<section class="section--partners">
	<div class="container">
		<div class="owl-carousel owl-theme partners-slider" id="partners-slider">
			<p class="partner">clien</p>
			<p class="partner">clien</p>
			<p class="partner">clien</p>
			<p class="partner">clien</p>
		</div>
	</div>
</section><!-- .section-partners -->

<section class="section--testimonials">
	<div class="container">
		<h2 class="testimonials__title text-center">testimonials</h2>
		<p class="testimonials__text text-center">Show off your amazing employees, or highlight key members of your team. Tell <br />the world who you are and why your team is the best.</p>
		<div class="owl-carousel owl-theme testimonials-slider" id="testimonials-slider">
			<div class="testimonials__slide">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br /> accusantium natus error sit volu ptatem accusantium unde <br /> omnis.Sed ut perspiciatis unde omnis iste natus.</p>
				<div class="employees">
					<img src="<?php bloginfo('template_directory'); ?>/images/avatar1.jpg" class="employees__image">
					<div class="employees-info">
						<h4 class="employees-info__name">elwood barren</h4>
						<span class="employees-info__job">Designer</span>
					</div>
				</div>
			</div>
			<div class="testimonials__slide">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br /> accusantium natus error sit volu ptatem accusantium unde <br /> omnis.Sed ut perspiciatis unde omnis iste natus.</p>
				<div class="employees">
					<img src="<?php bloginfo('template_directory'); ?>/images/avatar2.jpg" class="employees__image">
					<div class="employees-info">
						<h4 class="employees-info__name">elwood barren</h4>
						<span class="employees-info__job">Designer</span>
					</div>
				</div>
			</div>
			<div class="testimonials__slide">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br /> accusantium natus error sit volu ptatem accusantium unde <br /> omnis.Sed ut perspiciatis unde omnis iste natus.</p>
				<div class="employees">
					<img src="<?php bloginfo('template_directory'); ?>/images/avatar1.jpg" class="employees__image">
					<div class="employees-info">
						<h4 class="employees-info__name">elwood barren</h4>
						<span class="employees-info__job">Designer</span>
					</div>
				</div>
			</div>
			<div class="testimonials__slide">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br /> accusantium natus error sit volu ptatem accusantium unde <br /> omnis.Sed ut perspiciatis unde omnis iste natus.</p>
				<div class="employees">
					<img src="<?php bloginfo('template_directory'); ?>/images/avatar2.jpg" class="employees__image">
					<div class="employees-info">
						<h4 class="employees-info__name">elwood barren</h4>
						<span class="employees-info__job">Designer</span>
					</div>
				</div>
			</div>
			<div class="testimonials__slide">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br /> accusantium natus error sit volu ptatem accusantium unde <br /> omnis.Sed ut perspiciatis unde omnis iste natus.</p>
				<div class="employees">
					<img src="<?php bloginfo('template_directory'); ?>/images/avatar1.jpg" class="employees__image">
					<div class="employees-info">
						<h4 class="employees-info__name">elwood barren</h4>
						<span class="employees-info__job">Designer</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- .section-testimonials -->

<section class="section--info">
	<div class="container">
		<div class="section--info__left">
			<h3>our office</h3>
			<p>Etiam convallis, felis quis dapibus dictum, libero mauris luctus nunc, non fringilla purus ligula non justo. Non fringilla purus ligula non justo.</p>
			<div class="info-left-inner">
				<div class="info-left__city">
					<h4>barcelona</h4>
					<p>198 West 21th Street, Suite 721 <br />Barselona:20020<br /><br />Email: youremail@yourdomain.com<br />Phone:+88(0) 101 0000 000</p>
				</div>
				<div class="info-left__city">
					<h4>new york</h4>
					<p>198 West 21th Street, Suite 721 <br />Barselona:20020<br /><br />Email: youremail@yourdomain.com<br />Phone:+88(0) 101 0000 000</p>
				</div>
			</div>
		</div>
		<div class="section--info__right">
			<form action="" method="post">
				<input type="text" class="input-name" placeholder="Your Name *"><br />
				<input type="text" class="input-email" placeholder="E-mail *"><br />
				<textarea rows="4" cols="10" placeholder="Your Website" class="input-textarea"></textarea><br />
				<input type="submit" value="contact us">
			</form>
		</div>
	</div>
</section><!-- .section-info -->

<?php get_footer(); ?>

</body>
</html>
