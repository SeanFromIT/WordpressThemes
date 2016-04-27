<?php
/**
 * @package FeeneyTwoColumn
 */

$mods = array();
if (get_theme_mods() != false) {
	$mods = get_theme_mods();
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php feeneytwocolumn_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_excerpt( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'feeneytwocolumn' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'feeneytwocolumn' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php feeneytwocolumn_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php if (!empty($mods) && !empty($mods['adsense_id'])) { ?>
	<ins class="adsbygoogle mainads"
     style="display:inline-block;width:320px;height:100px;"
     data-ad-client="<?php echo $mods['adsense_id']; ?>" data-ad-slot="8499348620"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
<?php } ?>