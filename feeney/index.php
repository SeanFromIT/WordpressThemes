<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div id="getinvolved">
<img alt="Get Involved!" border="0" width="331" height="44" src="http://www.nchdems.org/images/nav/nchDemsMenu1.png" />
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YZCKKZHRWMPTG"><img alt="Donate" border="0" width="331" height="32" src="http://www.nchdems.org/images/nav/nchDemsMenu2.png" /></a>
<a href="#"><img alt="Volunteer" border="0" width="331" height="31" src="http://www.nchdems.org/images/nav/nchDemsMenu3.png" /></a>
<a href="http://boe.hamilton-co.org/register-to-vote-and-update-registration/registration-form.aspx"><img alt="Register to Vote" border="0" width="331" height="32" src="http://www.nchdems.org/images/nav/nchDemsMenu4.png" /></a>
<a href="https://www.facebook.com/nchdems"><img alt="Facebook" border="0" width="331" height="31" src="http://www.nchdems.org/images/nav/nchDemsMenu5.png" /></a>
<a href="https://www.youtube.com/channel/UCS7qi4zDqriTDLewva4-Udw"><img alt="YouTube" border="0" width="331" height="32" src="http://www.nchdems.org/images/nav/nchDemsMenu6.png" /></a>
<a href="http://www.twitter.com/nchdems"><img alt="Twitter" border="0" width="331" height="31" src="http://www.nchdems.org/images/nav/nchDemsMenu7.png" /></a>
<img alt="Get Involved!" border="0" width="331" height="17" src="http://www.nchdems.org/images/nav/nchDemsMenu8.png" />

				
					
				<br /><br />
				<a rel="county org" href="http://www.hamiltoncountydems.org/">Hamilton County Democratic Party</a><br />
				<a rel="state org" href="http://www.ohiodems.org/">Ohio Democratic Party</a><br />
				<a rel="national org" href="http://www.democrats.org/">Democratic National Committee (DNC)</a><br />
			</div>

	<div class="narrowcolumn">
<h2>Blog <a href="http://feeds.feedburner.com/nchdems"><img class="rss" alt="Subscribe by RSS" border="0" width="32" height="32" src="http://www.nchdems.org/images/rss.png" /></a> <span style="font-size:60%;font-weight:normal;">(<a target="_blank" href="http://feedburner.google.com/fb/a/mailverify?uri=nchdems&amp;loc=en_US">By Email</a>)</span></h2>
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
&nbsp;&nbsp;&nbsp;<strong><a href="http://www.nchdems.org/archives/">More from the blog &rarr;</a></strong>
	</div>
<div id="footer">

		<div id="footerleft">
			<h3>Ordinance Search</h3><br />
				<form action="http://whdrane.conwaygreene.com/NXT/gateway.dll" method="post"> 
					<input type="hidden" size="0" name="f"	value="hitlist" /> 
					<input type="hidden" size="0" name="t"	value="main-hit-h.htm" /> 
					<input type="hidden" size="0" name="tf"	value="doc" /> 
					<input type="hidden" size="0" name="tt"	value="document-frame.htm" /> 
					<input type="hidden" size="0" name="x"	value="Simple" /> 
					<input type="hidden" size="0" name="d"	value="" /> 
					<input type="hidden" size="0" name="c"	value="redirect" /> 
					<input type="hidden" size="0" name="s"	value="Relevance-Weight" /> 
					<input type="hidden" size="0" name="ht"	value="hitlist.htm" /> 
					<!-- These determine the hit list arrangement: --> 
					<input type="hidden" size="0" name="a"	value="Title" /> 
					<input type="hidden" size="0" name="h1"	value="Hit[,5]" /> 
					<input type="hidden" size="0" name="h2"	value="Relevance-Weight[,10]" /> 
					<input type="hidden" size="0" name="h3"	value="Title[,85]" /> 
					<input type="text" name="q" value="" class="control" size="20" /> 
					<input type="submit" value="Search" class="button" /> 
				</form>
		</div>
		<div id="footercenter">
			Not authorized by any candidate or candidate's committee.
			Paid for by NCH Dems for Progress.
		</div>
		<div id="googlemap">
			<h3>On the Map</h3>
			<a href="https://maps.google.com/maps?q=1500+West+Galbraith+Road,+Cincinnati,+OH&hl=en&ll=39.217143,-84.542005&spn=0.012136,0.018132&sll=39.217963,-84.551485&sspn=0.006101,0.009066&hnear=1500+W+Galbraith+Rd,+Cincinnati,+Ohio+45231&t=m&z=16"><img alt="Map of NCH" border="0" width="150" height="87" src="http://www.nchdems.org/images/nchmap.gif" /></a><br />
			<a href="https://maps.google.com/maps?q=1500+West+Galbraith+Road,+Cincinnati,+OH&hl=en&ll=39.217143,-84.542005&spn=0.012136,0.018132&sll=39.217963,-84.551485&sspn=0.006101,0.009066&hnear=1500+W+Galbraith+Rd,+Cincinnati,+Ohio+45231&t=m&z=16">View Map of NCH</a>
		</div>

<?php get_footer(); ?>