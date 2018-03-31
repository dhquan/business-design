<?php
/**
 * Template Name: Front-page
 *
 * @package pob
 */

get_header(); ?>

	<?php get_template_part( 'template-parts/home/top-slide' ); ?>
	<?php get_template_part( 'template-parts/home/section-features' ); ?>
	<?php get_template_part( 'template-parts/home/section-projects' ); ?>
	<?php get_template_part( 'template-parts/home/section-statistic' ); ?>
	<?php get_template_part( 'template-parts/home/section-progress' ); ?>
	<?php get_template_part( 'template-parts/home/section-news' ); ?>
	<?php get_template_part( 'template-parts/home/section-images' ); ?>
	<?php get_template_part( 'template-parts/home/section-contact' ); ?>
	<?php get_template_part( 'template-parts/home/section-maps' ); ?>
	<?php get_template_part( 'template-parts/home/section-partners' ); ?>
	<?php get_template_part( 'template-parts/home/section-testimonials' ); ?>
	<?php get_template_part( 'template-parts/home/section-info' ); ?>

<?php
get_footer();
