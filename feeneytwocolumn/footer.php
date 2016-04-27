<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package FeeneyTwoColumn
 */
?>

	</div><!-- #content -->
<!--
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( __( 'Proudly powered by %s', 'feeneytwocolumn' ), '<a href="http://wordpress.org/"><span class="fa fa-wordpress">ordPress</span></a>' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'feeneytwocolumn' ), 'FeeneyTwoColumn', '<a href="https://www.hotspottech.com">HotSpot Technologies</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
-->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
(function($) {
   $.fn.lastWord = function() {
  var text = this.text().trim().split(" ");
  var last = text.pop();
  this.html("<a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'>" + text.join(" ") + (text.length > 0 ? " <span class='lastWord'>" + last + "</span>" : last) + "</a>");
};
$(".site-title").lastWord();
})(jQuery);
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</body>
</html>