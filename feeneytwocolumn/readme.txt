=== Feeney Two Column ===
Contributors: Sean Feeney
Tags: two-columns, right-sidebar, responsive-layout, accessibility-ready, custom-background, custom-colors, custom-header, featured-images
Requires at least: 4.1
Tested up to: 4.1
Stable tag: 4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
A simple two column layout with sidebar on right and custom header.

Features:
* Supports Custom Header and bolds last word of Site Title.
* Allows HTML in Widget Titles.
* Your Google AdSense ads between every post - insert your publisher ID in the Customize WYSIWYG editor.
* Includes common "flat design" social media icons - easily add them through the Customize WYSIWYG editor.
* Font Awesome 4.2.0 icon support. Learn more: http://fontawesome.io/examples/
* Response design adjusts based on viewport size.

== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's ZIP file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= How do I specify custom channel for the AdSense ads? =

1. In your admin panel, go to Appearance -> Editor.
2. Select content.php
3. At the bottom of the file, find the line that says: 
	data-ad-client="<?php echo $mods['adsense_id']; ?>"></ins>
4. Edit it as so, replacing SLOTID with your custom channel number:
	data-ad-client="<?php echo $mods['adsense_id']; ?>" data-ad-slot="SLOTID"></ins>
5. Click Update File

= How do I change the color scheme? =

You can change the colors of your site easily using Twenty Fifteen.

1. In your admin panel, go to Appearance -> Customize.
4. Now you will see the Customizer and a tab called 'Colors'. Click this tab.
5. You can now change your color scheme by selecting one of the predefined ones. Choose a color scheme you want from Base Color Scheme dropdown. You can preview the change in the Customizer.
6. Should you wish to create your own color scheme or modify an existing one, you can by selecting the colors for each area listed.
7. Once you are happy with your color changes you can click save and your changes will be reflected on your live site.

= How do I add the Social Links to the header? =

Feeney Two Column allows you display links to your social media profiles, like Twitter and Facebook, with icons.

1. In your admin panel, go to Appearance -> Customize.
2. Add links to each of your social services using the Social Media Link Settings panel.
3. Click Save & Publish at the top of the Customize bar.
4. Icons for your social links will automatically appear if they're available.

Available icons: (Linking to any of the following sites will automatically display its icon in your social menu).

* LinkedIn
* Twitter
* Facebook
* Google+
* Skype (chat link)

If you'd like to request new social networks, return to Wordpress.org and comment on this theme indicating such.

= How do I change the Skype link to call instead of chat? =

1. In your admin panel, go to Appearance -> Editor.
2. Select header.php
3. Find the line:
	echo '<a title="Skype" href="skype:' . $social['skype_username'] . '?chat">
4. Change the word chat to call and click Update File.
