<?php
/**
 * Plugin Name:       RB Site Social Links
 * Plugin URI:        https://github.com/BashirRased/wp-plugin-rb-site-social-links
 * Description:       RB Site Social Links plugin use for your site social links add.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Tested up to: 6.2
 * Requires PHP: 7.1
 * Author:            Bashir Rased
 * Author URI:        https://profiles.wordpress.org/bashirrased2017/
 * Text Domain:       rb-site-social-links
 * Domain Path: 	  /languages
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://github.com/BashirRased/wp-plugin-rb-site-social-links
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Plugin Text domain loaded
function rb_plugin_textdomain() {
    load_plugin_textdomain('rb-site-social-links', false, dirname(plugin_basename(__FILE__)).'/languages'); 
}
add_action('plugins_loaded', 'rb_plugin_textdomain');

// Redirect Page Link Activated
add_action('activated_plugin', function ($plugin) {
	if (plugin_basename(__FILE__) == $plugin) {
		wp_redirect(admin_url('options-general.php#rb-social-links-section'));
		die();
	}
});

// Settings Page Link
add_filter('plugin_action_links_' . plugin_basename(__FILE__), function ($links) {
	$link = sprintf("<a href='%s' style='color:#b32d2e;'>%s</a>", admin_url('options-general.php#rb-social-links-section'), __('Settings', 'rb-site-social-links'));
	array_push($links, $link);
	return $links;
});

// Github Page Link
add_filter('plugin_row_meta', function ($links, $plugin) {
	if (plugin_basename(__FILE__) == $plugin) {
		$link = sprintf("<a href='%s' style='color:#b32d2e;'>%s</a>", esc_url('https://github.com/BashirRased/wp-plugin-rb-site-social-links'), __('Fork on Github', 'rb-site-social-links'));
		array_push($links, $link);
	}
	return $links;
}, 10, 2);

function rb_site_social_links() {
    add_settings_section(
        'rb_site_social_links_section',
        __('Socail Media Links', 'rb-site-social-links'),
        'rb_site_social_links_section_desc',
        'general'
    );
    
    // Facebook Link Register Here
    add_settings_field(
        'rb_facebook_link',
        __('Facebook Link:', 'rb-site-social-links'),
        'rb_facebook_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_facebook_link"]
    );
    register_setting(
        'general',
        'rb_facebook_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // Twitter Link Register Here
    add_settings_field(
        'rb_twitter_link',
        __('Twitter Link:', 'rb-site-social-links'),
        'rb_twitter_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_twitter_link"]
    );
    register_setting(
        'general',
        'rb_twitter_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // LinkedIn Link Register Here
    add_settings_field(
        'rb_linkedin_link',
        __('LinkedIn Link:', 'rb-site-social-links'),
        'rb_linkedin_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_linkedin_link"]
    );
    register_setting(
        'general',
        'rb_linkedin_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // Instagram Link Register Here
    add_settings_field(
        'rb_instagram_link',
        __('Instagram Link:', 'rb-site-social-links'),
        'rb_instagram_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_instagram_link"]
    );
    register_setting(
        'general',
        'rb_instagram_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // Pinterest Link Register Here
    add_settings_field(
        'rb_pinterest_link',
        __('Pinterest Link:', 'rb-site-social-links'),
        'rb_pinterest_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_pinterest_link"]
    );
    register_setting(
        'general',
        'rb_pinterest_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // Behance Link Register Here
    add_settings_field(
        'rb_behance_link',
        __('Behance Link:', 'rb-site-social-links'),
        'rb_behance_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_behance_link"]
    );
    register_setting(
        'general',
        'rb_behance_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // Dribbble Link Register Here
    add_settings_field(
        'rb_dribbble_link',
        __('Dribbble Link:', 'rb-site-social-links'),
        'rb_dribbble_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_dribbble_link"]
    );
    register_setting(
        'general',
        'rb_dribbble_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // Github Link Register Here
    add_settings_field(
        'rb_github_link',
        __('Github Link:', 'rb-site-social-links'),
        'rb_github_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_github_link"]
    );
    register_setting(
        'general',
        'rb_github_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // YouTube Link Register Here
    add_settings_field(
        'rb_youtube_link',
        __('YouTube Link:', 'rb-site-social-links'),
        'rb_youtube_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_youtube_link"]
    );
    register_setting(
        'general',
        'rb_youtube_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // Blogger Link Register Here
    add_settings_field(
        'rb_blogger_link',
        __('Blogger Link:', 'rb-site-social-links'),
        'rb_blogger_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_blogger_link"]
    );
    register_setting(
        'general',
        'rb_blogger_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // Wordpress.com Link Register Here
    add_settings_field(
        'rb_wordpress_link',
        __('Wordpress.com Link:', 'rb-site-social-links'),
        'rb_wordpress_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_wordpress_link"]
    );
    register_setting(
        'general',
        'rb_wordpress_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // CodePen Link Register Here
    add_settings_field(
        'rb_codepen_link',
        __('CodePen Link:', 'rb-site-social-links'),
        'rb_codepen_link_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_codepen_link"]
    );
    register_setting(
        'general',
        'rb_codepen_link',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );

    // Skype Address Register Here
    add_settings_field(
        'rb_skype_text',
        __('Skype Address:', 'rb-site-social-links'),
        'rb_skype_text_input',
        'general',
        'rb_site_social_links_section',
        ["label_for" => "rb_skype_text"]
    );
    register_setting(
        'general',
        'rb_skype_text',
        array(
            'sanitize_callback' => 'esc_attr',
        )
    );
    
}

function rb_site_social_links_section_desc() {
    printf(__(
        '<p id="rb-social-links-section">%s</p>','rb-site-social-links'),
        'Add your website social media links.', 'rb-site-social-links'
    );
}

// Facebook Link Callback Function Add Here
function rb_facebook_link_input() {
    $rb_site_social_links_option = get_option('rb_facebook_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_facebook_link')); ?> */

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://www.facebook.com/bashir.rased">','rb-site-social-links'),
        'rb_facebook_link',
        'rb_facebook_link',
        $rb_site_social_links_option
    );
}

// Twitter Link Callback Function Add Here
function rb_twitter_link_input() {
    $rb_site_social_links_option = get_option('rb_twitter_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_twitter_link')); ?> */

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://twitter.com/BashirRased">','rb-site-social-links'),
        'rb_twitter_link',
        'rb_twitter_link',
        $rb_site_social_links_option
    );
}

// LinkedIn Link Callback Function Add Here
function rb_linkedin_link_input() {
    $rb_site_social_links_option = get_option('rb_linkedin_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_linkedin_link')); ?> */

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://www.linkedin.com/in/bashir-rased/">','rb-site-social-links'),
        'rb_linkedin_link',
        'rb_linkedin_link',
        $rb_site_social_links_option
    );
}

// Instagram Link Callback Function Add Here
function rb_instagram_link_input() {
    $rb_site_social_links_option = get_option('rb_instagram_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_instagram_link')); ?> */

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://www.instagram.com/md.rashedmollik/">','rb-site-social-links'),
        'rb_instagram_link',
        'rb_instagram_link',
        $rb_site_social_links_option
    );
}

// Pinterest Link Callback Function Add Here
function rb_pinterest_link_input() {
    $rb_site_social_links_option = get_option('rb_pinterest_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_pinterest_link')); ?> */

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://www.pinterest.com/bashirrased2/">','rb-site-social-links'),
        'rb_pinterest_link',
        'rb_pinterest_link',
        $rb_site_social_links_option
    );
}

// Behance Link Callback Function Add Here
function rb_behance_link_input() {
    $rb_site_social_links_option = get_option('rb_behance_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_behance_link')); ?> */

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://www.behance.net/bashirrased2021">','rb-site-social-links'),
        'rb_behance_link',
        'rb_behance_link',
        $rb_site_social_links_option
    );
}

// Dribbble Link Callback Function Add Here
function rb_dribbble_link_input() {
    $rb_site_social_links_option = get_option('rb_dribbble_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_dribbble_link')); ?> */

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://www.dribbble.com/bashirrased2/">','rb-site-social-links'),
        'rb_dribbble_link',
        'rb_dribbble_link',
        $rb_site_social_links_option
    );
}

// Github Link Callback Function Add Here
function rb_github_link_input() {
    $rb_site_social_links_option = get_option('rb_github_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_github_link')); ?> */

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://github.com/BashirRased">','rb-site-social-links'),
        'rb_github_link',
        'rb_github_link',
        $rb_site_social_links_option
    );
}

// YouTube Link Callback Function Add Here
function rb_youtube_link_input() {
    $rb_site_social_links_option = get_option('rb_youtube_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_youtube_link')); ?> */

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://www.youtube.com/channel/UCkaJEqsvmD4gag6gZJQgMkg">','rb-site-social-links'),
        'rb_youtube_link',
        'rb_youtube_link',
        $rb_site_social_links_option
    );
}

// Blogger Link Callback Function Add Here
function rb_blogger_link_input() {
    $rb_site_social_links_option = get_option('rb_blogger_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_blogger_link')); ?> */ 

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://bashirrased.blogspot.com/">','rb-site-social-links'),
        'rb_blogger_link',
        'rb_blogger_link',
        $rb_site_social_links_option
    );
}

// Wordpress.com Link Callback Function Add Here
function rb_wordpress_link_input() {
    $rb_site_social_links_option = get_option('rb_wordpress_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_wordpress_link')); ?> */ 

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://bashirrased2020.wordpress.com/">','rb-site-social-links'),
        'rb_wordpress_link',
        'rb_wordpress_link',
        $rb_site_social_links_option
    );
}

// CodePen Link Callback Function Add Here
function rb_codepen_link_input() {
    $rb_site_social_links_option = get_option('rb_codepen_link');

    /* This code use for frontend page
    <?php echo esc_url(get_option('rb_codepen_link')); ?> */  

    printf(__(
        '<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="https://codepen.io/bashir-rased">','rb-site-social-links'),
        'rb_codepen_link',
        'rb_codepen_link',
        $rb_site_social_links_option
    );
}

// Skype Address Callback Function Add Here
function rb_skype_text_input() {
    $rb_site_social_links_option = get_option('rb_skype_text');

    /* This code use for frontend page
    <?php echo esc_html(printf(__('%s', 'rb-site-social-links'), get_option('rb_skype_text'))); ?> */ 

    printf(__(
        '<input type="text" id="%1$s" class="large-text" name="%2$s" value="%3$s" placeholder="bashir.rased">','rb-site-social-links'),
        'rb_skype_text',
        'rb_skype_text',
        $rb_site_social_links_option
    );
}

add_action('admin_init','rb_site_social_links');