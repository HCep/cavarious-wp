<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package materialwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/splide.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<style>
	<?php if(is_page('kontakt') || is_page('news') || is_page('news-2') || is_page('contact')):?>
	<?php else:?>
.site-content{
	background-image: url('<?php echo get_template_directory_uri(); ?>/images/p-bg-1.jpg');
	background-repeat: no-repeat;
	background-size:cover;
}
<?php endif;

if(is_front_page()){
?>

.site-footer{
	background-image: url('<?php echo get_template_directory_uri(); ?>/images/down-bg-1-1-1.webp');
	background-repeat: no-repeat;
	background-size:cover;
	min-height:700px;
	color:white;
}
<?php } ?>
</style>
<body <?php body_class(); ?>>
<?php if(!is_front_page()){?>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v13.0" nonce="p0jTVXw0"></script>
<?php } ?>

<div id="page" class="feed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'materialwp' ); ?></a>
	
	<nav class="navbar navbar-expand-lg">
  
	<a class="navbar-brand custom-brand logo-none" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				
							if ( has_custom_logo() ) {
								echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . ' width="117" height="117">';
							} else {
								echo '<h1>' . get_bloginfo('name') . '</h1>';
							}?>	
		</a>
  <button class="hamburger hamburger--squeeze navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>

  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
	<?php
						wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => false,
							'menu_class'        => 'menu-list-container menu-list-container-main',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
						
					?>
     
    </div>
  </div>
</nav>



	<div id="content" class="site-content">

	
