<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package FeeneyTwoColumn
 */

if ( ! function_exists( 'feeneytwocolumn_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function feeneytwocolumn_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'feeneytwocolumn' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'feeneytwocolumn' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'feeneytwocolumn' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'feeneytwocolumn_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function feeneytwocolumn_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'feeneytwocolumn' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span>&nbsp;%title', 'Previous post link', 'feeneytwocolumn' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title&nbsp;<span class="meta-nav">&rarr;</span>', 'Next post link',     'feeneytwocolumn' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'feeneytwocolumn_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function feeneytwocolumn_posted_on() {
	$longDate = esc_attr( get_the_time( 'F j Y' ) );
	$unixDate = esc_attr( get_the_date( 'c' ) );
	$shortDateMonth = esc_attr( get_the_time( 'M' ) );
	$shortDateDay = esc_attr( get_the_time( 'j' ) );
	$shortDateYear = esc_attr( get_the_time( 'Y' ) );

	echo '<a class="entry-date" title="' . $longDate . '" href="' . esc_url( get_permalink() ) . '">';
	echo '<time datetime="' . $unixDate . '">' . $shortDateDay . ' ' . $shortDateMonth . ' ' . $shortDateYear . '</time></a>';

	$byline = sprintf(
		_x( 'by %s', 'post author', 'feeneytwocolumn' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

//	echo '<span class="byline"> ' . $byline . '</span>';

}
endif;

if ( ! function_exists( 'feeneytwocolumn_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function feeneytwocolumn_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'feeneytwocolumn' ) );
		if ( $categories_list && feeneytwocolumn_categorized_blog() ) {
			printf( '<span class="cat-links"><span class="fa fa-folder-open"></span> ' . __( 'Posted in %1$s', 'feeneytwocolumn' ) . '</span>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'feeneytwocolumn' ) );
		if ( $tags_list ) {
			printf( '&nbsp;&nbsp;&nbsp;<span class="tags-links"><span class="fa fa-tags"></span> ' . __( '%1$s', 'feeneytwocolumn' ) . '</span>', $tags_list );
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '&nbsp;&nbsp;&nbsp;<span class="comments-link"><span class="fa fa-comment"></span> ';
		comments_popup_link( __( 'Leave a comment', 'feeneytwocolumn' ), __( '1 Comment', 'feeneytwocolumn' ), __( '% Comments', 'feeneytwocolumn' ) );
		echo '</span>';
	}

	edit_post_link( __( 'Edit', 'feeneytwocolumn' ), '&nbsp;&nbsp;&nbsp;<span class="edit-link"><span class="fa fa-pencil-square-o"></span> ', '</span>' );
}
endif;

if ( ! function_exists( 'the_archive_title' ) ) :
/**
 * Shim for `the_archive_title()`.
 *
 * Display the archive title based on the queried object.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the title. Default empty.
 * @param string $after  Optional. Content to append to the title. Default empty.
 */
function the_archive_title( $before = '', $after = '' ) {
	if ( is_category() ) {
		$title = sprintf( __( 'Category: %s', 'feeneytwocolumn' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		$title = sprintf( __( 'Tag: %s', 'feeneytwocolumn' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		$title = sprintf( __( 'Author: %s', 'feeneytwocolumn' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		$title = sprintf( __( 'Year: %s', 'feeneytwocolumn' ), get_the_date( _x( 'Y', 'yearly archives date format', 'feeneytwocolumn' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( __( 'Month: %s', 'feeneytwocolumn' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'feeneytwocolumn' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( __( 'Day: %s', 'feeneytwocolumn' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'feeneytwocolumn' ) ) );
	} elseif ( is_tax( 'post_format' ) ) {
		if ( is_tax( 'post_format', 'post-format-aside' ) ) {
			$title = _x( 'Asides', 'post format archive title', 'feeneytwocolumn' );
		} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
			$title = _x( 'Galleries', 'post format archive title', 'feeneytwocolumn' );
		} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
			$title = _x( 'Images', 'post format archive title', 'feeneytwocolumn' );
		} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
			$title = _x( 'Videos', 'post format archive title', 'feeneytwocolumn' );
		} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
			$title = _x( 'Quotes', 'post format archive title', 'feeneytwocolumn' );
		} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
			$title = _x( 'Links', 'post format archive title', 'feeneytwocolumn' );
		} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
			$title = _x( 'Statuses', 'post format archive title', 'feeneytwocolumn' );
		} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
			$title = _x( 'Audio', 'post format archive title', 'feeneytwocolumn' );
		} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
			$title = _x( 'Chats', 'post format archive title', 'feeneytwocolumn' );
		}
	} elseif ( is_post_type_archive() ) {
		$title = sprintf( __( 'Archives: %s', 'feeneytwocolumn' ), post_type_archive_title( '', false ) );
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
		$title = sprintf( __( '%1$s: %2$s', 'feeneytwocolumn' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} else {
		$title = __( 'Archives', 'feeneytwocolumn' );
	}

	/**
	 * Filter the archive title.
	 *
	 * @param string $title Archive title to be displayed.
	 */
	$title = apply_filters( 'get_the_archive_title', $title );

	if ( ! empty( $title ) ) {
		echo $before . $title . $after;
	}
}
endif;

if ( ! function_exists( 'the_archive_description' ) ) :
/**
 * Shim for `the_archive_description()`.
 *
 * Display category, tag, or term description.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
function the_archive_description( $before = '', $after = '' ) {
	$description = apply_filters( 'get_the_archive_description', term_description() );

	if ( ! empty( $description ) ) {
		/**
		 * Filter the archive description.
		 *
		 * @see term_description()
		 *
		 * @param string $description Archive description to be displayed.
		 */
		echo $before . $description . $after;
	}
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function feeneytwocolumn_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'feeneytwocolumn_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'feeneytwocolumn_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so feeneytwocolumn_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so feeneytwocolumn_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in feeneytwocolumn_categorized_blog.
 */
function feeneytwocolumn_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'feeneytwocolumn_categories' );
}
add_action( 'edit_category', 'feeneytwocolumn_category_transient_flusher' );
add_action( 'save_post',     'feeneytwocolumn_category_transient_flusher' );