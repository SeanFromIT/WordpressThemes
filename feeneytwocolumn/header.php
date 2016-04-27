<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package FeeneyTwoColumn
 */

$social = array();
if (get_theme_mods() != false) {
	$social = get_theme_mods();
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-936138-19', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'feeneytwocolumn' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding" 
			<?php if ( get_header_image() ) : ?>
			style="background-image: url('<?php header_image(); ?>');"
			<?php endif; // End header image check. ?>
		>
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
<div id="socialMediaContainer">
<div id="socialMedia">
	<?php 
	if (!empty($social) && !empty($social['linkedin_url']) && filter_var($social['linkedin_url'], FILTER_VALIDATE_URL)) {
		echo '<a title="LinkedIn" href="' . $social['linkedin_url'] . '" target="_blank"><img alt="LinkedIn" width="35" height="35" src="' . get_template_directory_uri() . '/images/linkedin.png" /></a> ';
	}
	if (!empty($social) && !empty($social['twitter_url']) && filter_var($social['twitter_url'], FILTER_VALIDATE_URL)) {
		echo '<a title="Twitter" href="' . $social['twitter_url'] . '" target="_blank"><img alt="Twitter" width="35" height="35" src="' . get_template_directory_uri() . '/images/twitter.png" /></a> ';
	}
	if (!empty($social) && !empty($social['facebook_url']) && filter_var($social['facebook_url'], FILTER_VALIDATE_URL)) {
		echo '<a title="Facebook" href="' . $social['facebook_url'] . '" target="_blank"><img alt="Facebook" width="35" height="35" src="' . get_template_directory_uri() . '/images/facebook.png" /></a> ';
	}
	if (!empty($social) && !empty($social['google_url']) && filter_var($social['google_url'], FILTER_VALIDATE_URL)) {
		echo '<a title="Google+" href="' . $social['google_url'] . '" target="_blank"><img alt="Google+" width="35" height="35" src="' . get_template_directory_uri() . '/images/google+.png" /></a> ';
	}
	if (!empty($social) && !empty($social['skype_username'])) {
		echo '<a title="Skype" href="skype:' . $social['skype_username'] . '?chat"><img alt="Skype" width="35" height="35" src="' . get_template_directory_uri() . '/images/skype.png" /></a> ';
	}
	?>
	<a href="<?php bloginfo('rss2_url'); ?>"><img alt="RSS" width="35" height="35" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rss.png" /></a>
</div>
</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">