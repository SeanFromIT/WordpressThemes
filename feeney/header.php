<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="content-language" content="en-us" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="author" content="North College Hill Democratic Club" />
	<meta name="abstract" content="North College Hill Democratic Club" /> 
	<meta name="copyright" content="North College Hill Democratic Club" /> 
	<meta name="description" content="North College Hill Democrats for Progress is the official wing of the Democratic Party in North College Hill, OH." /> 
	<meta name="keywords" content="north college hill, ohio, oh, democratic, club, progress, progressives, hamilton, county, college hill, cincinnati, party, democrat, democrats, politics, campaign, candidates, candidate, government, donkey, rooster, blog, events, history, platform, beliefs, issues, committee, local, vote, voting, guide, news" /> 
	<meta name="robots" content="all" /> 
	<meta name="security" content="public" /> 
	<meta name="dc.description" content="North College Hill Democrats for Progress is the official wing of the Democratic Party in North College Hill, OH." /> 
	<meta name="dc.language" content="en-us" /> 
	<meta name="dc.rights" content="Copyright (c) 2010-2014 by North College Hill Democrats for Progress" /> 
	<meta name="dc.subject" content="north college hill, ohio, oh, democratic, club, progress, progressives, hamilton, county, college hill, cincinnati, party, democrat, democrats, politics, campaign, candidates, candidate, government, donkey, rooster, blog, events, history, platform, beliefs, issues, committee, local, vote, voting, guide, news" /> 
	<meta name="dc.title" content="North College Hill Democratic Club" />
	<!--North College Hill Democrats for Progress is the official wing of the Democratic Party in North College Hill, OH.--> 
<link rel="schema.dc" href="http://purl.org/DC/elements/1.0/" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
	<link rel="icon" href="favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>
</style>
<style type="text/css">
<!--
#s3slider {
   width: <?echo get_option('js_op_width');?>px; /* important to be same as image width */
   height: <?echo get_option('js_op_height');?>px; /* important to be same as image height */
}
#s3sliderContent {
   width: <?echo get_option('js_op_width');?>px; /* important to be same as image width or wider */
}
.s3sliderImage span {
   filter: alpha(opacity=<?echo get_option('js_op_opacity')?>); /* here you can set the opacity of box with text */
   -moz-opacity: <?echo round((get_option('js_op_opacity')/100),1);?>; /* here you can set the opacity of box with text */
   -khtml-opacity: <?echo round((get_option('js_op_opacity')/100),1);?>; /* here you can set the opacity of box with text */
   opacity: <?echo round((get_option('js_op_opacity')/100),1);?>; /* here you can set the opacity of box with text */
}
.s3sliderImage span.left {
	height:<?echo get_option('js_op_height')-20;?>px;
	width:<?echo get_option('js_op_left_width');?>px !important;
}
.s3sliderImage span.right {
	height:<?echo get_option('js_op_height')-10;?>px;
	width:<?echo get_option('js_op_right_width');?>px !important;
}
.s3sliderImage span.top {
	width: <?echo get_option('js_op_width')-26;?>px;	
}
.s3sliderImage span.bottom{
	width: <?echo get_option('js_op_width')-26;?>px;	
}
-->
</style>
<script src="<?echo get_bloginfo('url')?>/wp-content/plugins/JPostSlider/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
		//jquery for list signup form
		$(document).ready(function(){
		var clearMePrevious = '';
		// clear input on focus
		$('#entry_1').focus(function()
		{
		if($(this).val()==$(this).attr('title'))
		{
		clearMePrevious = $(this).val();
		$(this).val('');
		}
		});
		// if field is empty afterward, add text again
		$('#entry_1').blur(function()
		{
		if($(this).val()=='')
		{
		$(this).val(clearMePrevious);
		}
		});
		});
		$(document).ready(function(){
		var clearMePrevious1 = '';
		// clear input on focus
		$('#entry_0').focus(function()
		{
		if($(this).val()==$(this).attr('title'))
		{
		clearMePrevious1 = $(this).val();
		$(this).val('');
		}
		});
		// if field is empty afterward, add text again
		$('#entry_0').blur(function()
		{
		if($(this).val()=='')
		{
		$(this).val(clearMePrevious1);
		}
		});
		});
	</script> 
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container">
		<div id="header">
			<div class="topright">
				<? $signedup=$_GET['signedup'];
				if ($signedup==1) {
					echo "<div align=\"center\">Thanks for signing up!</div>";
				} else {
					echo "Sign up for Club Updates<br />
					<form method=\"post\" target=\"hidden_iframe\" onsubmit=\"submitted=true;\" action=\"https://docs.google.com/forms/d/1Kw6uz4FxbXeiHRj5Ar9VHEZNLe2rfxCxqYmYg7-uAQw/formResponse\"> 
						<input id=\"entry_2867180\" type=\"text\" name=\"entry.2867180\" class=\"signupbox_urname\" title=\"Your Name\" value=\"Your Name\" /><input id=\"entry_2337828\" type=\"text\" name=\"entry.2337828\" title=\"Email Address\" value=\"Email Address\" /><input type=\"hidden\" name=\"draftResponse\" value=\"[,,&quot;4586305230657423935&quot;]\" /><input type=\"hidden\" name=\"pageHistory\" value=\"0\" /><input type=\"hidden\" name=\"fbzx\" value=\"4586305230657423935\" />";
if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
	echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" />";
} else {
echo "<input type=\"image\" name=\"submit\" value=\"Submit\" class=\"signupbtn\" src=\"/images/btn_signupbox.gif\" alt=\"Sign Up\" />";
}
					echo "</form>";
				} ?>
			</div>
			<div class="topleft">
				<a title="Home" href="http://www.nchdems.org/index.php"><img alt="North College Hill Democratic Club" border="0" width="100" height="96" src="http://www.nchdems.org/images/nchdems.png" /></a>
			</div>
			<span class="sitetitle">NCH Dems for Progress</span>
		</div>
		<div id="content">
			<div id="navholder">
				<ul class="nav">
					<li class="left"><a href="http://www.nchdems.org/candidates/">Candidates</a></li>
					<li><a href="http://www.nchdems.org/about/">About</a></li>
					<li><a href="http://www.nchdems.org/platform/">Platform</a></li>
					<li><a href="http://www.nchdems.org/history/">History</a></li>
					<li><a href="http://www.nchdems.org/links/">Links</a></li>
					<li class="right"><a href="http://www.nchdems.org/contact/">Contact</a></li>
				</ul>
			</div>