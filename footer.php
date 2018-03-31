<footer class="footer">
	<div class="footer-content">
		<div class="container">
			<div class="footer-content-logo footer-column">
				<h1 class="footer-logo">p<span>o</span>b</h1>
				<p>This is Photoshop's version of Lorem Ipsnidanibh vel velit auctor aliquet. <br /><br />This is Photoshop's version of Lorem Ipsnidanibh vel velit auctor aliquet. Aeneansollicitudin, lorem quis.</p>
				<div class="footer-icon">
					<a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-vimeo" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="footer-content-info footer-column">
				<h4 class="title">business solutions</h4>
				<ul class="footer-content-info-icon">
					<li><i class="pe-7s-pin"></i>184 Main Collins Street West</li>
					<li><i class="pe-7s-clock"></i>Mon - Sat 8.00 - 18.00 Sunday</li>
					<li><i class="pe-7s-mail"></i>info@yoursite.com</li>
					<li><i class="pe-7s-helm"></i>bluthemes.com</li>
				</ul>
			</div>
			<div class="footer-content-news footer-column">
				<h4 class="title">recent news</h4>
				<div class="content">
					<article class="aside-post">
						<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/footer-news-1.jpg"></a>
						<div class="footer-content-news-title">
							<p><a class="name" href="">awesome media template</a></p>
							<time class="time" datetime="9 September 2017">September 7,2017</time>
						</div>
					</article>
					<article class="aside-post">
						<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/footer-news-2.jpg"></a>
						<div class="footer-content-news-title">
							<p><a class="name" href="">awesome media template</a></p>
							<time class="time" datetime="9 September 2017">September 7,2017</time>
						</div>
					</article>
					<article class="aside-post">
						<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/footer-news-3.jpg"></a>
						<div class="footer-content-news-title">
							<p><a class="name" href="">awesome media template</a></p>
							<time class="time" datetime="9 September 2017">September 7,2017</time>
						</div>
					</article>
				</div>
			</div>
			<div class="footer-content-instagram footer-column">
				<h4 class="title">instagram</h4>
				<div class="instagram-images">
					<img src="<?php bloginfo('template_directory'); ?>/images/instagram1.jpg">
					<img src="<?php bloginfo('template_directory'); ?>/images/instagram2.jpg">
					<img src="<?php bloginfo('template_directory'); ?>/images/instagram3.jpg">
					<img src="<?php bloginfo('template_directory'); ?>/images/instagram4.jpg">
					<img src="<?php bloginfo('template_directory'); ?>/images/instagram5.jpg">
					<img src="<?php bloginfo('template_directory'); ?>/images/instagram6.jpg">
				</div>
			</div>
		</div>
	</div><!-- .footer-content -->
	<div class="footer-copyright">
		<p class="text-center"><?php echo get_theme_mod('footer_setting','copy-right') ?></p>
	</div><!-- .footer-copyright -->
</footer><!-- .footer -->
</div>
<div class="slideout-sidebar">
	<div class="slideout-sidebar__header">
		<span class="header__site-title">p<span>o</span>b</span>
		<button class="header__close" onclick="remove()"><i class="fa fa-times" aria-hidden="true"></i></button>
	</div>
	<div class="slideout-sidebar__body">
		<div id="nav_menu-2" class="widget widget_nav_menu">
			<div class="menu-menu-container">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container' => 'false',
							'menu_id' => 'menu-menu',
							'menu_class' => 'menu menu-sidebar',
						)
					);
				?>
			</div>
		</div>
	</div>
	<div class="slideout-sidebar__footer">
	Copyright 2017 @ POB Themes.</div>
</div>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js" type="text/javascript"></script>
<script>
	$( "#accordion" ).accordion();
</script>
<script type="text/javascript">
	function toggle(event){
		var body = document.getElementById("body");
		event.stopImmediatePropagation();
		body.classList.add("slideout-sidebar-open");
	}
	function remove(){
		var body = document.getElementById("body");
		body.classList.remove("slideout-sidebar-open");
	}
</script>
<?php wp_footer(); ?>