<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div id="sidebar" class="narrowcolumn">

<?php get_search_form(); ?>

<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

</div>

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$wp_query->query('showposts=10'.'&paged='.$paged);
//query_posts('showposts=10');
if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>


			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>


	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

<?php get_footer(); ?>
