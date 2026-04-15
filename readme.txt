=== RB Site Social Links ===
Contributors: bashirrased2017
Donate link: https://bashir-rased.com/
Requires at least: 6.7
Tested up to:      6.9
Requires PHP:      8.1
Stable tag: 1.0.8
Tags: social links, site links, social media links
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

RB Site Social Links plugin helps you dynamically add and display your website’s social media profile links.

== Description ==

RB Site Social Links allows you to easily add and display social media links on your website.  
Simply enter your social profile URLs in the settings page, and display them anywhere using the function provided.

### ✅ Supported Social Icons
1. **Twitter**
2. **Facebook**
3. **Instagram**
4. **LinkedIn**
5. **Pinterest**
6. **YouTube**
7. **TikTok**
8. **Dribbble**
9. **Behance**
10. **WhatsApp**
11. **GitHub**

### 📌 How to Add the Function in Your Theme

Add this code inside your theme’s **header.php**, **footer.php**, or inside a template file:

	if ( function_exists( 'rb_site_social_links_icon' ) ) {
		rb_site_social_links_icon(
			'socia_icon_menu', // ul ID
			'socia_icon_menu', // ul class
			'socia_icon_item', // li class
			'socia_icon_link'  // a class
		);
	}

You can customize the class names as needed for styling.

== Installation ==

### From your WordPress dashboard

1. Go to **Plugins → Add New**
2. Search for **"RB Site Social Links"**
3. Click **Install**, then **Activate**
4. Go to **Settings → General**
5. Add your social media profile links

== Frequently Asked Questions ==

= Does this plugin require another plugin? =
No. RB Site Social Links works independently. You can display the icons anywhere using the function rb_site_social_links_icon().

== Screenshots ==

1. Settings → General page where social links are added.

== Changelog ==

= 1.0.8 =
* 15.04.2026 – 9th version submission
* Updated Icons

= 1.0.7 =
* 28.11.2025 – 8th version submission
* Removed unused social links
* PHPCS & WPCS code standards applied
* Add Bengali translation

= 1.0.6 =
* 08.04.2025 – 7th version submission
* Removed some social links

= 1.0.5 =
* 21.04.2024 – 6th version submission
* Full plugin revision
* More social icons added
* Connected with RB Theme Helper plugin

= 1.0.4 =
* 29.03.2022 – 5th version submission
* Updated readme.txt

= 1.0.3 =
* 10.12.2021 – 4th version submission
* Fixed Instagram link issue
* Updated readme.txt

= 1.0.2 =
* 29.10.2021 – 3rd version submission
* Added Plugin URI
* Updated plugin description
* Added installation instructions

= 1.0.1 =
* 22.10.2021 – 2nd version submission
* Added Author URI
* Added HTML/PHP examples
* Added banner & icon images

= 1.0.0 =
* 09.09.2021 – First release

== Upgrade Notice ==

= 1.0.5 =
Major update with code improvements, updated instructions, and expanded social icon list.
