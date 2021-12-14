=== RB Site Social Links ===
Contributors: bashirrased
Requires at least: 5.3
Tested up to: 5.8
Requires PHP: 5.6
Stable tag: 1.0.2
Tags: social, media, links, site.
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dynamically add your website's social media links with WordPress dashboard general setting page.

== Description ==

RB Site Social Links plugin use for dynamically add your website social icon link. You need change only your social icon link href address or social icon text.

### Usage

= For Facebook Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_facebook_link'));`

= For Twitter Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_twitter_link'));`

= For LinkedIn Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_linkedin_link'));`

= For Instagram Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_instagram_link'));`

= For Pinterest Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_pinterest_link'));`

= For Behance Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_behance_link'));`

= For Dribbble Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_dribbble_link'));`

= For Github Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_github_link'));`

= For YouTube Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_youtube_link'));`

= For Blogger Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_blogger_link'));`

= For WordPress.com Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_wordpress_link'));`

= For CodePen Link with a tag element is the href attribute: =
**Add PHP Code: ** `echo esc_url(get_option('rb_codepen_link'));`

= For Skype address: =
**Add PHP Code: ** `echo esc_html(sprintf(__('Skype ID: %s','rb-site-social-links'), get_option( 'rb_skype_text')));`

== Installation ==

### From your WordPress dashboard

= Visit =
Plugins > Add New

= Search =
for "RB Site Social Links"

= Install and Activate =
RB Site Social Links from your Plugins page

= Go to =
Setting -> General Page

= Links add =
Add your website's social media links

== Changelog ==

= 1.0.2 =
* 29.10.2021 - Third version submission
* Plugin URI Add
* Plugin Description change
* Add new plugin tabs 1. Installation

= 1.0.1 =
* 22.10.2021 - Second submission
* Add Author URI
* View html php codes in plugin description tab
* Add Banner & Icon Images

= 1.0.0 =
* 09.09.2021 - First submission