<?php

?>

	</div><!-- #content -->
	</div><!-- .row -->
			</div>
			<?php if(is_front_page()){ ?>
	<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="container">
				<div class="row justify-content-between align-items-center padding-bottom-50">
					
					<div class="col-xs-12">
					<?php get_sidebar('footer'); ?> 
					</div>
					
				</div>
				<?php } ?>

		<!-- prawa autorskie -->
	
		

	</footer><!-- #colophon -->
	<div class="site-info">
							2022 - CoolBrand
						</div><!-- .site-info -->
</div><!-- #page -->
<?php if(is_front_page()): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/splide.min.js"></script>
<script>
	var splide = new Splide( '.splide', {
  type    : 'loop',
  autoplay: true,
} );

  new Splide( '.splide' ).mount();
</script>
<?php endif;?>
<?php wp_footer(); ?>

</body>
</html>
