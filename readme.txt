=== RB Site Social Links ===
Contributors: bashirrased
Requires at least: 5.3
Tested up to: 5.8
Requires PHP: 5.6
Stable tag: 1.0.1
Tags: social, media, links, site.
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dynamically add your website's social media links.

== Description ==
Step-1: Install and active our plugin.

Step-2: Go to Setting -> General Page. We have the option to add social media links there.

Step-3: Add your website's social media links.

Step-4: Use these codes to display social media links on your website.

For Facebook Links:
`<a href="<?php echo esc_url(get_option('rb_facebook_link')); ?>">Facebook</a>`

For Twitter Links:
`<a href="<?php echo esc_url(get_option('rb_twitter_link')); ?>">Twitter</a>`

For LinkedIn Links:
`<a href="<?php echo esc_url(get_option('rb_linkedin_link')); ?>">LinkedIn</a>`

For Instagram Links:
`<a href="<?php echo esc_url(get_option('rb_instagram_link')); ?>">Instagram</a>`

For Pinterest Links:
`<a href="<?php echo esc_url(get_option('rb_pinterest_link')); ?>">Pinterest</a>`

For Behance Links:
`<a href="<?php echo esc_url(get_option('rb_behance_link')); ?>">Behance</a>`

For Dribbble Links:
`<a href="<?php echo esc_url(get_option('rb_dribbble_link')); ?>">Dribbble</a>`

For Github Links:
`<a href="<?php echo esc_url(get_option('rb_github_link')); ?>">Github</a>`

For YouTube Links:
`<a href="<?php echo esc_url(get_option('rb_youtube_link')); ?>">YouTube</a>`

For Blogger Links:
`<a href="<?php echo esc_url(get_option('rb_blogger_link')); ?>">Blogger</a>`

For WordPress.com Links:
`<a href="<?php echo esc_url(get_option('rb_wordpress_link')); ?>">WordPress.com</a>`

For CodePen Links:
`<a href="<?php echo esc_url(get_option('rb_codepen_link')); ?>">CodePen</a>`

For Skype Links:
`<div><?php echo esc_html( sprintf( __( 'Skype ID: %s', 'rb-site-social-links' ), get_option( 'rb_skype_link' ) ) ); ?></div>`

== Changelog ==

= 1.0.1 =
* 22.10.2021 - Second submission
* Add Author URI
* View html php codes in plugin description tab
* Add Banner & Icon Images

= 1.0.0 =
* 09.09.2021 - First submission