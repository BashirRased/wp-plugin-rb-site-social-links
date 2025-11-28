<?php
/**
 * Plugin Name:       RB Site Social Links
 * Plugin URI:        https://github.com/BashirRased/wp-plugin-rb-site-social-links
 * Description:       RB Site Social Links plugin allows you to add and manage your site's social links.
 * Version:           1.0.7
 * Requires at least: 6.4
 * Tested up to:      6.7
 * Requires PHP:      7.4
 * PHP Version:       8.2
 * Author:            Bashir Rased
 * Author URI:        https://bashir-rased.com/
 * Text Domain:       rb-site-social-links
 * Domain Path:       /languages
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package RB_Plugins
 * @subpackage RB_Site_Social_Links
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'rb_plugin_textdomain' ) ) {
	/**
	 * Load plugin text domain.
	 *
	 * @return void
	 */
	function rb_plugin_textdomain() {
		load_plugin_textdomain( 'rb-site-social-links', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}
add_action( 'plugins_loaded', 'rb_plugin_textdomain' );

add_filter(
	'plugin_action_links_' . plugin_basename( __FILE__ ),
	function ( $links ) {
		$link    = sprintf(
			'<a href="%s" style="color:#b32d2e;">%s</a>',
			esc_url( admin_url( 'options-general.php#rb-social-links-section' ) ),
			esc_html__( 'Settings', 'rb-site-social-links' )
		);
		$links[] = $link;
		return $links;
	}
);

add_filter(
	'plugin_row_meta',
	function ( $links, $plugin ) {
		if ( plugin_basename( __FILE__ ) === $plugin ) {
			$link    = sprintf(
				'<a href="%s" style="color:#b32d2e;">%s</a>',
				esc_url( 'https://github.com/BashirRased/wp-plugin-rb-site-social-links' ),
				esc_html__( 'Fork on GitHub', 'rb-site-social-links' )
			);
			$links[] = $link;
		}
		return $links;
	},
	10,
	2
);

if ( ! function_exists( 'rb_site_social_links' ) ) {
	/**
	 * Register social links settings fields.
	 *
	 * @return void
	 */
	function rb_site_social_links() {
		add_settings_section(
			'rb_site_social_links_section',
			esc_html__( 'Social Media Links', 'rb-site-social-links' ),
			'rb_site_social_links_section_desc',
			'general'
		);

		$social_links = array(
			'rb_facebook_link'  => array( 'Facebook Link:', 'https://www.facebook.com/bashir.rased' ),
			'rb_twitter_link'   => array( 'Twitter Link:', 'https://twitter.com/' ),
			'rb_instagram_link' => array( 'Instagram Link:', 'https://www.instagram.com/md.rashedmollik/' ),
			'rb_linkedin_link'  => array( 'LinkedIn Link:', 'https://www.linkedin.com/in/bashir-rased/' ),
			'rb_pinterest_link' => array( 'Pinterest Link:', 'https://www.pinterest.com/bashirrased2/' ),
			'rb_youtube_link'   => array( 'YouTube Link:', 'www.youtube.com/@bashirrased4926' ),
			'rb_tiktok_link'    => array( 'TikTok Link:', 'https://www.tiktok.com/@bashirrased' ),
			'rb_dribbble_link'  => array( 'Dribbble Link:', 'https://www.dribbble.com/bashirrased2/' ),
			'rb_behance_link'   => array( 'Behance Link:', 'https://www.behance.net/bashirrased2021' ),
			'rb_whatsapp_link'  => array( 'WhatsApp Link:', 'https://wa.me/8801934109870' ),
			'rb_github_link'    => array( 'GitHub Link:', 'https://github.com/BashirRased' ),
		);

		foreach ( $social_links as $id => $data ) {
			add_settings_field(
				$id,
				esc_html( $data[0] ),
				'rb_site_social_links_input',
				'general',
				'rb_site_social_links_section',
				array(
					'label_for'   => $id,
					'placeholder' => $data[1],
				)
			);

			register_setting(
				'general',
				$id,
				array(
					'sanitize_callback' => 'esc_url_raw',
				)
			);
		}
	}
}
add_action( 'admin_init', 'rb_site_social_links' );

if ( ! function_exists( 'rb_site_social_links_section_desc' ) ) {
	/**
	 * Section description callback.
	 *
	 * @return void
	 */
	function rb_site_social_links_section_desc() {
		printf(
			'<p id="rb-social-links-section">%s</p>',
			esc_html__( 'Add your website social media links.', 'rb-site-social-links' )
		);
	}
}

if ( ! function_exists( 'rb_site_social_links_input' ) ) {
	/**
	 * Render input field for social links.
	 *
	 * @param array $args Input field args.
	 * @return void
	 */
	function rb_site_social_links_input( $args ) {
		$value = get_option( $args['label_for'] );

		printf(
			'<input type="url" id="%1$s" class="large-text code" name="%2$s" value="%3$s" placeholder="%4$s" />',
			esc_attr( $args['label_for'] ),
			esc_attr( $args['label_for'] ),
			esc_url( $value ),
			esc_attr( $args['placeholder'] )
		);
	}
}

/**
 * Enqueue RB icon font files.
 */
function rb_site_social_links_font_enqueue() {
	wp_enqueue_style(
		'rb-site-social-links-icons',
		plugin_dir_url( __FILE__ ) . 'assets/style.css',
		array(),
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'rb_site_social_links_font_enqueue' );

/**
 * Output social icons list.
 *
 * @param string $ul_id     Optional UL ID.
 * @param string $ul_class  Optional UL class.
 * @param string $li_class  Optional LI class.
 * @param string $a_class   Optional link class.
 */
function rb_site_social_links_icon( $ul_id = '', $ul_class = '', $li_class = '', $a_class = '' ) {

	// Social link option keys + matching icon classes.
	$social_icons = array(
		'rb_twitter_link'   => 'rb-twitter-x',
		'rb_facebook_link'  => 'rb-facebook',
		'rb_instagram_link' => 'rb-instagram',
		'rb_pinterest_link' => 'rb-pinterest',
		'rb_linkedin_link'  => 'rb-linkedin',
		'rb_youtube_link'   => 'rb-youtube',
		'rb_behance_link'   => 'rb-behance',
		'rb_dribbble_link'  => 'rb-dribbble',
		'rb_github_link'    => 'rb-github',
		'rb_whatsapp_link'  => 'rb-whatsapp',
		'rb_tiktok_link'    => 'rb-tiktok',
	);

	// Filter only fields with values.
	$active_links = array_filter(
		$social_icons,
		function ( $icon, $option ) {
			return ! empty( get_option( $option ) );
		},
		ARRAY_FILTER_USE_BOTH
	);

	// Nothing to output.
	if ( empty( $active_links ) ) {
		return;
	}

	// Start UL.
	echo '<ul'
		. ( $ul_id ? ' id="' . esc_attr( $ul_id ) . '"' : '' )
		. ( $ul_class ? ' class="' . esc_attr( $ul_class ) . '"' : '' )
		. '>';

	// Loop through each active social link.
	foreach ( $active_links as $option => $icon_class ) {

		$url = get_option( $option );

		echo '<li' . ( $li_class ? ' class="' . esc_attr( $li_class ) . '"' : '' ) . '>';

		echo '<a href="' . esc_url( $url ) . '" target="_blank"'
			. ( $a_class ? ' class="' . esc_attr( $a_class ) . '"' : '' )
			. '>';

		echo '<i class="rb-icons ' . esc_attr( $icon_class ) . '"></i>';

		echo '</a>';

		echo '</li>';
	}

	echo '</ul>';
}
